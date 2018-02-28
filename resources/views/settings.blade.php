@extends('main-layout')

@section('title', 'Settings')

@section('content')

	<div class="container">

		<form method="post" action="/settings">
			{{ csrf_field() }}
			<div class="form-check">
			   
			    @if ($setting->value == 1)
			    	<input type="checkbox" class="form-check-input" id="settingMode" name="settingMode" checked="checked">

			    @else
			    	<input type="checkbox" class="form-check-input" id="settingMode" name="settingMode">

			    @endif

			    
			    <label class="form-check-label" for="settingMode">Maintenance Mode</label>
			 </div>

			 <button class="btn btn-primary">Submit</button>
		</form>
	</div>

@endsection