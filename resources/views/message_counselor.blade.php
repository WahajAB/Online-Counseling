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
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="GET" action="{{ route('message_counselor', $counselor->id) }}">
                            @csrf

                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" name="subject" required>
                            </div>

                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" name="message" rows="10" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary" style="margin-top: 2rem;">Send Message</button>
                        </form>

                        <hr />
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
