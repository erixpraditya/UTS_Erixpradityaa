@extends('master')
@section('title')
    Data Peminjam
@endsection

@section('konten')
<div class="d-flex justify-content-between align-items-center px-4">
    <h3 class="m-0">Data Peminjam</h3>
    <a class="btn btn-primary" href="/tambahpeminjam">
        <i class="fa-solid fa-circle-plus"></i> Tambah Peminjam
    </a>
</div>



<div class="d-flex justify-content-center align-items-center" style="height: 50vh;">
    <div class="card shadow" style="width: 100%; max-width: 1250px; height: auto;">
        <div class="card-body text-center">
            <table class="table" style="width: 100%; height: 300px;">
                <thead>
                    <tr class="table-primary">
                        <th scope="col" style="width: 10%; white-space: nowrap;">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nama Buku</th>
                        <th scope="col">Id Peminjaman</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Aksi</th> <!-- Tambahkan kolom untuk tombol -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Erix Praditya</td>
                        <td>Informatika</td>
                        <td>11223344</td>
                        <td>23 Maret 2025</td>
                        <td>
                           <!-- Tombol untuk membuka modal -->
                            <button type="button" class="btn btn-info btn-sm text-white" data-bs-toggle="modal" data-bs-target="#detailModal1" onclick="window.location.href='/tambahpeminjam'">
                                <i class="fa fa-pen-to-square"></i>
                            </button>

                            <button type="button" class="btn btn-info btn-sm text-white" data-bs-toggle="modal" data-bs-target="#detailModal1" onclick="window.location.href='/editpengembalian'">
                                <h8>Kembalikan</h8>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Erix Praditya</td>
                        <td>Informatika</td>
                        <td>11223344</td>
                        <td>23 Maret 2025</td>
                        <td>
                            <!-- Tombol untuk membuka modal -->
                             <button type="button" class="btn btn-info btn-sm text-white" data-bs-toggle="modal" data-bs-target="#detailModal1" onclick="window.location.href='/tambahpeminjam'">
                                 <i class="fa fa-pen-to-square"></i>
                             </button>

                             <button type="button" class="btn btn-info btn-sm text-white" data-bs-toggle="modal" data-bs-target="#detailModal1" onclick="window.location.href='/editpengembalian'">
                                <h8>Kembalikan</h8>
                            </button>
                         </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Erix Praditya</td>
                        <td>Informatika</td>
                        <td>11223344</td>
                        <td>23 Maret 2025</td>
                        <td>
                            <!-- Tombol untuk membuka modal -->
                             <button type="button" class="btn btn-info btn-sm text-white" data-bs-toggle="modal" data-bs-target="#detailModal1" onclick="window.location.href='/tambahpeminjam'">
                                 <i class="fa fa-pen-to-square"></i>
                             </button>

                             <button type="button" class="btn btn-info btn-sm text-white" data-bs-toggle="modal" data-bs-target="#detailModal1" onclick="window.location.href='/editpengembalian'">
                                <h8>Kembalikan</h8>
                            </button>
                         </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

