@extends('layouts.app')
@section('content')
    @vite('resources/css/app.css')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link href="{{ asset('css/green-theme.css') }}" rel="stylesheet">

    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-md-8 p-0">
                <div class="card-header text-center" style="font-weight:700; font-size: 1.5rem;">{{ __('Meeting Room') }}</div>
                @if (session('failure'))
                <div class="alert alert-danger text-center" style="margin-bottom: -1rem;" role="alert">
                    {{ session('failure') }}
                </div>
                @endif
                <div class="card-body" style="display: flex;  justify-content: center; align-items: center;">

                            <form method="post" action="{{ route('validateMeeting', ['id'=>$counselor]) }}">
                                {{ csrf_field() }}
                                <div class="mt-10 mb-11 flex">
                                    <div class="rounded-md shadow-sm relative flex items-stretch flex-grow focus-within:z-10">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <!-- Heroicon name: solid/users -->
                                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                                            </svg>
                                        </div>
                                        <input type="text" name="meetingId" id="meetingId"
                                            class="focus:ring-indigo-500 focus:border-indigo-500 block w-full rounded-none rounded-l-md pl-10 sm:text-sm border-gray-300"
                                            style = "padding-right: 5rem;" placeholder="Meeting ID">
                                    </div>
                                    <button type="submit" class="btn btn-primary ml-2">
                                        <span>Join Meeting</span>
                                    </button>
                                </div>
                            </form>


                        <div class="mt-10 mb-11 pl-1">
                            <form method="post" action="{{ route('createMeeting', ['id'=>$counselor]) }}">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-primary">Create New Meeting</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
