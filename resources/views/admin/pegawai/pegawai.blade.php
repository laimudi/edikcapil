@extends('layouts.app')

@section('title', 'Admin | Pegawai')

@section('content')
    <div class="pagetitle">
        <h1>Pegawai</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Pegawai</li>
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
                          <button type="button" class="btn btn-outline-primary"
                          data-bs-toggle="modal" data-bs-target="#tambahPegawai">
                          Tambah Pegawai
                          </button>
                      </li>
                      @include('admin.pegawai.modal_tambah')
                    </ol>
                  </nav>
                  
                </div>
            </div>
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
                                <th>Aksi</th>
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
                                <td>
                                    <button type="button" class="btn btn-outline-warning float-sm-start mb-2 me-2" data-bs-toggle="modal" data-bs-target="#editPegawai-{{ $data->id }}">
                                        <i class="ri-edit-box-line"></i>
                                    </button>
                                    <form action="{{ route('pegawai.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">
                                        <i class="ri-delete-bin-6-line"></i>
                                    </button>
                                    </form>
                                </td>
                            </tr>
                            @include('admin.pegawai.modal_edit')
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection