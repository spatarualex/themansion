@extends('layouts.app')

@section('content')
    <div class="container">
  <div class="row">
    <div class="col-md-12">
        <br />
        <h3>Editare meniu</h3>
        <br />
        <form method="get" action="{{route('meniu.update', ['id' => $meniu->id])}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Denumire mancare:</label><br>
                <input type="text" id="name" name="name" value="{{$meniu->nume}}">
                <br><br>
                <label for="price">Pretul:</label><br>
                <input type="text" id="price" name="price" value="{{$meniu->pret}}">
                <br><br>
                <label for="category_id">ID CATEGORIE:</label><br>
                <input type="text" id="category_id" name="category_id" value="{{$meniu->category_id}}">
                <br><br>
                <label for="descriere">Descriere:</label><br>
                <input type="text" id="descriere" name="descriere" value="{{$meniu->descriere}}">
                <br><br>
                <label for="image">Selecteaza o imagine:</label><br>
                <input type="file" id="image" name="image" value="{{$meniu->imagine}}"><br><br>
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
  </div>
    </div>

@endsection