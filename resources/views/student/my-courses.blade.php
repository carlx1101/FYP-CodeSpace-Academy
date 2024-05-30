@if($courses->isEmpty())
<p>You have not purchased any courses yet.</p>
@else
<div class="row">

    {{count($courses)}}
    @foreach($courses as $course)
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('storage/' . $course->cover_image) }}" class="card-img-top" alt="{{ $course->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $course->title }}</h5>
                    <p class="card-text">{{ $course->description }}</p>
                    <a href="{{ route('courses.show', $course->id) }}" class="btn btn-primary">Go to Course</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endif
