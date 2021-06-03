<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('page-meta')
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="{{ asset('images/favicon.ico') }}" rel="icon">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Navigation Bar -->
    <div class="text-center text-2xl text-green-600">@include('layouts.messages')</div>
    <div class="md:grid grid-cols-5 gap-3 shadow md:px-24 px-8 py-4 flex justify-between items-center">
        <div class="col-span-1">
            <img class="w-36" src="{{ asset('images/logo.png') }}" alt="SWAT Foundation logo">
        </div>
        <div class="col-span-3">
            <nav class="md:flex justify-between list-none">
                <li><a href="{{ route('homepage') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('aims') }}">Aims & Objectives</a></li>
                <li><a href="{{ route('mission') }}">Mission</a></li>
                <li><a href="{{ route('donate') }}">Donate</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </nav>
        </div>
        <div class="col-span-1 ml-auto">
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </div>
    </div>
    @yield('body-content')
    <div class="bg-blue-600 py-6 px-4 md:px-24 md:grid grid-cols-5 gap-8 text-white">
        <div class="col-span-2">
            <h1 class="text-4xl font-bold pb-4">
                SWAT FOUNDATION
            </h1>
            <img class="w-2/3" src="{{ asset('images/logo.png') }}" alt="SWAT Logo">
            <p class="py-2 text-justify">
                "Community service gives me a valuable opportunity to walk into a different community that is less familiar to me but just as colorful and most importantly, in need"<br>
                <i>Caroline Landry</i>
            </p>
            <div class="flex justify-center my-2">
                <a class="ml-0" href="#" target="_blank"><i class="fab fa-facebook text-4xl"></i></a>
                <a class="ml-3" href="#" target="_blank"><i class="fab fa-twitter text-4xl"></i></a>
                <a class="ml-3" href="#" target="_blank"><i class="fab fa-youtube text-4xl"></i></i></a>
                <a class="ml-3" href="#" target="_blank"><i class="fab fa-whatsapp text-4xl"></i></a>
            </div>
        </div>
        <div class="col-span-1">
        <span class="text-xl">Navigation links</span>
            <nav class="list-none text-white mt-4">
                <li>
                    <a class="flex items-center py-2 text-lg" href="{{ route('homepage') }}">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            &nbsp; Home
                    </a>
                </li>
                <li>
                    <a class="flex items-center py-2 text-lg" href="{{ route('about') }}">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            &nbsp; About Us
                    </a>
                </li>
                <li>
                    <a class="flex items-center py-2 text-lg" href="{{ route('aims') }}">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            &nbsp; Aims & Objectives
                    </a>
                </li>
                <li>
                    <a class="flex items-center py-2 text-lg" href="{{ route('mission') }}">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            &nbsp; Mission
                    </a>
                </li>
                <li>
                    <a class="flex items-center py-2 text-lg" href="{{ route('donate') }}">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            &nbsp; Donate
                    </a>
                </li>
                <li>
                    <a class="flex items-center py-2 text-lg" href="{{ route('contact') }}">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            &nbsp; Contact Us
                    </a>
                </li>
            </nav>
        </div>
        <div class="my-auto col-span-2">
            <a href="{{ route('donate') }}"> 
                <img class="w-1/3 mx-auto" src="{{ asset('images/donate.png') }}" alt="Donate Logo">
            </a>
        </div>
    </div>
    <div class="py-4 text-center text-sm">
        <footer>
            Copyright © 2021 SWAT Foundation. All Rights Reserved <br>
            Designed by <a class="hover:text-blue-600" href="https://teampiccolo.com"> Team Piccolo</a>
        </footer>
    </div>
</body>
</html>