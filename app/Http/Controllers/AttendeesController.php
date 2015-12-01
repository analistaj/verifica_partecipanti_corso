<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\AttendeeRequest;
use App\Attendee;

class AttendeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $attendees = Attendee::latest()->get();
		if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($attendees);
		}
		return view('attendees.index', compact('attendees'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('attendees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AttendeeRequest $request)
    {
        $input = $request->all();
		$attendee = Attendee::create([
            'first name' => $input['first name'],
            'surname' => $input['surname'],
            'email' => $input ['email'],
			'phone number'=> ['phone number'],
			'adress'=> $input ['adress'],
		    'country'=>input ['country'],
        ]);
		
		if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($attendee);
    	}
		
		flash()->success('salvato con successo!');
		
		return redirect('attendees');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('attendees.show', compact('attendee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('attendees.edit', compact('attendee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AttendeeRequest $request, $id)
    {
    $input = $request->all();
		$user->update([
            'first name' => $input['first name'],
            'surname' => $input['surname'],
		    'email' => $input['email'],
		    'phone number'=> ['phone number'],
			'adress'=> $input ['adress'],
			'country'=>input ['country'],	
        ]);
		
		
		if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($attendee);
    	}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
