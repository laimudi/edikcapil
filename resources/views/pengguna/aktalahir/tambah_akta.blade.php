@extends('layouts.app')

@section('title', 'Pengguna | Akta Kelahiran')

@section('content')
    <div class="pagetitle">
        <h1>Akta Kelahiran</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Akta Kelahiran</li>
        </ol>
        </nav>
    </div>

    <section class="section">
            <div class="card">
              <div class="card-body">
                
                <h5 class="card-title">Input Data Akta Kelahiran</h5>

                <form class="row g-3" action="">
                    <div class="col-md-6">
                        <label for="" class="form-label">NIK</label>
                        <input type="" class="form-control" id="">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Nama</label>
                        <input type="" class="form-control" id="">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Tempat Lahir</label>
                        <input type="" class="form-control" id="">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Tanggal Lahir</label>
                        <input type="" class="form-control" id="">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Tahun</label>
                        <input type="" class="form-control" id="">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="">Jenis Kelamin</label>
                        <select class="form-select" id="">
                            <option selected>Jenis Kelamin</option>
                            <option value="1">Laki-Laki</option>
                            <option value="2">Perempuna</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Anak Ke</label>
                        <input type="" class="form-control" id="">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Nama Ayah</label>
                        <input type="" class="form-control" id="">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Nama Ibu</label>
                        <input type="" class="form-control" id="">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Upload Berkas</label>
                        <input class="form-control" type="file" id="">
                        <p style="color:red">Berkas di gabungkan menjadi 1 file dalam bentuk format PDF</p>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
              </div>
            </div>
    </section>
@endsection