@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editare meniu</h1>

        <form action="{{route('catmeniu.update', ['id' => $catmeniu->id])}}" method="get" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="catname">Denumire meniu:</label><br>
                <input type="text" id="catname" name="catname" value="{{$catmeniu->nume}}">
                <br><br>
                <label for="image">Selecteaza o imagine:</label><br>
                <input type="file" id="image" name="image"><br><br>
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection