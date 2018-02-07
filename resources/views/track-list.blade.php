@extends('main-layout')


@section('title', 'Tracks by Genre')

@section('content')
	
	<table class="table">
		<thead>
			<tr>
				<th>Song Name</th>
				<th>Artist</th>
				<th>Album</th>
				<th>Price</th>
			</tr>
			
		</thead>
		<tbody>

			@foreach($tracks as $track)

				<tr>
					<td>
						{{$track->track}}
					</td>
					<td>
						{{$track->artist}}
					</td>
					<td>
						{{$track->album}}
					</td>
					<td>
						{{$track->UnitPrice}}
					</td>
					
				</tr>

				

			@endforeach
		</tbody>
		
	</table>

@endsection