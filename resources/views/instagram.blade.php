<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href='https://fonts.googleapis.com/css?family=Lobster Two' rel='stylesheet'>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('instagram/instagram.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body style="background-color: rgba(var(--b3f,250,250,250),1);">
        <div id="preLoader" style="width: 60px;height: auto;margin: auto;transform: translateY(500%);">
            <img src="{{ asset('instagram/instagram.png') }}" style="width: 60px;">
        </div>
    <div id="app">
        <div class="flex-center position-ref full-height" style="display: none;" id="mainPage">
            <router-view></router-view>
        </div>
    </div>
        <script>
            window.onload = function(){
            var preLoader = document.getElementById('preLoader');
            var mainPage = document.getElementById('mainPage');
                preLoader.style.display = 'none';
                mainPage.style.display = '';
            };
        </script>
    </body>
</html>
