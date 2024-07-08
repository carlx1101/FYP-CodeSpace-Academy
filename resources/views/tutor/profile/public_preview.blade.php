<!DOCTYPE html>
<html lang="en" dir="">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Resume</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="../favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{ asset('frontend/vendor/bootstrap-icons/font/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/vendor/hs-mega-menu/dist/hs-mega-menu.min.css') }}">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{ asset('frontend/css/theme.min.css') }}">
</head>

<body>
  <!-- ========== HEADER ========== -->
  {{-- @include('student.layouts.header') --}}
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Page Header -->
    <div class="container content-space-t-2">
      <div class="page-header">
        <!-- Media -->
        <div class="d-flex align-items-lg-center">
          <div class="flex-shrink-0">
            <img class="avatar avatar-xl avatar-circle" src="{{ asset('storage/' . $user->profile_photo_path) }}" alt="Image Description">
          </div>

          <div class="flex-grow-1 ms-4">
            <div class="row">
              <div class="col-lg mb-3 mb-lg-0">
                <h1 class="page-header-title h2">{{ $user->profile->first_name }} {{ $user->profile->last_name }}</h1>

                <ul class="list-inline list-separator">
                  <li class="list-inline-item">
                    <i class="bi-geo-alt-fill text-primary me-1"></i> {{ $user->profile->country }}, {{ $user->profile->state }}
                  </li>
                  <li class="list-inline-item">{{ $user->email }}</li>
                  <li class="list-inline-item">
                    <a href="tel:{{ $user->profile->phone }}">{{ $user->profile->phone }}</a>
                  </li>
                </ul>
              </div>
              <!-- End Col -->

              <div class="col-lg-auto align-self-lg-end text-lg-right">
                <div class="d-flex gap-2">
                  <a class="btn btn-primary btn-sm" href="mailto:{{$user->email}}">
                    <i class="bi-envelope-fill me-1"></i> Contact me
                  </a>

                  <!-- Dropdown -->
                  <div class="dropdown">
                    <a class="btn btn-outline-primary btn-sm btn-icon" href="#" id="employeeProfileShareDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                      <i class="bi-share-fill"></i>
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="employeeProfileShareDropdown">
                      <a class="dropdown-item" href="{{ $user->profile->fb_link }}">
                        <i class="bi-facebook dropdown-item-icon"></i> Facebook
                      </a>
                      <a class="dropdown-item" href="{{ $user->profile->twitter_link }}">
                        <i class="bi-twitter dropdown-item-icon"></i> Twitter
                      </a>
                      <a class="dropdown-item" href="{{ $user->profile->linkedin_link }}">
                        <i class="bi-linkedin dropdown-item-icon"></i> LinkedIn
                      </a>
                    </div>
                  </div>
                  <!-- End Dropdown -->
                </div>
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>
        </div>
        <!-- End Media -->
      </div>
    </div>
    <!-- End Page Header -->

    <!-- Content -->
    <div class="container content-space-2">
      <div class="row">
        <div class="col-lg-8">
          <div class="mb-8">
            <h3>Bio</h3>

            <p>{{ $user->profile->biography }}</p>
          </div>

          <div class="mb-8">
            <div class="mb-4">
              <h3>Work experience</h3>
            </div>

            <!-- Step -->
            <ul class="step step-icon-sm">
              @foreach($experiences as $experience)
              <li class="step-item">
                <div class="step-content-wrapper">
                  <div class="step-avatar step-avatar-sm">
                    <img class="step-avatar-img" src="{{ asset('storage/' . $experience->company_image) }}" alt="Image Description">
                  </div>
                  <div class="step-content">
                    <h5 class="step-title">{{ $experience->position }}</h5>
                    <span class="d-block text-dark">{{ $experience->company }} - {{ $experience->location }}</span>
                    <small class="d-block mb-4">{{ $experience->start_date }} to {{ $experience->end_date }}</small>
                    <p class="text-body mb-0">{{ $experience->description }}</p>
                  </div>
                </div>
              </li>
              @endforeach
            </ul>
            <!-- End Step -->
          </div>

          <div class="mb-3">
            <h3>Links</h3>
          </div>

          <ul class="list-unstyled list-py-1">
            <li><a href="{{ $user->profile->website_link }}">Website</a></li>
            <li><a href="{{ $user->profile->twitter_link }}">Twitter</a></li>
            <li><a href="{{ $user->profile->linkedin_link }}">LinkedIn</a></li>
            <li><a href="{{ $user->profile->fb_link }}">Facebook</a></li>
            <li><a href="{{ $user->profile->instagram_link }}">Instagram</a></li>
            <li><a href="{{ $user->profile->youtube_link }}">Youtube</a></li>
            <!-- Add more links as needed -->
          </ul>

          <!-- Sticky Block End Point -->
          <div id="stickyBlockEndPoint"></div>
        </div>
        <!-- End Col -->

        <div class="col-lg-4">
          <!-- Insert any sidebar content here -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
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
  <script src="{{ asset('frontend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{ asset('frontend/vendor/hs-mega-menu/dist/hs-mega-menu.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/hs-show-animation/dist/hs-show-animation.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/hs-go-to/dist/hs-go-to.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/hs-sticky-block/dist/hs-sticky-block.min.js') }}"></script>

  <!-- JS Front -->
  <script src="../assets/js/theme.min.js"></script>
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


      // INITIALIZATION OF STICKY BLOCKS
      // =======================================================
      new HSStickyBlock('.js-sticky-block', {
        targetSelector: document.getElementById('header').classList.contains('navbar-fixed') ? '#header' : null
      })
    })()
  </script>
</body>
</html>

