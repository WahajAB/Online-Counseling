@extends('layouts.app')
@section('content')

<link href="{{ asset('css/green-theme.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">


<div class="container justify-content-center">
    <div class="row justify-content-center">
        <div class="card col-md-8 p-0">
            <div class="card-header text-center" style="font-weight:700; font-size: 1.5rem;">{{ __('Meeting Room') }}</div>
            @if (session('failure'))
                <div class="alert alert-danger text-center" style="margin-bottom: -1rem;" role="alert">
                    {{ session('failure') }}
                </div>
            @endif
            <div class="card-body justify-content-center align-items-center">
                <form method="post" action="{{ route('validateMeeting') }}">
                    {{ csrf_field() }}
                    <div class="mt-3 mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <svg class="bi bi-people-fill" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M5 3a3 3 0 1 1 0 6 3 3 0 0 1 0-6zm7 0a3 3 0 1 1 0 6 3 3 0 0 1 0-6zm-7 8s-4 0-4 4h10c0-4-4-4-4-4zm7 0c-2.16 0-4 1.239-4 3h8c0-1.761-1.84-3-4-3z"/>
                                    </svg>
                                </span>
                            </div>
                            <input type="text" name="meetingId" id="meetingId" class="form-control"
                                   style="padding-right: 5rem;" placeholder="Meeting ID">
                        </div>
                    </div>

                    <div style="display: flex; justify-content: center; padding-right: 10rem; margin-top: 20px;">
                        <button type="submit" class="btn btn-primary">
                            <span>Join Meeting</span>
                        </button>
                    </div>
                </form>
                <form method="post" action="{{ route('createMeeting', ['id'=>$counselor]) }}">
                    {{ csrf_field() }}
                    <div class="col" style="display: flex; justify-content: center; padding-left: 10rem; margin-top: -3.1rem;">
                    <button type="submit" style="padding-inline: 0.5rem;" class="btn btn-primary">Create New Meeting</button>
                    </div>
                </form>

                </div>
            </div>
        </div>


@endsection
