@extends('layouts.admin')

@section('content')
<div class="mb-4">
    <h2 class="fw-bold mb-1">Add FAQ</h2>
    <a href="{{ route('admin.faqs.index') }}" class="text-secondary text-sm text-decoration-none">&larr; Back to FAQs</a>
</div>

<div class="card border-0 shadow-sm rounded-3 bg-white p-4">
    <form action="{{ route('admin.faqs.store') }}" method="POST">
        @csrf
        
        <div class="row g-3">
            <div class="col-md-8">
                <label for="question" class="form-label fw-semibold">Question</label>
                <input type="text" class="form-control rounded-3" id="question" name="question" required placeholder="e.g. Do you provide placement support?">
            </div>
            
            <div class="col-md-4">
                <label for="category" class="form-label fw-semibold">Category Tag</label>
                <input type="text" class="form-control rounded-3" id="category" name="category" required value="general" placeholder="e.g. general, course">
            </div>

            <div class="col-12">
                <label for="answer" class="form-label fw-semibold">Answer Text</label>
                <textarea class="form-control rounded-3" id="answer" name="answer" rows="5" required placeholder="Provide clear explanation answer here..."></textarea>
            </div>

            <div class="col-12 text-end mt-4">
                <button type="submit" class="btn btn-primary px-4 py-2 rounded-3">Save FAQ</button>
            </div>
        </div>
    </form>
</div>
@endsection
