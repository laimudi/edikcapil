@extends('app')

@section('title', 'Profil')

@section('content')
    <div class="pagetitle">
        <h1>Profil</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Profil</li>
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
                    @if ($profil == null)
                      <button type="button" class="btn btn-outline-primary"
                      data-bs-toggle="modal" data-bs-target="#tambahProfil">
                      Tambah Profil
                      </button>
                      @include('admin.profil.modal_tambah')
                      @else
                      <button type="button" class="btn btn-outline-warning"
                            data-bs-toggle="modal" data-bs-target="#editProfil">
                            Edit Profil
                      </button>
                      @include('admin.profil.modal_edit')
                    @endif
                  </li>
                </ol>
              </nav>
              
            </div>
          </div>
            <div class="card-body shadow">
              <h5 class="card-title">Profil</h5>
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="tentang-tab" data-bs-toggle="tab" data-bs-target="#tentang" type="button" role="tab" aria-controls="tentang" aria-selected="true">Tentang Instansi</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="visimisi-tab" data-bs-toggle="tab" data-bs-target="#visimisi" type="button" role="tab" aria-controls="visimisi" aria-selected="false">Visi & Misi</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="struktur-tab" data-bs-toggle="tab" data-bs-target="#struktur" type="button" role="tab" aria-controls="struktur" aria-selected="false">Struktur</button>
                </li>
              </ul>
              @if ($profil != null)
              <div class="tab-content pt-2" id="myTabContent">
                <div class="tab-pane fade show active" id="tentang" role="tabpanel" aria-labelledby="tentang-tab">
                  {!! $profil->tentang !!}
                </div>
                <div class="tab-pane fade" id="visimisi" role="tabpanel" aria-labelledby="visimisi-tab">
                  {!! $profil->visi !!}
                  {!! $profil->misi !!}
                </div>
                <div class="tab-pane fade" id="struktur" role="tabpanel" aria-labelledby="struktur-tab">
                  <a href="{{ asset('storage/profil-pd/'.$profil->struktur) }}"></a>
                </div>
              </div>  
              @endif
            </div>
        </div>
    </section>
@endsection