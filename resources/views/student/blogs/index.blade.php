<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
        <title>Blog</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('frontend/vendor/bootstrap-icons/font/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/hs-mega-menu/dist/hs-mega-menu.min.css')}}">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="{{ asset('frontend/css/theme.min.css')}}">
</head>

<body>
    <!-- ========== HEADER ========== -->
    @include('student.layouts.header')
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <!-- Hero -->
        <div class="container content-space-t-3 content-space-t-lg-5 content-space-b-1 content-space-b-md-2">
            <div class="w-md-75 w-lg-50 text-center mx-md-auto">
                <h1 class="display-4">Blogs</h1>
                <p class="lead">Explore the latest tech news with CodeSpace</p>
            </div>
        </div>
        <!-- End Hero -->

        <!-- Card Grid -->
        <div class="container content-space-b-2 content-space-b-lg-3">
            <div class="row justify-content-md-between align-items-md-center mb-7">
                <div class="col-md-5 mb-5 mb-md-0">
                    <!-- Tags -->
                    <div class="d-md-flex align-items-md-center text-center text-md-start">
                        <span class="d-block me-md-3 mb-2 mb-md-1">Tags:</span>
                        @foreach($tags as $tag)
                            <a class="btn btn-soft-secondary btn-xs rounded-pill m-1" href="{{ route('blogs.index', ['tag' => $tag]) }}">{{ $tag }}</a>
                        @endforeach
                    </div>
                    <!-- End Tags -->
                </div>
                <!-- End Col -->
                <!-- End Col -->

                <div class="col-md-5 col-lg-4">
                    <form method="GET" action="{{ route('blogs.index') }}">
                        <!-- Input Card -->
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Search articles" aria-label="Search articles" value="{{ request('search') }}">
                            <button type="submit" class="btn btn-primary"><i class="bi-search"></i></button>
                        </div>
                        <!-- End Input Card -->
                    </form>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->

            <!-- First Blog Card -->
            @if($blogs->count() > 0)
                @php
                    $firstBlog = $blogs->shift(); // Remove the first blog from the collection
                @endphp
                <div class="card card-stretched-vertical mb-10">
                    <div class="row gx-0">
                        <div class="col-lg-8">
                            <div class="shape-container overflow-hidden">
                                <img class="card-img" src="{{ asset('frontend/img/900x450/img2.jpg')}}" alt="Image Description">

                                <!-- Shape -->
                                <div class="shape shape-end d-none d-lg-block zi-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 100.1 1920" height="101%">
                                        <path fill="#fff" d="M0,1920c0,0,93.4-934.4,0-1920h100.1v1920H0z"/>
                                    </svg>
                                </div>
                                <!-- End Shape -->

                                <!-- Shape -->
                                <div class="shape shape-bottom d-lg-none zi-1" style="margin-bottom: -.25rem">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                                        <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
                                    </svg>
                                </div>
                                <!-- End Shape -->
                            </div>
                        </div>
                        <!-- End Col -->

                        <div class="col-lg-4">
                            <!-- Card Body -->
                            <div class="card-body">
                                <h3 class="card-title">
                                    <a class="text-dark" href="{{ route('blogs.show', $firstBlog->id) }}">{{ $firstBlog->title }}</a>
                                </h3>

                                <p class="card-text">{{ $firstBlog->subtitle }}</p>

                                <!-- Card Footer -->
                                <div class="card-footer">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-group avatar-group-xs">
                                            <a class="avatar avatar-xs avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="">
                                                <img class="avatar-img" src="{{ asset('frontend/img/160x160/img3.jpg')}}" alt="Image Description">
                                            </a>
                                        </div>

                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-end">
                                                <p class="card-text">{{ $firstBlog->created_at->format('M d, Y') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Card Footer -->
                            </div>
                            <!-- End Card Body -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End First Blog Card -->
            @endif

            <!-- Other Blog Cards -->
            <div class="row mb-7">
                @foreach($blogs as $blog)
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <!-- Card -->
                        <div class="card h-100">
                            <div class="shape-container">
                                <img class="card-img-top" src="{{ asset('frontend/img/500x280/img1.jpg')}}" alt="Image Description">

                                <!-- Shape -->
                                <div class="shape shape-bottom zi-1" style="margin-bottom: -.25rem">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                                        <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
                                    </svg>
                                </div>
                                <!-- End Shape -->
                            </div>

                            <!-- Card Body -->
                            <div class="card-body">
                                <h3 class="card-title">
                                    <a class="text-dark" href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a>
                                </h3>

                                <p class="card-text">{{ $blog->subtitle }}</p>
                            </div>
                            <!-- End Card Body -->

                            <!-- Card Footer -->
                            <div class="card-footer">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 avatar-group avatar-group-xs">
                                        <a class="avatar avatar-xs avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="">
                                            <img class="avatar-img" src="{{ asset('frontend/img/160x160/img9.jpg')}}" alt="Image Description">
                                        </a>
                                    </div>

                                    <div class="flex-grow-1">
                                        <div class="d-flex justify-content-end">
                                            <p class="card-text">{{ $blog->created_at->format('M d, Y') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Card Footer -->
                        </div>
                        <!-- End Card -->
                    </div>
                @endforeach
            </div>
            <!-- End Other Blog Cards -->

            <!-- Pagination -->
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-end">
                    {{-- {{ dd($blogs->links()) }} --}}
                </ul>
            </nav>
            <!-- End Pagination -->
        </div>
        <!-- End Card Grid -->
    </main>

    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== FOOTER ========== -->
    @include('student.layouts.footer')
    <!-- ========== END FOOTER ========== -->

    <!-- JS Global Compulsory -->
    <script src="{{ asset('frontend/vendor/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('frontend/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
    <script src="{{ asset('frontend/vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- JS Implementing Plugins -->
    <script src="{{ asset('frontend/vendor/hs-mega-menu/dist/hs-mega-menu.min.js')}}"></script>
    <script src="{{ asset('frontend/vendor/svg-injector/dist/svg-injector.min.js')}}"></script>
    <script src="{{ asset('frontend/vendor/hs-toggle/classList.min.js')}}"></script>
    <script src="{{ asset('frontend/vendor/hs-toggle/hs-toggle.min.js')}}"></script>

    <!-- JS Front -->
    <script src="{{ asset('frontend/js/hs.core.js')}}"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function () {
            // initialization of HSMegaMenu component
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                pageContainer: $('.container'),
                breakpoint: 991
            });
        });
    </script>
</body>
</html>
