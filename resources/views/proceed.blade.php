@extends('layouts.master')

@include('inc.modal')
@section('content')
<div style="background-image: url('2D.jpg');height: 500px;padding-top: 180px;font-size: 400%;"
class=" text-white text-center">
<strong>BOOK NOW</strong> 
</div>
@if(session('alert'))
	 <div class="mt-4 alert alert-warning alert-dismissible border border-warning">
	 	<strong>{{session('alert')}}</strong><button data-dismiss="alert" class="close">&times;</button>
	 </div>
	@endif
<div class="container mt-5 " >
	<div class="display-3 text-center mb-5 text-capitalize">Select Your Best {{$type}} Room
	</div>
	
<form method="post" action="/finish">
	<input type="hidden" name="_token" 
	value="<?php echo csrf_token();?>">
@if(count($rooms)>0)
@foreach($rooms as $room)
<div class="form-check">
<div class="row">

	

<div class="col-sm-5">
	<ul class="list-group">
     <li class="list-group-item"><span class="text-dark">Floor </span> : <span class="text-dark-50"> {{$room->kati}}</span></li>
     <li class="list-group-item"><span class="text-dark">Persons</span>  :
     	<span class="text-dark-50">
     	@if($room->hapsira==22)
     	2 (couple)
     	@else
     	{{$room->hapsira}}
     	@endif</span></li>
    
     <li class="list-group-item"><span class="text-dark"> Price</span> : <span class="text-dark-50"> {{$room->cmimi}}$/day</span></li>
      <li class="list-group-item"><span class="text-dark">From Date :</span> 
       <input class="form-control" type="date"  name="first{{$room->id}}"><span class="text-dark-50">
	   
	   <div class="text-danger">
	   	<strong>
       	<?php 
       	if ($errors->has("first$room->id")) {
       		echo "The DATE field is required";
       	}
        ?></strong>
       </div>
       	
       	
        Till Date : </span><input type="date" class="form-control" name="last{{$room->id}}">
        <div class="text-danger">
        	<strong>
       	<?php 
       	if ($errors->has("last$room->id")) {
       		echo "The DATE field is required";
       	}
        ?></strong>
       </div>
       	
    </li>
     <li class="list-group-item">
     	<button type="button"  class="btn btn-info"  data-target="#image" data-toggle="modal">View Image</button></li>
    </ul>
</div>
<div class="col-sm-7">
    <ul class="list-group">
     <li class="list-group-item"><span class="text-dark">Description </span> : <br><span class="text-dark-50">{{$room->pershkrimi}}</span> </li>
     <li class="list-group-item text-center">	<label class="form-check-label"> <input type="checkbox" value="{{$room->id}}" name="{{$room->id}}" class="form-check-input"><h5 class="ml-5"><strong>Select</strong> </h5></label></li></ul>
</div>



    </div>
    </div>

      <div class="dropdown-divider my-5"></div>
@endforeach

<div class="container my-4 ">
	<div class="display-4 text-center mb-5 text-capitalize">please fill in the information below
	</div>
	<div class="row  p-1">
		<div class="col-sm-3 ">
<span class="text-dark float-right 
{{$errors->has('name') ? 'text-danger' : ''}} " > Name : </span>
        </div>
        <div class="col-sm-8">
<input type="text" placeholder="Your Name" name="name" class="form-control">
        @if($errors->has('name'))
        <div class="text-danger">
       <strong> The 'Name' field is required</strong> 
        </div>
        @endif
        </div>
    </div>
<div class="row p-1">
		<div class="col-sm-3 ">

<span class="text-dark float-right
 {{$errors->has('surname')? 'text-danger': ''}}">Surname : </span>

        </div>
        
        <div class="col-sm-8">
<input type="text" name="surname" placeholder="Your Surname" class="form-control">
        @if($errors->has('surname'))
        <div class="text-danger">
         <strong> The 'Surname' field is required</strong> 
        </div>
        @endif
        </div>
    </div>
 <div class="row p-1">
		<div class="col-sm-3 ">
<span class="text-dark float-right {{$errors->has('passport')? 'text-danger': ''}}">Passport ID : </span>
        </div>
        <div class="col-sm-8">
<input type="text" name="passport" placeholder="Your Passport ID" class="form-control">
        @if($errors->has('passport'))
        <div class="text-danger">
           <strong> The 'Passport' field is required</strong> 
        </div>
        @endif
        </div>
    </div>
<div class="row p-1">
		<div class="col-sm-3 ">
<span class="text-dark float-right {{$errors->has('credit')? 'text-danger': ''}}">Credit Card Nr. : </span>
        </div>
        <div class="col-sm-8">
<input type="text" name="credit" placeholder="Your Credit Card Number" class="form-control">
        @if($errors->has('credit'))
        <div class="text-danger">
          <strong> The 'Credit Card' field is required</strong> 
        </div>
        @endif
        </div>
    </div>
    <div class="row p-1" >
    	<div class="col-sm-3"></div>
    	<div class="col-sm-8">
<input type="submit" name="book" class="btn mt-2 btn-block btn-info " value="BOOK"></div></div>
</div>
@else
<div class="alert my-5 alert-info alert-dismissible border border-info">
<strong>	No Available Rooms! Please try again soon.<span class="offset-4 text-capitalize btn btn-info"><a href="rooms" class="alert-link"> Click here to go back</a></span></strong>

</div>
@endif
</form>
</div>
@endsection
