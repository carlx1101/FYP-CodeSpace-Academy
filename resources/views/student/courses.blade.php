<!DOCTYPE html>
<html lang="en" dir="">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>All Courses </title>

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
    <!-- Banner -->
    <div class="container content-space-t-1">
      <div class="bg-primary rounded-2" style="background: url(../assets/svg/illustrations/master-adobe-ai-book.svg) right bottom no-repeat;">
        <div class="w-lg-50 py-8 px-6">
          <h1 class="display-4 text-white">Course catalog</h1>
          <p class="lead text-white mb-0">Front Course includes over <span class="fw-semibold">20,000</span> courses.</p>
        </div>
      </div>
    </div>
    <!-- End Banner -->

    <!-- Card List -->
    <div class="container content-space-2 content-space-b-lg-3">
      <div class="row">
        <div class="col-lg-3 mb-5 mb-lg-0">
          <!-- Navbar -->
          <div class="navbar-expand-lg">
            <!-- Navbar Toggle -->
            <div class="d-grid">
              <button type="button" class="navbar-toggler btn btn-white rounded mb-3" data-bs-toggle="collapse" data-bs-target="#navbarVerticalNavMenu" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarVerticalNavMenu">
                <span class="d-flex justify-content-between align-items-center">
                  <span class="text-dark">Menu</span>

                  <span class="navbar-toggler-default">
                    <i class="bi-list"></i>
                  </span>

                  <span class="navbar-toggler-toggled">
                    <i class="bi-x"></i>
                  </span>
                </span>
              </button>
            </div>
            <!-- End Navbar Toggle -->

            <!-- Navbar Collapse -->
            <div id="navbarVerticalNavMenu" class="collapse navbar-collapse">
              <div class="d-grid gap-4 flex-grow-1">
                <div class="nav nav-sm nav-pills nav-vertical">
                  <h5 class="nav-subtitle">Artificial Intelligence</h5>
                  <a class="nav-link d-flex justify-content-between" href="#">AI Product Manager <span class="badge text-dark border rounded-pill">30+</span></a>
                  <a class="nav-link" href="#">AI Programming with Python</a>
                  <a class="nav-link d-flex justify-content-between" href="#">Computer Vision <span class="badge bg-success rounded-pill">New</span></a>
                  <a class="nav-link" href="#">Deep Learning</a>
                  <a class="nav-link d-flex justify-content-between" href="#">Deep Reinforcement Learning <span class="badge text-dark border rounded-pill">18</span></a>
                </div>

                <div class="nav nav-sm nav-pills nav-vertical">
                  <h5 class="nav-subtitle">Data Science</h5>
                  <a class="nav-link" href="#">Business Analytics</a>
                  <a class="nav-link d-flex justify-content-between" href="#">Data Analyst <span class="badge bg-success rounded-pill">New</span></a>
                  <a class="nav-link" href="#">Data Engineer</a>
                  <a class="nav-link d-flex justify-content-between" href="#">Data Scientist <span class="badge text-dark border rounded-pill">4</span></a>
                  <a class="nav-link" href="#">Data Visualization</a>
                  <a class="nav-link" href="#">Predictive Analytics for Business</a>
                  <a class="nav-link" href="#">Programming for Data Science</a>
                </div>

                <div class="nav nav-sm nav-pills nav-vertical">
                  <h5 class="nav-subtitle">Programming and Development</h5>
                  <a class="nav-link" href="#">AI Programming with Python</a>
                  <a class="nav-link" href="#">Android Basics</a>
                  <a class="nav-link" href="#">Android Developer</a>
                  <a class="nav-link d-flex justify-content-between" href="#">Blockchain <span class="badge text-dark border rounded-pill">7</span></a>
                  <a class="nav-link" href="#">C++</a>
                  <a class="nav-link" href="#">Front End Web Developer</a>
                  <a class="nav-link" href="#">Java Developer</a>
                  <a class="nav-link d-flex justify-content-between" href="#">iOS <span class="badge bg-success rounded-pill">New</span></a>
                  <a class="nav-link" href="#">Intro to Programming</a>
                </div>

                <div class="nav nav-sm nav-pills nav-vertical">
                  <h5 class="nav-subtitle">Cloud Computing</h5>
                  <a class="nav-link d-flex justify-content-between" href="#">Cloud Developer <span class="badge text-dark border rounded-pill">9+</span></a>
                  <a class="nav-link" href="#">Cloud Dev Ops Engineer</a>
                </div>

                <div class="nav nav-sm nav-pills nav-vertical">
                  <h5 class="nav-subtitle">Business</h5>
                  <a class="nav-link" href="#">Business Analytics</a>
                  <a class="nav-link" href="#">Digital Marketing</a>
                  <a class="nav-link" href="#">Marketing Analytics</a>
                </div>

                <div class="nav nav-sm nav-pills nav-vertical">
                  <h5 class="nav-subtitle">Career</h5>
                  <a class="nav-link" href="#">Applying to Jobs</a>
                  <a class="nav-link" href="#">Interviewing</a>
                </div>
              </div>
            </div>
            <!-- End Navbar Collapse -->
          </div>
          <!-- End Navbar -->
        </div>
        <!-- End Col -->

        <div class="col-lg-9">
          <!-- Filter -->
          <div class="border-bottom pb-3 mb-5">
            <div class="row justify-content-md-start align-items-md-center">
              <div class="col-md-4 mb-3 mb-md-0">
                <h5 class="mb-0"><span class="text-dark fw-semibold">195 courses</span> to get started</h5>
              </div>
              <!-- End Col -->

              <div class="col-md-8 text-md-end">
                <div class="row gx-2">
                  <div class="col-auto mb-2">
                    <!-- Select -->
                    <select class="form-select form-select-sm">
                      <option value="sort1">Highest rated</option>
                      <option value="sort2">Newest</option>
                      <option value="sort3">Lowest price</option>
                      <option value="sort4">Highest price</option>
                    </select>
                    <!-- End Select -->
                  </div>
                  <!-- End Col -->

                  <div class="col-auto mb-2">
                    <!-- Select -->
                    <select class="form-select form-select-sm">
                      <option value="price1" selected>Paid</option>
                      <option value="price2">Free</option>
                    </select>
                    <!-- End Select -->
                  </div>
                  <!-- End Col -->

                  <div class="col-auto mb-2">
                    <!-- Select -->
                    <select class="form-select form-select-sm">
                      <option value="duration1">0-3 hours</option>
                      <option value="duration2">3-9 hours</option>
                      <option value="duration3">9-24 hours</option>
                      <option value="duration4" selected>24+ hours</option>
                    </select>
                    <!-- End Select -->
                  </div>
                  <!-- End Col -->

                  <div class="col-auto mb-2">
                    <!-- Select -->
                    <select class="form-select form-select-sm">
                      <option value="beginner" selected>Beginner</option>
                      <option value="intermediate">Intermediate</option>
                      <option value="advanced">Advanced</option>
                    </select>
                    <!-- End Select -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>
          <!-- End Filter -->

          <div class="d-grid gap-5 mb-10">

            @foreach ($courses as $course)

            <!-- Card -->
            <a class="card card-flush" href="{{ route('course', $course->id) }}">
              <div class="row align-items-md-center">
                <div class="col-sm-5 mb-3 mb-sm-0">
                  <!-- Card Pinned -->
                  <div class="card-pinned">
                    <img class="card-img" src="{{ asset('storage/' . $course->cover_image) }}" alt="{{ $course->title }}">
{{--
                    <div class="card-pinned-bottom-start">
                      <div class="d-flex align-items-center flex-wrap">
                        <!-- Rating -->
                        <div class="d-flex gap-1">
                          <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                          <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                          <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                          <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                          <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                        </div>
                        <!-- End Rating -->
                        <div class="ms-1">
                          <span class="fw-semibold text-white small me-1">4.95</span>
                          <span class="text-white-70 small">(1k+ reviews)</span>
                        </div>
                      </div>
                    </div> --}}
                  </div>
                  <!-- End Card Pinned -->
                </div>
                <!-- End Col -->

                <div class="col-sm-7">
                  <div class="row mb-3">
                    <div class="col">
                      <h3 class="card-title text-inherit">{{$course->subtitle}}</h3>
                    </div>
                    <!-- End Col -->

                    <div class="col-auto">
                      <div class="text-end">
                        {{-- <p class="text-muted small mb-0"><del>$129.99</del></p> --}}
                        <h5 class="card-title text-primary">RM{{$course->price}}</h5>
                      </div>
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->

                  <div class="row align-items-center mb-2">
                    <div class="col">
                      <div class="avatar-group avatar-group-xs">
                        <span class="avatar avatar-xs avatar-circle">
                          <img class="avatar-img" src="{{asset('frontend/img/160x160/img5.jpg')}}" alt="Image Description">
                        </span>
                        <span class="avatar avatar-xs avatar-circle">
                          <img class="avatar-img" src="{{asset('frontend/img/160x160/img4.jpg')}}" alt="Image Description">
                        </span>
                      </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-auto">
                      <ul class="list-inline list-separator text-body small">
                        <li class="list-inline-item">
                          <i class="bi-book me-1"></i> {{ $course->lessons_count }} lessons
                        </li>
                        <li class="list-inline-item">
                          <i class="bi-clock me-1"></i> 7h 59m
                        </li>
                        <li class="list-inline-item">
                          <i class="bi-bar-char-steps me-1"></i> All levels
                        </li>
                      </ul>
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->

                  <p class="card-text text-body">{{$course->subtitle}}</p>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </a>
            <!-- End Card -->

            @endforeach


          </div>

          <!-- Pagination -->
          <div class="d-flex justify-content-between align-items-center">
            <small class="d-none d-sm-inline-block text-body">Page 1 out of 6</small>

            <nav aria-label="Page navigation">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">
                      <i class="bi-chevron-double-left small"></i>
                    </span>
                  </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">
                      <i class="bi-chevron-double-right small"></i>
                    </span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
          <!-- End Pagination -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Card List -->

    <!-- CTA -->
    <div class="container content-space-b-2">
      <div class="text-center bg-img-start py-6" style="background: url(../assets/svg/components/shape-6.svg) center no-repeat;">
        <div class="mb-5">
          <h2>Find the right learning path for you</h2>
          <p>Answer a few questions and match your goals to our programs.</p>
        </div>

        <a class="btn btn-primary btn-transition" href="#">Explore by category</a>
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
  <script src="{{asset('frontend/vendor/hs-go-to/dist/hs-go-to.min.js')}}"></script>

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
    })()
  </script>
</body>
</html>
