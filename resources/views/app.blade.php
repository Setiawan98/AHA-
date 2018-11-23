<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Welcome to AHA!</title>
       
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <link rel="stylesheet" href="{{ asset('css/all.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}" >
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('css/creative.min.css')}}" >

        <!-- Font Icon -->
        <link rel="stylesheet" href="{{ asset('css/material-design-iconic-font.min.css')}}">
    </head>

    <body>
        <div id='mainLayout'>
        <app-layout></app-layout>
        </div>
        <script src="{{ asset('js/app.js')}}"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="{{ asset('js/main.js')}}"></script>
        <script src="{{ asset('js/jquery.easing.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('js/scrollreveal.min.js')}}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{ asset('js/creative.min.js')}}"></script>
    </body>
</html>
