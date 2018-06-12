@extends('layouts.master')
@include('inc.modal')
@section('content')
<div id="about" style="background-image: url('2D.jpg');height: 500px;padding-top: 180px;font-size: 400%;"
class=" text-white text-center">
<strong>ADMINISTRATOR</strong> 
</div>

<div class="container mt-5 " style="margin-bottom: 80px;">
	<div class="display-4 text-center m-5">Reservations Table</div>
	<table class="table table-striped table-bordered table-hover ">
		<thead class="thead-dark"><tr><th>Registration_Nr</th><th>Room_Nr</th><th>Name</th><th>Surname</th><th>Passport_Id</th><th>Credit_Card</th><th>From_Date</th><th>Till_Date</th></tr></thead>
@if(count($reservations)>0)
@foreach($reservations as $reservation)
<tr><td>{{$reservation->registration_nr}}</td><td>{{$reservation->numri}}</td><td>{{$reservation->name}}</td><td>{{$reservation->surname}}</td><td>{{$reservation->passport_id}}</td><td>{{$reservation->credit_card}}</td><td>{{$reservation->from_date}}</td><td>{{$reservation->till_date}}</td></tr>

@endforeach
@endif
	</table>
</div>


@endsection
