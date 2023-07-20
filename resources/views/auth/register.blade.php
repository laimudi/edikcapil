<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    @include('layouts.style')
</head>
<body>


    <main>
        <div class="container">
    
          <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
    
                  <div class="d-flex justify-content-center py-4">
                    <a href="{{ url('/') }}" class="logo d-flex align-items-center w-auto">
                      <img src="" alt="">
                      <span class="d-none d-lg-block">EDUKCAPIL</span>
                    </a>
                  </div>
    
                  <div class="card shadow mb-3">
    
                    <div class="card-body">
    
                      <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">Buat Akun</h5>
                      </div>
    
                      <form action="{{ route('register') }}" method="POST" class="row g-3 needs-validation" novalidate>
                        @csrf
                        <div class="col-12">
                          <label for="name" class="form-label">Nama</label>
                          <input type="text" name="name" class="form-control" id="name" required>
                        </div>
    
                        <div class="col-12">
                          <label for="email" class="form-label">Email</label>
                          <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" name="email" class="form-control" id="email" required>
                          </div>
                        </div>
    
                        <div class="col-12">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control" id="password" required>
                        </div>

                        <div class="col-12">
                          <button class="btn btn-primary w-100" type="submit">Simpan</button>
                        </div>
                        <div class="col-12">
                          <p class="small mb-0">Sudah memiliki akun? <a href="{{ url('/login') }}">Log in</a></p>
                        </div>
                      </form>
    
                    </div>
                  </div>
    
                </div>
              </div>
            </div>
    
          </section>
    
        </div>
      </main>

    
</body>
</html>