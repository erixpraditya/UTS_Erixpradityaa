
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Utama</title>
    @include('data.head')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('data.left-side')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('data.nav')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <div class="d-flex flex-column justify-content-center align-items-center" style="height: 60vh;">
                    <div class="card shadow d-flex flex-column justify-content-center align-items-center text-center"
                        style="width: 300px; height: 300px; border-radius: 50%; padding: 20px;">
                        <i class="fa-solid fa-user text-primary" style="font-size: 150px;"></i>
                    </div>
                    <h3 class="m-0 font-weight-bold text-primary mt-3">Admin Erix Praditya</h3> <!-- Tambah margin top -->
                </div>


                    <!-- Page Heading -->
                    <div class="d-flex justify-content-center align-items-center mb-5" style="height: 30vh; gap: 10px;">
                        <a href="data.tambahbuku">
                        <div class="card shadow mb-4 d-flex flex-column justify-content-center align-items-center text-center" style="width: 300px; height: 300px;">
                            <i class="fa-solid fa-book text-primary" style="font-size: 40px;"></i>
                            <h6 class="m-0 font-weight-bold text-primary mt-2">Tambah Buku</h6>
                        </div>
                        </a>

                        <a href="data.tambahpeminjam">
                        <div class="card shadow mb-4 d-flex flex-column justify-content-center align-items-center text-center" style="width: 300px; height: 300px;">
                            <i class="fa-regular fa-folder-open text-primary" style="font-size: 40px;"></i>
                            <h6 class="m-0 font-weight-bold text-primary mt-2">Tambah Peminjam</h6>
                        </div>
                        </a>

                        <a href="data.tambahhibah">
                        <div class="card shadow mb-4 d-flex flex-column justify-content-center align-items-center text-center" style="width: 300px; height: 300px;">
                            <i class="fa-regular fa-handshake text-primary" style="font-size: 40px;"></i>
                            <h6 class="m-0 font-weight-bold text-primary mt-2">Tambah Hibah</h6>
                        </div>
                        </a>
                    </div>



                <!-- /.container-fluid -->

            </div>



            <!-- End of Main Content -->

            <!-- Footer -->
           @include('data.footer')
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
   @include('data.script')

</body>

</html>
