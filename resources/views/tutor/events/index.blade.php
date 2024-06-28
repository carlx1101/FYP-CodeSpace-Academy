<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Calendar</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{asset('backend/vendor/bootstrap-icons/font/bootstrap-icons.css')}}">

  <link rel="stylesheet" href="{{asset('backend/vendor/tom-select/dist/css/tom-select.bootstrap5.css')}}">
  <link rel="stylesheet" href="{{asset('backend/vendor/fullcalendar/main.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/vendor/flatpickr/dist/flatpickr.min.css')}}">

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
      <!-- Page Header -->
      <div class="page-header">
        <div class="row align-items-end">
          <div class="col-sm mb-2 mb-sm-0">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-no-gutter">
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Apps</a></li>
                <li class="breadcrumb-item active" aria-current="page">Calendar</li>
              </ol>
            </nav>

            <h1 class="page-header-title">Calendar</h1>
          </div>
          <!-- End Col -->

          <div class="col-sm-auto">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEventToCalendarModal">
              <i class="bi-plus"></i> Create event
            </button>
            <!-- End Button trigger modal -->
          </div>
          <!-- End Col -->
        </div>
      </div>
      <!-- End Page Header -->

      <div class="row align-items-sm-center mb-4">
        <div class="col-lg-5 mb-2 mb-lg-0">
          <div class="d-flex align-items-center">
            <button type="button" class="btn btn-white me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-fc-today>Today</button>

            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm btn-no-focus rounded-circle me-1" data-fc-prev-month data-bs-toggle="tooltip" data-bs-placement="top" title="Previous month">
              <i class="bi-chevron-left"></i>
            </button>

            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm btn-no-focus rounded-circle ms-1" data-fc-next-month data-bs-toggle="tooltip" data-bs-placement="top" title="Next month">
              <i class="bi-chevron-right"></i>
            </button>

            <div class="ms-3">
              <h4 class="h3 mb-0" data-fc-title></h4>
            </div>
          </div>
        </div>
        <!-- End Col -->

        <div class="col-lg-7">
          <div class="d-sm-flex align-items-sm-center">
            <!-- Input Group -->
            <div class="input-group input-group-merge me-2 mb-2 mb-sm-0">
              <div class="input-group-prepend input-group-text">
                <i class="bi-search"></i>
              </div>
              <input type="text" id="filter-by-title" class="form-control" placeholder="Search by title">
            </div>
            <!-- End Input Group -->

            <div class="d-flex align-items-center">
              <!-- Dropdown -->
              <div class="dropdown me-2">
                <button type="button" class="btn btn-white dropdown-toggle" id="calendarFilterDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                  <i class="bi-filter me-1"></i> Filter
                </button>

                <div class="dropdown-menu dropdown-card" aria-labelledby="calendarFilterDropdown" style="min-width: 15rem;">
                  <!-- Card -->
                  <div class="card">
                    <div class="card-body">
                      <small class="card-subtitle">My calendars</small>

                      <!-- Form Check -->
                      <div class="form-check" data-filter>
                        <input class="form-check-input" type="checkbox" value="fullcalendar-custom-event-hs-team" id="calendarPersonalCheck" checked>
                        <label class="form-check-label" for="calendarPersonalCheck">HS Team</label>
                      </div>
                      <!-- End Form Check -->

                      <!-- Form Check -->
                      <div class="form-check form-check-danger" data-filter>
                        <input class="form-check-input" type="checkbox" value="fullcalendar-custom-event-reminders" id="calendarRemindersCheck" checked>
                        <label class="form-check-label" for="calendarRemindersCheck">Reminders</label>
                      </div>
                      <!-- End Form Check -->

                      <!-- Form Check -->
                      <div class="form-check form-check-warning" data-filter>
                        <input class="form-check-input" type="checkbox" value="fullcalendar-custom-event-tasks" id="calendarTasksCheck" checked>
                        <label class="form-check-label" for="calendarTasksCheck">Tasks</label>
                      </div>
                      <!-- End Form Check -->
                    </div>

                    <hr class="my-0">

                    <div class="card-body">
                      <small class="card-subtitle">Other calendars</small>

                      <!-- Form Check -->
                      <div class="form-check form-check-success" data-filter>
                        <input class="form-check-input" type="checkbox" value="fullcalendar-custom-event-holidays" id="calendarHolidaysCheck" checked>
                        <label class="form-check-label" for="calendarHolidaysCheck">Holidays</label>
                      </div>
                      <!-- End Form Check -->
                    </div>
                  </div>
                  <!-- End Card -->
                </div>
              </div>
              <!-- End Dropdown -->

              <!-- Dropdown -->
              <div class="dropdown me-2">
                <button type="button" class="btn btn-white dropdown-toggle" id="calendarEventsDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                  <i class="bi-calendar-event me-1"></i> Events
                </button>

                <div class="dropdown-menu dropdown-menu-sm-end dropdown-card" aria-labelledby="calendarFilterDropdown" style="width: 17rem;">
                  <!-- Card -->
                  <div class="card">
                    <div class="card-body card-body-height">
                      <small class="card-subtitle">Drag these onto the calendar:</small>

                      <!-- External Events -->
                      <div id="external-events" class="fullcalendar-custom">
                        <!-- Event -->
                        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event fc-daygrid-inline-block-event fullcalendar-custom-event-hs-team' style="background-color: #eaf1ff; border-color: #eaf1ff;" data-event='{
                             "title": "Open a new task on Jira",
                             "image": "./assets/svg/brands/jira-icon.svg",
                             "className": "",
                             "forceEvent": true
                           }'>
                          <div class='fc-event-title' style="max-width: 14rem;">
                            <div class='d-flex'>
                              <img class="avatar avatar-xss me-2" src="./assets/svg/brands/jira-icon.svg" alt="Image Description">
                              <span class="text-truncate">Open a new task on Jira</span>
                            </div>
                          </div>
                        </div>
                        <!-- End Event -->

                        <!-- Event -->
                        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event fc-daygrid-inline-block-event fullcalendar-custom-event-reminders' style="background-color: #fdeef2; border-color: #fdeef2;" data-event='{
                               "title": "Send weekly invoice to John",
                               "image": "./assets/svg/brands/excel-icon.svg",
                               "className": "fc-event-success",
                               "forceEvent": true
                             }'>
                          <div class='fc-event-title' style="max-width: 14rem;">
                            <div class='d-flex'>
                              <img class="avatar avatar-xss me-2" src="./assets/svg/brands/excel-icon.svg" alt="Image Description">
                              <span class="text-truncate">Send weekly invoice to John</span>
                            </div>
                          </div>
                        </div>
                        <!-- End Event -->

                        <!-- Event -->
                        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event fc-daygrid-inline-block-event fullcalendar-custom-event-hs-team' style="background-color: #eaf1ff; border-color: #eaf1ff;" data-event='{
                               "title": "Shoot a message to Christina on Slack",
                               "image": "./assets/svg/brands/slack-icon.svg",
                               "className": "",
                               "forceEvent": true
                             }'>
                          <div class='fc-event-title' style="max-width: 14rem;">
                            <div class='d-flex'>
                              <img class="avatar avatar-xss me-2" src="./assets/svg/brands/slack-icon.svg" alt="Image Description">
                              <span class="text-truncate">Shoot a message to Christina on Slack</span>
                            </div>
                          </div>
                        </div>
                        <!-- End Event -->

                        <!-- Event -->
                        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event fc-daygrid-inline-block-event fullcalendar-custom-event-tasks' style="background-color: #fdf3e8; border-color: #fdf3e8;" data-event='{
                               "title": "First team timeline",
                               "image": "",
                               "className": "fc-event-success",
                               "forceEvent": true
                             }'>
                          <div class='fc-event-title' style="max-width: 14rem;">
                            <div class='d-flex'>
                              <span class="avatar avatar-xss avatar-info avatar-circle me-2">
                                <span class="text-truncate" class="avatar-initials">F</span>
                              </span>
                              <span>First team timeline</span>
                            </div>
                          </div>
                        </div>
                        <!-- End Event -->

                        <!-- Event -->
                        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event fc-daygrid-inline-block-event fullcalendar-custom-event-reminders' style="background-color: #fdeef2; border-color: #fdeef2;" data-event='{
                               "title": "Download monthly data in DigitalOcean",
                               "image": "./assets/svg/brands/digitalocean-icon.svg",
                               "className": "",
                               "forceEvent": true
                             }'>
                          <div class='fc-event-title' style="max-width: 14rem;">
                            <div class='d-flex'>
                              <img class="avatar avatar-xss me-2" src="./assets/svg/brands/digitalocean-icon.svg" alt="Image Description">
                              <span class="text-truncate">Download monthly data in DigitalOcean</span>
                            </div>
                          </div>
                        </div>
                        <!-- End Event -->

                        <!-- Event -->
                        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event fc-daygrid-inline-block-event fullcalendar-custom-event-tasks' style="background-color: #fdf3e8; border-color: #fdf3e8;" data-event='{
                               "title": "Hire a Figma designer",
                               "image": "./assets/svg/brands/figma-icon.svg",
                               "className": "",
                               "forceEvent": true
                             }'>
                          <div class='fc-event-title' style="max-width: 14rem;">
                            <div class='d-flex'>
                              <img class="avatar avatar-xss me-2" src="./assets/svg/brands/figma-icon.svg" alt="Image Description">
                              <span class="text-truncate">Hire a Figma designer</span>
                            </div>
                          </div>
                        </div>
                        <!-- End Event -->

                        <!-- Event -->
                        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event fc-daygrid-inline-block-event fullcalendar-custom-event-hs-team' style="background-color: #eaf1ff; border-color: #eaf1ff;" data-event='{
                               "title": "Mobile App rework for (Pixeel)",
                               "image": "",
                               "className": "",
                               "forceEvent": true
                             }'>
                          <div class='fc-event-title' style="max-width: 14rem;">
                            <div class='d-flex'>
                              <span class="avatar avatar-xss avatar-primary avatar-circle me-2">
                                <span class="text-truncate" class="avatar-initials">M</span>
                              </span>
                              <span>Mobile App rework for (Pixeel)</span>
                            </div>
                          </div>
                        </div>
                        <!-- End Event -->
                      </div>
                      <!-- End External Events -->
                    </div>
                  </div>
                  <!-- End Card -->
                </div>
              </div>
              <!-- End Dropdown -->

              <!-- Select -->
              <div class="tom-select-custom">
                <select class="js-select form-select" data-fc-grid-view data-hs-tom-select-options='{
                          "searchInDropdown": false,
                          "hideSearch": true
                        }'>
                  <option value="dayGridMonth">Month</option>
                  <option value="timeGridWeek">Week</option>
                  <option value="timeGridDay">Day</option>
                  <option value="listWeek">List</option>
                </select>
              </div>
              <!-- End Select -->
            </div>
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->

      <!-- Fullcalendar -->
      <div id="js-fullcalendar" class="fullcalendar-custom"></div>
      <!-- End Fullcalendar -->
    </div>
    <!-- End Content -->

    <!-- Footer -->

    <div class="footer">
      <div class="row justify-content-between align-items-center">
        <div class="col">
          <p class="fs-6 mb-0">&copy; Front. <span class="d-none d-sm-inline-block">2022 Htmlstream.</span></p>
        </div>
        <!-- End Col -->

        <div class="col-auto">
          <div class="d-flex justify-content-end">
            <!-- List Separator -->
            <ul class="list-inline list-separator">
              <li class="list-inline-item">
                <a class="list-separator-link" href="#">FAQ</a>
              </li>

              <li class="list-inline-item">
                <a class="list-separator-link" href="#">License</a>
              </li>

              <li class="list-inline-item">
                <!-- Keyboard Shortcuts Toggle -->
                <button class="btn btn-ghost-secondary btn btn-icon btn-ghost-secondary rounded-circle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasKeyboardShortcuts" aria-controls="offcanvasKeyboardShortcuts">
                  <i class="bi-command"></i>
                </button>
                <!-- End Keyboard Shortcuts Toggle -->
              </li>
            </ul>
            <!-- End List Separator -->
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>

    <!-- End Footer -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Keyboard Shortcuts -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasKeyboardShortcuts" aria-labelledby="offcanvasKeyboardShortcutsLabel">
    <div class="offcanvas-header">
      <h4 id="offcanvasKeyboardShortcutsLabel" class="mb-0">Keyboard shortcuts</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Formatting</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span class="fw-semibold">Bold</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">b</kbd>
            </div>
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <em>italic</em>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">i</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <u>Underline</u>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">u</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <s>Strikethrough</s>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">s</kbd>
              <!-- End Col -->
            </div>
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span class="small">Small text</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">s</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <mark>Highlight</mark>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">e</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Insert</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Mention person <a href="#">(@Brian)</a></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">@</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Link to doc <a href="#">(+Meeting notes)</a></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">+</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <a href="#">#hashtag</a>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">#hashtag</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Date</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/date</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
              <kbd class="d-inline-block mb-1">/datetime</kbd>
              <kbd class="d-inline-block mb-1">/datetime</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Time</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/time</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Note box</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/note</kbd>
              <kbd class="d-inline-block mb-1">Enter</kbd>
              <kbd class="d-inline-block mb-1">/note red</kbd>
              <kbd class="d-inline-block mb-1">/note red</kbd>
              <kbd class="d-inline-block mb-1">Enter</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Editing</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find and replace</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">r</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find next</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">n</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find previous</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">p</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Indent</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Tab</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Un-indent</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Tab</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Move line up</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1"><i class="bi-arrow-up-short"></i></kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Move line down</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1"><i class="bi-arrow-down-short fs-5"></i></kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Add a comment</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">m</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Undo</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">z</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Redo</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">y</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters">
        <div class="list-group-item">
          <h5 class="mb-1">Application</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Create new doc</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">n</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Present</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">p</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Share</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">s</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Search docs</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">o</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Keyboard shortcuts</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">/</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>
    </div>
  </div>
  <!-- End Keyboard Shortcuts -->

  <!-- Activity -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasActivityStream" aria-labelledby="offcanvasActivityStreamLabel">
    <div class="offcanvas-header">
      <h4 id="offcanvasActivityStreamLabel" class="mb-0">Activity stream</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <!-- Step -->
      <ul class="step step-icon-sm step-avatar-sm">
        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar" src="./assets/img/160x160/img9.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Iana Robinson</h5>

              <p class="fs-5 mb-1">Added 2 files to task <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fd-7</a></p>

              <ul class="list-group list-group-sm">
                <!-- List Item -->
                <li class="list-group-item list-group-item-light">
                  <div class="row gx-1">
                    <div class="col-6">
                      <!-- Media -->
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs" src="./assets/svg/brands/excel-icon.svg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-2">
                          <span class="d-block fs-6 text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                          <span class="d-block small text-muted">12kb</span>
                        </div>
                      </div>
                      <!-- End Media -->
                    </div>
                    <!-- End Col -->

                    <div class="col-6">
                      <!-- Media -->
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs" src="./assets/svg/brands/word-icon.svg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-2">
                          <span class="d-block fs-6 text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                          <span class="d-block small text-muted">4kb</span>
                        </div>
                      </div>
                      <!-- End Media -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </li>
                <!-- End List Item -->
              </ul>

              <span class="small text-muted text-uppercase">Now</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-dark">B</span>

            <div class="step-content">
              <h5 class="mb-1">Bob Dean</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fr-6</a> as <span class="badge bg-soft-success text-success rounded-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

              <span class="small text-muted text-uppercase">Today</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="h5 mb-1">Crane</h5>

              <p class="fs-5 mb-1">Added 5 card to <a href="#">Payments</a></p>

              <ul class="list-group list-group-sm">
                <li class="list-group-item list-group-item-light">
                  <div class="row gx-1">
                    <div class="col">
                      <img class="img-fluid rounded" src="./assets/svg/components/card-1.svg" alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid rounded" src="./assets/svg/components/card-2.svg" alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid rounded" src="./assets/svg/components/card-3.svg" alt="Image Description">
                    </div>
                    <div class="col-auto align-self-center">
                      <div class="text-center">
                        <a href="#">+2</a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>

              <span class="small text-muted text-uppercase">May 12</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-info">D</span>

            <div class="step-content">
              <h5 class="mb-1">David Lidell</h5>

              <p class="fs-5 mb-1">Added a new member to Front Dashboard</p>

              <span class="small text-muted text-uppercase">May 15</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Rachel King</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fr-3</a> as <span class="badge bg-soft-success text-success rounded-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

              <span class="small text-muted text-uppercase">Apr 29</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Finch Hoot</h5>

              <p class="fs-5 mb-1">Earned a "Top endorsed" <i class="bi-patch-check-fill text-primary"></i> badge</p>

              <span class="small text-muted text-uppercase">Apr 06</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">
              <i class="bi-person-fill"></i>
            </span>

            <div class="step-content">
              <h5 class="mb-1">Project status updated</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fr-3</a> as <span class="badge bg-soft-primary text-primary rounded-pill"><span class="legend-indicator bg-primary"></span>"In progress"</span></p>

              <span class="small text-muted text-uppercase">Feb 10</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->
      </ul>
      <!-- End Step -->

      <div class="d-grid">
        <a class="btn btn-white" href="javascript:;">View all <i class="bi-chevron-right"></i></a>
      </div>
    </div>
  </div>
  <!-- End Activity -->

  <!-- Welcome Message Modal -->
  <div class="modal fade" id="welcomeMessageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-close">
          <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm" data-bs-dismiss="modal" aria-label="Close">
            <i class="bi-x-lg"></i>
          </button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body p-sm-5">
          <div class="text-center">
            <div class="w-75 w-sm-50 mx-auto mb-4">
              <img class="img-fluid" src="./assets/svg/illustrations/oc-collaboration.svg" alt="Image Description" data-hs-theme-appearance="default">
              <img class="img-fluid" src="./assets/svg/illustrations-light/oc-collaboration.svg" alt="Image Description" data-hs-theme-appearance="dark">
            </div>

            <h4 class="h1">Welcome to Front</h4>

            <p>We're happy to see you in our community.</p>
          </div>
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer d-block text-center py-sm-5">
          <small class="text-cap text-muted">Trusted by the world's best teams</small>

          <div class="w-85 mx-auto">
            <div class="row justify-content-between">
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/gitlab-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/fitbit-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/flow-xo-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/layar-gray.svg" alt="Image Description">
              </div>
            </div>
          </div>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>

  <!-- End Welcome Message Modal -->

  <!-- Modal -->
  <div class="modal fade" id="addEventToCalendarModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-close">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body">
          <label for="eventTitleLabel" class="visually-hidden form-label">Title</label>
          <textarea id="eventTitleLabel" class="form-control form-control-title" placeholder="Add title"></textarea>

          <div class="row mb-4">
            <div class="col-sm-3 mb-2 mb-sm-0">
              <div class="d-flex align-items-center mt-2">
                <i class="bi-list-ul nav-icon"></i>
                <div class="flex-grow-1">Event type</div>
              </div>
            </div>
            <!-- End Col -->

            <div class="col-sm">
              <!-- Select -->
              <div class="tom-select-custom">
                <select class="js-select form-select w-auto" autocomplete="off" id="eventColorLabel" data-hs-tom-select-options='{
                          "searchInDropdown": false,
                          "placeholder": "Select event color"
                        }'>
                  <option value="" data-option-template='<span class="d-flex align-items-center">Select event color</span>'>Select event color</option>
                  <option value="fullcalendar-custom-event-hs-team" data-option-template='<span class="d-flex align-items-center"><span class="legend-indicator bg-primary me-2"></span>HS Team</span>'>HS Team</option>
                  <option value="fullcalendar-custom-event-reminders" data-option-template='<span class="d-flex align-items-center"><span class="legend-indicator bg-danger me-2"></span>Reminders</span>'>Reminders</option>
                  <option value="fullcalendar-custom-event-tasks" data-option-template='<span class="d-flex align-items-center"><span class="legend-indicator bg-warning me-2"></span>Tasks</span>'>Tasks</option>
                  <option value="fullcalendar-custom-event-holidays" data-option-template='<span class="d-flex align-items-center"><span class="legend-indicator bg-dark me-2"></span>Success</span>'>Success</option>
                </select>
              </div>
              <!-- End Select -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <div class="row mb-4">
            <div class="col-sm-3 mb-2 mb-sm-0">
              <div class="d-flex align-items-center mt-2">
                <i class="bi-calendar-event nav-icon"></i>
                <div class="flex-grow-1">Date</div>
              </div>
            </div>
            <!-- End Col -->

            <div class="col-sm">
              <label for="eventDateRangeLabel" class="visually-hidden form-label">Date</label>

              <!-- Flatpickr -->
              <input type="text" id="eventDateRangeLabel" class="flatpickr-custom form-control mb-2" placeholder="Select dates" data-hs-flatpickr-options='{
                       "dateFormat": "m/d/Y",
                       "mode": "range",
                       "minDate": "12/01/2020"
                     }'>
              <!-- End Flatpickr -->

              <div class="d-flex align-items-center">
                <label for="eventRepeatLabel" class="text-body me-2 mb-0">Repeat:</label>

                <!-- Select -->
                <div class="tom-select-custom">
                  <select class="js-select form-select form-select-sm w-auto" id="eventRepeatLabel" data-hs-tom-select-options='{
                            "searchInDropdown": false,
                            "hideSearch": true
                          }'>
                    <option value="everyday" selected>Everyday</option>
                    <option value="weekdays">Weekdays</option>
                    <option value="never">Never</option>
                  </select>
                </div>
                <!-- End Select -->
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <div class="row mb-4">
            <div class="col-sm-3 mb-2 mb-sm-0">
              <div class="d-flex align-items-center mt-2">
                <i class="bi-people nav-icon"></i>
                <div class="flex-grow-1">Guests</div>
              </div>
            </div>
            <!-- End Col -->

            <div class="col-sm">
              <label for="eventGuestsLabel" class="visually-hidden form-label">Add guests</label>
              <div class="tom-select-custom">
                <select class="form-select" id="eventGuestsLabel" placeholder="Add guests" aria-label="Add guests" multiple data-hs-tom-select-options='{
                          "placeholder": "Select a person...",
                          "hideSearch": true
                        }'>
                </select>
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <div class="row mb-4">
            <div class="col-sm-3 mb-2 mb-sm-0">
              <div class="d-flex align-items-center mt-2">
                <i class="bi-camera-reels nav-icon"></i>
                <div class="flex-grow-1">Conference call</div>
              </div>
            </div>
            <!-- End Col -->

            <div class="col-sm">
              <a class="btn btn-primary" href="#">
                <i class="bi-camera-video-fill me-1"></i> Add Zoom video conferencing
              </a>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <div class="row mb-4">
            <div class="col-sm-3 mb-2 mb-sm-0">
              <div class="d-flex align-items-center mt-2">
                <i class="bi-geo-alt nav-icon"></i>
                <div class="flex-grow-1">Location</div>
              </div>
            </div>
            <!-- End Col -->

            <div class="col-sm">
              <label for="eventLocationLabel" class="visually-hidden form-label">Add location</label>

              <input type="text" class="form-control" id="eventLocationLabel" placeholder="Add location" aria-label="Add location">
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <div class="row mb-4">
            <div class="col-sm-3 mb-2 mb-sm-0">
              <div class="d-flex align-items-center mt-2">
                <i class="bi-text-left nav-icon"></i>
                <div class="flex-grow-1">Description</div>
              </div>
            </div>
            <!-- End Col -->

            <div class="col-sm">
              <label for="eventDescriptionLabel" class="visually-hidden form-label">Add description</label>

              <textarea id="eventDescriptionLabel" class="form-control" placeholder="Add description"></textarea>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <div class="row">
            <div class="col-sm-3 mb-2 mb-sm-0">
              <div class="d-flex align-items-center mt-2">
                <i class="bi-person nav-icon"></i>
                <div class="flex-grow-1">Created by</div>
              </div>
            </div>
            <!-- End Col -->

            <div class="col-sm">
              <!-- Media -->
              <a class="d-inline-flex align-items-center" href="./user-profile.html">
                <div class="avatar avatar-sm avatar-circle me-3">
                  <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                </div>
                <div class="flex-grow-1">
                  <h5 class="text-inherit mb-0">Mark Williams</h5>
                </div>
              </a>
              <!-- End Media -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer gap-3">
          <button type="button" id="discardFormt" class="btn btn-white" data-bs-dismiss="modal">Discard</button>
          <button type="button" id="processEvent" class="btn btn-primary">Create event</button>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>

  <!-- End Modal -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory  -->
  <script src="{{asset('backend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{asset('backend/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js')}}"></script>
  <script src="{{asset('backend/vendor/hs-form-search/dist/hs-form-search.min.js')}}"></script>

  <script src="{{asset('backend/vendor/tom-select/dist/js/tom-select.complete.min.js')}}"></script>
  <script src="{{asset('backend/vendor/fullcalendar/main.min.js')}}"></script>
  <script src="{{asset('backend/vendor/hs-fullcalendar-filter/dist/hs-fullcalendar-filter.min.js')}}"></script>
  <script src="{{asset('backend/vendor/daterangepicker/moment.min.js')}}"></script>
  <script src="{{asset('backend/vendor/flatpickr/dist/flatpickr.min.js')}}"></script>

  <!-- JS Front -->
  <script src="{{asset('backend/js/theme.min.js')}}"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      window.onload = function () {



        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        new HSFormSearch('.js-form-search')


        // INITIALIZATION OF BOOTSTRAP DROPDOWN
        // =======================================================
        HSBsDropdown.init()


        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select', {
          hideSearch: true
        })


        // INITIALIZATION OF FULLCALENDAR
        // =======================================================
        let $popover,
          filterSearchExample,
          editableEvent = {}

        const popoverContent = function (data) {
            return `
  					<h3 class="mb-4">${data.event.title}</h3>

  					<div class="d-flex mb-4">
  						<i class="bi bi-clock nav-icon"></i>
  						<div class="flex-grow-1">
  							<span class="d-block text-dark mb-2">${moment(data.event.start).format('dddd, MMMM DD')} - ${moment(data.event.end).format('dddd, MMMM DD')}</span>
  							<span class="d-block">Repeat: <span class="text-dark text-capitalize">${data.event.extendedProps.repeatField}</span></span>
  						</div>
  					</div>

  					<div class="d-flex mb-4">
  						<i class="bi bi-people nav-icon"></i>
  						<div class="flex-grow-1">
  							<span class="d-block text-dark">${getAvatars(data.event.extendedProps.guestsField) || 'Empty'}</span>
  						</div>
  					</div>

  					<div class="d-flex mb-4">
  						<i class="bi bi-pin-map nav-icon"></i>
  						<div class="flex-grow-1">
  							<span class="d-block text-dark">${data.event.extendedProps.eventLocationLabel || 'Empty'}</span>
  						</div>
  					</div>

  					<div class="d-flex mb-4">
  						<i class="bi bi-text-left nav-icon"></i>
  						<div class="flex-grow-1">
  							<span class="d-block text-dark">${data.event.extendedProps.eventDescriptionLabel || 'Empty'}</span>
  						</div>
  					</div>

  					<div class="d-flex align-items-center mb-4">
  						<div class="avatar avatar-xs avatar-circle me-2">
  							<img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
  						</div>
  						<div class="flex-grow-1">
  							<span class="d-block text-dark">Mark Williams</span>
  						</div>
  					</div>

  					<div class="d-flex justify-content-end">
  						<a id="closePopover" href="javascript:;" class="btn btn-sm btn-white me-2">Close</a>
  						<a id="modal-invoker-${data.event.id}" href="javascript:;" class="btn btn-sm btn-primary">
  							<i class="bi bi-pencil"></i>
  							Edit
  						</a>
  					</div>
  			  `;
          },
          eventContent = function (data) {
            return `
  					<div>
  						<div class="fc-event-time">${$gridViewSelect.value === 'timeGridWeek' && !data.allDay ? moment(data.start).format('HH:mm') + '-' + moment(data.end).format('HH:mm') : ''}</div>
  						<div class="d-flex">
  							${
              data.extendedProps.image
                ? `<img class="avatar avatar-xs me-2" src="${data.extendedProps.image}" alt="Image Description">`
                : ''
            }
  							<span class="fc-event-title fc-sticky">${data.title}</span>
  						</div>
  					</div>
  				`;
          }

        // Fullcalendar controls
        const $prevMonthBtn = document.querySelector('[data-fc-prev-month]'),
          $nextMonthBtn = document.querySelector('[data-fc-next-month]'),
          $todayBtn = document.querySelector('[data-fc-today]'),
          $dateTitle = document.querySelector('[data-fc-title]'),
          $gridViewSelect = document.querySelector('[data-fc-grid-view]')

        // Filter controls
        const $filterByTitle = document.querySelector('#filter-by-title'),
          $filters = document.querySelectorAll('[data-filter]')

        // Edit popup fields
        const $addEventToCalendarModal = document.querySelector("#addEventToCalendarModal"),
          $titleField = document.querySelector('#eventTitleLabel'),
          $repeatLabel = document.querySelector('#eventRepeatLabel'),
          $eventDescriptionLabel = document.querySelector('#eventDescriptionLabel'),
          $eventLocationLabel = document.querySelector('#eventLocationLabel'),
          $eventColorLabel = document.querySelector('#eventColorLabel'),
          $eventGuestsLabel = document.querySelector('#eventGuestsLabel'),
          $processEvent = document.querySelector('#processEvent'),
          allMembers = [
            {
              "value": "Amanda Harvey",
              "src": null
            }, {
              "value": "Clarice Boone",
              "src": null
            }, {
              "value": "Sam Kart",
              "src": null
            }, {
              "value": "Mark Williams",
              "src": null
            }, {
              "value": "Linda Bates",
              "src": null
            }, {
              "value": "Rachel Doe",
              "src": null
            }, {
              "value": "David Harrison",
              "src": "./assets/img/160x160/img3.jpg"
            }, {
              "value": "Finch Hoot",
              "src": "./assets/img/160x160/img5.jpg"
            }, {
              "value": "Ella Lauda",
              "src": "./assets/img/160x160/img9.jpg"
            }
          ]

        let guestsField,
          repeatField,
          eventColorField,
          fullcalendarEditable

        // Init popup
        const addEventToCalendarModal = new bootstrap.Modal($addEventToCalendarModal);

        HSCore.components.HSFlatpickr.init('#eventDateRangeLabel');
        const eventDateRange = HSCore.components.HSFlatpickr.getItem('eventDateRangeLabel');

        HSCore.components.HSTomSelect.init($eventGuestsLabel, {
          options: allMembers,
          render: {
            option: function (data, escape) {
              return data.src ? `<div><img class="avatar avatar-xs avatar-circle me-2" src="${data.src}">${data.value}</div>` : `
                      <div>
                        <div class="avatar avatar-xs avatar-soft-primary avatar-circle me-2">
                          <span class="avatar-initials">${data.value.charAt(0)}</span>
                        </div>

                        ${data.value}
                      </div>
                    `
            },
            item: function (item, escape) {
              return item.src ? `<div><img class="avatar avatar-xs avatar-circle me-2" src="${item.src}">${item.value}</div>` : `
                      <div>
                        <div class="avatar avatar-xs avatar-soft-primary avatar-circle me-2">
                          <span class="avatar-initials">${item.value.charAt(0)}</span>
                        </div>

                        ${item.value}
                      </div>
                    `
            }
          }
        })

        guestsField = HSCore.components.HSTomSelect.getItem("eventGuestsLabel")
        repeatField = HSCore.components.HSTomSelect.getItem("eventRepeatLabel")
        eventColorField = HSCore.components.HSTomSelect.getItem("eventColorLabel")

        HSCore.components.HSFullCalendar.init('#js-fullcalendar', {
          events: [
            {
              id: 1,
              title: "English Lesson",
              start: "2020-12-03",
              end: "2020-12-03",
              className: "fullcalendar-custom-event-hs-team",
              eventDescriptionLabel: "",
              eventLocationLabel: "",
              repeatField: "weekdays",
              allDay: true,
              guestsField: ["David Harrison"]
            },
            {
              id: 2,
              title: "Spanish Lesson",
              start: "2020-12-03",
              end: "2020-12-03",
              className: "fullcalendar-custom-event-hs-team",
              eventDescriptionLabel: "",
              eventLocationLabel: "",
              repeatField: "everyday",
              allDay: true,
              guestsField: ["Anne Richard", "Finch Hoot"]
            },
            {
              id: 3,
              title: "Monthly presentation (in PDF)",
              start: "2020-12-03 04:00",
              end: "2020-12-03 05:00",
              className: "fullcalendar-custom-event-reminders",
              eventDescriptionLabel: "",
              eventLocationLabel: "Online",
              repeatField: "everyday",
              guestsField: [],
              image: './assets/svg/brands/pdf-icon.svg'
            },
            {
              id: 4,
              title: "Complete Figma course: Go from zero to hero in Figma",
              start: "2020-12-06 02:00",
              end: "2020-12-08 15:00",
              className: "fullcalendar-custom-event-hs-team",
              eventDescriptionLabel: "Learn Figma like a Professional! Start from the basics and go all the way to creating your own design!",
              eventLocationLabel: "Online",
              repeatField: "never",
              guestsField: ["Bob Dean", "Ella Lauda", "Lori Hunter", "Costa Quinn"],
              image: './assets/svg/brands/figma-icon.svg'
            },
            {
              id: 5,
              title: "Independence day",
              start: "2020-12-01",
              end: "2020-12-02",
              className: "fullcalendar-custom-event-holidays",
              eventDescriptionLabel: "",
              eventLocationLabel: "",
              repeatField: "never",
              guestsField: [],
              image: ''
            },
            {
              id: 6,
              title: "Teachers day",
              start: "2020-12-01",
              end: "2020-12-02",
              className: "fullcalendar-custom-event-holidays",
              eventDescriptionLabel: "",
              eventLocationLabel: "",
              repeatField: "never",
              guestsField: [],
              image: ''
            },
            {
              id: 7,
              title: "Send weekly invoice to John",
              start: "2020-12-10",
              end: "2020-12-11",
              className: "fullcalendar-custom-event-hs-team",
              eventDescriptionLabel: "",
              eventLocationLabel: "",
              repeatField: "everyday",
              allDay: true,
              guestsField: ["Linda Bates", "Rachel Doe"],
              image: './assets/svg/brands/excel-icon.svg'
            },
            {
              id: 8,
              title: "Shoot a message to Christina on Slack",
              start: "2020-12-18",
              end: "2020-12-20",
              className: "fullcalendar-custom-event-tasks",
              eventDescriptionLabel: "",
              eventLocationLabel: "",
              repeatField: "everyday",
              guestsField: ["Brian Halligan"],
              image: './assets/svg/brands/slack-icon.svg'
            },
            {
              id: 9,
              title: "Open a calendar task on Jira",
              start: "2020-12-03 00:00",
              end: "2020-12-03 04:00",
              className: "fullcalendar-custom-event-hs-team",
              eventDescriptionLabel: "",
              eventLocationLabel: "",
              repeatField: "never",
              guestsField: ["Clarice Boone", "Sam Kart", "Mark Williams"],
              image: './assets/svg/brands/jira-icon.svg'
            },
            {
              id: 10,
              title: "Weekly presentation (in PDF)",
              start: "2020-12-14",
              end: "2020-12-17",
              className: "fullcalendar-custom-event-reminders",
              eventDescriptionLabel: "",
              eventLocationLabel: "Online",
              repeatField: "everyday",
              guestsField: [],
              image: './assets/svg/brands/pdf-icon.svg'
            },
            {
              id: 11,
              title: "Launch",
              start: "2020-12-03 01:00",
              end: "2020-12-03 02:00",
              className: "fullcalendar-custom-event-hs-team",
              eventDescriptionLabel: "",
              eventLocationLabel: "",
              repeatField: "everyday",
              guestsField: []
            },
            {
              id: 12,
              title: "Make monthly payments via MasterCard",
              start: "2020-12-11",
              end: "2020-12-12",
              className: "fullcalendar-custom-event-tasks",
              eventDescriptionLabel: "",
              eventLocationLabel: "Online",
              repeatField: "everyday",
              guestsField: [],
              image: './assets/svg/brands/mastercard.svg'
            }
          ],
          initialDate: "2020-12-03",
          headerToolbar: false,
          editable: true,
          defaultAllDay: false,
          datesSet(dateSet) {
            $dateTitle.textContent = dateSet.view.title
          },
          eventClick: function (event) {
            // Popover Content
            const _popoverContent = popoverContent(event);

            if ($popover && $popover._element) {
              $popover.dispose();
            }

            // Open Popover
            $popover = new bootstrap.Popover(event.el, {
              html: true,
              content: _popoverContent,
              template: `
  							<div class="popover fullcalendar-event-popover" role="tooltip">
  								<div class="arrow"></div>
  								<h3 class="popover-header"></h3>
  								<div class="popover-body"></div>
  							</div>
  						`,
            });
            $popover.show();

            // Open Popover For Editing
            event.el.addEventListener('shown.bs.popover', function () {
              const $invoker = document.querySelector(`#modal-invoker-${event.event.id}`);

              $invoker.addEventListener('click', function () {
                if ($popover && $popover._element) {
                  $popover.dispose();
                }

                prepareData(
                  event.event.title,
                  event.event.start,
                  event.event.end,
                  event.event
                );
              });
            });
          },
          eventContent({event}) {
            return {
              html: eventContent(event),
            };
          },
          drop({draggedEl}) {
            draggedEl.remove();
          },
        });

        fullcalendarEditable = HSCore.components.HSFullCalendar.getItem('js-fullcalendar');

        // Events
        document.addEventListener('click', function (e) {
          if (
            (e.target && e.target.id === 'closePopover' && $popover && $popover._element)
            || (e.target && !e.target.closest('.fc-event') && !e.target.closest('.popover') && $popover && $popover._element)
          ) {
            $popover.dispose();
          }
        });

        document.addEventListener('scroll', function () {
          if ($popover && $popover._element) {
            $popover.dispose();
          }
        });

        $prevMonthBtn.addEventListener('click', function () {
          fullcalendarEditable.prev();

          HSCore.hideTooltips();
        });

        $nextMonthBtn.addEventListener('click', function () {
          fullcalendarEditable.next();

          HSCore.hideTooltips();
        });

        $gridViewSelect.addEventListener('change', function (event) {
          fullcalendarEditable.changeView(event.target.value);
        });

        $todayBtn.addEventListener('click', function () {
          fullcalendarEditable.today();
        });
        $todayBtn.title = new Date().toDateString();

        $addEventToCalendarModal.addEventListener('hide.bs.modal', function () {
          $titleField.style.height = 'auto';
        });
        $addEventToCalendarModal.addEventListener('show.bs.modal', function () {
          clearForm();
        });
        $addEventToCalendarModal.addEventListener('shown.bs.modal', function () {
          $titleField.style.height = `${$titleField.scrollHeight}px`;

          $titleField.focus();
        });

        $titleField.addEventListener('input', function () {
          $titleField.style.height = `${$titleField.scrollHeight}px`;
        });

        $processEvent.addEventListener('click', function () {
          const date = eventDateRange.selectedDates

          if (!Object.keys(editableEvent).length) {
            fullcalendarEditable.addEvent({
              id: new Date().getTime(),
              title: $titleField.value || '(No title)',
              repeatField: repeatField.getValue(),
              guestsField: JSON.parse(JSON.stringify(guestsField.getValue())),
              eventDescriptionLabel: $eventDescriptionLabel.value,
              eventLocationLabel: $eventLocationLabel.value,
              start: moment(date[0]).format('YYYY-MM-DD'),
              end: date.length > 1 ? moment(date[1]).format('YYYY-MM-DD') : moment(date[0]).format('YYYY-MM-DD'),
              classNames: eventColorField.getValue(),
            });
          } else {
            editableEvent.setProp('title', $titleField.value)
            editableEvent.setExtendedProp('repeatField', repeatField.getValue())
            editableEvent.setExtendedProp('guestsField', JSON.parse(JSON.stringify(guestsField.getValue())))
            editableEvent.setExtendedProp('eventDescriptionLabel', $eventDescriptionLabel.value)
            editableEvent.setExtendedProp('eventLocationLabel', $eventLocationLabel.value)
            editableEvent.setProp('classNames', [eventColorField.getValue()])
            editableEvent.setStart(moment(date[0]).format('YYYY-MM-DD'))
            editableEvent.setEnd(date.length > 1 ? moment(date[1]).format('YYYY-MM-DD') : moment(date[0]).format('YYYY-MM-DD'))
          }

          addEventToCalendarModal.hide();

          filterSearchExample.filter();
        });

        function triggerEvent(el, evt) {
          const newEvt = document.createEvent('HTMLEvents');

          newEvt.initEvent(evt, false, true);

          el.dispatchEvent(newEvt);
        }

        // Set Form
        function prepareData(title, start, end, event = {}) {
          addEventToCalendarModal.show();

          $processEvent.textContent = 'Save';

          $titleField.value = title;

          eventDateRange.setDate([moment(start).format('MM/DD/YYYY'), moment(end).format('MM/DD/YYYY')])

          if (Object.keys(event).length) {
            let newTags = [];

            for (let i = 0; i < event.extendedProps.guestsField.length; i += 1) {
              newTags.push(event.extendedProps.guestsField[i]);
            }

            guestsField.setValue(newTags);

            repeatField.setValue(event.extendedProps.repeatField)
            $eventDescriptionLabel.value = event.extendedProps.eventDescriptionLabel
            $eventLocationLabel.value = event.extendedProps.eventLocationLabel
            eventColorField.setValue(event.classNames[0])

            triggerEvent($repeatLabel, 'change');
            triggerEvent($eventColorLabel, 'change');

            editableEvent = event;
          }
        }

        // Get Avatar
        function getAvatar(data) {
          let member = allMembers.filter(m => m.value === data)
          if (member.length) {
            member = member[0]
          } else {
            member = {
              value: data,
              src: null
            }
          }

          return member.src ? `<img class="avatar avatar-xs avatar-circle me-2" src="${member.src}">` : `
                        <div class="avatar avatar-xs avatar-soft-primary avatar-circle me-2">
                          <span class="avatar-initials">${member.value.charAt(0)}</span>
                        </div>
                    `
        }

        // Get Avatars HTML
        function getAvatars(members) {
          const $ul = document.createElement('ul');
          $ul.classList.add(
            'list-unstyled',
            'mb-0'
          );

          for (let i = 0; i < members.length; i += 1) {
            const $li = document.createElement('li');
            $li.classList.add(
              'd-flex',
              'align-items-center',
              'mb-2'
            );
            $li.innerHTML = `
  						${getAvatar(members[i])}
  						<span>${members[i]}</span>
  					`;

            $ul.appendChild($li);
          }

          return members.length > 0 ? $ul.outerHTML : false
        }

        // Clear Form
        function clearForm() {
          $titleField.value = '';
          $eventDescriptionLabel.value = '';
          $eventLocationLabel.value = '';
          repeatField.setValue('everyday')
          eventColorField.setValue('hs-team');
          eventDateRange.clear()

          editableEvent = {};

          triggerEvent($repeatLabel, 'change');
          triggerEvent($eventColorLabel, 'change');

          if (guestsField) {
            guestsField.clear();
          }

          $processEvent.text = 'Create Event';
        }

        // Filter
        filterSearchExample = new HSFullcalendarFilter(fullcalendarEditable);

        filterSearchExample.addFilter('byTitle', function (event) {
          return event.title.toLowerCase().indexOf($filterByTitle.value.toLowerCase()) !== -1;
        })

        filterSearchExample.addFilter('byCategory', function (event) {
          const selectedCategories = document.querySelectorAll('[data-filter] input:checked');
          let values = [];
          let show;

          for (let i = 0; i < selectedCategories.length; i += 1) {
            values.push(selectedCategories[i].value);
          }

          if (!selectedCategories.length) {
            return false;
          }

          show = false

          for (let i = 0; i < selectedCategories.length; i += 1) {
            show = values.includes(event.classNames[0]);
          }

          return show;
        });

        $filterByTitle.addEventListener('input', function () {
          filterSearchExample.filter();
        });

        for (let i = 0; i < $filters.length; i += 1) {
          $filters[i].addEventListener('change', function () {
            filterSearchExample.filter();
          });
        }

        filterSearchExample.filter();


        // ADD DRAGGABLE CLASS FOR CALENDAR
        // =======================================================
        const Draggable = FullCalendar.Draggable;

        new Draggable(document.querySelector('#external-events'), {
          itemSelector: '.fc-event'
        });


        // INITIALIZATION OF NAVBAR VERTICAL ASIDE
        // =======================================================
        new HSSideNav('.js-navbar-vertical-aside', {
          onMini: function () {
            setTimeout(function () {
              fullcalendarEditable.updateSize()
            }, 200)
          },
          onFull: function () {
            setTimeout(function () {
              fullcalendarEditable.updateSize()
            }, 200)
          },
        }).init()

        setTimeout(() => {
          fullcalendarEditable.updateSize()
        }, 100)
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
