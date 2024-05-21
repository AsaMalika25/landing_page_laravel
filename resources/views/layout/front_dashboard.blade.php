<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Latihan</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{asset('public/image/logo-lp-230531011351.jpg')}}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{asset('public/image/logo-lp-230531011351.jpg')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('public/image/logo-lp-230531011351.jpg')}}">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{asset('public/assets/js/plugins/datatables/dataTables.bootstrap4.css')}}">
        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" id="css-main" href="{{asset('public/assets/css/codebase.min.css')}}">
        <link rel="stylesheet" id="css-main" href="{{ asset('public/assets/css/codebase.css') }}">
        <link rel="stylesheet" href="{{ asset('public/dist/css/demo.css') }}">
        <link rel="stylesheet" href="{{ asset('public/dist/css/dropify.min.css') }}">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>

        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-inverse'                           Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-modern'                        Modern Header style
            'page-header-inverse'                       Dark themed Header (works only with classic Header style)
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-glass page-header-inverse main-content-boxed">
            <!-- Side Overlay-->
            <aside id="side-overlay">
                <!-- Side Header -->
                <div class="content-header content-header-fullrow">
                    <div class="content-header-section align-parent">
                        <!-- Close Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                            <i class="fa fa-times text-danger"></i>
                        </button>
                        <!-- END Close Side Overlay -->

                        <!-- User Info -->
                        <div class="content-header-item">
                            <a class="img-link mr-5" href="be_pages_generic_profile.html">
                                <img class="img-avatar img-avatar32" src="{{Auth::user()->gambar}}" alt="">
                            </a>
                            <a class="align-middle link-effect text-primary-dark font-w600" href="be_pages_generic_profile.html">John Smith</a>
                        </div>
                        <!-- END User Info -->
                    </div>
                </div>
                <!-- END Side Header -->

                <!-- Side Content -->
               
                <!-- END Side Content -->
            </aside>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <!--
                Helper classes

                Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes

                Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode
                Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode
                    - use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)
            -->
            <nav id="sidebar">
                <!-- Sidebar Content -->
                <div class="sidebar-content">
                    <!-- Side Header -->
                    <div class="content-header content-header-fullrow px-15">
                        <!-- Mini Mode -->
                        <div class="content-header-section sidebar-mini-visible-b">
                            <!-- Logo -->
                            <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                            </span>
                            <!-- END Logo -->
                        </div>
                        <!-- END Mini Mode -->

                        <!-- Normal Mode -->
                        <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                            <!-- Close Sidebar, Visible only on mobile screens -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times text-danger"></i>
                            </button>
                            <!-- END Close Sidebar -->

                            <!-- Logo -->
                            <div class="content-header-item" style="margin-top: -20px;">
                                <a class="link-effect font-w700" href="{{url('/')}}">
                                    <img src="{{asset('public/img/logo.png')}}" alt="" style="width: 70%;">
                                </a>
                            </div>
                            <!-- END Logo -->
                        </div>
                        <!-- END Normal Mode -->
                    </div>
                    <!-- END Side Header -->

                    <!-- Side User -->
                    <div class="content-side content-side-full content-side-user px-10 align-parent">
                        <!-- Visible only in mini mode -->
                       
                        <!-- END Visible only in mini mode -->

                        <!-- Visible only in normal mode -->
                        <div class="sidebar-mini-hidden-b text-center">
                            <a class="img-link" href="{{url('profile')}}">
                                <img class="img-avatar" src="{{asset('public/image/'. Auth::user()->gambar)}}" alt="">
                            </a>
                            <ul class="list-inline mt-10">
                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="{{url('profile')}}">{{Auth::User()->name}}</a>
                                </li>

                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark" href="{{url('logout')}}">
                                        <i class="si si-logout"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END Visible only in normal mode -->
                    </div>
                    <!-- END Side User -->

                    <!-- Side Navigation -->
                    <div class="content-side content-side-full">
                        <ul class="nav-main">
                            <li class="open">
                                <a class="nav-submenu" data-toggle="nav-submenu" href=""><i class="fa fa-home"></i><span class="sidebar-mini-hide">dashboard</span></a>
                                <ul>
                                    <li>
                                        <a class="" href="{{url('dashboard-cms')}}"><span class="sidebar-mini-hide">Profile</span></a> 
                                    </li>
                                    <li>
                                        <a class="" href="{{url('prestasi-dash')}}"><span class="sidebar-mini-hide">Prestasi</span></a> 
                                    </li>
                                    
                                </ul>
                            </li>
                            
                            
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa-solid fa-graduation-cap"></i><span class="sidebar-mini-hide">Kompetensi keahlian</span></a>
                                <ul>
                                    <li>
                                        <a href="{{url('mesin-dash')}}">Teknik permesinan</a>
                                    </li>
                                    <li>
                                        <a href="{{url('las-dash')}}">Teknik pengelasan</a>
                                    </li>
                                    <li>
                                        <a href="{{url('tkr-dash')}}">Teknik kendaraan Ringan otomotif</a>
                                    </li>
                                    <li>
                                        <a href="{{url('rpl-dash')}}">Rekayasa Perangkat Lunak</a>
                                    </li>
                                    <li>
                                        <a href="{{url('multi-dash')}}">Multimedia</a>
                                    </li>
                                    <li>
                                        <a href="{{url('tkj-dash')}}">Teknik komputer dan jaringan</a>
                                    </li>
                                    <li>
                                        <a href="{{url('akuntan-dash')}}">Akutansi</a>
                                    </li>
                                    <li>
                                        <a href="{{url('busana-dash')}}">Tata busana</a>
                                    </li>
                                    
                                   
                                </ul>
                            </li>
                          
                           
                          
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-school"></i><span class="sidebar-mini-hide">Program sekolah</span></a>
                                <ul>
                                    <li>
                                        <a href="{{url('ekstra-dash')}}">Ekstrakulikuler</a>
                                    </li>
                                   
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- END Side Navigation -->
                </div>
                <!-- Sidebar Content -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="content-header-section">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-circle" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon" style="color: #fff;"></i>
                        </button>
                        <!-- END Toggle Sidebar -->

                        <!-- Open Search Section -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        
                        <!-- END Open Search Section -->

                        <!-- Layout Options (used just for demonstration) -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        
                        <!-- END Layout Options -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="content-header-section">
                        <!-- User Dropdown -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user d-sm-none"></i>
                                <span class="d-none d-sm-inline-block">{{Auth::User()->name}}</span>
                                <i class="fa fa-angle-down ml-5"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">
                                <h5 class="h6 text-center py-10 mb-5 border-b text-uppercase">{{Auth::User()->role}}</h5>
                                <a class="dropdown-item" href="{{url('profile')}}">
                                    <i class="fa fa-gear mr-5"></i> Setting Profile
                                </a>
                                

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{url('logout')}}">
                                    <i class="si si-logout mr-5"></i> Sign Out
                                </a>
                            </div>
                        </div>
                        <!-- END User Dropdown -->

                        <!-- Notifications -->
                        
                        <!-- END Notifications -->

                        <!-- Toggle Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        
                        <!-- END Toggle Side Overlay -->
                    </div>
                    <!-- END Right Section -->
                </div>
              
            </header>
            <!-- END Header -->
            
                @yield('konten')
            
                <div id="spinner-container" class="d-none">
                    <div class="spinner-border text-primary" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
                <div id="message"></div>

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    
                    <div class="float-left">
                        <a class="font-w600" target="_blank">SMK Negeri 1 Kota Bekasi <p>Jl. Bintara VIII No 2 Kelurahan Bintara, Kecamatan Bekasi Barat 17134</p></a>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        
        <div id="message"></div>
        <!-- END Page Container -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        
       
        <script src="{{asset('public/assets/js/codebase.core.min.js')}}"></script>
        <script src="{{asset('public/assets/js/codebase.app.min.js')}}"></script>

        <script src="{{asset('public/assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('public/assets/js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>

        

        <script src="{{asset('public/assets/js/plugins/select2/js/select2.full.min.js')}}"></script>
        <script src="{{asset('public/assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
        <script src="{{asset('public/assets/js/plugins/jquery-validation/additional-methods.js')}}"></script>

        <!-- Page JS Helpers (Select2 plugin) -->
        <script>jQuery(function(){ Codebase.helpers('select2'); });</script>

        <!-- Page JS Code -->
        <script src="{{asset('public/assets/js/pages/be_forms_validation.min.js')}}"></script>

        <!-- Page JS Code -->
        <script src="{{asset('public/assets/js/pages/be_tables_datatables.min.js')}}"></script>

        
        <script src="{{asset('public/dist/js/dropify.min.js')}}"></script>

        <script>
                // Translated
            $('.dropify-omset').dropify({
                messages: {
                    default: 'Place Drag and Drop File',
                    replace: 'replace Drag and Drop File',
                    remove:  'Remove Drag and Drop File',
                    error:   'Error Drag and Drop File',
                }
            });

            
        </script>

       <script>

        $(document).ready(function() {
            $('#login-form').submit(function(e) {
                e.preventDefault();
                
                var form = $(this);
                var loader = $('#loadingGif');
                
                // Show loader spinner
                loader.removeClass('d-none');
                
                $.ajax({
                    url: form.attr('action'),
                    type: 'POST',
                    data: form.serialize(),
                    dataType: 'json',
                    success: function(response) {
                        // Hide loader spinner
                        loader.addClass('d-none');
                        
                        // Handle success response (customize as needed)
                        if (response.success) {
                            alert('Login successful!');
                            // Redirect to dashboard or desired page
                        } else {
                            alert('Invalid credentials. Please try again.');
                        }
                    },
                    error: function(xhr) {
                        // Hide loader spinner
                        loader.addClass('d-none');
                        
                        // Handle error response
                        alert('An error occurred. Please try again later.');
                        console.log(xhr.responseText);
                    }
                });
            });
        });

       </script>
        


    </body>
</html>