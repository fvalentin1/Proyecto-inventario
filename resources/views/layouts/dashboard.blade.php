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
  <link rel="shortcut icon" href="{{ asset('assets/media/favicons/favicon.png') }}">
  <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
  <!-- END Icons -->

  <!-- Stylesheets -->

  <!-- Datatables -->
  <link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css') }}">

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
  <div id="page-container"
    class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow page-header-dark dark-mode">

    <nav id="sidebar" aria-label="Main Navigation">
      <!-- Side Header -->
      <div class="bg-header-dark">
        <div class="content-header bg-white-5">
          <!-- Logo -->
          <a class="fw-semibold text-white tracking-wide" href="/">
            <span class="smini-visible">
              D<span class="opacity-75">x</span>
            </span>
            <span class="smini-hidden">
              Dash<span class="opacity-75">mix</span>
            </span>
          </a>
          <!-- END Logo -->

          <!-- Options -->
          <div>
            <!-- Toggle Sidebar Style -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
            {{-- <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle"
              data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on"
              onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');">
              <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
            </button> --}}
            <!-- END Toggle Sidebar Style -->

            <!-- Dark Mode -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            {{-- <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle"
              data-target="#dark-mode-toggler" data-class="far fa" onclick="Dashmix.layout('dark_mode_toggle');">
              <i class="far fa-moon" id="dark-mode-toggler"></i>
            </button> --}}
            <!-- END Dark Mode -->

            <!-- Close Sidebar, Visible only on mobile screens -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout"
              data-action="sidebar_close">
              <i class="fa fa-times-circle"></i>
            </button>
            <!-- END Close Sidebar -->
          </div>
          <!-- END Options -->
        </div>
      </div>
      <!-- END Side Header -->

      <!-- Sidebar Scrolling -->
      <div class="js-sidebar-scroll">
        <!-- Side Navigation -->
        <div class="content-side">
          <ul class="nav-main">
            <li class="nav-main-item">
              <a class="nav-main-link {{ Route::is('home') ? 'active' : '' }}" href="/home">
                <i class="nav-main-link-icon fa fa-location-arrow"></i>
                <span class="nav-main-link-name">Dashboard</span>
                {{-- <span class="nav-main-link-badge badge rounded-pill bg-primary">8</span> --}}
              </a>
            </li>

            <li class="nav-main-heading">Gestión Base</li>
            <li class="nav-main-item">
              <a class="nav-main-link {{ Route::is('rooms.*') ? 'active' : '' }} nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                aria-expanded="false" href="#">
                <i class="nav-main-link-icon fa fa-school"></i>
                <span class="nav-main-link-name">Salones</span>
              </a>
              <ul class="nav-main-submenu">
                <li class="nav-main-item">
                  <a class="nav-main-link" href="{{ url('/rooms') }}">
                    <span class="nav-main-link-name">Administrar</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link {{ Route::is('cars.*') ? 'active' : '' }} nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                aria-expanded="false" href="#">
                <i class="nav-main-link-icon fa fa-car"></i>
                <span class="nav-main-link-name">Autos</span>
              </a>
              <ul class="nav-main-submenu">
                <li class="nav-main-item">
                  <a class="nav-main-link" href="{{ url('/cars') }}">
                    <span class="nav-main-link-name">Administrar</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link {{ Route::is('news.*') ? 'active' : '' }} nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                aria-expanded="false" href="#">
                <i class="nav-main-link-icon fa fa-newspaper"></i>
                <span class="nav-main-link-name">Noticias</span>
              </a>
              <ul class="nav-main-submenu">
                <li class="nav-main-item">
                  <a class="nav-main-link" href="{{ url('/news') }}">
                    <span class="nav-main-link-name">Administrar</span>
                  </a>
                </li>
              </ul>
            </li>

            @auth
                @role('admin')
                <li class="nav-main-heading">Gestión de Usuarios</li>
                <li class="nav-main-item">
                  <a class="nav-main-link {{ Route::is('admin.users.*') ? 'active' : '' }} nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                    aria-expanded="false" href="#">
                    <i class="nav-main-link-icon fa fa-users-gear"></i>
                    <span class="nav-main-link-name">Usuarios</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="{{ route('admin.users.index') }}">
                        <span class="nav-main-link-name">Administrar Usuarios</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link {{ Route::is('admin.roles.*') ? 'active' : '' }} nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                    aria-expanded="false" href="#">
                    <i class="nav-main-link-icon fa fa-id-card"></i>
                    <span class="nav-main-link-name">Roles</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="{{ route('admin.roles.index') }}">
                        <span class="nav-main-link-name">Administrar Roles</span>
                      </a>
                    </li>

                  </ul>
                </li>
                @endrole
            @endauth


          </ul>
        </div>
        <!-- END Side Navigation -->
      </div>
      <!-- END Sidebar Scrolling -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
      <!-- Header Content -->
      <div class="content-header">
        <!-- Left Section -->
        <div class="space-x-1">
          <!-- Toggle Sidebar -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
          <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
            <i class="fa fa-fw fa-bars"></i>
          </button>
          <!-- END Toggle Sidebar -->

        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="space-x-1">
          <!-- User Dropdown -->

          <div class="dropdown d-inline-block">
            <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              @role('admin')
                <i class="fa fa-fw fa-user-gear d-sm-none"></i>
              @else
              <i class="fa fa-fw fa-user d-sm-none"></i>
              @endrole
              <span class="d-none d-sm-inline-block">
                @role('admin')
                    <i class="fa-solid fa-user-gear"></i> {{ Auth::user()->name }}
                @else
                    <i class="fa-solid fa-user"></i> {{ Auth::user()->name }}
                @endrole
              </span>
              <i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
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

        </div>
        <!-- END Right Section -->
      </div>
      <!-- END Header Content -->

      <!-- Header Search -->
      <div id="page-header-search" class="overlay-header bg-header-dark">
        <div class="bg-white-10">
          <div class="content-header">
            <form class="w-100" action="be_pages_generic_search.html" method="POST">
              <div class="input-group">
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-alt-primary" data-toggle="layout" data-action="header_search_off">
                  <i class="fa fa-fw fa-times-circle"></i>
                </button>
                <input type="text" class="form-control border-0" placeholder="Search or hit ESC.."
                  id="page-header-search-input" name="page-header-search-input">
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- END Header Search -->

      <!-- Header Loader -->
      <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
      <div id="page-header-loader" class="overlay-header bg-header-dark">
        <div class="bg-white-10">
          <div class="content-header">
            <div class="w-100 text-center">
              <i class="fa fa-fw fa-sun fa-spin text-white"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- END Header Loader -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">

      <!-- Page Content -->
      @yield('content')
      <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-body-light">
      <div class="content py-0">
        <div class="row fs-sm">
          <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-end">
            Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" target="_blank">pixelcave</a>
          </div>
          <div class="col-sm-6 order-sm-1 text-center text-sm-start">
            <a class="fw-semibold" target="_blank">Dashmix 5.5</a> &copy; <span data-toggle="year-copy"></span>
          </div>
        </div>
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

  <!-- jQuery (required for jQuery Sparkline plugin && required for DataTables plugin) -->
  <script src="{{ asset('assets/js/lib/jquery.min.js') }}"></script>

  <!-- Page JS Plugins -->
  <script src="{{ asset('assets/js/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/chart.js/chart.min.js') }}"></script>

  <!-- Page JS Code -->
  <script src="{{ asset('assets/js/pages/be_pages_dashboard_v1.min.js') }}"></script>

  <!-- Page JS Plugins -->
  <script src="{{ asset('assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/datatables-buttons-jszip/jszip.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>

  <!-- Page JS Code -->
  <script src="{{ asset('assets/js/pages/be_tables_datatables.min.js') }}"></script>

  <!-- Page JS Helpers (jQuery Sparkline plugin) -->
  <script>Dashmix.helpersOnLoad(['jq-sparkline']);</script>
</body>

</html>
