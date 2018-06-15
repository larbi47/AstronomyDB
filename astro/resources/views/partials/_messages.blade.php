@if (Session::has('success'))

    <div class="alert alert-success" role="alert">
        <strong>Success!</strong> {{Session::get('success')}}
    </div>

@endif

@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <strong>Error!</strong>
        <ul>
            @foreach($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::has('delete'))

    <div class="alert alert-danger" role="alert">
        <strong>Deleted!</strong> {{Session::get('delete')}}
    </div>

@endif