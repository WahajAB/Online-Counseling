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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="{{ asset('css/green-theme.css') }}" rel="stylesheet">
 
    
    <!--
        - ionicon link
      -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <style>
html {
  height: 100%;
}

body {
  display: flex;
  flex-direction: column;
  min-height: 100%;
}

main {
  flex: 1;
}

footer {
  margin-top: auto;
}

    </style>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body style="background-size: cover; background-image: url('{{url('frontend/images/hero-bg.png')}}">
    <div id="app" >
        <nav class="navbar navbar-expand-md shadow-sm "  style="padding: 12px 36px; background-color: #005761;">
            <div class="container">
                <a class="btn btn-primary" style="font-size: 1.1rem;"href="{{ url('/') }}">
                    {{ config('app.name', 'Palingenesis') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item" style="padding-right: 50px;">
                                    <a href="{{ route('login') }}" class="btn btn-primary" style="font-size: 1.1rem;">Login</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="btn btn-primary" style="font-size: 1.1rem;">Register</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="btn btn-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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

        <main class="py-4" style="margin-top: 2rem;">
            @yield('content')
        </main>
        
    </div>
    <footer class="footer" style="background-size: cover; background-image: url({{url('frontend/images/footer-bg.png')}})">
        <div class="container">
          <div class="row" style="margin-top: 1rem;">
            <div class="col-sm-6" style="padding-left: 6rem;">
              <h5>About Us</h5>
              <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
              <address class="address">
                <ion-icon name="map-outline"></ion-icon>
                <span class="text">2416 Mapleview Drive <br>Tampa, FL 33634</span>
              </address>
            </div>
            <div class="col-sm-6" style="padding-left: 17rem;">
              <h5>Contact Us</h5>
              <ul class="contact-list has-after">
                <li class="contact-item">
                  <div class="item-icon">
                    <ion-icon name="mail-open-outline"></ion-icon>
                  </div>
                  <div>
                    <p>Main Email : <a href="mailto:contact@website.com" class="contact-link">contact@&shy;website.com</a></p>
                    <p>Inquiries : <a href="mailto:Info@mail.com" class="contact-link">Info@mail.com</a></p>
                  </div>
                </li>
                <li class="contact-item">
                  <div class="item-icon">
                    <ion-icon name="call-outline"></ion-icon>
                  </div>
                  <div>
                    <p>Office Telephone : <a href="tel:0029129102320" class="contact-link">0029129102320</a></p>
                    <p>Mobile : <a href="tel:000232439493" class="contact-link">000 2324 39493</a></p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          
          <hr style="margin-top: -0.1rem;">
          <p style="text-align: center; margin-bottom: -0.3rem; margin-top: -0.3rem;">&copy; Rehab 2023 | All Rights Reserved by DeezGroup</p>
        </div>
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"></script>
    
</body>

  
  
</html>
