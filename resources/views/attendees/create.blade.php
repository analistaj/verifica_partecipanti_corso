@extends('app')

@section('Attendees private dates')
Please, insert your date here :)
@stop

@section('dates')
{!! Form::model($attendees = new \App\Attendee, array('action' => 'AttendeesController@index')) !!}
	@include('attendee.form', ['submitButtonText' => 'Save', 'create' => true])
{!! Form::close() !!}

@include('errors.list')

@stop