@extends('master')
@section('title')
    Daftar Buku
@endsection

@section('konten')
<div class="d-flex justify-content-between align-items-center px-4">
    <h3 class="m-0">Daftar Buku</h3>
    <a class="btn btn-primary" href="/tambahbuku">
        <i class="fa-solid fa-circle-plus"></i> Tambah Buku
    </a>
</div>



<div class="d-flex justify-content-center align-items-center" style="height: 50vh;">
    <div class="card shadow" style="width: 100%; max-width: 1250px; height: auto;">
        <div class="card-body text-center">
            <table class="table" style="width: 100%; height: 300px;">
                <thead>
                    <tr class="table-primary">
                        <th scope="col" style="width: 10%; white-space: nowrap;">No</th>
                        <th scope="col">Kode Buku</th>
                        <th scope="col">Nama Buku</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th> <!-- Tambahkan kolom untuk tombol -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>B001</td>
                        <td>Informatika</td>
                        <td>Pelajaran</td>
                        <td>Di pinjam</td>
                        <td>
                           <!-- Tombol untuk membuka modal -->
                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#detailbukuModal" id="btnDetail">
                            <i class="fa-solid fa-eye"></i>
                        </button>
                        @include('layout.detailbuku')

                            <button type="button" class="btn btn-info btn-sm text-white" data-bs-toggle="modal" data-bs-target="#detailModal1" onclick="window.location.href='/tambahbuku'">
                                <i class="fa fa-pen-to-square"></i>
                            </button>

                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusbukuModal" id="btnHapus">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                            @include('layout.hapus')
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>B002</td>
                        <td>Desain Grafis</td>
                        <td>Pelajaran</td>
                        <td>Tersedia</td>
                        <td>
                           <!-- Tombol untuk membuka modal -->
                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal" id="btnDetail">
                            <i class="fa-solid fa-eye"></i>
                        </button>
                        @include('layout.detail')

                            <button type="button" class="btn btn-info btn-sm text-white" data-bs-toggle="modal" data-bs-target="#detailModal1" onclick="window.location.href='/tambahbuku'">
                                <i class="fa fa-pen-to-square"></i>
                            </button>

                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal" id="btnHapus">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                            @include('layout.hapus')
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>B003</td>
                        <td>Computer for Office</td>
                        <td>Pelajaran</td>
                        <td>Di pinjam</td>
                        <td>
                           <!-- Tombol untuk membuka modal -->
                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal" id="btnDetail">
                            <i class="fa-solid fa-eye"></i>
                        </button>
                        @include('layout.detail')

                            <button type="button" class="btn btn-info btn-sm text-white" data-bs-toggle="modal" data-bs-target="#detailModal1" onclick="window.location.href='/tambahbuku'">
                                <i class="fa fa-pen-to-square"></i>
                            </button>

                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal" id="btnHapus">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                            @include('layout.hapusbuku')
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

