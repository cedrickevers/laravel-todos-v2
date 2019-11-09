<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="container bg-secondary text-white">
<div class="row">
    <div class="col-md-6 justify-content-center">

    <h2 class="text-center my-5">
        {{ $todo->name}}
    </h2>

    <div class="card bg-primary">
        <div class="card-header">
            Détails
        </div>
        <div class="card-body">
        {{$todo->name}} <br>
       <p  class="my-2"> {{ $todo->description}}<p>
        </div>
    </div>
    </div>
</div>
</div>
</body>
</html>
