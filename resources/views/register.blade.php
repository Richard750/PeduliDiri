<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register &mdash; Peduli Diri</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <img style="width: 85px; height: 85px; align-self:center; margin-top: 30px;" src="img/logo-pd.png" alt="logo_pedulidiri">
          <div class="card-body">
            <!-- Nested Row within Card Body -->
            <div class="row">
              
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Register Peduli Diri</h1>
                  </div>
                  <form method="POST" action="/simpanUser" class="needs-validation user" novalidate="">
                    {{ csrf_field() }}
                    @if (session('success'))
                      {{-- <div class="rounded p-3 mb-5 bg-success text-white text-center"> --}}
                        <strong style="color: rgb(0, 255, 4)">{{ session('success') }}</strong>
                      {{-- </div> --}}
                    @elseif ($errors->any())
                      {{-- <div class="rounded p-3 mb-5 bg-danger text-white text-center"> --}}
                        @foreach ($errors->all() as $error)
                          <strong style="color: rgb(254, 39, 39)">{{ $error }}</strong>
                        @endforeach
                      {{-- </div> --}}
                    @endif

                    <div class="form-group">
                      <label for="email">NIK</label>
                      <input id="nik" type="text" class="form-control form-control-user" name="nik" tabindex="1" required autofocus>
                      <div class="invalid-feedback">
                        Harap isi NIK
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="name">Nama Lengkap</label>
                      <input id="name" type="text" class="form-control form-control-user" name="name" tabindex="1" required autofocus>
                      <div class="invalid-feedback">
                        Harap isi Nama Lengkap
                      </div>
                    </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        Register
                      </button>
                    </div>
                  </form>
                  <hr>
                  <div class="text-center">
                    Sudah punya akun? <a href="/">Login!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>