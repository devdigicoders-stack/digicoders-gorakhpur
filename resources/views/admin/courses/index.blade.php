@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold mb-1">Manage Courses</h2>
        <p class="text-secondary mb-0">Modify, add or remove courses from the catalogue.</p>
    </div>
    <a href="{{ route('admin.courses.create') }}" class="btn btn-primary px-3 rounded-3">Add New Course</a>
</div>

<div class="card border-0 shadow-sm rounded-3 bg-white p-4">
    <div class="table-responsive">
        <table class="table align-middle">
            <thead>
                <tr class="text-secondary text-sm">
                    <th>Course Name</th>
                    <th>Slug URL</th>
                    <th>Duration</th>
                    <th>Fees</th>
                    <th>Popular Status</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($courses as $c)
                    <tr>
                        <td>
                            <strong class="d-block">{{ $c->name }}</strong>
                            <small class="text-secondary">Eligibility: {{ $c->eligibility }}</small>
                        </td>
                        <td>
                            <code class="text-sm">/{{ $c->slug }}</code>
                        </td>
                        <td>{{ $c->duration }}</td>
                        <td>&#8377; {{ number_format($c->fees) }}</td>
                        <td>
                            @if($c->is_popular)
                                <span class="badge bg-primary rounded-pill px-2">Popular</span>
                            @else
                                <span class="badge bg-secondary rounded-pill px-2">Regular</span>
                            @endif
                        </td>
                        <td class="text-end">
                            <div class="d-flex gap-2 justify-content-end">
                                <a href="{{ route('admin.courses.edit', $c->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                <form action="{{ route('admin.courses.destroy', $c->id) }}" method="POST" onsubmit="return confirm('Delete course permanently?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-4 text-secondary">No courses stored. Add a course to get started.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
