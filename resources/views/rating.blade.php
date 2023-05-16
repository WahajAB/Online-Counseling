@extends('layouts.app')

@section('content')
<link href="{{ asset('css/green-theme.css') }}" rel="stylesheet">
<div class="container">
        <div class="card">
                <div class="card-header text-center" style="font-size: 1.5rem; font-weight: 700rem;">Rate the meeting!</div>
                <div class="card-body text-center">
                        <form method="POST" action = "{{ route('rate', ['id' => $id]) }}" class="mt-2">@csrf
                            <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                                    name="rating" value="1" required> <label class="form-check-label"
                                    title="1 star">1</label> </div>
                            <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                                    name="rating" value="2" required>2<label class="form-check-label"
                                    title="2 stars"></label> </div>
                            <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                                    name="rating" value="3" required>3<label class="form-check-label"
                                    title="3 stars"></label> </div>
                            <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                                    name="rating" value="4" required>4<label class="form-check-label"
                                    title="4 stars"></label> </div>
                            <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                                    name="rating" value="5" required>5<label class="form-check-label"
                                    title="5 stars"></label> </div>
                             <div class="form-group mt-3">
                                    <label class="mb-3"for="remarks">Remarks</label>
                                        <textarea class="form-control" name="remarks" rows="10" placeholder="(Optional)"></textarea>
                              </div>
                            <button type="submit" style="margin-left: 34rem;" class="btn btn-primary mt-4">Submit Rating</button>
                        </form>
                </div>
        </div>
</div>

@endsection