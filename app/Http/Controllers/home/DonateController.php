<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donor;
use App\Models\Cases;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Log;


class DonateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $id)
    {
        $userId = Session::get('user_id');
        $case = Cases::findOrFail($id);
        return view('donate.donate', compact('case', 'userId', 'id'));
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

     public function store(Request $request, $id)
     {
         $userId = auth()->user()->id;

         // Validate the input data
         $validatedData = $request->validate([
             'amountPaymnt' => 'required',
             'cardNumber' => 'required',
             'expDate' => 'required',
             'nameOnCard' => 'required',
             'CCV' => 'required',
         ]);

         // Create a new instance of the Donor model and fill it with the form data
         $donor = new Donor();
         $donor->user_id = $userId;
         $donor->case_id = $id;
         $donor->amountPaymnt = $request->input('amountPaymnt');
         $donor->cardNumber = $request->input('cardNumber');
         $donor->expDate = $request->input('expDate');
         $donor->nameOnCard = $request->input('nameOnCard');
         $donor->CCV = $request->input('CCV');
         $donor->save();

         // Calculate and update the total amount collected for the corresponding case
         $case = Cases::find($id);
         $donors = Donor::where('case_id', $case->id)->get();
         $totalAmountCollected = $donors->sum('amountPaymnt');
         $case->amountCollected = $totalAmountCollected;
         $case->save();

         // Check if the donor and case were successfully created and updated
         if ($donor->id && $case->id) {
             return redirect('/receipt')->with('success', 'Form data saved successfully');
         } else {
             return redirect()->back()->with('error', 'An error occurred while saving the form data');
         }

     }




    /**
     * Display the specified resource.
     */
  /**
 * Display the specified resource.
 */
public function show($id)
{
    // Retrieve the donation record from the database
    $donation = Donor::findOrFail($id);

    // You can add additional logic here if needed

    // Return the view with the donation data
    return view('donate.success', compact('donation'));

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

