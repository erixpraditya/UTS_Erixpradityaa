@extends('master')
@section('title')
    Halaman Utama
@endsection

@section('konten')
<div class="d-flex flex-column justify-content-center align-items-center" style="height: 70vh;">
    <div class="card shadow d-flex flex-column justify-content-center align-items-center text-center"
        style="width: 300px; height: 300px; border-radius: 50%; padding: 30px;">
        <i class="fa-solid fa-user text-primary" style="font-size: 150px;"></i>
    </div>
    <h3 class="m-0 font-weight-bold text-primary mt-3">Admin Erix Praditya</h3> <!-- Tambah margin top -->
</div>


    <!-- Page Heading -->
    <div class="d-flex justify-content-center align-items-center mb-5" style="height: 30vh; gap: 10px;">
        <a href="/tambahbuku">
        <div class="card shadow mb-4 d-flex flex-column justify-content-center align-items-center text-center" style="width: 300px; height: 300px;">
            <i class="fa-solid fa-book text-primary" style="font-size: 40px;"></i>
            <h6 class="m-0 font-weight-bold text-primary mt-2">Tambah Buku</h6>
        </div>
        </a>

        <a href="/tambahpeminjam">
        <div class="card shadow mb-4 d-flex flex-column justify-content-center align-items-center text-center" style="width: 300px; height: 300px;">
            <i class="fa-regular fa-folder-open text-primary" style="font-size: 40px;"></i>
            <h6 class="m-0 font-weight-bold text-primary mt-2">Tambah Peminjam</h6>
        </div>
        </a>

        <a href="/edithibah">
        <div class="card shadow mb-4 d-flex flex-column justify-content-center align-items-center text-center" style="width: 300px; height: 300px;">
            <i class="fa-regular fa-handshake text-primary" style="font-size: 40px;"></i>
            <h6 class="m-0 font-weight-bold text-primary mt-2">Tambah Hibah</h6>
        </div>
        </a>
    </div>
@endsection

