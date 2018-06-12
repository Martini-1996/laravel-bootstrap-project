@extends('layouts.master')


@section('content')

<div  style="background-image: url('2D.jpg');height: 500px;padding-top: 180px;font-size: 400%;"
class=" text-white text-center">
<strong>CONTACT</strong> 
</div>
@if(session('sukses'))
<div class="alert alert-success alert-dismissible m-3">{{session('sukses')}}<button class="close" data-dismiss="alert" >&times;</button></div>
@endif
<div class="container m-4 mt-5">
<div class="row text-black-50" style="font-family: 'calibri';">
	<div class="col-sm-4">
	<div class="card text-center border-0 bg-light">
		<i class="fa fa-street-view" style="color: teal;font-size: 100px;"></i>
		<div class="card-body">
			<div class="card-title"><strong>Address</strong></div>
			<div class="card-text"><p>
				Sheshi Italia <br>Tirane Albania</p></div>
		</div>
	</div>
	</div>
		<div class="col-sm-4">
	<div class="card text-center border-0 bg-light">
		<i class="fa fa-mobile" style="color: teal;font-size: 100px;"></i>
		<div class="card-body">
			<div class="card-title"><strong>Phone</strong></div>
			<div class="card-text"><p>
				(355) 68 5972351 </p></div>
		</div>
	</div>
	</div>
		<div class="col-sm-4">
	<div class="card text-center border-0 bg-light">
		<i class="fa fa-envelope-o " style="color: teal;font-size: 100px;"></i>
		<div class="card-body">
			<div class="card-title"><strong>Email</strong></div>
			<div class="card-text"><p>
				martin.gjura@fti.edu.al</p></div>
		</div>
	</div>
	</div>
</div>
</div>
<div class="container text-center mt-5 w-75 mb-5 " style="font-family: cursive;">
	
<h1>LEAVE A MESSAGE</h1>

<h4 class="pb-4"><strong>Feel free to contact us</strong></h4>

<form action="/contact" method="post">
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	<div class="row">
<div class="col-sm-6">
	<div class="form-group">
		
	<input type="text" name="name" class="form-control" placeholder="Your Name">
	@if($errors->has('name'))
	<div class="text-danger">
	{{$errors->first('name')}}</div>
	@endif
    </div>
</div>
<div class="col-sm-6">
<div class="form-group">
		
	<input type="text" name="phone" class="form-control" placeholder="Phone">
</div>
</div>
</div>

<div class="form-group">
	<input type="text" name="email" class="form-control" placeholder="Email">
	@if($errors->has('email'))
	<div class="text-danger">
	{{$errors->first('email')}}</div>
	@endif
</div>
<div class="form-group">
	<textarea  name="message" class="form-control" placeholder="Message"></textarea>
	@if($errors->has('message'))
	<div class="text-danger">
	{{$errors->first('message')}}</div>
	@endif
</div>


<input type="submit" name="" class="btn btn-success btn-block" value="Send Message">
</form>

</div>



@endsection

