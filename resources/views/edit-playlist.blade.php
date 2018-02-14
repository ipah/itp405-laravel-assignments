@extends('main-layout')

@section('title', 'Playlists')

@section('content')
    <div class="mt-4">
       <h1>Edit Playlist</h1>

       @if ($errors->isNotEmpty())
            <div class="alert alert-danger" role="alert">
              @foreach($errors->all() as $message)
                {{$message}}
              @endforeach
            </div>
        @endif

       <form method="post" action="/playlists/{{$playlist->PlaylistId}}/edit">
            {{csrf_field()}}
            <div class="form-group row">
                <label for="name" class="mr-2 text-center">Playlist Name:</label>
                <input type="" name="name" id="name" class="form-control col-9" 
                value="{{ old('name',$playlist->Name) }}">
                <button class="btn btn-primary ml-3" type="submit">Save</button>
            </div> 
        </form>
    </div>
    
@endsection
