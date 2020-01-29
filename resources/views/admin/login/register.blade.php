<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>RuangAdmin - Register</title>
  @include('admin.css');

</head>

<body class="bg-gradient-login">
  <!-- Register Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Register</h1>
                  </div>
                     {{-- menampilkan error validasi --}}
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                  <form method="post" action="{{url('proses_regis')}}">
                      {{ csrf_field() }}
               <!--      <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" name="nama" id="exampleInputFirstName" placeholder="Nama" value="{{ old('nama') }}">
                    </div>

                    <div class="form-group">
                      <label>Alamat</label>
                     <textarea class="form-control" name="alamat">{{ old('alamat') }}</textarea>
                    </div>

                    <div class="form-group">
                      <label>Telp</label>
                      <input type="number" class="form-control" name="telp" id="exampleInputFirstName" placeholder="Telp" value="{{ old('telp') }}">
                    </div> -->
                   
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" name="username" id="exampleInputEmail" aria-describedby="emailHelp"
                        placeholder="Username" value="{{ old('username') }}">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" name="password" id="exampleInputPassword" placeholder="Password" value="{{ old('password') }}">
                    </div>
                    <div class="form-group">
                      <label>Repeat Password</label>
                      <input type="password" class="form-control" name="password_confirmation" id="exampleInputPasswordRepeat"
                        placeholder="Repeat Password" value="{{ old('password_confirmation') }}">
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <hr>
                  <!--   <a href="index.html" class="btn btn-google btn-block">
                      <i class="fab fa-google fa-fw"></i> Register with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                    </a> -->
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="{{url('/adm')}}">Already have an account?</a>
                  </div>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Register Content -->
  @include('admin.javascript');
</body>

</html>