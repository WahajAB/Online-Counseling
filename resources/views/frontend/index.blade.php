@extends('frontend.layouts.main')
@section('main-container')
    <main>
        <article>
            <section class="section hero" style="background-image: url('{{ url('frontend/images/hero-bg.png') }}');"
                aria-label="home">
                <div class="container">
                    <div class="hero-content">

                        <p class="hero-subtitle has-before" data-reveal="left">Welcome To Palingenesis</p>
                        <h1 class="headline-lg hero-title" data-reveal="left">
                            Convenient and affordable therapy,
                            anywhere and anytime.
                        </h1>
                        <div class="wrapper">

                            <div class="input-wrapper title-lg">
                                <ion-icon name="arrow-down-circle"></ion-icon>
                            </div>

                        </div>

                    </div>


                    <figure class="hero-banner" data-reveal="right">
                        <img src="{{ url('frontend/images/hero-banner.png') }}" width="590" height="517"
                            loading="eager" alt="hero banner" class="w-100">
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
                                    <img src="{{ url('frontend/images/icon-1.png') }}" width="71" height="71"
                                        loading="lazy" alt="icon">
                                </div>

                                <h3 class="headline-sm card-title">
                                    <p>Professional</p>
                                </h3>

                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                </p>


                            </div>
                        </li>

                        <li>
                            <div class="service-card" data-reveal="bottom">

                                <div class="card-icon">
                                    <img src="{{ url('frontend/images/icon-2.png') }}" width="71" height="71"
                                        loading="lazy" alt="icon">
                                </div>

                                <h3 class="headline-sm card-title">
                                    <p>Dedicated</p>
                                </h3>

                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                </p>



                            </div>
                        </li>

                        <li>
                            <div class="service-card" data-reveal="bottom">

                                <div class="card-icon">
                                    <img src="{{ url('frontend/images/icon-3.png') }}" width="71" height="71"
                                        loading="lazy" alt="icon">
                                </div>

                                <h3 class="headline-sm card-title">
                                    <p>No Cost</p>
                                </h3>

                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                </p>


                            </div>
                        </li>

                        <li>
                            <div class="service-card" data-reveal="bottom">

                                <div class="card-icon">
                                    <img src="{{ url('frontend/images/icon-4.png') }}" width="71" height="71"
                                        loading="lazy" alt="icon">
                                </div>

                                <h3 class="headline-sm card-title">
                                    <p>Private</p>
                                </h3>

                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                </p>


                            </div>
                        </li>

                    </ul>

                </div>
            </section>

            <section class="section listing" aria-labelledby="listing-label">
                <div class="container" style="margin-top: -0.5rem; margin-bottom: -4rem;">

                    <ul class="grid-list pb-9">

                        <li>
                            <p class="section-subtitle title-lg" id="listing-label" data-reveal="left">World Class Experts</p>

                            <h2 style="text-align: ce;" class="headline-md" data-reveal="left">Offering Specialists For</h2>
                        </li>

                        <li>
                            <div class="listing-card" data-reveal="bottom">

                                <div class="card-icon">
                                    <img src="{{ url('frontend/images/icon-1.png') }}" width="75" height="75"
                                        loading="lazy" alt="icon">
                                </div>

                                <div>
                                    <h3 class="headline-sm card-title">Therapy</h3>

                                    <p class="card-text">Porta velit</p>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="listing-card" data-reveal="bottom">

                                <div class="card-icon">
                                    <img src="{{ url('frontend/images/icon-2.png') }}" width="75" height="75"
                                        loading="lazy" alt="icon">
                                </div>

                                <div>
                                    <h3 class="headline-sm card-title">Rehab</h3>

                                    <p class="card-text">Mattis augue</p>
                                </div>

                            </div>
                        </li>

                        <li>

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
    <script src="{{ url('frontend/js/script.js') }}"></script>
    <!--
        - ionicon link
      -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection
