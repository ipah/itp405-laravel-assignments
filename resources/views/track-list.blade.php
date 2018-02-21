@extends('main-layout')


@section('title', 'Tracks by Genre')

@section('content')
	
	<table class="table">
		<thead>
			<tr>
				<th>Song Name</th>
				<th>Artist</th>
				<th>Album</th>
				<th>Media Type</th>
				<th>Price</th>
			</tr>
			
		</thead>
		<tbody>

			@foreach($tracks as $track)

				<tr>
					<td>
						{{$track->Name}}
					</td>
					<td>
						{{$track->album->artist->Name}}
					</td>
					<td>
						{{$track->album->Title}}
					</td>
					<td>
						{{$track->mediatype->Name}}
					</td>
					<td>
						{{$track->UnitPrice}}
					</td>
					
				</tr>

				

			@endforeach
		</tbody>
		
	</table>

@endsection