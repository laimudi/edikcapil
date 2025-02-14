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
            <div class="card-header">
                <div class="col-12 col-md-12 order-md-12 order-first">
                  <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                          <a type="button" class="btn btn-outline-primary"
                          href="{{ route('kartukk.create') }}">
                          Tambah Data
                          </a>
                          <a class="btn btn-outline-danger" data-placement="top" href="{{ route('cetakKK') }}" target="_blank">
                            <i class="bi bi-file-earmark-pdf-fill">Cetak KK</i>
                          </a>
                      </li>
                    </ol>
                  </nav>
                  
                </div>
            </div>
            <div class="card-body shadow">
                <h5 class="card-title">Data Kartu Keluarga</h5>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kepala Keluarga</th>
                                <th>File Upload</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach ($kartukels as $kartukel)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $kartukel->nm_kl }}</td>
                                <td>{{ $kartukel->berkas }}</td>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection