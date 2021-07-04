<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1  maximum-scale=1.0, user-scalable=0">

        <title>Laravel</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{ asset('js/app.js') }}" defer></script>



        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            ul{
                padding: .5em;
            }
            li a{
                text-decoration:none;
                color:gray
            }
            li a:hover{
                background-color: #adb5bd;
                color:white
            }
        </style>
    </head>
    <body>
            @include('includes/nav/topnav')


            @yield('content') 
        
    </body>
</html>
