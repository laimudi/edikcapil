@extends('app')

@section('title', 'Berita')

@section('content')
    <div class="pagetitle">
        <h1>Berita</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Berita</li>
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
                          data-bs-toggle="modal" data-bs-target="#tambahBerita">
                          Tambah Berita
                          </button>
                      </li>
                      @include('admin.berita.modal_tambah')
                    </ol>
                  </nav>
                  
                </div>
            </div>
            <div class="card-body shadow">
                <h5 class="card-title">Data Berita</h5>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Isi Berita</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($berita as $data)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $data->judul }}</td>
                                <td>{!! $data->isi_berita !!}</td>
                                <td>
                                    <img src="{{ asset('storage/berita/'. $data->gambar) }}" width="100px" height="100px" alt="">
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-warning float-sm-start mb-2 me-2" data-bs-toggle="modal" data-bs-target="#editBerita-{{ $data->id }}">
                                        <i class="ri-edit-box-line"></i>
                                    </button>
                                    <form action="{{ route('berita.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">
                                        <i class="ri-delete-bin-6-line"></i>
                                    </button>
                                    </form>
                                </td>
                            </tr>
                            @include('admin.berita.modal_edit')    
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection