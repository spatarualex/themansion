@extends('layouts.app')

@section('content')

    <div class = "container">

        <h1>Bine ati venit la pagina Create </h1>

        {!! Form::open(['action'=> 'FormController@store','method' =>'POST','enctype' => 'multipart/form-data']) !!}

            <div class="form-group">

            {{Form::label('title','Title')}}

            {{Form::text('title','',['class' => 'form-control','placeholder' => 'title'])}}

            </div>

            <div class="form-group">

            {{Form::file('image')}}

            </div>

            <div class="form-group">

            {{Form::label('descriere','Descriere')}}

            {{Form::textarea ('descriere','',['class' => 'form-control','placeholder' => 'Descriere'])}}

            </div>

            {{Form::submit('Trimite',['class'=>'btn btn-primary'])}}

            {!!Form::close()!!}

    </div>

@endsection