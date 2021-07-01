@extends('layouts.app')
@section('content')
    <div class="container">
            <h1>Slidere</h1>
            <div class="button">
                <a class="btn btn-dark" href="{{route('form.add')}}">{{ __('Adauga poza slider') }}</a>
            </div><br><br>
            <table class="table">
                <div class="row">
                    <div class="col-md-4 col-sm-4">



                    </div>
                    <div class="col-md-4 col-sm-8">

                        <thead>
                        <tr>

                            	<th scope="col">ID</th>
                            	<th scope="col">Title</th>
                            	<th scope="col">Image</th>
			 	                <th scope="col">Descriere</th>
 				                
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($formm as $slider)
                            <tr>
                                <th scope="row">{{$slider->id}}</th>
                                <td>{{$slider->title}}</td>
                                <td>{{$slider->descriere}}</td>
                                <td><img src="{{asset('img/sliders/' . $slider->image)}}" width="100px" height="100px"></td>
                                <td><a class="btn btn-dark" href="{{route('form.edit', ['id' => $slider->id])}}">{{ __('edit') }}</a></td>
                                <td><a class="btn btn-dark" href="{{route('form.destroy', ['id' => $slider->id])}}">{{ __('delete') }}</a></td>
                            </tr>
                        @endforeach

                    </div>
                </div>

                </tbody>
            </table>
        </div>
@endsection