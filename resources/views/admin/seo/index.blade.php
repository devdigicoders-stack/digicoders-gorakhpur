@extends('layouts.admin')

@section('content')
<div class="mb-4">
    <h2 class="fw-bold mb-1">Manage Page SEO Metadata</h2>
    <p class="text-secondary mb-0">Modify search engine headers, dynamic descriptions, and social graph cards.</p>
</div>

<div class="row g-4">
    @foreach($seos as $seo)
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm rounded-3 bg-white p-4 h-100 d-flex flex-column justify-content-between">
                <div>
                    <span class="badge bg-primary text-uppercase px-3 py-1 rounded-pill mb-3">{{ $seo->page_name }} Page</span>
                    <form action="{{ route('admin.seo.update', $seo->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="meta_title_{{ $seo->id }}" class="form-label text-sm fw-semibold text-secondary">Meta Title</label>
                            <input type="text" class="form-control rounded-3" id="meta_title_{{ $seo->id }}" name="meta_title" required value="{{ $seo->meta_title }}">
                        </div>
                        <div class="mb-3">
                            <label for="meta_keywords_{{ $seo->id }}" class="form-label text-sm fw-semibold text-secondary">Meta Keywords</label>
                            <input type="text" class="form-control rounded-3" id="meta_keywords_{{ $seo->id }}" name="meta_keywords" required value="{{ $seo->meta_keywords }}">
                        </div>
                        <div class="mb-3">
                            <label for="meta_description_{{ $seo->id }}" class="form-label text-sm fw-semibold text-secondary">Meta Description</label>
                            <textarea class="form-control rounded-3" id="meta_description_{{ $seo->id }}" name="meta_description" rows="3" required>{{ $seo->meta_description }}</textarea>
                        </div>
                        <div class="mb-4">
                            <label for="og_image_file_{{ $seo->id }}" class="form-label text-sm fw-semibold text-secondary">Open Graph Image (Social Cover)</label>
                            <input type="file" class="form-control rounded-3" id="og_image_file_{{ $seo->id }}" name="og_image_file">
                            @if($seo->og_image)
                                <small class="text-secondary d-block mt-1">Current: <a href="{{ asset($seo->og_image) }}" target="_blank">{{ $seo->og_image }}</a></small>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-outline-primary w-100 rounded-3">Update {{ ucfirst($seo->page_name) }} SEO</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
