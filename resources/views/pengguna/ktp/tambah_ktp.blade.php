@extends('layouts.app')

@section('title', 'Pengguna | KTP-el')

@section('content')
    <div class="pagetitle">
        <h1>Kartu Tanda Penduduk</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Kartu Tanda Penduduk</li>
        </ol>
        </nav>
    </div>

    <section class="section">
            <div class="card">
              <div class="card-body">
                
                <h5 class="card-title">Input Data Kartu Tanda Penduduk</h5>

                <form class="row g-3" action="{{ route('kartup.store') }}" method="POST" enctype="multipart/form-data">
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
                        <label class="form-label" for="gender">Jenis Kelamin</label>
                        <select class="form-select" name="gender" id="gender">
                            <option selected>Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuna</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="kecamatan_id">Kecamatan</label>
                        <select class="form-select" name="kecamatan_id" id="kecamatan_id">
                            <option selected>Kecamatan</option>
                            @foreach ($kecamatan as $data)
                                <option value="{{ $data->id }}">{{ $data->kecamatan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat">
                    </div>
                    <div class="col-md-6">
                        <label for="rt" class="form-label">RT/RW</label>
                        <input type="text" class="form-control" name="rt" id="rt">
                    </div>
                    <div class="col-md-6">
                        <label for="kelurahan" class="form-label">Kel/Desa</label>
                        <input type="text" class="form-control" name="kelurahan" id="kelurahan">
                    </div>
                    <div class="col-md-6">
                        <label for="agama" class="form-label">Agama</label>
                        <input type="text" class="form-control" name="agama" id="agama">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="status">Status</label>
                        <select class="form-select" name="status" id="status">
                            <option selected>Status</option>
                            <option value="Kawin">Kawin</option>
                            <option value="Belum Kawin">Belum Kawin</option>
                            <option value="Janda">Janda</option>
                            <option value="Duda">Duda</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="pekerjaan">Pekerjaan</label>
                        <select class="form-select" name="pekerjaan" id="pekerjaan">
                            <option selected>Pekerjaan</option>
                            <option value="Belum/Tidak Bekerja">Belum/Tidak Bekerja</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="warga_negara">Warga_Negara</label>
                        <select class="form-select" name="warga_negara" id="warga_negara">
                            <option selected>Warga Negara</option>
                            <option value="WNI">WNI</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="gambar" class="form-label">Upload Gambar</label>
                        <input class="form-control" type="file" name="gambar" id="gambar">
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