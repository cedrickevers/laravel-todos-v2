 @extends ("layouts.app")

 @section("title")
    Todo liste
    @endsection()


 @section("content")

 <div class="row justify-content-center">
<div class="card col-md-8">

<h1 class="text-center">Todos Page </h1>
<ul class="list-group  ">

@foreach($todos as $todo)
    <li class="list-group-item ">
        {{$todo->name}}

        @if(!$todo->completed)
        <a href="/todos/{{ $todo->id }}/complete "class="btn btn-warning float-right">Tache completée</a>

        @endif


         <a href="/todos/{{ $todo->id }}"class="btn btn-primary float-right mr-2 ">View</a>

</li>

@endforeach
</ul>
</div>

    </div>
    @endsection
