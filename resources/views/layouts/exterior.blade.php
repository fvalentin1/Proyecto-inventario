<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title>Inventario @yield('title')</title>

  <meta name="description"
    content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
  <meta name="author" content="pixelcave">
  <meta name="robots" content="noindex, nofollow">

  <!-- Open Graph Meta -->
  <meta property="og:title" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework">
  <meta property="og:site_name" content="Dashmix">
  <meta property="og:description"
    content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <!-- Icons -->
  <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
  <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
  <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
  <!-- END Icons -->

  <!-- Animate CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  <!-- Stylesheets -->
  <!-- Dashmix framework -->
  <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/dashmix.min.css') }}">

  <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
  <link rel="stylesheet" id="css-theme" href="{{ asset('assets/css/themes/xplay.min.css') }}">
  <!-- END Stylesheets -->
</head>

<body>
  <!-- Page Container -->
  <!--
      Available classes for #page-container:

      GENERIC

        'remember-theme'                            Remembers active color theme and dark mode between pages using localStorage when set through
                                                    - Theme helper buttons [data-toggle="theme"],
                                                    - Layout helper buttons [data-toggle="layout" data-action="dark_mode_[on/off/toggle]"]
                                                    - ..and/or Dashmix.layout('dark_mode_[on/off/toggle]')

      SIDEBAR & SIDE OVERLAY

        'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
        'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
        'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
        'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
        'sidebar-dark'                              Dark themed sidebar

        'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
        'side-overlay-o'                            Visible Side Overlay by default

        'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

        'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

      HEADER

        ''                                          Static Header if no class is added
        'page-header-fixed'                         Fixed Header


      FOOTER

        ''                                          Static Footer if no class is added
        'page-footer-fixed'                         Fixed Footer (please have in mind that the footer has a specific height when is fixed)

      HEADER STYLE

        ''                                          Classic Header style if no class is added
        'page-header-dark'                          Dark themed Header
        'page-header-glass'                         Light themed Header with transparency by default
                                                    (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
        'page-header-glass page-header-dark'         Dark themed Header with transparency by default
                                                    (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

      MAIN CONTENT LAYOUT

        ''                                          Full width Main Content if no class is added
        'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
        'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)

      DARK MODE

        'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
    -->
  <div id="page-container" class="page-header-dark main-content-boxed page-header-dark dark-mode">

    <!-- Header -->
    <header id="page-header">
      <!-- Header Content -->
      <div class="content-header">
        <!-- Left Section -->
        <div class="d-flex align-items-center">
          <!-- Logo -->
          <a class="fw-semibold text-dual tracking-wide" href="/">
            Dash<span class="opacity-75">mix</span>
            {{-- <span class="fw-normal">Boxed</span> --}}
          </a>
          <!-- END Logo -->
          @auth
            <a type=button class="btn btn-alt-secondary ms-2" href="/home">
                <i class="nav-main-link-icon fa fa-location-arrow"></i> Dashboard
            </a>
            @endauth
        </div>

        <!-- END Left Section -->

        <!-- Right Section -->
        <div>

            @guest
                <!-- Open Session Section -->
                <a type="button" class="btn btn-alt-secondary ms-2" href="{{ route('login') }}">
                    <i class="fa-solid fa-right-to-bracket"></i> Iniciar Sesión
                </a>
                <a type="button" class="btn btn-alt-secondary ms-2" href="{{ route('register') }}">
                    <i class="fa-solid fa-user-pen"></i> Registrarse
                </a>
                <!-- END Open Sessions Section -->
            @else
                <!-- User Dropdown -->
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                        @role('admin')
                            <i class="fa-solid fa-user-gear"></i> {{ Auth::user()->name }}
                        @else
                            <i class="fa-solid fa-user"></i> {{ Auth::user()->name }}
                        @endrole
                    <i class="fa fa-angle-down opacity-50 ms-1"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
                    <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
                        User Options
                    </div>
                    <div class="p-2">
                        <a class="dropdown-item" href="#">
                        <i class="far fa-fw fa-user me-1"></i> Perfil
                        </a>

                        <div role="separator" class="dropdown-divider"></div>

                        <a class="dropdown-item" href="#">
                        <i class="far fa-fw fa-building me-1"></i> Settings
                        </a>

                        <div role="separator" class="dropdown-divider"></div>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <i class="far fa-fw fa-arrow-alt-circle-left me-1"></i> {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </div>
                    </div>
                </div>
                <!-- END User Dropdown -->
            @endguest
        </div>
        <!-- END Right Section -->
      </div>
      <!-- END Header Content -->

      <!-- Header Search -->
      <div id="page-header-search" class="overlay-header bg-sidebar-dark">
        <div class="content-header">
          <form class="w-100" action="bd_search.html" method="POST">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search your projects.." id="page-header-search-input"
                name="page-header-search-input">
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <button type="button" class="btn btn-alt-danger" data-toggle="layout" data-action="header_search_off">
                <i class="fa fa-fw fa-times-circle"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
      <!-- END Header Search -->

      <!-- Header Loader -->
      <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
      <div id="page-header-loader" class="overlay-header bg-sidebar-dark">
        <div class="content-header">
          <div class="w-100 text-center">
            <i class="fa fa-fw fa-2x fa-spinner fa-spin text-primary"></i>
          </div>
        </div>
      </div>
      <!-- END Header Loader -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <!-- Dummy content -->
            @yield('content')
            <!-- END Dummy content -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="footer-static bg-body-extra-light">
      <div class="content py-4">

        <!-- Footer Copyright -->
        <div class="row fs-sm pt-4">
          <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-end">
            Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" target="_blank">pixelcave</a>
          </div>
          <div class="col-sm-6 order-sm-1 text-center text-sm-start">
            <a class="fw-semibold" target="_blank">Dashmix 5.5</a> &copy; <span data-toggle="year-copy"></span>
          </div>
        </div>
        <!-- END Footer Copyright -->
      </div>
    </footer>
    <!-- END Footer -->
  </div>
  <!-- END Page Container -->

  <!--
      Dashmix JS

      Core libraries and functionality
      webpack is putting everything together at assets/_js/main/app.js
    -->
  <script src="{{ asset('assets/js/dashmix.app.min.js') }}"></script>
</body>

</html>
