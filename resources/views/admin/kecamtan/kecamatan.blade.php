@extends('app')

@section('title', 'Kecamatan')

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
                      {{-- @include('admin.berita.modal_tambah') --}}
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
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th></th>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection