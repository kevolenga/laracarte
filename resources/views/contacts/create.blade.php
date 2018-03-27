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
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="message" class="control-label sr-only">Message</label>
                        <textarea name="message" id="message" class="form-control" cols="30" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Send the message</button>
                </form>
            </div>
        </div>
    </div>
    <hr>
@stop