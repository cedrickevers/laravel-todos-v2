@extends ("layouts.app")

@section("title")
   Créer une liste
@endsection()


@section("content")

<h2 class="center my-5">
    Créer une liste
</h2>

<div class="row">

    <div class="card">

    <div class="card-header">

        <div class="card-body">

            @if($errors->any())
        <div class="alert alert-danger">
            <ul class="list-group">
                @foreach($errors->all() as $error)
                <li class="list-group-item">

                    {{ $error }}
                </li>
                @endforeach
            </ul>
        </div>

            @endif

                <form action="/store-todos"  method="POST" class="form">
                    @csrf
                        <div class="form-group">
                            <input type="text" name="name" placeholder="nom" class="form-control">

                        </div>
                       <div class="form-group">

                            <textarea name="description" placeholder=" Decrire la tâche" id="" cols="30" rows="10" class="form-control"></textarea>

                    </div>

                    <div class="form-group text-center">

                        <button class="btn btn-primary" type="submit">Créer</button>
                    </div>
                    </form>
        </div>
    </div>
    </div>
</div>

@endsection
