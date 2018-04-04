@extends('main-layout')

@section('title', 'Profile')

@section('content')

    <div class="container mt-4">
        <h1>Welcome back, {{$user->name}}</h1>
        <p>Your email is {{$user->email}}</p>
    </div>
    <div>
    	<form action="/tweets" method="POST">
    		{{csrf_field()}}
    		<div class="form-group">
    			<textarea name="body" cols="80" maxlength="280" class="form-control"></textarea> 
    		
    		</div>
    		<button type='submit' class="btn btn-primary">Post Tweet</button>
    		
    	</form>
    </div>

@endsection