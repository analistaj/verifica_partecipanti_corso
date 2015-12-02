<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\AttendeeRequest;
use App\Attendee;
use Illuminate\Http\JsonResponse;

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
    	$attendee = Attendee::create($request->all());
    	
        /*
         avevo scritto a mano il codice seguente prendendolo da user,
         ma è meglio usare la riga sopra, è più essenziale e pulita ed evita errori
         
          $input = $request->all();
		  $attendee = Attendee::create([
            'first_name' => $input['first_name'],
            'surname' => $input['surname'],
            'email' => $input ['email'],
			'phone_number'=> ['phone_number'],
			'address'=> $input ['address'],
		    'country'=>$input ['country'],
        ]);*/
		
		
		
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
    public function show(Attendee $attendee)
    {
        return view('attendees.show', compact('attendee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendee $attendee)
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
    public function update(AttendeeRequest $request, Attendee $attendee)
    {
    $input = $request->all();
		$attendee->update([
            'first_name' => $input['first_name'],
            'surname' => $input['surname'],
		    'email' => $input['email'],
		    'phone_number'=> $input['phone_number'],
			'address'=> $input ['address'],
			'country'=>$input ['country'],	
        ]);
		
		
		if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($attendee);
    	}
		
		flash()->success('salvato con successo!');
		
		return redirect('attendees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendee $attendee)
   {
        $attendee->delete();
        if ($request->ajax() || $request->wantsJson()) {
        	return new JsonResponse($user);
        }
        return redirect('attendees');
    }
}
