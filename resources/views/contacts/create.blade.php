@extends('layouts.default', ['title' => 'Contact'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h2>Get in touch with us</h2>
                <p>
                    Having trouble with this service? 
                    <a href="mailto:kevolenga@gamail.com">
                        ask for help
                    </a>
                </p>
                <form action="{{ route('contact') }}" method="post" novalidate>
                    {{ csrf_field() }} 
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required placeholder="Your name" value="{{ old('name') }}">
                        {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="email" class="control-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required placeholder="Your email" value="{{ old('email') }}">
                        {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                        <label for="message" class="control-label sr-only">Message</label>
                        <textarea name="message" id="message" class="form-control" cols="30" rows="4" required placeholder="Your message">{{ old('message') }}</textarea>
                        {!! $errors->first('message', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                    {!! 
                        $errors->first(
                                'g-recaptcha-response', 
                                '<span class="help-block" style="color:crimson;">
                                    The captcha is required
                                </span>'
                        ) 
                    !!}
                    <br>
                    <button type="submit" class="btn btn-primary btn-block">Send the message</button>
                </form>
            </div>
        </div>
    </div>
    <hr>
@stop