@extends('app')

@section('title')
Please, insert your date here :)
@stop

@section('content')
{!! Form::model($attendees = new \App\Attendee, array('action' => 'AttendeesController@index')) !!}
	@include('attendees.form', ['submitButtonText' => 'Save', 'create' => true])
{!! Form::close() !!}

@include('errors.list')

@stop