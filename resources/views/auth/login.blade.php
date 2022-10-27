
<!DOCTYPE html>
<html lang="en">


<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--meta-->
    <meta name="description" content="Quiety creative Saas, software technology, Saas agency & business Bootstrap 5 Html template. It is best and famous software company and Saas website template.">
    <meta name="author" content="ThemeTags">

    <!--favicon icon-->
    <link rel="icon" href="{{asset('assets/img/favicon.png')}}" type="image/png" sizes="16x16">

    <!--title-->
    <title>Login - Software & IT Solutions HTML Template</title>

    <!--google fonts-->
    <!--<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">-->

    <!--build:css-->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- endbuild -->

    <!--custom css start-->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!--custom css end-->

</head>

<body>

    <!--preloader start-->
    <div id="preloader">
        <div class="preloader-wrap">
            <img src="assets/img/favicon.png" alt="logo" class="img-fluid preloader-icon" />
            <div class="loading-bar"></div>
        </div>
    </div>
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">

        <!--register section start-->
        <section class="sign-up-in-section bg-dark ptb-60" style="background: url('assets/img/page-header-bg.svg')no-repeat right bottom">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5 col-md-8 col-12">
                        <a href="index.html" class="mb-4 d-block text-center"><img src="assets/img/logo-white.png" alt="logo" class="img-fluid"></a>
                        <div class="register-wrap p-5 bg-light shadow rounded-custom">
                            <h1 class="h3">Nice to Seeing You Again</h1>
                            <p class="text-muted">Please log in to access your account web-enabled methods of innovative
                                niches.</p>

                            <div class="action-btns">
                                <a href="#" class="btn google-btn bg-white shadow-sm mt-4 d-block d-flex align-items-center text-decoration-none justify-content-center">
                                    <img src="assets/img/google-icon.svg" alt="google" class="me-3">
                                    <span>Connect with Google</span>
                                </a>
                            </div>
                            <div class="position-relative d-flex align-items-center justify-content-center mt-4 py-4">
                                <span class="divider-bar"></span>
                                <h6 class="position-absolute text-center divider-text bg-light mb-0">Or</h6>
                            </div>
                            <form method="POST" class="mt-4 register-form" action="{{ route('login') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="email" class="mb-1">{{ __('Email Address') }} <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="password" class="mb-1">Password <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                                    <div class="row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Login') }}
                                                </button>

                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="font-monospace fw-medium text-center text-muted mt-3 pt-4 mb-0">Don’t have an
                                    account? <a href="{{route('register')}}" class="text-decoration-none">Sign up Today</a>
                                    <br>
                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--register section end-->
    </div>

    <!--build:js-->
    <script src="{{asset('assets/js/vendors/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/parallax.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/aos.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    <!--endbuild-->
</body>


</html>