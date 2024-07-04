<header id="header" class="navbar navbar-expand-lg navbar-end navbar-light">

    <div class="container">
      <nav class="js-mega-menu navbar-nav-wrap">
        <!-- Default Logo -->
        <a class="navbar-brand" href="{{route('home')}}" aria-label="Front">
          <img class="navbar-brand-logo" src="{{asset('frontend/images/logos/codespacesolutions.png')}}" alt="CodeSpace Solutions">
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

          @auth

          <!-- Account -->
          <div class="dropdown">
            <a href="#" id="navbarShoppingCartDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                <img class="avatar avatar-xs avatar-circle" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarShoppingCartDropdown" style="min-width: 16rem;">
              <a class="d-flex align-items-center p-2" href="#">
                <div class="flex-shrink-0">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <img class="avatar" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                    @endif
                </div>
                <div class="flex-grow-1 ms-3">
                    <span class="d-block fw-semibold">{{ Auth::user()->name }}<span class="badge bg-primary ms-1">Pro</span></span>
                    <span class="d-block text-muted small">{{ Auth::user()->email }}</span>
                </div>
              </a>

              <div class="dropdown-divider my-3"></div>

              <a class="dropdown-item" href="{{route('student.dashboard')}}">
                <span class="dropdown-item-icon">
                  <i class="bi-chat-left-dots"></i>
                </span> Dashboard
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

                <form method="POST" action="{{ route('logout') }}" >
                    @csrf

                    <button  type="submit" class="dropdown-item text-danger" href="{{ route('logout') }}">
                    <span class="dropdown-item-icon">
                        <i class="bi-box-arrow-right"></i>
                    </span> Log out
                    </button>

                </form>

            </div>
          </div>
          <!-- End Account -->
          @endauth

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
              <a class="nav-link " href="{{route('home')}}">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="{{route('blogs.index')}}">Blogs</a>
              </li>



            <!-- Courses -->

            <li class="hs-has-sub-menu nav-item">
                <a id="coursesMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi-journals me-2"></i> Courses
                </a>

                <!-- Mega Menu -->
                <div class="hs-sub-menu dropdown-menu" aria-labelledby="coursesMegaMenu" style="min-width: 17rem;">
                    @foreach($categories as $category)
                    <div class="hs-has-sub-menu nav-item">
                        <a id="categoryMenu{{ $category->id }}" class="hs-mega-menu-invoker dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-tag dropdown-item-icon"></i> {{ $category->name }}
                        </a>

                        <div class="hs-sub-menu dropdown-menu" aria-labelledby="categoryMenu{{ $category->id }}" style="min-width: 14rem;">
                            @foreach($category->subcategories as $subcategory)
                            <a class="dropdown-item" href="{{ route('courses', ['category' => $category->id, 'subcategory' => $subcategory->id]) }}">{{ $subcategory->name }}</a>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- End Mega Menu -->
            </li>
            <!-- End Courses -->

            <!-- Search Form -->
            <li class="nav-item flex-grow-1 d-none d-lg-inline-block">
                <form class="input-group input-group-merge" action="{{ route('courses') }}" method="GET">
                    <div class="input-group-prepend input-group-text">
                        <i class="bi-search"></i>
                    </div>
                    <input type="text" class="form-control" name="search" placeholder="What do you want to learn?" aria-label="What do you want to learn?">
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </li>

            <!-- End Search Form -->

            @if (Auth::user())
           <!-- My Courses -->
            <li class="hs-has-mega-menu nav-item"
                data-hs-mega-menu-item-options='{
                  "desktop": {
                    "maxWidth": "20rem"
                  }
                }'>
              <a id="myCoursesMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">My Courses</a>

              <!-- Mega Menu -->
              <div class="hs-mega-menu hs-position-right dropdown-menu" aria-labelledby="myCoursesMegaMenu" style="min-width: 22rem;">
                @if(Auth::check())
                    @foreach($studentProgress as $progress)
                        <a class="navbar-dropdown-menu-media-link" href="{{ route('student.learn', ['courseTitle' => $progress['course']->title]) }}">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <img class="avatar" src="{{ $progress['course']->cover_image ? asset('storage/' . $progress['course']->cover_image) : asset('default-cover.jpg') }}" alt="{{ $progress['course']->title }}">
                                </div>

                                <div class="flex-grow-1 ms-3">
                                    <div class="mb-3">
                                        <span class="navbar-dropdown-menu-media-title">{{ $progress['course']->title ?? 'No Title' }}</span>
                                        <p class="navbar-dropdown-menu-media-desc">By {{ $progress['course']->user->name ?? 'Unknown Tutor' }}

                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span class="card-subtitle text-body">{{ $progress['completed'] ? 'Completed' : 'In Progress' }}</span>
                                        <small class="text-dark fw-semibold">{{ round($progress['progress'], 2) }}%</small>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar {{ $progress['completed'] ? 'bg-success' : '' }}" role="progressbar" style="width: {{ $progress['progress'] }}%;" aria-valuenow="{{ $progress['progress'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @else
                    <p>Please log in to see your course progress.</p>
                @endif
            </div>
              <!-- End Mega Menu -->
            </li>
            <!-- End My Courses -->

            <li class="nav-item">
                <!-- Shopping Cart -->
                <button type="button" class="btn btn-ghost-secondary btn-sm btn-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarEmptyShoppingCart" aria-controls="offcanvasNavbarEmptyShoppingCart">
                    <i class="bi-basket"></i>
                </button>
                <!-- End Shopping Cart -->
            </li>
            @else

            <li class="nav-item">
                <button type="button" class="btn btn-primary" value="Open Window" onclick="window.open('/login','_self')">Learn Now !</button>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="{{route('contact')}}">Contact</a>
              </li>

            @endif



          </ul>
        </div>
        <!-- End Collapse -->
      </nav>
    </div>
  </header>
