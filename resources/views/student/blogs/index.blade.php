<!DOCTYPE html>
<html lang="en" dir="">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Blog: Newsroom | Front - Multipurpose Responsive Template</title>

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
  {{--@include('student.layouts.header')--}}
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero -->
    <div class="container content-space-t-3 content-space-t-lg-5 content-space-b-1 content-space-b-md-2">
      <div class="w-md-75 w-lg-50 text-center mx-md-auto">
        <h1 class="display-4">Title</h1>
        <p class="lead">Text</p>
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
            <a class="btn btn-soft-secondary btn-xs rounded-pill m-1" href="javascript:;">category</a>
            <a class="btn btn-soft-secondary btn-xs rounded-pill m-1" href="javascript:;">category</a>
            <a class="btn btn-soft-secondary btn-xs rounded-pill m-1" href="javascript:;">category</a>
            <a class="btn btn-soft-secondary btn-xs rounded-pill m-1" href="javascript:;">category</a>
          </div>
          <!-- End Tags -->
        </div>
        <!-- End Col -->

        <div class="col-md-5 col-lg-4">
          <form>
            <!-- Input Card -->
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search articles" aria-label="Search articles">
              <button type="button" class="btn btn-primary"><i class="bi-search"></i></button>
            </div>
            <!-- End Input Card -->
          </form>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->

      <!-- Card -->
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
                <a class="text-dark" href="student.blogs.show">Article title</a>
              </h3>

              <p class="card-text">text</p>

              <!-- Card Footer -->
              <div class="card-footer">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0 avatar-group avatar-group-xs">
                    <a class="avatar avatar-xs avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Aaron Larsson">
                      <img class="avatar-img" src="{{ asset('frontend/img/160x160/img3.jpg')}}" alt="Image Description">
                    </a>
                    <a class="avatar avatar-xs avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="John O'nolan">
                      <img class="avatar-img" src="{{ asset('frontend/img/160x160/img4.jpg')}}" alt="Image Description">
                    </a>
                  </div>

                  <div class="flex-grow-1">
                    <div class="d-flex justify-content-end">
                      <p class="card-text">Date</p>
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
      <!-- End Card -->

      <div class="row mb-7">
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
                <a class="text-dark" href="./blog-article.html">Text</a>
              </h3>

              <p class="card-text">Text</p>
            </div>
            <!-- End Card Body -->

            <!-- Card Footer -->
            <div class="card-footer">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0 avatar-group avatar-group-xs">
                  <a class="avatar avatar-xs avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Nataly Gaga">
                    <img class="avatar-img" src="{{ asset('frontend/img/160x160/img9.jpg')}}" alt="Image Description">
                  </a>
                  <a class="avatar avatar-xs avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Emily Milda">
                    <img class="avatar-img" src="{{ asset('frontend/img/160x160/img8.jpg')}}" alt="Image Description">
                  </a>
                </div>

                <div class="flex-grow-1">
                  <div class="d-flex justify-content-end">
                    <p class="card-text">July 15</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Card Footer -->
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->

      </div>
      <!-- End Row -->

      <!-- Pagination -->
      <nav aria-label="Page navigation">
        <ul class="pagination justify-content-end">
          <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">
                <i class="bi-chevron-double-left small"></i>
              </span>
            </a>
          </li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
          <li class="page-item"><a class="page-link" href="#">5</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">
                <i class="bi-chevron-double-right small"></i>
              </span>
            </a>
          </li>
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

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Sign Up -->
  <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-close">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body">
          <!-- Log in -->
          <div id="signupModalFormLogin" style="display: none; opacity: 0;">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h2>Log in</h2>
              <p>Don't have an account yet?
                <a class="js-animation-link link" href="javascript:;" role="button"
                   data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormSignup",
                         "groupName": "idForm"
                       }'>Sign up</a>
              </p>
            </div>
            <!-- End Heading -->

            <div class="d-grid gap-2">
              <a class="btn btn-white btn-lg" href="#">
                <span class="d-flex justify-content-center align-items-center">
                  <img class="avatar avatar-xss me-2" src="./assets/svg/brands/google-icon.svg" alt="Image Description">
                  Log in with Google
                </span>
              </a>

              <a class="js-animation-link btn btn-primary btn-lg" href="#"
                 data-hs-show-animation-options='{
                       "targetSelector": "#signupModalFormLoginWithEmail",
                       "groupName": "idForm"
                     }'>Log in with Email</a>
            </div>
          </div>
          <!-- End Log in -->

          <!-- Log in with Modal -->
          <div id="signupModalFormLoginWithEmail" style="display: none; opacity: 0;">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h2>Log in</h2>
              <p>Don't have an account yet?
                <a class="js-animation-link link" href="javascript:;" role="button"
                   data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormSignup",
                         "groupName": "idForm"
                       }'>Sign up</a>
              </p>
            </div>
            <!-- End Heading -->

            <form class="js-validate needs-validation" novalidate>
              <!-- Form -->
              <div class="mb-3">
                <label class="form-label" for="signupModalFormLoginEmail">Your email</label>
                <input type="email" class="form-control form-control-lg" name="email" id="signupModalFormLoginEmail" placeholder="email@site.com" aria-label="email@site.com" required>
                <span class="invalid-feedback">Please enter a valid email address.</span>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-3">
                <div class="d-flex justify-content-between align-items-center">
                  <label class="form-label" for="signupModalFormLoginPassword">Password</label>

                  <a class="js-animation-link form-label-link" href="javascript:;"
                     data-hs-show-animation-options='{
                       "targetSelector": "#signupModalFormResetPassword",
                       "groupName": "idForm"
                     }'>Forgot Password?</a>
                </div>

                <input type="password" class="form-control form-control-lg" name="password" id="signupModalFormLoginPassword" placeholder="8+ characters required" aria-label="8+ characters required" required minlength="8">
                <span class="invalid-feedback">Please enter a valid password.</span>
              </div>
              <!-- End Form -->

              <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary form-control-lg">Log in</button>
              </div>
            </form>
          </div>
          <!-- End Log in with Modal -->

          <!-- Sign up -->
          <div id="signupModalFormSignup">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h2>Sign up</h2>
              <p>Already have an account?
                <a class="js-animation-link link" href="javascript:;" role="button"
                   data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormLogin",
                         "groupName": "idForm"
                       }'>Log in</a>
              </p>
            </div>
            <!-- End Heading -->

            <div class="d-grid gap-3">
              <a class="btn btn-white btn-lg" href="#">
                <span class="d-flex justify-content-center align-items-center">
                  <img class="avatar avatar-xss me-2" src="./assets/svg/brands/google-icon.svg" alt="Image Description">
                  Sign up with Google
                </span>
              </a>

              <a class="js-animation-link btn btn-primary btn-lg" href="#"
                 data-hs-show-animation-options='{
                       "targetSelector": "#signupModalFormSignupWithEmail",
                       "groupName": "idForm"
                     }'>Sign up with Email</a>

              <div class="text-center">
                <p class="small mb-0">By continuing you agree to our <a href="#">Terms and Conditions</a></p>
              </div>
            </div>
          </div>
          <!-- End Sign up -->

          <!-- Sign up with Modal -->
          <div id="signupModalFormSignupWithEmail" style="display: none; opacity: 0;">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h2>Sign up</h2>
              <p>Already have an account?
                <a class="js-animation-link link" href="javascript:;" role="button"
                   data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormLogin",
                         "groupName": "idForm"
                       }'>Log in</a>
              </p>
            </div>
            <!-- End Heading -->

            <form class="js-validate need-validate" novalidate>
              <!-- Form -->
              <div class="mb-3">
                <label class="form-label" for="signupModalFormSignupEmail">Your email</label>
                <input type="email" class="form-control form-control-lg" name="email" id="signupModalFormSignupEmail" placeholder="email@site.com" aria-label="email@site.com" required>
                <span class="invalid-feedback">Please enter a valid email address.</span>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-3">
                <label class="form-label" for="signupModalFormSignupPassword">Password</label>
                <input type="password" class="form-control form-control-lg" name="password" id="signupModalFormSignupPassword" placeholder="8+ characters required" aria-label="8+ characters required" required>
                <span class="invalid-feedback">Your password is invalid. Please try again.</span>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-3" data-hs-validation-validate-class>
                <label class="form-label" for="signupModalFormSignupConfirmPassword">Confirm password</label>
                <input type="password" class="form-control form-control-lg" name="confirmPassword" id="signupModalFormSignupConfirmPassword" placeholder="8+ characters required" aria-label="8+ characters required" required
                       data-hs-validation-equal-field="#signupModalFormSignupPassword">
                <span class="invalid-feedback">Password does not match the confirm password.</span>
              </div>
              <!-- End Form -->

              <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary form-control-lg">Sign up</button>
              </div>

              <div class="text-center">
                <p class="small mb-0">By continuing you agree to our <a href="#">Terms and Conditions</a></p>
              </div>
            </form>
          </div>
          <!-- End Sign up with Modal -->

          <!-- Reset Password -->
          <div id="signupModalFormResetPassword" style="display: none; opacity: 0;">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h2>Forgot password?</h2>
              <p>Enter the email address you used when you joined and we'll send you instructions to reset your password.</p>
            </div>
            <!-- En dHeading -->

            <form class="js-validate need-validate" novalidate>
              <div class="mb-3">
                <!-- Form -->
                <div class="d-flex justify-content-between align-items-center">
                  <label class="form-label" for="signupModalFormResetPasswordEmail" tabindex="0">Your email</label>

                  <a class="js-animation-link form-label-link" href="javascript:;"
                     data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormLogin",
                         "groupName": "idForm"
                       }'>
                    <i class="bi-chevron-left small"></i> Back to Log in
                  </a>
                </div>

                <input type="email" class="form-control form-control-lg" name="email" id="signupModalFormResetPasswordEmail" tabindex="1" placeholder="Enter your email address" aria-label="Enter your email address" required>
                <span class="invalid-feedback">Please enter a valid email address.</span>
                <!-- End Form -->
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-primary form-control-lg">Submit</button>
              </div>
            </form>
          </div>
          <!-- End Reset Password -->
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer d-block text-center py-sm-5">
          <small class="text-cap mb-4">Trusted by the world's best teams</small>

          <div class="w-85 mx-auto">
            <div class="row justify-content-between">
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/gitlab-gray.svg" alt="Logo">
              </div>
              <!-- End Col -->

              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/fitbit-gray.svg" alt="Logo">
              </div>
              <!-- End Col -->

              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/flow-xo-gray.svg" alt="Logo">
              </div>
              <!-- End Col -->

              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/layar-gray.svg" alt="Logo">
              </div>
              <!-- End Col -->
            </div>
          </div>
          <!-- End Row -->
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>

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
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="./assets/vendor/hs-header/dist/hs-header.min.js"></script>
  <script src="./assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
  <script src="./assets/vendor/hs-show-animation/dist/hs-show-animation.min.js"></script>
  <script src="./assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>

  <!-- JS Front -->
  <script src="./assets/js/theme.min.js"></script>

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


      // INITIALIZATION OF SHOW ANIMATIONS
      // =======================================================
      new HSShowAnimation('.js-animation-link')


      // INITIALIZATION OF BOOTSTRAP VALIDATION
      // =======================================================
      HSBsValidation.init('.js-validate', {
        onSubmit: data => {
          data.event.preventDefault()
          alert('Submited')
        }
      })


      // INITIALIZATION OF BOOTSTRAP DROPDOWN
      // =======================================================
      HSBsDropdown.init()


      // INITIALIZATION OF GO TO
      // =======================================================
      new HSGoTo('.js-go-to')
    })()
  </script>
</body>
</html>
