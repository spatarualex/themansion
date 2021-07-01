@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Adaugare fel de mancare</h1>

        <form action="{{route('meniuadd.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Denumire mancare:</label><br>
                <input type="text" id="name" name="name">
                <br><br>
                <label for="price">Pretul:</label><br>
                <input type="text" id="price" name="price">
                <br><br>

                <label for="category_id">Categorii:</label>
                    <select name="category_id" id="category_id"  class="form-control">
                        @foreach($categorie_meniu as $menu)
                        <option value="{{$menu->id}}" >{{$menu->nume}} </option>
                        @endforeach
                    </select>

                <br><br>
                <label for="descriere">Descriere:</label><br>
                <input type="text" id="descriere" name="descriere">
                <br><br>
                <label for="image">Selecteaza o imagine:</label>
                <input type="file" id="image" name="image">
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
@endsection