<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AttendeeRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
			'first name' => ['required', 'min:2', 'max:100'],
            'surname' => ['required', 'min:2', 'max:100'],
            'email' => ['required', 'email', 'unique:users' . ($this->method() == 'POST' ? '' : (',email,' . $this->route('users')->id))],
			'phone number' => ['required', 'min:10', 'max:30'],
        	'adress' => [],
        	'country' => [],
             ];
    }
}
