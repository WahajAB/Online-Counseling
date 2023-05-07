@extends('layouts.app')

@section('content')
<link href="{{ asset('css/green-theme.css') }}" rel="stylesheet">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 style="display: inline-block; font-weight:700;">Counselor Name:</h3>
                        <h3 style="display: inline-block; margin-left: 8rem; font-weight:700;">{{$counselor->name }}</h3>
                      </div>
                    <div class="card-body">
                        <!-- Add call interface and logic here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
