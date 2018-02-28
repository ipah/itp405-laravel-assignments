@extends('main-layout')

@section('title', 'Reviews')


@section('content')
	<a href="/albums/{{$album->AlbumId}}/reviews/new">Write Review</a>
	<table class="table">
		<thead>
			<tr>
				<th>Title</th>
				<th>Review</th>
				
			</tr>
			
		</thead>
		<tbody>

			@foreach($reviews as $review)

				<tr>
					<td>
						{{$review->title}}
					</td>
					<td>
						{{$review->body}}
					</td>
					
				</tr>

				

			@endforeach
		</tbody>
		
	</table>
	


@endsection