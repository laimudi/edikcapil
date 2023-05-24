@extends('layouts.app')

@section('title', 'Pengguna | Kartu Keluarga')

@section('content')
    <div class="pagetitle">
        <h1>Kartu Keluarga</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Kartu Keluarga</li>
        </ol>
        </nav>
    </div>

    <section class="section">
            <div class="card">
              <div class="card-body">
                
                <h5 class="card-title">Input Data Kartu Keluarga</h5>

                <form class="row g-3" action="">
                    <div class="col-md-4">
                        <label for="" class="form-label">Nomor Kartu Keluarga</label>
                        <input type="" class="form-control" id="">
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">Nama Kepala Keluarga</label>
                        <input type="" class="form-control" id="">
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">Alamat</label>
                        <input type="" class="form-control" id="">
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">RT/RW</label>
                        <input type="" class="form-control" id="">
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">Kode Pos</label>
                        <input type="" class="form-control" id="">
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">Desa/Kelurahan</label>
                        <input type="" class="form-control" id="">
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">Kecamatan</label>
                        <input type="" class="form-control" id="">
                    </div>
                    <div class="col-md-4">
                    <fieldset disabled>
                        <label for="" class="form-label">Kabupaten/Kota</label>
                        <input type="text" id="" class="form-control" placeholder="Kabupaten Banggai Laut">
                    </fieldset>
                    </div>
                    <div class="col-md-4">
                        <fieldset disabled>
                            <label for="" class="form-label">Provinsi</label>
                            <input type="text" id="" class="form-control" placeholder="Sulawesi Tengah">
                        </fieldset>
                        </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">Nama Lengkap</label>
                        <input type="" class="form-control" id="">
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">NIK</label>
                        <input type="" class="form-control" id="">
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">Jenis Kelamin</label>
                        <input type="" class="form-control" id="">
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">Tempat Lahir</label>
                        <input type="" class="form-control" id="">
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">Tanggal Lahir</label>
                        <input type="" class="form-control" id="">
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">Agama</label>
                        <input type="" class="form-control" id="">
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">Pendidikan</label>
                        <input type="" class="form-control" id="">
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">Jenis Pekerjaan</label>
                        <input type="" class="form-control" id="">
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">Status Perkawinan</label>
                        <input type="" class="form-control" id="">
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">Status Hubungan Dalam Keluarga</label>
                        <input type="" class="form-control" id="">
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">Kewarga Negaraan</label>
                        <input type="" class="form-control" id="">
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">No. Paspor</label>
                        <input type="" class="form-control" id="">
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">No. KITAP</label>
                        <input type="" class="form-control" id="">
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">Nama Ayah</label>
                        <input type="" class="form-control" id="">
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">Nama Ibu</label>
                        <input type="" class="form-control" id="">
                    </div>
                    <div class="col-md-12">
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