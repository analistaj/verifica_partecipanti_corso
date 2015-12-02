@extends('app')

@section('title')
Index
@stop

@section('content')
<h1>Attendees' dates</h1>
@if (count($attendees))
<ul>
	@foreach ($attendees as $attendee)
		<div>
			<h2><a href="{{action('AttendeesController@show', [$attendee->id])}}">{{$attendee->first_name}}{{$attendee->surname}}</a></h2>
			<ul>
				<li>{{$attendee->first_name}}</li>
				<li>{{$attendee->surname}}</li>
				<li>{{$attendee->email}}</li>
				<li>{{$attendee->id}}</li>
				<li>{{$attendee->phone_number}}</li>
				<li>{{$attendee->address}}</li>
				<li>{{$attendee->country}}</li>
			</ul>
		</div>
	@endforeach
</ul>
@else
<p>OOOPPSSS... No attendees at all, sorry! :'((</p>
@endif

@stop