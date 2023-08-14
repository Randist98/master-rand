<?php

namespace App\Http\Controllers\home;
use App\Http\Controllers\Controller;
use App\Models\Cases;
use App\Models\Donor;
use App\Models\User;
use App\Models\Volunteer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ProfileuserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cases = Cases::where('user_id', Auth::id())->get();
        $volunteers = Volunteer::where('user_id', Auth::id())->get();
        $donors = Donor::where('user_id', Auth::id())->get();

        $users = User::where('id', Auth::id())->where('role_id', 2)->first();

        return view('home.profile', compact('users', 'cases', 'volunteers', 'donors'));
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
        $user = User::find(Auth::id());

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $user->image = 'images/' . $imageName;
        }
        $user->save();

        // Redirect or perform any additional actions as needed
        return redirect()->back()->with('success', 'Image uploaded successfully.');
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
        $user = User::find($id);

        if (!$user) {
            return redirect()->back()->withErrors('User not found');
        }

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');

        // Check if a new password is provided and update it
        $password = $request->input('password');
        if ($password) {
            $user->password = Hash::make($password);
        }

        // Check if a new image file is uploaded and update it
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $user->image = 'images/' . $imageName;
        }

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
