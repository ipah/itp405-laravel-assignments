@extends('main-layout')

@section('title', 'Profile')

@section('content')
	{{csrf_field()}}
    <div class="container mt-4">
        <h1>Welcome back, {{$user->name}}</h1>
        <p>Your email is {{$user->email}}</p>
    </div>
    <div>
    	<?php 
    		if( $provider =='twitter'){
    	?>
	    		<form action="/tweets" method="POST">
		    		

		    		<div class="form-group">
		    			<textarea name="body" cols="80" maxlength="280" class="form-control"></textarea> 
		    		
		    		</div>
		    		<button type='submit' class="btn btn-primary">Post Tweet</button>
		    		
		    	</form>
    	<?php
    		}
    		else if( $provider=='facebook'){

    	?>
    			<form action="/fbpost" method="POST">
	    		

		    		<div class="form-group">
		    			<textarea name="body" cols="80" maxlength="280" class="form-control"></textarea> 
		    		
		    		</div>
		    		<button type='submit' class="btn btn-primary">Post to Facebook</button>
		    		
		    	</form>
    	<?php
    		}

    	 ?>
	    	

	    
    </div>

@endsection