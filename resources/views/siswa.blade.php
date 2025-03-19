
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Siswa</title>
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

                <div class="d-flex justify-content-between align-items-center px-4">
                    <h3 class="m-0">Data Anggota Siswa</h3>
                    <a class="btn btn-primary" href="form.mahasiswa.php">
                        <i class="fa-solid fa-circle-plus"></i> Tambah Data
                    </a>
                </div>



                <div class="d-flex justify-content-center align-items-center" style="height: 50vh;">
                    <div class="card shadow" style="width: 80%; width: 1250px; height: auto;">
                        <div class="card-body text-center">

                            <table class="table" style="width: 100%; height: 300px;">
                                <thead>
                                    <tr class="table-primary">
                                        <th scope="col" style="width: 10%; white-space: nowrap;">Nomor Kartu</th>
                                        <th scope="col">Nama Lengkap</th>
                                        <th scope="col">No Hp</th>
                                        <th scope="col">Alamat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
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
