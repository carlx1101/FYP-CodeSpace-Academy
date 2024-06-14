<!DOCTYPE html>
<html lang="en" dir="">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title></title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="../favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{asset('backend/vendor/bootstrap-icons/font/bootstrap-icons.css')}}">
  <link rel="stylesheet" href="{{asset('backend/vendor/hs-mega-menu/dist/hs-mega-menu.min.css')}}">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{asset('backend/css/theme.min.css')}}">
</head>

<body>
  <!-- ========== HEADER ========== -->
  @include('student.layouts.header')


  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Content -->
    <div class="container content-space-2 content-space-lg-3">
      <div class="w-md-75 w-lg-50 text-center mx-md-auto">
        <div class="mb-5">
          <img class="img-fluid" src="{{asset('backend/svg/illustrations/oc-hi-five.svg')}}" alt="Image Description" style="width: 15rem;">
        </div>

        <div class="mb-5">
          <h1 class="h2">Your order is completed!</h1>
          <p>Thank you for your order! You should see your purchased course is avaialble in student dashbhoard.</p>
        </div>

        <a class="btn btn-primary btn-transition rounded-pill px-6" href="{{route('courses')}}">Continue shopping</a>
        <a class="btn btn-primary btn-transition rounded-pill px-6" href="{{route('my.courses')}}">Learn Course</a>
      </div>
    </div>
    <!-- End Content -->


    <!-- Clients -->
    {{-- <div class="container content-space-2">
      <div class="row">
        <div class="col text-center py-3">
          <img class="avatar avatar-lg avatar-4x3" src="../assets/svg/brands/hollister-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->

        <div class="col text-center py-3">
          <img class="avatar avatar-lg avatar-4x3" src="../assets/svg/brands/levis-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->

        <div class="col text-center py-3">
          <img class="avatar avatar-lg avatar-4x3" src="../assets/svg/brands/new-balance-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->

        <div class="col text-center py-3">
          <img class="avatar avatar-lg avatar-4x3" src="../assets/svg/brands/puma-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->

        <div class="col text-center py-3">
          <img class="avatar avatar-lg avatar-4x3" src="../assets/svg/brands/nike-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->

        <div class="col text-center py-3">
          <img class="avatar avatar-lg avatar-4x3" src="../assets/svg/brands/tnf-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div> --}}
    <!-- End Clients -->
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
                  <img class="avatar avatar-xss me-2" src="../assets/svg/brands/google-icon.svg" alt="Image Description">
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
                  <img class="avatar avatar-xss me-2" src="../assets/svg/brands/google-icon.svg" alt="Image Description">
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
                <img class="img-fluid" src="../assets/svg/brands/gitlab-gray.svg" alt="Logo">
              </div>
              <!-- End Col -->

              <div class="col">
                <img class="img-fluid" src="../assets/svg/brands/fitbit-gray.svg" alt="Logo">
              </div>
              <!-- End Col -->

              <div class="col">
                <img class="img-fluid" src="../assets/svg/brands/flow-xo-gray.svg" alt="Logo">
              </div>
              <!-- End Col -->

              <div class="col">
                <img class="img-fluid" src="../assets/svg/brands/layar-gray.svg" alt="Logo">
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

  <!-- Offcanvas Search -->
  <div class="offcanvas offcanvas-top offcanvas-navbar-search bg-light" tabindex="-1" id="offcanvasNavbarSearch">
    <div class="offcanvas-body">
      <div class="container">
        <div class="w-lg-75 mx-lg-auto">
          <div class="d-flex justify-content-end mb-3">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>

          <div class="mb-7">
            <!-- Form -->
            <form>
              <!-- Input Card -->
              <div class="input-card">
                <div class="input-card-form">
                  <input type="text" class="form-control form-control-lg" placeholder="Search Front" aria-label="Search Front">
                </div>
                <button type="button" class="btn btn-primary btn-lg">Search</button>
              </div>
              <!-- End Input Card -->
            </form>
            <!-- End Form -->
          </div>

          <div class="d-none d-md-block">
            <div class="row">
              <div class="col-sm-6">
                <div class="mb-3">
                  <h5>Quick Links</h5>
                </div>

                <div class="row">
                  <div class="col-6">
                    <!-- List -->
                    <ul class="list-pointer list-pointer-primary mb-0">
                      <li class="list-pointer-item">
                        <a class="link-sm link-secondary" href="#">Search Results List</a>
                      </li>
                      <li class="list-pointer-item">
                        <a class="link-sm link-secondary" href="#">Search Results Grid</a>
                      </li>
                      <li class="list-pointer-item">
                        <a class="link-sm link-secondary" href="#">About</a>
                      </li>
                      <li class="list-pointer-item">
                        <a class="link-sm link-secondary" href="#">Services</a>
                      </li>
                      <li class="list-pointer-item">
                        <a class="link-sm link-secondary" href="#">Invoice</a>
                      </li>
                    </ul>
                    <!-- End List -->
                  </div>
                  <!-- End Col -->

                  <div class="col-6">
                    <!-- List -->
                    <ul class="list-pointer list-pointer-primary mb-0">
                      <li class="list-pointer-item">
                        <a class="link-sm link-secondary" href="#">Profile</a>
                      </li>
                      <li class="list-pointer-item">
                        <a class="link-sm link-secondary" href="#">User Contacts</a>
                      </li>
                      <li class="list-pointer-item">
                        <a class="link-sm link-secondary" href="#">Reviews</a>
                      </li>
                      <li class="list-pointer-item">
                        <a class="link-sm link-secondary" href="#">Settings</a>
                      </li>
                    </ul>
                    <!-- End List -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->
              </div>
              <!-- End Col -->

              <div class="col-sm-6">
                <!-- Card -->
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-6">
                        <img class="img-fluid" src="../assets/img/mockups/img1.png" alt="Image Description">
                      </div>
                      <!-- End Col -->

                      <div class="col-6">
                        <div class="mb-4">
                          <h5>Featured Item</h5>
                          <p>Create astonishing web sites and pages.</p>
                        </div>
                        <a class="btn btn-outline-primary btn-xs btn-transition" href="#">Apply now <i class="bi-chevron-right small ms-1"></i></a>
                      </div>
                      <!-- End Col -->
                    </div>
                    <!-- End Row -->
                  </div>
                </div>
                <!-- End Card -->
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Offcanvas Search -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbarEmptyShoppingCart">
    <div class="offcanvas-header justify-content-end border-0 pb-0">
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">
      <div class="text-center">
        <div class="mb-5">
          <img class="avatar avatar-xl avatar-4x3" src="../assets/svg/illustrations/oc-empty-cart.svg" alt="SVG">
        </div>

        <div class="mb-5">
          <h3>Your cart is currently empty</h3>
          <p>Before proceed to checkout you must add some products to your shopping cart. You will find a lot of interesting products on our "Shop" page.</p>
        </div>

        <a class="btn btn-primary btn-transition rounded-pill px-6" href="../demo-shop/index.html">Start shopping</a>
      </div>
    </div>
  </div>
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory  -->
  <script src="{{asset('backend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{asset('backend/vendor/hs-mega-menu/dist/hs-mega-menu.min.js')}}"></script>
  <script src="{{asset('backend/vendor/hs-show-animation/dist/hs-show-animation.min.js')}}"></script>
  <script src="{{asset('backend/vendor/hs-go-to/dist/hs-go-to.min.js')}}"></script>

  <!-- JS Front -->
  <script src="{{asset('backend/js/theme.min.js')}}"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
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
