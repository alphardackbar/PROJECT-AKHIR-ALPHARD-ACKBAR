<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - MoM</title>
    

    <!-- Custom fonts for this template-->
    <link href="{{ asset("style/vendor/fontawesome-free/css/all.min.css") }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset("style/css/sb-admin-2.min.css") }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand logo sb admin -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="main">
                <div class="sidebar-brand-none rotate-n-15">
                    <i class="fas"></i>
                </div>
                <div class="sidebar-brand-text mx-1">Minutes <sup> of </sup> Meeting</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="main">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                menu :
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="mom">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>MoM</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            

            <!-- Nav Item - Pages Collapse Menu -->
            

            <!-- Nav Item - Charts -->
            

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="logout">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            

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

                    <!-- Topbar Search -->
                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        
                            

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset("style/img/undraw_profile.svg") }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
            </div>
                
            <!-- End of Topbar -->
            <a class="btn btn-info btn-sm" href="/mom">kembali</a>
            <div class="container-fluid">
                <br/>
                <i class="fas fa-chart-area fa-2x"></i><span class="h3">Input Mom</span>
                <br/>
                <br/>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Add Data Meeting</h6>
                    </div>
                    <div class="card-body">
                            <form action="/mom/store" method="post">
                            {{ csrf_field() }}

                            <div class="mb-3">
                                <label for="no" class="form-label">No:</label>
                                <input type="number" name="no" class="form-control col-lg-6" id="no" required="required" autofocus>

                            
                            <div class="mb-3" >
                                <label for="jobside" class="form-label">Jobside:</label>
                                <br/>
                                <select id="jobside" name="jobside" class="form-control col-lg-3">
                                    <option selected value="">--Pilih Side--</option>
                                    @foreach ($jobsides as $jobside)
                                        <option value="{{ $jobside->jobside_id }}">{{ $jobside->jobside_jobsidee }}</option>
                                    
                                    @endforeach
                                </select>
                                
                                
                            </div>
                            <div class="mb-3">
                                <label for="meeting" class="form-label">Meeting:</label>
                                <br/>
                                <select id="meeting" class="form-control col-lg-3" name="meeting" required="required">
                                    <option selected>--Jenis Meeting--</option>
                                     @foreach ($meetings as $meeting)
                                        <option value="{{ $meeting->meeting_id }}">{{ $meeting->meeting_meetingg }}</option>
                                    
                                    @endforeach
                                </select>
                                <br/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label col-lg-3" for="flexRadioDefault1">
                                    
                                    <input class="form-input col-1" type="radio" value="Meeting Offline" id="jenis_meeting" name="jenis_meeting" required="required">
                                    <label class="form-label" for="flexRadioDefault1" >
                                     Meeting Offline
                                    </label>
                                   
                                </label>
                                <label class="form-label col-lg-3" for="flexRadioDefault2">
                                    
                                    <input class="form-input col-1" type="radio" value="Meeting Online" id="jenis_meeting" name="jenis_meeting" required="required">
                                    <label class="form-label" for="flexRadioDefault1" >
                                     Meeting Online
                                    </label>
                                   
                                </label>
                                
                                
                                
                                
                            </div>
                            <div class="mb-3">
                                <label for="tempat" class="form-label">Tempat/Vanue:</label>
                                <br/>
                                <select id="tempat" class="form-control col-lg-6" name="tempat" required="required">
                                    <option selected>--Pilih Ruangan--</option>
                                     @foreach ($tempats as $tempat)
                                        <option value="{{ $tempat->tempat_id }}">{{ $tempat->tempat_tempat_vanue }}</option>
                                    
                                    @endforeach
                                </select>
                                
                                
                            </div>
                            <div class="mb-3">
                                <label for="link" class="form-label">Link:</label>
                                <input type="text" name="link" class="form-control col-lg-6" id="link" required="required">
                                
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_dan_waktu" class="form-label">Tanggal & Waktu:</label>
                                <div class="input-group">
                                <input type="date" name="tanggal_dan_waktu" class="form-control col-lg-3" id="tanggal_dan_waktu" required="required" >
                                <input type="time" name="waktu_mulai" class="form-control col-lg-3" id="waktu_mulai" required="required" >
                                <input type="time" name="waktu_selesai" class="form-control col-lg-3" id="waktu_selesai" required="required" >
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="pemimpin" class="form-label">Pemimpin Rapat/Chair:</label>
                                <br/>
                                <select id="pemimpin" class="form-control col-lg-6" name="pemimpin" required="required">
                                    <option selected>--Pilih Pemimpin--</option>
                                     @foreach ($pegawais as $pegawai)
                                        <option value="{{ $pegawai->pegawai_id }}">{{ $pegawai->pegawai_nama }}</option>
                                    
                                    @endforeach
                                </select>
                                
                                
                            </div>
                            <div class="mb-3">
                                <label for="notulen" class="form-label">Notulen:</label>
                                <br/>
                                <select id="notulen" class="form-control col-lg-6" name="notulen" required="required">
                                    <option selected>--Pilih Notulen--</option>
                                     @foreach ($pegawais as $pegawai)
                                        <option value="{{ $pegawai->pegawai_id }}">{{ $pegawai->pegawai_nama }}</option>
                                    
                                    @endforeach
                                </select>
                            </div>
                                <br/>
                                <br/>
                            <div class="mb-3">
                                <label for="" class="form-lebel">Snack:</label>
                                
                                <label class="form-label col-lg-1" for="flexRadioDefault1">
                                    
                                    <input class="form-input col-3" type="radio" value="IYA" id="snack" name="snack" required="required">
                                    <label class="form-label" for="flexRadioDefault1">
                                        IYA
                                    </label>
                                </label>
                                <label class="form-label col-lg-2" for="flexRadioDefault2">
                                    <input class="form-input col-3" type="radio" value="TIDAK" id="snack" name="snack" required="required">
                                    <label class="form-label" for="flexRadioDefault2">
                                        TIDAK
                                    </label>
                                     
                                     

                                
                                    
                                
                                </label>
                               
                                
                                
                            </div>
                            
                            
                            <div class="mb-3">
                                <label for="agenda" class="form-label">Agenda:</label>
                                
                                <textarea class="form-control" placeholder="" id="" style="height: 100px" name="agenda" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="agenda" class="form-label">Notes:</label>
                                
                                <textarea class="form-control" placeholder="" id="" style="height: 100px" name="notes" required></textarea>
                            </div>
                            
                            <div class="mb-3">
                                <label for="pemimpin" class="form-label">Peserta:</label>
                                <br/>
                                <select id="pemimpin" class="form-control col-lg-3" name="peserta" required="required">
                                    <option selected>--Pilih Karyawan--</option>
                                     @foreach ($pegawais as $pegawai)
                                        <option value="{{ $pegawai->pegawai_id }}">{{ $pegawai->pegawai_nama }}</option>
                                    
                                    @endforeach
                                </select>
                                
                                
                            </div>

                            
                            
                            <button type="submit" class="btn btn-success" value="Simpan Data">Submit</button>
                        </form>
                    </div>
                </div>
                
            </div>
            

            
        

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2022</span>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset("style/vendor/jquery/jquery.min.js") }}"></script>
    <script src="{{ asset("style/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset("style/vendor/jquery-easing/jquery.easing.min.js") }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset("style/js/sb-admin-2.min.js") }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset("style/vendor/datatables/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("style/vendor/datatables/dataTables.bootstrap4.min.js") }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset("style/js/demo/datatables-demo.js") }}"></script>
</body>
</html>