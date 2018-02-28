
@extends('main-layout')

@section('title', 'Albums')


@section('content')
	<ul class="mt-4">
		@foreach($albums as $album)
			<li>
				<a href="/albums/{{$album->AlbumId}}/reviews">
					{{$album->Title}}
				</a>
				
			</li>
		@endforeach
	</ul>

	


@endsection