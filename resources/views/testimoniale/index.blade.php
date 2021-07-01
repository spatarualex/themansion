@extends('layouts.app')
@section('content')
    <div class="container">
            <h1>Testimonial</h1>
            <div class="button">
                <a class="btn btn-dark" href="{{route('testiimoniale.add')}}">{{ __('Creaza-ti un testimonial') }}</a>
            </div><br><br>
            <table class="table">
                <div class="row">
                    <div class="col-md-4 col-sm-4">



                    </div>
                    <div class="col-md-4 col-sm-8">

                        <thead>
                        <tr>

                            	<th scope="col">ID</th>
                            	<th scope="col">Nume</th>
                            	<th scope="col">Categorie</th>
			 	                <th scope="col">Descriere</th>
 				                <th scope="col">Poza de profil</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($testimonial as $persoane)
                            <tr>
                                <th scope="row">{{$persoane->id}}</th>
                                <td>{{$persoane->nume}}</td>
                                <td>{{$persoane->categorie}}</td>
                                <td>{{$persoane->descriere}}</td>
                                <td><img src="{{asset('img/sliders_2/' . $persoane->Poza_de_profil)}}" width="100px" height="100px"></td>
                                <td><a class="btn btn-dark" href="{{route('testiimoniale.edit', ['id' => $persoane->id])}}">{{ __('edit') }}</a></td>
                                <td><a class="btn btn-dark" href="{{route('testiimoniale.destroy', ['id' => $persoane->id])}}">{{ __('delete') }}</a></td>
                            </tr>
                        @endforeach

                    </div>
                </div>

                </tbody>
            </table>
        </div>
@endsection