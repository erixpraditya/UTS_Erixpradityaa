
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Siswa</title>
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

                <div class="d-flex justify-content-center align-items-center" style="height: 75vh;">
                    <div class="card shadow" style="width: 80%; width: 1250px; height: auto;">
                        <div class="card-body text-left">
                            <h3 class="text-center" style="font-weight: bold; font-size: 30px; color: black;">
                                Form Tambah Anggota Siswa
                            </h3>


                            <form action="/siswa">
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Nomor Kartu</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputPassword1" class="form-label">Nama Lengkap</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">No Hp</label>
                                    <input type="number" class="form-control" id="exampleInputPassword1">
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                  </div>
                                <div class="mb-3 form-check">
                                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>

                              </form>
                        </div>
                    </div>
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
