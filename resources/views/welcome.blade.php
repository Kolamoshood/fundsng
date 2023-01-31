<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
</html>


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
    <title>Quiety - Software & IT Solutions HTML Template</title>

    <!--google fonts-->
    <!--<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">-->

    <!--build:css-->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <!-- endbuild -->

    <!--custom css start-->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <!--custom css end-->

</head>

<body>

    <!--preloader start-->
    <div id="preloader">
        <div class="preloader-wrap">
            <img src="{{asset('assets/img/favicon.png')}}" alt="logo" class="img-fluid preloader-icon" />
            <div class="loading-bar"></div>
        </div>
    </div>
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">

        <!--header section start-->
        <!--header start-->
        <header class="main-header position-absolute w-100">
            <nav class="navbar navbar-expand-xl navbar-dark sticky-header z-10">
                <div class="container d-flex align-items-center justify-content-lg-between position-relative">
                    <a href="index.html" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="assets/img/logo-white.png" alt="logo" class="img-fluid logo-white" />
                        <img src="assets/img/logo-color.png" alt="logo" class="img-fluid logo-color" />
                    </a>
                    <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop">
                        <span class="far fa-bars" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop"
                       data-bs-toggle="offcanvas" role="button"></span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse navbar-collapse justify-content-center">
                        <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Home
                                </a>
                            </li>
                            <li><a href="services.html" class="nav-link">Services</a></li>
                            <li><a href="/pricing" class="nav-link">Pricing</a></li>
                        </ul>
                    </div>

                    @if (Route::has('login'))
                    <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">                  
                            @auth
                            <a href="{{ url('/home') }}" class="btn btn-link text-decoration-none me-2">Home</a>
                            @else
                            <a href="{{ route('login') }}" class="btn btn-link text-decoration-none me-2">Log in</a>
                                @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                            @endif
                        @endauth
                        <!-- <a href="login.html" class="btn btn-link text-decoration-none me-2">Sign In</a>
                        <a href="request-demo.html" class="btn btn-primary">Get Started</a> -->
                    </div>
                    @endif

                </div>
            </nav>
            <!--offcanvas menu start-->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop">
                <div class="offcanvas-header d-flex align-items-center mt-4">
                    <a href="index.html" class="d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="assets/img/logo-color.png" alt="logo" class="img-fluid ps-2" />
                    </a>
                    <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas" aria-label="Close">
                        <i class="far fa-close"></i>
                    </button>
                </div>
                <div class="offcanvas-body z-10">
                    <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Home
                            </a>
                            <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                <div class="dropdown-grid rounded-custom width-half">
                                    <div class="dropdown-grid-item">
                                        <h6 class="drop-heading">Different Home</h6>
                                        <a href="index.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">1</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Saas Company 1</div>
                                                <p>It's for <strong>SaaS Software</strong> Company</p>
                                            </div>
                                        </a>
                                        <a href="index-2.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">2</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Saas Company 2</div>
                                                <p>Modern <strong>Saas agency</strong></p>
                                            </div>
                                        </a>
                                        <a href="index-3.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">3</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Desktop App</div>
                                                <p><strong>Web Software</strong> Company</p>
                                            </div>
                                        </a>
                                        <a href="index-4.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">4</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">App Landing</div>
                                                <p>App and <strong>Software</strong> Landing</p>
                                            </div>
                                        </a>
                                        <a href="index-5.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">5</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Software Application</div>
                                                <p>
                                                    IT solutions and <strong>SaaS Application</strong>
                                                </p>
                                            </div>
                                        </a>

                                        <a href="index-6.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">6</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Startup Agency</div>
                                                <p>Different type of <strong>Agency</strong>&lrm;</p>
                                            </div>
                                        </a>
                                        <a href="index-7.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">7</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Data Analysis</div>
                                                <p>Software &amp; <strong>Data Analysis</strong>&lrm;</p>
                                            </div>
                                        </a>
                                        <a href="index-8.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">8</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">App Landing Two</div>
                                                <p>Software &amp; <strong>App Landing Two</strong>&lrm;</p>
                                            </div>
                                        </a>
                                        <a href="index-9.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">9</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">IT Solution</div>
                                                <p>
                                                    IT solutions and <strong>SaaS Application</strong>
                                                </p>
                                            </div>
                                        </a>
                                        <a href="index-10.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">10</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Cyber Security</div>
                                                <p>Cyber Security <strong>Landing Page</strong></p>
                                            </div>
                                        </a>
                                        <a href="index-11.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">
                                        11
                                      </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Crypto Currency</div>
                                                <p><strong>Crypto Currency</strong> landing page</p>
                                            </div>
                                        </a>
                                        <a href="index-12.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">
                                        12
                                      </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Game Solutions</div>
                                                <p><strong>Game Server</strong> landing page</p>
                                            </div>
                                        </a>
                                        <a href="index-13.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">
                                        13
                                      </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Payment Gateway</div>
                                                <p><strong>Payment Gateway</strong> landing page</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="services.html" class="nav-link">Services</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Resources</a>
                            <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                <div class="dropdown-grid rounded-custom width-full-3">
                                    <div class="dropdown-grid-item">
                                        <h6 class="drop-heading">Reusable Section</h6>
                                        <a href="header.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-bars"></i></span>
                                            <div class="drop-title">Navigations</div>
                                        </a>
                                        <a href="hero-sections.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-browser"></i></span>
                                            <div class="drop-title">Hero Sections</div>
                                        </a>
                                        <a href="testimonials.html" class="dropdown-link">
                                            <span class="me-2"
                                ><i class="far fa-address-card"></i
                              ></span>
                                            <div class="drop-title">Testimonials</div>
                                        </a>
                                        <a href="call-to-action.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-bolt"></i></span>
                                            <div class="drop-title">Call to Action</div>
                                        </a>
                                        <a href="tab-style.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-eject"></i></span>
                                            <div class="drop-title">Tab Style</div>
                                        </a>
                                        <a href="services-style.html" class="dropdown-link">
                                            <span class="me-2"
                                ><i class="far fa-code-branch"></i
                              ></span>
                                            <div class="drop-title">Services Style</div>
                                        </a>
                                        <a href="work-process.html" class="dropdown-link">
                                            <span class="me-2"
                                ><i class="far fa-hourglass-start"></i
                              ></span>
                                            <div class="drop-title">Work Process</div>
                                        </a>
                                        </a>
                                        <a href="index-2.html" class="dropdown-link">
                                            <span
                                             class="demo-list bg-primary rounded text-white fw-bold"
                                         >2</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Saas Company 2</div>
                                                <p>Modern <strong>Saas agency</strong></p>

                                            </div>
                                        </a>
                                        <a href="index-3.html" class="dropdown-link">
                                            <span
                                             class="demo-list bg-primary rounded text-white fw-bold"
                                         >3</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Desktop App</div>
                                                <p><strong>Web Software</strong> Company</p>
                                            </div>
                                        </a>
                                        <a href="index-4.html" class="dropdown-link">
                                            <span
                                             class="demo-list bg-primary rounded text-white fw-bold"
                                         >4</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">App Landing</div>
                                                <p>App and <strong>Software</strong> Landing</p>
                                            </div>
                                        </a>
                                        <a href="index-5.html" class="dropdown-link">
                                            <span
                                             class="demo-list bg-primary rounded text-white fw-bold"
                                         >5</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Software Application</div>
                                                <p>
                                                    IT solutions and <strong>SaaS Application</strong>
                                                </p>
                                            </div>
                                        </a>
                                        <a href="index-6.html" class="dropdown-link">
                                            <span
                                             class="demo-list bg-primary rounded text-white fw-bold"
                                         >6</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Startup Agency</div>
                                                <p>Different type of <strong>Agency</strong>&lrm;</p>
                                            </div>
                                        </a>
                                        <a href="index-7.html" class="dropdown-link">
                                            <span
                                             class="demo-list bg-primary rounded text-white fw-bold"
                                         >8</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Data Analysis</div>
                                                <p>Software & <strong>Data Analysis</strong>&lrm;</p>
                                            </div>
                                        </a>
                                        <a href="index-8.html" class="dropdown-link">
                                            <span
                                             class="demo-list bg-primary rounded text-white fw-bold"
                                         >9</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">App Landing Two</div>
                                                <p>Software & <strong>App Landing Two</strong>&lrm;</p>
                                            </div>
                                        </a>
                                        <a href="index-9.html" class="dropdown-link">
                                            <span
                                             class="demo-list bg-primary rounded text-white fw-bold"
                                         >10</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">IT Solution</div>
                                                <p>
                                                    IT solutions and <strong>SaaS Application</strong>
                                                </p>
                                            </div>
                                        </a>
                                        <a href="index-10.html" class="dropdown-link">
                                            <span
                                             class="demo-list bg-primary rounded text-white fw-bold"
                                         >11</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Cyber Security</div>
                                                <p>Cyber Security <strong>Landing Page</strong></p>
                                            </div>
                                        </a>
                                        <a href="index-11.html" class="dropdown-link">
                                            <span
                                             class="demo-list bg-primary rounded text-white fw-bold"
                                         >
                                         12
                                         </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Crypto Currency</div>
                                                <p><strong>Crypto Currency</strong> landing page</p>
                                            </div>
                                        </a>
                                        <a href="index-13.html" class="dropdown-link">
                                            <span
                                             class="demo-list bg-primary rounded text-white fw-bold"
                                         >
                                         13
                                         </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Payment Gateway</div>
                                                <p><strong>Payment Gateway</strong> landing page</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="services.html" class="nav-link">Services</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Resources</a>
                            <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                <div class="dropdown-grid rounded-custom width-full-3">
                                    <div class="dropdown-grid-item">
                                        <h6 class="drop-heading">Reusable Section</h6>
                                        <a href="header.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-bars"></i></span>
                                            <div class="drop-title">Navigations</div>
                                        </a>
                                        <a href="hero-sections.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-browser"></i></span>
                                            <div class="drop-title">Hero Sections</div>
                                        </a>
                                        <a href="testimonials.html" class="dropdown-link">
                                            <span class="me-2"
                                         ><i class="far fa-address-card"></i
                                         ></span>
                                            <div class="drop-title">Testimonials</div>
                                        </a>
                                        <a href="call-to-action.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-bolt"></i></span>
                                            <div class="drop-title">Call to Action</div>
                                        </a>
                                        <a href="tab-style.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-eject"></i></span>
                                            <div class="drop-title">Tab Style</div>
                                        </a>
                                        <a href="services-style.html" class="dropdown-link">
                                            <span class="me-2"
                                         ><i class="far fa-code-branch"></i
                                         ></span>
                                            <div class="drop-title">Services Style</div>
                                        </a>
                                        <a href="work-process.html" class="dropdown-link">
                                            <span class="me-2"
                                         ><i class="far fa-hourglass-start"></i
                                         ></span>
                                            <div class="drop-title">Work Process</div>
                                        </a>
                                    </div>
                                    <div class="dropdown-grid-item">
                                        <h6 class="drop-heading">Reusable Section</h6>
                                        <a href="pricing-style.html" class="dropdown-link">
                                            <span class="me-2"
                                         ><i class="far fa-usd-square"></i
                                         ></span>
                                            <div class="drop-title">Pricing Style</div>
                                        </a>
                                        <a href="accordions.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-th-list"></i></span>
                                            <div class="drop-title">Accordions</div>
                                        </a>
                                        <a href="features.html" class="dropdown-link">
                                            <span class="me-2"
                                         ><i class="far fa-chart-network"></i
                                         ></span>
                                            <div class="drop-title">Features</div>
                                        </a>
                                        <a href="footers.html" class="dropdown-link">
                                            <span class="me-2"
                                         ><i class="far fa-closed-captioning"></i
                                         ></span>
                                            <div class="drop-title">Footers</div>
                                        </a>
                                        <a href="team.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-user"></i></span>
                                            <div class="drop-title">Our Team</div>
                                        </a>
                                        <a href="integration-style.html" class="dropdown-link">
                                            <span class="me-2"
                                         ><i class="far fa-paper-plane"></i
                                         ></span>
                                            <div class="drop-title">Integration Style</div>
                                        </a>
                                        <a href="blog-style.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-th-large"></i></span>
                                            <div class="drop-title">Blog Style</div>
                                        </a>
                                    </div>
                                    <div class="dropdown-grid-item last-item bg-light radius-right-side">
                                        <a href="#"><img src="assets/img/feature-img3.jpg" alt="add" class="img-fluid rounded-custom" /></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="pricing.html" class="nav-link">Pricing</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Company</a>
                            <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                <div class="dropdown-grid rounded-custom width-full">
                                    <div class="dropdown-grid-item">
                                        <h6 class="drop-heading">Useful Links</h6>
                                        <a href="about-us.html" class="dropdown-link px-0">
                                            <span class="me-2"
                                         ><i class="far fa-fingerprint"></i
                                         ></span>
                                            <div class="drop-title">About Us</div>
                                        </a>
                                        <a href="contact-us.html" class="dropdown-link px-0">
                                            <span class="me-2"
                                         ><i class="far fa-address-book"></i
                                         ></span>
                                            <div class="drop-title">Contact Us</div>
                                        </a>
                                        <a href="services.html" class="dropdown-link">
                                            <span class="me-2"
                                         ><i class="far fa-code-branch"></i
                                         ></span>
                                            <div class="drop-title">Services</div>
                                        </a>
                                        <a href="service-single.html" class="dropdown-link px-0">
                                            <span class="me-2"><i class="far fa-server"></i></span>
                                            <div class="drop-title">Services Single</div>
                                        </a>
                                        <a href="blog.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-th-large"></i></span>
                                            <div class="drop-title">Our Latest News</div>
                                        </a>
                                        <a href="blog-single.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-bars"></i></span>
                                            <div class="drop-title">News Details</div>
                                        </a>
                                        <a href="career.html" class="dropdown-link px-0">
                                            <span class="me-2"
                                         ><i class="far fa-graduation-cap"></i
                                         ></span>
                                            <div class="drop-title">Career</div>
                                        </a>
                                        <a href="career-single.html" class="dropdown-link px-0">
                                            <span class="me-2"
                                         ><i class="far fa-user-graduate"></i
                                         ></span>
                                            <div class="drop-title">Career Single</div>
                                        </a>
                                        <a href="integrations.html" class="dropdown-link">
                                            <span class="me-2"
                                         ><i class="far fa-rocket-launch"></i
                                         ></span>
                                            <div class="drop-title">Integrations</div>
                                        </a>
                                        <a href="integration-single.html" class="dropdown-link px-0">
                                            <span class="me-2"
                                         ><i class="far fa-paper-plane"></i
                                         ></span>
                                            <div class="drop-title">Integration Single</div>
                                        </a>
                                    </div>
                                    <div class="dropdown-grid-item radius-right-side bg-light">
                                        <h6 class="drop-heading">Utility Pages</h6>
                                        <a href="style-guide.html" class="dropdown-link">
                                            <span class="me-2"
                                         ><i class="far fa-code-branch"></i
                                         ></span>
                                            <div class="drop-title">Style Guide</div>
                                        </a>
                                        <a href="support.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-life-ring"></i></span>
                                            <div class="drop-title">Help Center</div>
                                        </a>
                                        <a href="support-single.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-headset"></i></span>
                                            <div class="drop-title">Help Details</div>
                                        </a>
                                        <a href="request-demo.html" class="dropdown-link">
                                            <span class="me-2"
                                         ><i class="far fa-laptop-code"></i
                                         ></span>
                                            <div class="drop-title">Request for Demo</div>
                                        </a>
                                        <a href="login.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-sign-in"></i></span>
                                            <div class="drop-title">User Login</div>
                                        </a>
                                        <a href="register.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-user-plus"></i></span>
                                            <div class="drop-title">User SignUp</div>
                                        </a>
                                        <a href="password-reset.html" class="dropdown-link">
                                            <span class="me-2"
                                         ><i class="far fa-trash-undo"></i
                                         ></span>
                                            <div class="drop-title">Recovery Account</div>
                                        </a>
                                        <a href="404.html" class="dropdown-link">
                                            <span class="me-2"
                                         ><i class="far fa-exclamation-triangle"></i
                                         ></span>
                                            <div class="drop-title">404 Page</div>
                                        </a>
                                        <a href="coming-soon.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-clock"></i></span>
                                            <div class="drop-title">Coming Soon</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="action-btns mt-4 ps-3">
                        <a href="login.html" class="btn btn-outline-primary me-2">Sign In</a>
                        <a href="request-demo.html" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
            <!--offcanvas menu end-->
        </header>
        <!--header end-->
        <!--header section end-->

        <!--hero section start-->
        <section class="hero-section ptb-120 text-white bg-dark" style="background: url('assets/img/hero-dot-bg.png')no-repeat center right">
            <div class="container">
                <div class="row justify-content-center text-center text-lg-start align-items-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="hero-content-wrap mt-5 mt-lg-0 mt-xl-0">
                            <h1 class="fw-bold display-5" data-aos="fade-up">Build Better App with Quiety Software</h1>
                            <p class="lead" data-aos="fade-up">Proactively coordinate quality quality vectors vis-a-vis supply chains. Quickly engage client-centric web services.</p>
                            <div class="action-btns mt-5" data-aos="fade-up" data-aos-delay="50">
                                <a href="request-demo.html" class="btn btn-primary me-lg-3 me-sm-3">Request Demo</a>
                                <a href="contact-us.html" class="btn btn-outline-light">Contact Us</a>
                            </div>
                            <ul class="nav subscribe-feature-list d-flex justify-content-center justify-content-lg-start w-100 mt-3" data-aos="fade-up" data-aos-delay="100">
                                <li class="nav-item">
                                    <span class="ms-0"><i class="far fa-check-circle text-primary me-2"></i>Free 14-day trial</span>
                                </li>
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>No credit card required</span>
                                </li>
                            </ul>

                            <div class="d-flex justify-content-center justify-content-lg-start mt-5" data-aos="fade-up" data-aos-delay="150">
                                <img src="assets/img/awards-01.svg" alt="awards" class="me-4 img-fluid">
                                <img src="assets/img/awards-02.svg" alt="awards" class="img-fluid">
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <div class="hero-img-wrap position-relative app-screen-bg mt-5" style="background-image: url('assets/img/shape/shape-bg-3.svg')" data-aos="fade-up" data-aos-delay="200">
                            <!--animated shape start-->
                            <ul class="position-absolute animate-element parallax-element shape-service d-none d-lg-block">
                                <li class="layer" data-depth="0.03">
                                    <img src="assets/img/color-shape/image-4.svg" alt="shape" class="img-fluid position-absolute color-shape-1">
                                </li>
                                <li class="layer" data-depth="0.02">
                                    <img src="assets/img/color-shape/feature-2.svg" alt="shape" class="img-fluid position-absolute color-shape-2 z-5">
                                </li>
                                <li class="layer" data-depth="0.03">
                                    <img src="assets/img/color-shape/feature-3.svg" alt="shape" class="img-fluid position-absolute color-shape-3">
                                </li>
                            </ul>
                            <!--animated shape end-->
                            <img src="assets/img/screen/app-screen-on-hand.png" alt="hero image" class="img-fluid position-relative z-5">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->

        <!--feature promo section start-->
        <section class="feature-section ptb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="section-heading text-center" data-aos="fade-up">
                            <h4 class="text-primary h5">Build Quality</h4>
                            <h2>Our Special Features</h2>
                            <p>Authoritatively underwhelm excellent methodologies
                                via premium expertise competitive than open-source
                                imperatives disseminate. </p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="position-relative" data-aos="fade-up" data-aos-delay="50">
                            <div class="cta-card rounded-custom text-center custom-shadow p-5 bg-white mt-4 mt-lg-0 mt-md-0 z-2">
                                <div class="feature-icon d-inline-block bg-primary-soft rounded-circle mb-32">
                                    <i class="fad fa-shield-alt text-primary fa-2x"></i>
                                </div>
                                <h3 class="h5">Quality First</h3>
                                <p class="mb-0">Professionally integrate high standards applications before user friendly leadership skills.</p>
                            </div>
                            <!--pattern start-->
                            <div class="dot-shape-bg position-absolute z--1 left--40 top--40">
                                <img src="assets/img/shape/dot-big-square.svg" alt="shape">
                            </div>
                            <!--pattern end-->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="position-relative" data-aos="fade-up" data-aos-delay="100">
                            <div class="cta-card rounded-custom text-center custom-shadow p-5 bg-white mt-4 mt-lg-0 mt-md-0">
                                <div class="feature-icon d-inline-block bg-danger-soft rounded-circle mb-32">
                                    <i class="fad fa-comment-alt-smile text-danger fa-2x"></i>
                                </div>
                                <h3 class="h5">Communication</h3>
                                <p class="mb-0">Professionally integrate high standards applications before user friendly leadership skills.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="position-relative" data-aos="fade-up" data-aos-delay="150">
                            <div class="cta-card rounded-custom text-center custom-shadow p-5 bg-white mt-4 mt-lg-0">
                                <div class="feature-icon d-inline-block bg-success-soft rounded-circle mb-32">
                                    <i class="fad fa-grin-stars text-success fa-2x"></i>
                                </div>
                                <h3 class="h5">Reliability</h3>
                                <p class="mb-0">Professionally integrate high standards applications before user friendly leadership skills.</p>
                            </div>
                            <!--pattern start-->
                            <div class="dot-shape-bg position-absolute z--1 right--40 bottom--40">
                                <img src="assets/img/shape/dot-big-square.svg" alt="shape">
                            </div>
                            <!--pattern end-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--feature promo section end-->

        <!--feature section start-->
        <section class="feature-section pt-60 pb-120">
            <div class="container">
                <div class="row align-items-lg-center justify-content-between">
                    <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
                        <div class="mb-4" data-aos="fade-up">
                            <h2>Experience your Product with Integration</h2>
                            <p>Conveniently drive stand-alone total linkage for process-centric content enthusiastically administrate. Dramatically grow high standards in customer service for applications.</p>
                        </div>
                        <ul class="list-unstyled d-flex flex-wrap list-two-col mt-5" data-aos="fade-up">
                            <li>
                                <span class="d-block mb-4"><i class="fal fa-user fa-2x text-primary"></i></span>
                                <h3 class="h5">Customer analysis</h3>
                                <p>Objectively productize exceptional via customized.</p>
                            </li>
                            <li>
                                <span class="d-block mb-4"><i class="fal fa-watch fa-2x text-primary"></i></span>
                                <h3 class="h5">Real time metrics</h3>
                                <p>Interactively integrate extensible users maximizing resource. </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="pr-lg-4 position-relative" data-aos="fade-up">
                            <!--animated shape start-->
                            <ul class="position-absolute animate-element parallax-element shape-service z--1 hide-medium">
                                <li class="layer" data-depth="0.03">
                                    <img src="assets/img/color-shape/image-2.svg" alt="shape" class="img-fluid position-absolute color-shape-1">
                                </li>
                                <li class="layer" data-depth="0.02">
                                    <img src="assets/img/color-shape/feature-2.svg" alt="shape" class="img-fluid position-absolute color-shape-2 z-5">
                                </li>
                                <li class="layer" data-depth="0.03">
                                    <img src="assets/img/color-shape/feature-3.svg" alt="shape" class="img-fluid position-absolute color-shape-3">
                                </li>
                            </ul>
                            <!--animated shape end-->
                            <div class="bg-light text-center rounded-custom overflow-hidden pt-5 px-3 px-lg-5 mx-lg-auto">
                                <div class="mb-5">
                                    <h3 class="fw-medium h4">Best options to choose a Quiety, to make your own app and grow your business</h3>
                                </div>
                                <div class="position-relative w-75 mx-auto">
                                    <img class="position-relative z-2 w-100 h-auto" src="assets/img/screen/half-iphone.svg" alt="Image Description">
                                    <img class="position-absolute half-screen" src="assets/img/screen/app-screen-1.jpg" alt="Image Description">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="feature-section pt-60 pb-120">
            <div class="container">
                <div class="row align-items-lg-center justify-content-between">
                    <div class="col-lg-5 mb-7 mb-lg-0">
                        <div class="mb-4" data-aos="fade-up">
                            <h2>View Your Business Growth use App</h2>
                            <p>Enthusiastically administrate robust initiatives quickly unleash collaborative with client-focused paradigms. Re-engineer granular innovation rather than best-of-breed processes. </p>
                        </div>
                        <ul class="list-unstyled d-flex flex-wrap list-two-col mt-5" data-aos="fade-up">
                            <li>
                                <span class="d-block mb-4"><i class="fal fa-fingerprint fa-2x text-primary"></i></span>
                                <h3 class="h5">Humans on hand</h3>
                                <p>Objectively exceptional via customized via expertise.</p>
                            </li>
                            <li>
                                <span class="d-block mb-4"><i class="fal fa-shield-check fa-2x text-primary"></i></span>
                                <h3 class="h5">Strong privacy</h3>
                                <p>Interactively integrate extensible users resource. </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="pr-lg-4 position-relative" data-aos="fade-up">
                            <!--animated shape start-->
                            <ul class="position-absolute animate-element parallax-element shape-service z--1 hide-medium">
                                <li class="layer" data-depth="0.03">
                                    <img src="assets/img/color-shape/image-3.svg" alt="shape" class="img-fluid position-absolute color-shape-1">
                                </li>
                                <li class="layer" data-depth="0.02">
                                    <img src="assets/img/color-shape/feature-1.svg" alt="shape" class="img-fluid position-absolute color-shape-2 z-5">
                                </li>
                                <li class="layer" data-depth="0.03">
                                    <img src="assets/img/color-shape/feature-3.svg" alt="shape" class="img-fluid position-absolute color-shape-3">
                                </li>
                            </ul>
                            <!--animated shape end-->
                            <div class="bg-light text-center shadow-sm rounded-custom overflow-hidden pt-5 px-3 px-lg-5 mx-lg-auto">
                                <div class="mb-5">
                                    <h3 class="fw-medium h4">We deliver best quality app for your business</h3>
                                </div>
                                <div class="position-relative w-75 mx-auto">
                                    <img class="position-relative z-2 w-100 h-auto" src="assets/img/screen/half-iphone.svg" alt="Image Description">
                                    <img class="position-absolute half-screen" src="assets/img/screen/app-screen-2.jpg" alt="Image Description">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--feature section end-->

        <!--our work process start-->
        <section class="process-section bg-light ptb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="section-heading text-center" data-aos="fade-up">
                            <h4 class="h5 text-primary">Instant Setup</h4>
                            <h2>Simple & Effortless Process</h2>
                            <p>Phosfluorescently enabled growth strategies after worldwide proactive partnerships cooperative convergence via
                                orthogonal experiences. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="setup-process-wrap">
                            <ul class="setup-process-list list-unstyled text-center mb-0">
                                <li class="setup-process-item py-4 px-2" data-aos="fade-up">
                                    <div class="setup-process-icon mb-4">
                                        <i class="fal fa-download fa-2x text-primary"></i>
                                    </div>
                                    <span class="process-tag badge bg-primary-soft py-1 px-3 small fw-bold text-primary rounded-custom">Step 1</span>
                                    <h6 class="mt-3 mb-0">Download the app</h6>
                                </li>
                                <li class="setup-process-item py-4 px-2" data-aos="fade-up" data-aos-delay="50">
                                    <div class="setup-process-icon mb-4">
                                        <i class="fal fa-street-view fa-2x text-primary"></i>
                                    </div>
                                    <span class="process-tag badge bg-primary-soft py-1 px-3 small fw-bold text-primary rounded-custom">Step 2</span>
                                    <h6 class="mt-3 mb-0">Invite teammates</h6>
                                </li>
                                <li class="setup-process-item py-4 px-2" data-aos="fade-up" data-aos-delay="100">
                                    <div class="setup-process-icon mb-4">
                                        <i class="fal fa-bezier-curve fa-2x text-primary"></i>
                                    </div>
                                    <span class="process-tag badge bg-primary-soft py-1 px-3 small fw-bold text-primary rounded-custom">Step 3</span>
                                    <h6 class="mt-3 mb-0">Create workspace</h6>
                                </li>
                                <li class="setup-process-item py-4 px-2" data-aos="fade-up" data-aos-delay="150">
                                    <div class="setup-process-icon mb-4">
                                        <i class="fal fa-user-shield fa-2x text-primary"></i>
                                    </div>
                                    <span class="process-tag badge bg-primary-soft py-1 px-3 small fw-bold text-primary rounded-custom">Step 4</span>
                                    <h6 class="mt-3 mb-0">Track performance</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--our work process end-->

        <!--pricing section start-->
        <section class="pricing-section position-relative overflow-hidden bg-dark text-white pt-120" style="background: url('assets/img/page-header-bg.svg')no-repeat center center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="section-heading text-center z-5 position-relative" data-aos="fade-up">
                            <h4 class="h5 text-warning">Plans &amp; Pricing</h4>
                            <h2>Check Our Valuable Price</h2>
                            <p>Objectively market-driven intellectual capital rather than covalent best practices facilitate strategic information before innovation. </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="pricing-content-wrap mb--100 bg-white rounded-custom shadow-lg border d-fle z-10 position-relative">
                            <div class="price-feature-col pricing-feature-info left-radius bg-primary-soft p-5">
                                <ul class="list-unstyled pricing-feature-list pricing-included-list mb-0" data-aos="fade-left">
                                    <li class="py-1"><i class="fas fa-check-circle text-primary me-2"></i> Unlimited domains</li>
                                    <li class="py-1"><i class="fas fa-check-circle text-primary me-2"></i>Unlimited notifications</li>
                                    <li class="py-1"><i class="fas fa-check-circle text-primary me-2"></i> 10,000 unique visitors</li>
                                    <li class="py-1"><i class="fas fa-check-circle text-primary me-2"></i> Conversion analytics</li>
                                    <li class="py-1"><i class="fas fa-check-circle text-primary me-2"></i> Conversion analytics</li>
                                    <li class="py-1"><i class="fas fa-check-circle text-primary me-2"></i> Live chat support</li>
                                    <li class="py-1"><i class="fas fa-check-circle text-primary me-2"></i> Recent activity notification</li>
                                    <li class="py-1"><i class="fas fa-check-circle text-primary me-2"></i> Live visitor count notification</li>
                                    <li class="py-1"><i class="fas fa-check-circle text-primary me-2"></i> Send data to analytics tools</li>
                                </ul>
                            </div>
                            <div class="price-feature-col pricing-action-info p-5" data-aos="fade-right">
                                <ul class="nav nav-pills mb-4 pricing-tab-list" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Monthly</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" class="">Yearly</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <h3 class="h5">Pro Monthly</h3>
                                        <p>Professionally integrate principle-centered intellectual capital whereas equity.</p>
                                        <div class="pricing-price mt-5">
                                            <h4 class="h1 fw-bold">$49 <span>/Month</span></h4>
                                        </div>
                                        <a href="request-demo.html" class="btn btn-primary mt-3">Start 14-Days Trial</a>
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <h3 class="h5">Pro Yearly</h3>
                                        <p>Uniquely engineer prospective alignments without clicks-and-mortar innovation.</p>
                                        <div class="pricing-price mt-5">
                                            <h4 class="h1 fw-bold">$89 <span>/Year</span></h4>
                                        </div>
                                        <a href="request-demo.html" class="btn btn-primary mt-3">Start 14-Days Trial</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-circle rounded-circle circle-shape-1 position-absolute bg-warning left-5"></div>
            <div class="white-space-100 bg-white w-100"></div>
        </section>
        <!--pricing section end-->

        <!--faq section start-->
        <section class="faq-section ptb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="section-heading text-center" data-aos="fade-up">
                            <h4 class="h5 text-primary">FAQ</h4>
                            <h2>Frequently Asked Questions</h2>
                            <p>Efficiently network cross-unit paradigms for premier technologies scale 24/7 paradigms for process-centric data interoperable.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="faq-content-wrap d-flex mb-5" data-aos="fade-up" data-aos-delay="50">
                            <span class="faq-icon me-3"><i class="fal fa-copyright text-primary"></i></span>
                            <div class="faq-info">
                                <h5>Which license do I need to use an item in a commercial?</h5>
                                <p class="mb-0">Collaboratively iterate high-payoff content via high standards in technology.
                                    economically sound methodologies via corporate.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10">
                        <div class="faq-content-wrap d-flex mb-5" data-aos="fade-up" data-aos-delay="100">
                            <span class="faq-icon me-3"><i class="fal fa-credit-card text-primary"></i></span>
                            <div class="faq-info">
                                <h5>What payment methods do you accept?</h5>
                                <p class="mb-0">Globally e-enable plug-and-play imperatives and seamless e-markets. Intrinsicly
                                    negotiate resource maximizing e-tailers after just in time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10">
                        <div class="faq-content-wrap d-flex mb-5" data-aos="fade-up" data-aos-delay="150">
                            <span class="faq-icon me-3"><i class="fal fa-clipboard-list-check text-primary"></i></span>
                            <div class="faq-info">
                                <h5>How does the free trial work and what is included?</h5>
                                <p class="mb-0">Economically sound supply chains through distributed
                                    strategic theme areas. Appropriately cultivate innovative web-readiness whereas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10">
                        <div class="faq-content-wrap d-flex mb-5" data-aos="fade-up" data-aos-delay="200">
                            <span class="faq-icon me-3"><i class="fal fa-microphone text-primary"></i></span>
                            <div class="faq-info">
                                <h5>What happens after my free trial ends?</h5>
                                <p class="mb-0">Progressively pontificate quality vectors without resource maximizing
                                    bandwidth. Conveniently maximize turnkey testing procedures for compelling.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10">
                        <div class="faq-content-wrap d-flex mb-5" data-aos="fade-up" data-aos-delay="250">
                            <span class="faq-icon me-3"><i class="fal fa-play-circle text-primary"></i></span>
                            <div class="faq-info">
                                <h5>Why do you ask for a video introduction?</h5>
                                <p class="mb-0">Maximizing e-enable imperatives and seamless e-markets. Intrinsicly
                                    negotiate resource quality vectors without after just in time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10">
                        <div class="faq-content-wrap d-flex mb-5" data-aos="fade-up" data-aos-delay="300">
                            <span class="faq-icon me-3"><i class="fal fa-code-branch text-primary"></i></span>
                            <div class="faq-info">
                                <h5>Can I work from anywhere?</h5>
                                <p class="mb-0">Conveniently maximize turnkey sound supply chains through distributed
                                    strategic theme areas. Appropriately cultivate innovative web-readiness whereas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="bg-dark shadow-lg p-5 rounded-custom mt-lg-5" data-aos="fade-up" data-aos-delay="250">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-7">
                            <div class="cta-content">
                                <h3 class="mb-2">Have More Questions?</h3>
                                <p class="mb-lg-0 mb-xl-0">Drop us a note and we’ll get back to you soon</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="text-lg-end">
                                <a href="contact-us.html" class="btn btn-light">Get in Touch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--faq section end-->

        <!--customer review tab section start-->
        <section class="testimonial-section ptb-120 bg-light">
            <div class="container">
                <div class="row justify-content-center align-content-center">
                    <div class="col-md-10 col-lg-6">
                        <div class="section-heading text-center" data-aos="fade-up">
                            <h4 class="h5 text-primary">Testimonial</h4>
                            <h2>What They Say About Us</h2>
                            <p>Uniquely promote adaptive quality vectors rather than stand-alone e-markets pontificate alternative architectures with accurate schemas.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="position-relative w-100" data-aos="fade-up" data-aos-delay="50">
                            <div class="swiper testimonialSwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="border border-2 p-5 rounded-custom position-relative">
                                            <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                            <div class="d-flex mb-32 align-items-center">
                                                <img src="assets/img/testimonial/1.jpg" class="img-fluid me-3 rounded" width="60" alt="user">
                                                <div class="author-info">
                                                    <h6 class="mb-0">Mr.Rupan Oberoi</h6>
                                                    <small>Founder and CEO at Amaara Herbs</small>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>The Best Template You Got to Have it!</h6>
                                                Globally network long-term high-impact schemas vis-a-vis distinctive e-commerce
                                                cross-media infrastructures rather than ethical
                                            </blockquote>
                                            <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            </ul>
                                            <img src="assets/img/testimonial/quotes.svg" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="border border-2 p-5 rounded-custom position-relative">
                                            <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                            <div class="d-flex mb-32 align-items-center">
                                                <img src="assets/img/testimonial/3.jpg" class="img-fluid me-3 rounded" width="60" alt="user">
                                                <div class="author-info">
                                                    <h6 class="mb-0">Oberoi R.</h6>
                                                    <small>CEO at Herbs</small>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>Embarrassed by the First Version.</h6>
                                                Dynamically create innovative core competencies with effective best
                                                practices promote innovative infrastructures.
                                            </blockquote>
                                            <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            </ul>
                                            <img src="assets/img/testimonial/quotes.svg" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="border border-2 p-5 rounded-custom position-relative">
                                            <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                            <div class="d-flex mb-32 align-items-center">
                                                <img src="assets/img/testimonial/2.jpg" class="img-fluid me-3 rounded" width="60" alt="user">
                                                <div class="author-info">
                                                    <h6 class="mb-0">Mr.Rupan Oberoi</h6>
                                                    <small>Founder and CEO</small>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>Amazing Quiety template!</h6>
                                                Appropriately negotiate interactive niches rather than parallel strategic theme
                                                incubate premium total linkage areas.
                                            </blockquote>
                                            <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            </ul>
                                            <img src="assets/img/testimonial/quotes.svg" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="border border-2 p-5 rounded-custom position-relative">
                                            <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                            <div class="d-flex mb-32 align-items-center">
                                                <img src="assets/img/testimonial/4.jpg" class="img-fluid me-3 rounded" width="60" alt="user">
                                                <div class="author-info">
                                                    <h6 class="mb-0">Joan Dho</h6>
                                                    <small>Founder and CTO</small>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>Best Template for SAAS Company!</h6>
                                                Dynamically create innovative core competencies with effective best
                                                practices promote innovative infrastructures.
                                            </blockquote>
                                            <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            </ul>
                                            <img src="assets/img/testimonial/quotes.svg" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="border border-2 p-5 rounded-custom position-relative">
                                            <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                            <div class="d-flex mb-32 align-items-center">
                                                <img src="assets/img/testimonial/5.jpg" class="img-fluid me-3 rounded" width="60" alt="user">
                                                <div class="author-info">
                                                    <h6 class="mb-0">Ranu Mondal</h6>
                                                    <small>Lead Developer</small>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>It is undeniably good!</h6>
                                                Rapidiously supply client-centric e-markets and maintainable processes
                                                progressively engineer
                                            </blockquote>
                                            <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            </ul>
                                            <img src="assets/img/testimonial/quotes.svg" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <span class="swiper-button-next"></span>
                            <span class="swiper-button-prev"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--customer review tab section end-->

        <!--contact us section start-->
        <section class="contact-us ptb-120 position-relative overflow-hidden">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-12">
                        <div class="section-heading" data-aos="fade-up">
                            <h4 class="h5 text-primary">Quick Support</h4>
                            <h2>Get in Touch Today!</h2>
                            <p>Proactively deliver seamless core competencies with scalable. Completely fabricate transparent
                                paradigms. </p>
                        </div>
                        <div class="row justify-content-between pb-5">
                            <div class="col-sm-6 mb-4 mb-md-0 mb-lg-0" data-aos="fade-up" data-aos-delay="50">
                                <div class="icon-box d-inline-block rounded-circle bg-primary-soft">
                                    <i class="fas fa-phone fa-2x text-primary"></i>
                                </div>
                                <div class="contact-info">
                                    <h5>Call Us</h5>
                                    <p>Questions about our product or pricing? Call for support</p>
                                    <a href="tel:(415)231-59687" class="read-more-link text-decoration-none"><i
                                            class="far fa-phone me-2"></i> (415)231-59687</a>
                                </div>
                            </div>
                            <div class="col-sm-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon-box d-inline-block rounded-circle bg-danger-soft">
                                    <i class="fas fa-comment-alt-lines fa-2x text-danger"></i>
                                </div>
                                <div class="contact-info">
                                    <h5>Chat Us</h5>
                                    <p>Our support will help you from
                                        <strong>9am to 5pm EST.</strong>
                                    </p>
                                    <a href="#" class="read-more-link text-decoration-none"><i
                                            class="far fa-comment-alt-dots me-2"></i> Live Chat Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-7 col-md-12">
                        <div class="register-wrap p-5 bg-white shadow rounded-custom position-relative" data-aos="fade-up" data-aos-delay="150">
                            <form action="#" class="register-form position-relative z-5">
                                <h3 class="mb-5 fw-medium">Fill out the form and we'll be in touch as soon as
                                    possible.</h3>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Name" aria-label="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" placeholder="Email" aria-label="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Company website" aria-label="company-website">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" placeholder="Work email" aria-label="work-Email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <select class="form-control form-select" name="budget" id="budget" required="" data-msg="Please select your budget.">
                                                <option value="" selected="" disabled="">Budget</option>
                                                <option value="budget1">None, just getting started</option>
                                                <option value="budget1">Less than $20,000</option>
                                                <option value="budget1">$20,000 to $50,000</option>
                                                <option value="budget1">$50,000 to $100,000</option>
                                                <option value="budget2">$100,000 to $500,000</option>
                                                <option value="budget3">More than $500,000</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <select class="form-control form-select" name="country" id="country" required="" data-msg="Please select your country.">
                                                <option value="" selected="" disabled="">Country</option>
                                                <option value="AF">Afghanistan</option>
                                                <option value="AX">Åland Islands</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antarctica</option>
                                                <option value="AG">Antigua and Barbuda</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">Australia</option>
                                                <option value="AT">Austria</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BY">Belarus</option>
                                                <option value="BE">Belgium</option>
                                                <option value="BZ">Belize</option>
                                                <option value="BJ">Benin</option>
                                                <option value="BM">Bermuda</option>
                                                <option value="BT">Bhutan</option>
                                                <option value="BO">Bolivia, Plurinational State of</option>
                                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                <option value="BA">Bosnia and Herzegovina</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BV">Bouvet Island</option>
                                                <option value="BR">Brazil</option>
                                                <option value="IO">British Indian Ocean Territory</option>
                                                <option value="BN">Brunei Darussalam</option>
                                                <option value="BG">Bulgaria</option>
                                                <option value="BF">Burkina Faso</option>
                                                <option value="BI">Burundi</option>
                                                <option value="KH">Cambodia</option>
                                                <option value="CM">Cameroon</option>
                                                <option value="CA">Canada</option>
                                                <option value="CV">Cape Verde</option>
                                                <option value="KY">Cayman Islands</option>
                                                <option value="CF">Central African Republic</option>
                                                <option value="TD">Chad</option>
                                                <option value="CL">Chile</option>
                                                <option value="CN">China</option>
                                                <option value="CX">Christmas Island</option>
                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                <option value="CO">Colombia</option>
                                                <option value="KM">Comoros</option>
                                                <option value="CG">Congo</option>
                                                <option value="CD">Congo, the Democratic Republic of the</option>
                                                <option value="CK">Cook Islands</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="CI">Côte d'Ivoire</option>
                                                <option value="HR">Croatia</option>
                                                <option value="CU">Cuba</option>
                                                <option value="CW">Curaçao</option>
                                                <option value="CY">Cyprus</option>
                                                <option value="CZ">Czech Republic</option>
                                                <option value="DK">Denmark</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="DM">Dominica</option>
                                                <option value="DO">Dominican Republic</option>
                                                <option value="EC">Ecuador</option>
                                                <option value="EG">Egypt</option>
                                                <option value="SV">El Salvador</option>
                                                <option value="GQ">Equatorial Guinea</option>
                                                <option value="ER">Eritrea</option>
                                                <option value="EE">Estonia</option>
                                                <option value="ET">Ethiopia</option>
                                                <option value="FK">Falkland Islands (Malvinas)</option>
                                                <option value="FO">Faroe Islands</option>
                                                <option value="FJ">Fiji</option>
                                                <option value="FI">Finland</option>
                                                <option value="FR">France</option>
                                                <option value="GF">French Guiana</option>
                                                <option value="PF">French Polynesia</option>
                                                <option value="TF">French Southern Territories</option>
                                                <option value="GA">Gabon</option>
                                                <option value="GM">Gambia</option>
                                                <option value="GE">Georgia</option>
                                                <option value="DE">Germany</option>
                                                <option value="GH">Ghana</option>
                                                <option value="GI">Gibraltar</option>
                                                <option value="GR">Greece</option>
                                                <option value="GL">Greenland</option>
                                                <option value="GD">Grenada</option>
                                                <option value="GP">Guadeloupe</option>
                                                <option value="GU">Guam</option>
                                                <option value="GT">Guatemala</option>
                                                <option value="GG">Guernsey</option>
                                                <option value="GN">Guinea</option>
                                                <option value="GW">Guinea-Bissau</option>
                                                <option value="GY">Guyana</option>
                                                <option value="HT">Haiti</option>
                                                <option value="HM">Heard Island and McDonald Islands</option>
                                                <option value="VA">Holy See (Vatican City State)</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HK">Hong Kong</option>
                                                <option value="HU">Hungary</option>
                                                <option value="IS">Iceland</option>
                                                <option value="IN">India</option>
                                                <option value="ID">Indonesia</option>
                                                <option value="IR">Iran, Islamic Republic of</option>
                                                <option value="IQ">Iraq</option>
                                                <option value="IE">Ireland</option>
                                                <option value="IM">Isle of Man</option>
                                                <option value="IL">Israel</option>
                                                <option value="IT">Italy</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JP">Japan</option>
                                                <option value="JE">Jersey</option>
                                                <option value="JO">Jordan</option>
                                                <option value="KZ">Kazakhstan</option>
                                                <option value="KE">Kenya</option>
                                                <option value="KI">Kiribati</option>
                                                <option value="KP">Korea, Democratic People's Republic of</option>
                                                <option value="KR">Korea, Republic of</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="LA">Lao People's Democratic Republic</option>
                                                <option value="LV">Latvia</option>
                                                <option value="LB">Lebanon</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LY">Libya</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="MO">Macao</option>
                                                <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                                <option value="MG">Madagascar</option>
                                                <option value="MW">Malawi</option>
                                                <option value="MY">Malaysia</option>
                                                <option value="MV">Maldives</option>
                                                <option value="ML">Mali</option>
                                                <option value="MT">Malta</option>
                                                <option value="MH">Marshall Islands</option>
                                                <option value="MQ">Martinique</option>
                                                <option value="MR">Mauritania</option>
                                                <option value="MU">Mauritius</option>
                                                <option value="YT">Mayotte</option>
                                                <option value="MX">Mexico</option>
                                                <option value="FM">Micronesia, Federated States of</option>
                                                <option value="MD">Moldova, Republic of</option>
                                                <option value="MC">Monaco</option>
                                                <option value="MN">Mongolia</option>
                                                <option value="ME">Montenegro</option>
                                                <option value="MS">Montserrat</option>
                                                <option value="MA">Morocco</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="MM">Myanmar</option>
                                                <option value="NA">Namibia</option>
                                                <option value="NR">Nauru</option>
                                                <option value="NP">Nepal</option>
                                                <option value="NL">Netherlands</option>
                                                <option value="NC">New Caledonia</option>
                                                <option value="NZ">New Zealand</option>
                                                <option value="NI">Nicaragua</option>
                                                <option value="NE">Niger</option>
                                                <option value="NG">Nigeria</option>
                                                <option value="NU">Niue</option>
                                                <option value="NF">Norfolk Island</option>
                                                <option value="MP">Northern Mariana Islands</option>
                                                <option value="NO">Norway</option>
                                                <option value="OM">Oman</option>
                                                <option value="PK">Pakistan</option>
                                                <option value="PW">Palau</option>
                                                <option value="PS">Palestinian Territory, Occupied</option>
                                                <option value="PA">Panama</option>
                                                <option value="PG">Papua New Guinea</option>
                                                <option value="PY">Paraguay</option>
                                                <option value="PE">Peru</option>
                                                <option value="PH">Philippines</option>
                                                <option value="PN">Pitcairn</option>
                                                <option value="PL">Poland</option>
                                                <option value="PT">Portugal</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="QA">Qatar</option>
                                                <option value="RE">Réunion</option>
                                                <option value="RO">Romania</option>
                                                <option value="RU">Russian Federation</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="BL">Saint Barthélemy</option>
                                                <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                <option value="KN">Saint Kitts and Nevis</option>
                                                <option value="LC">Saint Lucia</option>
                                                <option value="MF">Saint Martin (French part)</option>
                                                <option value="PM">Saint Pierre and Miquelon</option>
                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                <option value="WS">Samoa</option>
                                                <option value="SM">San Marino</option>
                                                <option value="ST">Sao Tome and Principe</option>
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="SN">Senegal</option>
                                                <option value="RS">Serbia</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SG">Singapore</option>
                                                <option value="SX">Sint Maarten (Dutch part)</option>
                                                <option value="SK">Slovakia</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SB">Solomon Islands</option>
                                                <option value="SO">Somalia</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                <option value="SS">South Sudan</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SJ">Svalbard and Jan Mayen</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="SE">Sweden</option>
                                                <option value="CH">Switzerland</option>
                                                <option value="SY">Syrian Arab Republic</option>
                                                <option value="TW">Taiwan, Province of China</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TZ">Tanzania, United Republic of</option>
                                                <option value="TH">Thailand</option>
                                                <option value="TL">Timor-Leste</option>
                                                <option value="TG">Togo</option>
                                                <option value="TK">Tokelau</option>
                                                <option value="TO">Tonga</option>
                                                <option value="TT">Trinidad and Tobago</option>
                                                <option value="TN">Tunisia</option>
                                                <option value="TR">Turkey</option>
                                                <option value="TM">Turkmenistan</option>
                                                <option value="TC">Turks and Caicos Islands</option>
                                                <option value="TV">Tuvalu</option>
                                                <option value="UG">Uganda</option>
                                                <option value="UA">Ukraine</option>
                                                <option value="AE">United Arab Emirates</option>
                                                <option value="GB">United Kingdom</option>
                                                <option value="US">United States</option>
                                                <option value="UM">United States Minor Outlying Islands</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                <option value="VN">Viet Nam</option>
                                                <option value="VG">Virgin Islands, British</option>
                                                <option value="VI">Virgin Islands, U.S.</option>
                                                <option value="WF">Wallis and Futuna</option>
                                                <option value="EH">Western Sahara</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group mb-3">
                                            <textarea class="form-control" placeholder="Tell us more about your project, needs and budget" style="height: 120px"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                            <label class="form-check-label small" for="flexCheckChecked">
                                                Yes, I'd like to receive occasional marketing emails from us. I have the
                                                right to opt out at any time.
                                                <a href="#"> View privacy policy</a>.
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mt-4 d-block w-100">Get Started
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" bg-dark position-absolute bottom-0 h-25 bottom-0 left-0 right-0 z--1 py-5" style="background: url('assets/img/shape/dot-dot-wave-shape.svg')no-repeat center top">
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light left-5"></div>
                <div class="bg-circle rounded-circle circle-shape-1 position-absolute bg-warning right-5"></div>
            </div>
        </section>
        <!--contact us section end-->

        <!--footer section start-->
        <footer class="footer-section">
            <!--footer top start-->
            <!--for light footer add .footer-light class and for dark footer add .bg-dark .text-white class-->
            <div class="footer-top footer-light ptb-120">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-8 col-lg-4 mb-md-4 mb-lg-0">
                            <div class="footer-single-col">
                                <div class="footer-single-col mb-4">
                                    <img src="assets/img/logo-white.png" alt="logo" class="img-fluid logo-white">
                                    <img src="assets/img/logo-color.png" alt="logo" class="img-fluid logo-color">
                                </div>
                                <p>Our latest news, articles, and resources, we will sent to
                                    your inbox weekly.</p>

                                <form class="newsletter-form position-relative d-block d-lg-flex d-md-flex">
                                    <input type="text" class="input-newsletter form-control me-2" placeholder="Enter your email" name="email" required="" autocomplete="off">
                                    <input type="submit" value="Subscribe" data-wait="Please wait..." class="btn btn-primary mt-3 mt-lg-0 mt-md-0">
                                </form>
                                <div class="ratting-wrap mt-4">
                                    <h6 class="mb-0">10/10 Overall rating</h6>
                                    <ul class="list-unstyled rating-list list-inline mb-0">
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-7 mt-4 mt-md-0 mt-lg-0">
                            <div class="row">
                                <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>Primary Pages</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li><a href="index.html" class="text-decoration-none">Home</a></li>
                                            <li><a href="about-us.html" class="text-decoration-none">About Us</a></li>
                                            <li><a href="services.html" class="text-decoration-none">Services</a></li>
                                            <li><a href="career.html" class="text-decoration-none">Career</a></li>
                                            <li><a href="integrations.html" class="text-decoration-none">Integrations</a>
                                            </li>
                                            <li><a href="integration-single.html" class="text-decoration-none">Integration Single</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>Pages</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li><a href="pricing.html" class="text-decoration-none">Pricing</a></li>
                                            <li><a href="blog.html" class="text-decoration-none">Blog</a></li>
                                            <li><a href="blog-single.html" class="text-decoration-none">Blog Details</a></li>
                                            <li><a href="contact-us.html" class="text-decoration-none">Contact</a></li>
                                            <li><a href="career-single.html" class="text-decoration-none">Career Single</a>
                                            </li>
                                            <li><a href="service-single.html" class="text-decoration-none">Services
                                                    Single</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>Template</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li><a href="contact-us.html" class="text-decoration-none">Contact</a></li>
                                            <li><a href="support.html" class="text-decoration-none">Support</a></li>
                                            <li><a href="support-single.html" class="text-decoration-none">Support Single</a></li>
                                            <li><a href="team.html" class="text-decoration-none">Our Team</a></li>
                                            <li><a href="client-review.html" class="text-decoration-none">Customer Review</a></li>
                                            <li><a href="career-single.html" class="text-decoration-none">Career Single</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--footer top end-->

            <!--footer bottom start-->
            <div class="footer-bottom footer-light py-4">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-7 col-lg-7">
                            <div class="copyright-text">
                                <p class="mb-lg-0 mb-md-0">&copy; 2021 Quiety Rights Reserved. Designed By <a href="https://themetags.com/" class="text-decoration-none">ThemeTags</a></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="footer-single-col text-start text-lg-end text-md-end">
                                <ul class="list-unstyled list-inline footer-social-list mb-0">
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer bottom end-->
        </footer>
        <!--footer section end-->

    </div>



    
    <script src="{{asset('assets/js/vendors/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendors/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/parallax.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/aos.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    <!--endbuild-->
</body>


</html>