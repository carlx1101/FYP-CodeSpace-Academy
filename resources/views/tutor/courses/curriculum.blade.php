<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Title -->
  <title>Manage Course</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{asset('backend/vendor/bootstrap-icons/font/bootstrap-icons.css')}}">

  <link rel="stylesheet" href="{{asset('backend/vendor/tom-select/dist/css/tom-select.bootstrap5.css')}}">

  <!-- CSS Front Template -->

  <link rel="preload" href="{{asset('backend/css/theme.min.css')}}" data-hs-appearance="default" as="style">
  <link rel="preload" href="{{asset('backend/css/theme-dark.min.css')}}" data-hs-appearance="dark" as="style">

    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    

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
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Home</a></li>
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Manage Courses</a></li>
                <li class="breadcrumb-item active" aria-current="page">Section & Lesson</li>
              </ol>
            </nav>

            <h1 class="page-header-title">Section & Lesson</h1>
          </div>
          <!-- End Col -->

          <div class="col-sm-auto">

              <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#createSectionModal">
                  New Section
              </button>

          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
      <!-- End Page Header -->


    @if (count($sections) === 0)
      <div class="text-center">
        <img class="mb-3" src="{{ asset('assets/svg/illustrations/oc-error.svg') }}" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="default">
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium tempore provident, laborum ratione expedita reprehenderit nostrum natus aperiam suscipit distinctio..</p>
      </div>
      @else
      @foreach ($sections as $section)
        <!-- Card -->
        <div class="card mb-3">
          <div class="card-header card-header-content-md-between">
            <h3 class="card-header-title p-1">Section - {{$section->title}}</h3>
            <small class="text-muted">

              <div class="btn-group">

                <button type="button" class="btn btn-outline-info editSection" data-bs-toggle="modal"
                data-bs-target="#editSectionModal" data-section="{{ json_encode($section) }}">
                    <i class="bi-pencil-fill me-1"></i> Edit Section
              </button>



                <!-- Delete Button -->
                <form action="{{ route('sections.destroy', ['courseId' => $course->id, 'sectionId' => $section->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger me-2">Delete</button>
                </form>

                <button type="button" class="btn btn-outline-primary open-lesson-modal" data-bs-toggle="modal" data-bs-target="#addLessonModal" data-section-id="{{ $section->id }}">
                    New Lesson
                </button>
            </div>



            </small>
          </div>
          <div class="card-body">

            @if ($section->lessons->isEmpty())
            <p>No lessons found for this section.</p>
            @else
                <ul>
                    @foreach ($section->lessons as $lesson)
                        <!-- Display other lesson information here -->
                        <!-- Card -->
                        <div class="card mb-2" style="text-align: left;">

                          <div class="card-body d-flex justify-content-between">
                            <div class="d-flex align-items-center"> <!-- Align content vertically -->
                                @if($lesson->lesson_type == "video")
                                    <i class="bi bi-play-circle-fill text-primary icon-lg" style="font-size: 38px"></i>
                                @elseif($lesson->lesson_type == "article")
                                    <i class="bi bi-file-richtext-fill text-primary icon-lg" style="font-size: 38px"></i>
                                @elseif($lesson->lesson_type == "assessment")
                                    <i class="bi bi-check-circle-fill text-primary icon-lg" style="font-size: 38px"></i>
                                @endif
                                <div class="mx-3 mt-2">
                                    <h5>{{ $lesson->title }}</h5>
                                    <p>{{ $lesson->description }}</p>
                                </div>
                            </div>


                            <div class="d-flex justify-content-between">
                              <div class="me-1">
                                <button type="button" class="btn btn-outline-primary" onclick="editLesson({{ json_encode($lesson) }})" data-bs-toggle="modal" data-bs-target="#editLessonModal">Edit</button>
                              </div>
                              <form action="{{ route('lessons.destroy', ['section' => $section, 'lesson' => $lesson]) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-outline-danger">Delete</button>
                              </form>

                            </div>
                          </div>

                        </div>

                        <!-- End Card -->
                    @endforeach
                </ul>
            @endif


          </div>
        </div>
      <!-- End Card -->
      @endforeach()
    @endif


    </div>
    <!-- End Content -->

    <!-- Footer -->

    @include('tutor.layouts.footer')

    <!-- End Footer -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->

 <!-- Edit Section Modal  -->

    <div class="modal fade" id="editSectionModal" tabindex="-1" aria-labelledby="editSectionModalLabel"
    aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editSectionModalLabel">Edit Section</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

            <!-- Body -->
            <div class="modal-body">

            <!-- Tab Content -->
            <div class="tab-content" id="editSectionModalTabContent">
                <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <form>
                        @csrf
                        <!-- Form -->
                        <div class="row mb-4">


                            <div class="mb-3">
                                <label class="form-label" for="title">Title</label>
                                <input type="text" id="title" class="form-control" name="title" placeholder="Title">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="description">Description</label>
                                <input type="text" id="description" name="description" class="form-control" placeholder="Describe what student will learn in this section">
                            </div>


                        </div>
                        <!-- End Form -->
                        <div class="d-flex justify-content-end">
                            <div class="d-flex gap-3">
                                <button type="button" class="btn btn-white" data-bs-dismiss="modal"
                                aria-label="Close">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <!-- End Tab Content -->
        </div>
        <!-- End Body -->
        </div>
    </div>
    </div>

  <!-- End Modal -->



  <!-- Create Section Modal -->
  <div id="createSectionModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Section</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <div class="modal-body">

                {{-- Create Section Modal Form --}}
                <form method="POST" action="{{ route('sections.store', $course->id)}}">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label" for="title">Title</label>
                        <input type="text" id="title" class="form-control" name="title" placeholder="Title">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="description">Description</label>
                        <input type="text" id="description" name="description" class="form-control" placeholder="Describe what student will learn in this section">
                    </div>

            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create Section</button>
                </div>

            </form>
      </div>
    </div>
  </div>
  <!-- End Modal -->






    <!-- Add Lesson Modal -->
    <div id="addLessonModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">New Lesson</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="lessonCreateForm">
                        <div class="row">
                            <div class="mb-3" style="text-align: left">
                                <label class="form-label" for="title">Title</label>
                                <input type="text" id="title" class="form-control" name="title" placeholder="Title">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3" style="text-align: left">
                                <label class="form-label" for="description">Description</label>
                                <input type="text" id="description" name="description" class="form-control" placeholder="Describe what student will learn in this lesson">
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="mb-2" style="text-align: left">
                                <input type="checkbox" name="is_preview" class="form-check-input" value="1">
                                <label class="form-check-label">Preview Course</label>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="mb-2" style="text-align: left">
                                <label class="form-label" for="description">Lesson Type</label>
                            </div>

                            <div class="col-sm mb-2 mb-sm-0">
                                <!-- Form Radio -->
                                <label class="form-control" for="addVideoFormRadio">
                                    <span class="form-check">
                                        <input type="radio" class="form-check-input" name="lesson_type" id="addVideoFormRadio" value="video" required>
                                        <span class="form-check-label">Video</span>
                                    </span>
                                </label>
                                <!-- End Form Radio -->
                            </div>

                            <div class="col-sm mb-2 mb-sm-0">
                                <!-- Form Radio -->
                                <label class="form-control" for="addArticleFormRadio">
                                    <span class="form-check">
                                        <input type="radio" class="form-check-input" name="lesson_type" id="addArticleFormRadio" value="article" required>
                                        <span class="form-check-label">Article</span>
                                    </span>
                                </label>
                                <!-- End Form Radio -->
                            </div>

                            <div class="col-sm mb-2 mb-sm-0">
                                <!-- Form Radio -->
                                <label class="form-control" for="addAssessmentFormRadio">
                                    <span class="form-check">
                                        <input type="radio" class="form-check-input" name="lesson_type" id="addAssessmentFormRadio" value="assessment" required>
                                        <span class="form-check-label">Assessment</span>
                                    </span>
                                </label>
                                <!-- End Form Radio -->
                            </div>

                            <br>
                            <div class="row mt-2">
                                <div class="mb-3" id="videoFields" style="display: none; text-align: left;">
                                <label class="form-label" for="title">Title</label>


                                    <!-- Nav -->
                                    <div>
                                        <ul class="nav nav-segment mb-7" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="nav-one-eg1-tab" href="#nav-one-eg1" data-bs-toggle="pill" data-bs-target="#nav-one-eg1" role="tab" aria-controls="nav-one-eg1" aria-selected="true">Video URL</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="nav-two-eg1-tab" href="#nav-two-eg1" data-bs-toggle="pill" data-bs-target="#nav-two-eg1" role="tab" aria-controls="nav-two-eg1" aria-selected="false">Upload Video</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Nav -->

                                    <!-- Tab Content -->
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="nav-one-eg1" role="tabpanel" aria-labelledby="nav-one-eg1-tab">
                                            <label class="form-label" for="video_url">Video URL</label>
                                            <input type="text" class="form-control" name="video_url" id="video_url">
                                        </div>

                                        <div class="tab-pane fade" id="nav-two-eg1" role="tabpanel" aria-labelledby="nav-two-eg1-tab">
                                            <label class="form-label" for="video_url">Upload Video</label>
                                            <!-- Dropzone -->
                                            <div id="lessonVideo" class="js-dropzone row dz-dropzone dz-dropzone-card">
                                                <div class="dz-message">
                                                    <img class="avatar avatar-xl avatar-4x3 mb-3" src="{{ asset('backend/svg/illustrations/oc-browse.svg') }}" alt="Image Description">
                                                    <h5>Drag and drop your video here</h5>
                                                    <p class="mb-2">or</p>
                                                    <span class="btn btn-white btn-sm">Browse video</span>
                                                </div>
                                            </div>
                                            <!-- End Dropzone -->
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="mb-3" id="articleFields" style="display: none; text-align: left;">
                                    <!-- Article-specific fields go here -->
                                    <label for="article_content">Article Content</label>
                                    <textarea name="article_content" id="article_content"></textarea>
                                    <script>
                                        CKEDITOR.replace('article_content');
                                    </script>
                                </div>
                            </div>

                            {{-- Assessment Tab Field --}}
                            <div class="form-group" id="assessmentFields" style="display: none;">
                                <!-- Assessment-specific fields go here -->

                                <div class="row">
                                    <div class="mb-3" style="text-align: left">
                                        <label class="form-label" for="title">Question</label>
                                        <input type="text" id="title" class="form-control" name="question" placeholder="Question">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3" style="text-align: left">
                                        <label class="form-label" for="option1">Option 1</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <input type="radio" name="correct_option" value="option1">
                                                </span>
                                            </div>
                                            <input type="text" id="option1" class="form-control" name="option1" placeholder="Option 1">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3" style="text-align: left">
                                        <label class="form-label" for="option2">Option 2</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <input type="radio" name="correct_option" value="option2">
                                                </span>
                                            </div>
                                            <input type="text" id="option2" class="form-control" name="option2" placeholder="Option 2">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3" style="text-align: left">
                                        <label class="form-label" for="option3">Option 3</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <input type="radio" name="correct_option" value="option3">
                                                </span>
                                            </div>
                                            <input type="text" id="option3" class="form-control" name="option3" placeholder="Option 3">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3" style="text-align: left">
                                        <label class="form-label" for="option4">Option 4</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <input type="radio" name="correct_option" value="option4">
                                                </span>
                                            </div>
                                            <input type="text" id="option4" class="form-control" name="option4" placeholder="Option 4">
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>


                        <div class="row mb-2">
                            <div class="mb-3" style="text-align: left">

                                <label class="form-label" for="title">Knowledge Training</label>

                                <div id="knowledgeDocument" class="js-dropzone row dz-dropzone dz-dropzone-card">
                                    <div class="dz-message">
                                        <img class="avatar avatar-xl avatar-4x3 mb-3" src="{{ asset('backend/svg/illustrations/oc-browse.svg') }}" alt="Image Description">
                                        <h5>Drag and drop your PDF here</h5>
                                        <p class="mb-2">or</p>
                                        <span class="btn btn-white btn-sm">Browse video</span>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->



  <!-- Modal -->
  <div class="modal fade" id="editLessonModal" tabindex="-1" aria-labelledby="editLessonLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="editLessonLabel">Edit Lesson</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="lessonEditForm" method="POST" onsubmit="return editLessonSubmit(event, this)">
            @method("PUT")
            @csrf
              <div class="row">
                  <div class="mb-3" style="text-align: left">
                      <label class="form-label" for="title">Title</label>
                      <input type="text" id="editTitle" class="form-control" name="title" placeholder="Title">
                  </div>
              </div>

              <div class="row">
                  <div class="mb-3" style="text-align: left">
                      <label class="form-label" for="description">Description</label>
                      <input type="text" id="editDescription" name="description" class="form-control" placeholder="Describe what student will learn in this lesson">
                  </div>
              </div>

              <div class="row mb-2">
                  <div class="mb-2" style="text-align: left">
                      <input type="checkbox" name="is_preview" class="form-check-input" value="1">
                      <label class="form-check-label">Preview Course</label>
                  </div>
              </div>

              <div class="row mb-2">
                  <div class="mb-2" style="text-align: left">
                      <label class="form-label" for="description">Lesson Type</label>
                  </div>

                  <div class="col-sm mb-2 mb-sm-0">
                      <!-- Form Radio -->
                      <label class="form-control" for="videoFormRadio">
                          <span class="form-check">
                              <input type="radio" class="form-check-input" name="lesson_type" id="videoFormRadio" value="video" required>
                              <span class="form-check-label">Video</span>
                          </span>
                      </label>
                      <!-- End Form Radio -->
                  </div>

                  <div class="col-sm mb-2 mb-sm-0">
                      <!-- Form Radio -->
                      <label class="form-control" for="articleFormRadio">
                          <span class="form-check">
                              <input type="radio" class="form-check-input" name="lesson_type" id="articleFormRadio" value="article" required>
                              <span class="form-check-label">Article</span>
                          </span>
                      </label>
                      <!-- End Form Radio -->
                  </div>

                  <div class="col-sm mb-2 mb-sm-0">
                      <!-- Form Radio -->
                      <label class="form-control" for="assessmentFormRadio">
                          <span class="form-check">
                              <input type="radio" class="form-check-input" name="lesson_type" id="assessmentFormRadio" value="assessment" required>
                              <span class="form-check-label">Assessment</span>
                          </span>
                      </label>
                      <!-- End Form Radio -->
                  </div>

                  <br>
                  <div class="row mt-2">
                      <div class="mb-3" id="editVideoFields" style="display: none; text-align: left;">
                      <label class="form-label" for="title">Title</label>


                          <!-- Nav -->
                          <div>
                              <ul class="nav nav-segment mb-7" role="tablist">
                                  <li class="nav-item">
                                      <a class="nav-link active" id="nav-vid1-tab" href="#nav-vid1" data-bs-toggle="pill" data-bs-target="#nav-vid1" role="tab" aria-controls="nav-vid1" aria-selected="true">Video URL</a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" id="nav-vid2-tab" href="#nav-vid2" data-bs-toggle="pill" data-bs-target="#nav-vid2" role="tab" aria-controls="nav-vid2" aria-selected="false">Upload Video</a>
                                  </li>
                              </ul>
                          </div>
                          <!-- End Nav -->

                          <!-- Tab Content -->
                          <div class="tab-content">
                              <div class="tab-pane fade show active" id="nav-vid1" role="tabpanel" aria-labelledby="nav-one-eg1-tab">
                                  <label class="form-label" for="video_url">Video URL</label>
                                  <input type="text" class="form-control" name="video_url" id="edit_video_url">
                              </div>

                              <div class="tab-pane fade" id="nav-vid2" role="tabpanel" aria-labelledby="nav-two-eg1-tab">
                                  <label class="form-label" for="video_url">Upload Video</label>
                                  <!-- Dropzone -->
                                  <div id="editLessonVideo" class="js-dropzone row dz-dropzone dz-dropzone-card">
                                      <div class="dz-message">
                                          <img class="avatar avatar-xl avatar-4x3 mb-3" src="{{ asset('backend/svg/illustrations/oc-browse.svg') }}" alt="Image Description">
                                          <h5>Drag and drop your video here</h5>
                                          <p class="mb-2">or</p>
                                          <span class="btn btn-white btn-sm">Browse video</span>
                                      </div>
                                  </div>
                                  <!-- End Dropzone -->
                              </div>
                          </div>
                          <!-- End Tab Content -->
                      </div>
                  </div>

                  <div class="row mt-2">
                      <div class="mb-3" id="editArticleFields" style="display: none; text-align: left;">
                          <!-- Article-specific fields go here -->
                          <label for="article_content">Article Content</label>
                          <textarea name="article_content" id="edit_article_content"></textarea>
                          <script>
                              CKEDITOR.replace('edit_article_content');
                          </script>
                      </div>
                  </div>

                  {{-- Assessment Tab Field --}}
                  <div class="form-group" id="editAssessmentFields" style="display: none;">
                      <!-- Assessment-specific fields go here -->

                      <div class="row">
                          <div class="mb-3" style="text-align: left">
                              <label class="form-label" for="title">Question</label>
                              <input type="text" id="editTitle" class="form-control" name="question" placeholder="Question">
                          </div>
                      </div>

                      <div class="row">
                          <div class="mb-3" style="text-align: left">
                              <label class="form-label" for="option1">Option 1</label>
                              <div class="input-group">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text">
                                          <input type="radio" name="correct_option" value="option1">
                                      </span>
                                  </div>
                                  <input type="text" id="editOption1" class="form-control" name="option1" placeholder="Option 1">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="mb-3" style="text-align: left">
                              <label class="form-label" for="option2">Option 2</label>
                              <div class="input-group">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text">
                                          <input type="radio" name="correct_option" value="option2">
                                      </span>
                                  </div>
                                  <input type="text" id="editOption2" class="form-control" name="option2" placeholder="Option 2">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="mb-3" style="text-align: left">
                              <label class="form-label" for="option3">Option 3</label>
                              <div class="input-group">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text">
                                          <input type="radio" name="correct_option" value="option3">
                                      </span>
                                  </div>
                                  <input type="text" id="editOption3" class="form-control" name="option3" placeholder="Option 3">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="mb-3" style="text-align: left">
                              <label class="form-label" for="option4">Option 4</label>
                              <div class="input-group">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text">
                                          <input type="radio" name="correct_option" value="option4">
                                      </span>
                                  </div>
                                  <input type="text" id="editOption4" class="form-control" name="option4" placeholder="Option 4">
                              </div>
                          </div>
                      </div>

                  </div>

              </div>


              <div class="row mb-2">
                  <div class="mb-3" style="text-align: left">

                      <label class="form-label" for="title">Knowledge Training</label>

                      <div id="editKnowledgeDocument" class="js-dropzone row dz-dropzone dz-dropzone-card">
                          <div class="dz-message">
                              <img class="avatar avatar-xl avatar-4x3 mb-3" src="{{ asset('backend/svg/illustrations/oc-browse.svg') }}" alt="Image Description">
                              <h5>Drag and drop your PDF here</h5>
                              <p class="mb-2">or</p>
                              <span class="btn btn-white btn-sm">Browse video</span>
                          </div>
                      </div>
                  </div>


              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-white" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>





  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory  -->
  <script src="{{asset('backend/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('backend/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('backend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{asset('backend/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js')}}"></script>
  <script src="{{asset('backend/vendor/hs-form-search/dist/hs-form-search.min.js')}}"></script>

  <script src="{{asset('backend/vendor/hs-toggle-password/dist/js/hs-toggle-password.js')}}"></script>
  <script src="{{asset('backend/vendor/hs-file-attach/dist/hs-file-attach.min.js')}}"></script>
  <script src="{{asset('backend/vendor/hs-nav-scroller/dist/hs-nav-scroller.min.js')}}"></script>
  <script src="{{asset('backend/vendor/hs-step-form/dist/hs-step-form.min.js')}}"></script>
  <script src="{{asset('backend/vendor/hs-counter/dist/hs-counter.min.js')}}"></script>
  <script src="{{asset('backend/vendor/appear/dist/appear.min.js')}}"></script>
  <script src="{{asset('backend/vendor/imask/dist/imask.min.js')}}"></script>
  <script src="{{asset('backend/vendor/tom-select/dist/js/tom-select.complete.min.js')}}"></script>
  <script src="{{asset('backend/vendor/datatables/media/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('backend/vendor/datatables.net.extensions/select/select.min.js')}}"></script>
  <script src="{{asset('backend/vendor/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('backend/vendor/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
  <script src="{{asset('backend/vendor/jszip/dist/jszip.min.js')}}"></script>
  <script src="{{asset('backend/vendor/pdfmake/build/pdfmake.min.js')}}"></script>
  <script src="{{asset('backend/vendor/pdfmake/build/vfs_fonts.js')}}"></script>
  <script src="{{asset('backend/vendor/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{asset('backend/vendor/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{asset('backend/vendor/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
  <script src="{{asset('backend/vendor/dropzone/dist/min/dropzone.min.js')}}"></script>

  <!-- JS Front -->
  <script src="{{asset('backend/js/theme.min.js')}}"></script>
  <script src="{{asset('backend/js/hs.dropzone.js')}}"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // INITIALIZATION OF DATATABLES
      // =======================================================
      HSCore.components.HSDatatables.init($('#datatable'), {
        dom: 'Bfrtip',
        buttons: [
          {
            extend: 'copy',
            className: 'd-none'
          },
          {
            extend: 'excel',
            className: 'd-none'
          },
          {
            extend: 'csv',
            className: 'd-none'
          },
          {
            extend: 'pdf',
            className: 'd-none'
          },
          {
            extend: 'print',
            className: 'd-none'
          },
        ],
        select: {
          style: 'multi',
          selector: 'td:first-child input[type="checkbox"]',
          classMap: {
            checkAll: '#datatableCheckAll',
            counter: '#datatableCounter',
            counterInfo: '#datatableCounterInfo'
          }
        },
        language: {
          zeroRecords: `<div class="text-center p-4">
              <img class="mb-3" src="./assets/svg/illustrations/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="default">
              <img class="mb-3" src="./assets/svg/illustrations-light/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="dark">
            <p class="mb-0">No data to show</p>
            </div>`
        }
      })

      const datatable = HSCore.components.HSDatatables.getItem(0)

      $('#export-copy').click(function() {
        datatable.button('.buttons-copy').trigger()
      });

      $('#export-excel').click(function() {
        datatable.button('.buttons-excel').trigger()
      });

      $('#export-csv').click(function() {
        datatable.button('.buttons-csv').trigger()
      });

      $('#export-pdf').click(function() {
        datatable.button('.buttons-pdf').trigger()
      });

      $('#export-print').click(function() {
        datatable.button('.buttons-print').trigger()
      });

      $('.js-datatable-filter').on('change', function() {
        var $this = $(this),
          elVal = $this.val(),
          targetColumnIndex = $this.data('target-column-index');

        if (elVal === 'null') elVal = ''

        datatable.column(targetColumnIndex).search(elVal).draw();
      });
    });
  </script>

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


        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select')


        // INITIALIZATION OF INPUT MASK
        // =======================================================
        HSCore.components.HSMask.init('.js-input-mask')


        // INITIALIZATION OF NAV SCROLLER
        // =======================================================
        new HsNavScroller('.js-nav-scroller')


        // INITIALIZATION OF COUNTER
        // =======================================================
        new HSCounter('.js-counter')


        // INITIALIZATION OF TOGGLE PASSWORD
        // =======================================================
        new HSTogglePassword('.js-toggle-password')


        // INITIALIZATION OF FILE ATTACHMENT
        // =======================================================
        new HSFileAttach('.js-file-attach')

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

        <script>
        document.addEventListener('DOMContentLoaded', function () {
            const openLessonModalButtons = document.querySelectorAll('.open-lesson-modal');
            const modalForm = document.querySelector('#addLessonModal form');

            openLessonModalButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                const sectionId = this.getAttribute('data-section-id');
        modalForm.setAttribute('action', "{{ route('lessons.store', ['sectionId']) }}".replace('sectionId', sectionId));


            });
            });
        });
        </script>





    <script>
  $(document).ready(function() {
      // Listen for changes in the radio inputs
      $('#addLessonModal input[type=radio][name=lesson_type]').change(function() {
          var selectedType = $(this).val();

          // Hide all form fields
          $('#videoFields, #articleFields, #assessmentFields').hide();

          // Show the form fields for the selected type
          $('#' + selectedType + 'Fields').show();
      });
  });
  </script>

  <!-- End Style Switcher JS -->



    {{-- Edit Section JS --}}
    <script>
        $(document).on('click', '.editSection', function(){
        let section = $(this).data('section');

        let editSectionModalBody = $('#editSectionModal .modal-body');

        let template = `
        <!-- Tab Content -->
        <div class="tab-content" id="editSectionModalTabContent">
            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <form action="/tutor/courses/${section.course_id}/sections/${section.id}/edit" method="POST">
                @method('PUT')
                @csrf

                <!-- Form -->
                <div class="row mb-4">


                    <div class="col-sm-9">

                        @error('section.title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <!-- End Form -->

                <div class="mb-3">
                        <label class="form-label" for="title">Title</label>
                        <input type="text" id="title" class="form-control" name="title" placeholder="Title" value="${section.title ? section.title : ''}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="description">Description</label>
                        <input type="text" id="description" name="description" class="form-control" placeholder="Describe what student will learn in this section" value="${section.description ? section.description : ''}">
                    </div>



                <div class="d-flex justify-content-end">
                <div class="d-flex gap-3">
                    <button type="button" class="btn btn-white" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </form>
            </div>
        </div>
        <!-- End Tab Content -->
        `;

        const div = document.createElement('div');

        editSectionModalBody.empty(); // Clear existing modal
        div.innerHTML = template;

        editSectionModalBody.append(div);
        });
    </script>




    {{-- Lesson Form Submission AJAX --}}
    <script>
        $(document).ready(function() {
            // Global variable to store section ID
            var sectionId = null;

            // Listen for the "Add Lesson" button click
            $('.open-lesson-modal').on('click', function() {
                sectionId = $(this).data('section-id');
                console.log("Section ID:", sectionId);
                $('#lessonCreateForm #section_id').val(sectionId);
            });

            // Form submission for creating a lesson
            $("#lessonCreateForm").submit(function (event) {
                event.preventDefault(); // Prevent the default form submission

                // Create a new FormData object and append form data to it
                var formData = new FormData(this);
                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                // Get the 'lessonVideo' Dropzone element
                var lessonVideoDropzoneElement = $('#lessonVideo')[0].dropzone;

                // Check if 'lessonVideo' Dropzone has files
                if (lessonVideoDropzoneElement) {
                    var lessonVideo = lessonVideoDropzoneElement.files[0];
                    if (lessonVideo) {
                        formData.append("video_url", lessonVideo);
                    }
                }


        // Get the 'knowledgeDocument' Dropzone element
            var knowledgeDocumentDropzoneElement = $('#knowledgeDocument')[0].dropzone;

            // Check if 'knowledgeDocument' Dropzone has files
            if (knowledgeDocumentDropzoneElement) {
                var knowledgeDocument = knowledgeDocumentDropzoneElement.files[0];
                if (knowledgeDocument) {
                    formData.append("knowledge", knowledgeDocument);
                }
            }


                console.log("FormData:", formData);

                // Make an AJAX request
                $.ajax({
                    headers: {'X-CSRF-TOKEN': csrfToken},
                    url: "{{ route('lessons.store', 'sectionId') }}".replace('sectionId', sectionId),
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        // Handle success response
                        console.log("Success:", response);
                        location.reload(); // Optionally reload the page to see the new lesson
                    },
                    error: function (xhr, status, error) {
                        // Handle error response
                        console.log("Error:", error);
                    }
                });
            });
        });
    </script>

  <script>
    $(document).ready(function() {
        // Listen for changes in the radio inputs
        $('#editLessonModal input[type=radio][name=lesson_type]').change(function() {
            var selectedType = $(this).val();

            // Hide all form fields
            $('#editLessonModal #editVideoFields, #editLessonModal #editArticleFields, #editLessonModal #editAssessmentFields').hide();

            // Show the form fields for the selected type
            $('#editLessonModal #edit' + selectedType.charAt(0).toUpperCase() + selectedType.slice(1) + 'Fields').show();
        });
    });
  </script>

  <script>
    function editLesson(lesson) {
      emptyEditVideo();
      emptyKnowledge();
      emptyAssessment();
      $('#editLessonModal #editTitle[name="title"]').val(lesson.title);
      $('#editLessonModal #editDescription[name="description"]').val(lesson.description);
      $('#editLessonModal input[name="is_preview"]').prop("checked", lesson.is_preview);
      $('#editLessonModal input[name="lesson_type"][value="' + lesson.lesson_type + '"]').click();
      $('#lessonEditForm').attr('action', `{{ url("/tutor/sections") }}/${lesson.section_id}/lessons/${lesson.id}/`);
      switch(lesson.lesson_type) {
        case "video":
          emptyArticle();
          if (lesson.video.video_type === "link") {
            let uploadTab = $('a[data-bs-target="#nav-vid1"]');
            uploadTab.tab('show');
            $('#editLessonModal #edit_video_url').val(lesson.video.video_url);
          } else {
            let uploadTab = $('a[data-bs-target="#nav-vid2"]');
            uploadTab.tab('show');
            let lessonVideoDropzoneElement = $('#editLessonVideo')[0].dropzone;
            if (lessonVideoDropzoneElement) {
              let file = {
                name: "Lesson Video", accepted: true, status: 'success'
              };
              lessonVideoDropzoneElement.files.push(file);
              lessonVideoDropzoneElement.emit('addedfile', file);
              lessonVideoDropzoneElement.emit('thumbnail', file, "https://cdn-icons-png.flaticon.com/128/2377/2377793.png");
              lessonVideoDropzoneElement.emit("complete", file);
              $('#editLessonVideo .dz-progress')[0].remove();
              $('#editLessonVideo .dz-size')[0].remove();
              if ($('#editLessonVideo .dz-success-mark').length > 0) {
                $('#editLessonVideo .dz-success-mark').parent().remove();
              }
            }
          }
          break;
        case "article":
          CKEDITOR.instances['edit_article_content'].setData(lesson.article.content);
          break;
        case "assessment":
          emptyArticle();
          $('#editLessonModal #editTitle').val(lesson.assessment.question);
          $('#editLessonModal #editOption1').val(lesson.assessment.options[0].option_text);
          $('#editLessonModal #editOption2').val(lesson.assessment.options[1].option_text);
          $('#editLessonModal #editOption3').val(lesson.assessment.options[2].option_text);
          $('#editLessonModal #editOption4').val(lesson.assessment.options[3].option_text);
          let correctOption = lesson.assessment.options.find(option => option.is_correct);
          if (correctOption) {
            $('#editLessonModal input[name="correct_option"][value="option' + correctOption.option_text + '"]').prop("checked", true);
          }
          break;
        default:
          // code block
      }
      if (lesson.knowledge != null && lesson.knowledge != "") {
        let lessonVideoDropzoneElement = $('#editKnowledgeDocument')[0].dropzone;
        if (lessonVideoDropzoneElement) {
          let file = {
          name: "Knowledge", accepted: true, status: 'success'
          };
          lessonVideoDropzoneElement.files.push(file);
          lessonVideoDropzoneElement.emit('addedfile', file);
          lessonVideoDropzoneElement.emit('thumbnail', file, "https://cdn-icons-png.flaticon.com/512/337/337946.png");
          lessonVideoDropzoneElement.emit("complete", file);
          $('#editKnowledgeDocument .dz-progress')[0].remove();
          $('#editKnowledgeDocument .dz-size')[0].remove();
          if ($('#editKnowledgeDocument .dz-success-mark').length > 0) {
            $('#editKnowledgeDocument .dz-success-mark').parent().remove();
          }
        }
      }

      
    }

    function emptyEditVideo() {
      $('#editLessonModal #edit_video_url').val("");
      lessonVideoDropzoneElement = $('#editLessonVideo')[0].dropzone;
      lessonVideoDropzoneElement.destroy();
      HSCore.components.HSDropzone.init('#editLessonVideo');
    }

    function emptyKnowledge() {
      lessonVideoDropzoneElement = $('#editKnowledgeDocument')[0].dropzone;
      lessonVideoDropzoneElement.destroy();
      HSCore.components.HSDropzone.init('#editKnowledgeDocument');
    }

    function emptyArticle() {
      CKEDITOR.instances['edit_article_content'].setData("");
    }

    function emptyAssessment() {
      $('#editLessonModal #editTitle').val("");
      $('#editLessonModal #editOption1').val("");
      $('#editLessonModal #editOption2').val("");
      $('#editLessonModal #editOption3').val("");
      $('#editLessonModal #editOption4').val("");
    }
  </script>

  <script>
    function editLessonSubmit(event, elem) {
      // Create a new FormData object and append form data to it
      var formData = new FormData(elem);
      var csrfToken = $('meta[name="csrf-token"]').attr('content');
      // Get the 'lessonVideo' Dropzone element
      var lessonVideoDropzoneElement = $('#editLessonVideo')[0].dropzone;
      var knowledgeDocumentDropzoneElement = $('#editKnowledgeDocument')[0].dropzone;
      // Check if 'lessonVideo' Dropzone has files
      if (lessonVideoDropzoneElement) {
          var lessonVideo = lessonVideoDropzoneElement.files[0];
          if (lessonVideo) {
              formData.append("video_url", lessonVideo);
          }
      }
      if (knowledgeDocumentDropzoneElement) {
          var knowledgeDocument = knowledgeDocumentDropzoneElement.files[0];
          if (knowledgeDocument) {
              formData.append("knowledge", knowledgeDocument);
          }
      }
      // Make an AJAX request
      $.ajax({
        headers: {'X-CSRF-TOKEN': csrfToken},
        url: elem.getAttribute('action'),
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (response) {
            // Handle success response
            console.log("Success:", response);
            location.reload(); // Optionally reload the page to see the new lesson
        },
        error: function (xhr, status, error) {
            // Handle error response
            console.log("Error:", error);
        }
      });
      event.preventDefault();
      return false; // Prevent the default form submission
    }
  </script>

</body>
</html>
