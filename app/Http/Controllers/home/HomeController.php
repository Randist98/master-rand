<?php

namespace App\Http\Controllers\home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cases;
use App\Models\Donor;
use App\Models\Event;
use App\Models\Volunteer;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cases = Cases::where('status', 1)->get();
        $events = Event::all();

        $donations = Donor::all();
        $donationSum = $donations->sum('amountPaymnt');
        $casesCount = Cases::where('status', 1)->count();
        $eventCount = Event::all()->count();
        $volunteerCount = Volunteer::all()->count();
        $donorCount = Donor::all()->count();

        return view('home.index', compact('cases', 'events', 'casesCount', 'eventCount', 'volunteerCount', 'donorCount', 'donationSum'));
    }

    public function donors()
    {
        $donors=Donor::all();
        return view('home.credibility', compact('donors')) ;
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
        //
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
