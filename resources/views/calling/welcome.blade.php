<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Palingenesis') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href="{{ asset('css/green-theme.css') }}" rel="stylesheet">
        <!--
            - ionicon link
          -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script type="text/javascript" src="/jquery/jquery-3.6.0.min.js"></script>
        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                display: flex;
                flex-direction: column;
                min-height: 100%;

            }
            html {
          height: 100%;
        }


        main {
          flex: 1;
        }

        footer {
          margin-top: auto;
        }

        </style>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-md shadow-sm"  style="padding: 12px 36px; background-color: #005761;">
            <div class="container">
                <a class="btn btn-primary" style="font-size: 1.1rem;"href="{{ url('/') }}">
                   Palingenesis
                </a>
                <a class="btn btn-primary navbar-toggler" data-bs-toggle="collapse" style="background-color: hsl(183, 100%, 36%);" data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </a>
                <div class="navbar" id="navbarSupportedContent">
                     <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="btn btn-primary dropdown-toggle" href="/user" role="button" data-bs-toggle="dropdown">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="navbarDropdown">
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

                    </ul>
                </div>
            </div>
        </nav>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4">
                <h1 class="text-2xl">Video Chat Application</h1>
            </div>


            <div class="max-w-2xl">
                <div class="grid md:grid-cols-8 grid-cols-1 mt-4">
                    <div class="md:col-span-5">
                        <form method="post" action="{{ route('validateMeeting') }}">
                          {{ csrf_field() }}
                        <div class="mt-1 flex rounded-md shadow-sm">
                          <div class="relative flex items-stretch flex-grow focus-within:z-10">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                              <!-- Heroicon name: solid/users -->
                              <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                              </svg>
                            </div>
                            <input type="text" name="meetingId" id="meetingId" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full rounded-none rounded-l-md pl-10 sm:text-sm border-gray-300" placeholder="Meeting ID">
                          </div>
                          <button type="submit" class="-ml-px relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-r-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                            <span>Join Meeting</span>
                          </button>
                        </div>
                        </form>

                      </div>
                      <div class="my-2 sm:my-0 flex items-center justify-center">
                        <span class="text-xs uppercase font-bold text-gray-400 px-1">OR</span>
                      </div>

                      <div class="md:col-span-2">
                        <form method="post" action="{{ route('createMeeting') }}">
                            {{ csrf_field() }}
                            <button type="submit" class="mt-1 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Create New Meeting</button>
                        </form>
                    </div>
                </div>

            </div>
  
        </div> 

        <footer class="footer" style="background-size: cover; background-image: url({{url('frontend/images/footer-bg.png')}})">
            <div class="container">
              <div class="row" style="margin-top: 0.5rem;">
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
    
    </body>
</html>
