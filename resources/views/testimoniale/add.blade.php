@extends('layouts.app')

@section('content')
    <div class = 'container'>


            <h1>Bine ati venit la pagina Add</h1>
            {!! Form::open(['action'=> 'TestimonialController@store','method' =>'POST' , 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
            {{Form::label('nume','Nume')}}
            {{Form::text('nume','',['class' => 'form-control','placeholder' => 'Nume'])}}
            </div>
            <div class="form-group">
            {{Form::label('categorie','Categorie')}}
            {{Form::text('categorie','',['class' => 'form-control','placeholder' => 'Categorie'])}}
            </div>
            <div class="form-group" , id = "descriere"
            {{Form::label('descriere','Descriere')}}
            {{Form::textarea ('descriere','',['class' => 'form-control','placeholder' => 'Descriere'])}}
            </div>
            <div class="form-group">
            {{Form::file('Poza_de_profil')}}
            </div>
            {!!Form::submit('Trimite',['class'=>'btn btn-primary'])!!}
            {!! Form::close() !!}

    </div>


@endsection
