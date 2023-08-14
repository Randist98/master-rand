<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Cases;
use App\Models\Donor;
use App\Models\Event;
use App\Models\User;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('role_id', 2)->get();
        $userCount = User::where('role_id', 2)->count();


        $donations = Donor::all();
        $donationSum = $donations->sum('amountPaymnt');
        $casesCount = Cases::where('status', 1)->count();
        $eventCount = Event::all()->count();
        $volunteerCount = Volunteer::all()->count();
        $donorCount = Donor::all()->count();
        return view('adminDashboard.dashboard',compact('users','userCount','donorCount','eventCount','casesCount','donationSum','volunteerCount'));
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
