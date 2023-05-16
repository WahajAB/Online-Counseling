@extends('layouts.app')
@section('content')
<link href="{{ asset('css/green-theme.css') }}" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header text-center" style="font-size: 1.5rem; font-weight:700;">{{ __('Your Messages') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success text-center" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @php
                    $sortedMessages = $messages->sortByDesc('created_at')->map(function ($message) {
                        $message->message = preg_replace('/\b(http|https):\/\/[^\s]+/', '<a href="$0" target="_blank">$0</a>', $message->message);
                        return $message;
                    });
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
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <meta http-equiv="refresh" content="10">
                                @foreach($sortedMessages as $message)
                                    <tr class="align-middle">
                                        <td>{{ $message->user->name }}</td>
                                        <td>{{ $message->subject }}</td>
                                        <td>{!! $message->message !!}</td>
                                        <td>{{ $message->created_at }}</td>
                                        <td>
                                            <form method="GET" action="{{ route('reply_user', ['id' => $message->user->id]) }}">@csrf
                                                <button type="submit" class="btn btn-primary">Reply</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form method="POST" action="{{ route('delete_message', ['id' => $message->id]) }}">@csrf
                                                
                                                <button type="submit" class="btn btn-danger">Delete</button>
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
