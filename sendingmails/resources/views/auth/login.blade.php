<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />


    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/dashboard/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="/dashboard/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/dashboard/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/dashboard/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/dashboard/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/dashboard/assets/css/styles.min.css" />
    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="/dashboard/assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="/dashboard/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/dashboard/assets/js/config.js"></script>

    <title>{{ env('APP_NAME') }}</title>
</head>

<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
        class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
                <div class="col-md-8 col-lg-6 col-xxl-3">
                    <div class="card mb-0">
                        <div class="card-body">
                            <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                <img src="/dashboard/assets/images/logos/seodashlogo.png" alt="">
                            </a>
                            <p class="text-center">Your Social Campaigns</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Username</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        :value="old('email')" required autofocus autocomplete="username"
                                        aria-describedby="emailHelp">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        autocomplete="current-password">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input primary" type="checkbox" value=""
                                            id="flexCheckChecked" checked>
                                        <label class="form-check-label text-dark" for="flexCheckChecked">
                                            Remeber this Device
                                        </label>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a class="text-primary fw-bold" href="{{ route('password.request') }}">Forgot
                                            Password ?</a>
                                    @endif
                                </div>
                                <x-primary-button class="btn btn-primary w-100 py-8 fs-4 mb-4">
                                    {{ __('Log in') }}
                                </x-primary-button>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="fs-4 mb-0 fw-bold">New to SeoDash?</p>
                                    <a class="text-primary fw-bold ms-2" href="{{ route('register') }}">Create an
                                        account</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<body>

</body>

</html>
