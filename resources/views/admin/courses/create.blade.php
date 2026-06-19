@extends('layouts.admin')

@section('content')
<div class="mb-4">
    <h2 class="fw-bold mb-1">Add Course</h2>
    <a href="{{ route('admin.courses.index') }}" class="text-secondary text-sm text-decoration-none">&larr; Back to Courses</a>
</div>

<div class="card border-0 shadow-sm rounded-3 bg-white p-4">
    <form action="{{ route('admin.courses.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="row g-3">
            <div class="col-md-6">
                <label for="name" class="form-label fw-semibold">Course Name</label>
                <input type="text" class="form-control rounded-3" id="name" name="name" required placeholder="e.g. PHP Web Development">
            </div>
            
            <div class="col-md-6">
                <label for="slug" class="form-label fw-semibold">SEO URL Slug</label>
                <input type="text" class="form-control rounded-3" id="slug" name="slug" required placeholder="e.g. php-training-gorakhpur">
            </div>

            <div class="col-md-4">
                <label for="duration" class="form-label fw-semibold">Duration</label>
                <input type="text" class="form-control rounded-3" id="duration" name="duration" required placeholder="e.g. 2 Months">
            </div>

            <div class="col-md-4">
                <label for="eligibility" class="form-label fw-semibold">Eligibility</label>
                <input type="text" class="form-control rounded-3" id="eligibility" name="eligibility" required placeholder="e.g. BCA, B.Tech, MCA">
            </div>

            <div class="col-md-4">
                <label for="fees" class="form-label fw-semibold">Fees (INR)</label>
                <input type="number" class="form-control rounded-3" id="fees" name="fees" required placeholder="e.g. 6500">
            </div>

            <div class="col-md-6">
                <label for="image_file" class="form-label fw-semibold">Course Cover Image</label>
                <input type="file" class="form-control rounded-3" id="image_file" name="image_file">
            </div>

            <div class="col-md-6 d-flex align-items-center mt-lg-5">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="is_popular" name="is_popular" value="1">
                    <label class="form-check-label fw-semibold" for="is_popular">
                        Mark as Popular Course (Show on Home Page)
                    </label>
                </div>
            </div>

            <div class="col-md-6">
                <label for="certification" class="form-label fw-semibold">Certification Details</label>
                <textarea class="form-control rounded-3" id="certification" name="certification" rows="3" placeholder="Description of verification certificates..."></textarea>
            </div>

            <div class="col-md-6">
                <label for="placement" class="form-label fw-semibold">Placement Guarantee Details</label>
                <textarea class="form-control rounded-3" id="placement" name="placement" rows="3" placeholder="Recruitment support, mock interview descriptions..."></textarea>
            </div>

            <div class="col-12">
                <hr class="my-4">
                <h5 class="fw-bold mb-3">Structured Curriculum JSON Input</h5>
            </div>

            <div class="col-md-6">
                <label for="syllabus" class="form-label fw-semibold">Syllabus Chapters Array (JSON format)</label>
                <textarea class="form-control rounded-3 text-monospace" id="syllabus" name="syllabus" rows="5" placeholder='[
  {"title": "Core Chapters", "topics": ["Introduction", "Syntax", "Variables"]}
]'></textarea>
                <small class="text-secondary">Provide valid JSON array. Double quotes only.</small>
            </div>

            <div class="col-md-6">
                <label for="projects" class="form-label fw-semibold">Capstone Projects (JSON format)</label>
                <textarea class="form-control rounded-3 text-monospace" id="projects" name="projects" rows="5" placeholder='[
  "Project 1 (E-Commerce portal)",
  "Project 2 (College Management System)"
]'></textarea>
                <small class="text-secondary">Provide valid JSON array of project titles.</small>
            </div>

            <div class="col-md-6">
                <label for="faq" class="form-label fw-semibold">Course FAQs (JSON format)</label>
                <textarea class="form-control rounded-3 text-monospace" id="faq" name="faq" rows="5" placeholder='[
  {"question": "What is the requirement?", "answer": "Nothing, we teach from scratch"}
]'></textarea>
            </div>

            <div class="col-md-6">
                <label for="reviews" class="form-label fw-semibold">Student Reviews (JSON format)</label>
                <textarea class="form-control rounded-3 text-monospace" id="reviews" name="reviews" rows="5" placeholder='[
  {"student": "Aditya Verma", "rating": 5, "text": "Learned complex systems code details easily"}
]'></textarea>
            </div>

            <div class="col-12 text-end mt-4">
                <button type="submit" class="btn btn-primary px-4 py-2 rounded-3">Save Course</button>
            </div>
        </div>
    </form>
</div>
@endsection
