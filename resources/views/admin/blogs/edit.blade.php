@extends('layouts.admin')

@section('content')
<div class="mb-4">
    <h2 class="fw-bold mb-1">Edit Blog Post: {{ $blog->title }}</h2>
    <a href="{{ route('admin.blogs.index') }}" class="text-secondary text-sm text-decoration-none">&larr; Back to Blogs</a>
</div>

<div class="card border-0 shadow-sm rounded-3 bg-white p-4">
    <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="row g-3">
            <div class="col-md-6">
                <label for="title" class="form-label fw-semibold">Blog Title</label>
                <input type="text" class="form-control rounded-3" id="title" name="title" required value="{{ $blog->title }}">
            </div>
            
            <div class="col-md-6">
                <label for="slug" class="form-label fw-semibold">SEO URL Slug</label>
                <input type="text" class="form-control rounded-3" id="slug" name="slug" required value="{{ $blog->slug }}">
            </div>

            <div class="col-md-4">
                <label for="category" class="form-label fw-semibold">Category</label>
                <input type="text" class="form-control rounded-3" id="category" name="category" required value="{{ $blog->category }}">
            </div>

            <div class="col-md-4">
                <label for="featured_image_file" class="form-label fw-semibold">Featured Image</label>
                <input type="file" class="form-control rounded-3" id="featured_image_file" name="featured_image_file">
                @if($blog->featured_image)
                    <small class="text-secondary d-block mt-1">Current: <a href="{{ asset($blog->featured_image) }}" target="_blank">{{ $blog->featured_image }}</a></small>
                @endif
            </div>

            <div class="col-md-4">
                <label for="status" class="form-label fw-semibold">Publishing Status</label>
                <select class="form-select rounded-3" id="status" name="status" required>
                    <option value="published" {{ $blog->status === 'published' ? 'selected' : '' }}>Published</option>
                    <option value="draft" {{ $blog->status === 'draft' ? 'selected' : '' }}>Draft</option>
                </select>
            </div>

            <div class="col-12">
                <label for="content" class="form-label fw-semibold">Blog Content</label>
                <textarea class="form-control rounded-3" id="content" name="content" rows="8" required>{{ $blog->content }}</textarea>
            </div>

            <div class="col-12">
                <hr class="my-4">
                <h5 class="fw-bold mb-3">SEO Optimization Meta Fields</h5>
            </div>

            <div class="col-md-6">
                <label for="seo_title" class="form-label fw-semibold">SEO Meta Title</label>
                <input type="text" class="form-control rounded-3" id="seo_title" name="seo_title" value="{{ $blog->seo_title }}">
            </div>

            <div class="col-md-6">
                <label for="seo_keywords" class="form-label fw-semibold">SEO Meta Keywords</label>
                <input type="text" class="form-control rounded-3" id="seo_keywords" name="seo_keywords" value="{{ $blog->seo_keywords }}">
            </div>

            <div class="col-12">
                <label for="seo_description" class="form-label fw-semibold">SEO Meta Description</label>
                <textarea class="form-control rounded-3" id="seo_description" name="seo_description" rows="3">{{ $blog->seo_description }}</textarea>
            </div>

            <div class="col-12 text-end mt-4">
                <button type="submit" class="btn btn-primary px-4 py-2 rounded-3">Update Post</button>
            </div>
        </div>
    </form>
</div>
@endsection
