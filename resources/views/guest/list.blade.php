

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- bootstrap css -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"
    defer></script>

    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
    <h1 class="text-center">Tabella Treni in partenza</h1>

    <div class="name-colums">
        <div class="column">
            <span>Agency</span>
        </div>
        <div class="column">
           <span>Departure Station</span>
        </div>
        <div class="column">
           <span>Arrival Station</span>
        </div>
        <div class="column">
            <span>Departure Time</span>
        </div>
        <div class="column">
            <span>Arrival Time</span>
        </div>
        <div class="column">
            <span>Train Code</span>
        </div>
        <div class="column">
            <span>Number Of Carriages</span>
        </div>
        <div class="column">
            <span>in Time</span>
        </div>
        <div class="column">
            <span>Deleted</span>
        </div>
    </div>

    <div class="row table-trains">
        @foreach ($trains as $train)

            <div class="col table text-center">
                <div class="train">
                        <div class="train-grid"><p>{{$train->agency}}</p></div>
                        <div class="train-grid"><p>{{$train->departure_station}}</p></div>
                        <div class="train-grid"><p>{{$train->arrival_station}}</p></div>
                        <div class="train-grid"><p>{{$train->departure_time}}</p></div>
                        <div class="train-grid"><p>{{$train->arrival_time}}</p></div>
                        <div class="train-grid"><p>{{$train->train_code}}</p></div>
                        <div class="train-grid"><p>{{$train->number_of_carriages}}</p></div>
                        <div class="train-grid"><p>{{$train->in_time}}</p></div>
                        <div class="train-grid"><p>{{$train->deleted}}</p></div>
                </div>
            </div>
        @endforeach

    </div>

</body>
</html>
