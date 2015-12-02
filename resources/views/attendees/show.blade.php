@extends('app')

@section('title')
{{$attendee->first_name}}{{$attendee->surname}}
@stop

@section('content')
<h1>{{$attendee->first_name}}{{$attendee->surname}}</h1>
<ul>
	  <li>{{$attendee->first_name}}</li>
	  <li>{{$attendee->surname}}</li>
	  <li>{{$attendee->email}}</li>
	  <li>{{$attendee->id}}</li>
	  <li>{{$attendee->phone_number}}</li>
	  <li>{{$attendee->address}}</li>
	  <li>{{$attendee->country}}</li>
</ul>
@stop