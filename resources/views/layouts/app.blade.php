<!DOCTYPE html>


<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Mono - Responsive Admin & Dashboard Template</title>

    <!-- theme meta -->
    <meta name="theme-name" content="mono" />

    <!-- Ajouter le CSS dans la section head -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.8/build/css/intlTelInput.min.css">

<!-- Ajouter le JS avant la fermeture de la balise body -->
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.8/build/js/intlTelInput.min.js"></script>


    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
    <link href="{{ asset('assets/plugins/material/css/materialdesignicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/simplebar/simplebar.css') }}" rel="stylesheet" />

    <!-- assets/plugins CSS STYLE -->
    <link href="{{ asset('assets/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />




    <link href="{{ asset('assets/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" />
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <link href="{{ asset('assets/plugins/toaster/toastr.min.css') }}" rel="stylesheet" />


    <!-- MONO CSS -->
    <link id="main-css-href" rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />


    <link href="images/favicon.png" rel="shortcut icon" />


    <script src="{{ asset('assets/plugins/nprogress/nprogress.js') }}"></script>
    <style>

    </style>
</head>


<body class="navbar-fixed sidebar-fixed" id="body">




    <div class="wrapper">

        <aside class="left-sidebar sidebar-dark" id="left-sidebar">
            <div id="sidebar" class="sidebar sidebar-with-footer">
                <!-- Application Brand -->
                <div class="app-brand">
                    <a href="/index.html">
                        <img src="images/logo.png" alt="SYGSTOCK">
                        <span class="brand-name">SYGSTOCK</span>
                    </a>
                </div>

                <!-- begin sidebar scrollbar -->
                <div class="sidebar-left" data-simplebar style="height: 100%;">
                    <!-- sidebar menu -->
                    <ul class="nav sidebar-inner" id="sidebar-menu">

                        <!-- Dashboard Link -->
                        <li class="active">
                            <a class="sidenav-item-link" href="{{url('dashboard')}}">
                                <i class="mdi mdi-view-dashboard-outline"></i>
                                <span class="nav-text">Dashboard</span>
                            </a>
                        </li>

                        <!-- Analytics Link -->
                        <li>
                            <a class="sidenav-item-link" href="analytics.html">
                                <i class="mdi mdi-chart-line"></i>  <!-- Changed to chart-line for a more appropriate icon -->
                                <span class="nav-text">Analytics</span>
                            </a>
                        </li>

                        <!-- Categories Link -->
                        <li>
                            <a class="sidenav-item-link" href="">
                                <i class="mdi mdi-folder-outline"></i> <!-- Changed to folder-outline for better context -->
                                <span class="nav-text">Categories</span>
                            </a>
                        </li>

                        <!-- Suppliers Link -->
                        <li>
                            <a class="sidenav-item-link" href="">
                                <i class="mdi mdi-truck-delivery"></i> <!-- Changed to truck-delivery for suppliers -->
                                <span class="nav-text">Fournisseurs</span>
                            </a>
                        </li>

                        <!-- Contacts Link -->
                        <li>
                            <a class="sidenav-item-link" href="contacts.html">
                                <i class="mdi mdi-phone"></i> <!-- Changed to phone for contacts -->
                                <span class="nav-text">Contacts</span>
                            </a>
                        </li>

                        <!-- Team Link -->
                        <li>
                            <a class="sidenav-item-link" href="team.html">
                                <i class="mdi mdi-account-group"></i>
                                <span class="nav-text">Team</span>
                            </a>
                        </li>

                        <!-- Settings Link -->
                        <li>
                            <a class="sidenav-item-link" href="settings.html">
                                <i class="mdi mdi-settings"></i>
                                <span class="nav-text">Settings</span>
                            </a>
                        </li>

                    </ul>
                </div>

                <!-- Sidebar Footer -->
                <div class="sidebar-footer">
                    <div class="sidebar-footer-content">
                        <ul class="d-flex">
                            <li>
                                <a href="user-account-settings.html" data-toggle="tooltip" title="Profile settings"><i
                                        class="mdi mdi-account-circle-outline"></i></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" title="No chat messages"><i
                                        class="mdi mdi-message-outline"></i></a>
                            </li>
                            <li>
                                <a href="logout.html" data-toggle="tooltip" title="Logout"><i
                                        class="mdi mdi-logout"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>







        <div class="page-wrapper">

            <!-- Header -->
            <header class="main-header" id="header">
                <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
                    <!-- Sidebar toggle button -->
                    <button id="sidebar-toggler" class="sidebar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                    </button>

                    <span class="page-title">Dashboard</span>

                    <div class="navbar-right">
                        <!-- Search form -->
                        <div class="search-form">
                            <form action="index.html" method="get">
                                <div class="input-group input-group-sm" id="input-group-search">
                                    <input type="text" autocomplete="off" name="query" id="search-input"
                                        class="form-control" placeholder="Search..." />
                                    <div class="input-group-append">
                                        <button class="btn btn-search" type="button">
                                            <i class="mdi mdi-magnify"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <ul class="nav navbar-nav">
                            <!-- Contacts Icon -->
                            <li class="custom-dropdown">
                                <a class="offcanvas-toggler active custom-dropdown-toggler"
                                    data-offcanvas="contact-off" href="javascript:">
                                    <i class="mdi mdi-contacts icon"></i>
                                </a>
                            </li>

                            <!-- Notifications Icon -->
                            <li class="custom-dropdown">
                                <button class="notify-toggler custom-dropdown-toggler">
                                    <i class="mdi mdi-bell-outline icon"></i>
                                    <span class="badge badge-xs rounded-circle">21</span>
                                </button>
                                <div class="dropdown-notify">
                                    <!-- Notifications content goes here -->
                                </div>
                            </li>

                            <!-- User Account -->
                            <li class="dropdown user-menu">
                                <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <img src="images/user/user-xs-01.jpg" class="user-image rounded-circle" alt="User Image" />
                                    <span class="d-none d-lg-inline-block">John Doe</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a class="dropdown-link-item" href="user-profile.html">
                                            <i class="mdi mdi-account-outline"></i>
                                            <span class="nav-text">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-link-item" href="email-inbox.html">
                                            <i class="mdi mdi-email-outline"></i>
                                            <span class="nav-text">Messages</span>
                                            <span class="badge badge-pill badge-primary">24</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-link-item" href="user-activities.html">
                                            <i class="mdi mdi-diamond-stone"></i>
                                            <span class="nav-text">Activities</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-link-item" href="user-account-settings.html">
                                            <i class="mdi mdi-settings"></i>
                                            <span class="nav-text">Account Settings</span>
                                        </a>
                                    </li>
                                    <!-- Formulaire de déconnexion -->
                                    <li class="dropdown-footer">
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="dropdown-link-item">
                                                <i class="mdi mdi-logout"></i> Log Out
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </nav>
            </header>

            <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
            @yield('content')

            <!-- Footer -->
            <footer class="footer mt-auto">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-6">
                            <p class="text-muted mb-0">
                                &copy; <span id="copy-year"></span> <strong>Your Company Name</strong>. All rights reserved.
                            </p>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <p class="mb-0">
                                <a href="https://www.yourcompany.com/privacy" class="text-muted">Privacy Policy</a> |
                                <a href="https://www.yourcompany.com/terms" class="text-muted">Terms of Service</a>
                            </p>
                        </div>
                    </div>
                </div>
                <script>
                    var d = new Date();
                    var year = d.getFullYear();
                    document.getElementById("copy-year").innerHTML = year;
                </script>
            </footer>


        </div>
    </div>

    <!-- Card Offcanvas -->
    <div class="card card-offcanvas" id="contact-off">
        <div class="card-header">
            <h2>Contacts</h2>
            <a href="#" class="btn btn-primary btn-pill px-4">Add New</a>
        </div>
        <div class="card-body">

            <div class="mb-4">
                <input type="text" class="form-control form-control-lg form-control-secondary rounded-0"
                    placeholder="Search contacts...">
            </div>

            <div class="media media-sm">
                <div class="media-sm-wrapper">
                    <a href="user-profile.html">
                        <img src="images/user/user-sm-01.jpg" alt="User Image">
                        <span class="active bg-primary"></span>
                    </a>
                </div>
                <div class="media-body">
                    <a href="user-profile.html">
                        <span class="title">Selena Wagner</span>
                        <span class="discribe">Designer</span>
                    </a>
                </div>
            </div>

            <div class="media media-sm">
                <div class="media-sm-wrapper">
                    <a href="user-profile.html">
                        <img src="images/user/user-sm-02.jpg" alt="User Image">
                        <span class="active bg-primary"></span>
                    </a>
                </div>
                <div class="media-body">
                    <a href="user-profile.html">
                        <span class="title">Walter Reuter</span>
                        <span>Developer</span>
                    </a>
                </div>
            </div>

            <div class="media media-sm">
                <div class="media-sm-wrapper">
                    <a href="user-profile.html">
                        <img src="images/user/user-sm-03.jpg" alt="User Image">
                    </a>
                </div>
                <div class="media-body">
                    <a href="user-profile.html">
                        <span class="title">Larissa Gebhardt</span>
                        <span>Cyber Punk</span>
                    </a>
                </div>
            </div>

            <div class="media media-sm">
                <div class="media-sm-wrapper">
                    <a href="user-profile.html">
                        <img src="images/user/user-sm-04.jpg" alt="User Image">
                    </a>

                </div>
                <div class="media-body">
                    <a href="user-profile.html">
                        <span class="title">Albrecht Straub</span>
                        <span>Photographer</span>
                    </a>
                </div>
            </div>

            <div class="media media-sm">
                <div class="media-sm-wrapper">
                    <a href="user-profile.html">
                        <img src="images/user/user-sm-05.jpg" alt="User Image">
                        <span class="active bg-danger"></span>
                    </a>
                </div>
                <div class="media-body">
                    <a href="user-profile.html">
                        <span class="title">Leopold Ebert</span>
                        <span>Fashion Designer</span>
                    </a>
                </div>
            </div>

            <div class="media media-sm">
                <div class="media-sm-wrapper">
                    <a href="user-profile.html">
                        <img src="images/user/user-sm-06.jpg" alt="User Image">
                        <span class="active bg-primary"></span>
                    </a>
                </div>
                <div class="media-body">
                    <a href="user-profile.html">
                        <span class="title">Selena Wagner</span>
                        <span>Photographer</span>
                    </a>
                </div>
            </div>

        </div>
    </div>




    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/simplebar/simplebar.min.js') }}"></script>
    <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>



    <script src="{{ asset('assets/plugins/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
    <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-us-aea.js') }}"></script>



    <script src="{{ asset('assets/plugins/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery('input[name="dateRange"]').daterangepicker({
                autoUpdateInput: false,
                singleDatePicker: true,
                locale: {
                    cancelLabel: 'Clear'
                }
            });
            jQuery('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
                jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
            });
            jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
                jQuery(this).val('');
            });
        });
    </script>



    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <script src="{{ asset('assets/assets/plugins/toaster/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/js/mono.js') }}"></script>
    <script src="{{ asset('assets/js/chart.js') }}"></script>
    <script src="{{ asset('assets/js/map.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>




    <!--  -->


</body>

</html>
