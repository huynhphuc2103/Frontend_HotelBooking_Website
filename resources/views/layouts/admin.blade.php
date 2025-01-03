<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Royal Hotel | @yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    
    <link href="{{ asset('assets/admin/css/tables.css') }}" rel="stylesheet">


</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="padding-top:4%; font-weight:bold;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin/index">
                <div class="sidebar-brand-text mx-3">Royal Hotel</div>
            </a>

            <li class="nav-item">
                <a class="nav-link" href="/admin/auths">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Auth</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/admin/employees">
                    <i class="fas fa-fw fa-address-card"></i>
                    <span>Employee</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/admin/rooms">
                    <i class="fas fa-home"></i>
                    <span>Room</span>
                </a>
            </li> 
            
            <li class="nav-item">
                <a class="nav-link" href="/admin/room-types">
                    <i class="fas fa-sitemap"></i>
                    <span>Room Type</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/admin/customers">
                    <i class="fas fa-users"></i>
                    <span>Customers</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/admin/bills">
                    <i class="fas fa-window-maximize"></i>
                    <span>Bill</span>
                </a>
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
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">                                              
                        <!-- Tài khoản - Đẵng xuất -->
                        <!-- ##################### -->
                        

                    </ul>

                </nav>
                <!-- End of Topbar -->


                <!-- Main -->
                @yield('content')
                <!-- End Main -->


            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Royal Hotel 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a> 

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/admin/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    @yield('scripts')

</body>

</html>