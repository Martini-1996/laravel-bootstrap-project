@extends('layouts.master')


@section('content')
<h2>Messages</h2>

@if(count($messages)>0)
@foreach($messages as $message)
<ul class="list-group">
<li class="list-group-item list-group-item-primary">{{$message->name}}</li>
<li class="list-group-item list-group-item-primary">{{$message->email}}</li>
<li class="list-group-item list-group-item-primary">{{$message->message}}</li>
</ul>
@endforeach
@endif

<a class="btn btn-primary" href="/">Click to go Back</a>
@endsection


