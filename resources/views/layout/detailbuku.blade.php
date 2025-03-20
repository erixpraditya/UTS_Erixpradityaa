<div class="modal fade" id="detailbukuModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Detail Buku</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

                <div class="modal-footer d-flex flex-column align-items-start w-100">
                    <!-- Tabel Identitas -->
                    <table class="table table-borderless w-100 text-start">
                        <div class="col-5">
                        <img src="{{asset('template/img/bukucoding.jpg')}}" class="img-thumbnail img-fluid" alt="">
                        </div>
                        <tr>
                            <td >Kode Buku</td>
                            <td class="fw-bold">: B001</td>
                        </tr>

                        <tr>
                            <td >Nama Buku</td>
                            <td class="fw-bold">: Informatika</td>
                        </tr>

                        <tr>
                            <td >kategori</td>
                            <td class="fw-bold">: Pelajaran</td>
                        </tr>

                        <tr>
                            <td >Status</td>
                            <td class="fw-bold">: Di Pinjam</td>
                        </tr>
                    </table>

                    <!-- Tombol Tutup (Rata Kiri) -->
                    <button type="button" class="btn btn-primary mt-2" data-bs-dismiss="modal" aria-label="Close">Tutup</button>
                </div>
        </div>
    </div>
</div>
