<?php

// namespace App\Http\Controllers\singlePage;
namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Cases;
use App\Models\Donor;

use Illuminate\Http\Request;

class SinglePageDonateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        // Retrieve the data for the specific case using the provided $id
        $case = Cases::findOrFail($id);
        $donors = Donor::where('case_id', $case->id)->get();
        $totalDonors = $donors->count();

        $latestDonation = Donor::where('case_id', $case->id)->latest('created_at')->first();

        $lastDonationValue = null;
        $lastDonationTime = null;

        if ($latestDonation) {
            $lastDonationValue = $latestDonation->amountPaymnt;
            $lastDonationTime = $latestDonation->created_at->diffForHumans();
        }

        // Pass the case data to the view
        return view('singlePage.singlePage', compact('case', 'totalDonors', 'lastDonationValue', 'lastDonationTime'));
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
