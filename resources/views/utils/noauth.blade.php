@extends('templates/base')

@section('title', 'No Auth Detected')

@section('hide', 'disabled')
    
@section('content')
    <div class="row mt-5 pt-5">
        <div class="col-12 text-center">
            <small>Access Denied</small>
            <h1 class="noauth-info">CANNOT ACCESS ANOTHER PAGE, <br>PLEASE LOGIN FIRST</h1>
            <h1 class="noauth-sad my-3">:(</h1>
            <h1 class="noauth-text mt-5 mb-4">No Auth Detected</h1>
            <p>Back to <a href="/login">login</a> page</p>
        </div>
    </div>
@endsection
