<!DOCTYPE html>
<html lang="en" dir="">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Course</title>

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
  <header id="header" class="navbar navbar-expand-lg navbar-end navbar-light">
    <!-- Topbar -->
    <div class="container navbar-topbar">
      <nav class="js-mega-menu navbar-nav-wrap">
        <!-- Toggler -->
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#topbarNavDropdown" aria-controls="topbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="d-flex justify-content-between align-items-center">
            <span class="navbar-toggler-text">Topbar</span>

            <span class="navbar-toggler-default">
              <i class="bi-chevron-down ms-2"></i>
            </span>
            <span class="navbar-toggler-toggled">
              <i class="bi-chevron-up ms-2"></i>
            </span>
          </span>
        </button>
        <!-- End Toggler -->

        <div id="topbarNavDropdown" class="navbar-nav-wrap-collapse collapse navbar-collapse navbar-topbar-collapse">
          <div class="navbar-toggler-wrapper">
            <div class="navbar-topbar-toggler d-flex justify-content-between align-items-center">
              <span class="navbar-toggler-text small">Topbar</span>

              <!-- Toggler -->
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topbarNavDropdown" aria-controls="topbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi-x"></i>
              </button>
              <!-- End Toggler -->
            </div>
          </div>

          <ul class="navbar-nav">
            <li class="nav-item me-auto">
              <a class="nav-link" href="../landing-classic-corporate.html"><i class="bi-chevron-left small ms-1"></i> Main demo</a>
            </li>

            <!-- Demos -->
            <li class="hs-has-mega-menu nav-item">
              <a id="demosMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle active" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Demos</a>

              <!-- Mega Menu -->
              <div class="hs-mega-menu dropdown-menu w-100" aria-labelledby="demosMegaMenu" style="min-width: 40rem;">
                <!-- Promo -->
                <div class="navbar-dropdown-menu-promo">
                  <!-- Promo Item -->
                  <div class="navbar-dropdown-menu-promo-item">
                    <!-- Promo Link -->
                    <a class="navbar-dropdown-menu-promo-link " href="../landing-classic-corporate.html">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <span class="svg-icon svg-icon-sm text-primary">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.6 5.59998L20.9 10.9C21.3 11.3 21.3 11.9 20.9 12.3L17.6 15.6L11.6 9.59998L15.6 5.59998ZM2.3 12.3L7.59999 17.6L11.6 13.6L5.59999 7.59998L2.3 10.9C1.9 11.3 1.9 11.9 2.3 12.3Z" fill="#035A4B"/>
                            <path opacity="0.3" d="M17.6 15.6L12.3 20.9C11.9 21.3 11.3 21.3 10.9 20.9L7.59998 17.6L13.6 11.6L17.6 15.6ZM10.9 2.3L5.59998 7.6L9.59998 11.6L15.6 5.6L12.3 2.3C11.9 1.9 11.3 1.9 10.9 2.3Z" fill="#035A4B"/>
                            </svg>

                          </span>
                        </div>

                        <div class="flex-grow-1 ms-3">
                          <span class="navbar-dropdown-menu-media-title">Main</span>
                          <p class="navbar-dropdown-menu-media-desc">Over 60 corporate, agency, portfolio, account and many more pages.</p>
                        </div>
                      </div>
                    </a>
                    <!-- End Promo Link -->
                  </div>
                  <!-- End Promo Item -->

                  <!-- Promo Item -->
                  <div class="navbar-dropdown-menu-promo-item">
                    <!-- Promo Link -->
                    <a class="navbar-dropdown-menu-promo-link " href="../demo-real-estate/index.html">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <span class="svg-icon svg-icon-sm text-primary">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 3C5.67157 3 5 3.67157 5 4.5V6H3.5C2.67157 6 2 6.67157 2 7.5C2 8.32843 2.67157 9 3.5 9H5V19.5C5 20.3284 5.67157 21 6.5 21C7.32843 21 8 20.3284 8 19.5V9H20.5C21.3284 9 22 8.32843 22 7.5C22 6.67157 21.3284 6 20.5 6H8V4.5C8 3.67157 7.32843 3 6.5 3Z" fill="#035A4B"/>
                            <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M20.5 11H10V17.5C10 18.3284 10.6716 19 11.5 19H15.5C17.3546 19 19.0277 18.2233 20.2119 16.9775C20.1436 16.9922 20.0727 17 20 17C19.4477 17 19 16.5523 19 16V13C19 12.4477 19.4477 12 20 12C20.5523 12 21 12.4477 21 13V15.9657C21.6334 14.9626 22 13.7741 22 12.5C22 11.6716 21.3284 11 20.5 11Z" fill="#035A4B"/>
                            </svg>

                          </span>
                        </div>

                        <div class="flex-grow-1 ms-3">
                          <span class="navbar-dropdown-menu-media-title">Real Estate</span>
                          <p class="navbar-dropdown-menu-media-desc">Find the latest homes for sale, real estate market data.</p>
                        </div>
                      </div>
                    </a>
                    <!-- End Promo Link -->
                  </div>
                  <!-- End Promo Item -->

                  <!-- Promo Item -->
                  <div class="navbar-dropdown-menu-promo-item">
                    <!-- Promo Link -->
                    <a class="navbar-dropdown-menu-promo-link " href="../demo-jobs/index.html">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <span class="svg-icon svg-icon-sm text-primary">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="#035A4B"/>
                            <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="#035A4B"/>
                            </svg>

                          </span>
                        </div>

                        <div class="flex-grow-1 ms-3">
                          <span class="navbar-dropdown-menu-media-title">Jobs <span class="badge bg-success rounded-pill ms-1">Hot</span></span>
                          <p class="navbar-dropdown-menu-media-desc">Search millions of jobs online to find the next step in your career.</p>
                        </div>
                      </div>
                    </a>
                    <!-- End Promo Link -->
                  </div>
                  <!-- End Promo Item -->
                </div>
                <!-- End Promo -->

                <!-- Promo -->
                <div class="navbar-dropdown-menu-promo">
                  <!-- Promo Item -->
                  <div class="navbar-dropdown-menu-promo-item">
                    <!-- Promo Link -->
                    <a class="navbar-dropdown-menu-promo-link active" href="../demo-course/index.html">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <span class="svg-icon svg-icon-sm text-primary">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 19H4C2.9 19 2 18.1 2 17H22C22 18.1 21.1 19 20 19Z" fill="#035A4B"/>
                            <path opacity="0.3" d="M20 5H4C3.4 5 3 5.4 3 6V17H21V6C21 5.4 20.6 5 20 5Z" fill="#035A4B"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9167 6.83334H9.91666C9.18899 6.83334 8.66666 7.37744 8.66666 8.08334V13.9167C8.66666 14.6226 9.18899 15.1667 9.91666 15.1667H14.9167C15.1841 15.1667 15.3333 15.0112 15.3333 14.75V14.3333H10.3333C10.1032 14.3333 9.91665 14.1468 9.91665 13.9167C9.91665 13.6866 10.1032 13.5 10.3333 13.5H15.3333V7.25001C15.3333 6.9888 15.1841 6.83334 14.9167 6.83334Z" fill="#035A4B"/>
                            <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="8" y="6" width="8" height="10">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9167 6.83334H9.91666C9.18899 6.83334 8.66666 7.37744 8.66666 8.08334V13.9167C8.66666 14.6226 9.18899 15.1667 9.91666 15.1667H14.9167C15.1841 15.1667 15.3333 15.0112 15.3333 14.75V14.3333H10.3333C10.1032 14.3333 9.91665 14.1468 9.91665 13.9167C9.91665 13.6866 10.1032 13.5 10.3333 13.5H15.3333V7.25001C15.3333 6.9888 15.1841 6.83334 14.9167 6.83334Z" fill="white"/>
                            </mask>
                            <g mask="url(#mask0)">
                            </g>
                            </svg>

                          </span>
                        </div>

                        <div class="flex-grow-1 ms-3">
                          <span class="navbar-dropdown-menu-media-title">Course <span class="badge bg-success rounded-pill ms-1">Hot</span></span>
                          <p class="navbar-dropdown-menu-media-desc">Learn on your schedule. An online learning and teaching demo.</p>
                        </div>
                      </div>
                    </a>
                    <!-- End Promo Link -->
                  </div>
                  <!-- End Promo Item -->

                  <!-- Promo Item -->
                  <div class="navbar-dropdown-menu-promo-item">
                    <!-- Promo Link -->
                    <a class="navbar-dropdown-menu-promo-link " href="../demo-shop/index.html">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <span class="svg-icon svg-icon-sm text-primary">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" d="M20 22H4C3.4 22 3 21.6 3 21V2H21V21C21 21.6 20.6 22 20 22Z" fill="#035A4B"/>
                            <path d="M12 14C9.2 14 7 11.8 7 9V5C7 4.4 7.4 4 8 4C8.6 4 9 4.4 9 5V9C9 10.7 10.3 12 12 12C13.7 12 15 10.7 15 9V5C15 4.4 15.4 4 16 4C16.6 4 17 4.4 17 5V9C17 11.8 14.8 14 12 14Z" fill="#035A4B"/>
                            </svg>

                          </span>
                        </div>

                        <div class="flex-grow-1 ms-3">
                          <span class="navbar-dropdown-menu-media-title">E-Commerce</span>
                          <p class="navbar-dropdown-menu-media-desc">Choose an online store &amp; get your business online today!</p>
                        </div>
                      </div>
                    </a>
                    <!-- End Promo Link -->
                  </div>
                  <!-- End Promo Item -->

                  <!-- Promo Item -->
                  <div class="navbar-dropdown-menu-promo-item">
                    <!-- Promo Link -->
                    <a class="navbar-dropdown-menu-promo-link " href="../demo-app-marketplace/index.html">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <span class="svg-icon svg-icon-sm text-primary">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" d="M18 10V20C18 20.6 18.4 21 19 21C19.6 21 20 20.6 20 20V10H18Z" fill="#035A4B"/>
                            <path opacity="0.3" d="M11 10V17H6V10H4V20C4 20.6 4.4 21 5 21H12C12.6 21 13 20.6 13 20V10H11Z" fill="#035A4B"/>
                            <path opacity="0.3" d="M10 10C10 11.1 9.1 12 8 12C6.9 12 6 11.1 6 10H10Z" fill="#035A4B"/>
                            <path opacity="0.3" d="M18 10C18 11.1 17.1 12 16 12C14.9 12 14 11.1 14 10H18Z" fill="#035A4B"/>
                            <path opacity="0.3" d="M14 4H10V10H14V4Z" fill="#035A4B"/>
                            <path opacity="0.3" d="M17 4H20L22 10H18L17 4Z" fill="#035A4B"/>
                            <path opacity="0.3" d="M7 4H4L2 10H6L7 4Z" fill="#035A4B"/>
                            <path d="M6 10C6 11.1 5.1 12 4 12C2.9 12 2 11.1 2 10H6ZM10 10C10 11.1 10.9 12 12 12C13.1 12 14 11.1 14 10H10ZM18 10C18 11.1 18.9 12 20 12C21.1 12 22 11.1 22 10H18ZM19 2H5C4.4 2 4 2.4 4 3V4H20V3C20 2.4 19.6 2 19 2ZM12 17C12 16.4 11.6 16 11 16H6C5.4 16 5 16.4 5 17C5 17.6 5.4 18 6 18H11C11.6 18 12 17.6 12 17Z" fill="#035A4B"/>
                            </svg>

                          </span>
                        </div>

                        <div class="flex-grow-1 ms-3">
                          <span class="navbar-dropdown-menu-media-title">App Marketplace</span>
                          <p class="navbar-dropdown-menu-media-desc">Find apps and integrates seamlessly with popular apps.</p>
                        </div>
                      </div>
                    </a>
                    <!-- End Promo Link -->
                  </div>
                  <!-- End Promo Item -->
                </div>
                <!-- End Promo -->

                <!-- Promo -->
                <div class="navbar-dropdown-menu-promo">
                  <!-- Promo Item -->
                  <div class="navbar-dropdown-menu-promo-item">
                    <!-- Promo Link -->
                    <a class="navbar-dropdown-menu-promo-link " href="../demo-help-desk/index.html">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <span class="svg-icon svg-icon-sm text-primary">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M22.1671 18.1421C22.4827 18.4577 23.0222 18.2331 23.0206 17.7868L23.0039 13.1053V5.52632C23.0039 4.13107 21.8729 3 20.4776 3H8.68815C7.2929 3 6.16183 4.13107 6.16183 5.52632V9H13C14.6568 9 16 10.3431 16 12V15.6316H19.6565L22.1671 18.1421Z" fill="#035A4B"/>
                            <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M1.98508 18V13C1.98508 11.8954 2.88051 11 3.98508 11H11.9851C13.0896 11 13.9851 11.8954 13.9851 13V18C13.9851 19.1046 13.0896 20 11.9851 20H4.10081L2.85695 21.1905C2.53895 21.4949 2.01123 21.2695 2.01123 20.8293V18.3243C1.99402 18.2187 1.98508 18.1104 1.98508 18ZM5.99999 14.5C5.99999 14.2239 6.22385 14 6.49999 14H11.5C11.7761 14 12 14.2239 12 14.5C12 14.7761 11.7761 15 11.5 15H6.49999C6.22385 15 5.99999 14.7761 5.99999 14.5ZM9.49999 16C9.22385 16 8.99999 16.2239 8.99999 16.5C8.99999 16.7761 9.22385 17 9.49999 17H11.5C11.7761 17 12 16.7761 12 16.5C12 16.2239 11.7761 16 11.5 16H9.49999Z" fill="#035A4B"/>
                            </svg>

                          </span>
                        </div>

                        <div class="flex-grow-1 ms-3">
                          <span class="navbar-dropdown-menu-media-title">Help Desk</span>
                          <p class="navbar-dropdown-menu-media-desc">A customer service demo that helps you balance customer needs.</p>
                        </div>
                      </div>
                    </a>
                    <!-- End Promo Link -->
                  </div>
                  <!-- End Promo Item -->

                  <!-- Promo Item -->
                  <div class="navbar-dropdown-menu-promo-item">
                    <!-- Promo Link -->
                    <a class="navbar-dropdown-menu-promo-link" href="https://htmlstream.com/contact-us" target="_blank">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <span class="svg-icon svg-icon-sm text-primary">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M12 17C16.4183 17 20 13.4183 20 9C20 4.58172 16.4183 1 12 1C7.58172 1 4 4.58172 4 9C4 13.4183 7.58172 17 12 17Z" fill="#035A4B"/>
                            <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M6.53819 9L10.568 19.3624L11.976 18.8149L13.3745 19.3674L17.4703 9H6.53819ZM9.46188 11H14.5298L11.9759 17.4645L9.46188 11Z" fill="#035A4B"/>
                            <path opacity="0.3" d="M10 22H14V22C14 23.1046 13.1046 24 12 24V24C10.8954 24 10 23.1046 10 22V22Z" fill="#035A4B"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 17C8 16.4477 8.44772 16 9 16H15C15.5523 16 16 16.4477 16 17C16 17.5523 15.5523 18 15 18C15.5523 18 16 18.4477 16 19C16 19.5523 15.5523 20 15 20C15.5523 20 16 20.4477 16 21C16 21.5523 15.5523 22 15 22H9C8.44772 22 8 21.5523 8 21C8 20.4477 8.44772 20 9 20C8.44772 20 8 19.5523 8 19C8 18.4477 8.44772 18 9 18C8.44772 18 8 17.5523 8 17Z" fill="#035A4B"/>
                            </svg>

                          </span>
                        </div>

                        <div class="flex-grow-1 ms-3">
                          <span class="navbar-dropdown-menu-media-title">New demo ideas?</span>
                          <p class="navbar-dropdown-menu-media-desc">
                            Send us your suggestions <i class="bi-box-arrow-up-right ms-1"></i>
                          </p>
                        </div>
                      </div>
                    </a>
                    <!-- End Promo Link -->
                  </div>
                  <!-- End Promo Item -->

                  <!-- Promo Item -->
                  <div class="navbar-dropdown-menu-promo-item">
                  </div>
                  <!-- End Promo Item -->
                </div>
                <!-- End Promo -->
              </div>
              <!-- End Mega Menu -->
            </li>
            <!-- End Demos -->

            <!-- Docs -->
            <li class="hs-has-mega-menu nav-item"
                data-hs-mega-menu-item-options='{
                  "desktop": {
                    "maxWidth": "20rem"
                  }
                }'>
              <a id="docsMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Docs</a>

              <!-- Mega Menu -->
              <div class="hs-mega-menu hs-position-right dropdown-menu" aria-labelledby="docsMegaMenu" style="min-width: 20rem;">
                <!-- Link -->
                <a class="navbar-dropdown-menu-media-link" href="../documentation/index.html">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <span class="svg-icon svg-icon-sm text-primary">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M4.85714 1H11.7364C12.0911 1 12.4343 1.12568 12.7051 1.35474L17.4687 5.38394C17.8057 5.66895 18 6.08788 18 6.5292V19.0833C18 20.8739 17.9796 21 16.1429 21H4.85714C3.02045 21 3 20.8739 3 19.0833V2.91667C3 1.12612 3.02045 1 4.85714 1ZM7 13C7 12.4477 7.44772 12 8 12H15C15.5523 12 16 12.4477 16 13C16 13.5523 15.5523 14 15 14H8C7.44772 14 7 13.5523 7 13ZM8 16C7.44772 16 7 16.4477 7 17C7 17.5523 7.44772 18 8 18H11C11.5523 18 12 17.5523 12 17C12 16.4477 11.5523 16 11 16H8Z" fill="#035A4B"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.85714 3H14.7364C15.0911 3 15.4343 3.12568 15.7051 3.35474L20.4687 7.38394C20.8057 7.66895 21 8.08788 21 8.5292V21.0833C21 22.8739 20.9796 23 19.1429 23H6.85714C5.02045 23 5 22.8739 5 21.0833V4.91667C5 3.12612 5.02045 3 6.85714 3ZM7 13C7 12.4477 7.44772 12 8 12H15C15.5523 12 16 12.4477 16 13C16 13.5523 15.5523 14 15 14H8C7.44772 14 7 13.5523 7 13ZM8 16C7.44772 16 7 16.4477 7 17C7 17.5523 7.44772 18 8 18H11C11.5523 18 12 17.5523 12 17C12 16.4477 11.5523 16 11 16H8Z" fill="#035A4B"/>
                        </svg>

                      </span>
                    </div>

                    <div class="flex-grow-1 ms-3">
                      <span class="navbar-dropdown-menu-media-title">Documentation <span class="badge bg-primary rounded-pill ms-1">v4.3.1</span></span>
                      <p class="navbar-dropdown-menu-media-desc">Development guides for building projects with Space</p>
                    </div>
                  </div>
                </a>
                <!-- End Link -->

                <div class="dropdown-divider"></div>

                <!-- Link -->
                <a class="navbar-dropdown-menu-media-link" href="../snippets/index.html">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <span class="svg-icon svg-icon-sm text-primary">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.3" d="M21 2H13C12.4 2 12 2.4 12 3V13C12 13.6 12.4 14 13 14H21C21.6 14 22 13.6 22 13V3C22 2.4 21.6 2 21 2ZM15.7 8L14 10.1V5.80005L15.7 8ZM15.1 4H18.9L17 6.40002L15.1 4ZM17 9.59998L18.9 12H15.1L17 9.59998ZM18.3 8L20 5.90002V10.2L18.3 8ZM9 2H3C2.4 2 2 2.4 2 3V21C2 21.6 2.4 22 3 22H9C9.6 22 10 21.6 10 21V3C10 2.4 9.6 2 9 2ZM4.89999 12L4 14.8V9.09998L4.89999 12ZM4.39999 4H7.60001L6 8.80005L4.39999 4ZM6 15.2L7.60001 20H4.39999L6 15.2ZM7.10001 12L8 9.19995V14.9L7.10001 12Z" fill="#035A4B"/>
                        <path d="M21 18H13C12.4 18 12 17.6 12 17C12 16.4 12.4 16 13 16H21C21.6 16 22 16.4 22 17C22 17.6 21.6 18 21 18ZM19 21C19 20.4 18.6 20 18 20H13C12.4 20 12 20.4 12 21C12 21.6 12.4 22 13 22H18C18.6 22 19 21.6 19 21Z" fill="#035A4B"/>
                        </svg>

                      </span>
                    </div>

                    <div class="flex-grow-1 ms-3">
                      <span class="navbar-dropdown-menu-media-title">Snippets</span>
                      <p class="navbar-dropdown-menu-media-desc">Move quickly with copy-to-clipboard feature</p>
                    </div>
                  </div>
                </a>
                <!-- End Link -->
              </div>
              <!-- End Mega Menu -->
            </li>
            <!-- End Docs -->
          </ul>
        </div>
      </nav>
    </div>
    <!-- End Topbar -->

    <div class="container">
      <nav class="js-mega-menu navbar-nav-wrap">
        <!-- Default Logo -->
        <a class="navbar-brand" href="../demo-course/index.html" aria-label="Front">
          <img class="navbar-brand-logo" src="../assets/svg/logos/logo.svg" alt="Logo">
        </a>
        <!-- End Default Logo -->

        <!-- Secondary Content -->
        <div class="navbar-nav-wrap-secondary-content">
          <!-- Search -->
          <div class="dropdown dropdown-course-search d-lg-none d-inline-block">
            <a class="btn btn-ghost-secondary btn-sm btn-icon" href="#" id="navbarCourseSearchDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi-search"></i>
            </a>

            <div class="dropdown-menu dropdown-card" aria-labelledby="navbarCourseSearchDropdown">
              <!-- Card -->
              <div class="card card-sm">
                <div class="card-body">
                  <form class="input-group input-group-merge">
                    <input type="text" class="form-control" placeholder="What do you want to learn?" aria-label="What do you want to learn?">
                    <div class="input-group-append input-group-text">
                      <i class="bi-search"></i>
                    </div>
                  </form>
                </div>
              </div>
              <!-- End Card -->
            </div>
          </div>
          <!-- End Search -->

          <!-- Account -->
          <div class="dropdown">
            <a href="#" id="navbarShoppingCartDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
              <img class="avatar avatar-xs avatar-circle" src="../assets/img/160x160/img9.jpg" alt="Image Description">
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarShoppingCartDropdown" style="min-width: 16rem;">
              <a class="d-flex align-items-center p-2" href="#">
                <div class="flex-shrink-0">
                  <img class="avatar" src="../assets/img/160x160/img9.jpg" alt="Image Description">
                </div>
                <div class="flex-grow-1 ms-3">
                  <span class="d-block fw-semibold">Lida Reidy <span class="badge bg-primary ms-1">Pro</span></span>
                  <span class="d-block text-muted small">lidareidy@gmail.com</span>
                </div>
              </a>

              <div class="dropdown-divider my-3"></div>

              <a class="dropdown-item" href="#">
                <span class="dropdown-item-icon">
                  <i class="bi-chat-left-dots"></i>
                </span> Messages
              </a>
              <a class="dropdown-item" href="#">
                <span class="dropdown-item-icon">
                  <i class="bi-wallet2"></i>
                </span> Purchase history
              </a>
              <a class="dropdown-item" href="#">
                <span class="dropdown-item-icon">
                  <i class="bi-person"></i>
                </span> Account
              </a>
              <a class="dropdown-item" href="#">
                <span class="dropdown-item-icon">
                  <i class="bi-credit-card"></i>
                </span> Payment methods
              </a>

              <div class="dropdown-divider"></div>

              <a class="dropdown-item" href="#">
                <span class="dropdown-item-icon">
                  <i class="bi-question-circle"></i>
                </span> Help
              </a>
              <a class="dropdown-item" href="#">
                <span class="dropdown-item-icon">
                  <i class="bi-box-arrow-right"></i>
                </span> Log out
              </a>
            </div>
          </div>
          <!-- End Account -->
        </div>
        <!-- End Secondary Content -->

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-default">
            <i class="bi-list"></i>
          </span>
          <span class="navbar-toggler-toggled">
            <i class="bi-x"></i>
          </span>
        </button>
        <!-- End Toggler -->

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " href="../demo-course/index.html">Home</a>
            </li>

            <!-- Courses -->
            <li class="hs-has-sub-menu nav-item">
              <a id="coursesMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi-journals me-2"></i> Courses</a>

              <!-- Mega Menu -->
              <div class="hs-sub-menu dropdown-menu" aria-labelledby="coursesMegaMenu" style="min-width: 17rem;">
                <!-- Development -->
                <div class="hs-has-sub-menu nav-item">
                  <a id="developmentMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi-code-slash dropdown-item-icon"></i> Development</a>

                  <div class="hs-sub-menu dropdown-menu" aria-labelledby="developmentMegaMenu" style="min-width: 14rem;">
                    <a class="dropdown-item" href="#">All Business</a>
                    <a class="dropdown-item" href="#">Finance</a>
                    <a class="dropdown-item" href="#">Entrepreneurship</a>
                    <a class="dropdown-item" href="#">Communications</a>
                    <a class="dropdown-item" href="#">Management</a>
                    <a class="dropdown-item" href="#">Sales</a>
                    <a class="dropdown-item" href="#">Strategy</a>
                    <a class="dropdown-item" href="#">Operations</a>
                    <a class="dropdown-item" href="#">Project management</a>
                    <a class="dropdown-item" href="#">Business law</a>
                    <a class="dropdown-item" href="#">Data &amp; Analytics</a>
                    <a class="dropdown-item" href="#">Other</a>
                  </div>
                </div>
                <!-- End Development -->

                <!-- Business -->
                <div class="hs-has-sub-menu nav-item">
                  <a id="businessMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi-briefcase dropdown-item-icon"></i> Business</a>

                  <div class="hs-sub-menu dropdown-menu" aria-labelledby="businessMegaMenu" style="min-width: 14rem;">
                    <a class="dropdown-item" href="#">All Finance &amp; Accounting</a>
                    <a class="dropdown-item" href="#">Accounting &amp; Bookkeeping</a>
                    <a class="dropdown-item" href="#">Compliance</a>
                    <a class="dropdown-item" href="#">Economics</a>
                    <a class="dropdown-item" href="#">Finance</a>
                    <a class="dropdown-item" href="#">Other</a>
                  </div>
                </div>
                <!-- End Business -->

                <!-- Finance & Accounting -->
                <div class="hs-has-sub-menu nav-item">
                  <a id="financeAccountingMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi-graph-up dropdown-item-icon"></i> Finance &amp; Accounting</a>

                  <div class="hs-sub-menu dropdown-menu" aria-labelledby="financeAccountingMegaMenu" style="min-width: 14rem;">
                    <a class="dropdown-item" href="#">All IT &amp; Software</a>
                    <a class="dropdown-item" href="#">IT Sertification</a>
                    <a class="dropdown-item" href="#">Network &amp; security</a>
                    <a class="dropdown-item" href="#">Hardware</a>
                    <a class="dropdown-item" href="#">Operating systems</a>
                    <a class="dropdown-item" href="#">Other</a>
                  </div>
                </div>
                <!-- End Finance & Accounting -->

                <!-- IT & Software -->
                <div class="hs-has-sub-menu nav-item">
                  <a id="ITSoftwareMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi-laptop dropdown-item-icon"></i> IT &amp; Software</a>

                  <div class="hs-sub-menu dropdown-menu" aria-labelledby="ITSoftwareMegaMenu" style="min-width: 14rem;">
                    <a class="dropdown-item" href="#">All Design</a>
                    <a class="dropdown-item" href="#">Web design</a>
                    <a class="dropdown-item" href="#">Graphic design</a>
                    <a class="dropdown-item" href="#">Design tools</a>
                    <a class="dropdown-item" href="#">User experience</a>
                    <a class="dropdown-item" href="#">Game design</a>
                    <a class="dropdown-item" href="#">Design thinking</a>
                    <a class="dropdown-item" href="#">3D &amp; animation</a>
                    <a class="dropdown-item" href="#">Fashion</a>
                    <a class="dropdown-item" href="#">Architectural design</a>
                    <a class="dropdown-item" href="#">Interior design</a>
                    <a class="dropdown-item" href="#">Other</a>
                  </div>
                </div>
                <!-- End IT & Software -->

                <!-- Design -->
                <div class="hs-has-sub-menu nav-item">
                  <a id="designMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi-bezier2 dropdown-item-icon"></i> Design</a>

                  <div class="hs-sub-menu dropdown-menu" aria-labelledby="designMegaMenu" style="min-width: 14rem;">
                    <a class="dropdown-item" href="#">All Marketing</a>
                    <a class="dropdown-item" href="#">Digital marketing</a>
                    <a class="dropdown-item" href="#">Branding</a>
                    <a class="dropdown-item" href="#">Advertising</a>
                    <a class="dropdown-item" href="#">Other</a>
                  </div>
                </div>
                <!-- End Design -->

                <!-- Music -->
                <div class="hs-has-sub-menu nav-item">
                  <a id="musicMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi-music-note-list dropdown-item-icon"></i> Music</a>

                  <div class="hs-sub-menu dropdown-menu" aria-labelledby="musicMegaMenu" style="min-width: 14rem;">
                    <a class="dropdown-item" href="#">All Musics</a>
                    <a class="dropdown-item" href="#">Instrument</a>
                    <a class="dropdown-item" href="#">Production</a>
                    <a class="dropdown-item" href="#">Music fundamentals</a>
                    <a class="dropdown-item" href="#">Vocal</a>
                    <a class="dropdown-item" href="#">Music techniques</a>
                    <a class="dropdown-item" href="#">Music software</a>
                    <a class="dropdown-item" href="#">Other</a>
                  </div>
                </div>
                <!-- End Music -->
              </div>
              <!-- End Mega Menu -->
            </li>
            <!-- End Courses -->

            <!-- Search Form -->
            <li class="nav-item flex-grow-1 d-none d-lg-inline-block ">
              <form class="input-group input-group-merge">
                <div class="input-group-prepend input-group-text">
                  <i class="bi-search"></i>
                </div>
                <input type="text" class="form-control" placeholder="What do you want to learn?" aria-label="What do you want to learn?">
              </form>
            </li>
            <!-- End Search Form -->

            <!-- Dropdown -->
            <li class="hs-has-sub-menu nav-item">
              <a id="listingsDropdown" class="hs-mega-menu-invoker nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
              <div class="hs-sub-menu dropdown-menu" aria-labelledby="listingsDropdown" style="min-width: 14rem;">
                <a class="dropdown-item " href="../demo-course/courses.html">Courses</a>
                <a class="dropdown-item active" href="../demo-course/course-overview.html">Course Overview</a>
                <a class="dropdown-item " href="../demo-course/author-profile.html">Author Profile</a>
              </div>
            </li>
            <!-- End Dropdown -->

            <!-- My Courses -->
            <li class="hs-has-mega-menu nav-item"
                data-hs-mega-menu-item-options='{
                  "desktop": {
                    "maxWidth": "20rem"
                  }
                }'>
              <a id="myCoursesMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">My Courses</a>

              <!-- Mega Menu -->
              <div class="hs-mega-menu hs-position-right dropdown-menu" aria-labelledby="myCoursesMegaMenu" style="min-width: 22rem;">
                <!-- Course -->
                <a class="navbar-dropdown-menu-media-link" href="#">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <img class="avatar" src="../assets/svg/components/card-16.svg" alt="Image Description">
                    </div>

                    <div class="flex-grow-1 ms-3">
                      <div class="mb-3">
                        <span class="navbar-dropdown-menu-media-title">Java programming masterclass for software developers</span>
                        <p class="navbar-dropdown-menu-media-desc">By Emily Milda</p>
                      </div>
                      <div class="d-flex justify-content-between">
                        <span class="card-subtitle text-body">Completed</span>
                        <small class="text-dark fw-semibold">25%</small>
                      </div>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </a>
                <!-- End Course -->

                <!-- Course -->
                <a class="navbar-dropdown-menu-media-link" href="#">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <img class="avatar" src="../assets/svg/components/card-5.svg" alt="Image Description">
                    </div>

                    <div class="flex-grow-1 ms-3">
                      <div class="mb-3">
                        <span class="navbar-dropdown-menu-media-title">The Ultimate MySQL Bootcamp: Go from SQL Beginner</span>
                        <p class="navbar-dropdown-menu-media-desc">By Nataly Gaga and 2 others</p>
                      </div>
                      <div class="d-flex justify-content-between">
                        <span class="card-subtitle text-body">Completed</span>
                        <small class="text-dark fw-semibold">100%</small>
                      </div>
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </a>
                <!-- End Course -->
              </div>
              <!-- End Mega Menu -->
            </li>
            <!-- End My Courses -->
          </ul>
        </div>
        <!-- End Collapse -->
      </nav>
    </div>
  </header>

  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <div class="position-relative">
      <!-- Hero -->
      <div class="gradient-y-overlay-lg-white bg-img-start content-space-2" style="background-image: url({{asset('frontend/img/1920x800/img6.jpg')}});">
        <div class="container">
          <div class="row">
            <div class="col-md-7 col-lg-8">
              <small class="badge bg-success rounded-pill">Bestseller</small>
              <h1>{{$course->title}}</h1>
              <p>{{$course->subtitle}}</p>

              <div class="d-flex align-items-center flex-wrap">
                <!-- Media -->
                <div class="d-flex align-items-center me-4">
                  <div class="flex-shrink-0 avatar-group avatar-group-xs">
                    <span class="avatar avatar-xs avatar-circle">
                      <img class="avatar-img" src="../assets/img/160x160/img10.jpg" alt="Image Description">
                    </span>
                  </div>
                  <div class="flex-grow-1">
                    <span class="ps-2">Created by <a class="link" href="../demo-course/author-profile.html">CodeSpace Academy</a></span>
                  </div>
                </div>
                <!-- End Media -->

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
                    <span class="fw-semibold text-dark me-1">4.91</span>
                    <span>(1.5k+ reviews)</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
      </div>
      <!-- End Hero -->

      <!-- Sidebar -->
      <div class="container content-space-t-md-2 position-md-absolute top-0 start-0 end-0">
        <div class="row justify-content-end">
          <div class="col-md-5 col-lg-4 position-relative zi-2 mb-7 mb-md-0">
            <!-- Sticky Block -->
            <div id="stickyBlockStartPoint">
              <div class="js-sticky-block"
                   data-hs-sticky-block-options='{
                     "parentSelector": "#stickyBlockStartPoint",
                     "breakpoint": "md",
                     "startPoint": "#stickyBlockStartPoint",
                     "endPoint": "#stickyBlockEndPoint",
                     "stickyOffsetTop": 12,
                     "stickyOffsetBottom": 12
                   }'>
                <!-- Card -->
                <div class="card">
                  <div class="p-1">
                    <!-- Fancybox -->
                    <div class="bg-img-start text-center rounded-2 py-10 px-5" style="background-image: url({{ asset('storage/' . $course->cover_image) }});">
                      <a class="video-player video-player-btn" href="{{ asset('storage/' . $course->promotional_video) }}" role="button" data-fslightbox="youtube-video">
                        <span class="d-flex justify-content-center align-items-center">
                          <span class="video-player-icon shadow-sm">
                            <i class="bi-play-fill"></i>
                          </span>
                        </span>
                        <span class="text-white">Preview this course</span>
                      </a>
                    </div>
                    <!-- End Fancybox -->
                  </div>

                  <!-- Card Body -->
                  <div class="card-body">
                    <div class="mb-3">
                      <span class="card-title h2">RM {{$course->price}}</span>
                      {{-- <span class="text-muted"><del>$114.99</del></span> --}}
                    </div>

                    <div class="d-grid mb-2">
                      <a class="btn btn-primary btn-transition" href="#">Buy now</a>
                    </div>

                    <div class="text-center mb-4">
                      <p class="card-text small">30-day money-back guarantee</p>
                    </div>

                    <h4 class="card-title">This course includes</h4>

                    <ul class="list-unstyled list-py-1">
                      <li><i class="bi-camera-video nav-icon"></i> 46.5 hours on-demand video</li>
                      <li><i class="bi-file-text nav-icon"></i> 77 articles</li>
                      <li><i class="bi-file-earmark-arrow-down nav-icon"></i> 85 downloadable resources</li>
                      <li><i class="bi-stopwatch nav-icon"></i> Full time access</li>
                      <li><i class="bi-phone nav-icon"></i> Access on mobile and Tablet</li>
                      <li><i class="bi-award nav-icon"></i> Certificate of Completion</li>
                    </ul>
                  </div>
                  <!-- End Card Body -->
                </div>
                <!-- End Card -->
              </div>
            </div>
            <!-- End Sticky Block -->
          </div>
        </div>
      </div>
      <!-- End Sidebar -->
    </div>

    <!-- Content -->
    <div class="container content-space-t-2 content-space-t-md-1">
      <div class="row">
        <div class="col-md-7 col-lg-8">
          <h3 class="mb-4">What you'll learn:</h3>

          <div class="row">
            <div class="col-lg-6">
              <!-- List Checked -->
              <ul class="list-checked list-checked-primary">
                @foreach (array_slice(json_decode($course->learning_objectives), 0, ceil(count(json_decode($course->learning_objectives)) / 2)) as $learning_objective)
                <li class="list-checked-item">{{ $learning_objective }}</li>
            @endforeach
              </ul>
              <!-- End List Checked -->
            </div>
            <!-- End Col -->

            <div class="col-lg-6">
              <!-- List Checked -->
              <ul class="list-checked list-checked-primary">
                    @foreach (array_slice(json_decode($course->learning_objectives), ceil(count(json_decode($course->learning_objectives)) / 2)) as $learning_objective)
                    <li class="list-checked-item">{{ $learning_objective }}</li>
                    @endforeach
              </ul>
              <!-- End List Checked -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <!-- Accordion -->
          <div class="border-top pt-7 mt-7">
            <div class="row mb-4">
              <div class="col-8">
                <h3 class="mb-0">Course content</h3>
              </div>
              <!-- End Col -->

              <div class="col-4 text-end">
                <div class="row">
                  <div class="col-lg-6">
                    <span class="small">186 lectures</span>
                  </div>
                  <!-- End Col -->

                  <div class="col-lg-6">
                    <span class="small">24:10:28</span>
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->

            <!-- Accordion -->
            <div class="accordion accordion-btn-icon-start">

                @foreach ($course->sections as $section)

                <!-- Accordion Item -->
                <div class="accordion-item">
                  <div class="accordion-header" id="headingBasicsOne">
                    <a class="accordion-button" role="button" data-bs-toggle="collapse" data-bs-target="#accordionCourse{{$section->id}}" aria-expanded="true" aria-controls="accordionCourse{{$section->id}}">
                      <div class="flex-grow-1 ps-3">
                        <div class="row">
                          <div class="col-8">

                            {{$section->title}}
                          </div>
                          <!-- End Col -->

                          <div class="col-4 text-end">
                            <div class="row">
                              <div class="col-lg-6">
                                <span class="small text-muted fw-normal">{{count($section->lessons)}} Lessons</span>
                              </div>
                              <!-- End Col -->

                              <div class="col-lg-6">
                                <span class="small text-muted fw-normal">15:32</span>
                              </div>
                              <!-- End Col -->
                            </div>
                            <!-- End Row -->
                          </div>
                          <!-- End Col -->
                        </div>
                        <!-- End Row -->
                      </div>
                    </a>
                  </div>
                  <div id="accordionCourse{{$section->id}}" class="accordion-collapse collapse " aria-labelledby="headingBasicsOne">
                    <div class="accordion-body">
                      <!-- List Group -->
                      <div class="list-group list-group-flush list-group-no-gutters">
                        @foreach ($section->lessons as $lesson)

                        <!-- Item -->
                        <div class="list-group-item">
                          <div class="row">
                            <div class="col-8">
                              <a class="d-flex" href="#">
                                <div class="flex-shrink-0">
                                  <i class="bi-play-circle-fill small"></i>
                                </div>
                                <div class="flex-grow-1 ms-2">
                                  <span class="small">{{$lesson->title}}</span>
                                </div>
                              </a>
                            </div>
                            <!-- End Col -->


                            <div class="col-4 text-end">
                              <div class="row">
                                <div class="col-lg-6">
                                  @if($lesson->is_preview == "Yes")
                                    <!-- Fancybox -->
                                    <a class="video-player video-player-btn" href="{{$lesson->video->video_url}}" role="button" data-fslightbox="youtube-video">
                                     <p style="font-size:13px;">Preview</p>
                                    </a>
                                    <!-- End Fancybox -->
                                    @endif
                                </div>
                                <!-- End Col -->

                                <div class="col-lg-6">
                                  <span class="text-primary small">06:39</span>
                                </div>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->
                            </div>
                            <!-- End Col -->
                          </div>
                        </div>
                        <!-- End Item -->
                        @endforeach



                      </div>
                      <!-- End List Group -->
                    </div>
                  </div>
                </div>
                <!-- End Accordion Item -->
                @endforeach

            </div>
            <!-- End Accordion -->

            <!-- Link -->
            <div class="mt-3">
              <a class="link small">2 more sections</a>
            </div>
            <!-- End Link -->
          </div>
          <!-- End Accordion -->

          <!-- Content -->
          <div class="border-top pt-7 mt-7">
            <div class="mb-4">
              <h3>Description</h3>
            </div>

            <p>Become a Python Programmer and learn one of employer's most requested skills of 2019!</p>

            <p>This is the most comprehensive, yet straight-forward, course for the Python programming language on Udemy! Whether you have never programmed before, already know basic syntax, or want to learn about the advanced features of Python, this course is for you! In this course we will teach you Python 3. (Note, we also provide older Python 2 notes in case you need them)</p>

            <!-- Read More - Collapse -->
            <div class="collapse" id="collapseCourseDescriptionSection">
              <p>With over 100 lectures and more than 20 hours of video this comprehensive course leaves no stone unturned! This course includes quizzes, tests, and homework assignments as well as 3 major projects to create a Python project portfolio!</p>

              <p>This course will teach you Python in a practical manner, with every lecture comes a full coding screencast and a corresponding code notebook! Learn in whatever manner is best for you!</p>

              <p>We will start by helping you get Python installed on your computer, regardless of your operating system, whether its Linux, MacOS, or Windows, we've got you covered!</p>

              <p>We cover a wide variety of topics, including:</p>

              <ul class="text-body pl-6">
                <li>Command Line Basics</li>
                <li>Installing Python</li>
                <li>Running Python Code</li>
                <li>Strings</li>
                <li>Lists&nbsp;</li>
                <li>Dictionaries</li>
                <li>Tuples</li>
                <li>Sets</li>
                <li>Number Data Types</li>
                <li>Print Formatting</li>
                <li>Functions</li>
                <li>Scope</li>
                <li>args/kwargs</li>
                <li>Built-in Functions</li>
                <li>Debugging and Error Handling</li>
                <li>Modules</li>
                <li>External Modules</li>
                <li>Object Oriented Programming</li>
                <li>Inheritance</li>
                <li>Polymorphism</li>
                <li>File I/O</li>
                <li>Advanced Methods</li>
                <li>Unit Tests</li>
                <li>and much more!</li>
              </ul>

              <p>This course comes with a 30 day money back guarantee! If you are not satisfied in any way, you'll get your money back. Plus you will keep access to the Notebooks as a thank you for trying out the course!</p>
            </div>
            <!-- End Read More - Collapse -->

            <!-- Link -->
            <a class="link link-collapse" data-bs-toggle="collapse" href="#collapseCourseDescriptionSection" role="button" aria-expanded="false" aria-controls="collapseCourseDescriptionSection">
              <span class="link-collapse-default">Read more</span>
              <span class="link-collapse-active">Read less</span>
            </a>
            <!-- End Link -->
          </div>
          <!-- End Content -->

          <hr class="my-7">

          <h3 class="mb-4">Students also bought</h3>

          <div class="d-grid gap-5">
            <!-- Card -->
            <a class="d-block" href="../demo-course/course-overview.html">
              <div class="row">
                <div class="col-sm-5 col-lg-3 mb-3 mb-sm-0">
                  <img class="card-img" src="../assets/svg/components/card-6.svg" alt="Image Description">
                </div>
                <!-- End Col -->

                <div class="col-sm-7 col-lg-9">
                  <div class="row">
                    <div class="col-lg-6 mb-2 mb-lg-0">
                      <h5 class="text-inherit">Get started with Vue.js</h5>

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
                          <span class="text-body ms-1">4.95</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-6">
                      <div class="row">
                        <div class="col-7">
                          <div class="text-muted small mb-2">
                            <i class="bi-book me-1"></i> 10 lessons
                          </div>
                          <div class="text-muted small">
                            <i class="bi-clock me-1"></i> 3h 25m
                          </div>
                        </div>
                        <!-- End Col -->

                        <div class="col-5 text-end">
                          <p class="text-muted small mb-0"><del>$114.99</del></p>
                          <h5 class="text-primary mb-0">$99.99</h5>
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </a>
            <!-- End Card -->

            <!-- Card -->
            <a class="d-block" href="../demo-course/course-overview.html">
              <div class="row">
                <div class="col-sm-5 col-lg-3 mb-3 mb-sm-0">
                  <img class="card-img" src="../assets/svg/components/card-4.svg" alt="Image Description">
                </div>
                <!-- End Col -->

                <div class="col-sm-7 col-lg-9">
                  <div class="row">
                    <div class="col-lg-6 mb-2 mb-lg-0">
                      <h5 class="text-inherit">Coding block for WordPress</h5>

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
                          <span class="text-body ms-1">4.95</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-6">
                      <div class="row">
                        <div class="col-7">
                          <div class="text-muted small mb-2">
                            <i class="bi-book me-1"></i> 8 lessons
                          </div>
                          <div class="text-muted small">
                            <i class="bi-clock me-1"></i> 1h 14m
                          </div>
                        </div>
                        <!-- End Col -->

                        <div class="col-5 text-end">
                          <p class="text-muted small mb-0"><del>$59.99</del></p>
                          <h5 class="text-primary mb-0">$39.99</h5>
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </a>
            <!-- End Card -->

            <!-- Card -->
            <a class="d-block" href="../demo-course/course-overview.html">
              <div class="row">
                <div class="col-sm-5 col-lg-3 mb-3 mb-sm-0">
                  <img class="card-img" src="../assets/svg/components/card-15.svg" alt="Image Description">
                </div>
                <!-- End Col -->

                <div class="col-sm-7 col-lg-9">
                  <div class="row">
                    <div class="col-lg-6 mb-2 mb-lg-0">
                      <h5 class="text-inherit">The Ultimate MySQL Bootcamp: Go from SQL Beginner to Expert</h5>

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
                          <span class="text-body ms-1">4.87</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-6">
                      <div class="row">
                        <div class="col-7">
                          <div class="text-muted small mb-2">
                            <i class="bi-book me-1"></i> 23 lessons
                          </div>
                          <div class="text-muted small">
                            <i class="bi-clock me-1"></i> 7h 47m
                          </div>
                        </div>
                        <!-- End Col -->

                        <div class="col-5 text-end">
                          <p class="text-muted small mb-0"><del>$99.99</del></p>
                          <h5 class="text-primary mb-0">$89.99</h5>
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </a>
            <!-- End Card -->
          </div>

          <hr class="my-7">

          <h3 class="mb-4">Nataly's books</h3>

          <div class="row">
            <div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
              <!-- Card -->
              <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="../demo-course/course-overview.html" style="background-image: url(../assets/img/400x500/img14.jpg); min-height: 15rem;">
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
            <!-- End Col -->

            <div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
              <!-- Card -->
              <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="../demo-course/course-overview.html" style="background-image: url(../assets/img/400x500/img13.jpg); min-height: 15rem;">
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
            <!-- End Col -->

            <div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
              <!-- Card -->
              <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="../demo-course/course-overview.html" style="background-image: url(../assets/img/400x500/img15.jpg); min-height: 15rem;">
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
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <hr class="my-7">

          <div class="mb-4">
            <h3>About the instructor</h3>
          </div>

          <div class="row">
            <div class="col-sm-4 mb-4 mb-sm-0">
              <div class="mb-3">
                <img class="avatar avatar-xl avatar-circle" src="../assets/img/160x160/img10.jpg" alt="Image Description">
              </div>

              <ul class="list-unstyled list-py-1">
                <li><i class="bi-star dropdown-item-icon"></i> 4.87 Instructor rating</li>
                <li><i class="bi-chat-left-dots dropdown-item-icon"></i> 1,533 reviews</li>
                <li><i class="bi-person dropdown-item-icon"></i> 23,912 students</li>
                <li><i class="bi-play-circle dropdown-item-icon"></i> 29 courses</li>
              </ul>
            </div>
            <!-- End Col -->

            <div class="col-sm-8">
              <!-- Info -->
              <div class="mb-2">
                <h4 class="mb-1"><a href="../demo-course/author-profile.html">Nataly Gaga</a></h4>
                <p class="fw-semibold">Head of Data Science, Pierian Data Inc.</p>
              </div>

              <p>Nataly Gaga has a BS and MS in Mechanical Engineering from Santa Clara University and years of experience as a professional instructor and trainer for Data Science and programming. She has publications and patents in various fields such as microfluidics, materials science, and data science technologies.</p>
              <!-- End Info -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <hr class="my-7">

          <div class="mb-4">
            <h3>Student feedback</h3>
          </div>

          <div class="row mb-5">
            <div class="col-lg-4">
              <!-- Card -->
              <div class="card card-sm bg-primary text-center mb-3">
                <div class="card-body">
                  <span class="display-4 text-white">4.7</span>

                  <div class="d-flex justify-content-center gap-2 mb-2">
                    <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="22">
                    <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="22">
                    <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="22">
                    <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="22">
                    <img src="../assets/svg/illustrations/star-half.svg" alt="Review rating" width="22">
                  </div>
                  <span class="text-white">Course rating</span>
                </div>
              </div>
              <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-lg-8">
              <!-- Ratings -->
              <div class="d-grid gap-2">
                <a class="row align-items-center" href="#">
                  <div class="col-7">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <!-- End Col -->

                  <div class="col-2 text-end">
                    <div class="d-flex">
                      <div class="d-flex gap-1 me-2">
                        <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                        <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                        <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                        <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                        <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                      </div>
                      <span>205</span>
                    </div>
                  </div>
                  <!-- End Col -->
                </a>
                <!-- End Row -->

                <a class="row align-items-center" href="#">
                  <div class="col-7">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 53%;" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <!-- End Col -->

                  <div class="col-2 text-end">
                    <div class="d-flex">
                      <div class="d-flex gap-1 me-2">
                        <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                        <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                        <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                        <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                        <img src="../assets/svg/illustrations/star-muted.svg" alt="Review rating" width="16">
                      </div>
                      <span>55</span>
                    </div>
                  </div>
                  <!-- End Col -->
                </a>
                <!-- End Row -->

                <a class="row align-items-center" href="#">
                  <div class="col-7">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <!-- End Col -->

                  <div class="col-2 text-end">
                    <div class="d-flex">
                      <div class="d-flex gap-1 me-2">
                        <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                        <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                        <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                        <img src="../assets/svg/illustrations/star-muted.svg" alt="Review rating" width="16">
                        <img src="../assets/svg/illustrations/star-muted.svg" alt="Review rating" width="16">
                      </div>
                      <span>23</span>
                    </div>
                  </div>
                  <!-- End Col -->
                </a>
                <!-- End Row -->

                <a class="row align-items-center" href="#">
                  <div class="col-7">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <!-- End Col -->

                  <div class="col-2 text-end">
                    <div class="d-flex">
                      <div class="d-flex gap-1 me-2">
                        <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                        <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                        <img src="../assets/svg/illustrations/star-muted.svg" alt="Review rating" width="16">
                        <img src="../assets/svg/illustrations/star-muted.svg" alt="Review rating" width="16">
                        <img src="../assets/svg/illustrations/star-muted.svg" alt="Review rating" width="16">
                      </div>
                      <span>0</span>
                    </div>
                  </div>
                  <!-- End Col -->
                </a>
                <!-- End Row -->

                <a class="row align-items-center" href="#">
                  <div class="col-7">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 1%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <!-- End Col -->

                  <div class="col-2 text-end">
                    <div class="d-flex">
                      <div class="d-flex gap-1 me-2">
                        <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                        <img src="../assets/svg/illustrations/star-muted.svg" alt="Review rating" width="16">
                        <img src="../assets/svg/illustrations/star-muted.svg" alt="Review rating" width="16">
                        <img src="../assets/svg/illustrations/star-muted.svg" alt="Review rating" width="16">
                        <img src="../assets/svg/illustrations/star-muted.svg" alt="Review rating" width="16">
                      </div>
                      <span>4</span>
                    </div>
                  </div>
                  <!-- End Col -->
                </a>
                <!-- End Row -->
              </div>
              <!-- End Ratings -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <!-- Heading -->
          <div class="border-bottom pb-4 mb-4">
            <div class="row align-items-center">
              <div class="col-sm-6 mb-2 mb-sm-0">
                <h3 class="mb-0">Reviews</h3>
              </div>
              <!-- End Col -->

              <div class="col-sm-6">
                <!-- Form -->
                <form>
                  <div class="input-group input-group-merge">
                    <input type="search" class="form-control" placeholder="Search reviews" aria-label="Search reviews">
                    <div class="input-group-append input-group-text">
                      <i class="bi-search"></i>
                    </div>
                  </div>
                </form>
                <!-- End Form -->
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>
          <!-- End Heading -->

          <!-- Comment -->
          <ul class="list-comment list-comment-divider mb-7">
            <!-- Item -->
            <li class="list-comment-item">
              <div class="d-flex gap-1 mb-3">
                <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
              </div>

              <!-- Media -->
              <div class="d-flex align-items-center mb-3">
                <div class="flex-shrink-0">
                  <img class="avatar avatar-sm avatar-circle" src="../assets/img/160x160/img3.jpg" alt="Image Description">
                </div>

                <div class="flex-grow-1 ms-3">
                  <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Dave Austin</h5>
                    <span class="d-block small text-muted">April 3, 2019</span>
                  </div>
                </div>
              </div>
              <!-- End Media -->

              <div class="mb-5">
                <p>This course helped me in learning python in a very simple and effective way &amp; boosts up my confidence. Concepts have been explained in a crystal clear way.</p>
              </div>

              <div class="mb-2">
                <span class="text-dark fw-semibold">Dave</span>
                <span>- Verified Purchase</span>
              </div>

              <!-- Media -->
              <div class="d-flex align-items-center">
                <span class="small me-2">Was this helpful?</span>

                <div class="d-flex gap-2">
                  <a class="btn btn-white btn-xs" href="javascript:;">
                    <i class="bi-hand-thumbs-up me-1"></i> Yes <span>(45)</span>
                  </a>
                  <a class="btn btn-white btn-xs" href="javascript:;">
                    <i class="bi-hand-thumbs-down me-1"></i> No <span>(21)</span>
                  </a>
                </div>
              </div>
              <!-- End Media -->
            </li>
            <!-- End Item -->

            <!-- Item -->
            <li class="list-comment-item">
              <div class="d-flex gap-1 mb-3">
                <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
              </div>

              <!-- Media -->
              <div class="d-flex align-items-center mb-3">
                <div class="flex-shrink-0">
                  <img class="avatar avatar-sm avatar-circle" src="../assets/img/160x160/img1.jpg" alt="Image Description">
                </div>

                <div class="flex-grow-1 ms-3">
                  <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Hailey</h5>
                    <span class="d-block small text-muted">January 19, 2019</span>
                  </div>
                </div>
              </div>
              <!-- End Media -->

              <div class="mb-5">
                <p>HUUUUUUUUUUUGE fan of Emily Milda</p>
                <p>Master of Python, I took other classes also. I was very impressed, a very good teacher, in detail explanations, easy to understand. I owe him many thanks and hopefully. THAAAANK YOUU!</p>
              </div>

              <div class="mb-2">
                <span class="text-dark fw-semibold">Hailey</span>
                <span>- Verified Purchase</span>
              </div>

              <!-- Media -->
              <div class="d-flex align-items-center">
                <span class="small me-2">Was this helpful?</span>

                <div class="d-flex gap-2">
                  <a class="btn btn-white btn-xs" href="javascript:;">
                    <i class="bi-hand-thumbs-up me-1"></i> Yes <span>(2)</span>
                  </a>
                  <a class="btn btn-white btn-xs" href="javascript:;">
                    <i class="bi-hand-thumbs-down me-1"></i> No <span>(0)</span>
                  </a>
                </div>
              </div>
              <!-- End Media -->
            </li>
            <!-- End Item -->

            <!-- Item -->
            <li class="list-comment-item">
              <div class="d-flex gap-1 mb-3">
                <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
              </div>

              <!-- Media -->
              <div class="d-flex align-items-center mb-3">
                <div class="flex-shrink-0">
                  <img class="avatar avatar-sm avatar-circle" src="../assets/img/160x160/img8.jpg" alt="Image Description">
                </div>

                <div class="flex-grow-1 ms-3">
                  <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Chrizelle</h5>
                    <span class="d-block small text-muted">December 21, 2018</span>
                  </div>
                </div>
              </div>
              <!-- End Media -->

              <div class="mb-5">
                <p>Section 19 needs to be addressed. the 1st topic in the section tells us it is optional and can be skipped. this is not true and your instructions tell us to contact udemy support if there is an issue. we did and they told us to contact you.</p>
              </div>

              <div class="mb-2">
                <span class="text-dark fw-semibold">Chrizelle</span>
                <span>- Verified Purchase</span>
              </div>

              <!-- Media -->
              <div class="d-flex align-items-center">
                <span class="small me-2">Was this helpful?</span>

                <div class="d-flex gap-2">
                  <a class="btn btn-white btn-xs" href="javascript:;">
                    <i class="bi-hand-thumbs-up me-1"></i> Yes <span>(0)</span>
                  </a>
                  <a class="btn btn-white btn-xs" href="javascript:;">
                    <i class="bi-hand-thumbs-down me-1"></i> No <span>(0)</span>
                  </a>
                </div>
              </div>
              <!-- End Media -->
            </li>
            <!-- End Item -->
          </ul>
          <!-- End Comment -->

          <div class="text-center">
            <a class="btn btn-outline-primary btn-transition" href="#">See all reviews</a>
          </div>

          <hr class="my-7">
        </div>
      </div>
    </div>
    <!-- End Content -->

    <!-- Sticky Block End Point -->
    <div id="stickyBlockEndPoint"></div>

    <!-- Card Grid -->
    <div class="container content-space-b-2">
      <h3 class="mb-4">Students also bought</h3>

      <div class="row">
        <div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
          <!-- Card -->
          <div class="card card-bordered h-100">
            <!-- Card Pinned -->
            <div class="card-pinned">
              <img class="card-img-top" src="../assets/svg/components/card-13.svg" alt="Image Description">

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
                    <span class="fw-semibold text-white me-1">4.95</span>
                    <span class="text-white-70">(1k+ reviews)</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Card Pinned -->

            <!-- Card Body -->
            <div class="card-body">
              <small class="card-subtitle">Design &amp; Illustration</small>

              <div class="mb-3">
                <h3 class="card-title">
                  <a class="text-dark" href="../demo-course/course-overview.html">From the Top: Adobe Illustrator for Beginners</a>
                </h3>
              </div>

              <div class="row align-items-center">
                <div class="col">
                  <div class="avatar-group avatar-group-xs">
                    <a class="avatar avatar-xs avatar-circle" data-toggle="tooltip" data-placement="top" title="Emily Milda" href="#">
                      <img class="avatar-img" src="../assets/img/160x160/img8.jpg" alt="Image Description">
                    </a>
                    <a class="avatar avatar-xs avatar-circle" data-toggle="tooltip" data-placement="top" title="John O'nolan" href="#">
                      <img class="avatar-img" src="../assets/img/160x160/img4.jpg" alt="Image Description">
                    </a>
                  </div>
                </div>
                <!-- End Col -->

                <div class="col-auto">
                  <ul class="list-inline list-separator small ms-auto">
                    <li class="list-inline-item">
                      <i class="bi-book me-1"></i> 8 lessons
                    </li>
                    <li class="list-inline-item">
                      <i class="bi-clock me-1"></i> 7h 59m
                    </li>
                  </ul>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
            <!-- End Card Body -->

            <!-- Card Footer -->
            <div class="card-footer pt-0">
              <div class="d-flex justify-content-between align-items-center">
                <div class="me-2">
                  <span class="d-block text-muted small"><del>$129.99</del></span>
                  <h5 class="card-title">$119.99</h5>
                </div>
                <a class="btn btn-primary btn-sm btn-transition" href="../demo-course/course-overview.html">Preview</a>
              </div>
            </div>
            <!-- End Card Footer -->
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
          <!-- Card -->
          <div class="card card-bordered h-100">
            <!-- Card Pinned -->
            <div class="card-pinned">
              <img class="card-img-top" src="../assets/svg/components/card-6.svg" alt="Image Description">

              <div class="card-pinned-top-start">
                <small class="badge bg-success rounded-pill">Featured</small>
              </div>

              <div class="card-pinned-bottom-start">
                <div class="d-flex align-items-center flex-wrap">
                  <!-- Rating -->
                  <div class="d-flex gap-1">
                    <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                    <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                    <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                    <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                    <img src="../assets/svg/illustrations/star-muted.svg" alt="Review rating" width="16">
                  </div>
                  <!-- End Rating -->
                  <div class="ms-1">
                    <span class="fw-semibold text-white me-1">4.73</span>
                    <span class="text-white-70">(4.7k+ reviews)</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Card Pinned -->

            <!-- Card Body -->
            <div class="card-body">
              <small class="card-subtitle">Code</small>

              <div class="mb-3">
                <h3 class="card-title">
                  <a class="text-dark" href="../demo-course/course-overview.html">Get started with Vue.js</a>
                </h3>
              </div>

              <div class="row align-items-center">
                <div class="col">
                  <div class="avatar-group avatar-group-xs">
                    <a class="avatar avatar-xs avatar-circle" data-toggle="tooltip" data-placement="top" title="Aaron Larsson" href="#">
                      <img class="avatar-img" src="../assets/img/160x160/img3.jpg" alt="Image Description">
                    </a>
                    <a class="avatar avatar-xs avatar-circle" data-toggle="tooltip" data-placement="top" title="Hanna Wolfe" href="#">
                      <img class="avatar-img" src="../assets/img/160x160/img7.jpg" alt="Image Description">
                    </a>
                  </div>
                </div>
                <!-- End Col -->

                <div class="col-auto">
                  <ul class="list-inline list-separator small ms-auto">
                    <li class="list-inline-item">
                      <i class="bi-book me-1"></i> 25 lessons
                    </li>
                    <li class="list-inline-item">
                      <i class="bi-clock me-1"></i> 17h 46m
                    </li>
                  </ul>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
            <!-- End Card Body -->

            <!-- Card Footer -->
            <div class="card-footer pt-0">
              <div class="d-flex justify-content-between align-items-center">
                <div class="me-2">
                  <span class="d-block text-muted small"><del>$169.99</del></span>
                  <h5 class="card-title">$129.99</h5>
                </div>
                <a class="btn btn-primary btn-sm btn-transition" href="../demo-course/course-overview.html">Preview</a>
              </div>
            </div>
            <!-- End Card Footer -->
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
          <!-- Card -->
          <div class="card card-bordered h-100">
            <!-- Card Pinned -->
            <div class="card-pinned">
              <img class="card-img-top" src="../assets/svg/components/card-15.svg" alt="Image Description">

              <div class="card-pinned-bottom-start">
                <div class="d-flex align-items-center flex-wrap">
                  <!-- Rating -->
                  <div class="d-flex gap-1">
                    <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                    <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                    <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                    <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                    <img src="../assets/svg/illustrations/star-muted.svg" alt="Review rating" width="16">
                  </div>
                  <!-- End Rating -->
                  <div class="ms-1">
                    <span class="fw-semibold text-white me-1">4.47</span>
                    <span class="text-white-70">(3.8k+ reviews)</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Card Pinned -->

            <!-- Card Body -->
            <div class="card-body">
              <small class="card-subtitle">Code</small>

              <div class="mb-3">
                <h3 class="card-title">
                  <a class="text-dark" href="../demo-course/course-overview.html">The Ultimate MySQL Bootcamp: Go from SQL Beginner to Expert</a>
                </h3>
              </div>

              <div class="row align-items-center">
                <div class="col">
                  <div class="avatar-group avatar-group-xs">
                    <a class="avatar avatar-xs avatar-circle" data-toggle="tooltip" data-placement="top" title="Hanna Wolfe" href="#">
                      <img class="avatar-img" src="../assets/img/160x160/img7.jpg" alt="Image Description">
                    </a>
                  </div>
                </div>
                <!-- End Col -->

                <div class="col-auto">
                  <ul class="list-inline list-separator small ms-auto">
                    <li class="list-inline-item">
                      <i class="bi-book me-1"></i> 42 lessons
                    </li>
                    <li class="list-inline-item">
                      <i class="bi-clock me-1"></i> 31h 5m
                    </li>
                  </ul>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
            <!-- End Card Body -->

            <!-- Card Footer -->
            <div class="card-footer pt-0">
              <div class="d-flex justify-content-between align-items-center">
                <div class="me-2">
                  <span class="d-block text-muted small"><del>$159.99</del></span>
                  <h5 class="card-title">$111.99</h5>
                </div>
                <a class="btn btn-primary btn-sm btn-transition" href="../demo-course/course-overview.html">Preview</a>
              </div>
            </div>
            <!-- End Card Footer -->
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Card Grid -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  <footer class="bg-dark">
    <div class="container pb-1 pb-lg-5">
      <div class="row content-space-t-2">
        <div class="col-lg-3 mb-7 mb-lg-0">
          <!-- Logo -->
          <div class="mb-5">
            <a class="navbar-brand" href="../index.html" aria-label="Space">
              <img class="navbar-brand-logo" src="../assets/svg/logos/logo-white.svg" alt="Image Description">
            </a>
          </div>
          <!-- End Logo -->

          <!-- List -->
          <ul class="list-unstyled list-py-1">
            <li><a class="link-sm link-light" href="#"><i class="bi-geo-alt-fill me-1"></i> 153 Williamson Plaza, Maggieberg</a></li>
            <li><a class="link-sm link-light" href="tel:1-062-109-9222"><i class="bi-telephone-inbound-fill me-1"></i> +1 (062) 109-9222</a></li>
          </ul>
          <!-- End List -->

        </div>
        <!-- End Col -->

        <div class="col-sm mb-7 mb-sm-0">
          <h5 class="text-white mb-3">Company</h5>

          <!-- List -->
          <ul class="list-unstyled list-py-1 mb-0">
            <li><a class="link-sm link-light" href="#">About</a></li>
            <li><a class="link-sm link-light" href="#">Careers <span class="badge bg-warning text-dark rounded-pill ms-1">We're hiring</span></a></li>
            <li><a class="link-sm link-light" href="#">Blog</a></li>
            <li><a class="link-sm link-light" href="#">Customers <i class="bi-box-arrow-up-right small ms-1"></i></a></li>
            <li><a class="link-sm link-light" href="#">Hire us</a></li>
          </ul>
          <!-- End List -->
        </div>
        <!-- End Col -->

        <div class="col-sm mb-7 mb-sm-0">
          <h5 class="text-white mb-3">Features</h5>

          <!-- List -->
          <ul class="list-unstyled list-py-1 mb-0">
            <li><a class="link-sm link-light" href="#">Press <i class="bi-box-arrow-up-right small ms-1"></i></a></li>
            <li><a class="link-sm link-light" href="#">Release Notes</a></li>
            <li><a class="link-sm link-light" href="#">Integrations</a></li>
            <li><a class="link-sm link-light" href="#">Pricing</a></li>
          </ul>
          <!-- End List -->
        </div>
        <!-- End Col -->

        <div class="col-sm mb-7 mb-sm-0">
          <h5 class="text-white mb-3">Documentation</h5>

          <!-- List -->
          <ul class="list-unstyled list-py-1 mb-0">
            <li><a class="link-sm link-light" href="#">Support</a></li>
            <li><a class="link-sm link-light" href="#">Docs</a></li>
            <li><a class="link-sm link-light" href="#">Status</a></li>
            <li><a class="link-sm link-light" href="#">API Reference</a></li>
            <li><a class="link-sm link-light" href="#">Tech Requirements</a></li>
          </ul>
          <!-- End List -->
        </div>
        <!-- End Col -->

        <div class="col-sm">
          <h5 class="text-white mb-3">Resources</h5>

          <!-- List -->
          <ul class="list-unstyled list-py-1 mb-5">
            <li><a class="link-sm link-light" href="#"><i class="bi-question-circle-fill me-1"></i> Help</a></li>
            <li><a class="link-sm link-light" href="#"><i class="bi-person-circle me-1"></i> Your Account</a></li>
          </ul>
          <!-- End List -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->

      <div class="border-top border-white-10 my-7"></div>

      <div class="row mb-7">
        <div class="col-sm mb-3 mb-sm-0">
          <!-- Socials -->
          <ul class="list-inline list-separator list-separator-light mb-0">
            <li class="list-inline-item">
              <a class="link-sm link-light" href="#">Privacy &amp; Policy</a>
            </li>
            <li class="list-inline-item">
              <a class="link-sm link-light" href="#">Terms</a>
            </li>
            <li class="list-inline-item">
              <a class="link-sm link-light" href="#">Site Map</a>
            </li>
          </ul>
          <!-- End Socials -->
        </div>

        <div class="col-sm-auto">
          <!-- Socials -->
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a class="btn btn-soft-light btn-xs btn-icon" href="#">
                <i class="bi-facebook"></i>
              </a>
            </li>

            <li class="list-inline-item">
              <a class="btn btn-soft-light btn-xs btn-icon" href="#">
                <i class="bi-google"></i>
              </a>
            </li>

            <li class="list-inline-item">
              <a class="btn btn-soft-light btn-xs btn-icon" href="#">
                <i class="bi-twitter"></i>
              </a>
            </li>

            <li class="list-inline-item">
              <a class="btn btn-soft-light btn-xs btn-icon" href="#">
                <i class="bi-github"></i>
              </a>
            </li>

            <li class="list-inline-item">
              <!-- Button Group -->
              <div class="btn-group">
                <button type="button" class="btn btn-soft-light btn-xs dropdown-toggle" id="footerSelectLanguage" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                  <span class="d-flex align-items-center">
                    <img class="avatar avatar-xss avatar-circle me-2" src="../assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Image description" width="16"/>
                    <span>English (US)</span>
                  </span>
                </button>

                <div class="dropdown-menu" aria-labelledby="footerSelectLanguage">
                  <a class="dropdown-item d-flex align-items-center active" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="../assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Image description" width="16"/>
                    <span>English (US)</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="../assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Image description" width="16"/>
                    <span>Deutsch</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="../assets/vendor/flag-icon-css/flags/1x1/es.svg" alt="Image description" width="16"/>
                    <span>Español</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="../assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="Image description" width="16"/>
                    <span>中文 (繁體)</span>
                  </a>
                </div>
              </div>
              <!-- End Button Group -->
            </li>
          </ul>
          <!-- End Socials -->
        </div>
      </div>

      <!-- Copyright -->
      <div class="w-md-85 text-lg-center mx-lg-auto">
        <p class="text-white-50 small">&copy; Front. 2021 Htmlstream. All rights reserved.</p>
        <p class="text-white-50 small">When you visit or interact with our sites, services or tools, we or our authorised service providers may use cookies for storing information to help provide you with a better, faster and safer experience and for marketing purposes.</p>
      </div>
      <!-- End Copyright -->
    </div>
  </footer>

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
  <script src="{{asset('frontend/vendor/hs-header/dist/hs-header.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/hs-mega-menu/dist/hs-mega-menu.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/hs-go-to/dist/hs-go-to.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/hs-sticky-block/dist/hs-sticky-block.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/fslightbox/index.js')}}"></script>

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


      // INITIALIZATION OF STICKY BLOCKS
      // =======================================================
      new HSStickyBlock('.js-sticky-block', {
        targetSelector: document.getElementById('header').classList.contains('navbar-fixed') ? '#header' : null
      })
    })()
  </script>
</body>
</html>
