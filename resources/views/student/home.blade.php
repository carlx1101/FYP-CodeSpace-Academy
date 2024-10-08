<!DOCTYPE html>
<html lang="en" dir="">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>CodeSpace Academy</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="../favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{asset('frontend/vendor/bootstrap-icons/font/bootstrap-icons.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/vendor/hs-mega-menu/dist/hs-mega-menu.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/vendor/swiper/swiper-bundle.min.css')}}">


  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{asset('frontend/css/theme.min.css')}}">
</head>

<body>
  <!-- ========== HEADER ========== -->
    @include('student.layouts.header')
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero -->
    <div class="container content-space-2">
      <div class="row justify-content-md-between align-items-sm-center">
        <div class="col-8 col-sm-6 col-md-5 mb-5 mb-sm-0">
          <img class="img-fluid" src="{{asset('frontend/svg/illustrations/oc-growing.svg')}}" alt="Image Description">
        </div>
        <!-- End Col -->

        <div class="col-sm-6">
          <div class="mb-5">
            <h1 class="display-4 mb-3">
              Unlock your
              <br>
              <span class="text-primary text-highlight-warning">
                <span class="js-typedjs"
                      data-hs-typed-options='{
                        "strings": ["future.", "potential.", "skills."],
                        "typeSpeed": 90,
                        "loop": true,
                        "backSpeed": 30,
                        "backDelay": 2500
                      }'></span>
              </span>
            </h1>
            <p class="lead">With our platform, you can quantify your skills, grow in your role and stay relevant on critical topics.</p>
          </div>

          <div class="d-grid d-md-flex gap-3 align-items-md-center">
            <a class="btn btn-primary" href="{{ route('courses') }}">Explore more courses</a>

            <!-- Fancybox -->
            <a class="video-player video-player-btn" href="https://www.youtube.com/watch?v=d4eDWc8g0e0" role="button" data-fslightbox="youtube-video">
              <span class="video-player-icon shadow-sm me-2">
                <i class="bi-play-fill"></i>
              </span>
              How it works
            </a>
            <!-- End Fancybox -->
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Hero -->

    <!-- Card Grid -->
    <div class="content-space-b-2 content-space-b-lg-3 bg-img-start" style="background: url('{{ asset('frontend/svg/components/shape-5.svg') }}') center no-repeat;">
      <div class="position-relative">
        <div class="container content-space-2">
          <div class="row align-items-md-center mb-7">
            <div class="col-md-6 mb-4 mb-md-0">
              <h2>Check out our newest and most popular programs</h2>
            </div>
            <!-- End Col -->

            <div class="col-md-6 text-md-end">
              <a class="link" href="#">See all programs <i class="bi-chevron-right small ms-1"></i></a>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <!-- Swiper Slider -->
          <div class="swiper-center-mode-end">
            <div class="js-swiper-course-hero swiper">
              <div class="swiper-wrapper">
                <!-- Slide -->
                <div class="swiper-slide pt-2">
                  <!-- Card -->
                  <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="../demo-course/course-overview.html" style="background-image: url('{{asset('frontend/img/400x500/img14.jpg')}}'); min-height: 15rem;">
                    <div class="card-body">
                      <span class="card-subtitle text-white-70">New</span>
                      <h4 class="card-title text-white">Cloud computing</h4>

                      <div class="card-footer pt-0">
                        <span class="card-link text-white">Read now</span>
                      </div>
                    </div>
                  </a>
                  <!-- End Card -->
                </div>
                <!-- End Slide -->

                <!-- Slide -->
                <div class="swiper-slide pt-2">
                  <!-- Card -->
                  <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="../demo-course/course-overview.html" style="background-image: url('{{asset('frontend/img/400x500/img13.jpg')}}'); min-height: 15rem;">
                    <div class="card-body">
                      <span class="card-subtitle text-white-70">Phython</span>
                      <h4 class="card-title text-white">What's new in Phython 3.7.2</h4>

                      <div class="card-footer pt-0">
                        <span class="card-link text-white">Read now</span>
                      </div>
                    </div>
                  </a>
                  <!-- End Card -->
                </div>
                <!-- End Slide -->

                <!-- Slide -->
                <div class="swiper-slide pt-2">
                  <!-- Card -->
                  <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="../demo-course/course-overview.html" style="background-image: url('{{asset('frontend/img/400x500/img15.jpg')}}'); min-height: 15rem;">
                    <div class="card-body">
                      <span class="card-subtitle text-white-70">Tooling</span>
                      <h4 class="card-title text-white">Build a staging server</h4>

                      <div class="card-footer pt-0">
                        <span class="card-link text-white">Read now</span>
                      </div>
                    </div>
                  </a>
                  <!-- End Card -->
                </div>
                <!-- End Slide -->

                <!-- Slide -->
                <div class="swiper-slide pt-2">
                  <!-- Card -->
                  <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="../demo-course/course-overview.html" style="background-image: url('{{asset('frontend/img/400x500/img16.jpg')}}'); min-height: 15rem;">
                    <div class="card-body">
                      <span class="card-subtitle text-white-70">JavaScript</span>
                      <h4 class="card-title text-white">Laravel, Vue and SPAs</h4>

                      <div class="card-footer pt-0">
                        <span class="card-link text-white">Read now</span>
                      </div>
                    </div>
                  </a>
                  <!-- End Card -->
                </div>
                <!-- End Slide -->

                <!-- Slide -->
                <div class="swiper-slide pt-2">
                  <!-- Card -->
                  <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="../demo-course/course-overview.html" style="background-image: url('{{asset('frontend/img/400x500/img17.jpg')}}'); min-height: 15rem;">
                    <div class="card-body">
                      <span class="card-subtitle text-white-70">Popular</span>
                      <h4 class="card-title text-white">Artificial Intelligence</h4>

                      <div class="card-footer pt-0">
                        <span class="card-link text-white">Read now</span>
                      </div>
                    </div>
                  </a>
                  <!-- End Card -->
                </div>
                <!-- End Slide -->

                <!-- Slide -->
                <div class="swiper-slide pt-2">
                  <!-- Card -->
                  <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="../demo-course/course-overview.html" style="background-image: url('{{asset('frontend/img/400x500/img18.jpg')}}'); min-height: 15rem;">
                    <div class="card-body">
                      <span class="card-subtitle text-white-70">PHP</span>
                      <h4 class="card-title text-white">Programming terms explained</h4>

                      <div class="card-footer pt-0">
                        <span class="card-link text-white">Read now</span>
                      </div>
                    </div>
                  </a>
                  <!-- End Card -->
                </div>
                <!-- End Slide -->
              </div>

              <!-- Arrows -->
              <div class="js-swiper-course-hero-button-next swiper-button-next"></div>
              <div class="js-swiper-course-hero-button-prev swiper-button-prev"></div>
            </div>
          </div>
          <!-- End Swiper Slider -->
        </div>

        <div class="w-100 w-md-65 bg-light position-absolute top-0 end-0 bottom-0 zi-n1"></div>
      </div>
    </div>
    <!-- End Card Grid -->

    <!-- Card Grid -->
    <div class="container content-space-sm-2">
      <!-- Title -->
      <div class="w-md-75 text-center mx-md-auto mb-9">
        <h2>Featured courses</h2>
        <p>Discover your perfect program in our courses.</p>
      </div>
      <!-- End Title -->

      <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 mb-5">
        @foreach($courses as $course)
        <div class="col mb-5">
            <div class="card card-bordered h-100">
                <div class="card-pinned">
                    <img class="card-img-top" src="{{ asset('storage/' . $course->cover_image) }}"  alt="Image Description">
                    <div class="card-pinned-top-start">
                        <small class="badge bg-success rounded-pill">Bestseller</small>
                    </div>
                    <div class="card-pinned-bottom-start">
                        <div class="d-flex align-items-center flex-wrap">

                            @php
                                 $totalReviews = $course->reviews->count();
                                $averageRating = $totalReviews > 0 ? $course->reviews->avg('rating') : 0;
                                $averageRating = number_format($averageRating, 2); // Format to 2 decimal places
                            @endphp
                            <div class="d-flex gap-1">
                                @for ($i = 0; $i < floor($averageRating); $i++)
                                <img src="{{ asset('frontend/svg/illustrations/star.svg') }}" alt="Review rating" width="16">
                            @endfor
                            @for ($i = floor($averageRating); $i < 5; $i++)
                                <img src="{{ asset('frontend/svg/illustrations/star-muted.svg') }}" alt="Review rating" width="16">
                            @endfor
                            </div>
                            <div class="ms-1">
                                <span class="fw-semibold text-white me-1">{{$averageRating}}</span>
                                <span class="text-white-70">({{$course->reviews->count()}} reviews)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <small class="card-subtitle">{{ $course->category->name }} / {{$course->subcategory->name}} </small>
                    <div class="mb-3">
                        <h3 class="card-title">
                            <a class="text-dark" href="{{route('course', $course->id)}}">{{ $course->title }}</a>
                        </h3>
                    </div>
                    <div class="row align-items-center">
                        <div class="col">
                            <p>By {{$course->user->profile->last_name}}</p>
                        </div>
                        <div class="col-auto">
                            <ul class="list-inline list-separator small ms-auto">
                                <li class="list-inline-item">
                                    <i class="bi-book me-1"></i>
                                    @foreach ($course->sections as $sections )
                                      {{$sections->lessons->count()}}
                                    @endforeach
                                    lessons
                                </li>
                                <li class="list-inline-item">
                                    <i class="bi-clock me-1"></i> 3h 25m
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-footer pt-0">
                  <div class="d-flex justify-content-between align-items-center">
                      <div class="me-2">
                          <span class="d-block text-muted small"> RM {{ $course->price }}</span>
                      </div>
                      <a class="btn btn-primary btn-sm btn-transition" href="{{route('course', $course->id)}}">Learn more</a>
                  </div>
                </div>
            </div>
        </div>
        @endforeach
      </div>
      <!-- End Row -->

      <div class="text-center">
        <a class="btn btn-link" href="{{ route('courses') }}"> See All Courses <i class="bi-chevron-right small ms-1"></i></a>
      </div>
    </div>
    <!-- End Card Grid -->

    <!-- Testimonials -->
    <div class="overflow-hidden content-space-2">
      <div class="position-relative bg-light text-center rounded-2 zi-2 mx-3 mx-md-10">
        <div class="container content-space-2">
          <div class="text-center mb-5">
            <img class="avatar avatar-lg avatar-4x3" src="{{asset('frontend/svg/illustrations/oc-person-2.svg')}}" alt="Illustration">
          </div>

          <!-- Blockquote -->
          <figure class="w-md-75 text-center mx-md-auto">
            <blockquote class="blockquote mb-7">“ The best part about Front Course is the selection. You can find a course for anything you want to learn! Thank you Front Course! You've renewed my passion for learning and my dream of becoming a web developer. ”</blockquote>

            <figcaption class="blockquote-footer mt-2">
              Martin
              <span class="blockquote-footer-source">Happy customer</span>
            </figcaption>
          </figure>
          <!-- End Blockquote -->
        </div>

        <!-- SVG Shape -->
        <figure class="position-absolute top-0 start-0 mt-10 ms-10">
          <svg width="70" height="70" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M60.6655 74.9992C80.4557 74.9992 96.4988 58.9561 96.4988 39.1659C96.4988 19.3757 80.4557 3.33252 60.6655 3.33252C40.8753 3.33252 24.8322 19.3757 24.8322 39.1659C24.8322 58.9561 40.8753 74.9992 60.6655 74.9992Z" stroke="#97a4af" stroke-width="5" stroke-miterlimit="10"/>
            <path d="M158.5 197.5C168.165 197.5 176 189.665 176 180C176 170.335 168.165 162.5 158.5 162.5C148.835 162.5 141 170.335 141 180C141 189.665 148.835 197.5 158.5 197.5Z" stroke="#97a4af" stroke-width="5" stroke-miterlimit="10"/>
          </svg>
        </figure>
        <!-- End SVG Shape -->

        <!-- SVG Shape -->
        <figure class="position-absolute bottom-0 end-0 mb-n7 me-n7" style="width: 10rem;">
          <img class="img-fluid" src="{{asset('frontend/svg/components/dots.svg')}}" alt="Image Description">
        </figure>
        <!-- End SVG Shape -->
      </div>
    </div>
    <!-- End Testimonials -->



    <!-- CTA -->
    <div class="container content-space-b-2">
      <div class="text-center bg-img-start py-6" style="background: url('{{asset('frontend/svg/components/shape-6.svg')}}') center no-repeat;">
        <div class="mb-5">
          <h2>Find the right learning path for you</h2>
          <p>Answer a few questions and match your goals to our programs.</p>
        </div>

        @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
         @endif


            <!-- Subscription Form -->
            <form action="{{ route('subscriptions.store') }}" method="POST" class="mb-5">
                @csrf
                <div class="row">
                    <div class="text-center">
                        <div class="input-group" >
                            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                        </div><br>
                        <button class="btn btn-primary w-100" type="submit">Subscribe</button>
                    </div>





                </div>
                @if ($errors->any())
                    <div class="alert alert-danger mt-3">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </form>
      </div>
    </div>
    <!-- End CTA -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
@include('student.layouts.footer')

  <!-- ========== END FOOTER ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  @include('student.components.offcanvas-cart')

  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory  -->
  <script src="{{asset('frontend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{asset('frontend/vendor/hs-header/dist/hs-header.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/hs-mega-menu/dist/hs-mega-menu.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/hs-show-animation/dist/hs-show-animation.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/hs-go-to/dist/hs-go-to.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/typed.js/lib/typed.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/fslightbox/index.js')}}"></script>
  <script src="{{asset('frontend/vendor/swiper/swiper-bundle.min.js')}}"></script>

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


      // INITIALIZATION OF SHOW ANIMATIONS
      // =======================================================
      new HSShowAnimation('.js-animation-link')


      // INITIALIZATION OF BOOTSTRAP VALIDATION
      // =======================================================
      HSBsValidation.init('.js-validate', {
        onSubmit: data => {
          data.event.preventDefault()
          alert('Submited')
        }
      })


      // INITIALIZATION OF BOOTSTRAP DROPDOWN
      // =======================================================
      HSBsDropdown.init()


      // INITIALIZATION OF GO TO
      // =======================================================
      new HSGoTo('.js-go-to')


      // INITIALIZATION OF TEXT ANIMATION (TYPING)
      // =======================================================
      HSCore.components.HSTyped.init('.js-typedjs')


      // INITIALIZATION OF SWIPER
      // =======================================================
      var swiper = new Swiper('.js-swiper-course-hero',{
        preloaderClass: 'custom-swiper-lazy-preloader',
        navigation: {
          nextEl: '.js-swiper-course-hero-button-next',
          prevEl: '.js-swiper-course-hero-button-prev',
        },
        slidesPerView: 1,
        loop: 1,
        breakpoints: {
          380: {
            slidesPerView: 2,
            spaceBetween: 15,
          },
          580: {
            slidesPerView: 3,
            spaceBetween: 15,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 15,
          },
          1024: {
            slidesPerView: 6,
            spaceBetween: 15,
          },
        },
        on: {
          'imagesReady': function (swiper) {
            const preloader = swiper.el.querySelector('.js-swiper-course-hero-preloader')
            preloader.parentNode.removeChild(preloader)
          }
        }
      });
    })()
  </script>
</body>
</html>
