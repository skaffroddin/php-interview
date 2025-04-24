<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        // dd($users);
      return view('index', compact('users'));
    }

    
 
     
    public function insert(Request $data)
    {
        // Create a new instance of the Users model
        $user = new User();
    
        // Assign request data to the model attributes
        $user->name = $data->input('name');   // 'name' is the input field name from the form
        $user->email = $data->input('email'); // 'email' is the input field name from the form
        $user->phone = $data->input('phone'); // 'phone' is the input field name from the form
    
        // Save the model to the database
        $user->save();
    
        // Redirect or return response
        return redirect()->back()->with('success', 'User inserted successfully!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user)
    {
        //
    }
}
