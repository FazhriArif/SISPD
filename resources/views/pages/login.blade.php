
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>SISPD | Login</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-secondary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9 d-flex justify-content-center">

                <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6">
                    <div class="card-body p-2">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h3 text-gray-900 mb-4">Selamat Datang!</h1>
                                    </div>
                                    @if(session('fail'))
                                        <div class="alert alert-danger container container-fluid col-lg-12" role="alert">
                                            {{ session('fail') }}
                                        </div>
                                    @endif
                                    <form class="user" method="post" action="{{ route('login') }}">
                                    @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user @error('email')
                                            is-invalid
                                            @enderror"
                                            id="email" value="{{ old('email') }}" name="email" required autocomplete="email"
                                            placeholder="Enter Email Address...">
                                        </div>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user @error('password')
                                            is-invalid
                                            @enderror"
                                                id="password" placeholder="Password" name="password" required autocomplete="current-password">
                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <button type="submit" class="btn btn-info btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="{{ route('register') }}">Create an Account!</a>
                                        </div>
                                    </form>
                                    <hr>
        
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
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

</body>

</html>
