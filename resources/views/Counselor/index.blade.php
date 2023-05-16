@extends('layouts.app')

@section('content')
<link href="{{ asset('css/green-theme.css') }}" rel="stylesheet">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center" style="font-weight:700; font-size: 1.5rem;">{{ __("Counselor's Dashboard") }}</div>
                <div class="card-body" style="display: flex;  justify-content: center; align-items: center;">
                    <a type="button" class="btn btn-primary" href="{{ route('Counselor.messages') }}">View Messages</a>
                    <a type="button" style="margin-left: 2rem;" class="btn btn-primary" href="{{ route('Counselor.reviews') }}">View Reviews</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
