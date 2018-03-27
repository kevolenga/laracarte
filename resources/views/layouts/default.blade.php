<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://blacktie.co/demo/solid/assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Crete+Round|Varela+Round" rel="stylesheet">
    <title>{{ config('app.name') }}</title>
    <style>
        body{
            font-family: 'Varela Round', sans-serif;
        }
    	.error{
    		color: red;
    		font-weight: bold;
            margin-bottom: 5px;
    	}
    </style>
</head>
<body>
        
        @include('layouts.partials.nav')
        {{--  @include('partials.flash')  --}}
        @yield('content')
        @include('layouts.partials.footer')

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://bootswatch.com/3/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>