<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Title -->
  <title>Edit Course</title>

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

  <link rel="stylesheet" href="{{asset('backend/vendor/quill/dist/quill.snow.css')}}">

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
                <!-- Step Form -->
        <form id="courseCreateForm" class="js-step-form"
        data-hs-step-form-options='{
        "progressSelector": "#basicVerStepFormProgress",
        "stepsSelector": "#basicVerStepFormContent",
        "endSelector": "#basicVerStepFinishBtn"
        }'>
        <div class="row">
        <div class="col-lg-3">
        <!-- Step -->
        <ul id="basicVerStepFormProgress" class="js-step-progress step step-icon-sm mb-7">
        <li class="step-item">
            <a class="step-content-wrapper" href="javascript:;"
            data-hs-step-form-next-options='{
                "targetSelector": "#basicVerStepIntendedLearners"
            }'>
            <span class="step-icon step-icon-soft-dark">1</span>
            <div class="step-content pb-5">
                <span class="step-title">Intended Learners</span>
            </div>
            </a>
        </li>

        <li class="step-item">
            <a class="step-content-wrapper" href="javascript:;"
            data-hs-step-form-next-options='{
                "targetSelector": "#basicVerStepCourseDesign"
            }'>
            <span class="step-icon step-icon-soft-dark">2</span>
            <div class="step-content pb-5">
                <span class="step-title">Course Design</span>
            </div>
            </a>
        </li>

        <li class="step-item">
            <a class="step-content-wrapper" href="javascript:;"
            data-hs-step-form-next-options='{
                "targetSelector": "#basicVerStepPricing"
            }'>
            <span class="step-icon step-icon-soft-dark">3</span>
            <div class="step-content pb-5">
                <span class="step-title">Pricing</span>
            </div>
            </a>
        </li>

        <li class="step-item">
          <a class="step-content-wrapper" href="javascript:;"
          data-hs-step-form-next-options='{
              "targetSelector": "#basicVerStepMessages"
          }'>
          <span class="step-icon step-icon-soft-dark">4</span>
          <div class="step-content pb-5">
              <span class="step-title">Messages</span>
          </div>
          </a>
      </li>



        </ul>
        <!-- End Step -->
        </div>

        <div class="col-lg-9">
        <!-- Content Step Form -->
        <div id="basicVerStepFormContent">
        <div id="basicVerStepIntendedLearners" class="card card-body active" style="min-height: 15rem;">
            <h4>Intended Learners</h4>
            <hr>

                <!-- Form -->
                <div class="js-add-field row mb-4"
                    data-hs-add-field-options='{
                    "template": "#addLearningObjectiveFieldTemplate",
                    "container": "#addLearningObjectiveFieldContainer",
                    "defaultCreated": 0
                    }'>
                    <label for="learningObjective" class="col-sm-3 col-form-label form-label">Learning Objectives</label>

                    <div class="col-sm-9">
                        @if (!empty($course->learning_objectives))
                            @foreach(json_decode($course->learning_objectives, true) as $learningObjective)
                                <div class="input-group-add-field">
                                    <!-- Use "[]" in the name attribute to make it an array -->
                                    <input type="text" class="form-control" name="learning_objectives[]" placeholder="Enter learning outcomes" value="{{ $learningObjective }}">
                                </div>
                            @endforeach
                        @endif


                    </div>
                    <!-- End Form -->

                    <!-- Add LO Input Field -->
                    <div id="addLearningObjectiveFieldTemplate" style="display: none;">
                        <div class="input-group-add-field">
                            <input type="text" class="js-input-mask form-control" data-name="learning_objectives[]" placeholder="Enter Learning Objective" aria-label="Enter email">
                        </div>

                        <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
                            <i class="bi-x-lg"></i>
                        </a>
                </div>
                <!-- End Add LO Input Field -->


                <!-- Form -->
                <div class="js-add-field row mb-4"
                    data-hs-add-field-options='{
                    "template": "#addPrerequisitesFieldTemplate",
                    "container": "#addPrerequisitesFieldContainer",
                    "defaultCreated": 0
                    }'>
                    <label for="prerequisites" class="col-sm-3 col-form-label form-label">Prerequisites</label>

                    <div class="col-sm-9">

                        @if (!empty($course->prerequisites))
                            @foreach(json_decode($course->prerequisites, true) as $prerequisites)
                                <div class="input-group-add-field">
                                    <!-- Use "[]" in the name attribute to make it an array -->
                                    <input type="text" class="form-control" name="prerequisites[]" id="prerequisites" placeholder="Enter learning outcomes" value="{{ $prerequisites }}">
                                </div>
                            @endforeach
                        @endif



                    </div>
                </div>
                <!-- End Form -->

                <!-- Add Phone  Field -->
                <div id="addPrerequisitesFieldTemplate" style="display: none;">
                    <div class="input-group-add-field">
                        <input type="text" class="js-input-mask form-control" data-name="prerequisites[]" placeholder="Enter Prerequisites" aria-label="Enter Prerequisites">
                    </div>

                    <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
                        <i class="bi-x-lg"></i>
                    </a>
                </div>
                <!-- End Add Phone Input Field -->

                <!-- Form -->
                <div class="js-add-field row mb-4"
                    data-hs-add-field-options='{
                    "template": "#addTargetAudienceFieldTemplate",
                    "container": "#addTargetAudienceFieldContainer",
                    "defaultCreated": 0
                    }'>
                    <label for="target_audiences" class="col-sm-3 col-form-label form-label">Target Audiences</label>

                    <div class="col-sm-9">
                        @if (!empty($course->target_audiences))
                            @foreach(json_decode($course->target_audiences, true) as $target_audience)
                                <div class="input-group-add-field">
                                    <!-- Use "[]" in the name attribute to make it an array -->
                                    <input type="text" class="form-control" name="target_audiences[]" id="targetAudienceLabel" placeholder="Enter learning outcomes" value="{{ $target_audience }}">
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!-- End Form -->

                <!-- Add Phone Input Field -->
                <div id="addTargetAudienceFieldTemplate" style="display: none;">
                <div class="input-group-add-field">
                <input type="text" class="js-input-mask form-control" data-name="target_audiences[]" placeholder="Enter Target Audience" aria-label="Enter Target Audience">
                </div>

                <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
                <i class="bi-x-lg"></i>
                </a>
                </div>
                <!-- End Add Phone Input Field -->


                <!-- Form -->
                <div class="row mb-4">
                    <label for="primaryLanguage" class="col-sm-3 col-form-label form-label">Primary Language</label>

                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="primary_language" value="{{$course->primary_language}}" id="primaryLanguage" placeholder="Language">
                    </div>
                </div>
                <!-- End Form -->



            <!-- Footer -->
            <div class="d-flex align-items-center mt-auto">
            <div class="ms-auto">
                <button type="button" class="btn btn-primary"
                        data-hs-step-form-next-options='{
                        "targetSelector": "#basicVerStepCourseDesign"
                        }'>
                Next <i class="bi-chevron-right small"></i>
                </button>
            </div>
            </div>
            <!-- End Footer -->
        </div>

        <div id="basicVerStepCourseDesign" class="card card-body" style="display: none; min-height: 15rem;">
            <h4>Course Design</h4>
            <hr>


                <!-- Form -->
                <div class="row mb-4">
                    <label for="title" class="col-sm-3 col-form-label form-label">Title</label>

                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title">
                    </div>
                </div>
                <!-- End Form -->


                <!-- Form -->
                <div class="row mb-4">
                    <label for="subtitle" class="col-sm-3 col-form-label form-label">Subtitle</label>

                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="subtitle" id="subtitle" placeholder="Enter Title">
                    </div>
                </div>
                <!-- End Form -->


                <!-- Form -->
                <div class="row mb-4">
                    <label for="subtitle" class="col-sm-3 col-form-label form-label">Description</label>

                    <div class="col-sm-9">
                        <!-- Quill -->
                        <div class="quill-custom">
                            <div class="js-quill" id="description" style="min-height: 15rem;"
                                data-hs-quill-options='{
                                "placeholder": "Type your message...",
                                "modules": {
                                    "toolbar": [
                                    ["bold", "italic", "underline", "strike", "link", "image", "blockquote", "code", {"list": "bullet"}]
                                    ]
                                }
                                }'>
                            </div>
                        </div>
                        <!-- End Quill -->
                    </div>
                </div>
                <!-- End Form -->



                <!-- Form -->
                <div class="row mb-4">
                    <label for="subtitle" class="col-sm-3 col-form-label form-label">Categories</label>

                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-6">
                                <!-- Select -->
                                <div class="tom-select-custom">
                                    <select class="js-select form-select" name="category_id" autocomplete="off"
                                            data-hs-tom-select-options='{
                                            "placeholder": "Select category..."
                                            }'>
                                        <option value="">Select a category...</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- End Select -->
                            </div>

                            <div class="col-6">
                                <!-- Select -->
                                <div class="tom-select-custom">
                                    <select class="js-select form-select" name="subcategory_id" autocomplete="off"
                                            data-hs-tom-select-options='{
                                            "placeholder": "Select subcategory..."
                                            }'>
                                        <option value="">Select a subcategory...</option>
                                        @foreach($subcategories as $subcategory)
                                            <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- End Select -->
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Form -->


                <!-- Form -->
                <div class="row mb-4">
                    <label for="subtitle" class="col-sm-3 col-form-label form-label">Cover Image</label>

                    <div class="col-sm-9">
                        <form>
                            <!-- Dropzone -->
                            <div id="coverPhoto" class="js-dropzone row dz-dropzone dz-dropzone-card">
                              <div class="dz-message">
                                <img class="avatar avatar-xl avatar-4x3 mb-3" src="{{asset('backend/svg/illustrations/oc-browse.svg')}}" alt="Image Description">

                                <h5>Drag and drop your file here</h5>

                                <p class="mb-2">or</p>

                                <span class="btn btn-white btn-sm">Browse files</span>
                              </div>
                            </div>
                            <!-- End Dropzone -->
                          </form>
                    </div>
                </div>
                <!-- End Form -->


                   <!-- Form -->
                   <div class="row mb-4">
                    <label for="subtitle" class="col-sm-3 col-form-label form-label">Promotional Video</label>

                    <div class="col-sm-9">
                        <form>
                            <!-- Dropzone -->
                            <div id="promotionalVideo" class="js-dropzone row dz-dropzone dz-dropzone-card">
                              <div class="dz-message">
                                <img class="avatar avatar-xl avatar-4x3 mb-3" src="{{asset('backend/svg/illustrations/oc-browse.svg')}}" alt="Image Description">

                                <h5>Drag and drop your file here</h5>

                                <p class="mb-2">or</p>

                                <span class="btn btn-white btn-sm">Browse files</span>
                              </div>
                            </div>
                            <!-- End Dropzone -->
                          </form>
                    </div>
                </div>
                <!-- End Form -->



            <!-- Footer -->
            <div class="d-flex align-items-center mt-auto">
            <button type="button" class="btn btn-ghost-secondary me-2"
                data-hs-step-form-prev-options='{
                "targetSelector": "#basicVerStepIntendedLearners"
                }'>
                <i class="bi-chevron-left small"></i> Previous step
            </button>

            <div class="ms-auto">
                <button type="button" class="btn btn-primary"
                        data-hs-step-form-next-options='{
                        "targetSelector": "#basicVerStepPricing"
                        }'>
                Next <i class="bi-chevron-right small"></i>
                </button>
            </div>
            </div>
            <!-- End Footer -->
        </div>

          <div id="basicVerStepPricing" class="card card-body" style="display: none; min-height: 15rem;">
              <h4>Pricing</h4>
              <hr>

              <!-- Form -->
              <div class="row mb-4">
                <label for="price" class="col-sm-3 col-form-label form-label">Price</label>

                <div class="col-sm-9">
                    <input type="text" class="form-control" name="price" id="price" placeholder="Enter Price">
                </div>
              </div>
              <!-- End Form -->


              <!-- Form -->
              <div class="row mb-4">
                <label for="is_free" class="col-sm-3 col-form-label form-label">Free Course</label>

                <div class="col-sm-9">
                  <input type="checkbox" class="form-check-input" id="is_free" name="is_free" value="1"> Free Course
                </div>
              </div>
              <!-- End Form -->


              <!-- Footer -->
              <div class="d-flex align-items-center mt-auto">
                <button type="button" class="btn btn-ghost-secondary me-2"
                    data-hs-step-form-prev-options='{
                    "targetSelector": "#basicVerStepCourseDesign"
                    }'>
                    <i class="bi-chevron-left small"></i> Previous step
                </button>

                <div class="ms-auto">
                    <button type="button" class="btn btn-primary"
                            data-hs-step-form-next-options='{
                            "targetSelector": "#basicVerStepMessages"
                            }'>
                    Next <i class="bi-chevron-right small"></i>
                    </button>
                </div>
                </div>
              <!-- End Footer -->
          </div>


          <div id="basicVerStepMessages" class="card card-body" style="display: none; min-height: 15rem;">
            <h4>Messages</h4>
            <hr>

                <!-- Form -->
                <div class="row mb-4">
                  <label for="subtitle" class="col-sm-3 col-form-label form-label">Welcome Message </label>

                  <div class="col-sm-9">
                      <!-- Quill -->
                      <div class="quill-custom">
                          <div class="js-quill" id="welcomeMessage" style="min-height: 15rem;"
                              data-hs-quill-options='{
                              "placeholder": "Type your message...",
                              "modules": {
                                  "toolbar": [
                                  ["bold", "italic", "underline", "strike", "link", "image", "blockquote", "code", {"list": "bullet"}]
                                  ]
                              }
                              }'>
                          </div>
                      </div>
                      <!-- End Quill -->
                  </div>
              </div>
              <!-- End Form -->


              <!-- Form -->
              <div class="row mb-4">
                <label for="subtitle" class="col-sm-3 col-form-label form-label">Completion Message </label>

                <div class="col-sm-9">
                    <!-- Quill -->
                    <div class="quill-custom">
                        <div class="js-quill" id="completionMessage" style="min-height: 15rem;"
                            data-hs-quill-options='{
                            "placeholder": "Type your message...",
                            "modules": {
                                "toolbar": [
                                ["bold", "italic", "underline", "strike", "link", "image", "blockquote", "code", {"list": "bullet"}]
                                ]
                            }
                            }'>
                        </div>
                    </div>
                    <!-- End Quill -->
                </div>
            </div>
            <!-- End Form -->


            <!-- Footer -->
            <div class="d-sm-flex align-items-center mt-auto">
              <button type="button" class="btn btn-ghost-secondary mb-3 mb-sm-0 me-2"
                  data-hs-step-form-prev-options='{
                  "targetSelector": "#basicVerStepPricing"
                  }'>
                  <i class="bi-chevron-left small"></i> Previous step
              </button>

              <div class="d-flex justify-content-end ms-auto">
                  <button type="button" class="btn btn-white me-2" data-dismiss="modal" aria-label="Close">Cancel</button>
                  <button id="basicVerStepFinishBtn" type="submit" class="btn btn-primary">Create course</button>
              </div>
            </div>
            <!-- End Footer -->
        </div>



        </div>
        <!-- End Content Step Form -->
        </div>
        </div>
        <!-- End Row -->

        <!-- Message Body -->
        <div id="basicVerStepSuccessMessage" class="js-success-message" style="display:none;">
        <div class="text-center">
        <img class="img-fluid mb-3" src="../assets/svg/illustrations/oc-hi-five.svg" alt="Image Description" style="max-width: 15rem;">

        <div class="mb-4">
        <h2>Successful!</h2>
        <p>New project has been successfully created.</p>
        </div>

        <div class="d-flex justify-content-center">
        <a class="btn btn-white me-3" href="#">
            <i class="bi-chevron-left small ms-1"></i> Back to projects
        </a>
        <a class="btn btn-primary" href="#">
            <i class="tio-city me-1"></i> Add new project
        </a>
        </div>
        </div>
        </div>
        <!-- End Message Body -->
        </form>
        <!-- End Step Form -->
    </div>
    <!-- End Content -->

    <!-- Footer -->

    @include('tutor.layouts.footer')

    <!-- End Footer -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->


  <!-- End Welcome Message Modal -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory  -->
  <script src="{{asset('backend/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('backend/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('backend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{asset('backend/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js')}}"></script>
  <script src="{{asset('backend/vendor/hs-form-search/dist/hs-form-search.min.js')}}"></script>

  <script src="{{asset('backend/vendor/hs-file-attach/dist/hs-file-attach.min.js')}}"></script>
  <script src="{{asset('backend/vendor/hs-step-form/dist/hs-step-form.min.js')}}"></script>
  <script src="{{asset('backend/vendor/hs-add-field/dist/hs-add-field.min.js')}}"></script>
  <script src="{{asset('backend/vendor/imask/dist/imask.min.js')}}"></script>
  <script src="{{asset('backend/vendor/tom-select/dist/js/tom-select.complete.min.js')}}"></script>
  <script src="{{asset('backend/vendor/quill/dist/quill.min.js')}}"></script>
  <script src="{{asset('backend/vendor/dropzone/dist/min/dropzone.min.js')}}"></script>

  <!-- JS Front -->
  <script src="{{asset('backend/js/theme.min.js')}}"></script>
  <script src="{{asset('backend/js/hs.quill.js')}}"></script>
  <script src="{{asset('backend/js/hs.dropzone.js')}}"></script>



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


        // INITIALIZATION OF FILE ATTACH
        // =======================================================
        new HSFileAttach('.js-file-attach')


        // INITIALIZATION OF STEP FORM
        // =======================================================
        new HSStepForm('.js-step-form', {
          finish: () => {
            document.getElementById("addUserStepFormProgress").style.display = 'none'
            document.getElementById("addUserStepProfile").style.display = 'none'
            document.getElementById("addUserStepBillingAddress").style.display = 'none'
            document.getElementById("addUserStepConfirmation").style.display = 'none'
            document.getElementById("successMessageContent").style.display = 'block'
            scrollToTop('#header');
            const formContainer = document.getElementById('formContainer')
          },
          onNextStep: function () {
            scrollToTop()
          },
          onPrevStep: function () {
            scrollToTop()
          }
        })

        function scrollToTop(el = '.js-step-form') {
          el = document.querySelector(el)
          window.scrollTo({
            top: (el.getBoundingClientRect().top + window.scrollY) - 30,
            left: 0,
            behavior: 'smooth'
          })
        }


        // INITIALIZATION OF ADD FIELD
        // =======================================================
        new HSAddField('.js-add-field', {
          addedField: field => {
            HSCore.components.HSTomSelect.init(field.querySelector('.js-select-dynamic'))
            HSCore.components.HSMask.init(field.querySelector('.js-input-mask'))
          }
        })


        // INITIALIZATION OF QUILLJS EDITOR
        // =======================================================
        HSCore.components.HSQuill.init('.js-quill')

        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select', {
          render: {
            'option': function (data, escape) {
              return data.optionTemplate || `<div>${data.text}</div>>`
            },
            'item': function (data, escape) {
              return data.optionTemplate || `<div>${data.text}</div>>`
            }
          }
        })


        // INITIALIZATION OF DROPZONE
        // =======================================================
        HSCore.components.HSDropzone.init('.js-dropzone')


        // INITIALIZATION OF INPUT MASK
        // =======================================================
        HSCore.components.HSMask.init('.js-input-mask')
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

  <!-- Custom JS  -->
  <script>
    $(document).ready(function () {
     // Listen for the form submission
     $("#courseCreateForm").submit(function (event) {
         event.preventDefault(); // Prevent the default form submission

         // Create a new FormData object and append form data to it
         var formData = new FormData(this);
         var csrfToken = $('meta[name="csrf-token"]').attr('content');



         // Get the 'coverPhoto' Dropzone element
         var coverPhotoDropzoneElement = $('#coverPhoto')[0].dropzone;

         // Check if 'coverPhoto' Dropzone has files
         if (coverPhotoDropzoneElement) {
             var coverPhoto = coverPhotoDropzoneElement.files[0];
             if (coverPhoto) {
                 formData.append("cover_image", coverPhoto);
             }
         }



         // Get the 'PromotionalVideo' Dropzone element
         var promotionalVideoDropzoneElement = $('#promotionalVideo')[0].dropzone;

         // Check if 'PromotionalVideo' Dropzone has files
         if (promotionalVideoDropzoneElement) {
             var promotionalVideo = promotionalVideoDropzoneElement.files[0];
             if (promotionalVideo) {
                 formData.append("promotional_video", promotionalVideo);
             }
         }



         $getCompletionMessageFromQuill = Quill.find($('#completionMessage')[0]);
         $getWelcomeMessageFromQuill = Quill.find($('#welcomeMessage')[0]);
         $getCourseDescriptionFromQuill = Quill.find($('#description')[0]);

         $extractedCompletionMessageFromQuill = $getCompletionMessageFromQuill.root.innerHTML;
         $extractedWelcomeMessageFromQuill = $getWelcomeMessageFromQuill.root.innerHTML;
         $extractedCourseDescriptionFromQuill = $getCourseDescriptionFromQuill.root.innerHTML;

         // Append Quill content to formData
         formData.append("completion_message",  $extractedCompletionMessageFromQuill);
         formData.append("welcome_message", $extractedWelcomeMessageFromQuill);
         formData.append("description", $extractedCourseDescriptionFromQuill);


         console.log("FormData:", formData);

         // Make an AJAX request
         $.ajax({
           headers: {'X-CSRF-TOKEN': csrfToken},
             url: "{{route('courses.store')}}",
             type: "POST",
             data: formData,
             contentType: false,
             processData: false,
             success: function (response) {
                 // Handle success response
                 console.log("Success:", response);
             },
             error: function (xhr, status, error) {
                 // Handle error response
                 console.log("Error:", error);
             }
         });
     });
   });
 </script>

  <!-- End Custom JS  -->


</body>
</html>
