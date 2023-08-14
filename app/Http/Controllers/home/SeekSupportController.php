<?php

namespace App\Http\Controllers\home;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Cases;
use Illuminate\Support\Facades\Auth;

class SeekSupportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cases = Cases::pluck('name', 'id');
        return view('cause.seeksupport', compact('cases'));
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
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'phone' => 'required',
            'description' => 'required',
            'address' => 'required',
            'beneficiary' => 'required',
            'NoBeneficiary' => 'required',
            'totalAmount' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $case = new Cases;

        if (Auth::check()) {
            $case->user_id = Auth::user()->id;
        }

        $case->name = $request->name;
        $case->phone = $request->phone;
        $case->username = $request->username;
        $case->beneficiary = $request->beneficiary;
        $case->NoBeneficiary = $request->NoBeneficiary;
        $case->totalAmount = $request->totalAmount;
        $case->address = $request->address;
        $case->description = $request->description;
        $case->status = 0;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('assest/images', $imageName);
            $case->image = $imageName;
        }

        $case->save();

        return redirect()->back()->with('success', 'Case created successfully!');
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
