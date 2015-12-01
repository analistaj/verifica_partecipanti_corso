@extends('app')

@section('title')
{{$attendee->first name, surname}}
@stop

@section('content')
<h1>{{$attendee->first name, surname}}</h1>
<ul>
	<li>{{$attendee->email}}</li>
	<li>{{$attendee->id}}</li>
	<li>{{$attendee->address}}</li>
	<li>{{$attendee->address}}</li>
</ul>
@stop