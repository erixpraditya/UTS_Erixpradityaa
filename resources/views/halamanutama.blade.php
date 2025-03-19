
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Utama</title>
    @include('layout.head')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layout.left-side')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('layout.nav')
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

                        <a href="/tambah">
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
           @include('layout.footer')
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
    @include('layout.logout')

    <!-- Bootstrap core JavaScript-->
   @include('layout.script')

</body>

</html>
