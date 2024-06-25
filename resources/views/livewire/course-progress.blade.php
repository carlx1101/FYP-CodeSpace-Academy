<div>
    {{-- Be like water. --}}
    <div class="col mb-3 mb-lg-5">
        <!-- Card -->
        <div class="card card-hover-shadow text-center h-100">
            <!-- Progress -->
            <div class="card-progress-wrap">
                <div class="progress card-progress">
                    <div class="progress-bar {{ $completed ? 'bg-success' : 'bg-primary' }}" role="progressbar" style="width: {{ $progress }}%" aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <!-- End Progress -->

            <!-- Body -->
            <div class="card-body">
                <div class="row align-items-center text-start mb-4">
                    <div class="col">
                        <span class="badge {{ $completed ? 'bg-soft-success text-success' : 'bg-soft-primary text-primary' }} p-2">
                            {{ $completed ? 'Completed' : 'In Progress' }} - {{ round($progress, 2) }}%
                        </span>
                    </div>

                    <div class="col-auto">
                        <!-- Dropdown -->
                        <div class="dropdown">
                            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="projectsGridDropdown{{ $course->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi-three-dots-vertical"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectsGridDropdown{{ $course->id }}">
                                <a class="dropdown-item" href="{{ route('student.learn', ['courseTitle' => $course->title]) }}">Learn Course</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#">Delete</a>
                            </div>
                        </div>
                        <!-- End Dropdown -->
                    </div>
                    <!-- End Col -->
                </div>

                <div class="d-flex justify-content-center mb-2">
                    <!-- Avatar -->
                    <img class="avatar avatar-lg" src="{{ asset('storage/' . $course->cover_image) }}" alt="{{ $course->title }}">
                </div>

                <div class="mb-4">
                    <h2 class="mb-1">{{ $course->title }}</h2>
                    <span class="fs-5">Updated 1 day ago</span>
                </div>

                <a class="btn btn-primary" href="{{ route('student.learn', ['courseTitle' => $course->title]) }}">Learn Course</a>

                @if ($completed)
                    <button class="btn btn-success mt-2" wire:click="downloadCertificate">Download Certificate</button>
                @endif
            </div>
            <!-- End Body -->

            <!-- Footer -->
            <div class="card-footer">
                <!-- Stats -->
                <div class="row col-divider">
                    <div class="col">
                        <span class="h4">{{ $course->lessons()->count() }}</span>
                        <span class="d-block fs-5">Total Lesson</span>
                    </div>
                    <!-- End Col -->

                    <div class="col">
                        <span class="h4">{{ Auth::user()->completedLessons()->whereIn('completed_lessons.lesson_id', $course->lessons()->pluck('lessons.id'))->count() }}</span>
                        <span class="d-block fs-5">Completed</span>
                    </div>
                    <!-- End Col -->

                    <div class="col">
                        <span class="h4">{{ $remaining }}</span>
                        <span class="d-block fs-5">Remaining</span>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Stats -->
            </div>
            <!-- End Footer -->
        </div>
        <!-- End Card -->
    </div>
</div>
