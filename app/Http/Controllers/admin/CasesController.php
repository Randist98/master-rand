<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Cases;
use Illuminate\Http\Request;

class CasesController extends Controller
{
    public function index(Request $request)
    {
        $cases = Cases::where('status', 1)->get();

        return view('adminDashboard.cases.casesTable', compact('cases'));
    }

    public function create()
    {
        return view('adminDashboard.cases.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'address' => 'required',
            'Beneficiary' => 'required',
            'NoBeneficiary' => 'required',
            'totalAmount' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $case = new Cases;
        $case->name = $request->name;
        $case->beneficiary = $request->Beneficiary;
        $case->NoBeneficiary = $request->NoBeneficiary;
        $case->totalAmount = $request->totalAmount;
        $case->address = $request->address;
        $case->description = $request->description;
        $case->status = 1;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('assest/images', $imageName);
            $case->image = $imageName;
        }

        $case->save();

        return redirect()->route('casesTable.index')->with('success', 'Case created successfully.');
    }


    public function show($case)
    {
    //
    }


    public function edit($id)
    {
        // Find the case record by its ID
        $case = Cases::findOrFail($id);

        // Assuming you have a view file named 'edit.blade.php' in the 'adminDashboard.cases' folder
        return view('adminDashboard.cases.update', compact('case'));
    }

    public function update(Request $request, $id)
    {
        // Find the case record by its ID
        $case = Cases::findOrFail($id);

        // Validate the incoming data from the form
        $validatedData = $request->validate([
            'name' => 'required',
            'Beneficiary' => 'required',
            'NoBeneficiary' => 'required|integer',
            'address' => 'required',
            'totalAmount' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required',
        ]);

        // Update the case record with the new data
        $case->update($validatedData);

        // Handle image upload (if any)
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('assest\images', $imageName);
            $case->image = $imageName;
        }
        $case->save();

        // Optionally, you can handle other file uploads (e.g., 'license_doc') in a similar manner
        $cases = Cases::where('status', 1)->get();

        // Redirect back to the updated case's view or any other appropriate page
        return view('adminDashboard.cases.casesTable', compact('cases'));
    }

    public function destroy(string $id)
    {
        $case = Cases::findOrFail($id);
        $case->delete();

        return redirect()->back()->with('success', 'The Case deleted successfully.');
    }


}
