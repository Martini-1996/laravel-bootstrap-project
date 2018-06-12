@extends('layouts.master')


@section('content')
<div style="background-image: url('2D.jpg');height: 500px;padding-top: 180px;font-size: 400%;"
class=" text-white text-center">
<strong>BOOK NOW</strong> 
</div>
<div class="container mt-5 p-5">
	<div class="text-capitalize mb-5 display-4"><small>Choose your {{$type}}-Rooms preferences</small> </div>
	
	<form method="post" action="/proceed">
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		<input type="hidden" name="type" value="{{$type}}">
		<div class="form-group">
			<label>What floor do you prefer?</label>
			<select name="floor" class="form-control">
				<option value="1">First Floor</option>
				<option value="2">Second Floor</option>
				<option value="3">Third Floor</option>
				<option value="4">Fourth Floor</option>
			</select>
		</div>
		<div class="form-group">
			<label>How many persons you wish the room to be suitable for? </label>
			<select name="persons" class="form-control">
			<option value="1">1 person</option>
			<option value="2">2 persons</option>
			<option value="22">2 persons (couple)</option>
			<option value="3">3 persons</option>
			<option value="4">4 persons</option>
		    </select>
		</div>
		<div class="form-group">
			<label>Select the best price?</label>
			<select class="form-control" name="price">
				<option value="1">100$-200$/day</option>
				<option value="2">400$-600$/day</option>
				<option value="3">600$-700$/day</option>
				<option value="4">1000$-2000$/day</option>
			</select>
		</div>
		<div class="offset-9 col-sm-3 mt-5">
		<input type="submit" class="btn btn-info btn-block" value="Proceed"></div>
	</form>
</div>
@endsection
