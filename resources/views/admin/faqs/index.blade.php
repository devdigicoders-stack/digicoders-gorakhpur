@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold mb-1">Manage FAQs</h2>
        <p class="text-secondary mb-0">Manage general or specific category questions and answers.</p>
    </div>
    <a href="{{ route('admin.faqs.create') }}" class="btn btn-primary px-3 rounded-3">Add FAQ</a>
</div>

<div class="card border-0 shadow-sm rounded-3 bg-white p-4">
    <div class="table-responsive">
        <table class="table align-middle">
            <thead>
                <tr class="text-secondary text-sm">
                    <th>Question</th>
                    <th>Answer Summary</th>
                    <th>Category</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($faqs as $f)
                    <tr>
                        <td><strong>{{ $f->question }}</strong></td>
                        <td>
                            <p class="mb-0 text-truncate text-sm" style="max-width: 350px;" title="{{ $f->answer }}">{{ $f->answer }}</p>
                        </td>
                        <td>
                            <span class="badge bg-secondary bg-opacity-10 text-secondary">{{ $f->category }}</span>
                        </td>
                        <td class="text-end">
                            <div class="d-flex gap-2 justify-content-end">
                                <a href="{{ route('admin.faqs.edit', $f->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                <form action="{{ route('admin.faqs.destroy', $f->id) }}" method="POST" onsubmit="return confirm('Delete FAQ permanently?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center py-4 text-secondary">No FAQs stored.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
