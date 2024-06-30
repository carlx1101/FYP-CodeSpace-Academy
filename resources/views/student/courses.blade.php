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
                <h1 class="display-4 text-white">Course Catalog</h1>
                <p class="lead text-white mb-0">CodeSpace Course includes over <span class="fw-semibold">20,000</span> courses.</p>
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
                            @foreach($categories as $category)
                                <div class="nav nav-sm nav-pills nav-vertical">
                                    <h5 class="nav-subtitle">{{ $category->name }}</h5>
                                    @foreach($category->subcategories as $subcategory)
                                        <a class="nav-link" href="{{ route('courses', ['subcategory' => $subcategory->id]) }}">
                                            {{ $subcategory->name }}
                                            <span class="badge text-dark border rounded-pill">
                                                {{ $subcategory->courses->count() }}
                                            </span>
                                        </a>
                                    @endforeach
                                </div>
                            @endforeach
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
                            <h5 class="mb-0"><span class="text-dark fw-semibold">{{ $courses->total() }} courses</span> to get started</h5>
                        </div>
                        <!-- End Col -->

                        <div class="col-md-8 text-md-end">
                            <div class="row gx-2">
                                <div class="col-auto mb-2">
                                    <!-- Select -->
                                    <select class="form-select form-select-sm" onchange="location = this.value;">
                                        <option value="{{ request()->fullUrlWithQuery(['sort' => 'highest_rated']) }}" {{ request('sort') == 'highest_rated' ? 'selected' : '' }}>Highest rated</option>
                                        <option value="{{ request()->fullUrlWithQuery(['sort' => 'newest']) }}" {{ request('sort') == 'newest' ? 'selected' : '' }}>Newest</option>
                                        <option value="{{ request()->fullUrlWithQuery(['sort' => 'lowest_price']) }}" {{ request('sort') == 'lowest_price' ? 'selected' : '' }}>Lowest price</option>
                                        <option value="{{ request()->fullUrlWithQuery(['sort' => 'highest_price']) }}" {{ request('sort') == 'highest_price' ? 'selected' : '' }}>Highest price</option>
                                    </select>
                                    <!-- End Select -->
                                </div>
                                <!-- End Col -->

                                <div class="col-auto mb-2">
                                    <!-- Select -->
                                    <select class="form-select form-select-sm" onchange="location = this.value;">
                                        <option value="{{ request()->fullUrlWithQuery(['price' => 'paid']) }}" {{ request('price') == 'paid' ? 'selected' : '' }}>Paid</option>
                                        <option value="{{ request()->fullUrlWithQuery(['price' => 'free']) }}" {{ request('price') == 'free' ? 'selected' : '' }}>Free</option>
                                    </select>
                                    <!-- End Select -->
                                </div>
                                <!-- End Col -->

                                <div class="col-auto mb-2">
                                    <!-- Select -->
                                    <select class="form-select form-select-sm" onchange="location = this.value;">
                                        <option value="{{ request()->fullUrlWithQuery(['level' => 'beginner']) }}" {{ request('level') == 'beginner' ? 'selected' : '' }}>Beginner</option>
                                        <option value="{{ request()->fullUrlWithQuery(['level' => 'intermediate']) }}" {{ request('level') == 'intermediate' ? 'selected' : '' }}>Intermediate</option>
                                        <option value="{{ request()->fullUrlWithQuery(['level' => 'advanced']) }}" {{ request('level') == 'advanced' ? 'selected' : '' }}>Advanced</option>
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
                                    </div>
                                    <!-- End Card Pinned -->
                                </div>
                                <!-- End Col -->

                                <div class="col-sm-7">
                                    <div class="row mb-3">
                                        <div class="col">
                                            <h3 class="card-title text-inherit">{{ $course->title }}</h3>
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-auto">
                                            <div class="text-end">
                                                <h5 class="card-title text-primary">RM{{ $course->price }}</h5>
                                            </div>
                                        </div>
                                        <!-- End Col -->
                                    </div>
                                    <!-- End Row -->

                                    <div class="row align-items-center mb-2">
                                        <div class="col">
                                            <div class="avatar-group avatar-group-xs">
                                                <span class="avatar avatar-xs avatar-circle">
                                                    <img class="avatar-img" src="{{ asset('frontend/img/160x160/img5.jpg') }}" alt="Image Description">
                                                </span>
                                                <span class="avatar avatar-xs avatar-circle">
                                                    <img class="avatar-img" src="{{ asset('frontend/img/160x160/img4.jpg') }}" alt="Image Description">
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
                                                    <i class="bi-bar-chart-steps me-1"></i> All levels
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- End Col -->
                                    </div>
                                    <!-- End Row -->

                                    <p class="card-text text-body">{{ $course->subtitle }}</p>
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
                    <small class="d-none d-sm-inline-block text-body">Page {{ $courses->currentPage() }} out of {{ $courses->lastPage() }}</small>

                    {{ $courses->appends(request()->query())->links() }}
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
