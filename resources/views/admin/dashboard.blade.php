@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold mb-1">Dashboard</h2>
        <p class="text-secondary mb-0">Overview of website activities and catalog databases.</p>
    </div>
    <a href="{{ route('admin.backup') }}" class="btn btn-primary px-3 rounded-3">Exporter Database Backup (.sql)</a>
</div>

<!-- Statistics Cards -->
<div class="row g-4 mb-5">
    <div class="col-md-3">
        <div class="card border-0 shadow-sm rounded-3 p-4 bg-white h-100">
            <small class="text-secondary text-uppercase fw-semibold mb-1">Courses Offered</small>
            <div class="d-flex justify-content-between align-items-end">
                <span class="fs-2 fw-bold text-dark">{{ $coursesCount }}</span>
                <a href="{{ route('admin.courses.index') }}" class="text-primary text-sm text-decoration-none">Manage</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border-0 shadow-sm rounded-3 p-4 bg-white h-100">
            <small class="text-secondary text-uppercase fw-semibold mb-1">Blogs Published</small>
            <div class="d-flex justify-content-between align-items-end">
                <span class="fs-2 fw-bold text-dark">{{ $blogsCount }}</span>
                <a href="{{ route('admin.blogs.index') }}" class="text-primary text-sm text-decoration-none">Manage</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border-0 shadow-sm rounded-3 p-4 bg-white h-100">
            <small class="text-secondary text-uppercase fw-semibold mb-1">Gallery Photos</small>
            <div class="d-flex justify-content-between align-items-end">
                <span class="fs-2 fw-bold text-dark">{{ $galleryCount }}</span>
                <a href="{{ route('admin.gallery.index') }}" class="text-primary text-sm text-decoration-none">Manage</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border-0 shadow-sm rounded-3 p-4 bg-white h-100">
            <small class="text-secondary text-uppercase fw-semibold mb-1">Unread Queries</small>
            <div class="d-flex justify-content-between align-items-end">
                <span class="fs-2 fw-bold {{ $unreadMessagesCount > 0 ? 'text-danger' : 'text-dark' }}">{{ $unreadMessagesCount }}</span>
                <a href="{{ route('admin.messages.index') }}" class="text-primary text-sm text-decoration-none">View All</a>
            </div>
        </div>
    </div>
</div>

<!-- Unread/Recent Inquiry Logs -->
<div class="card border-0 shadow-sm rounded-3 bg-white p-4">
    <h5 class="fw-bold mb-3">Recent Inquiries &amp; Messages</h5>
    <div class="table-responsive">
        <table class="table align-middle">
            <thead>
                <tr class="text-secondary text-sm">
                    <th>Student Details</th>
                    <th>Selected Course</th>
                    <th>Message Excerpt</th>
                    <th>Submitted At</th>
                    <th>Status</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($latestMessages as $m)
                    <tr>
                        <td>
                            <strong class="d-block">{{ $m->name }}</strong>
                            <small class="text-secondary">{{ $m->phone }} | {{ $m->email }}</small>
                        </td>
                        <td>
                            <span class="badge bg-secondary bg-opacity-10 text-secondary">{{ $m->course ?? 'General Inquire' }}</span>
                        </td>
                        <td>
                            <p class="mb-0 text-truncate text-sm" style="max-width: 250px;">{{ $m->message }}</p>
                        </td>
                        <td>
                            <small class="text-secondary">{{ $m->created_at->format('M d, Y h:i A') }}</small>
                        </td>
                        <td>
                            @if($m->is_read)
                                <span class="badge bg-success rounded-pill px-2">Read</span>
                            @else
                                <span class="badge bg-danger rounded-pill px-2">New</span>
                            @endif
                        </td>
                        <td class="text-end">
                            <div class="d-flex gap-2 justify-content-end">
                                @if(!$m->is_read)
                                    <form action="{{ route('admin.messages.read', $m->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-outline-success">Mark Read</button>
                                    </form>
                                @endif
                                <form action="{{ route('admin.messages.destroy', $m->id) }}" method="POST" onsubmit="return confirm('Delete message permanently?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-4 text-secondary">No inquiries submitted yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
