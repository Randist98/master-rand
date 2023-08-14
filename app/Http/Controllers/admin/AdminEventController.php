<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class AdminEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events=Event::all();
        return view('adminDashboard.events.eventTable' , compact('events') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $event = new Event(); // Create an empty event object

        return view('adminDashboard.events.create', compact('event'));
  }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        // 'name' => 'required',
        // 'Beneficiary' => 'required',
        // 'NoBeneficiary' => 'required|numeric',
        // 'address' => 'required',
        // 'date' => 'required|date',
        // 'description' => 'required',

    ]);

    // Handle image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('images'), $imageName);
    } else {
        return redirect()->back()->with('error', 'Image not found');
    }

    // Create a new instance of the Event model and fill it with the form data
    $event = new Event();
    $event->name = $request->input('name');
    $event->beneficiary = $request->input('beneficiary');
    $event->NoBeneficiary = $request->input('NoBeneficiary');
    $event->address = $request->input('address');
    $event->date = $request->input('date');
    $event->image = $imageName;
    $event->description = $request->input('description');
    $event->save();

    // Check if the event was successfully created and saved
    if ($event->id) {
        return redirect('/event')->with('success', 'Event added successfully');
    } else {
        return redirect()->back()->with('error', 'An error occurred while adding the event');
    }
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $events = Event::all(); // Retrieve all events from the database

        return view('home.index', compact('events'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Find the event by its ID
        $event = Event::find($id);

        // If the event is not found, redirect back with an error
        if (!$event) {
            return redirect()->back()->with('error', 'Event not found');
        }

        // Pass the event data to the view for editing
        return view('adminDashboard.events.update', compact('event'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Find the event by its ID
    $event = Event::find($id);

    // If the event is not found, redirect back with an error
    if (!$event) {
        return redirect()->back()->with('error', 'Event not found');
    }

    // Handle image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('images'), $imageName);
        $event->image = $imageName;
    }

    // Update the event with the new data
    $event->name = $request->input('name');
    $event->beneficiary = $request->input('beneficiary');
    $event->NoBeneficiary = $request->input('NoBeneficiary');
    $event->address = $request->input('address');
    $event->date = $request->input('date');
    $event->description = $request->input('description');
    $event->save();

    // Check if the event was successfully updated and saved
    if ($event->id) {
        return redirect('/event')->with('success', 'Event updated successfully');
    } else {
        return redirect()->back()->with('error', 'An error occurred while updating the event');
    }
}

public function destroy($id)
{
    // Find the event by its ID
    $event = Event::find($id);

    // If the event is not found, redirect back with an error
    if (!$event) {
        return redirect()->back()->with('error', 'Event not found');
    }

    // Delete the event
    $event->delete();

    // Redirect back with a success message
    return redirect('/event')->with('success', 'Event deleted successfully');
}



}
