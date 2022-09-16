@extends('layout.app')

@section('less_import')
    <meta name='color-scheme' content='dark' />
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

    {{-- THIS IS THE NAVIGATION BAR --}}

    <?php (!empty(Session::get('user_data'))) ? $user_data = Session::get('user_data') : ""; ?>
    

    {{-- <li>{{ $user->first_name }}</li> --}}
        
    {{-- {{dd($user['first_name'])}} --}}

    @include('_partials._navigation_bar')
    
    @include('_partials._create_post')

</body>