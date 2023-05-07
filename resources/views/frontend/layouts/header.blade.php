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

      <nav class="navbar" data-navbar>

      </nav>
      
      <a href="home" class="btn has-before title-md">Home</a>
      <a href="{{ route('register') }}" class="btn has-before title-md">Register</a>
      <a href="{{ route('login') }}" class="btn has-before title-md">Login</a>

    </div>
  </header>