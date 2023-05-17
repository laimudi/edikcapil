@extends('layouts.app')

@section('title', 'Admin | Kecamatan')

@section('content')
    <div class="pagetitle">
        <h1>Kecamatan</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Kecamatan</li>
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
                          data-bs-toggle="modal" data-bs-target="#tambahKecamatan">
                          Tambah Kecamatan
                          </button>
                      </li>
                      @include('admin.kecamatan.modal_tambah')
                    </ol>
                  </nav>
                  
                </div>
            </div>
            <div class="card-body shadow">
                <h5 class="card-title">Data Kecamatan</h5>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Daftar Kecamatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kecamatan as $data)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $data->kecamatan }}</td>
                                <td>
                                    <button type="button" class="btn btn-outline-warning float-sm-start mb-2 me-2" data-bs-toggle="modal" data-bs-target="#editKecamatan-{{ $data->id }}">
                                        <i class="ri-edit-box-line"></i>
                                    </button>
                                    <form action="{{ route('kecamatan.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">
                                        <i class="ri-delete-bin-6-line"></i>
                                    </button>
                                    </form>
                                </td>
                            </tr>
                            @include('admin.kecamatan.modal_edit')
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection