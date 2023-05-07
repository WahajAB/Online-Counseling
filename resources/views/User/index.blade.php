@extends('layouts.app')

@section('content')
<link href="{{ asset('css/green-theme.css') }}" rel="stylesheet">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center" style="font-weight:700; font-size: 1.5rem;">{{ __('Counselors') }}</div>

                <div class="card-body" style="display: flex;  justify-content: center; align-items: center;">
                    <button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#counselorsModal">
                        {{ __('View Counselors') }}
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="counselorsModal" tabindex="-1" aria-labelledby="counselorsModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="counselorsModalLabel">{{ __('Counselor List') }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul class="list-group">
                                        @foreach ($counselors as $counselor)
                                        <li class="list-group-item">
                                            {{ $counselor->name }}
                                            <a href="{{ route('message_counselor', ['id' => $counselor->id]) }}" class="btn btn-success btn-sm" style="margin-left: 9rem;">{{ __('Message') }}</a>
                                            <a href="{{ route('call_counselor', ['id' => $counselor->id]) }}" class="btn btn-success btn-sm text-center" style="width: 4rem; margin-left: 1rem;">{{ __('Call') }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
