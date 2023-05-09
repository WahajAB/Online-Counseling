<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Palingenesis - Home</title>
  <meta name="title" content="Palingenesis">
  <meta name="description" content="This is a madical html template made by codewithsadee">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&family=Rubik:wght@400;500;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="{{url('frontend/css/home.css')}}">
  <link rel="preload" as="image" href="{{url('frontend/images/hero-banner.png')}}">
  <link rel="preload" as="image" href="{{url('frontend/images/hero-bg.png')}}">
</head>

<body id="top">
  <div class="preloader" data-preloader>
  </div>
  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="{{url('frontend/images/logo.svg')}}" width="136" height="46" alt="Palingenesis">
      </a>

    <div class="navbar-collapse" style="padding-left: 6rem;">
        <ul class="navbar-nav">
          <a href="home" class="nav-item btn has-before title-md" style="display: inline-block;">Home</a>
          <a href="{{ route('register') }}" class="nav-item btn has-before title-md" style="display: inline-block;">Register</a>
          <a href="{{ route('login') }}" class="nav-item btn has-before title-md" style="display: inline-block; margin-top: -0.5rem;">Login</a>
        </ul>
     </div>
    </div>
  </header>