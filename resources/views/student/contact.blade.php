<!DOCTYPE html>
<html lang="en" dir="">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Contacts </title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{asset('backend/vendor/bootstrap-icons/font/bootstrap-icons.css')}}">
  <link rel="stylesheet" href="{{asset('backend/vendor/hs-mega-menu/dist/hs-mega-menu.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/vendor/leaflet/dist/leaflet.css')}}"/>

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{asset('backend/css/theme.min.css')}}">
</head>

<body>
  <!-- ========== HEADER ========== -->
  @include('student.layouts.header')

  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Contact Form -->
    <div class="container content-space-t-3 content-space-t-lg-5 content-space-b-2">
      <div class="row">
        <div class="col-lg-6 mb-9 mb-lg-0">
          <!-- Heading -->
          <div class="mb-5">
            <h1>Get in touch</h1>
            <p>We'd love to talk about how we can help you.</p>
          </div>
          <!-- End Heading -->

          <!-- Leaflet -->
          <div class="overflow-hidden">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d21837.180539078163!2d101.75335525434178!3d3.130004098239229!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37db7292071d%3A0x2ba814c48f5b1d53!2sCodespace%20Solutions%20-%20Software%2C%20Website%20Development%2C%20Mobile%20App%2C%20Digital%20Marketing%2C%20Artificial%20Intelligence%20(AI)%2C%20SaaS!5e0!3m2!1sen!2smy!4v1720061244343!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <!-- End Leaflet -->

          <div class="row">
            <div class="col-sm-6">
              <h5 class="mb-1">Call us:</h5>
              <p>+60 182786997</p>
            </div>
            <!-- End Col -->

            <div class="col-sm-6">
              <h5 class="mb-1">Email us:</h5>
              <p>codespacesolutions23@gmail.com</p>
            </div>
            <!-- End Col -->

            <div class="col-sm-6">
              <h5 class="mb-1">Address:</h5>
              <p>Pandan Indah, 55100 Kuala Lumpur, Federal Territory of Kuala Lumpur</p>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Col -->

        <div class="col-lg-6">
          <div class="ps-lg-5">
            <!-- Card -->
            <div class="card">
              <div class="card-header border-bottom text-center">
                <h3 class="card-header-title">General inquiries</h3>
              </div>

              <div class="card-body">
                <form action="{{ route('contact_inquiries.store') }}" method="POST">
                    @csrf
                  <div class="row gx-3">
                    <div class="col-sm-6">
                      <!-- Form -->
                      <div class="mb-3">
                        <label class="form-label" for="hireUsFormFirstName">First name</label>
                        <input type="text" class="form-control form-control-lg" name="first_name" id="hireUsFormFirstName" placeholder="First name" aria-label="First name">
                      </div>
                      <!-- End Form -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-6">
                      <!-- Form -->
                      <div class="mb-3">
                        <label class="form-label" for="hireUsFormLasttName">Last name</label>
                        <input type="text" class="form-control form-control-lg" name="last_name" id="hireUsFormLasttName" placeholder="Last name" aria-label="Last name">
                      </div>
                      <!-- End Form -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->

                  <div class="row gx-3">
                    <div class="col-sm-6">
                      <!-- Form -->
                      <div class="mb-3">
                        <label class="form-label" for="hireUsFormWorkEmail">Email address</label>
                        <input type="email" class="form-control form-control-lg" name="email" id="hireUsFormWorkEmail" placeholder="email@site.com" aria-label="email@site.com">
                      </div>
                      <!-- End Form -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-6">
                      <!-- Form -->
                      <div class="mb-3">
                        <label class="form-label" for="hireUsFormPhone">Phone <span class="form-label-secondary">(Optional)</span></label>
                        <input type="text" class="form-control form-control-lg" name="phone" id="hireUsFormPhone" placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx">
                      </div>
                      <!-- End Form -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->

                  <!-- Form -->
                  <div class="mb-3">
                    <label class="form-label" for="hireUsFormDetails">Details</label>
                    <textarea class="form-control form-control-lg" name="details" id="hireUsFormDetails" placeholder="Tell us about your ..." aria-label="Tell us about your ..." rows="4"></textarea>
                  </div>
                  <!-- End Form -->

                  <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">Send inquiry</button>
                  </div>

                  <div class="text-center">
                    <p class="form-text">We'll get back to you in 1-2 business days.</p>
                  </div>
                </form>
                <!-- End Form -->
              </div>
            </div>
            <!-- End Card -->
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Contact Form -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
@include('student.layouts.footer')

  <!-- ========== END FOOTER ========== -->



  <!-- JS Global Compulsory  -->
  <script src="{{asset('backend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{asset('backend/vendor/hs-header/dist/hs-header.min.js')}}"></script>
  <script src="{{asset('backend/vendor/hs-mega-menu/dist/hs-mega-menu.min.js')}}"></script>
  <script src="{{asset('backend/vendor/hs-show-animation/dist/hs-show-animation.min.js')}}"></script>
  <script src="{{asset('backend/vendor/hs-go-to/dist/hs-go-to.min.js')}}"></script>
  <script src="{{asset('backend/vendor/leaflet/dist/leaflet.js')}}"></script>

  <!-- JS Front -->
  <script src="{{asset('backend/js/theme.min.js')}}"></script>

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


      // INITIALIZATION OF LEAFLET
      // =======================================================
      const leaflet = HSCore.components.HSLeaflet.init(document.getElementById('map'))

      L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        id: 'mapbox/light-v9'
      }).addTo(leaflet)
    })()
  </script>
</body>
</html>
