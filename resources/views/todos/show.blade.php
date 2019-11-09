 @extends("layouts.app")


@section("title")
Détail de la liste : {{ $todo->name }}

@endsection()
 @section("content")
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
       <a href="/todos/{{ $todo->id}}/edit" class="btn Btn-info bg-light">Editer</a>
       <a href="/todos/{{ $todo->id}}/delete" class="btn Btn-danger text-white" >Supprimer </a>

        </div>

    </div>
    </div>
</div>
 @endsection()

