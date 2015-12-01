<div class="form-group">
	{!! Form::label('first name', 'Name') !!}
	{!! Form::text('first name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('surname', 'Surname') !!}
	{!! Form::text('surname', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('email', 'Email') !!}
	@if ($create)
	{!! Form::email('email', null, ['class' => 'form-control']) !!}
	@else
	{!! Form::email('email', null, ['class' => 'form-control', 'readonly' => true]) !!}
	@endif
</div>
<div class="form-group">
	{!! Form::label('phone number', 'Phone number') !!}
	{!! Form::text('phone number', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('address', 'Adress') !!}
	{!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('country', 'Country') !!}
	{!! Form::text('country', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>