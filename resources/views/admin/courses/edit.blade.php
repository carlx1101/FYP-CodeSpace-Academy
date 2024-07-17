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
        <form id="courseEditForm"  class="js-step-form"
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

            <div class="row mb-4">
                <div class="js-add-field row mb-4"
                    data-hs-add-field-options='{
                        "template": "#addLearningOutcomes",
                        "container": "#addLearningOutcomesFieldContainer",
                        "defaultCreated": 0
                    }'>
                    <label for="learningOutcomesLabel" class="col-sm-3 col-form-label form-label">Learning Outcomes</label>

                    <div class="col-sm-9">
                        @if (!empty($course->learning_objectives))
                            @foreach(json_decode($course->learning_objectives, true) as $learningObjective)
                                <div class="input-group-add-field">
                                    <!-- Use "[]" in the name attribute to make it an array -->
                                    <input type="text" class="form-control" name="learning_objectives[]" placeholder="Enter learning outcomes" value="{{ $learningObjective }}">
                                </div>
                            @endforeach
                        @endif

                        <!-- Container For Input Field -->
                        <div id="addLearningOutcomesFieldContainer"></div>

                        <a href="javascript:;" class="js-create-field form-link">
                            <i class="bi-plus-circle me-1"></i> Add field
                        </a>
                    </div>
                </div>
            </div>

            <!-- Add learning outcomes Input Field -->
            <div id="addLearningOutcomes" style="display: none;">
                <div class="input-group-add-field">
                    <!-- Use "[]" in the name attribute to make it an array -->
                    <input type="text" class="form-control" name="learning_objectives[]" placeholder="Enter learning outcomes">
                </div>

                <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
                    <i class="bi-x-lg"></i>
                </a>
            </div>
            <!-- End learning outcome Input Field -->


             {{-- Prerequisites  --}}
             <div class="row mb-4">
                <div class="js-add-field row mb-4"
                data-hs-add-field-options='{
                  "template": "#addPrerequisites",
                  "container": "#addPrerequisitesFieldContainer",
                  "defaultCreated": 0
                }'>
                <label for="prerequisitesLabel" class="col-sm-3 col-form-label form-label">Prerequisites</label>

                <div class="col-sm-9">

                  @if (!empty($course->prerequisites))
                      @foreach(json_decode($course->prerequisites, true) as $prerequisites)
                          <div class="input-group-add-field">
                              <!-- Use "[]" in the name attribute to make it an array -->
                              <input type="text" class="form-control" name="prerequisites[]" id="prerequisites" placeholder="Enter learning outcomes" value="{{ $prerequisites }}">
                          </div>
                      @endforeach
                  @endif



                <!-- Container For Input Field -->
                <div id="addPrerequisitesFieldContainer"></div>

                <a href="javascript:;" class="js-create-field form-link">
                <i class="bi-plus-circle me-1"></i> Add field
                </a>
                </div>
                </div>
                <!-- End Form -->

                <!-- Add prerequisites Input Field -->
                <div id="addPrerequisites" style="display: none;">
                <div class="input-group-add-field">
                <input type="text" class=" form-control"  name="prerequisites[]"  placeholder="Enter prerequisites" >
                </div>

                <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
                <i class="bi-x-lg"></i>
                </a>
                </div>
                <!-- End prerequisites Input Field -->
            </div>


            <div class="row mb-4">
                <div class="js-add-field row mb-4"
                data-hs-add-field-options='{
                  "template": "#addTargetAudience",
                  "container": "#addTargetAudienceFieldContainer",
                  "defaultCreated": 0
                }'>
                <label for="targetAudienceLabel" class="col-sm-3 col-form-label form-label">Target Audience</label>

                <div class="col-sm-9">
                {{-- <input type="text" class="form-control"  name="target_audiences[]" id="targetAudienceLabel" placeholder="Enter Target Audience" > --}}

                @if (!empty($course->target_audiences))
                @foreach(json_decode($course->target_audiences, true) as $target_audience)
                    <div class="input-group-add-field">
                        <!-- Use "[]" in the name attribute to make it an array -->
                        <input type="text" class="form-control" name="target_audiences[]" id="targetAudienceLabel" placeholder="Enter learning outcomes" value="{{ $target_audience }}">
                    </div>
                @endforeach
            @endif


                <!-- Container For Input Field -->
                <div id="addTargetAudienceFieldContainer"></div>

                <a href="javascript:;" class="js-create-field form-link">
                <i class="bi-plus-circle me-1"></i> Add field
                </a>
                </div>
                </div>
                <!-- End Form -->

                    <!-- Add prerequisites Input Field -->
                  <div id="addTargetAudience" style="display: none;">
                    <div class="input-group-add-field">
                    <input type="text" class=" form-control" name="target_audiences[]"  placeholder="Enter Target Audience" >
                    </div>

                    <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
                    <i class="bi-x-lg"></i>
                    </a>
                    </div>
                    <!-- End prerequisites Input Field -->
            </div>


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
                        <input type="text" class="form-control" name="title" value="{{$course->title}}" id="title" placeholder="Enter Title">
                    </div>
                </div>
                <!-- End Form -->


                <!-- Form -->
                <div class="row mb-4">
                    <label for="subtitle" class="col-sm-3 col-form-label form-label">Subtitle</label>

                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="subtitle" value="{{$course->subtitle}}" id="subtitle" placeholder="Enter Title">
                    </div>
                </div>
                <!-- End Form -->


                <div class="row mb-4">
                    <label for="subtitle" class="col-sm-3 col-form-label form-label">Description</label>
                    <div class="col-sm-9">
                        <!-- Quill -->
                        <div class="quill-custom">
                            <div class="js-quill" id="description-editor" style="min-height: 15rem;"></div>
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
                                            <option value="{{ $category->id }}" {{ $course->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
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
                                            <option value="{{ $subcategory->id }}" {{ $course->subcategory_id == $subcategory->id ? 'selected' : '' }}>{{ $subcategory->name }}</option>
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
                    </div>
                </div>
                <!-- End Form -->


                   <!-- Form -->
                   <div class="row mb-4">
                    <label for="subtitle" class="col-sm-3 col-form-label form-label">Promotional Video</label>

                    <div class="col-sm-9">
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
                    <input type="text" class="form-control" name="price" value="{{$course->price}}" id="price" placeholder="Enter Price">
                </div>
              </div>
              <!-- End Form -->


              <!-- Form -->
              <div class="row mb-4">
                <label for="is_free" class="col-sm-3 col-form-label form-label">Free Course</label>

                <div class="col-sm-9">
                    <input type="checkbox" class="form-check-input" id="is_free" name="is_free" value="1"
                    @if($course->is_free == 1) checked @endif> Free Course
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
                  <button type="submit" class="btn btn-primary">Save course</button>
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
        // HSCore.components.HSQuill.init('.js-quill')

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
        // HSCore.components.HSDropzone.init('.js-dropzone')
        // @if(isset($course->cover_image))
        // var coverPhotoDropzoneElement = $("#coverPhoto")[0].dropzone;

        // let picture = {name: "Cover Image", size: "{{Storage::size('public/' . $course->cover_image)}}" ,accepted: true, status: 'success'};
        // coverPhotoDropzoneElement.files.push(picture);
        // coverPhotoDropzoneElement.emit('addedfile', picture);
        // console.log("{{ asset(Storage::url($course->cover_image)) }}" );
        // coverPhotoDropzoneElement.emit('thumbnail', picture, "{{ asset(Storage::url($course->cover_image)) }}");
        // coverPhotoDropzoneElement.emit("complete", picture);
        // $('#coverPhoto .dz-progress')[0].remove();
        // if ($('#coverPhoto .dz-success-mark').length > 0) {
        //   $('#coverPhoto .dz-success-mark').parent().remove();
        // }

        // @endif

        // @if(isset($course->promotional_video))
        // var promotionalVideoDropzoneElement = $("#promotionalVideo")[0].dropzone;

        // let video = {name: "Promotional Video", size: "{{Storage::size('public/' . $course->promotional_video)}}" ,accepted: true, status: 'success'};
        // promotionalVideoDropzoneElement.files.push(video);
        // promotionalVideoDropzoneElement.emit('addedfile', video);
        // console.log("{{ asset(Storage::url($course->promotional_video)) }}" );
        // promotionalVideoDropzoneElement.emit('thumbnail', video, "https://cdn-icons-png.flaticon.com/128/2377/2377793.png");
        // promotionalVideoDropzoneElement.emit("complete", video);
        // $('#promotionalVideo .dz-progress')[0].remove();
        // if ($('#promotionalVideo .dz-success-mark').length > 0) {
        //   $('#promotionalVideo .dz-success-mark').parent().remove();
        // }

        // @endif




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


  {{-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        var quillDescription = new Quill('#description-editor', {
            placeholder: 'Type your message...',
            modules: {
                toolbar: [
                    ['bold', 'italic', 'underline', 'strike', 'link', 'image', 'blockquote', 'code', {'list': 'bullet'}]
                ]
            },
            theme: 'snow'
        });

        var quillWelcome = new Quill('#welcomeMessage', {
            placeholder: 'Type your message...',
            modules: {
                toolbar: [
                    ['bold', 'italic', 'underline', 'strike', 'link', 'image', 'blockquote', 'code', {'list': 'bullet'}]
                ]
            },
            theme: 'snow'
        });

        var quillCompletion = new Quill('#completionMessage', {
            placeholder: 'Type your message...',
            modules: {
                toolbar: [
                    ['bold', 'italic', 'underline', 'strike', 'link', 'image', 'blockquote', 'code', {'list': 'bullet'}]
                ]
            },
            theme: 'snow'
        });

        // Set the editor's content
        var description = {!! json_encode($course->description) !!};
        quillDescription.root.innerHTML = description;

        var welcomeMessage = {!! json_encode($course->welcome_message) !!};
        quillWelcome.root.innerHTML = welcomeMessage;

        var completionMessage = {!! json_encode($course->completion_message) !!};
        quillCompletion.root.innerHTML = completionMessage;
    });
</script> --}}





  <!-- Custom JS  -->
  <script>
document.addEventListener('DOMContentLoaded', function () {
    var quillDescription = new Quill('#description-editor', {
        placeholder: 'Type your message...',
        modules: {
            toolbar: [
                ['bold', 'italic', 'underline', 'strike', 'link', 'image', 'blockquote', 'code', {'list': 'bullet'}]
            ]
        },
        theme: 'snow'
    });

    var quillWelcome = new Quill('#welcomeMessage', {
        placeholder: 'Type your message...',
        modules: {
            toolbar: [
                ['bold', 'italic', 'underline', 'strike', 'link', 'image', 'blockquote', 'code', {'list': 'bullet'}]
            ]
        },
        theme: 'snow'
    });

    var quillCompletion = new Quill('#completionMessage', {
        placeholder: 'Type your message...',
        modules: {
            toolbar: [
                ['bold', 'italic', 'underline', 'strike', 'link', 'image', 'blockquote', 'code', {'list': 'bullet'}]
            ]
        },
        theme: 'snow'
    });

    // Set the editor's content
    quillDescription.root.innerHTML = {!! json_encode($course->description) !!};
    quillWelcome.root.innerHTML = {!! json_encode($course->welcome_message) !!};
    quillCompletion.root.innerHTML = {!! json_encode($course->completion_message) !!};
});

$(document).ready(function () {
    var courseId = "{{ $course->id }}";

    // Initialize Dropzones
    HSCore.components.HSDropzone.init('.js-dropzone');

    @if(isset($course->cover_image))
    var coverPhotoDropzoneElement = $("#coverPhoto")[0].dropzone;
    let picture = {name: "Cover Image", size: "{{Storage::size('public/' . $course->cover_image)}}" ,accepted: true, status: 'success'};
    coverPhotoDropzoneElement.files.push(picture);
    coverPhotoDropzoneElement.emit('addedfile', picture);
    coverPhotoDropzoneElement.emit('thumbnail', picture, "{{ asset(Storage::url($course->cover_image)) }}");
    coverPhotoDropzoneElement.emit("complete", picture);
    $('#coverPhoto .dz-progress')[0].remove();
    if ($('#coverPhoto .dz-success-mark').length > 0) {
      $('#coverPhoto .dz-success-mark').parent().remove();
    }
    @endif

    @if(isset($course->promotional_video))
    var promotionalVideoDropzoneElement = $("#promotionalVideo")[0].dropzone;
    let video = {name: "Promotional Video", size: "{{Storage::size('public/' . $course->promotional_video)}}" ,accepted: true, status: 'success'};
    promotionalVideoDropzoneElement.files.push(video);
    promotionalVideoDropzoneElement.emit('addedfile', video);
    promotionalVideoDropzoneElement.emit('thumbnail', video, "https://cdn-icons-png.flaticon.com/128/2377/2377793.png");
    promotionalVideoDropzoneElement.emit("complete", video);
    $('#promotionalVideo .dz-progress')[0].remove();
    if ($('#promotionalVideo .dz-success-mark').length > 0) {
      $('#promotionalVideo .dz-success-mark').parent().remove();
    }
    @endif

    // Listen for the form submission
    $("#courseEditForm").submit(function (event) {
        event.preventDefault(); // Prevent the default form submission

        // Create a new FormData object and append form data to it
        var formData = new FormData(this);
        var csrfToken = $('meta[name="csrf-token"]').attr('content');


              var coverPhotoDropzoneElement = $('#coverPhoto')[0].dropzone;
        if (coverPhotoDropzoneElement && coverPhotoDropzoneElement.files.length > 0) {
            var coverPhoto = coverPhotoDropzoneElement.files[0];
            console.log("Cover Photo:", coverPhoto); // Ensure this is a file object
            formData.append("cover_image", coverPhoto);
        }

        // Get the 'PromotionalVideo' Dropzone element and append file
        var promotionalVideoDropzoneElement = $('#promotionalVideo')[0].dropzone;
        if (promotionalVideoDropzoneElement && promotionalVideoDropzoneElement.files.length > 0) {
            var promotionalVideo = promotionalVideoDropzoneElement.files[0];
            console.log("Promotional Video:", promotionalVideo); // Ensure this is a file object
            formData.append("promotional_video", promotionalVideo);
        }


        // Extract content from Quill editors
        var quillDescription = Quill.find($('#description-editor')[0]);
        var quillWelcome = Quill.find($('#welcomeMessage')[0]);
        var quillCompletion = Quill.find($('#completionMessage')[0]);

        formData.append("completion_message", quillCompletion.root.innerHTML);
        formData.append("welcome_message", quillWelcome.root.innerHTML);
        formData.append("description", quillDescription.root.innerHTML);

        // Log all formData entries
        for (var pair of formData.entries()) {
            console.log(pair[0] + ': ' + pair[1]);
        }

        // Make an AJAX request
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': csrfToken,
            'X-HTTP-Method-Override': 'PUT'

            },
            url: "{{ route('courses.update', 'courseId') }}".replace('courseId', courseId),
            method: 'POST', // Use POST for Laravel PUT method
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
