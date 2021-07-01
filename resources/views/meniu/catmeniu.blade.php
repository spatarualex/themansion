@extends('layouts.app')
@section('content')
    <div class="container">
            <h1>Categorie Meniu</h1>
            <div class="button">
                <a class="btn btn-dark" href="{{route('addcat')}}">{{ __('Adauga meniu') }}</a>
            </div><br><br>
            <table class="table">
                <div class="row">
                    <div class="col-md-4 col-sm-4">



                    </div>
                    <div class="col-md-4 col-sm-8">

                        <thead>
                        <tr>

                            <th scope="col">ID</th>
                            <th scope="col">Nume categorie</th>
                            <th scope="col">Imagine</th>
                        </tr>
                        </thead>
                        <tbody>
                        
                        @foreach($categorie_meniu as $cat)
                            <tr>
                                <th scope="row">{{$cat->id}}</th>
                                <td>{{$cat->nume}}</td>
                                <td><img src="{{asset('img/categorie_meniu/' . $cat->imagine)}}" width="100px" height="100px"></td>
                                <td><a class="btn btn-dark" href="{{route('catmeniu.edit', ['id' => $cat->id])}}">{{ __('edit') }}</a></td>
                                <td><a class="btn btn-dark" href="{{route('catmeniu.destroy', ['id' => $cat->id])}}">{{ __('delete') }}</a></td>
                            </tr>
                        @endforeach

                    </div>
                </div>

                </tbody>
            </table>
        </div>
@endsection