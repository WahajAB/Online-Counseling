@extends('layouts.app')

@section('content')
<link href="{{ asset('css/green-theme.css') }}" rel="stylesheet">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center" style="font-weight:700; font-size: 1.5rem;">{{ __('Counselor Dashboard') }}</div>
                <div class="card-body" style="display: flex;  justify-content: center; align-items: center;">
                    <a type="button" class="btn btn-primary" href="{{ route('Counselor.messages') }}">View Messages</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
