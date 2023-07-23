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

                <form class="row g-3" action="{{ route('kartukk.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-4">
                        <label for="nomor_kk" class="form-label">Nomor Kartu Keluarga</label>
                        <input type="number" name="nomor_kk" class="form-control" id="nomor_kk">
                    </div>
                    <div class="col-md-4">
                        <label for="nm_kl" class="form-label">Nama Kepala Keluarga</label>
                        <input type="text" name="nm_kl" class="form-control" id="nm_kl">
                    </div>
                    <div class="col-md-4">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat">
                    </div>
                    <div class="col-md-4">
                        <label for="rt" class="form-label">RT/RW</label>
                        <input type="text" name="rt" class="form-control" id="rt">
                    </div>
                    <div class="col-md-4">
                        <label for="kode_pos" class="form-label">Kode Pos</label>
                        <input type="text" name="kode_pos" class="form-control" id="kode_pos">
                    </div>
                    <div class="col-md-4">
                        <label for="kelurahan" class="form-label">Desa/Kelurahan</label>
                        <input type="text" name="kelurahan" class="form-control" id="kelurahan">
                    </div>
                    <div class="col-md-4">
                        <label for="kecamatan_id">Kecamatan</label>
                        <select name="kecamatan_id" id="kecamatan_id" class="form-control" required>
                            <option value="">Pilih Kecamatan</option>
                            @foreach ($kecamatans as $kecamatan)
                                <option value="{{ $kecamatan->id }}">{{ $kecamatan->kecamatan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="kabupaten" class="form-label">Kabupaten/Kota</label>
                        <input type="text" name="kabupaten" id="kabupaten" class="form-control" placeholder="Kabupaten Banggai Laut">
                    </div>
                    <div class="col-md-4">
                        <label for="provinsi" class="form-label">Provinsi</label>
                        <input type="text" name="provinsi" id="provinsi" class="form-control" placeholder="Sulawesi Tengah">
                    </div>
                    <div class="col-md-4">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                    </div>
                    <div class="col-md-4">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="number" name="nik" class="form-control" id="nik">
                    </div>
                    <div class="col-md-4">
                        <label for="gender" class="form-label">Jenis Kelamin</label>
                        <input type="text" name="gender" class="form-control" id="gender">
                    </div>
                    <div class="col-md-4">
                        <label for="tmp_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" name="tmp_lahir" class="form-control" id="tmp_lahir">
                    </div>
                    <div class="col-md-4">
                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir">
                    </div>
                    <div class="col-md-4">
                        <label for="agama" class="form-label">Agama</label>
                        <input type="text" name="agama" class="form-control" id="agama">
                    </div>
                    <div class="col-md-4">
                        <label for="pendidikan" class="form-label">Pendidikan</label>
                        <input type="text" name="pendidikan" class="form-control" id="pendidikan">
                    </div>
                    <div class="col-md-4">
                        <label for="pekerjaan" class="form-label">Jenis Pekerjaan</label>
                        <input type="text" name="pekerjaan" class="form-control" id="pekerjaan">
                    </div>
                    <div class="col-md-4">
                        <label for="status" class="form-label">Status Perkawinan</label>
                        <input type="text" name="status" class="form-control" id="status">
                    </div>
                    <div class="col-md-4">
                        <label for="status_kk" class="form-label">Status Hubungan Dalam Keluarga</label>
                        <input type="text" name="status_kk" class="form-control" id="status_kk">
                    </div>
                    <div class="col-md-4">
                        <label for="warga_negara" class="form-label">Kewarga Negaraan</label>
                        <input type="text" name="warga_negara" class="form-control" id="warga_negara">
                    </div>
                    <div class="col-md-4">
                        <label for="nomor_ps" class="form-label">No. Paspor</label>
                        <input type="text" name="nomor_ps" class="form-control" id="nomor_ps">
                    </div>
                    <div class="col-md-4">
                        <label for="nomor_kitap" class="form-label">No. KITAP</label>
                        <input type="text" name="nomor_kitap" class="form-control" id="nomor_kitap">
                    </div>
                    <div class="col-md-4">
                        <label for="nm_ayah" class="form-label">Nama Ayah</label>
                        <input type="text" name="nm_ayah" class="form-control" id="nm_ayah">
                    </div>
                    <div class="col-md-4">
                        <label for="nm_ibu" class="form-label">Nama Ibu</label>
                        <input type="text" name="nm_ibu" class="form-control" id="nm_ibu">
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