
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
    <div class="card">
        @foreach ($trains as $train)

            <div class="contents">
                <p>{{$train->agency}}</p>
                <p>{{$train->departure_station}}</p>
                <p>{{$train->arrival_station}}</p>
                <p>{{$train->departure_time}}</p>
                <p>{{$train->arrival_time}}</p>
                <p>{{$train->train_code}}</p>
                <p>{{$train->number_of_carriages}}</p>
                <p>{{$train->in_time}}</p>
            </div>


        @endforeach
    </div>
</body>
</html>
