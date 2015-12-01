@extends('app')

@section('title')
Index
@stop

@section('content')
<h1>Attendees' dates</h1>
@if (count($users))
<ul>
	@foreach ($attendees as $attendee)
		<div>
			<h2><a href="{{action('AttendeesController@show', [$attendee->id])}}">{{$attendee->first name, surname}}</a></h2>
			<ul>
				<li>{{$attendee->first name}}</li>
				<li>{{$attendee->surname}}</li>
				<li>{{$attendee->email}}</li>
				<li>{{$attendee->id}}</li>
				<li>{{$attendee->phone number}}</li>
				<li>{{$attendee->address}}</li>
				<li>{{$attendee->country}}</li>
			</ul>
		</div>
	@endforeach
</ul>
@else
<p>no attendees, sorry! :'((</p>
@endif

@stop