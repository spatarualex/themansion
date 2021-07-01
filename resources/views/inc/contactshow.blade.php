@extends('layouts.app')

@section('content')

    <div class="container">
        <table class="table">
            <thead>
            <tr>

                <th scope="col">id</th>
                <th scope="col">Nume</th>
                <th scope="col">Email</th>
                <th scope="col">Mesaj</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $key => $value)
            <tr>
                <th scope="row">{{$value->id}}</th>
                <td>{{$value->nume}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->mesaj}}</td>

            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection