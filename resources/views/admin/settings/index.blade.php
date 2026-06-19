@extends('layouts.admin')

@section('content')
<div class="mb-4">
    <h2 class="fw-bold mb-1">Global Site Configurations</h2>
    <p class="text-secondary mb-0">Modify shared contact coordinates, address lines, maps, and social profiles.</p>
</div>

<div class="card border-0 shadow-sm rounded-3 bg-white p-4">
    <form action="{{ route('admin.settings.update') }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="row g-3">
            <div class="col-md-6">
                <label for="site_name" class="form-label fw-semibold">Company Name</label>
                <input type="text" class="form-control rounded-3" id="site_name" name="site_name" required value="{{ $settings['site_name'] ?? '' }}">
            </div>
            
            <div class="col-md-6">
                <label for="site_title" class="form-label fw-semibold">Global Site Title</label>
                <input type="text" class="form-control rounded-3" id="site_title" name="site_title" required value="{{ $settings['site_title'] ?? '' }}">
            </div>

            <div class="col-md-6">
                <label for="contact_phone" class="form-label fw-semibold">Contact Mobile Number</label>
                <input type="text" class="form-control rounded-3" id="contact_phone" name="contact_phone" required value="{{ $settings['contact_phone'] ?? '' }}">
            </div>

            <div class="col-md-6">
                <label for="contact_email" class="form-label fw-semibold">Contact Inquiry Email</label>
                <input type="email" class="form-control rounded-3" id="contact_email" name="contact_email" required value="{{ $settings['contact_email'] ?? '' }}">
            </div>

            <div class="col-12">
                <label for="contact_address" class="form-label fw-semibold">Physical Address Lines</label>
                <textarea class="form-control rounded-3" id="contact_address" name="contact_address" rows="2" required>{{ $settings['contact_address'] ?? '' }}</textarea>
            </div>

            <div class="col-12">
                <label for="google_map_embed" class="form-label fw-semibold">Google Map IFrame URL (src attribute only)</label>
                <textarea class="form-control rounded-3 text-sm" id="google_map_embed" name="google_map_embed" rows="3" required>{{ $settings['google_map_embed'] ?? '' }}</textarea>
                <small class="text-secondary">Provide only the URL from the iframe src attribute (starts with https://www.google.com/maps/embed?...)</small>
            </div>

            <div class="col-12">
                <hr class="my-4">
                <h5 class="fw-bold mb-3">Corporate Social Media Channels</h5>
            </div>

            <div class="col-md-6">
                <label for="facebook_url" class="form-label fw-semibold">Facebook Page URL</label>
                <input type="url" class="form-control rounded-3" id="facebook_url" name="facebook_url" value="{{ $settings['facebook_url'] ?? '' }}">
            </div>

            <div class="col-md-6">
                <label for="instagram_url" class="form-label fw-semibold">Instagram Profile URL</label>
                <input type="url" class="form-control rounded-3" id="instagram_url" name="instagram_url" value="{{ $settings['instagram_url'] ?? '' }}">
            </div>

            <div class="col-md-6">
                <label for="linkedin_url" class="form-label fw-semibold">LinkedIn Company Profile URL</label>
                <input type="url" class="form-control rounded-3" id="linkedin_url" name="linkedin_url" value="{{ $settings['linkedin_url'] ?? '' }}">
            </div>

            <div class="col-md-6">
                <label for="youtube_url" class="form-label fw-semibold">YouTube Channel URL</label>
                <input type="url" class="form-control rounded-3" id="youtube_url" name="youtube_url" value="{{ $settings['youtube_url'] ?? '' }}">
            </div>

            <div class="col-12 text-end mt-4">
                <button type="submit" class="btn btn-primary px-4 py-2 rounded-3">Update Configurations</button>
            </div>
        </div>
    </form>
</div>
@endsection
