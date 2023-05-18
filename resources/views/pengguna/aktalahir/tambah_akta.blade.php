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

                <form class="row g-3" action="{{ route('akta.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="text" class="form-control" name="nik" id="nik">
                    </div>
                    <div class="col-md-6">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                    <div class="col-md-6">
                        <label for="tmp_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tmp_lahir" id="tmp_lahir">
                    </div>
                    <div class="col-md-6">
                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir">
                    </div>
                    <div class="col-md-6">
                        <label for="thn_lahir" class="form-label">Tahun Lahir</label>
                        <input type="text" class="form-control" name="thn_lahir" id="thn_lahir">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="gender">Jenis Kelamin</label>
                        <select class="form-select" name="gender" id="gender">
                            <option selected>Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuna</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="anak" class="form-label">Anak Ke</label>
                        <input type="text" class="form-control" name="anak" id="anak">
                    </div>
                    <div class="col-md-6">
                        <label for="nm_ayah" class="form-label">Nama Ayah</label>
                        <input type="text" class="form-control" name="nm_ayah" id="nm_ayah">
                    </div>
                    <div class="col-md-6">
                        <label for="nm_ibu" class="form-label">Nama Ibu</label>
                        <input type="text" class="form-control" name="nm_ibu" id="nm_ibu">
                    </div>
                    <div class="col-md-6">
                        <label for="berkas" class="form-label">Upload Berkas</label>
                        <input class="form-control" type="file" name="berkas" id="berkas">
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