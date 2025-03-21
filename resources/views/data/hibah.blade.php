@extends('master')
@section('title')
    Data Hibah
@endsection

@section('konten')
<div class="d-flex justify-content-between align-items-center px-4">
    <h3 class="m-0">Data Hibah</h3>
    <a class="btn btn-primary" href="/edithibah">
        <i class="fa-solid fa-circle-plus"></i> Tambah Hibah
    </a>
</div>



<div class="d-flex justify-content-center align-items-center" style="height: 50vh;">
    <div class="card shadow" style="width: 100%; max-width: 1250px; height: auto;">
        <div class="card-body text-center">
            <table class="table" style="width: 100%; height: 300px;">
                <thead>
                    <tr class="table-primary">
                        <th scope="col" style="width: 10%; white-space: nowrap;">No</th>
                        <th scope="col">Nomor Kartu</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Aksi</th> <!-- Tambahkan kolom untuk tombol -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>B001</td>
                        <td>Erix Praditya</td>
                        <td>Laskar Pelangi</td>
                        <td>1</td>
                        <td>25 Maret 2025</td>
                        <td>Fiksi</td>
                        <td>
                           <!-- Tombol untuk membuka modal -->
                            <button type="button" class="btn btn-info btn-sm text-white" data-bs-toggle="modal" data-bs-target="#detailModal1" onclick="window.location.href='/edithibah'">
                                <i class="fa fa-pen-to-square"></i>
                            </button>

                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapushibahModal" id="btnHapus">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                            @include('layout.hapushibah')
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>B001</td>
                        <td>Erix Praditya</td>
                        <td>Laskar Pelangi</td>
                        <td>1</td>
                        <td>25 Maret 2025</td>
                        <td>Fiksi</td>
                        <td>
                           <!-- Tombol untuk membuka modal -->
                            <button type="button" class="btn btn-info btn-sm text-white" data-bs-toggle="modal" data-bs-target="#detailModal1" onclick="window.location.href='/edithibah'">
                                <i class="fa fa-pen-to-square"></i>
                            </button>

                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapushibahModal" id="btnHapus">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                            @include('layout.hapushibah')
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>B001</td>
                        <td>Erix Praditya</td>
                        <td>Laskar Pelangi</td>
                        <td>1</td>
                        <td>25 Maret 2025</td>
                        <td>Fiksi</td>
                        <td>
                           <!-- Tombol untuk membuka modal -->
                            <button type="button" class="btn btn-info btn-sm text-white" data-bs-toggle="modal" data-bs-target="#detailModal1" onclick="window.location.href='/edithibah'">
                                <i class="fa fa-pen-to-square"></i>
                            </button>

                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapushibahModal" id="btnHapus">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                            @include('layout.hapushibah')
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

