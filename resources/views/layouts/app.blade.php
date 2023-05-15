<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Palingenesis') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="{{ asset('css/green-theme.css') }}" rel="stylesheet">
    <link href="resources\css\app.css" rel="stylesheet">
    <!--
        - ionicon link
      -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script type="text/javascript" src="/jquery/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.metered.ca/sdk/video/1.4.5/sdk.min.js"></script>
    <style>
        html {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100%;
            font-family: "Nunito";
        }

        main {
            flex: 1;
        }
        p,h1,h2,h3,h4,h5,h6,a{
            font-family: "Nunito";
        }
        footer {
            margin-top: auto;
        }
    </style>
    <!-- Scripts -->

    <script src="https://cdn.metered.ca/sdk/video/1.4.5/sdk.min.js"></script>

    @vite(['resources/sass/app.scss','resources/js/app.js'])

</head>

<body style="background-size: auto;font-family:'Nunito' background-image: url('{{ url('frontend/images/hero-bg.png') }}');">
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm" style="padding: 12px 36px; background-color: #005761;">
            <div class="container">
                <a class="btn btn-primary" style="font-size: 1.1rem;"href="{{ url('/') }}">
                    Palingenesis
                </a>

                <div class="navbar-collapse">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item" style="padding-right: 50px;">
                            <a href="{{ route('info') }}" class="btn btn-primary"
                                style="font-size: 1.1rem;">Info</a>
                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item" style="padding-right: 50px;">
                                    <a href="{{ route('login') }}" class="btn btn-primary"
                                        style="font-size: 1.1rem;">Login</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="btn btn-primary"
                                        style="font-size: 1.1rem;">Register</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="btn btn-primary dropdown-toggle"  style="font-size: 1.1rem;" href="/user" role="button"
                                    data-bs-toggle="dropdown">
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('login') }}">{{ __('Dashboard') }}</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4" style="z-index: 1; margin-top: 2rem;">
            @yield('content')
        </main>

    </div>
    <footer class="footer"
        style="background-size: cover; background-image: url({{ url('frontend/images/footer-bg.png') }})">
        <div class="container">
            <div class="row" style="margin-top: 0.5rem; padding-top: 1rem;">
                <div class="col-sm-6" style="padding-left: 1rem;">
                    <h5>About Us</h5>
                    <p class="col-sm-8">
                    At Palingenesis, we are committed to providing a safe, inclusive, and compassionate space for individuals to access free therapy, empowering them to thrive and prioritize their mental well-being.</p>
                    
                </div>
                <div class="col-sm-6" style="padding-left: 22rem;">
                    <h5>Contact Us</h5>
                    <ul class="contact-list has-after">
                        <li class="contact-item">
                            <div class="item-icon">
                                <ion-icon name="mail-open-outline"></ion-icon>
                            </div>
                            <div style="padding-bottom: 5px;">
                                <p>Email: <br><a href="mailto:contact@website.com"
                                        class="contact-link">Palingenesis@gmail.com</a></p>
                            </div>
                        </li>
                        <li class="contact-item">
                            <div class="item-icon">
                                <ion-icon name="logo-linkedin"></ion-icon>
                            </div>
                            <div>
                                <p> Linkedin: <br><a href="linkedin.com/in/Palingenesis" >linkedin.com/in/Palingenesis</a>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <hr>
            <p style="font-weight: 700; text-align: center; margin-bottom: -0.3rem; margin-top: -0.3rem;">&copy; Palingenesis 2023 | All Rights
                Reserved by DeezGroup</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </script>

</body>



</html>
