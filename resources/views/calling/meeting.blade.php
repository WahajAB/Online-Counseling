@extends('layouts.app')
@section('content')

<script>
    window.METERED_DOMAIN = "{{ $METERED_DOMAIN }}";
    window.MEETING_ID = "{{ $MEETING_ID }}";
</script>
@vite('resources/css/app.css')
@vite(['resources/sass/app.scss','resources/js/app.js'])

<link href="{{ asset('css/green-theme.css') }}" rel="stylesheet">

<div class="container" id="waitingArea">
    <div class="row justify-content-center">
        <div class="card col-md-8 p-0">
            <div class="card-header text-center" style="font-weight:700; font-size: 1.5rem;">{{ __('Meeting Area') }}</div>
    
    
                <div class="mt-2">
                    
                    <div class="rounded-3xl bg-gray-900 ml-7 mr-7">
                        <video id='waitingAreaLocalVideo' class="h-96" autoplay muted></video>
                    </div>
    
                    <div class="mt-3 text-center">
    
                        <button id='waitingAreaToggleMicrophone' class="bg-gray-400 w-10 h-10 rounded-md p-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" /></svg>
                        </button>
    
                        <button id='waitingAreaToggleCamera' class="ml-3 bg-gray-400 w-10 h-10 rounded-md p-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" /></svg>           
                        </button>
    
                    </div>
                    <div class="card-body text-center">
                            <label>
                                Name: 
                                <input class="rounded-md shadow-sm ml-1" id="username" type="text" placeholder="Name"/>
                            </label>
    
                            <label class="ml-5">
                                Camera:
                                <select class="rounded-md shadow-sm ml-1" id='cameraSelectBox'>
                                </select>
                            </label>
        
                            <label class="ml-5">
                                Microphone:
                                <select class="text-xs" id='microphoneSelectBox'>
                                </select>
                            </label>
                        </div>

                        <div class="text-center mb-3 mt-1">
                            <button id='joinMeetingBtn' class="btn btn-primary rounded-sm" style="margin-left: 22.5rem;">
                                Join Meeting
                            </button>
                        </div>
    
                </div>
      
            </div>
        </div> 
    </div>

        <div id='meetingView' class="hidden space-x-4 p-5">

            <div id="activeSpeakerContainer" class="bg-gray-900 rounded-3xl">
                <video id="activeSpeakerVideo" src="" autoplay class="object-contain w-full rounded-t-3xl"></video>
                <div id="activeSpeakerUsername" class="hidden absolute h-8 w-full bg-gray-700 rounded-b-3xl bottom-0 text-white text-center font-bold pt-1">
                    
                </div>
            </div>  

            <div id="remoteParticipantContainer">
                <div id="localParticiapntContainer" class="w-48 h-48 rounded-3xl bg-gray-900 relative">
                    <video id="localVideoTag" src="" autoplay class="object-contain w-full rounded-t-3xl"></video>
                    <div id="localUsername" class="absolute h-8 w-full bg-gray-700 rounded-b-3xl bottom-0 text-white text-center font-bold pt-1">
                        Me
                    </div>
                </div>
            </div>

            <div class="text-center pt-5">
                <button id='toggleMicrophone' class="bg-gray-400 w-10 h-10 rounded-md p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path></svg>
                </button>

                <button id='toggleCamera' class="bg-gray-400 w-10 h-10 rounded-md p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                </button>

                <button id='toggleScreen' class="bg-gray-400 w-10 h-10 rounded-md p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </button>

                <button id='leaveMeeting' class="bg-red-400 text-white w-10 h-10 rounded-md p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                </button>
                
            </div>
        </div>

        <div id="leaveMeetingView" class="hidden" style="margin-top: 15rem;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="card col-md-8 p-0">
                        <div class="card-header text-center" style="font-weight:700; font-size: 1.5rem;">{{ __('You have left the meeting!') }}
                        </div>
                 
                    </div>
                </div>
            </div>
        </div>
@endsection