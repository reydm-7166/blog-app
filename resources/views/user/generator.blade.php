@extends('layout.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/generator.css') }}">
@endsection

@section('page_title')
Generator
@endsection

@section('body_content')

<body class="w-100 vh-100 ps-5">

    <div class="w-25 vh-100 d-inline-block p-2">
        {{-- <img src="/img/Wais Food Logo.png" width="150px" height="150px" class="d-block" alt=""> --}}

        <form action="" method="get">
            <input type="text" name="search" class="form-control p-3" placeholder="Search" id="">
        </form>

        <section class="w-100 h-75 border rounded mt-2 p-2 ps-3" id="ing">
            <p class="text-center fs-3">Ingredients</p>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Butter</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Sugar</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Garlic Powder</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Flour</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Egg</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Olive Oil</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Parsley</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Chili Powder</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Basil</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Butter</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Sugar</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Garlic Powder</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Flour</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Egg</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Olive Oil</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Parsley</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Chili Powder</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Basil</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Butter</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Sugar</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Garlic Powder</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Flour</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Egg</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Olive Oil</button>
        </section>
        <div id="add_new" class=" w-100 mt-2 rounded">
            <input type="text" name="add" placeholder="Ingredient" class="form-control w-75 d-inline-block align-top">
            <button class="btn btn-primary fs-6 float-end align-top" id="bu">Add New</button>
            <button class="btn btn-primary fs-5 m-auto d-block mt-4">Submit</button>
        </div>
    </div>

    <div class="d-inline-block ms-5 pt-0 vh-100 align-top" id="main">
        <div id="seventy">
            <div class="h-75 border float-end mt-5 me-5" id="notepad">

                    <div id="details" class="h-100 w-100 pt-4 m-auto">
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
        
                    </div>

            </div>
        </div>
        
        <div id="footer">
            <div class="border rounded-circle d-inline-block" id="icon_img" aria-label="no image yet">
                <img src="/img/pp.jpg" alt="none yet" class="border rounded-circle">
            </div>

            <div id="user_details" class="d-inline-block align-top mt-4 me-5 ms-2">
                <h2>Teresa</h2>
                <h4>@@notteresa</h4>
            </div>

            <div id="user_comment" class="d-inline-block align-middle mt-5 ms-5 fw-light">
                <p>I like this recipe so far! Best in Wais Food PH</p>
            </div>


            <img src="/img/likedislike.png" height="150px" class="float-end d-inline-block" alt="">
        </div>

    </div>
    

</body>

@endsection