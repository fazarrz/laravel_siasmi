<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="/SBAdmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/SBAdmin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-5 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <?php if( session('success') ) : ?>
                        <div class="alert alert-success alert-dismissible fade show text-center p-2">
                            <?= session('success'); ?>
                        </div>
                        <?php endif; ?>
                        <?php if( session('failed') ) : ?>
                        <div class="alert alert-danger alert-dismissible fade show text-center p-2">
                            <?= session('failed'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Login</h1>
                            </div>
                            <form method="post" action="/login" class="user">
                            @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="email" placeholder="Email" value="{{ old('email') }}">
                                    @error('email') <small class="form-text text-danger mt-0 ml-3">{{ $message }}</small> @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                                    @error('password') <small class="form-text text-danger mt-0 ml-3">{{ $message }}</small> @enderror
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Remember
                                            Me</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block mb-4">Login</button>

                                <a href="/">Kembali ke beranda</a>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/SBAdmin/vendor/jquery/jquery.min.js"></script>
    <script src="/SBAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/SBAdmin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/SBAdmin/js/sb-admin-2.min.js"></script>

</body>

</html>