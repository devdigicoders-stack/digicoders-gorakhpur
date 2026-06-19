@extends('layouts.admin')

@section('content')
<div class="mb-4">
    <h2 class="fw-bold mb-1">Edit FAQ</h2>
    <a href="{{ route('admin.faqs.index') }}" class="text-secondary text-sm text-decoration-none">&larr; Back to FAQs</a>
</div>

<div class="card border-0 shadow-sm rounded-3 bg-white p-4">
    <form action="{{ route('admin.faqs.update', $faq->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="row g-3">
            <div class="col-md-8">
                <label for="question" class="form-label fw-semibold">Question</label>
                <input type="text" class="form-control rounded-3" id="question" name="question" required value="{{ $faq->question }}">
            </div>
            
            <div class="col-md-4">
                <label for="category" class="form-label fw-semibold">Category Tag</label>
                <input type="text" class="form-control rounded-3" id="category" name="category" required value="{{ $faq->category }}">
            </div>

            <div class="col-12">
                <label for="answer" class="form-label fw-semibold">Answer Text</label>
                <textarea class="form-control rounded-3" id="answer" name="answer" rows="5" required>{{ $faq->answer }}</textarea>
            </div>

            <div class="col-12 text-end mt-4">
                <button type="submit" class="btn btn-primary px-4 py-2 rounded-3">Update FAQ</button>
            </div>
        </div>
    </form>
</div>
@endsection
