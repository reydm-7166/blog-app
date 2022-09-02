<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Result</title>
    <style>
        #back {
            width: max-content;
        }
        * {
            box-sizing: border-box;
        }
        main {
            display: inline-block;
        }
    </style>
</head>
<body class="p-3 container-fluid vh-100 bg-gray">


<main class="h-100 w-50 p-3 mt-0 align-top border border-bottom-0 border-start-0 border-primary">
    <h1>Result</h1>

    @forelse($primary as $prime)
    <div class="border border-primary p-2 w-75 mt-4">
        <p class="display-4"> Dish Name: {{ $prime->dish_name }}</p>
        <ul class="list-unstyled">
            <li class="">Main Ingredient 1: {{ $prime->main1 }}</li>
            <li>Main Ingredient 2: {{ $prime->main2 }}</li>
        </ul>
    </div>
        
   
    @empty

        <h1>No result</h1>

    @endforelse
</main>

<main class="h-100 w-50 p-3 mt-0 align-top float-end border border-primary border-start-0 border-bottom-0 border-end-0">
    <h1>Table</h1>
    <table class="mt-3 table table-bordered w-75 float-start table-hover">
        <thead>
            <tr>
                <td>Dish Name</td>
                <td>Main Ingredients</td>
                <td>Secondary</td>
                <td class="text-center">Action</td>
                <td class="d-none">dish id</td>
                <td class="d-none">mains id</td>
                <td class="d-none">events id</td>
            </tr>
            
        </thead>
        <tbody class="">
            @forelse($primary as $prime)
            <tr>

                <td>{{ $prime->dish_name }}</td>
                <td>{{ $prime->main1 }}<br>{{ $prime->main2 }}</td>
                <td>{{ $prime->second1 }}<br>{{ $prime->second2 }}</td>z
                <td class="text-center"><a href="{{ url('show/' . $prime->dishID . '/' . $prime->mainsID)}}">View</a> </td>
                <td class="d-none">{{ $prime->dishID }}</td>
                <td class="d-none">{{ $prime->mainsID }}</td>
                <td class="d-none">{{ $prime->secondsID }}</td>

                @empty

                <h1 class="text-center">No result</h1>
            </tr>
                @endforelse
            

        </tbody>
    </table>
</main>


</body>
</html>