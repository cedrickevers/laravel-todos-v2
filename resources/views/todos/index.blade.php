 @extends ("layouts.app")

 @section("content")

 <div class="row justify-content-center">
<div class="card col-md-5">

<h1 class="text-center">Todos Page </h1>
<ul class="list-group  ">

@foreach($todos as $todo)
    <li class="list-group-item bg-red">{{$todo->name}} <a href="/todos/{{ $todo->id }}"class="btn btn-primary float-right">View</a>
</li>

@endforeach
</ul>
</div>

    </div>
    @endsection
