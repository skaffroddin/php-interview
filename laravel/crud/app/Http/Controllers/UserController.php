<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = DB::table('users')->get();
        return view('index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add'); // Ensure 'add.blade.php' exists in 'resources/views/'
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $requestData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'city' => 'required|string|max:255',
        ]);

        // Insert the validated data into the users table
        DB::table('users')->insert([
            'name' => $requestData['name'],
        'email' => $requestData['email'],
        'phone' => $requestData['phone'],
        'city' => $requestData['city'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'User saved successfully!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $requestData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'city' => 'required|string|max:255',
        ]);

        // Update the user record in the database
        DB::table('users')
            ->where('id', $id)
            ->update([
                'name' => $requestData['name'],
                'email' => $requestData['email'],
                'phone' => $requestData['phone'],
                'city' => $requestData['city'],
                'updated_at' => now(),
            ]);

        return redirect()->back()->with('success', 'User updated successfully!');
    }


    public function edit(string $id)
{
    // Retrieve the user by ID
    $user = DB::table('users')->where('id', $id)->first();

    // Check if the user exists
    if (!$user) {
        return redirect()->back()->withErrors('User not found!');
    }

    // Return the edit view with the user data
    return view('edit', ['data' => $user]);
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Delete the user record from the database
        DB::table('users')->where('id', $id)->delete();

        return redirect()->back()->with('success', 'User deleted successfully!');
    }
}
