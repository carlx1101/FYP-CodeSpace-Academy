<div class="container">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
            <h3>{{ $course->title }}</h3>
            <ul class="list-group">
                @foreach($sections as $section)
                    <li class="list-group-item">
                        <h5>{{ $section->title }}</h5>
                        <ul class="list-group">
                            @foreach($section->lessons as $lesson)
                                <li class="list-group-item">
                                    <a href="{{ route('student.learn', ['courseTitle' => $course->title, 'lessonId' => $lesson->id]) }}">
                                        {{ $lesson->title }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Content -->
        <div class="col-md-9">
            <h3>{{ $currentLesson->title }}</h3>
            <div class="lesson-content">
                @if($currentLesson->lesson_type == 'video' && $currentLesson->video)



                    <iframe width="420" height="315" src={{$currentLesson->video->video_url}}></iframe>

                @elseif($currentLesson->lesson_type == 'article' && $currentLesson->article)
                    {!! $currentLesson->article->content !!}
                @else
                    <p>No content available for this lesson.</p>
                @endif

                
            </div>
        </div>
    </div>
</div>
