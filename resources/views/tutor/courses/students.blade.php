students
@forelse ($students as $student)
<li class="list-group-item">
    {{ $student->name }} ({{ $student->email }})
</li>
@empty
<li class="list-group-item">No students enrolled in this course yet.</li>
@endforelse
