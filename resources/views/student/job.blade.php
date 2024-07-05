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

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{asset('frontend/css/theme.min.css')}}">
</head>

<body>
  <!-- ========== HEADER ========== -->
@include('student.layouts.header')
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Page Header -->
    <div class="container content-space-t-2">
      <div class="w-lg-75 mx-lg-auto">
        <div class="page-header">
          <!-- Media -->
          <div class="d-sm-flex mb-3">
            <div class="flex-shrink-0 mb-2 mb-sm-0">
              <a href="{{ route('employer.job_listings.show', $job->id) }}">
                <img class="avatar avatar-lg mb-3" src="{{ Storage::url($job->company->company_logo) }}" alt="{{ $job->company->name }}">
              </a>
            </div>

            <div class="flex-grow-1 ms-sm-4">
              <div class="row">
                <div class="col">
                  <h1 class="page-header-title h2">{{ $job->title }}</h1>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <ul class="list-inline list-separator d-flex align-items-center mb-2">
                <li class="list-inline-item">
                  <a class="link" href="{{ route('employer.job_listings.show', $job->id) }}">{{ $job->company->name }}</a>
                </li>
              </ul>

              <ul class="list-inline list-separator small text-body mb-2">
                <li class="list-inline-item">Posted {{ $job->created_at->diffForHumans() }}</li>
                <li class="list-inline-item">{{ $job->type }}</li>
                <li class="list-inline-item">{{ $job->mode }}</li>
                <li class="list-inline-item">{{ $job->location }}</li>
              </ul>
            </div>
          </div>
          <!-- End Media -->
        </div>
      </div>
    </div>
    <!-- End Page Header -->

    <!-- Content -->
    <div class="container content-space-2 content-space-b-lg-3">
      <div class="w-lg-75 mx-lg-auto">
        <div class="row mb-3">
          <div class="col">
            <h3>Description</h3>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->

        <p>{{ $job->description }}</p>

        <div class="d-grid mt-7">
          <a class="btn btn-primary btn-transition" href="#">Apply for this job</a>
        </div>
      </div>
    </div>
    <!-- Content -->
</main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  @include('student.layouts.footer')

  <!-- ========== END FOOTER ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Go To -->
  <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
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
  </a>
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory  -->
  <script src="{{asset('frontend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{asset('frontend/vendor/hs-mega-menu/dist/hs-mega-menu.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/hs-show-animation/dist/hs-show-animation.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/hs-go-to/dist/hs-go-to.min.js')}}"></script>

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
    })()
  </script>
</body>
</html>
