<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>My Course</title>

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

  @include('student.layouts.dashboard-header')

  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <!-- Navbar Vertical -->

@include('student.layouts.dashboard-sidebar')

  <main id="content" role="main" class="main overflow-hidden">
    <!-- Added overflow: hidden; to avoid Bootstrap horizontal scrolling issue when .btn-group > .dropdown is used in .row class -->
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Page Header -->
      <div class="page-header">
        <div class="row align-items-end">
          <div class="col-sm mb-2 mb-sm-0">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-no-gutter">
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Dashboard</a></li>
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Courses</a></li>
                <li class="breadcrumb-item active" aria-current="page">My Courses</li>
              </ol>
            </nav>

            <h1 class="page-header-title">My Courses</h1>
          </div>
          <!-- End Col -->

          {{-- <div class="col-sm-auto" aria-label="Button group">
            <!-- Button Group -->
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uploadFilesModal">
                <i class="bi-cloud-arrow-up-fill me-1"></i> Upload
              </button>

              <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" id="uploadGroupDropdown" data-bs-toggle="dropdown" aria-expanded="false"></button>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="uploadGroupDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="bi-folder-plus dropdown-item-icon"></i> New folder
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-folder-symlink dropdown-item-icon"></i> New shared folder
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:;" data-bs-toggle="modal" data-bs-target="#uploadFilesModal">
                    <i class="bi-file-earmark-arrow-up dropdown-item-icon"></i> Upload files
                  </a>
                  <a class="dropdown-item" href="javascript:;" data-bs-toggle="modal" data-bs-target="#uploadFilesModal">
                    <i class="bi-upload dropdown-item-icon"></i> Upload folder
                  </a>
                </div>
              </div>
            </div>
            <!-- End Button Group -->
          </div> --}}
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
      <!-- End Page Header -->



      <!-- Header -->
      <div class="row align-items-center mb-2">
        <div class="col">
          {{-- <h2 class="h4 mb-0">My Courses</h2> --}}
        </div>

        <div class="col-auto">
          <!-- Nav -->
          <ul class="nav nav-segment" id="connectionsTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="grid-tab" data-bs-toggle="tab" href="#grid" role="tab" aria-controls="grid" aria-selected="true" title="Column view">
                <i class="bi-grid"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="list-tab" data-bs-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false" title="List view">
                <i class="bi-view-list"></i>
              </a>
            </li>
          </ul>
          <!-- End Nav -->
        </div>
      </div>
      <!-- End Header -->

      <!-- Tab Content -->
      <div class="tab-content" id="connectionsTabContent">
        <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
          <!-- Folders -->
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">







            @foreach($courses as $course)






                <div class="col mb-3 mb-lg-5">
                <!-- Card -->
                <div class="card card-hover-shadow text-center h-100">
                    <!-- Progress -->
                    <div class="card-progress-wrap">
                    <div class="progress card-progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>
                    <!-- End Progress -->

                    <!-- Body -->
                    <div class="card-body">
                    <div class="row align-items-center text-start mb-4">
                        <div class="col">
                        <span class="badge bg-soft-success text-success p-2">Completed</span>
                        </div>

                        <div class="col-auto">
                        <!-- Dropdown -->
                        <div class="dropdown">
                            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="projectsGridDropdown6" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-three-dots-vertical"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectsGridDropdown6">
                            <a class="dropdown-item" href="{{ route('student.learn', ['courseTitle' => $course->title]) }}">Learn Course </a>

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

                    <a class="btn btn-primary" href="{{ route('student.learn', ['courseTitle' => $course->title]) }}">Learn Course </a>


                    <a class="stretched-link" href="#"></a>
                    </div>
                    <!-- End Body -->

                    <!-- Footer -->
                    <div class="card-footer">
                    <!-- Stats -->
                    <div class="row col-divider">
                        <div class="col">
                        <span class="h4">7</span>
                        <span class="d-block fs-5">Tasks</span>
                        </div>
                        <!-- End Col -->

                        <div class="col">
                        <span class="h4">7</span>
                        <span class="d-block fs-5">Completed</span>
                        </div>
                        <!-- End Col -->

                        <div class="col">
                        <span class="h4">0</span>
                        <span class="d-block fs-5">Days left</span>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Stats -->
                    </div>
                    <!-- End Footer -->
                </div>
                <!-- End Card -->
                </div>


            @endforeach





          </div>
          <!-- End Folders -->
        </div>

        <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
          <ul class="list-group">

            @foreach($courses as $course)


            <!-- List Item -->
            <li class="list-group-item">
              <div class="row align-items-center">
                <div class="col-auto">
                  <img class="avatar avatar-xs avatar-4x3" src="{{ asset('storage/' . $course->cover_image) }}" alt="{{ $course->title }}">
                </div>
                <!-- End Col -->

                <div class="col">
                  <h5 class="mb-0">
                    <a class="text-dark" href="{{ route('student.learn', ['courseTitle' => $course->title]) }}">{{$course->title}}</a>
                  </h5>
                  <ul class="list-inline list-separator small text-body">
                    <li class="list-inline-item">Updated 50 min ago</li>
                    <li class="list-inline-item">25kb</li>
                  </ul>
                </div>
                <!-- End Col -->

                <div class="col-auto">
                  <!-- Dropdown -->
                  <div class="dropdown">
                    <button type="button" class="btn btn-white btn-sm" id="filesListDropdown1" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="d-none d-sm-inline-block me-1">More</span>
                      <i class="bi-chevron-down"></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="filesListDropdown1" style="min-width: 13rem;">
                      <span class="dropdown-header">Settings</span>

                      <a class="dropdown-item" href="#">
                        <i class="bi-share dropdown-item-icon"></i> Share file
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="bi-folder-plus dropdown-item-icon"></i> Move to
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="bi-star dropdown-item-icon"></i> Add to stared
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="bi-pencil dropdown-item-icon"></i> Rename
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="bi-download dropdown-item-icon"></i> Download
                      </a>

                      <div class="dropdown-divider"></div>

                      <a class="dropdown-item" href="#">
                        <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="bi-trash dropdown-item-icon"></i> Delete
                      </a>
                    </div>
                  </div>
                  <!-- End Dropdown -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </li>
            <!-- End List Item -->



            @endforeach

          </ul>
        </div>
      </div>
      <!-- End Tab Content -->
    </div>
    <!-- End Content -->

    <!-- Footer -->

    @include('student.layouts.dashboard-footer')

    <!-- End Footer -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->



  <!-- JS Global Compulsory  -->
  <script src="{{asset('backend/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('backend/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('backend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{asset('backend/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js')}}"></script>
  <script src="{{asset('backend/vendor/hs-form-search/dist/hs-form-search.min.js')}}"></script>

  <script src="{{asset('backend/vendor/hs-nav-scroller/dist/hs-nav-scroller.min.js')}}"></script>
  <script src="{{asset('backend/vendor/dropzone/dist/min/dropzone.min.js')}}"></script>

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


        // INITIALIZATION OF DROPZONE
        // =======================================================
        HSCore.components.HSDropzone.init('.js-dropzone')
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
