@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add New Skill / Experience / Education</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.skills.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="type" class="form-label">Type (e.g., "Technology", "Language", "Job", "Scool")</label>
                <input type="text" class="form-control" id="type" name="type" required>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Name / Title</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="level" class="form-label">Level (1-5, optional)</label>
                <select class="form-control" id="level" name="level">
                    <option value="">No Level</option>
                    @for ($i = 1; $i <= 5; $i++)
                        <option value="{{ $i }}">{{ str_repeat('★', $i) }}{{ str_repeat('☆', 5 - $i) }} ({{ $i }})</option>
                    @endfor
                </select>
            </div>

            <div class="mb-3">
                <label for="start_date" class="form-label">Start Date (optional)</label>
                <input type="date" class="form-control" id="start_date" name="start_date">
            </div>

            <div class="mb-3">
                <label for="end_date" class="form-label">End Date (leave empty for ongoing) (optional)</label>
                <input type="date" class="form-control" id="end_date" name="end_date">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description (optional)</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
        </form>

        <hr>

        <h2>Existing Items</h2>
        @if ($skills->isEmpty())
            <p>No entries yet.</p>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Name</th>
                        <th>Level</th>
                        <th>Period</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($skills as $skill)
                        <tr>
                            <td>{{ ucfirst($skill->type) }}</td>
                            <td>{{ $skill->name }}</td>
                            <td>
                                <select class="form-control skill-level" data-id="{{ $skill->id }}">
                                    <option value="">No Level</option>
                                    @for ($i = 1; $i <= 5; $i++)
                                        <option value="{{ $i }}" {{ $skill->level == $i ? 'selected' : '' }}>
                                            {{ str_repeat('★', $i) }}{{ str_repeat('☆', 5 - $i) }} ({{ $i }})
                                        </option>
                                    @endfor
                                </select>
                            </td>
                            <td>
                                {{ $skill->start_date ?? '—' }} - {{ $skill->end_date ?? 'present' }}
                            </td>
                            <td>
                                {{ $skill->description ?? '—' }}
                            </td>
                            <td>
                                <form action="{{ route('admin.skills.destroy', $skill->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.skill-level').forEach(select => {
            select.addEventListener('change', function () {
                let skillId = this.dataset.id;
                let newLevel = this.value || null;

                fetch(`/admin/skills/${skillId}/update-level`, {
                    method: 'PATCH',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({ _method: 'PATCH', level: newLevel })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log('Skill level updated successfully!');
                    } else {
                        console.error('Error updating skill level:', data.message);
                        alert('Error updating skill level.');
                    }
                })
                .catch(error => console.error('Fetch error:', error));
            });
        });
    });
</script>
@endsection
