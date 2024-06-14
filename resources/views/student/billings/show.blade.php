{{-- <div class="container">
    <h1>Order Details</h1>

    <h2>Order ID: {{ $order->id }}</h2>
    <p>Total: {{ $order->total }}</p>
    <p>Status: {{ $order->status }}</p>
    <p>Date: {{ $order->created_at->format('Y-m-d') }}</p>

    <h3>Order Items</h3>

    @if($orderItems->isEmpty())
        <p>No items found for this order.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Course</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orderItems as $item)
                    <tr>
                        <td>{{ $item->course->title }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <a href="{{ route('billings.index') }}" class="btn btn-secondary">Back to Orders</a>
</div> --}}



<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Invoice </title>

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


  <main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Page Header -->
      <div class="page-header d-print-none">
        <div class="row align-items-end">
          <div class="col-sm mb-2 mb-sm-0">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-no-gutter">
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Account</a></li>
                <li class="breadcrumb-item active" aria-current="page">Invoice</li>
              </ol>
            </nav>

            <h1 class="page-header-title">Invoice</h1>
          </div>
          <!-- End Col -->

          <div class="col-sm-auto">
            <a class="btn btn-primary-outline" href="">
              <i class="bi-file-earmark-arrow-down me-1"></i>Download PDF
            </a>




          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
      <!-- End Page Header -->

      <div class="row">
        <div class="col-lg-12 mb-5 mb-lg-0">
          <!-- Card -->
          <div class="card card-lg mb-5">
            <div class="card-body">
              <div class="row justify-content-lg-between">
                <div class="col-sm order-2 order-sm-1 mb-3">
                  <div class="mb-2">
                    <img class="avatar" src="./assets/svg/logos/logo-short.svg" alt="Logo">
                  </div>

                  <h1 class="h2 text-primary">CodeSpace Academy.</h1>
                </div>
                <!-- End Col -->

                <div class="col-sm-auto order-1 order-sm-2 text-sm-end mb-3">
                  <div class="mb-3">
                    <h2>Invoice #</h2>
                    <span class="d-block">3682303</span>
                  </div>


                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <div class="row justify-content-md-between mb-3">
                <div class="col-md">
                    <h4>Bill to:</h4>
                    <h4>{{ Auth::user()->name }}</h4>

                    <address>
                        {{-- {{dump(Auth::user()->profile->address_line_one)}} --}}
                        {{ Auth::user()->profile->address_line_one }}<br>
                        {{ Auth::user()->profile->address_line_two }}<br>
                        {{ Auth::user()->profile->city }}, {{ Auth::user()->profile->state }} {{ Auth::user()->profile->zip_code }}<br>
                        {{ Auth::user()->profile->country }}
                    </address>
                </div>
                <!-- End Col -->

                <div class="col-md text-md-end">
                    <dl class="row">
                        <dt class="col-sm-8">Invoice date:</dt>
                        <dd class="col-sm-4">{{ $order->created_at->format('m/d/Y') }}</dd>
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-8">Invoice Time:</dt>
                        {{-- <dd class="col-sm-4">{{ $order->due_date->format('m/d/Y') }}</dd> <!-- Assuming you have a due_date field --> --}}
                    </dl>
                </div>
                <!-- End Col -->
            </div>

              <!-- End Row -->

<!-- Table -->
<div class="table-responsive">
  <table class="table table-borderless table-nowrap table-align-middle">
      <thead class="thead-light">
          <tr>
              <th>Item</th>
              <th>Quantity</th>
              <th>Rate</th>
              <th class="table-text-end">Amount</th>
          </tr>
      </thead>

      <tbody>
          @foreach($order->orderItems as $orderItem)
              <tr>
                  <th>{{ $orderItem->course->title }}</th>
                  <td>{{ $orderItem->quantity }}</td>
                  <td>RM {{ $orderItem->price }}</td>
                  <td class="table-text-end">RM {{ $orderItem->quantity * $orderItem->price }}</td>
              </tr>
          @endforeach
      </tbody>
  </table>
</div>
<!-- End Table -->


              <hr class="my-5">

              @php
              $subtotal = 0;
              $taxRate = 0.08; // 8%
              foreach ($order->orderItems as $orderItem) {
                  $subtotal += $orderItem->quantity * $orderItem->price;
              }
              $tax = $subtotal * $taxRate;
              $total = $subtotal + $tax;
              $amountPaid = $total; // Assuming the amount paid is the total for this example
              $dueBalance = $total - $amountPaid; // Assuming no due balance for this example
          @endphp

          <div class="row justify-content-md-end mb-3">
              <div class="col-md-8 col-lg-7">
                  <dl class="row text-sm-end">
                      <dt class="col-sm-6">Subtotal:</dt>
                      <dd class="col-sm-6">RM {{ number_format($subtotal, 2) }}</dd>
                      <dt class="col-sm-6">Total:</dt>
                      <dd class="col-sm-6">RM {{ number_format($total, 2) }}</dd>
                      <dt class="col-sm-6">Tax:</dt>
                      <dd class="col-sm-6">RM {{ number_format($tax, 2) }}</dd>
                      <dt class="col-sm-6">Amount paid:</dt>
                      <dd class="col-sm-6">RM{{ number_format($amountPaid, 2) }}</dd>
                      <dt class="col-sm-6">Due balance:</dt>
                      <dd class="col-sm-6">RM{{ number_format($dueBalance, 2) }}</dd>
                  </dl>
                  <!-- End Row -->
              </div>
          </div>
          <!-- End Row -->

              <!-- End Row -->

              <div class="mb-3">
                <h3>Thank you!</h3>
                <p>If you have any questions concerning this invoice, use the following contact information: 0182786997</p>
              </div>

              <p class="small mb-0">&copy; 2024 CodeSpace Academy.</p>
            </div>
          </div>
          <!-- End Card -->

          <!-- Footer -->
          {{-- <div class="d-flex justify-content-end d-print-none gap-3">
            <a class="btn btn-white" href="#">
              <i class="bi-file-earmark-arrow-down me-1"></i> PDF
            </a>

            <a class="btn btn-primary" href="javascript:;" onclick="window.print(); return false;">
              <i class="bi-printer me-1"></i> Print details
            </a>
          </div> --}}
          <!-- End Footer -->
        </div>

        {{-- <div class="col-lg-4">
          <!-- Card -->
          <div class="card d-print-none">
            <!-- Header -->
            <div class="card-header card-header-content-between">
              <h4 class="card-header-title">History</h4>

              <!-- Unfold -->
              <div class="hs-unfold">
                <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle" id="reportsOverviewDropdown1" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi-three-dots-vertical"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-right mt-1">
                  <span class="dropdown-header">Settings</span>

                  <a class="dropdown-item" href="#">
                    <i class="bi-share-fill dropdown-item-icon"></i> Share reports
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-download dropdown-item-icon"></i> Download
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-alt dropdown-item-icon"></i> Connect other apps
                  </a>

                  <div class="dropdown-divider"></div>

                  <span class="dropdown-header">Feedback</span>

                  <a class="dropdown-item" href="#">
                    <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                  </a>
                </div>
              </div>
              <!-- End Unfold -->
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
              <span class="h1 d-block mb-3">175 <span class="h4 text-body">Invoices</span></span>

              <!-- Progress -->
              <div class="progress rounded-pill">
                <div class="progress-bar" role="progressbar" style="width: 76%" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-warning" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-danger" role="progressbar" style="width: 2%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <!-- End Progress -->
            </div>
            <!-- End Body -->

            <hr class="my-0">

            <!-- Body -->
            <div class="card-body">
              <!-- Nav Scroller -->
              <div class="js-nav-scroller hs-nav-scroller-horizontal">
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

                <!-- Nav -->
                <ul class="nav nav-segment nav-fill" id="invoicesStatusTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="paid-tab" data-bs-toggle="tab" href="#paid" role="tab" aria-controls="paid" aria-selected="true">
                      <span class="legend-indicator bg-primary"></span>Paid (162)
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pending-tab" data-bs-toggle="tab" href="#pending" role="tab" aria-controls="pending" aria-selected="true">
                      <span class="legend-indicator bg-warning"></span>Pending (10)
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="declined-tab" data-bs-toggle="tab" href="#declined" role="tab" aria-controls="declined" aria-selected="true">
                      <span class="legend-indicator bg-danger"></span>Declined (3)
                    </a>
                  </li>
                </ul>
                <!-- End Nav -->
              </div>
              <!-- End Nav Scroller -->
            </div>
            <!-- End Body -->

            <hr class="my-0">

            <!-- Body -->
            <div class="card-body card-body-height">
              <!-- Tab Content -->
              <div class="tab-content" id="invoicesStatusTabContent">
                <div class="tab-pane fade show active" id="paid" role="tabpanel" aria-labelledby="paid-tab">
                  <!-- List Group -->
                  <ul class="list-group list-group-flush list-group-no-gutters">
                    <!-- List Item -->
                    <li class="list-group-item">
                      <div class="mb-1">
                        <h5 class="mb-0">Update subscription method</h5>
                        <span class="fs-5">Rocket Science Group</span>
                      </div>

                      <div class="d-flex justify-content-between">
                        <span class="h4 text-primary">$530.00 USD</span>
                        <span class="fs-5">25 May, 2020</span>
                      </div>
                    </li>
                    <!-- End List Item -->

                    <!-- List Item -->
                    <li class="list-group-item">
                      <div class="mb-1">
                        <h5 class="mb-0">Develop Slack mobile app</h5>
                        <span class="fs-5">Slack Technologies</span>
                      </div>

                      <div class="d-flex justify-content-between">
                        <span class="h4 text-primary">$2500.00 USD</span>
                        <span class="fs-5">25 May, 2020</span>
                      </div>
                    </li>
                    <!-- End List Item -->

                    <!-- List Item -->
                    <li class="list-group-item">
                      <div class="mb-1">
                        <h5 class="mb-0">Create a new database for Webdev</h5>
                        <span class="fs-5">Google LLC</span>
                      </div>

                      <div class="d-flex justify-content-between">
                        <span class="h4 text-primary">$7000.00 USD</span>
                        <span class="fs-5">10 May, 2020</span>
                      </div>
                    </li>
                    <!-- End List Item -->

                    <!-- List Item -->
                    <li class="list-group-item">
                      <div class="mb-1">
                        <h5 class="mb-0">The Hub project</h5>
                        <span class="fs-5">HubSpot</span>
                      </div>

                      <div class="d-flex justify-content-between">
                        <span class="h4 text-primary">$55000.00 USD</span>
                        <span class="fs-5">12 June, 2020</span>
                      </div>
                    </li>
                    <!-- End List Item -->

                    <!-- List Item -->
                    <li class="list-group-item">
                      <div class="mb-1">
                        <h5 class="mb-0">Binance-chain</h5>
                        <span class="fs-5">FrontApp</span>
                      </div>

                      <div class="d-flex justify-content-between">
                        <span class="h4 text-primary">$400.00 USD</span>
                        <span class="fs-5">01 June, 2020</span>
                      </div>
                    </li>
                    <!-- End List Item -->
                  </ul>
                  <!-- End List Group -->
                </div>

                <div class="tab-pane fade" id="pending" role="tabpanel" aria-labelledby="pending-tab">
                  <!-- List Group -->
                  <ul class="list-group list-group-flush list-group-no-gutters">
                    <!-- List Item -->
                    <li class="list-group-item">
                      <div class="mb-1">
                        <h5 class="mb-0">Marketing campaign for Slack</h5>
                        <span class="fs-5">Slack Technologies</span>
                      </div>

                      <div class="d-flex justify-content-between">
                        <span class="h4 text-primary">$2500.00 USD</span>
                        <span class="fs-5">15 May, 2020</span>
                      </div>
                    </li>
                    <!-- End List Item -->

                    <!-- List Item -->
                    <li class="list-group-item">
                      <div class="mb-1">
                        <h5 class="mb-0">Android app</h5>
                        <span class="fs-5">Htmlstream Ltd.</span>
                      </div>

                      <div class="d-flex justify-content-between">
                        <span class="h4 text-primary">$7000.00 USD</span>
                        <span class="fs-5">14 May, 2020</span>
                      </div>
                    </li>
                    <!-- End List Item -->

                    <!-- List Item -->
                    <li class="list-group-item">
                      <div class="mb-1">
                        <h5 class="mb-0">Building startup for brand</h5>
                        <span class="fs-5">Htmlstream Ltd.</span>
                      </div>

                      <div class="d-flex justify-content-between">
                        <span class="h4 text-primary">$530.00 USD</span>
                        <span class="fs-5">15 May, 2020</span>
                      </div>
                    </li>
                    <!-- End List Item -->

                    <!-- List Item -->
                    <li class="list-group-item">
                      <div class="mb-1">
                        <h5 class="mb-0">Massive dynamic project</h5>
                        <span class="fs-5">Microsoft Corporation</span>
                      </div>

                      <div class="d-flex justify-content-between">
                        <span class="h4 text-primary">$55000.00 USD</span>
                        <span class="fs-5">14 Apr, 2020</span>
                      </div>
                    </li>
                    <!-- End List Item -->
                  </ul>
                  <!-- End List Group -->
                </div>

                <div class="tab-pane fade" id="declined" role="tabpanel" aria-labelledby="declined-tab">
                  <!-- List Group -->
                  <ul class="list-group list-group-flush list-group-no-gutters">
                    <!-- List Item -->
                    <li class="list-group-item">
                      <div class="mb-1">
                        <h5 class="mb-0">Set up a datatable for Booking.com</h5>
                        <span class="fs-5">United States-based Booking Holdings</span>
                      </div>

                      <div class="d-flex justify-content-between">
                        <span class="h4 text-primary">$7000.00 USD</span>
                        <span class="fs-5">05 May, 2020</span>
                      </div>
                    </li>
                    <!-- End List Item -->

                    <!-- List Item -->
                    <li class="list-group-item">
                      <div class="mb-1">
                        <h5 class="mb-0">Redesigning the Spotify main page</h5>
                        <span class="fs-5">Spotify Technology S.A.</span>
                      </div>

                      <div class="d-flex justify-content-between">
                        <span class="h4 text-primary">$530.00 USD</span>
                        <span class="fs-5">04 May, 2020</span>
                      </div>
                    </li>
                    <!-- End List Item -->

                    <!-- List Item -->
                    <li class="list-group-item">
                      <div class="mb-1">
                        <h5 class="mb-0">Prosperops</h5>
                        <span class="fs-5">Prosperops</span>
                      </div>

                      <div class="d-flex justify-content-between">
                        <span class="h4 text-primary">$2500.00 USD</span>
                        <span class="fs-5">15 Apr, 2020</span>
                      </div>
                    </li>
                    <!-- End List Item -->
                  </ul>
                  <!-- End List Group -->
                </div>
              </div>
              <!-- End Tab Content -->
            </div>
            <!-- End Body -->

            <!-- Card Footer -->
            <a class="card-footer text-center" href="#">
              View all invoices <i class="bi-chevron-right"></i>
            </a>
            <!-- End Card Footer -->
          </div>
          <!-- End Card -->
        </div> --}}
      </div>
    </div>
    <!-- End Content -->

    <!-- Footer -->

    @include('student.layouts.dashboard-footer')


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
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory  -->
  <script src="{{asset('backend/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('backend/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('backend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{asset('backend/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js')}}"></script>
  <script src="{{asset('backend/vendor/hs-form-search/dist/hs-form-search.min.js')}}"></script>

  <script src="{{asset('backend/vendor/hs-nav-scroller/dist/hs-nav-scroller.min.js')}}"></script>

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
