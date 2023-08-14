<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Volunteer;

class SinglePageEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        $event = Event::findOrFail($id);
        $volunteers = Volunteer::where('event_id', $event->id)->get();

        $totalvolunteers = $volunteers->count();

        $volunteer = Volunteer::where('event_id', $event->id)->get();

        return view('new.singlePageEvent', compact('event', 'volunteer', 'totalvolunteers'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Retrieve the input data from the request
        $eventId = $request->input('event_id');

        // Get the authenticated user's ID
        $userId = auth()->user()->id;

        // Create a new Volunteer instance
        $volunteer = new Volunteer();
        $volunteer->event_id = $eventId;
        $volunteer->user_id = $userId;

        // Save the volunteer to the database
        $volunteer->save();
        return redirect('/success')->with('success', 'Registir to event successfully');

        // Redirect or perform any other desired action
        // if ($volunteer->id && $event->id) {
        //     return redirect('/success')->with('success', 'Form data saved successfully');
        // } else {
        //     return redirect()->back()->with('error', 'An error occurred while saving the form data');
        // }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
