@extends('main-layout')

@section('title', 'Playlists')

@section('content')
    <a href="/playlists/new" class="btn btn-success mt-3" >Add Playlist</a>

    <table class="table mt-4">
        <thead></thead>
        <tbody>
            @foreach($playlists as $playlist)
                <tr>
                    <td> 
                        <a href="/playlists/{{$playlist->PlaylistId}}">{{$playlist->Name}}</a>
                    </td>
                    <td>
                        <a href="/playlists/{{$playlist->PlaylistId}}/edit" class="btn btn-primary">EDIT</a>
                    </td>
                    <td>
                        <a href="/playlists/{{$playlist->PlaylistId}}/delete" class="btn btn-danger">DELETE</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- <ul>
        @foreach($playlists as $playlist)
            <li>
                <a href="/playlists/{{$playlist->PlaylistId}}">
                    {{$playlist->Name}}
                </a>
                <a href="/playlists/{{$playlist->PlaylistId}}/edit">EDIT</a>
                            </li>
        @endforeach
    </ul> -->
@endsection
