@extends('app')

@section('title')
Edit attendee
@stop

@section('content')
<h1>Edit your dates, if you want ;) </h1>
<hr />
{!! Form::model($attendee, ['method' => 'PATCH', 'action' => ['AttendeesController@update', $attendee->id]]) !!}
	@include('attendees.form', ['submitButtonText' => 'Update', 'create' => false])
{!! Form::close() !!}

@include('errors.list')

@stop