@extends('layouts.admin')

@section('content')
<div class="mb-4">
    <h2 class="fw-bold mb-1">Inquiries &amp; Messages</h2>
    <p class="text-secondary mb-0">Review contact logs and dynamic seat inquiries submitted by students.</p>
</div>

<div class="card border-0 shadow-sm rounded-3 bg-white p-4">
    <div class="table-responsive">
        <table class="table align-middle">
            <thead>
                <tr class="text-secondary text-sm">
                    <th>Student Details</th>
                    <th>Course Inquired</th>
                    <th>Message Details</th>
                    <th>Submitted At</th>
                    <th>Status</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($messages as $m)
                    <tr class="{{ !$m->is_read ? 'table-warning bg-opacity-10' : '' }}">
                        <td>
                            <strong class="d-block">{{ $m->name }}</strong>
                            <small class="text-secondary">{{ $m->phone }} | {{ $m->email }}</small>
                        </td>
                        <td>
                            <span class="badge bg-secondary bg-opacity-10 text-secondary">{{ $m->course ?? 'General Query' }}</span>
                        </td>
                        <td>
                            <p class="mb-0 text-wrap text-sm" style="max-width: 350px;">{{ $m->message }}</p>
                        </td>
                        <td>
                            <small class="text-secondary text-xs">{{ $m->created_at->format('M d, Y h:i A') }}</small>
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
                        <td colspan="6" class="text-center py-4 text-secondary">No contact inquiries stored.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
