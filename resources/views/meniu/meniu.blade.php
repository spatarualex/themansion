@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Meniu</h1>
        <div class="button">
            <a class="btn btn-dark" href="{{route('meniu.add')}}">{{ __('Adauga mancaruri') }}</a>
        </div><br><br>
        <table class="table">
            <div class="row">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nume mancare</th>
                        <th scope="col">Pret</th>
                        <th scope="col">Imagine</th>
                        <th scope="col">CATEGORIE</th>
                        <th scope="col">Descriere</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($meniu as $menu)
                        <tr>
                            <th scope="row">{{$menu->id}}</th>
                            <td>{{$menu->nume}}</td>
                            <td>{{$menu->pret}}</td>
                            <td><img src="{{asset('img/meniu/' . $menu->imagine)}}" width="100px" height="100px"></td>
                            <td>{{$menu->cat_name}}</td>
                            <td>{{$menu->descriere}}</td>
                            <td> <a class="btn btn-dark" href="{{route('meniu.edit', ['id' => $menu->id])}}">{{ __('edit') }}</a></td>
                            <td><a class="btn btn-dark" href="{{route('meniu.destroy', ['id' => $menu->id])}}">{{ __('delete') }}</a></td>
                        </tr>
                    @endforeach
            </div>


            </tbody>
        </table>
    </div>
@endsection