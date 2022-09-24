<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Custom fonts for this template-->
<link href="{{ asset('frontend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.2.0/dist/sweetalert2.min.css" rel="stylesheet" type="text/css">

<!-- Custom styles for this template-->
<link href="{{ asset('frontend/css/sb-admin-2.min.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/custom.css') }}" rel="stylesheet">
<div class="container">

    <!-- Custom Login Css -->
    <!-- <link href="{{ asset('frontend/css/customLogin.css') }}" rel="stylesheet" type="text/css"> -->

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <!-- <div class="row"> -->
                    <div class="col-lg-6 d-none d-lg-block bg-login-image">
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <!-- add log -->
                            
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"><img src="{{ asset('frontend/img/logo_digitar.png') }}"></h1>
                            </div>
                            <form class="user" id="formLogin">
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Endereço de email...">
                                </div>
                                <div class="form-group">
                                    <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Senha">
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Lembrar senha</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Acessar
                                </button>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Faça login com o Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Faça login com o Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Esqueceu sua senha?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="register.html"></a>
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
<script src="{{ asset('frontend/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('frontend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('frontend/js/sb-admin-2.min.js') }}"></script>

<!-- js ajax Login -->
<script src="{{ asset('backend/js/login.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.2.0/dist/sweetalert2.min.js"></script>