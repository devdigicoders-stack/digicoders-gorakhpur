@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold mb-1">Manage Testimonials</h2>
        <p class="text-secondary mb-0">List student feedback, ratings, and placed company credentials.</p>
    </div>
    <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary px-3 rounded-3">Add Testimonial</a>
</div>

<div class="card border-0 shadow-sm rounded-3 bg-white p-4">
    <div class="table-responsive">
        <table class="table align-middle">
            <thead>
                <tr class="text-secondary text-sm">
                    <th>Student Name</th>
                    <th>Course Name</th>
                    <th>Company Placed</th>
                    <th>Rating</th>
                    <th>Feedback Text</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($testimonials as $t)
                    <tr>
                        <td><strong>{{ $t->student_name }}</strong></td>
                        <td>{{ $t->course_name }}</td>
                        <td>{{ $t->company_name ?? 'N/A' }}</td>
                        <td><span class="text-warning">★ {{ $t->rating }}/5</span></td>
                        <td>
                            <p class="mb-0 text-truncate text-sm" style="max-width: 300px;" title="{{ $t->review_text }}">{{ $t->review_text }}</p>
                        </td>
                        <td class="text-end">
                            <div class="d-flex gap-2 justify-content-end">
                                <a href="{{ route('admin.testimonials.edit', $t->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                <form action="{{ route('admin.testimonials.destroy', $t->id) }}" method="POST" onsubmit="return confirm('Delete testimonial permanently?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-4 text-secondary">No testimonials added yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
