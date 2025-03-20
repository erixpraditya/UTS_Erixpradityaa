@extends('master')
@section('title')
    Tambah Buku
@endsection

@section('konten')
<div class="d-flex justify-content-center align-items-center" style="height: 75vh;">
    <div class="card shadow" style="width: 80%; width: 1250px; height: auto;">
        <div class="card-body text-left">
            <h3 class="text-center" style="font-weight: bold; font-size: 30px; color: black;">
                Form Tambah Buku
            </h3>


            <form action="/daftarbuku">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Kode Buku</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Nama Buku</label>
                  <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Kategori</label>
                    <input type="number" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Masukan Foto</label>
                    <input class="form-control" type="file" id="formFile">
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
@endsection
