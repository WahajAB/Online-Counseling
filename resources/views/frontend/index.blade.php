@extends('layouts.app')
@section('content')
<link href="{{ asset('css/green-theme.css') }}" rel="stylesheet">
<section class="text-white" style="position: relative; z-index: 2; margin-top: -3.5rem; padding-top: 4rem; padding-bottom: 6rem; background-color: #005761; background-size: cover; background-image: url('{{ url('frontend/images/hero-bg.png') }}');">
    <div class="container ">
        <div class="row align-items-center">
            <div id = "hero11" class="col-md-6">
                <p class="fs-5" style="margin-top: -2rem; font-weight: 400;">Welcome To Palingenesis!</p>
                <h1 style="font: 4rem bold; font-weight: 300; font-family: Nunito;">Convenient and affordable therapy, anywhere and anytime.</h1>
            </div>
            <div class="col-md-6">
                <img src="{{ url('frontend/images/hero-banner13.png') }}" loading="eager" class="w-90">
            </div>
        </div>
    </div>
</section>
<section class="container py-5">
    <div class="row pt-5">
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <img src="{{ url('frontend/images/icon-20.png') }}" width="71" height="71" loading="lazy" alt="icon">
                    <h3 style="text-align: justify;" class="card-title">Confidential</h3>
                    <p style="text-align: justify; font-family:'Nunito';" class="card-text">Rest assured knowing that your sessions are completely confidential, ensuring a safe and secure therapeutic space.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <img src="{{ url('frontend/images/accessible.png') }}" width="71" height="71" loading="lazy" alt="icon">
                    <h3 class="card-title">Accessible</h3>
                    <p style="text-align: justify;" class="card-text">Enjoy therapy that is readily available and easily accessible to help you prioritize your mental well-being.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <img src="{{ url('frontend/images/empathy.png') }}" width="71" height="71" loading="lazy" alt="icon">
                    <h3 class="card-title">Empathy</h3>
                    <p style="text-align: justify;" class="card-text">Experience the compassionate support of dedicated professionals who empathize and understand your unique journey.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <img src="{{ url('frontend/images/virtual.png') }}" width="71" height="71" loading="lazy" alt="icon">
                    <h3 class="card-title">Virtual</h3>
                    <p style="text-align: justify;" class="card-text">Experience therapy from the comfort of your own space, eliminating the need for travel or commuting.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container py-5">
    <div class="text-center pb-3">
        <p class="fs-2">World Class Experts Offering:</p>
    </div>
    <div class="row text-center">
        <div class="col">
            <div class="card-body">
                <img src="{{ url('frontend/images/MBT.png') }}" id="hero2" width="400" height="400" loading="lazy" alt="icon">
                <h2 class="card-title pb-3">Mindfulness-Based Therapy</h2>
                <p class="card-text h5">Incorporate mindfulness practices to enhance self-awareness and reduce stress and anxiety.</p>
            </div>

        </div>
        <div class="col">

            <div class="card-body">
                <img src="{{ url('frontend/images/SFBT.png') }}" id = "hero2" width="400" height="400" loading="lazy" alt="icon">
                <h2 class="card-title pb-3">Solution-Focused Brief Therapy (SFBT)</h2>
                <p class="card-text h5">Focus on identifying solutions and setting achievable goals in a time-limited manner.</p>

            </div>
        </div>
    </div>
</section>

@endsection