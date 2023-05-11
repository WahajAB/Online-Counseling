@extends('layouts.app')
@section('content')
<meta http-equiv="refresh" content="30">
<link href="{{ asset('css/green-theme.css') }}" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center" style="font-size: 1.5rem; font-weight:700;">{{ __('Counselor Messages') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @php
                        $sortedMessages = $messages->sortByDesc('created_at');
                    @endphp
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>From</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Received</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <meta http-equiv="refresh" content="30">
                                @foreach($sortedMessages as $message)
                                    <tr class="align-middle">
                                        <td>{{ $message->user->name }}</td>
                                        <td>{{ $message->subject }}</td>
                                        <td>{{ $message->message }}</td>
                                        <td>{{ $message->created_at }}</td>
                                        <td>
                                            <form method="GET" action="{{ route('reply_user', ['id' => $message->user->id]) }}">@csrf
                                                <button type="submit" class="btn btn-primary">Reply</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
