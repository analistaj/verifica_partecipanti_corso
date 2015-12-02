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
			'first_name' => ['required', 'min:2', 'max:100'],
            'surname' => ['required', 'min:2', 'max:100'],
            'email' => ['required', 'email', 'unique:attendees' . ($this->method() == 'POST' ? '' : (',email,' . $this->route('attendees')->id))],
			'phone_number' => ['required', 'min:10', 'max:30'],
        	'address' => [],
        	'country' => [],
             ];
    }
}
