@extends('master')
@section('title')
    Siswa
@endsection

@section('konten')
<div class="d-flex justify-content-between align-items-center px-4">
    <h3 class="m-0">Data Anggota Siswa</h3>
    <a class="btn btn-primary" href="/tambahsiswa">
        <i class="fa-solid fa-circle-plus"></i> Tambah Data
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
                        <th scope="col">No Hp</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th> <!-- Tambahkan kolom untuk tombol -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>B001</td>
                        <td>Erix Praditya</td>
                        <td>085261515247</td>
                        <td>JL.Mata Ie II</td>
                        <td>
                           <!-- Tombol untuk membuka modal -->
                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal" id="btnDetail">
                            <i class="fa-solid fa-eye"></i>
                        </button>
                        @include('layout.detail')

                            <button type="button" class="btn btn-info btn-sm text-white" data-bs-toggle="modal" data-bs-target="#detailModal1" onclick="window.location.href='/tambahsiswa'">
                                <i class="fa fa-pen-to-square"></i>
                            </button>

                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal" id="btnHapus">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                            @include('layout.hapus')
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>B002</td>
                        <td>Praditya</td>
                        <td>085261515247</td>
                        <td>JL.Mata Ie I</td>
                        <td>
                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal1">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-info btn-sm text-white" data-bs-toggle="modal" data-bs-target="#detailModal1">
                                <i class="fa fa-pen-to-square"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal1">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>B003</td>
                        <td>Raditya</td>
                        <td>085261518723</td>
                        <td>JL.Mata Ie</td>
                        <td>
                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal1">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-info btn-sm text-white" data-bs-toggle="modal" data-bs-target="#detailModal1">
                                <i class="fa fa-pen-to-square"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal1">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

