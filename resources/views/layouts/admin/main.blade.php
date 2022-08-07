<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> @yield('title') </title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="/img/icon/stmik-mi.png" />

    <!-- Custom fonts for this template-->
    <link href="/SBAdmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/SBAdmin/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="/SBAdmin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="/trix/trix.css" rel="stylesheet">
    <script type="text/javascript" src="/trix/trix.js"></script>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
                href="/dashboard">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SIASMI</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?= request()->segment(1) == 'dashboard' ? 'active' : ''; ?>">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-tachometer-alt fa-fw"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Manage User
            </div>

            <li class="nav-item <?= request()->segment(1) == 'users' ? 'active' : ''; ?>">
                <a class="nav-link" href="/users">
                    <i class="fas fa-user fa-fw"></i>
                    <span>Admin</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Manage Data
            </div>

            <li class="nav-item <?= request()->segment(1) == 'sections' ? 'active' : ''; ?>">
                <a class="nav-link" href="/sections">
                    <i class="fas fa-align-left fa-fw"></i>
                    <span>Section</span></a>
            </li>

            <li class="nav-item <?= request()->segment(1) == 'news' ? 'active' : ''; ?>">
                <a class="nav-link" href="/news">
                    <i class="fas fa-newspaper fa-fw"></i>
                    <span>Berita</span></a>
            </li>

            <li class="nav-item <?= request()->segment(1) == 'galeries' ? 'active' : ''; ?>">
                <a class="nav-link" href="/galeries">
                    <i class="fas fa-images fa-fw"></i>
                    <span>Galeri</span></a>
            </li>

            <li class="nav-item <?= request()->segment(1) == 'ukm' ? 'active' : ''; ?>">
                <a class="nav-link" href="/ukm">
                    <i class="fas fa-users fa-fw"></i>
                    <span>Ukm</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Account
            </div>

            <li class="nav-item">
                <form action="/logout" method="post">
                @csrf
                <button type="submit" class="nav-link border-0 bg-transparent">
                    <i class="fas fa-sign-out-alt fa-fw"></i>
                    <span>Logout</span>
                </button>
            </form>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-5">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrator</span>
                                <img class="img-profile rounded-circle"
                                    src="/SBAdmin/img/undraw_profile.svg">
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                @yield('container')

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="/SBAdmin/#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="/SBAdmin/vendor/jquery/jquery.min.js"></script>
    <script src="/SBAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/SBAdmin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/SBAdmin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/SBAdmin/vendor/chart.js/Chart.min.js"></script>
    <script src="/SBAdmin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/SBAdmin/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="/SBAdmin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/SBAdmin/js/demo/chart-area-demo.js"></script>
    <script src="/SBAdmin/js/demo/chart-pie-demo.js"></script>
    <script src="/SBAdmin/js/demo/datatables-demo.js"></script>

    <script>
        $(function () {
            bsCustomFileInput.init();
        });
                
    </script>

</body>

</html>