<!DOCTYPE html>
<html lang="en" dir="">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
  <!-- Title -->
  <title>Course</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="../favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{asset('frontend/vendor/bootstrap-icons/font/bootstrap-icons.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/vendor/hs-mega-menu/dist/hs-mega-menu.min.css')}}">


  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{asset('frontend/css/theme.min.css')}}">
</head>

<body>
  <!-- ========== HEADER ========== -->
  @include('student.layouts.header')


  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <div class="position-relative">
      <!-- Hero -->
      <div class="gradient-y-overlay-lg-white bg-img-start content-space-2" style="background-image: url({{asset('frontend/img/1920x800/img6.jpg')}});">
        <div class="container">
          <div class="row">
            <div class="col-md-7 col-lg-8">
              <small class="badge bg-success rounded-pill">Bestseller</small>
              <h1>{{$course->title}}</h1>
              <p>{{$course->subtitle}}</p>

              <div class="d-flex align-items-center flex-wrap">
                <!-- Media -->
                <div class="d-flex align-items-center me-4">
                  <div class="flex-shrink-0 avatar-group avatar-group-xs">
                    <span class="avatar avatar-xs avatar-circle">

                      @if ($course->user->profile_photo_path)
                      <img class="avatar-img" src="{{ asset('storage/' . $course->user->profile_photo_path) }}" alt="{{ $course->user->name }}">
                  @else
                      <!-- Display a default avatar if no profile photo exists -->
                      <img class="avatar-img" src="{{ asset('path/to/default/avatar.png') }}" alt="{{ $course->user->name }}">
                  @endif
                    </span>
                  </div>
                  <div class="flex-grow-1">
                    <span class="ps-2">Created by <a class="link" href="../demo-course/author-profile.html">{{$course->user->profile->first_name}}{{$course->user->profile->last_name}}</a></span>
                  </div>
                </div>
                <!-- End Media -->


              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
      </div>
      <!-- End Hero -->

      <!-- Sidebar -->
      <div class="container content-space-t-md-2 position-md-absolute top-0 start-0 end-0">
        <div class="row justify-content-end">
          <div class="col-md-5 col-lg-4 position-relative zi-2 mb-7 mb-md-0">
            <!-- Sticky Block -->
            <div id="stickyBlockStartPoint">
              <div class="js-sticky-block"
                   data-hs-sticky-block-options='{
                     "parentSelector": "#stickyBlockStartPoint",
                     "breakpoint": "md",
                     "startPoint": "#stickyBlockStartPoint",
                     "endPoint": "#stickyBlockEndPoint",
                     "stickyOffsetTop": 12,
                     "stickyOffsetBottom": 12
                   }'>
                <!-- Card -->
                <div class="card">
                  <div class="p-1">
                    <!-- Fancybox -->
                    <div class="bg-img-start text-center rounded-2 py-10 px-5" style="background-image: url({{ asset('storage/' . $course->cover_image) }});">
                      <a class="video-player video-player-btn" href="{{ asset('storage/' . $course->promotional_video) }}" role="button" data-fslightbox="youtube-video">
                        <span class="d-flex justify-content-center align-items-center">
                          <span class="video-player-icon shadow-sm">
                            <i class="bi-play-fill"></i>
                          </span>
                        </span>
                        <span class="text-white">Preview this course</span>
                      </a>
                    </div>
                    <!-- End Fancybox -->
                  </div>

                  <!-- Card Body -->
                  <div class="card-body">
                    <div class="mb-3">
                      <span class="card-title h2">RM {{$course->price}}</span>
                      {{-- <span class="text-muted"><del>$114.99</del></span> --}}

                      
                    </div>

                    <div class="d-grid mb-2">

                        <form action="{{ route('cart.store') }}" method="POST" style="  outline: none;">
                            @csrf
                            <input type="hidden" name="course_id" value="{{ $course->id }}">
                            <button type="submit" class="btn btn-primary btn-transition">Add to Cart</button>
                        </form>
                    </div>






                    <br>

                    <h4 class="card-title">This course includes</h4>

                    <ul class="list-unstyled list-py-1">
                      <li><i class="bi-file-text nav-icon"></i> {{$course->lessons->count()}}  lessons</li>
                      <li><i class="bi-stopwatch nav-icon"></i> Full time access</li>
                      <li><i class="bi-phone nav-icon"></i> Access on mobile and Tablet</li>
                      <li><i class="bi-award nav-icon"></i> Certificate of Completion</li>
                    </ul>
                  </div>
                  <!-- End Card Body -->
                </div>
                <!-- End Card -->
              </div>
            </div>
            <!-- End Sticky Block -->
          </div>
        </div>
      </div>
      <!-- End Sidebar -->
    </div>

    <!-- Content -->
    <div class="container content-space-t-2 content-space-t-md-1">
      <div class="row">
        <div class="col-md-7 col-lg-8">
          <h3 class="mb-4">What you'll learn:</h3>

          <div class="row">
            <div class="col-lg-6">
              <!-- List Checked -->
              <ul class="list-checked list-checked-primary">
                @foreach (array_slice(json_decode($course->learning_objectives), 0, ceil(count(json_decode($course->learning_objectives)) / 2)) as $learning_objective)
                <li class="list-checked-item">{{ $learning_objective }}</li>
            @endforeach
              </ul>
              <!-- End List Checked -->
            </div>
            <!-- End Col -->

            <div class="col-lg-6">
              <!-- List Checked -->
              <ul class="list-checked list-checked-primary">
                    @foreach (array_slice(json_decode($course->learning_objectives), ceil(count(json_decode($course->learning_objectives)) / 2)) as $learning_objective)
                    <li class="list-checked-item">{{ $learning_objective }}</li>
                    @endforeach
              </ul>
              <!-- End List Checked -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <!-- Accordion -->
          <div class="border-top pt-7 mt-7">
            <div class="row mb-4">
              <div class="col-8">
                <h3 class="mb-0">Course content</h3>
              </div>
              <!-- End Col -->

              <div class="col-4 text-end">
                <div class="row">
                  <div class="col-lg-6">
                    <span class="small">186 lectures</span>
                  </div>
                  <!-- End Col -->

                  <div class="col-lg-6">
                    <span class="small">24:10:28</span>
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->

            <!-- Accordion -->
            <div class="accordion accordion-btn-icon-start">

                @foreach ($course->sections as $section)

                <!-- Accordion Item -->
                <div class="accordion-item">
                  <div class="accordion-header" id="headingBasicsOne">
                    <a class="accordion-button" role="button" data-bs-toggle="collapse" data-bs-target="#accordionCourse{{$section->id}}" aria-expanded="true" aria-controls="accordionCourse{{$section->id}}">
                      <div class="flex-grow-1 ps-3">
                        <div class="row">
                          <div class="col-8">

                            {{$section->title}}
                          </div>
                          <!-- End Col -->

                          <div class="col-4 text-end">
                            <div class="row">
                              <div class="col-lg-6">
                                <span class="small text-muted fw-normal">{{count($section->lessons)}} Lessons</span>
                              </div>
                              <!-- End Col -->

                              <div class="col-lg-6">
                                <span class="small text-muted fw-normal">15:32</span>
                              </div>
                              <!-- End Col -->
                            </div>
                            <!-- End Row -->
                          </div>
                          <!-- End Col -->
                        </div>
                        <!-- End Row -->
                      </div>
                    </a>
                  </div>
                  <div id="accordionCourse{{$section->id}}" class="accordion-collapse collapse " aria-labelledby="headingBasicsOne">
                    <div class="accordion-body">
                      <!-- List Group -->
                      <div class="list-group list-group-flush list-group-no-gutters">
                        @foreach ($section->lessons as $lesson)

                        <!-- Item -->
                        <div class="list-group-item">
                          <div class="row">
                            <div class="col-8">
                              <a class="d-flex" href="#">
                                <div class="flex-shrink-0">
                                  <i class="bi-play-circle-fill small"></i>
                                </div>
                                <div class="flex-grow-1 ms-2">
                                  <span class="small">{{$lesson->title}}</span>
                                </div>
                              </a>
                            </div>
                            <!-- End Col -->


                            <div class="col-4 text-end">
                              <div class="row">
                                <div class="col-lg-6">
                                  @if($lesson->is_preview == 1)
                                    <!-- Fancybox -->

                                    @php
                                        if ($lesson->lesson_type == 'video') {
                                            # code...
                                            $videoUrl = $lesson->video->video_url;
                                            $isHttpUrl = Str::startsWith($videoUrl, ['http://', 'https://']);
                                        }
                                        else {
                                            # code...
                                            $videoUrl = 'abc';
                                            $isHttpUrl = Str::startsWith($videoUrl, ['http://', 'https://']);
                                        }
                                    @endphp

                                    <a class="video-player video-player-btn"
                                        href="{{ $isHttpUrl ? $videoUrl : asset('storage/' . $videoUrl) }}"
                                        role="button"
                                        data-fslightbox="youtube-video">
                                            <p style="font-size:13px;">Preview</p>
                                    </a>

                                    <!-- End Fancybox -->
                                    @endif
                                </div>
                                <!-- End Col -->

                                <div class="col-lg-6">
                                  <span class="text-primary small">06:39</span>
                                </div>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->
                            </div>
                            <!-- End Col -->
                          </div>
                        </div>
                        <!-- End Item -->
                        @endforeach



                      </div>
                      <!-- End List Group -->
                    </div>
                  </div>
                </div>
                <!-- End Accordion Item -->
                @endforeach

            </div>
            <!-- End Accordion -->


          </div>
          <!-- End Accordion -->

          <!-- Content -->
          <div class="border-top pt-7 mt-7">
            <div class="mb-4">
              <h3>Description</h3>
            </div>

            <p>{!!$course->description!!}</p>


          </div>
          <!-- End Content -->

          <hr class="my-7">

          <h3 class="mb-4">{{$course->user->profile->first_name}}'s books</h3>
          <div class="row">
            @foreach ($userPosts as $post)
                <div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
                    <!-- Card -->
                    <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="{{ route('posts.show', $post->id) }}" style="background-image: url('{{ asset('frontend/img/400x500/img14.jpg') }}'); min-height: 15rem;">
                        <div class="card-body">
                            <span class="card-subtitle text-white-70">{{ $post->created_at->format('F d, Y H:i') }}</span>
                            <h4 class="card-title text-white">{{ $post->title }}</h4>

                            <div class="card-footer pt-0">
                                <span class="card-link text-white">Read now</span>
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <!-- End Col -->
            @endforeach
        </div>
          <!-- End Row -->

          <hr class="my-7">

          <div class="mb-4">
            <h3>About the instructor</h3>
          </div>

          <div class="row">
            <div class="col-sm-4 mb-4 mb-sm-0">
              <div class="mb-3">
                <img class="avatar avatar-xl avatar-circle" src="{{ asset('storage/' . $course->user->profile_photo_path) }}" alt="{{ $course->user->name }}">

              </div>

              <ul class="list-unstyled list-py-1">
                <li><i class="bi-star dropdown-item-icon"></i> {{$totalInstructorRating}} Instructor rating</li>
                <li><i class="bi-chat-left-dots dropdown-item-icon"></i> {{$totalInstructorReviews}} reviews</li>
                <li><i class="bi-person dropdown-item-icon"></i> {{$totalInstructorStudents}} students</li>
                <li><i class="bi-play-circle dropdown-item-icon"></i> {{$totalCoursesPublished }} courses</li>
              </ul>
            </div>
            <!-- End Col -->

            <div class="col-sm-8">
              <!-- Info -->
              <div class="mb-2">
                <h4 class="mb-1"><a href="{{ route('user.public_preview', Crypt::encryptString($course->user->id)) }}">{{ $course->user->profile->first_name }}{{ $course->user->profile->last_name }}</a></h4>
                <p class="fw-semibold">{{ $course->user->profile->position }} at {{ $course->user->profile->company }}</p>
              </div>

              <p>{{ $course->user->profile->bio }}</p>
              <!-- End Info -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <hr class="my-7">


          <div class="mb-4">
            <h3>Student feedback</h3>
        </div>

        <div class="row mb-5">
            <div class="col-lg-4">
                <!-- Card -->
                <div class="card card-sm bg-primary text-center mb-3">
                    <div class="card-body">
                        <span class="display-4 text-white">{{ number_format($averageRating, 1) }}</span>

                        <div class="d-flex justify-content-center gap-2 mb-2">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= floor($averageRating))
                                    <img src="{{ asset('frontend/svg/illustrations/star.svg') }}" alt="Review rating" width="22">
                                @elseif ($i == ceil($averageRating))
                                    <img src="{{ asset('frontend/svg/illustrations/star-half.svg') }}" alt="Review rating" width="22">
                                @else
                                    <img src="{{ asset('frontend/svg/illustrations/star-muted.svg') }}" alt="Review rating" width="22">
                                @endif
                            @endfor
                        </div>
                        <span class="text-white">Course rating</span>
                    </div>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-lg-8">
                <!-- Ratings -->
                <div class="d-grid gap-2">
                    @foreach ([5, 4, 3, 2, 1] as $rating)
                        @if (array_sum($reviewCounts) > 0)
                            <a class="row align-items-center" href="#">
                                <div class="col-7">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: {{ ($reviewCounts[$rating] / array_sum($reviewCounts)) * 100 }}%;" aria-valuenow="{{ ($reviewCounts[$rating] / array_sum($reviewCounts)) * 100 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!-- End Col -->

                                <div class="col-2 text-end">
                                    <div class="d-flex">
                                        <div class="d-flex gap-1 me-2">
                                            @for ($i = 0; $i < $rating; $i++)
                                                <img src="{{ asset('frontend/svg/illustrations/star.svg') }}" alt="Review rating" width="16">
                                            @endfor
                                            @for ($i = $rating; $i < 5; $i++)
                                                <img src="{{ asset('frontend/svg/illustrations/star-muted.svg') }}" alt="Review rating" width="16">
                                            @endfor
                                        </div>
                                        <span>{{ $reviewCounts[$rating] }}</span>
                                    </div>
                                </div>
                                <!-- End Col -->
                            </a>
                        @endif
                        <!-- End Row -->
                    @endforeach
                </div>
                <!-- End Ratings -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->

        <!-- Heading -->
        <div class="border-bottom pb-4 mb-4">
            <div class="row align-items-center">
                <div class="col-sm-6 mb-2 mb-sm-0">
                    <h3 class="mb-0">Reviews</h3>
                </div>
                <!-- End Col -->

                <div class="col-sm-6">
                    <!-- Form -->
                    <form>
                        <div class="input-group input-group-merge">
                            <input type="search" class="form-control" placeholder="Search reviews" aria-label="Search reviews">
                            <div class="input-group-append input-group-text">
                                <i class="bi-search"></i>
                            </div>
                        </div>
                    </form>
                    <!-- End Form -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Heading -->

        <!-- Comment -->
        <ul class="list-comment list-comment-divider mb-7">
            <!-- Item -->
            @foreach ($course->reviews as $review)
                <li class="list-comment-item">
                    <div class="d-flex gap-1 mb-3">
                        @for ($i = 0; $i < $review->rating; $i++)
                            <img src="{{ asset('frontend/svg/illustrations/star.svg') }}" alt="Review rating" width="16">
                        @endfor
                        @for ($i = $review->rating; $i < 5; $i++)
                            <img src="{{ asset('frontend/svg/illustrations/star-muted.svg') }}" alt="Review rating" width="16">
                        @endfor
                    </div>

                    <!-- Media -->
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-shrink-0">
                            <img class="avatar avatar-sm avatar-circle" src="{{ asset('storage/' . $review->user->profile_photo_path) }}" alt="{{ $review->user->name }}">
                        </div>

                        <div class="flex-grow-1 ms-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">{{ $review->user->name }}</h5>
                                <span class="d-block small text-muted">{{ $review->created_at->format('F d, Y') }}</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Media -->

                    <div class="mb-5">
                        <p>{{ $review->review }}</p>
                    </div>

                    <div class="mb-2">
                        <span class="text-dark fw-semibold">{{ $review->user->name }}</span>
                        <span>- Verified Purchase</span>
                    </div>
                </li>
            @endforeach
            <!-- End Item -->
        </ul>
        <!-- End Comment -->

        <div class="text-center">
            <a class="btn btn-outline-primary btn-transition" href="#">See all reviews</a>
        </div>



          <hr class="my-7">
        </div>
      </div>
    </div>
    <!-- End Content -->

    <!-- Sticky Block End Point -->
    <div id="stickyBlockEndPoint"></div>

    <!-- Card Grid -->
    <div class="container content-space-b-2">
      <h3 class="mb-4">Students also bought</h3>

      <div class="row">
        @foreach ($relatedCourses as $relatedCourse)
            <div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
                <!-- Card -->
                <div class="card card-bordered h-100">
                    <!-- Card Pinned -->
                    <div class="card-pinned">
                        <img class="card-img-top" src="{{ asset('storage/' . $relatedCourse->cover_image) }}" alt="{{ $relatedCourse->title }}">
                        <div class="card-pinned-top-start">
                            <small class="badge bg-success rounded-pill">Featured</small>
                        </div>
                        <div class="card-pinned-bottom-start">
                            <div class="d-flex align-items-center flex-wrap">
                                <!-- Rating -->
                                <div class="d-flex gap-1">
                                    @for ($i = 0; $i < floor($relatedCourse->average_rating); $i++)
                                        <img src="{{ asset('frontend/svg/illustrations/star.svg') }}" alt="Review rating" width="16">
                                    @endfor
                                    @for ($i = floor($relatedCourse->average_rating); $i < 5; $i++)
                                        <img src="{{ asset('frontend/svg/illustrations/star-muted.svg') }}" alt="Review rating" width="16">
                                    @endfor
                                </div>
                                <!-- End Rating -->
                                <div class="ms-1">
                                    <span class="fw-semibold text-white me-1">{{ number_format($relatedCourse->average_rating, 2) }}</span>
                                    <span class="text-white-70">({{ $relatedCourse->reviews->count() }} reviews)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card Pinned -->

                    <!-- Card Body -->
                    <div class="card-body">
                        <small class="card-subtitle">{{ $relatedCourse->category->name }}</small>
                        <div class="mb-3">
                            <h3 class="card-title">
                                <a class="text-dark" href="{{ route('courses.show', $relatedCourse->id) }}">{{ $relatedCourse->title }}</a>
                            </h3>
                        </div>
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="avatar-group avatar-group-xs">
                                    <a class="avatar avatar-xs avatar-circle" data-toggle="tooltip" data-placement="top" title="{{ $relatedCourse->user->name }}" href="#">
                                        <img class="avatar-img" src="{{ asset('storage/' . $relatedCourse->user->profile_photo_path) }}" alt="{{ $relatedCourse->user->name }}">
                                    </a>
                                </div>
                            </div>
                            <!-- End Col -->
                            <div class="col-auto">
                                <ul class="list-inline list-separator small ms-auto">
                                    <li class="list-inline-item">
                                        <i class="bi-book me-1"></i> {{ $relatedCourse->sections->sum('lessons_count') }} lessons
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="bi-clock me-1"></i> {{ $relatedCourse->total_duration }} hours
                                    </li>
                                </ul>
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Card Body -->

                    <!-- Card Footer -->
                    <div class="card-footer pt-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="me-2">
                                <span class="d-block text-muted small"><del>${{ $relatedCourse->original_price }}</del></span>
                                <h5 class="card-title">${{ $relatedCourse->discounted_price }}</h5>
                            </div>
                            <a class="btn btn-primary btn-sm btn-transition" href="{{ route('courses.show', $relatedCourse->id) }}">Preview</a>
                        </div>
                    </div>
                    <!-- End Card Footer -->
                </div>
                <!-- End Card -->
            </div>
            <!-- End Col -->
        @endforeach
    </div>
      <!-- End Row -->
    </div>
    <!-- End Card Grid -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  @include('student.layouts.footer')


  <!-- ========== END FOOTER ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Go To -->
  {{-- <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
     data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": "2rem"
         },
         "show": {
           "bottom": "2rem"
         },
         "hide": {
           "bottom": "-2rem"
         }
       }
     }'>
    <i class="bi-chevron-up"></i>
  </a> --}}

  @include('student.components.offcanvas-cart')
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory  -->
  <script src="{{asset('frontend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{asset('frontend/vendor/hs-header/dist/hs-header.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/hs-mega-menu/dist/hs-mega-menu.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/hs-go-to/dist/hs-go-to.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/hs-sticky-block/dist/hs-sticky-block.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/fslightbox/index.js')}}"></script>

  <!-- JS Front -->
  <script src="{{asset('frontend/js/theme.min.js')}}"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      // INITIALIZATION OF HEADER
      // =======================================================
      new HSHeader('#header').init()


      // INITIALIZATION OF MEGA MENU
      // =======================================================
      new HSMegaMenu('.js-mega-menu', {
          desktop: {
            position: 'left'
          }
        })


      // INITIALIZATION OF BOOTSTRAP DROPDOWN
      // =======================================================
      HSBsDropdown.init()


      // INITIALIZATION OF GO TO
      // =======================================================
      new HSGoTo('.js-go-to')


      // INITIALIZATION OF STICKY BLOCKS
      // =======================================================
      new HSStickyBlock('.js-sticky-block', {
        targetSelector: document.getElementById('header').classList.contains('navbar-fixed') ? '#header' : null
      })
    })()
  </script>


    {{-- <script>
        document.getElementById('add-to-cart-form').addEventListener('submit', function(e) {
            e.preventDefault();
            let form = this;

            fetch(form.action, {
                method: form.method,
                body: new FormData(form),
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Course added to cart.');
                } else {
                    alert('An error occurred.');
                }
            });
        });
    </script> --}}
</body>
</html>
