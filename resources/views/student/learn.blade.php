<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Course</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="../favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{asset('backend/vendor/bootstrap-icons/font/bootstrap-icons.css')}}">

  <!-- CSS Front Template -->

  <link rel="preload" href="{{asset('backend/css/theme.min.css')}}" data-hs-appearance="default" as="style">
  <link rel="preload" href="{{asset('backend/css/theme-dark.min.css')}}" data-hs-appearance="dark" as="style">

  @livewireStyles

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

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl navbar-vertical-aside-closed-mode">

  <script src="{{asset('backend/js/hs.theme-appearance.js')}}"></script>

  <!-- ========== MAIN CONTENT ========== -->
  @include('student.layouts.dashboard-header')

  @include('student.components.curriculums-sidebar')

  <main id="content" role="main" class="main splitted-content-main">
    <div class="splitted-content-fluid content-space">
        <div class="mt-xl-2">
            <div class="card mb-3 mb-lg-5">
                <div class="card-body ">
                    <h1 class="card-title">{{ $currentLesson->title }}</h1>
                    <p class="card-text">{{ $currentLesson->description }}</p>
                    <hr>
                    @if ($currentLesson->lesson_type == 'video' && $currentLesson->video)
                        @php
                            $videoUrl = $currentLesson->video->video_url;
                            $isHttpUrl = Str::startsWith($videoUrl, ['http://', 'https://']);
                        @endphp
                        <iframe width="95%" height="600" src="{{ $isHttpUrl ? $videoUrl : asset('storage/' . $videoUrl) }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    @elseif ($currentLesson->lesson_type == 'article' && $currentLesson->article)
                        {!! $currentLesson->article->content !!}


                    @elseif ($currentLesson->lesson_type == 'assessment' )
                        @livewire('assessment-form', ['lesson' => $currentLesson])

                    @else
                        <p>No content available for this lesson.</p>
                    @endif
                    <hr>

                    <div class="d-flex align-items-center">
                        <button class="btn btn-outline-primary me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLessonNotes" aria-controls="offcanvasLessonNotes">
                            View Notes
                        </button>
                        <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                            Add Note
                        </button>

                        <livewire:complete-lesson :lesson="$currentLesson" />
                    </div>

                    <hr>
                </div>
            </div>
        </div>

        <div class="mt-xl-2">
            <div class="card mb-3 mb-lg-5">

                <div class="discussions-section mt-5">

                    <!-- Discussions List -->
                    <div class="container content-space-1 content-space-lg-3">
                        <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                            <h2 class="text-center">Discussion Forum</h2>

                            <h2>{{ $discussions->total() }} comments</h2>
                        </div>

                        <div class="row justify-content-lg-center">
                            <div class="col-lg-8">
                                <hr>
                                <ul class="list-comment">
                                    @foreach($discussions as $discussion)

                                        <li class="list-comment-item">
                                            <!-- Media -->
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="flex-shrink-0">

                                                    <img class="avatar avatar-circle" src="{{ Storage::url($discussion->user->profile_photo_path) }}" alt="Image Description">
                                                </div>

                                                <div class="flex-grow-1 ms-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6>{{ $discussion->user->name }}</h6>
                                                        <span class="d-block small text-muted">{{ $discussion->created_at->diffForHumans() }}</span>
                                                    </div>

                                                        <div class="">
                                                            <h5>{{ $discussion->title }}</h5>

                                                            <p>{{ $discussion->message }}</p>
                                                        </div>

                                                </div>

                                            </div>
                                            <!-- End Media -->

                                            <hr>

                                            <!-- Replies (if any) -->
                                            {{-- @if($discussion->replies->isNotEmpty())
                                                <ul class="list-comment">
                                                    @foreach($discussion->replies as $reply)
                                                        <li class="list-comment-item">
                                                            <!-- Media -->
                                                            <div class="d-flex align-items-center mb-3">
                                                                <div class="flex-shrink-0">
                                                                    <img class="avatar avatar-circle" src="{{ $reply->user->profile_photo_url }}" alt="Image Description">
                                                                </div>

                                                                <div class="flex-grow-1 ms-3">
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <h6>{{ $reply->user->name }}</h6>
                                                                        <span class="d-block small text-muted">{{ $reply->created_at->diffForHumans() }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Media -->

                                                            <p>{{ $reply->message }}</p>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif --}}

                                            {{-- <a class="link" href="#">Reply</a> --}}
                                        </li>
                                    @endforeach
                                </ul>

                                <!-- Pagination -->
                                <div class="d-flex justify-content-center">
                                    {{ $discussions->links() }}
                                </div>

                                @auth
                                <br><br>
                                    <h3>Add a Discussion</h3>
                                    <form action="{{ route('discussions.store', $currentLesson->id) }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text" class="form-control" id="title" name="title" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="message" class="form-label">Message</label>
                                            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Post Discussion</button>
                                    </form>
                                @endauth
                            </div>
                        </div>
                    </div>
                    <!-- End Discussions List -->
                </div>
            </div>

        </div>

    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasLessonNotes" aria-labelledby="offcanvasLessonNotesLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasLessonNotesLabel">Notes for this lesson</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            @if ($currentLesson->notes->isEmpty())
                <p>No notes found for this lesson.</p>
            @else
                <ul>
                    @foreach ($currentLesson->notes as $note)
                        <li>
                            {{ $note->content }}
                            <form action="{{ route('notes.destroy', $note->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>



    </main>


  <script>

    window.addEventListener('lessonIncomplete', event => {
        location.reload();
    });

    window.addEventListener('lessonCompleted', event => {
        location.reload();
    });
</script>




    @livewireScripts


    <div id="exampleModalCenter" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add Note</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('notes.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="lesson_id" value="{{ $currentLesson->id }}">
                        <div class="input-group">
                            <textarea class="form-control" name="content" aria-label="With textarea" required></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal -->



    <a href="{{ route('chatbot.assistant', ['lessonId' => $currentLesson->id]) }}" class="chat-button">
        <i class="bi-chat-dots-fill"></i>
    </a>

    <style>
        .chat-button {
            position: fixed;
            bottom: 30px;
            right: 20px;
            width: 60px;
            height: 60px;
            background-color: #02c0ff; /* Light blue background */
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-decoration: none;
            z-index: 1000; /* Ensure the button is above other elements */
        }



        .chat-button i {
            font-size: 24px;
        }

    </style>



  <!-- JS Global Compulsory  -->
  <script src="{{asset('backend/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('backend/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('backend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{asset('backend/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js')}}"></script>
  <script src="{{asset('backend/vendor/hs-form-search/dist/hs-form-search.min.js')}}"></script>

  <!-- JS Front -->
  <script src="{{asset('backend/js/theme.min.js')}}"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      // INITIALIZATION OF NAVBAR VERTICAL ASIDE
      // =======================================================
      new HSSideNav('.js-navbar-vertical-aside').init()


      // INITIALIZATION OF FORM SEARCH
      // =======================================================
      new HSFormSearch('.js-form-search')


      // INITIALIZATION OF BOOTSTRAP DROPDOWN
      // =======================================================
      HSBsDropdown.init()


      // INITIALIZATION OF SIDEBAR COMBINATIONS WITH OFFCANVAS
      // =======================================================
      const offcanvasInstance = new bootstrap.Offcanvas(document.querySelector('.offcanvas-start'))
      const defaultTransition = window.getComputedStyle(offcanvasInstance._element).getPropertyValue('transition')
      window.addEventListener('resize', function (e) {
        if (window.innerWidth > 1200) {
          if (offcanvasInstance._element.style.transition !== 'none 0s ease 0s' ) {
            offcanvasInstance._element.style.transition = 'none'
          }

          // Reset offcanvas states
          if (offcanvasInstance._isShown) {
            offcanvasInstance._element.classList.remove('show')
            offcanvasInstance._backdrop._element.remove()
            offcanvasInstance._isShown = false
            offcanvasInstance._backdrop._isAppended = false
          }

          // Show offcanvas if hidden on desktop
          if (offcanvasInstance._element.style.visibility === 'hidden') {
            offcanvasInstance._element.style.visibility = 'visible'
          }
        } else {
          if (offcanvasInstance._element.style.transition === 'none 0s ease 0s' ) {
            offcanvasInstance._element.style.removeProperty('transition')
          }
        }
      })
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
</body>
</html>
