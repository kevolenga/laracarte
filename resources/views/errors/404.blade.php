@extends('layouts.default', ['title' => 'Page not found'])

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <img src="{{ asset('404.png') }}" alt="Page not found" class="img img-responsive">
        </div>
        
    </div>
    <hr>
@stop


