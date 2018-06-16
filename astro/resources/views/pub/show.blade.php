@extends('main')

@section('title', '- View pub')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Publication {{ $pub->id }}</h1>
            <hr>

            <p><b>Date of publication:</b> {{ $pub->date_of_publication }}</p>
            <p><b>Digital Object Identifier:</b> {{ $pub->doi}}</p>

            <table>
            <thead>
            <th>First Name</th>
            <th>Last Name</th>
            </thead>

            <tbody>

            @foreach ($astronomers as $astronomer)
                <tr>
                    <td>{{$astronomer->first_name}}</td>
                    <td>{{$astronomer->last_name}}</td>
                </tr>
            @endforeach

            </tbody>
            </table>

            


        <div/>
    <div/>

@endsection