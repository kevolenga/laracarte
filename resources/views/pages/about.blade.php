@extends('layouts.default')

@section('content')
    <div class="container">
        <h2>What is Laracarte ?</h2>
        <p>Laracarte is a clone app of <a href="https://laramap.com" target="_blank">Laramap.com</a></p>   
        <div class="row">
            <div class="col-md-6">
                <p class="alert alert-warning">
                    <strong>
                        This app has been built by 
                        <a href="https://twitter.com/kevolenga" target="_BLANK">@kevolenga</a>
                        for learning purpose
                    </strong>
                </p>
            </div>
        </div>
        <p>Feel free to help improve the <a href="#">source code.</a></p>
        <hr>
        <h2>What is Laramap?</h2>
        <p>Laramap is a website through whick Laracarte was designed :).</p>
        <p>More info <a href="https://laramap.com/p/about">here</a>.</p>
       
        <hr>
        
        <h2>Which tools and services are used in laracarte?</h2>
        <p>Basically it's built on top of Laravel &amp; Bootstap. But there's also a bunch of services used for mailing and others features</p>
        <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>Amazon S3</li>
            <li>Mandrill</li>
            <li>Google Maps</li>
            <li>Gravatar</li>
            <li>Anthony Martin's Geolocation Package</li>
            <li>Michel Fortin.s Markdown Parser Package</li>
            <li>Heroku</li>
        </ul>
        <hr>    
    </div>
@stop