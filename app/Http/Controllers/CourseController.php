<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Seo;
use App\Models\Setting;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function index(): View
    {
        $courses = Course::all();
        $settings = Setting::pluck('value', 'key')->all();
        $seo = Seo::where('page_name', 'courses')->first();

        return view('courses', compact('courses', 'settings', 'seo'));
    }

    public function show(string $slug): View
    {
        $course = Course::where('slug', $slug)->firstOrFail();
        $settings = Setting::pluck('value', 'key')->all();

        // Dynamically build SEO metadata for the course page
        $seo = new Seo([
            'meta_title' => $course->name.' in Gorakhpur | Best Industrial Training - DigiCoders',
            'meta_description' => 'Enroll in our '.$course->duration.' '.$course->name.' at Gorakhpur. Course covers: '.implode(', ', array_map(fn ($item) => $item['title'], $course->syllabus ?? [])).'. 100% Practical and Placements.',
            'meta_keywords' => $course->name.' Gorakhpur, Best IT Training Institute in Gorakhpur, Industrial Training, '.str_replace(' Training', '', $course->name).' training classes',
            'og_image' => $course->image ?? 'assets/images/seo/courses-og.webp',
        ]);

        // Fetch other courses for related courses section
        $relatedCourses = Course::where('id', '!=', $course->id)->take(3)->get();

        return view('course-detail', compact('course', 'settings', 'seo', 'relatedCourses'));
    }
}
