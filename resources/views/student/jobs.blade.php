<!DOCTYPE html>
<html lang="en" dir="">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Jobs</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="../favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{asset('frontend/vendor/bootstrap-icons/font/bootstrap-icons.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/vendor/hs-mega-menu/dist/hs-mega-menu.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/vendor/nouislider/dist/nouislider.min.css')}}">

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
    <div class="gradient-x-three-sm-primary">
      <div class="container content-space-2">
        <form method="GET" action="{{ route('jobs') }}">
            <!-- Input Card -->
            <div class="input-card input-card-sm mb-3">
                <div class="input-card-form">
                    <label for="jobTitleForm" class="form-label visually-hidden">Job, title, skills, or company</label>
                    <div class="input-group input-group-merge">
                        <span class="input-group-prepend input-group-text">
                            <i class="bi-search"></i>
                        </span>
                        <input type="text" class="form-control" name="search" id="jobTitleForm" placeholder="Job, title, skills, or company" aria-label="Job, title, skills, or company" value="{{ request('search') }}">
                    </div>
                </div>

                <div class="input-card-form">
                    <label for="cityForm" class="form-label visually-hidden">City, state, or zip</label>
                    <div class="input-group input-group-merge">
                        <span class="input-group-prepend input-group-text">
                            <i class="bi-geo-alt"></i>
                        </span>
                        <input type="text" class="form-control" name="location" id="cityForm" placeholder="City, state, or zip" aria-label="City, state, or zip" value="{{ request('location') }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
            <!-- End Input Card -->
        </form>


        <!-- End Row -->
      </div>
    </div>
    <!-- End Hero -->

    <!-- Card Grid -->
    <div class="container content-space-t-1 content-space-t-md-2 content-space-b-2 content-space-b-lg-3">
      <div class="row">


        <div>
          <div class="row align-items-center mb-5">
            <div class="col-sm mb-3 mb-sm-0">
              <h3 class="mb-0">{{$jobs->count()}} jobs show</h3>
            </div>

            <div class="col-sm-auto">
              <div class="d-sm-flex justify-content-sm-end align-items-center">
                <!-- Select -->
                <div class="mb-2 mb-sm-0 me-sm-2">
                  <select class="form-select form-select-sm">
                    <option value="Relevance" selected>Relevance</option>
                    <option value="mostRecent">Most recent</option>
                  </select>
                </div>
                <!-- End Select -->

                <!-- Select -->
                <div class="mb-2 mb-sm-0 me-sm-2">
                  <select class="form-select form-select-sm">
                    <option value="alphabeticalOrderSelect1" selected>A-to-Z</option>
                    <option value="alphabeticalOrderSelect2">Z-to-A</option>
                  </select>
                </div>
                <!-- End Select -->


              </div>
            </div>
          </div>
          <!-- End Row -->

          <!-- Card List -->
          <div class="d-grid gap-5 mb-10">
            @foreach ($jobs as $job)
            <!-- Card -->
            <div class="card card-bordered mb-3">
              <div class="card-body">
                <!-- Media -->
                <div class="d-sm-flex">
                  <!-- Media -->
                  <div class="d-flex align-items-center align-items-sm-start mb-3">
                    <div class="flex-shrink-0">


                        <img class="avatar avatar-sm avatar-4x3" src="{{ Storage::url($job->company->company_logo) }}" alt="Image Description">
                    </div>
                    <div class="d-sm-none flex-grow-1 ms-3">
                      <h6 class="card-title">
                        <a class="text-dark" href="{{ route('employer.job_listings.show', $job->id) }}">{{ $job->company->name ?? 'Company Name' }}</a>
                      </h6>
                    </div>
                  </div>
                  <!-- End Media -->

                  <div class="flex-grow-1 ms-sm-3">
                    <div class="row">
                      <div class="col col-md-8">
                        <h3 class="card-title">
                          <a class="text-dark" href="{{ route('jobs.show', $job->id) }}">{{ $job->title }}</a>
                        </h3>
                        <div class="d-none d-sm-inline-block">
                          <h6 class="card-title">
                            <a class="text-dark" href="{{ route('jobs.show', $job->id) }}">{{ $job->company->name ?? 'Company Name' }}</a>
                            <img class="avatar avatar-xss ms-1" src="{{ asset('assets/svg/illustrations/top-vendor.svg') }}" alt="Review rating" data-toggle="tooltip" data-placement="top" title="Claimed profile">
                          </h6>
                        </div>
                      </div>
                      <!-- End Col -->

                      <div class="col-auto order-md-3">
                        <!-- Checkbbox Bookmark -->
                        <a href="{{ route('jobs.show', $job->id) }}" class="btn btn-white">Learn More</a>
                        <!-- End Checkbbox Bookmark -->
                      </div>
                      <!-- End Col -->
                    </div>
                    <!-- End Row -->
                  </div>
                </div>
                <!-- End Media -->
              </div>

              <div class="card-footer pt-0">
                <ul class="list-inline list-separator small text-body">
                  <li class="list-inline-item">Posted {{ $job->created_at->diffForHumans() }}</li>
                  <li class="list-inline-item">{{ $job->type }}</li>
                  <li class="list-inline-item">{{ $job->mode }}</li>
                  <li class="list-inline-item">{{ $job->location }}</li>
                </ul>
              </div>
            </div>
            <!-- End Card -->
        @endforeach



          </div>
          <!-- End Card List -->

          <!-- Pagination -->
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
          <!-- End Pagination -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Card Grid -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  @include('student.layouts.footer')


  <!-- ========== END FOOTER ========== -->



  <!-- JS Global Compulsory  -->
  <script src="{{asset('frontend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{asset('frontend/vendor/hs-mega-menu/dist/hs-mega-menu.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/hs-show-animation/dist/hs-show-animation.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/hs-go-to/dist/hs-go-to.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/nouislider/dist/nouislider.min.js')}}"></script>

  <!-- JS Front -->
  <script src="{{asset('frontend/js/theme.min.js')}}"></script>
  <!-- JS Plugins Init. -->
  <script>
    (function() {
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


      // INITIALIZATION OF BOOTSTRAP DROPDOWN
      // =======================================================
      HSBsDropdown.init()


      // INITIALIZATION OF GO TO
      // =======================================================
      new HSGoTo('.js-go-to')


      // INITIALIZATION OF NOUISLIDER`
      // =======================================================
      HSCore.components.HSNoUISlider.init('.js-nouislider')
    })()
  </script>
</body>
</html>
