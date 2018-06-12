@extends('layouts.master')


@section('content')
	 @include('inc.carousel')
	 @if(session('success'))
	 <div class="mt-4 alert alert-success alert-dismissible border border-success">
	 	<strong>{{session('success')}}</strong><button data-dismiss="alert" class="close">&times;</button>
	 </div>
	@endif

	
<div id="packages"  class="mt-5 mb-5">
	
	<div class="container">
		<div class="h1 text-center font-weight-normal mb-4">Our Packages</div>
		<div class="d-flex justify-content-around">
			<div class="card shadow-lg" style="width: 200px;height: 400px;">
			<img src="1.jpg" class="card-img-top">
			<div class="card-body bg-light text-center">
				
				<h4 class="card-title">Title</h4>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et.</p>
				
			</div>
		</div>	<div class="card shadow-lg" style="width: 200px;height: 400px;">
			<img src="1.jpg" class="card-img-top">
			<div class="card-body bg-light text-center">
				
				<h4 class="card-title">Title</h4>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et.</p>
			</div>
		</div>
		<div class="card shadow-lg" style="width: 200px;height: 400px;">
			<img src="1.jpg" class="card-img-top">
			<div class="card-body bg-light text-center">
				
				<h4 class="card-title">Title</h4>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et.</p>
			
			</div>
		</div>
		</div>
		
	</div>
</div>

<div id="welcome" style="background-image: url('6D.jpg');margin-top: 100px;background-repeat: no-repeat;" >
<div class="container p-4">
	<div class="media" style="height: 400px;">
			<div class="media-body mr-auto text-white  text-left align-self-center">
				
				<div class="h1 text-capitalize">
				welcome to hotel</div>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et.</p>
				<a href="#more" class="btn btn-primary" data-toggle="collapse">Read More</a>
				<p class="lead collapse" id="more" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<img class="align-self-center " src="2.jpg" height="200px" width="350px">
		</div>
		
</div>
</div>
<div id="speciale" style="background-color: #f5f5f5;"  class=" container shadow mt-5">
	<div class="h1 text-center">Our Speciality</div>
	<div class="row p-5">
		<div class="col-sm-7">
			<img src="rogner.jpg" class="img-fluid"></div>
		
			<div class="col-sm-5 text-black-50">
				<div class="display-4 mb-4 ml-4"><small>Best Food</small> </div>
				<p class="ml-4"><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</small></p>
			</div>
	</div>
	<div class="row p-5 " style="margin-top: -50px;" >
		
			<div class="col-sm-5 text-black-50">
				<div class="display-4 mb-4 ml-4"><small>Best Food</small> </div>
				<p class="ml-4"><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</small></p>
			</div>
			<div class="col-sm-7">
			<img src="rogner.jpg" class="img-fluid"></div>
		
	</div>


</div>
<div id="feedback" class="mt-5" ">

	<div class="h1 font-weight-normal text-center text-capitalize mb-5">What our visitors say
	</div>
	<div class="carousel slide " id="demo2" 
	data-ride="carousel" >
		
	<div class="carousel-inner ">
		<div class="carousel-item active ">
			<div class="d-flex flex-column align-items-center pl-5 pr-5">
			<img class="rounded-circle" src="martin.jpg" 
			height="160px" width="160px">
		
				<p class="lead text-center mt-4 mb-4 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
				<strong >Martin</strong>
				<div class="h5 mt-2">ENTHUSIAST</div>
			</div>
		</div>
		<div class="carousel-item">
			<div class="d-flex flex-column align-items-center pl-5 pr-5">
			<img class="rounded-circle" src="martin.jpg" 
			height="160px" width="160px">
		
				<p class="lead text-center  mt-4 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
				<strong>Martin</strong>
				<div class="h5 mt-2">ENTHUSIAST</div>
			</div>
		</div>
		<div class="carousel-item">
			<div class="d-flex flex-column align-items-center pl-5 pr-5">
			<img class="rounded-circle" src="martin.jpg" 
			height="160px" width="160px">
		
				<p class="lead text-center  mt-4 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
				<strong>Martin</strong>
				<div class="h5 mt-2">ENTHUSIAST</div>
			</div>
		</div>
	</div>
	<a href="#demo2" class="carousel-control-prev" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
	<a href="#demo2" class="carousel-control-next" data-slide="next"><span class="carousel-control-next-icon"></span></a>
</div>
</div>
@endsection
