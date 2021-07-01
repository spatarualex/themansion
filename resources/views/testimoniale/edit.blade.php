@extends('layouts.app')

@section('content')

    <div class="container">

                {!! Form::open(['action'=> ['TestimonialController@update',$testimonial->id], 'method' =>'POST' ,'enctype' => 'multipart/form-data']) !!}

                <div class="form-group">

                {{Form::label('nume','Nume')}}

                {{Form::text('nume',$testimonial->nume,['class' => 'form-control','placeholder' => 'Nume'])}}

                </div>

                <div class="form-group">

                {{Form::label('categorie','Categorie')}}

                {{Form::text('categorie',$testimonial->categorie,['class' => 'form-control','placeholder' => 'Categorie'])}}

                </div>

                <div class="form-group">

                {{Form::label('descriere','Descriere')}}

                {{Form::textarea ('descriere',$testimonial->descriere,['class' => 'form-control','placeholder' => 'Descriere'])}}

                </div>


                <div class="form-group">

                {{Form::file('Poza_de_profil')}}

                </div>

                {{Form::submit('Trimite',['class'=>'btn btn-primary'])}}

                {!! Form::close() !!}

    </div>
@endsection
