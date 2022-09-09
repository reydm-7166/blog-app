@extends('layout.app2')

@section('page_title')
Results
@endsection

@section('css')
    <style>
        body {
            overflow: hidden;
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100%;
        }
        a {
            text-decoration: none;
        }
    </style>
@endsection
@section('body_content')

<body class="w-100 vh-100 ps-5 pe-5" background="img/background.png">
    <img src="/img/Wais Food Logo.png" alt="" id="icon" class="mt-4">
    <header class="m-5 mb-0 navbar navbar navbar-expand-lg float-end">

    <ul class="navbar-nav ms-5">
        <li class="nav-item">
            <a class="nav-link fs-3 ms-3 result-nav" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-3 ms-4 result-nav" href="{{ url('generator') }}">Generator</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-3 ms-4 result-nav" href="#">About Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-3 ms-4 result-nav" href="#">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-3 ms-4 result-nav" href="#">Login</a>
        </li>
    </ul>
    </header>

    <main class="w-100" id="container">
        <div id="dish" class="w-75 m-auto h-100 p-3 text-center">

            <div id="img_div" class="h-100">

            </div>
            <div id="details" class="h-100 pe-4 ps-2">
                <p class="fw-bold mt-2" id="title">Hamburger</p>
                <li>½ teaspoon salt</li>
                <li>½ teaspoon ground black pepper</li>
                <li>1 pound ground beef</li>
                <li>12 pound bacon</li>
                <li>lettuce</li>
                
                <p id="directions" class="m-5 mb-2 border-bottom-0 mt-4 border border-end-0 border-start-0 pt-3 border-dark border-4">Directions</p>
                    <li>Preheat an outdoor grill for high heat and lightly oil grate.</li>
                    <li>
                        Whisk together egg, salt, and pepper in a medium bowl. Add ground beef and bread crumbs and mix with your hands or a fork until well blended.
                    </li>
                    <li>Cover and cook 6 to 8 minutes per side, or to desired doneness.</li>

                    <img src="/img/like.png" width="50px" height="50px" class="mt-2 ms-4 d-inline align-bottom" alt="">
                    <button class="border btn btn-primary-outline w-50 rounded-pill align-top ms-4 fs-4 border-3 mt-4" id="comment"><a href="{{ url('register') }}">Comment</a> </button>
                </div>
            </div>
        </div>
    </main>
</body>

@endsection