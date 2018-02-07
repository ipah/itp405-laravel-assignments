@extends('main-layout')

@section('title', 'Genres')

@section('content')
	
    <ul>
        @foreach($genres as $genre)
            <li>
                <a href="/tracks?genre={{$genre->Name}}">
                	{{$genre->Name}}
                </a>
                    
                
            </li>
        @endforeach
    </ul>



@endsection