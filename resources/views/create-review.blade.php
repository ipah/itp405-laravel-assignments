@extends('main-layout')

@section('title', 'Create Review')


@section('content')
	
	<div class="container">
		 @if ($errors->isNotEmpty())
	        <div class="alert alert-danger" role="alert">
	          @foreach($errors->all() as $message)
	            {{$message}}
	          @endforeach
	        </div>
	    @endif
		<form action="/albums/{{$album->AlbumId}}/reviews" method="post">
			{{ csrf_field() }}
			<label>Title: </label>
			<input type="" name="title" id='title' class="form-control" value="{{old('title')}}">

			<label class="mt-4">Review:</label>
			<textarea class="form-control" name="review" id="review" value="{{old('review')}}">
			
			</textarea>

			<button class="btn btn-primary">Submit</button>
		</form>
		
	</div>
		

@endsection