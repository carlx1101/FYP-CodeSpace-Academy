<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>User Information</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{asset('backend/vendor/bootstrap-icons/font/bootstrap-icons.css')}}">

  <!-- CSS Front Template -->

  <link rel="preload" href="{{asset('backend/css/theme.min.css')}}" data-hs-appearance="default" as="style">
  <link rel="preload" href="{{asset('backend/css/theme-dark.min.css')}}" data-hs-appearance="dark" as="style">

  <style data-hs-appearance-onload-styles>
    *
    {
      transition: unset !important;
    }

    body
    {
      opacity: 0;
    }
  </style>

  <script>
            window.hs_config = {"autopath":"@@autopath","deleteLine":"hs-builder:delete","deleteLine:build":"hs-builder:build-delete","deleteLine:dist":"hs-builder:dist-delete","previewMode":false,"startPath":"/index.html","vars":{"themeFont":"https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap","version":"?v=1.0"},"layoutBuilder":{"extend":{"switcherSupport":true},"header":{"layoutMode":"default","containerMode":"container-fluid"},"sidebarLayout":"default"},"themeAppearance":{"layoutSkin":"default","sidebarSkin":"default","styles":{"colors":{"primary":"#377dff","transparent":"transparent","white":"#fff","dark":"132144","gray":{"100":"#f9fafc","900":"#1e2022"}},"font":"Inter"}},"languageDirection":{"lang":"en"},"skipFilesFromBundle":{"dist":["assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","assets/js/demo.js"],"build":["assets/css/theme.css","assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js","assets/js/demo.js","assets/css/theme-dark.css","assets/css/docs.css","assets/vendor/icon-set/style.css","assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","node_modules/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js","assets/js/demo.js"]},"minifyCSSFiles":["assets/css/theme.css","assets/css/theme-dark.css"],"copyDependencies":{"dist":{"*assets/js/theme-custom.js":""},"build":{"*assets/js/theme-custom.js":"","node_modules/bootstrap-icons/font/*fonts/**":"assets/css"}},"buildFolder":"","replacePathsToCDN":{},"directoryNames":{"src":"./src","dist":"./dist","build":"./build"},"fileNames":{"dist":{"js":"theme.min.js","css":"theme.min.css"},"build":{"css":"theme.min.css","js":"theme.min.js","vendorCSS":"vendor.min.css","vendorJS":"vendor.min.js"}},"fileTypes":"jpg|png|svg|mp4|webm|ogv|json"}
            window.hs_config.gulpRGBA = (p1) => {
  const options = p1.split(',')
  const hex = options[0].toString()
  const transparent = options[1].toString()

  var c;
  if(/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)){
    c= hex.substring(1).split('');
    if(c.length== 3){
      c= [c[0], c[0], c[1], c[1], c[2], c[2]];
    }
    c= '0x'+c.join('');
    return 'rgba('+[(c>>16)&255, (c>>8)&255, c&255].join(',')+',' + transparent + ')';
  }
  throw new Error('Bad Hex');
}
            window.hs_config.gulpDarken = (p1) => {
  const options = p1.split(',')

  let col = options[0].toString()
  let amt = -parseInt(options[1])
  var usePound = false

  if (col[0] == "#") {
    col = col.slice(1)
    usePound = true
  }
  var num = parseInt(col, 16)
  var r = (num >> 16) + amt
  if (r > 255) {
    r = 255
  } else if (r < 0) {
    r = 0
  }
  var b = ((num >> 8) & 0x00FF) + amt
  if (b > 255) {
    b = 255
  } else if (b < 0) {
    b = 0
  }
  var g = (num & 0x0000FF) + amt
  if (g > 255) {
    g = 255
  } else if (g < 0) {
    g = 0
  }
  return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
}
            window.hs_config.gulpLighten = (p1) => {
  const options = p1.split(',')

  let col = options[0].toString()
  let amt = parseInt(options[1])
  var usePound = false

  if (col[0] == "#") {
    col = col.slice(1)
    usePound = true
  }
  var num = parseInt(col, 16)
  var r = (num >> 16) + amt
  if (r > 255) {
    r = 255
  } else if (r < 0) {
    r = 0
  }
  var b = ((num >> 8) & 0x00FF) + amt
  if (b > 255) {
    b = 255
  } else if (b < 0) {
    b = 0
  }
  var g = (num & 0x0000FF) + amt
  if (g > 255) {
    g = 255
  } else if (g < 0) {
    g = 0
  }
  return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
}
            </script>
</head>

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl   footer-offset">

  <script src="{{asset('backend/js/hs.theme-appearance.js')}}"></script>

  <script src="{{asset('backend/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js')}}"></script>

  <!-- ========== HEADER ========== -->

  @include('tutor.layouts.header')

  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <!-- Navbar Vertical -->

  @include('tutor.layouts.sidebar')


  <main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <div class="row justify-content-lg-center">
        <div class="col-lg-10">
          <!-- Profile Cover -->
          <div class="profile-cover">
            <div class="profile-cover-img-wrapper">
                <img class="profile-cover-img" src="{{ asset('storage/' . $student->profile->cover_banner) }}" alt="Image Description">
            </div>
          </div>
          <!-- End Profile Cover -->

          <!-- Profile Header -->
          <div class="text-center mb-5">
            <!-- Avatar -->
            <div class="avatar avatar-xxl avatar-circle profile-cover-avatar">
                <img class="avatar-img" src="{{ asset('storage/' . $student->profile_photo_path) }}" alt="{{ $student->name }}">
                {{-- <span class="avatar-status avatar-status-success"></span> --}}
            </div>
            <!-- End Avatar -->

            @php
            $latestExperience = $student->profile->experiences->sortByDesc('end_date')->first();
            @endphp

            <h1 class="page-header-title">{{$student->profile->first_name}}{{$student->profile->last_name}} <i class="bi-patch-check-fill fs-2 text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></h1>

            <!-- List -->
            <ul class="list-inline list-px-2">
                <li class="list-inline-item">
                    <i class="bi-building me-1"></i>
                    <span>{{ $latestExperience->company_name ?? 'No company' }}</span>
                </li>

                <li class="list-inline-item">
                    <i class="bi-geo-alt me-1"></i>
                    <span> {{ $student->profile->state }}, {{ $student->profile->country }}</span>
                </li>

                <li class="list-inline-item">
                    <i class="bi-calendar-week me-1"></i>
                    <span>Joined {{ \Carbon\Carbon::parse($student->created_at)->format('F Y') }}</span>
                </li>
            </ul>
            <!-- End List -->


            <h4>
                " {{$student->profile->headline}} "
            </h4>
            <p>
                {{ $student->profile->biography }}
            </p>
          </div>
          <!-- End Profile Header -->

          <!-- Nav -->
          {{-- <div class="js-nav-scroller hs-nav-scroller-horizontal mb-5">
            <span class="hs-nav-scroller-arrow-prev" style="display: none;">
              <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                <i class="bi-chevron-left"></i>
              </a>
            </span>

            <span class="hs-nav-scroller-arrow-next" style="display: none;">
              <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                <i class="bi-chevron-right"></i>
              </a>
            </span>

            <ul class="nav nav-tabs align-items-center">
              <li class="nav-item">
                <a class="nav-link active" href="./user-profile.html">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="./user-profile-teams.html">Teams</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="./user-profile-projects.html">Projects <span class="badge bg-soft-dark text-dark rounded-circle ms-1">3</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="./user-profile-connections.html">Connections</a>
              </li>

              <li class="nav-item ms-auto">
                <div class="d-flex gap-2">
                  <!-- Form Check -->
                  <div class="form-check form-check-switch">
                    <input class="form-check-input" type="checkbox" value="" id="connectCheckbox">
                    <label class="form-check-label btn btn-sm" for="connectCheckbox">
                      <span class="form-check-default">
                        <i class="bi-person-plus-fill"></i> Connect
                      </span>
                      <span class="form-check-active">
                        <i class="bi-check-lg me-2"></i> Connected
                      </span>
                    </label>
                  </div>
                  <!-- End Form Check -->

                  <a class="btn btn-icon btn-sm btn-white" href="#">
                    <i class="bi-list-ul me-1"></i>
                  </a>

                  <!-- Dropdown -->
                  <div class="dropdown nav-scroller-dropdown">
                    <button type="button" class="btn btn-white btn-icon btn-sm" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bi-three-dots-vertical"></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="profileDropdown">
                      <span class="dropdown-header">Settings</span>

                      <a class="dropdown-item" href="#">
                        <i class="bi-share-fill dropdown-item-icon"></i> Share profile
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="bi-slash-circle dropdown-item-icon"></i> Block page and profile
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="bi-info-circle dropdown-item-icon"></i> Suggest edits
                      </a>

                      <div class="dropdown-divider"></div>

                      <span class="dropdown-header">Feedback</span>

                      <a class="dropdown-item" href="#">
                        <i class="bi-flag dropdown-item-icon"></i> Report
                      </a>
                    </div>
                  </div>
                  <!-- End Dropdown -->
                </div>
              </li>
            </ul>
          </div> --}}
          <!-- End Nav -->

          <div class="row">
            <div class="col-lg-4">


              <!-- Sticky Block Start Point -->
              <div id="accountSidebarNav"></div>

              <!-- Card -->
              <div class="js-sticky-block card mb-3 mb-lg-5" data-hs-sticky-block-options='{
                     "parentSelector": "#accountSidebarNav",
                     "breakpoint": "lg",
                     "startPoint": "#accountSidebarNav",
                     "endPoint": "#stickyBlockEndPoint",
                     "stickyOffsetTop": 20
                   }'>
                <!-- Header -->
                <div class="card-header">
                  <h4 class="card-header-title">Profile</h4>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="card-body">
                    <ul class="list-unstyled list-py-2 text-dark mb-0">
                        <li class="pb-0"><span class="card-subtitle">About</span></li>
                        <li><i class="bi-person dropdown-item-icon"></i> {{ $student->profile->first_name }} {{ $student->profile->last_name }}</li>
                        <li><i class="bi-briefcase dropdown-item-icon"></i> {{ $latestExperience->position ?? 'No department' }}</li>
                        <li><i class="bi-building dropdown-item-icon"></i> {{ $latestExperience->company_name ?? 'No company' }}</li>

                        <li class="pt-4 pb-0"><span class="card-subtitle">Contacts</span></li>
                        <li><i class="bi-at dropdown-item-icon"></i> {{ $student->email }}</li>
                        <li><i class="bi-phone dropdown-item-icon"></i> {{ $student->profile->phone }}</li>

                        <li class="pt-4 pb-0"><span class="card-subtitle">Location</span></li>
                        <li><i class="bi-geo-alt dropdown-item-icon"></i> {{ $student->profile->address_line_one }}, {{ $student->profile->address_line_two }}, {{ $student->profile->state }}, {{ $student->profile->country }}</li>
                        <li><i class="bi-calendar3 dropdown-item-icon"></i> Joined on {{ \Carbon\Carbon::parse($student->created_at)->format('M d, Y') }}</li>

                        <li class="pt-4 pb-0"><span class="card-subtitle">Social Media</span></li>

                        @if($student->profile->instagram_link)
                        <li><i class="bi-instagram dropdown-item-icon"></i> <a href="{{ $student->profile->instagram_link }}">Instagram</a></li>
                        @endif
                        @if($student->profile->facebook_link)
                        <li><i class="bi-facebook dropdown-item-icon"></i> <a href="{{ $student->profile->facebook_link }}">Facebook</a></li>
                        @endif
                        @if($student->profile->twitter_link)
                        <li><i class="bi-twitter dropdown-item-icon"></i> <a href="{{ $student->profile->twitter_link }}">Twitter</a></li>
                        @endif
                        @if($student->profile->linkedin_link)
                        <li><i class="bi-linkedin dropdown-item-icon"></i> <a href="{{ $student->profile->linkedin_link }}">LinkedIn</a></li>
                        @endif
                        @if($student->profile->youtube_link)
                        <li><i class="bi-youtube dropdown-item-icon"></i> <a href="{{ $student->profile->youtube_link }}">YouTube</a></li>
                        @endif
                        @if($student->profile->website_link)
                        <li><i class="bi-globe dropdown-item-icon"></i> <a href="{{ $student->profile->website_link }}">Website</a></li>
                        @endif

                    </ul>
                </div>

                <!-- End Body -->
              </div>
              <!-- End Card -->
            </div>

            <div class="col-lg-8">
              <div class="d-grid gap-3 gap-lg-5">
                <!-- Card -->
                <div class="card">
                  <!-- Header -->
                  <div class="card-header card-header-content-between">
                    <h4 class="card-header-title">Learning Progress</h4>

                    <!-- Dropdown -->
                    <div class="dropdown">
                      <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="contentActivityStreamDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi-three-dots-vertical"></i>
                      </button>

                      <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="contentActivityStreamDropdown">
                        <span class="dropdown-header">Settings</span>

                        <a class="dropdown-item" href="#">
                          <i class="bi-share-fill dropdown-item-icon"></i> Share connections
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="bi-info-circle dropdown-item-icon"></i> Suggest edits
                        </a>

                        <div class="dropdown-divider"></div>

                        <span class="dropdown-header">Feedback</span>

                        <a class="dropdown-item" href="#">
                          <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                        </a>
                      </div>
                    </div>
                    <!-- End Dropdown -->
                  </div>
                  <!-- End Header -->

                  <!-- Body -->
                  <div class="card-body card-body-height" style="height: 30rem;">
                    <!-- Step -->
                    <ul class="step step-icon-xs mb-0">




                        @if ($courseCompleted)
                        <!-- Step Item for Course Completion -->
                        <li class="step-item">
                            <div class="step-content-wrapper">
                                <span class="step-icon step-icon-pseudo step-icon-soft-dark"></span>
                                <div class="step-content">
                                    <h5 class="step-title">
                                        <a class="text-dark" href="#">Course Completed</a>
                                    </h5>
                                    <p class="fs-5 mb-1">{{ $student->profile->first_name }} {{ $student->profile->last_name }} has completed the course</p>
                                    <span class="text-muted small text-uppercase">{{ \Carbon\Carbon::parse($lastLessonCompletedAt)->format('F d, Y') }}</span>
                                </div>
                            </div>
                        </li>
                    @endif

                    @if ($completedLessons->isEmpty())
                        <p>No completed lessons available.</p>
                    @else
                        @foreach($completedLessons as $lesson)
                            <!-- Step Item for Completed Lessons -->
                            <li class="step-item">
                                <div class="step-content-wrapper">
                                    <span class="step-icon step-icon-pseudo step-icon-soft-dark"></span>
                                    <div class="step-content">
                                        <h5 class="step-title">
                                            <a class="text-dark" href="#">{{ $lesson['lesson_title'] }}</a>
                                        </h5>
                                        <p class="fs-5 mb-1">{{ $student->profile->first_name }} {{ $student->profile->last_name }} successfully completed {{ $lesson['lesson_title'] }}</p>
                                        <span class="text-muted small text-uppercase">{{ \Carbon\Carbon::parse($lesson['completed_at'])->format('F d, Y') }}</span>
                                    </div>
                                </div>
                            </li>
                            <!-- End Step Item -->
                        @endforeach
                    @endif

                    <!-- Step Item for Course Join Date -->
                    <li class="step-item">
                        <div class="step-content-wrapper">
                            <span class="step-icon step-icon-pseudo step-icon-soft-dark"></span>
                            <div class="step-content">
                                <h5 class="step-title">
                                    <a class="text-dark" href="#">Joined the Course</a>
                                </h5>
                                <p class="fs-5 mb-1">{{ $student->profile->first_name }} {{ $student->profile->last_name }} enrolled in the course</p>
                                <span class="text-muted small text-uppercase">{{ \Carbon\Carbon::parse($student->created_at)->format('F d, Y') }}</span>
                            </div>
                        </div>
                    </li>

                    </ul>
                    <!-- End Step -->
                    </div>
                    <!-- End Body -->

                    <!-- Footer -->
                    <div class="card-footer">
                        <a class="link link-collapse" data-bs-toggle="collapse" href="#collapseActivitySection" role="button" aria-expanded="false" aria-controls="collapseActivitySection">
                        <span class="link-collapse-default">View more</span>
                        <span class="link-collapse-active">View less</span>
                        </a>
                    </div>
                    <!-- End Footer -->




                </div>
                <!-- End Card -->



              </div>

              <!-- Sticky Block End Point -->
              <div id="stickyBlockEndPoint"></div>
            </div>
          </div>
          <!-- End Row -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Content -->

    <!-- Footer -->
    @include('tutor.layouts.footer')

    <!-- End Footer -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->

  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory  -->
  <script src="{{asset('backend/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('backend/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('backend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{asset('backend/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js')}}"></script>
  <script src="{{asset('backend/vendor/hs-form-search/dist/hs-form-search.min.js')}}"></script>

  <script src="{{asset('backend/vendor/hs-nav-scroller/dist/hs-nav-scroller.min.js')}}"></script>
  <script src="{{asset('backend/vendor/hs-sticky-block/dist/hs-sticky-block.min.js')}}"></script>

  <!-- JS Front -->
  <script src="{{asset('backend/js/theme.min.js')}}"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      window.onload = function () {


        // INITIALIZATION OF NAVBAR VERTICAL ASIDE
        // =======================================================
        new HSSideNav('.js-navbar-vertical-aside').init()


        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        new HSFormSearch('.js-form-search')


        // INITIALIZATION OF BOOTSTRAP DROPDOWN
        // =======================================================
        HSBsDropdown.init()


        // INITIALIZATION OF NAV SCROLLER
        // =======================================================
        new HsNavScroller('.js-nav-scroller')


        // INITIALIZATION OF STICKY BLOCKS
        // =======================================================
        new HSStickyBlock('.js-sticky-block', {
          targetSelector: document.getElementById('header').classList.contains('navbar-fixed') ? '#header' : null
        })
      }
    })()
  </script>

  <!-- Style Switcher JS -->

  <script>
      (function () {
        // STYLE SWITCHER
        // =======================================================
        const $dropdownBtn = document.getElementById('selectThemeDropdown') // Dropdowon trigger
        const $variants = document.querySelectorAll(`[aria-labelledby="selectThemeDropdown"] [data-icon]`) // All items of the dropdown

        // Function to set active style in the dorpdown menu and set icon for dropdown trigger
        const setActiveStyle = function () {
          $variants.forEach($item => {
            if ($item.getAttribute('data-value') === HSThemeAppearance.getOriginalAppearance()) {
              $dropdownBtn.innerHTML = `<i class="${$item.getAttribute('data-icon')}" />`
              return $item.classList.add('active')
            }

            $item.classList.remove('active')
          })
        }

        // Add a click event to all items of the dropdown to set the style
        $variants.forEach(function ($item) {
          $item.addEventListener('click', function () {
            HSThemeAppearance.setAppearance($item.getAttribute('data-value'))
          })
        })

        // Call the setActiveStyle on load page
        setActiveStyle()

        // Add event listener on change style to call the setActiveStyle function
        window.addEventListener('on-hs-appearance-change', function () {
          setActiveStyle()
        })
      })()
    </script>

  <!-- End Style Switcher JS -->
</body>
</html>
