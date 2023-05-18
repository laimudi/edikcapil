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
                    <div class="col-md-6">
                        <label for="" class="form-label">Nama Kepala Keluarga</label>
                        <input type="" class="form-control" id="">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>
                </form>
              </div>
            </div>
    </section>
@endsection