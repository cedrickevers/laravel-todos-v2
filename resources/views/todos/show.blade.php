 @extends("layouts.app")


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
        </div>
    </div>
    </div>
</div>
 @endsection()

