@extends('layout.app')

@section('less_import')
    <link rel="stylesheet/less" type="text/css" href="{{ asset('css/home.less') }}" />
    <script src="https://cdn.jsdelivr.net/npm/less" ></script>
    <script src="https://kit.fontawesome.com/4f2d93f234.js" crossorigin="anonymous"></script>
    <style>@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');</style>
@endsection
@section('page title')
    Home
@endsection

@section('body')

<body class="bg-secondary w-100">
    {{-- <form action="{{ route('logout') }}" method="post">
        @csrf
        <input type="submit" class="btn btn-primary fs-5" value="Logout">
    </form> --}}
    <nav class="w-100 border rounded-bottom border-0 p-3 ps-5 pe-5" id="navbar">
        <h3 class="font d-inline-block">WAIS FOOD PH</h3>

        <form action="" method="get" class="d-inline-block">
            <input type="text" name="search" id="search" class="border rounded-pill p-2 icon ps-5 font" placeholder="Search">
        </form>

        <ul class="nav d-inline-block float-end">
            <li class="nav-item d-inline-block"><a href="nav-link"><i class="fa-regular fa-house"></i></a></li>
            <li class="nav-item d-inline-block"><a href="nav-link">Messages</a></li>
        </ul>
    </nav>
</body>