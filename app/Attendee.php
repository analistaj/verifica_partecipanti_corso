<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
	protected $fillable = ['first_name', 'surname', 'email', 'address', 'country', 'phone_number'];
}
