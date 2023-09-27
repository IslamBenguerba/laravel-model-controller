<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <title>Document</title>

</head>

<body>
    <div class="container">
        <h1>Una lista di film...</h1>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach ($films as $film)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$film->title}} {{$film->vote}}</h5>
                            <p class="card-text d-flex">
                                <h4>titolo orginale: <strong>{{$film->original_title}}</strong></h4>
                                <h4>Nation: <strong>{{$film->nationality}}</strong></h4>
                            </p>
                        </div>
                        <div class="card-footer bg-transparent ">{{$film->date}}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
