<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('page-meta')
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="{{ asset('images/favicon.ico') }}" rel="icon">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Navigation Bar -->
    <div class="md:grid grid-cols-5 gap-3 shadow md:px-24 px-8 py-4 flex justify-between items-center">
        <div class="col-span-1">
            <img class="w-36" src="{{ asset('images/logo.png') }}" alt="SWAT Foundation logo">
        </div>
        <div class="col-span-3">
            <nav class="md:flex justify-between list-none">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Aims & Objectives</a></li>
                <li><a href="#">Mission</a></li>
                <li><a href="#">Programs</a></li>
                <li><a href="#">Donate</a></li>
                <li><a href="#">Contact Us</a></li>
            </nav>
        </div>
        <div class="col-span-1 ml-auto">
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </div>
    </div>
    @yield('body-content')
</body>
</html>