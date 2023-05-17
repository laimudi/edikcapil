@extends('layouts.app')

@section('title', 'Kadis | Pegawai')

@section('content')
    <div class="pagetitle">
        <h1>Data Pegawai</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Pegawai</li>
        </ol>
        </nav>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body shadow">
                <h5 class="card-title">Data Pegawai</h5>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Pangkat</th>
                                <th>Jabatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pegawai as $data)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $data->nip }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->pangkat }}</td>
                                <td>{{ $data->jabatan }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection