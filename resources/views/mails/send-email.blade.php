@extends('layouts.app')

@section('title', 'Gửi email - Allaravel.com')

@section('content')
    <form class="form-horizontal" method="POST" action="{{url('/email')}}">
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Send Mail
                </button>
            </div>
        </div>
    </form>

@endsection