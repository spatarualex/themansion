@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Adaugare meniu</h1>

        <form action="{{route('add.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
            <label for="catname">Denumire meniu:</label><br>
            <input type="text" id="catname" name="catname">
            <br><br>
                <label for="image">Selecteaza o imagine:</label>
                <input type="file" id="image" name="image">
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
@endsection