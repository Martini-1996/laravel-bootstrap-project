@extends('layouts.master')


@section('content')

<div  style="background-image: url('2D.jpg');height: 500px;padding-top: 180px;font-size: 400%;"
class=" text-white text-center">
<strong>GALLERY</strong> 
</div>
<div class="container w-50 mt-5 " >
<ul class="nav nav-pills nav-justified">
<li class="nav-item"><a data-toggle="tab" 
	class="nav-link btn btn-outline-info active"
	 href="#all">All</a></li>
<li class="nav-item"><a data-toggle="tab" class="nav-link btn btn-outline-info" href="#outdoor">Outdoor</a></li>
<li class="nav-item"><a data-toggle="tab" class="nav-link btn btn-outline-info" href="#interior">Interior</a></li>
<li class="nav-item"><a data-toggle="tab" class="nav-link btn btn-outline-info" href="#rooms">Rooms</a></li>
</ul></div>
<div class="tab-content mb-5">
	<div id="all" class="tab-pane active container">
	
		<div class="row px-5 mt-5">
			<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="1.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="1.jpg"></span></div>
				<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="1.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="1.jpg"></span></div>
					<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="1.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="1.jpg"></span></div>
					<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="1.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="1.jpg"></span></div>
		</div>
		<div class="row px-5 mt-4">
			 	<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="1.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="1.jpg"></span></div>
					<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="1.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="1.jpg"></span></div>
					<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="1.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="1.jpg"></span></div>
					<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="1.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="1.jpg"></span></div>
		</div>

		<div class="row px-5 mt-4">
				<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="1.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="1.jpg"></span></div>
					<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="1.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="1.jpg"></span></div>
					<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="1.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="1.jpg"></span></div>
					<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="1.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="1.jpg"></span></div>
		</div>
	
	</div>
	<div id="outdoor" class="tab-pane  container">
			<div class="row px-5 mt-4">
		<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="martin.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="martin.jpg"></span></div>
					<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="martin.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="martin.jpg"></span></div>
					<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="martin.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="martin.jpg"></span></div>
					<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="martin.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="martin.jpg"></span></div>
		</div>

		<div class="row px-5 mt-4">
			<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="2.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="2.jpg"></span></div>
					<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="martin.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="martin.jpg"></span></div>
					<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="martin.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="martin.jpg"></span></div>
					<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="martin.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="martin.jpg"></span></div>
		</div>
	</div>
	<div id="interior" class="tab-pane  container">
			<div class="row px-5 mt-4">
			<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="1.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="1.jpg"></span></div>
					<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="6D.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="6D.jpg"></span></div>
					<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="6D.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="6D.jpg"></span></div>
					<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="6D.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="6D.jpg"></span></div>
		</div>

		<div class="row px-5 mt-4">
			<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="1.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="1.jpg"></span></div>
					<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="3.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="3.jpg"></span></div>
					<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="3.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="3.jpg"></span></div>
					<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="3.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="3.jpg"></span></div>
		</div>
	</div>
	<div id="rooms" class="tab-pane  container">
			<div class="row px-5 mt-4">
			<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="2D.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="2D.jpg"></span></div>
					<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="2D.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="2D.jpg"></span></div>
					<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="2D.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="2D.jpg"></span></div>
					<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="1.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="1.jpg"></span></div>
		</div>

		<div class="row px-5 mt-4">
				<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="1.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="1.jpg"></span></div>
					<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="2D.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="2D.jpg"></span></div>
					<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="2D.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="2D.jpg"></span></div>
					<div class="col-sm-3">
				<span data-toggle="lightbox" 
				class="thumbnails"><img src="1.jpg" 
				class="img-fluid img-thumbnail thumbnail" data-target="1.jpg"></span></div>
		</div>
	</div>
</div>
@endsection
