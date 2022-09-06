@extends('layout.app')

@section('less_import')
    <link rel="stylesheet/less" type="text/css" href="{{ asset('css/register.less') }}" />
    <script src="https://cdn.jsdelivr.net/npm/less" ></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family= Lexend+Deca: wght@300;400 &display=swap');

    </style>

    
@endsection

@section('page title')
    Register
@endsection

@section('body')

<body class="bg-secondary w-100">
    <main class="bg-primary w-75">
        <section id="left">

            <img src="img/iconregister.jpg" class="img-fluid" alt="">
        </section>
        <section class="bg-light" id="right">
            <p class="font mt-3 d-inline-block me-3" id="rightp">Already have an account?</p>

            <button class="btn btn-primary d-inline-block border-white font"><a href="{{ route('login.index') }}" class="text-decoration-none text-light">Log in</a></button>
            
            <h2 class="font fw-bolder mt-3 d-block">Create your account</h2>

            <div id="forms" class="mt-3 w-100">
                <form action="{{ route('register.store') }}" method="POST">
                    @csrf
                    
                    <div id="first_name" class=" border border-black w-75">
                        <label for="" class="font">First Name</label>
                        <input type="text" name="first_name" class="w-100 mt-2 form-control p-2 ps-3 shadow font{{($errors->first('first_name') ? " form-error" : "")}}" placeholder="ex. John">
                        @if($errors->first('first_name'))
                            <small class="form-text text-muted d-block text-danger">{{ $errors->first('first_name') }}</small>
                        @endif
                    </div>

                    <label for="" class="font mt-4">Last Name</label>
                    <input type="text" name="last_name" class="w-75 mt-2 form-control p-2 ps-3 shadow font" placeholder="ex. Doe">

                    <label for="" class="font mt-4">Email Address</label>
                    <input type="email" name="email_address" class="w-75 mt-2 form-control p-2 ps-3 shadow font" placeholder="you@example.com">

                    <label for="" class="font mt-4">Password</label>
                    <input type="password" name="password" class="w-75 mt-2 form-control p-2 ps-3 shadow font" placeholder="8 Characters or longer">
                 
                    <input type="submit" value="Create your account" class="btn btn-primary text-light w-75 p-3 fs-5 mt-4">

                </form>
            </div>
            <div id="options" class="text-center w-75">
                <p class="m-auto mt-4 fs-5 font">OR</p>

                <div id="google" class="text-center p-2 pt-4 mt-3 border rounded-3 shadow border-1 border-light">
                    <a href="" class="text-decoration-none text-dark"><img src="/img/google.png" alt="" class="d-inline-block align-top"><p class="d-inline-block font ms-3 fs-6 align-bottom">Sign up with Google</p></a>
                </div>

            </div>
        </section>
    </main>
</body>




@endsection