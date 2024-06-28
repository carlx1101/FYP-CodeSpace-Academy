<div>
    <div class="col mb-3 mb-lg-5">
        <div class="card card-hover-shadow text-center h-100">
            <div class="card-progress-wrap">
                <div class="progress card-progress">
                    <div class="progress-bar {{ $completed ? 'bg-success' : 'bg-primary' }}" role="progressbar" style="width: {{ $progress }}%" aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

            <div class="card-body">
                <div class="row align-items-center text-start mb-4">
                    <div class="col">
                        <span class="badge {{ $completed ? 'bg-soft-success text-success' : 'bg-soft-primary text-primary' }} p-2">
                            {{ $completed ? 'Completed' : 'In Progress' }} - {{ round($progress, 2) }}%
                        </span>
                    </div>

                    <div class="col-auto">
                        <div class="dropdown">
                            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="projectsGridDropdown{{ $course->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi-three-dots-vertical"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectsGridDropdown{{ $course->id }}">
                                <a class="dropdown-item" href="{{ route('student.learn', ['courseTitle' => $course->title]) }}">Learn Course</a>
                                @if (!$hasReviewed)
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#reviewModal">Review</a>
                                @endif
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center mb-2">
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

            <div class="card-footer">
                <div class="row col-divider">
                    <div class="col">
                        <span class="h4">{{ $course->lessons()->count() }}</span>
                        <span class="d-block fs-5">Total Lesson</span>
                    </div>
                    <div class="col">
                        <span class="h4">{{ Auth::user()->completedLessons()->whereIn('completed_lessons.lesson_id', $course->lessons()->pluck('lessons.id'))->count() }}</span>
                        <span class="d-block fs-5">Completed</span>
                    </div>
                    <div class="col">
                        <span class="h4">{{ $remaining }}</span>
                        <span class="d-block fs-5">Remaining</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Review Modal -->
        <div wire:ignore.self class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="reviewModalLabel">Submit Review</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent="submitReview">
                            <div class="mb-3">
                                <label for="review" class="form-label">Review</label>
                                <textarea id="review" class="form-control" wire:model="review" rows="3"></textarea>
                                @error('review') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="rating" class="form-label">Rating</label>
                                <div class="star-rating" id="starRating">
                                    <input type="radio" name="rating" id="star5" value="5" wire:model="rating"><label for="star5" title="5 stars">⭐</label>
                                    <input type="radio" name="rating" id="star4" value="4" wire:model="rating"><label for="star4" title="4 stars">⭐</label>
                                    <input type="radio" name="rating" id="star3" value="3" wire:model="rating"><label for="star3" title="3 stars">⭐</label>
                                    <input type="radio" name="rating" id="star2" value="2" wire:model="rating"><label for="star2" title="2 stars">⭐</label>
                                    <input type="radio" name="rating" id="star1" value="1" wire:model="rating"><label for="star1" title="1 star">⭐</label>
                                </div>
                                @error('rating') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Review Modal -->
    </div>
</div>
