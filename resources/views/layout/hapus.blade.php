<div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Anda Yakin Ingin Menghapus Data Ini</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

                <div class="modal-footer d-flex flex-column align-items-start w-100">
                    <!-- Tabel Identitas -->
                    <table class="table table-borderless w-100 text-start">
                        <div class="col-5">
                        <img src="{{asset('template/img/me.png')}}" class="img-thumbnail img-fluid" alt="">
                        </div>
                        <tr>
                            <td >Nomor Kartu</td>
                            <td class="fw-bold">: B001</td>
                        </tr>

                        <tr>
                            <td >Nama Lengkap</td>
                            <td class="fw-bold">: Erix Praditya</td>
                        </tr>

                        <tr>
                            <td >No HP</td>
                            <td class="fw-bold">: 085261515247</td>
                        </tr>

                        <tr>
                            <td >Alamat</td>
                            <td class="fw-bold">: JL.Mata Ie II</td>
                        </tr>
                    </table>

                    <!-- Tombol Tutup (Rata Kiri) -->
                    <div class="d-flex gap-2">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Tutup</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Hapus</button>
                    </div>

                </div>
        </div>
    </div>
</div>
