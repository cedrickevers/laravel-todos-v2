<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title> @yield("title")</title>
</head>
<body>
<div class="container bg-secondary">

        <nav class="navbar navbar-expand-lg navbar-light bg-dark text-gold>
                <a class="navbar-brand" href="#">Todos</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="/">accueil <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link active" href="/todos">Todo list <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link active" href="/new-todos">Creer une liste  <span class="sr-only">(current)</span></a>
                  </div>
                </div>
              </nav>
              <div class="container">
                  @if(session()->has("success"))
                  <div class="alert alert-success">
                    {{ session()->get("success")}}
                  </div>

                  @endif()
              </div>

    @yield("content")
</div>


</body>
</html>
