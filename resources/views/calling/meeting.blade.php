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
    <script type="text/javascript" src="/jquery/jquery-3.6.0.min.js"></script>
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
    <script src="https://cdn.metered.ca/sdk/video/1.4.5/sdk.min.js"></script>

    <script>
        window.METERED_DOMAIN = "{{ $METERED_DOMAIN }}";
        window.MEETING_ID = "{{ $MEETING_ID }}";

    </script>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body style="background-size: auto; background-image: url('{{url('frontend/images/hero-bg.png')}}');">
    <div id="app" >
        <nav class="navbar navbar-expand-md shadow-sm"  style="padding: 12px 36px; background-color: #005761;">
            <div class="container">
                <a class="btn btn-primary" style="font-size: 1.1rem;"href="{{ url('/') }}">
                   Palingenesis
                </a>
                <a class="btn btn-primary navbar-toggler" data-bs-toggle="collapse" style="background-color: hsl(183, 100%, 36%);" data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4" style="margin-top: 2rem;">





            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div id="waitingArea" class="max-h-screen">
                    <div class="py-4">
                        <h1 class="text-2xl">Meeting Lobby</h1>
                    </div>
        
        
                    <div class="max-w-2xl  flex flex-col space-y-4 ">
                        
                        <div class="flex items-center justify-center w-full rounded-3xl bg-gray-900">
                            <video id='waitingAreaLocalVideo' class="h-96" autoplay muted></video>
                        </div>
        
                        <div class="flex space-x-4 mb-4 justify-center">
        
                            <button id='waitingAreaToggleMicrophone' class="bg-gray-400 w-10 h-10 rounded-md p-2">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" /></svg>
                            </button>
        
                            <button id='waitingAreaToggleCamera' class="bg-gray-400 w-10 h-10 rounded-md p-2">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" /></svg>           
                            </button>
        
                        </div>
                        <div class="flex flex-col space-y-4 space-x-2 text-sm">
                            <div class="flex space-x-2 items-center">
                                <label>
                                    Name:
                                    <input class="text-xs" id="username" type="text"  placeholder="Name"/>
                                </label>
        
                                <label>
                                    Camera:
                                    <select class="text-xs" id='cameraSelectBox'>
                                    </select>
                                </label>
            
                                <label>
                                    Microphone:
                                    <select class="text-xs" id='microphoneSelectBox'>
                                    </select>
                                </label>
                            </div>
    
                            <div>
                                <button id='joinMeetingBtn' class="inline-flex items-center px-4 py-2 border border-transparent text-sm rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Join Meeting
                                </button>
                            </div>
                        </div>
        
                    </div>
          
                </div>
            </div> 
    
            <div id='meetingView' class="hidden flex w-screen h-screen space-x-4 p-10">
    
                <div id="activeSpeakerContainer" class=" bg-gray-900 rounded-3xl flex-1 flex relative">
                    <video id="activeSpeakerVideo" src="" autoplay class=" object-contain w-full rounded-t-3xl"></video>
                    <div id="activeSpeakerUsername" class="hidden absolute h-8 w-full bg-gray-700 rounded-b-3xl bottom-0 text-white text-center font-bold pt-1">
                        
                    </div>
                </div>  
    
                <div id="remoteParticipantContainer" class="flex flex-col space-y-4">
                    <div id="localParticiapntContainer" class="w-48 h-48 rounded-3xl bg-gray-900 relative">
                        <video id="localVideoTag" src="" autoplay class="object-contain w-full rounded-t-3xl"></video>
                        <div id="localUsername" class="absolute h-8 w-full bg-gray-700 rounded-b-3xl bottom-0 text-white text-center font-bold pt-1">
                            Me
                        </div>
                    </div>
                </div>
    
                <div class="flex flex-col space-y-2">
                    <button id='toggleMicrophone' class="bg-gray-400 w-10 h-10 rounded-md p-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path></svg>
                    </button>
    
                    <button id='toggleCamera' class="bg-gray-400 w-10 h-10 rounded-md p-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    </button>
    
                    <button id='toggleScreen' class="bg-gray-400 w-10 h-10 rounded-md p-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </button>
    
                    <button id='leaveMeeting' class="bg-red-400 text-white w-10 h-10 rounded-md p-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                    </button>
                    
                </div>
            </div>
    
            <div id="leaveMeetingView" class="hidden">
                <h1 class="text-center text-3xl mt-10 font-bold">
                    You have left the meeting 
                </h1>
            </div>
    









        </main>
        
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"></script>
    
</body>

  
  
</html>
