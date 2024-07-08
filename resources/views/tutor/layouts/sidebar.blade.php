<aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered bg-white  ">
    <div class="navbar-vertical-container">
      <div class="navbar-vertical-footer-offset">
        <!-- Logo -->

        <a class="navbar-brand" href="./index.html" aria-label="CodeSpace" style="justify-content: center;">
          <img class="navbar-brand-logo" src="{{asset('frontend/images/logos/codespacesolutions.png')}}" alt="Logo" data-hs-theme-appearance="default">
          <img class="navbar-brand-logo" src="{{asset('frontend/images/logos/codespacesolutions_light.png')}}" alt="Logo" data-hs-theme-appearance="dark">
          <img class="navbar-brand-logo-mini" src="{{asset('frontend/images/logos/codespacesolutions.png')}}" alt="Logo" data-hs-theme-appearance="default">
          <img class="navbar-brand-logo-mini" src="{{asset('frontend/images/logos/codespacesolutions_light.png')}}" alt="Logo" data-hs-theme-appearance="dark">
        </a>

        <!-- End Logo -->

        <!-- Navbar Vertical Toggle -->
        <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
          <i class="bi-arrow-bar-left navbar-toggler-short-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
          <i class="bi-arrow-bar-right navbar-toggler-full-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
        </button>

        <!-- End Navbar Vertical Toggle -->

        <!-- Content -->
        <div class="navbar-vertical-content">
          <div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">
            <!-- Collapse -->
            <div class="nav-item">
              <a class="nav-link " href="{{route('tutor.dashboard')}}" role="button" >
                <i class="bi-house-door nav-icon"></i>
                <span class="nav-link-title">Dashboards</span>
              </a>
            </div>
            <!-- End Collapse -->

            <span class="dropdown-header mt-4">Course Management </span>
            <small class="bi-three-dots nav-subtitle-replacer"></small>

            <!-- Collapse -->
            <div class="navbar-nav nav-compact">

            </div>
            <div id="navbarVerticalMenuPagesMenu">
              <!-- Collapse -->
              <div class="nav-item">
                <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuCourseManagementCoursesMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuCourseManagementCoursesMenu" aria-expanded="false" aria-controls="navbarVerticalMenuCourseManagementCoursesMenu">

                  <i class="bi bi-journals nav-icon"></i>
                  <span class="nav-link-title">Courses</span>
                </a>

                <div id="navbarVerticalMenuCourseManagementCoursesMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                  <a class="nav-link " href="{{route('courses.index')}}">Overview</a>
                  <a class="nav-link " href="{{route('courses.create')}}">Add Course </a>
                </div>
              </div>
              <!-- End Collapse -->




            </div>
            <!-- End Collapse -->



            <span class="dropdown-header mt-4">Event Management </span>
            <small class="bi-three-dots nav-subtitle-replacer"></small>


            <!-- Collapse -->
            <div class="navbar-nav nav-compact">

            </div>
            <div id="navbarVerticalMenuPagesMenu">



                <div class="nav-item">
                <a class="nav-link " href="{{route('events.index')}}" data-placement="left">
                    <i class="bi-box-seam nav-icon"></i>
                    <span class="nav-link-title">Events</span>
                </a>
                </div>
            </div>
            <!-- End Collapse -->

            <span class="dropdown-header mt-4">Content Management </span>
            <small class="bi-three-dots nav-subtitle-replacer"></small>


    <!-- Collapse -->
    <div class="navbar-nav nav-compact">

    </div>
    <div id="navbarVerticalMenuContentMenu">
      <!-- Collapse -->
      <div class="nav-item">
        <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuArticleManagementArticlesMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuArticleManagementArticlesMenu" aria-expanded="false" aria-controls="navbarVerticalMenuArticleManagementArticlesMenu">

          <i class="bi bi-journals nav-icon"></i>
          <span class="nav-link-title">Articles</span>
        </a>

        <div id="navbarVerticalMenuArticleManagementArticlesMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuContentMenu">
          <a class="nav-link " href="{{route('posts.index')}}">Overview</a>
          <a class="nav-link " href="{{route('posts.create')}}">Add Article</a>
        </div>
      </div>
      <!-- End Collapse -->

    </div>
    <!-- End Collapse -->


            <span class="dropdown-header mt-4">Profile Management </span>
            <small class="bi-three-dots nav-subtitle-replacer"></small>

            <!-- Collapse -->
            <div class="navbar-nav nav-compact">

            </div>
            <div id="navbarVerticalMenuPagesMenu">



                <div class="nav-item">
                <a class="nav-link " href="{{route('tutor.profile.show', Auth::user()->id)}}" data-placement="left">
                    <i class="bi-box-seam nav-icon"></i>
                    <span class="nav-link-title">Profile</span>
                </a>
                </div>
            </div>
            <!-- End Collapse -->



          </div>

        </div>
        <!-- End Content -->

        <!-- Footer -->
        <div class="navbar-vertical-footer">
          <ul class="navbar-vertical-footer-list">
            <li class="navbar-vertical-footer-list-item">
              <!-- Style Switcher -->
              <div class="dropdown dropup">
                <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="selectThemeDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>

                </button>

                <div class="dropdown-menu navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="selectThemeDropdown">
                  <a class="dropdown-item" href="#" data-icon="bi-moon-stars" data-value="auto">
                    <i class="bi-moon-stars me-2"></i>
                    <span class="text-truncate" title="Auto (system default)">Auto (system default)</span>
                  </a>
                  <a class="dropdown-item" href="#" data-icon="bi-brightness-high" data-value="default">
                    <i class="bi-brightness-high me-2"></i>
                    <span class="text-truncate" title="Default (light mode)">Default (light mode)</span>
                  </a>
                  <a class="dropdown-item active" href="#" data-icon="bi-moon" data-value="dark">
                    <i class="bi-moon me-2"></i>
                    <span class="text-truncate" title="Dark">Dark</span>
                  </a>
                </div>
              </div>

              <!-- End Style Switcher -->
            </li>

            <li class="navbar-vertical-footer-list-item">
              <!-- Other Links -->
              <div class="dropdown dropup">
                <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="otherLinksDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                  <i class="bi-info-circle"></i>
                </button>

                <div class="dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="otherLinksDropdown">
                  <span class="dropdown-header">Help</span>
                  <a class="dropdown-item" href="#">
                    <i class="bi-journals dropdown-item-icon"></i>
                    <span class="text-truncate" title="Resources &amp; tutorials">Resources &amp; tutorials</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-command dropdown-item-icon"></i>
                    <span class="text-truncate" title="Keyboard shortcuts">Keyboard shortcuts</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-alt dropdown-item-icon"></i>
                    <span class="text-truncate" title="Connect other apps">Connect other apps</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-gift dropdown-item-icon"></i>
                    <span class="text-truncate" title="What's new?">What's new?</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <span class="dropdown-header">Contacts</span>
                  <a class="dropdown-item" href="#">
                    <i class="bi-chat-left-dots dropdown-item-icon"></i>
                    <span class="text-truncate" title="Contact support">Contact support</span>
                  </a>
                </div>
              </div>
              <!-- End Other Links -->
            </li>

          </ul>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </aside>
