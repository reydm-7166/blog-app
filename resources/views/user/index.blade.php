<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Index</title>
    <style>
        #back {
            width: max-content;
        }
        * {
            box-sizing: border-box;
        }
        .inline {
            display: inline-block;
        }
    </style>
</head>
<body class="p-5 container-fluid vh-100 bg-gray">


<main class="h-100 w-25 p-3 mt-1 rounded">
    <h1 class="pb-3 border-bottom border-dark">Look for Recipe</h1>
    
    <form action="{{ route('main.search') }}" method="GET" class="mt-4">

        <h3 class="mt-4">Primary</h3>
        <div class="container border border-secondary rounded w-100 h-100 mt-3 pb-3 inline">

            <label class="mt-3">Main Ingredient</label>
            <input type="text" name="main1" id="" class="form-control mt-1 w-100" placeholder="Main Ingredient 1">

            <label class="mt-3">Main Ingredient 2</label>
            <input type="text" name="main2" id="" class="form-control mt-1 w-100" placeholder="Main Ingredient 2">
        </div>
        <h3 class="mt-4">Secondary</h3>

        <div class="container border border-secondary rounded w-100 h-100 mt-3 pb-3 float-start">
            <label class="mt-3">Secondary Ingredients</label>
            <input type="text" name="sec1" id="" class="form-control mt-1 w-100" placeholder="Secondary Ingredient 1">

            <label class="mt-3">Secondary Ingredients 2</label>
            <input type="text" name="sec2" id="" class="form-control mt-1 w-100" placeholder="Secondary Ingredient 2">
        </div>
        <input type="submit" value="Submit" class="btn btn-primary float-end mt-4 mb-2">
    </form>
</main>
</body>
</html>