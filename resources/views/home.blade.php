<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>

    @include('partials.header')

<div id="main">
    <div class="jumbotron">
        <h3 class="current-series-ad p-2 text-white">
            Current Series
        </h3>
    </div>
    <div class="container-fluid titles p-4">
        <div class="current-series row">
            <div class="col-2 p-4">
                @foreach($comics as $comic)
                    <img src="{{$comic['thumb']}}" alt="">
                    <p>{{$comic['title']}}</p>
                @endforeach
            </div>
        </div>
    </div>
</div>

    @include('partials.storeLinks')

    @include('partials.footer')

</body>
</html>