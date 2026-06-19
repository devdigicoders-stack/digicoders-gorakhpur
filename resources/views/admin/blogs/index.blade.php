@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold mb-1">Manage Blogs</h2>
        <p class="text-secondary mb-0">Write articles, update details, or delete posts from the list.</p>
    </div>
    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary px-3 rounded-3">Create New Blog Post</a>
</div>

<div class="card border-0 shadow-sm rounded-3 bg-white p-4">
    <div class="table-responsive">
        <table class="table align-middle">
            <thead>
                <tr class="text-secondary text-sm">
                    <th>Blog Title</th>
                    <th>Category</th>
                    <th>Slug URL</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($blogs as $b)
                    <tr>
                        <td>
                            <strong class="d-block">{{ $b->title }}</strong>
                        </td>
                        <td>
                            <span class="badge bg-secondary bg-opacity-10 text-secondary">{{ $b->category }}</span>
                        </td>
                        <td>
                            <code class="text-sm">/blog/{{ $b->slug }}</code>
                        </td>
                        <td>
                            @if($b->status === 'published')
                                <span class="badge bg-success rounded-pill px-2">Published</span>
                            @else
                                <span class="badge bg-warning rounded-pill px-2">Draft</span>
                            @endif
                        </td>
                        <td>
                            <small class="text-secondary text-xs">{{ $b->created_at->format('M d, Y') }}</small>
                        </td>
                        <td class="text-end">
                            <div class="d-flex gap-2 justify-content-end">
                                <a href="{{ route('admin.blogs.edit', $b->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                <form action="{{ route('admin.blogs.destroy', $b->id) }}" method="POST" onsubmit="return confirm('Delete blog post permanently?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-4 text-secondary">No blog posts stored. Create one to get started.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
