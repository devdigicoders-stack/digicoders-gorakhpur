<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function submit(Request $request): JsonResponse
    {
        // 1. Validation with Custom Messages
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'required|string|regex:/^[0-9]{10}$/',
            'course' => 'nullable|string|max:150',
            'message' => 'required|string|max:1000',
        ], [
            'phone.regex' => 'Please provide a valid 10-digit mobile number.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()->all(),
            ], 422);
        }

        // 2. XSS Protection & Sanitization
        $sanitized = [
            'name' => strip_tags($request->input('name')),
            'email' => filter_var($request->input('email'), FILTER_SANITIZE_EMAIL),
            'phone' => strip_tags($request->input('phone')),
            'course' => strip_tags($request->input('course')),
            'message' => strip_tags($request->input('message')),
        ];

        // 3. Database Insertion (SQL Injection protected via Eloquent binding)
        $contact = Contact::create($sanitized);

        // 4. Send Email Notification (Logged locally to storage/logs/laravel.log)
        try {
            $emailBody = "New Inquiry received on DigiCoders Technologies:\n\n";
            $emailBody .= 'Name: '.$sanitized['name']."\n";
            $emailBody .= 'Email: '.$sanitized['email']."\n";
            $emailBody .= 'Phone: '.$sanitized['phone']."\n";
            $emailBody .= 'Course: '.($sanitized['course'] ?? 'N/A')."\n";
            $emailBody .= 'Message: '.$sanitized['message']."\n";

            // Write notification directly to log system mimicking mail trigger
            Log::info("CONTACT_FORM_EMAIL_NOTIFICATION:\n".$emailBody);
        } catch (\Exception $e) {
            Log::error('Failed to trigger mock contact email: '.$e->getMessage());
        }

        // 5. Respond to front-end for animation activation
        return response()->json([
            'success' => true,
            'message' => 'Thank you! Your query has been recorded. Our team will contact you shortly.',
        ], 200);
    }
}
