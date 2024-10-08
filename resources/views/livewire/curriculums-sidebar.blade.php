<div>
    {{-- The Master doesn't talk, he acts. --}}
    <style>
        .nav-link-title {
          word-wrap: break-word;
          white-space: normal;
        }
    </style>

    <aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered bg-white  ">
        <div class="navbar-vertical-container">
          <div class="navbar-vertical-footer-offset">
            <!-- Logo -->

            <a class="navbar-brand" href="{{route('student.dashboard')}}" aria-label="Front">
              <img class="navbar-brand-logo" src="./assets/svg/logos/logo.svg" alt="Logo" data-hs-theme-appearance="default">
              <img class="navbar-brand-logo" src="./assets/svg/logos-light/logo.svg" alt="Logo" data-hs-theme-appearance="dark">
              <img class="navbar-brand-logo-mini" src="./assets/svg/logos/logo-short.svg" alt="Logo" data-hs-theme-appearance="default">
              <img class="navbar-brand-logo-mini" src="./assets/svg/logos-light/logo-short.svg" alt="Logo" data-hs-theme-appearance="dark">
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

                <span class="dropdown-header mt-4"> Annoucement </span>
                <small class="bi-three-dots nav-subtitle-replacer"></small>
                <div id="navbarVerticalMenuPagesMenu">
                    <a class="nav-link" href="javascript:;" data-bs-toggle="modal" data-bs-target="#welcomeMessageModal">
                    <i class="bi bi-journals nav-icon"></i>
                        <span class="nav-link-title"> Welcome Message </span>
                    </a>



                </div>


                @foreach($sections as $section)

                <span class="dropdown-header mt-4">{{ $section->title }} </span>
                <small class="bi-three-dots nav-subtitle-replacer"></small>


                <div id="navbarVerticalMenuPagesMenu">

                    <div>
                        @foreach($sections as $section)
                            @foreach($section->lessons as $lesson)
                                <div class="nav-item">
                                    <a class="nav-link" href="{{ route('student.learn', ['courseTitle' => $course->title, 'lessonId' => $lesson->id]) }}" data-placement="left">
                                        @if(Auth::user()->completedLessons->contains($lesson->id))
                                            <i class="bi bi-check-circle text-success nav-icon"></i>
                                        @else
                                            @if($lesson->lesson_type == 'video' )
                                                <i class="bi bi-play-circle nav-icon"></i>
                                            @elseif($lesson->lesson_type == 'article')
                                                <i class="bi bi-journals nav-icon"></i>
                                            @elseif($lesson->lesson_type == 'assessment')
                                                <i class="bi bi-journals nav-icon"></i>
                                            @endif
                                        @endif


                                        <span class="nav-link-title"> {{ $lesson->title }} </span>
                                    </a>
                                </div>
                            @endforeach
                        @endforeach
                    </div>



                </div>
                <!-- End Collapse -->

                @endforeach



                <span class="dropdown-header mt-4"> Congratulations </span>
                <small class="bi-three-dots nav-subtitle-replacer"></small>
                <div id="navbarVerticalMenuPagesMenu">
                    <a class="nav-link" href="javascript:;" data-bs-toggle="modal" data-bs-target="#completionMessageModal">
                        <i class="bi bi-chat-right-text nav-icon"></i>
                        <span class="nav-link-title"> Completion Message </span>
                    </a>

                </div>




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

                <li class="navbar-vertical-footer-list-item">
                  <!-- Language -->
                  <div class="dropdown dropup">
                    <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="selectLanguageDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                      <img class="avatar avatar-xss avatar-circle" src="./assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="United States Flag">
                    </button>

                    <div class="dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="selectLanguageDropdown">
                      <span class="dropdown-header">Select language</span>
                      <a class="dropdown-item" href="#">
                        <img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Flag">
                        <span class="text-truncate" title="English">English (US)</span>
                      </a>
                      <a class="dropdown-item" href="#">
                        <img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Flag">
                        <span class="text-truncate" title="English">English (UK)</span>
                      </a>
                      <a class="dropdown-item" href="#">
                        <img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Flag">
                        <span class="text-truncate" title="Deutsch">Deutsch</span>
                      </a>
                      <a class="dropdown-item" href="#">
                        <img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/dk.svg" alt="Flag">
                        <span class="text-truncate" title="Dansk">Dansk</span>
                      </a>
                      <a class="dropdown-item" href="#">
                        <img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/it.svg" alt="Flag">
                        <span class="text-truncate" title="Italiano">Italiano</span>
                      </a>
                      <a class="dropdown-item" href="#">
                        <img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="Flag">
                        <span class="text-truncate" title="中文 (繁體)">中文 (繁體)</span>
                      </a>
                    </div>
                  </div>

                  <!-- End Language -->
                </li>
              </ul>
            </div>
            <!-- End Footer -->
          </div>
        </div>
      </aside>


    {{-- Welcome Modal --}}
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
        <div class="modal-body p-sm-5 ">
            <div class="text-center">
            <div class="w-75 w-sm-50 mx-auto mb-4">
                <img class="img-fluid" src="{{asset('backend/svg/illustrations/oc-collaboration.svg')}}" alt="Image Description" data-hs-theme-appearance="default">
                <img class="img-fluid" src="{{asset('backend/svg/illustrations-light/oc-collaboration.svg')}}" alt="Image Description" data-hs-theme-appearance="dark">
            </div>

            <h4 class="h1">Welcome </h4>
            <h4 class="h4">{{$course->title}}</h4>

            <p>{!!$course->welcome_message!!}</p>
            </div>
        </div>
        <!-- End Body -->
        </div>
    </div>
    </div>

    {{-- End Welcome Modal --}}



    {{-- Completion Modal --}}
    <div class="modal fade" id="completionMessageModal" tabindex="-1" aria-hidden="true">
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
            <div class="modal-body p-sm-5 ">
                <div class="text-center">
                <div class="w-75 w-sm-50 mx-auto mb-4">
                    <img class="img-fluid" src="{{asset('backend/svg/illustrations/oc-collaboration.svg')}}" alt="Image Description" data-hs-theme-appearance="default">
                    <img class="img-fluid" src="{{asset('backend/svg/illustrations-light/oc-collaboration.svg')}}" alt="Image Description" data-hs-theme-appearance="dark">
                </div>

                <h4 class="h1">Congratulation!! </h4>
                <h4 class="h4">{{$course->title}}</h4>

                <p>{!!$course->completion_message!!}</p>
                </div>
            </div>
            <!-- End Body -->
            </div>
        </div>
    </div>

    {{-- End Completion Modal --}}

</div>
