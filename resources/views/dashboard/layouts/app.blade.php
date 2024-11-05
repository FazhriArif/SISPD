<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SISPD | Dashboard</title>
    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>
    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display : none;
        }
    </style>
    <script>
        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        })
    </script>

    <!-- Custom styles for yajra datatable-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/b-2.1.1/b-html5-2.1.1/b-print-2.1.1/sb-1.3.0/sp-1.4.0/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-book-reader"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SISPD <sup>Arsip</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/home">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data Dasar
            </div>

            <!-- Nav Item - Pegawai Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="/pegawai">
                    <i class="fas fa-fw fa-user-alt"></i>
                    <span>Pegawai</span>
                </a>
            </li>

            <!-- Nav Item - Perjalanan Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="/perjalanan">
                    <i class="fas fa-fw fa-plane-departure"></i>
                    <span>Perjalanan Dinas</span>
</span>
                </a>
            </li>

            <!-- Nav Item - Surat Perjalanan Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="/surat">
                    <i class="fas fa-fw fa-newspaper"></i>
                    <span>
                        Surat Perjalanan Dinas 
                        @if($jumlahSuratMenunggu > 0)<span class="badge badge-center rounded-pill bg-danger">{{$jumlahSuratMenunggu }}
                        @endif
                    </span>
                </a>
            </li>


            @can('admin')

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data Tambahan
            </div>

            <!-- Nav Item - Instansi Menu -->
            <li class="nav-item">
                <a class="nav-link" href="/instansi">
                    <i class="fas fa-fw fa-industry"></i>
                    <span>Instansi</span></a>
            </li>

            <!-- Nav Item - Kendaraan Menu -->
            <li class="nav-item">
                <a class="nav-link" href="/kendaraan">
                    <i class="fas fa-fw fa-car"></i>
                    <span>Kendaraan</span></a>
            </li>

            <!-- Nav Item - Pangkat Menu -->
            <li class="nav-item">
                <a class="nav-link" href="/pangkat">
                    <i class="fas fa-fw fa-user-graduate"></i>
                    <span>Pangkat</span></a>
            </li>

            <!-- Nav Item - Jabatan Menu -->
            <li class="nav-item">
                <a class="nav-link" href="/jabatan" >
                    <i class="fas fa-fw fa-user-tie"></i>
                    <span>Jabatan</span></a>
            </li>

            @endcan
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

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

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->name }}</span>
                                <i class="fas fa-users"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <button class="dropdown dropdown-item btn-user btn-success" type="submit" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </button>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
                    </div>

                    <!-- Content Row -->
                    <div class="row">


                    </div>

                    <div class="row container container-fluid">
                        @yield('container')
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            {{-- <footer class="footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span></span>
                    </div>
                </div>
            </footer> --}}
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    <div class="container">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" if you want to Exit this session.</div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                    <form action="{{ route('logout') }}" method="post">
                    @method('post')
                    @csrf
                    <button class="btn btn-success" type="submit"><i class="fas fa-sm fa-fw fa-sign-out-alt text-white-50"></i> Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/js/demo/chart-area-demo.js"></script>
    <script src="/js/demo/chart-pie-demo.js"></script>

    <!-- yajra data script -->
    <script type="text/javascript" src="{{ asset('datatables/pdfmake-0.1.36/pdfmake.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('datatables/pdfmake-0.1.36/vfs_fonts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/datatables.min.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/b-2.1.1/b-html5-2.1.1/b-print-2.1.1/sb-1.3.0/sp-1.4.0/datatables.min.js"></script>
    <script>
    $(document).ready( function() {
        $('#myTable').DataTable();
    });

    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imagePreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        OFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }
    </script> 
</body>

</html>
