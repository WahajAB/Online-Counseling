@extends('frontend.layouts.main')
@section('main-container')
  <main>
    <article>
      <section class="section hero" style="background-image: url('{{url('frontend/images/hero-bg.png')}}" aria-label="home">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle has-before" data-reveal="left">Welcome To Rehab</p>

            <h1 class="headline-lg hero-title" data-reveal="left">
              Convenient and affordable therapy,
              anywhere and anytime.
            </h1>

            <div class="hero-card" data-reveal="left">

              <p class="title-lg card-text">
            What type of therapy are you looking for?
            </p>

              <div class="wrapper">

                <div class="input-wrapper title-lg">
                  <input type="text" name="location" placeholder="Drug addiction, anxiety etc" class="input-field">

                  <!-- <ion-icon name="arrow-down-circle"></ion-icon> -->
                </div>

                <button class="btn has-before">
                  <ion-icon name="search"></ion-icon>

                  <span class="span title-md">Find Now</span>
                </button>

              </div>

            </div>

          </div>

          <figure class="hero-banner" data-reveal="right">
            <img src="{{url('frontend/images/hero-banner.png')}}" width="590" height="517" loading="eager" alt="hero banner"
              class="w-100">
          </figure>

        </div>
      </section>
      <!-- 
        - #SERVICE
      -->
      <section class="service" aria-label="service">
        <div class="container">

          <ul class="service-list">

            <li>
              <div class="service-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="{{url('frontend/images/icon-1.png')}}" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <h3 class="headline-sm card-title">
                  <a href="#">Professional</a>
                </h3>

                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing
                </p>

                <button class="btn-circle" aria-label="read more about psychiatry">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </button>

              </div>
            </li>

            <li>
              <div class="service-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="{{url('frontend/images/icon-2.png')}}" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <h3 class="headline-sm card-title">
                  <a href="#">Health Problems</a>
                </h3>

                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing
                </p>

                <button class="btn-circle" aria-label="read more about Gynecology">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </button>

              </div>
            </li>

            <li>
              <div class="service-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="{{url('frontend/images/icon-3.png')}}" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <h3 class="headline-sm card-title">
                  <a href="#">Pulmonology</a>
                </h3>

                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing
                </p>

                <button class="btn-circle" aria-label="read more about Pulmonology">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </button>

              </div>
            </li>

            <li>
              <div class="service-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="{{url('frontend/images/icon-4.png')}}" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <h3 class="headline-sm card-title">
                  <a href="#">Orthopedics</a>
                </h3>

                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing
                </p>

                <button class="btn-circle" aria-label="read more about Orthopedics">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </button>

              </div>
            </li>

          </ul>

        </div>
      </section>

      <section class="section listing" aria-labelledby="listing-label">
        <div class="container">

          <ul class="grid-list">

            <li>
              <p class="section-subtitle title-lg" id="listing-label" data-reveal="left">Doctors Listing</p>

              <h2 style="text-align: ce;" class="headline-md" data-reveal="left">Browse by specialist</h2>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="{{url('frontend/images/icon-1.png')}}" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <div>
                  <h3 class="headline-sm card-title">Psychiatry</h3>

                  <p class="card-text">Porta velit</p>
                </div>

              </div>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="{{url('frontend/images/icon-2.png')}}" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <div>
                  <h3 class="headline-sm card-title">Gynecology</h3>

                  <p class="card-text">Mattis augue</p>
                </div>

              </div>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="{{url('frontend/images/icon-4.png')}}" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <div>
                  <h3 class="headline-sm card-title">Pulmonology</h3>

                  <p class="card-text">Mauris laoreet</p>
                </div>

              </div>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="{{url('frontend/images/icon-5.png')}}" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <div>
                  <h3 class="headline-sm card-title">Orthopedics</h3>

                  <p class="card-text">Convallis vulputate</p>
                </div>

              </div>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="{{url('frontend/images/icon-6.png')}}" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <div>
                  <h3 class="headline-sm card-title">Pediatrics</h3>

                  <p class="card-text">Posuere maecenas</p>
                </div>

              </div>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="{{url('frontend/images/icon-7.png')}}" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <div>
                  <h3 class="headline-sm card-title">Osteology</h3>

                  <p class="card-text">Nisi nullam</p>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>
 
  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up"></ion-icon>
  </a>
  <!-- 
    - custom js link
  -->
  <script src="{{url('frontend/js/script.js')}}"></script>
  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  @endsection