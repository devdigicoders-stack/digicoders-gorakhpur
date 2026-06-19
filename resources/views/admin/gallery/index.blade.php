@extends('layouts.admin')

@section('content')
<div class="mb-4">
    <h2 class="fw-bold mb-1">Manage Gallery</h2>
    <p class="text-secondary mb-0">Upload event pictures, list categories, and remove outdated graphics.</p>
</div>

<div class="row g-4">
    <!-- Upload Form -->
    <div class="col-lg-4">
        <div class="card border-0 shadow-sm rounded-3 bg-white p-4">
            <h5 class="fw-bold mb-3">Upload Image</h5>
            <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label fw-semibold">Event / Caption Title</label>
                    <input type="text" class="form-control rounded-3" id="title" name="title" placeholder="e.g. Students in lab">
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label fw-semibold">Category Tag</label>
                    <select class="form-select rounded-3" id="category" name="category" required>
                        <option value="training">Training</option>
                        <option value="placement">Placement</option>
                        <option value="campus">Campus</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="image_file" class="form-label fw-semibold">Choose Photo</label>
                    <input type="file" class="form-control rounded-3" id="image_file" name="image_file" required>
                </div>
                <button type="submit" class="btn btn-primary w-100 py-2 rounded-3">Upload Image</button>
            </form>
        </div>
    </div>

    <!-- Gallery Grid -->
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm rounded-3 bg-white p-4">
            <h5 class="fw-bold mb-3">Uploaded Photos</h5>
            <div class="row g-3">
                @forelse($items as $i)
                    <div class="col-sm-6 col-md-4">
                        <div class="border rounded p-2 text-center position-relative h-100 d-flex flex-column justify-content-between">
                            <div class="bg-light d-flex align-items-center justify-content-center text-secondary mb-2" style="height: 120px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
                                  <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                  <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
                                </svg>
                            </div>
                            <div>
                                <small class="badge bg-secondary text-xs uppercase mb-1 d-inline-block">{{ $i->category }}</small>
                                <span class="d-block text-truncate fw-bold text-sm mb-2" title="{{ $i->title }}">{{ $i->title ?? 'Campus event' }}</span>
                            </div>
                            <form action="{{ route('admin.gallery.destroy', $i->id) }}" method="POST" onsubmit="return confirm('Delete photo permanently?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger w-100 mt-2">Remove</button>
                            </form>
                        </div>
                    </div>
                @empty
                    <p class="text-secondary text-center w-100 py-4">No photos uploaded yet.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
