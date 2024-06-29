<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">


  <!-- Title -->
  <title>Add Article</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{asset('backend/vendor/bootstrap-icons/font/bootstrap-icons.css')}}">

  <link rel="stylesheet" href="{{asset('backend/vendor/tom-select/dist/css/tom-select.bootstrap5.css')}}">
  <link rel="stylesheet" href="{{asset('backend/vendor/quill/dist/quill.snow.css')}}">

  <!-- CSS Front Template -->

  <link rel="preload" href="{{asset('backend/css/theme.min.css')}}" data-hs-appearance="default" as="style">
  <link rel="preload" href="{{asset('backend/css/theme-dark.min.css')}}" data-hs-appearance="dark" as="style">

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
        <div class="row align-items-center">
          <div class="col-sm mb-2 mb-sm-0">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-no-gutter">
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="./ecommerce-products.html">Articles</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Article</li>
              </ol>
            </nav>

            <h1 class="page-header-title">Add Article</h1>


          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
      <!-- End Page Header -->

      <div class="row">
        <div class="col-lg-8 mb-3 mb-lg-0">
            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
                <!-- Header -->
                <div class="card-header">
                    <h4 class="card-header-title">Post Information</h4>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="card-body">
                    <!-- Form -->
                    <form id="postForm">
                        <div class="mb-4">
                            <label for="titleLabel" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="titleLabel" placeholder="How to Fix Error." value="{{ $post->title }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="subtitleLabel" class="form-label">Subtitle</label>
                            <input type="text" class="form-control" name="subtitle" id="subtitleLabel" placeholder="Subtitle" value="{{ $post->subtitle }}">
                        </div>

                        <div class="mb-4">
                            <label for="tagsLabel" class="form-label">Tags</label>
                            <input type="text" class="form-control" name="tags" id="tagsLabel" placeholder="Separate with commas" value="{{ $post->tags }}">
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Content</label>
                            <div class="quill-custom">
                                <div class="js-quill" id="contentEditor" style="height: 15rem;">{!! $post->content !!}</div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Cover</label>
                            <div id="coverDropzone" class="js-dropzone dz-dropzone dz-dropzone-card">
                                <div class="dz-message">
                                    <img class="avatar avatar-xl avatar-4x3 mb-3" src="{{ asset('storage/' . $post->cover_image) }}" alt="Cover Image">
                                    <h5>Drag and drop your file here</h5>
                                    <p class="mb-2">or</p>
                                    <span class="btn btn-white btn-sm">Browse files</span>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <!-- End Form -->
                </div>
                <!-- End Body -->
            </div>
            <!-- End Card -->
        </div>
    </div>


      <!-- End Row -->


    </div>
    <!-- End Content -->

    <!-- Footer -->

    @include('tutor.layouts.footer')


    <!-- End Footer -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->

  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory  -->
  <script src="{{asset('backend/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('backend/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('backend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{asset('backend/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js')}}"></script>
  <script src="{{asset('backend/vendor/hs-form-search/dist/hs-form-search.min.js')}}"></script>

  <script src="{{asset('backend/vendor/hs-quantity-counter/dist/hs-quantity-counter.min.js')}}"></script>
  <script src="{{asset('backend/vendor/hs-add-field/dist/hs-add-field.min.js')}}"></script>
  <script src="{{asset('backend/vendor/tom-select/dist/js/tom-select.complete.min.js')}}"></script>
  <script src="{{asset('backend/vendor/quill/dist/quill.min.js')}}"></script>
  <script src="{{asset('backend/vendor/dropzone/dist/min/dropzone.min.js')}}"></script>
  <script src="{{asset('backend/vendor/datatables/media/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('backend/vendor/datatables.net.extensions/select/select.min.js')}}"></script>

  <!-- JS Front -->
  <script src="{{asset('backend/js/theme.min.js')}}"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // INITIALIZATION OF DATATABLES
      // =======================================================
      HSCore.components.HSDatatables.init($('#datatable'), {
        select: {
          style: 'multi',
          selector: 'td:first-child input[type="checkbox"]',
          classMap: {
            checkAll: '#datatableCheckAll',
            counter: '#datatableCounter',
            counterInfo: '#datatableCounterInfo'
          }
        }
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


        // INITIALIZATION OF ADD FIELD
        // =======================================================
        new HSAddField('.js-add-field', {
          addedField: field => {
            HSCore.components.HSTomSelect.init(field.querySelector('.js-select-dynamic'))
          }
        })


        // INITIALIZATION OF  QUANTITY COUNTER
        // =======================================================
        new HSQuantityCounter('.js-quantity-counter')


        // INITIALIZATION OF DROPZONE
        // =======================================================
        HSCore.components.HSDropzone.init('.js-dropzone')

        @if(isset($post->post_cover))
        var coverDropzoneElement = $("#coverDropzone")[0].dropzone;
        let coverImage = {
            name: "Cover Image",
            size: "{{ Storage::size('public/' . $post->post_cover) }}",
            accepted: true,
            status: 'success'
        };
        coverDropzoneElement.files.push(coverImage);
        coverDropzoneElement.emit('addedfile', coverImage);
        coverDropzoneElement.emit('thumbnail', coverImage, "{{ asset(Storage::url($post->post_cover)) }}");
        coverDropzoneElement.emit("complete", coverImage);
        $('#coverDropzone .dz-progress').remove();
        if ($('#coverDropzone .dz-success-mark').length > 0) {
            $('#coverDropzone .dz-success-mark').parent().remove();
        }
        @endif

      }
    })()

    // Initialize Quill editor
    var quillEditor = new Quill('#contentEditor', {
        placeholder: 'Type your message...',
        modules: {
            toolbar: [
                ['bold', 'italic', 'underline', 'strike', 'link', 'image', 'blockquote', 'code', {'list': 'bullet'}]
            ]
        },
        theme: 'snow'
    });
    quillEditor.root.innerHTML = {!! json_encode($post->content) !!};

    document.getElementById('postForm').addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission

        let formData = new FormData(this);
        let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        let content = quillEditor.root.innerHTML;
        formData.append('content', content);



        var coverDropzoneElement = $('#coverDropzone')[0].dropzone;
        if (coverDropzoneElement && coverDropzoneElement.files.length > 0) {
            var post_cover = coverDropzoneElement.files[0];
            console.log("Cover Photo:", post_cover); // Ensure this is a file object
            formData.append("post_cover", post_cover);
        }

        let postId = "{{ $post->id }}"; // Ensure this variable contains the post ID

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': csrfToken,
                'X-HTTP-Method-Override': 'PUT'
            },
            url: "{{ route('posts.update', 'postId') }}".replace('postId', postId),
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response.success) {
                    window.location.href = "{{ route('posts.index') }}";
                } else {
                    alert('Error updating post');
                }
            },
            error: function(xhr, status, error) {
                console.log("Error:", error);
                alert('An error occurred');
            }
        });
    });


</script>


</body>
</html>
