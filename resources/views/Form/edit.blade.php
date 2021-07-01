@extends('layouts.app')

@section('content')

<div class = 'container'>
            <h1>Bine ati venit la pagina Editare pentru Form </h1>
    {!! Form::open(['action'=> ['FormController@update',$form->id], 'method' =>'POST' , 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$form->title,['class' => 'form-control','placeholder' => 'title'])}}
    </div>
    <div class="form-group">
        {{Form::file('image')}}
    </div>
    <div class="form-group">
        {{Form::label('descriere','Descriere')}}
        {{Form::textarea ('descriere',$form->descriere,['class' => 'form-control','placeholder' => 'Descriere'])}}
    </div>
    {{Form::submit('Trimite',['class'=>'btn btn-primary'])}}
    {!!Form::close()!!}
</div>


@endsection