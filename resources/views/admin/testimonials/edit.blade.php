@extends('layouts.admin')

@section('content')
<div class="mb-4">
    <h2 class="fw-bold mb-1">Edit Testimonial: {{ $testimonial->student_name }}</h2>
    <a href="{{ route('admin.testimonials.index') }}" class="text-secondary text-sm text-decoration-none">&larr; Back to Testimonials</a>
</div>

<div class="card border-0 shadow-sm rounded-3 bg-white p-4">
    <form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="row g-3">
            <div class="col-md-6">
                <label for="student_name" class="form-label fw-semibold">Student Name</label>
                <input type="text" class="form-control rounded-3" id="student_name" name="student_name" required value="{{ $testimonial->student_name }}">
            </div>
            
            <div class="col-md-6">
                <label for="course_name" class="form-label fw-semibold">Course Name</label>
                <input type="text" class="form-control rounded-3" id="course_name" name="course_name" required value="{{ $testimonial->course_name }}">
            </div>

            <div class="col-md-6">
                <label for="company_name" class="form-label fw-semibold">Company Placed</label>
                <input type="text" class="form-control rounded-3" id="company_name" name="company_name" value="{{ $testimonial->company_name }}">
            </div>

            <div class="col-md-3">
                <label for="rating" class="form-label fw-semibold">Rating</label>
                <select class="form-select rounded-3" id="rating" name="rating" required>
                    <option value="5" {{ $testimonial->rating == 5 ? 'selected' : '' }}>5 Stars</option>
                    <option value="4" {{ $testimonial->rating == 4 ? 'selected' : '' }}>4 Stars</option>
                    <option value="3" {{ $testimonial->rating == 3 ? 'selected' : '' }}>3 Stars</option>
                    <option value="2" {{ $testimonial->rating == 2 ? 'selected' : '' }}>2 Stars</option>
                    <option value="1" {{ $testimonial->rating == 1 ? 'selected' : '' }}>1 Star</option>
                </select>
            </div>

            <div class="col-md-3">
                <label for="student_image_file" class="form-label fw-semibold">Student Avatar Image</label>
                <input type="file" class="form-control rounded-3" id="student_image_file" name="student_image_file">
            </div>

            <div class="col-12">
                <label for="review_text" class="form-label fw-semibold">Feedback / Review Text</label>
                <textarea class="form-control rounded-3" id="review_text" name="review_text" rows="5" required>{{ $testimonial->review_text }}</textarea>
            </div>

            <div class="col-12 text-end mt-4">
                <button type="submit" class="btn btn-primary px-4 py-2 rounded-3">Update Testimonial</button>
            </div>
        </div>
    </form>
</div>
@endsection
