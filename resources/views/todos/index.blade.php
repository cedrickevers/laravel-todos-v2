<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title>Todos</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
<div class="card col-md-5">

<h1 class="text-center">Todos Page </h1>
<ul class="list-group  ">

@foreach($todos as $todo)
    <li class="list-group-item bg-red">{{$todo->name}}</li>

@endforeach
</ul>
</div>

    </div>
</div>

</body>
</html>
