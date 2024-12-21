<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    // Show all admins
    public function index()
    {
        $admins = User::where('role', 'admin')->get(); // Get all admins
        return view('admin.admin.list', compact('admins'));
    }

    // Show form to add new admin
    public function create()
    {
        return view('admin.admin.add');
    }

    // Store new admin
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'admin',
        ]);

        return redirect()->route('admin.list')->with('success', 'Admin added successfully.');
    }

    // Show edit form for an admin
    public function edit($id)
    {
        $admin = User::findOrFail($id); // Get the admin by ID
        return view('admin.admin.edit', compact('admin'));
    }

    // Update the admin's information
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        $admin = User::findOrFail($id);
        $admin->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('admin.list')->with('success', 'Admin updated successfully.');
    }

    // Delete an admin
    public function destroy($id)
    {
        $admin = User::findOrFail($id);
        $admin->delete(); // Delete the admin

        return redirect()->route('admin.list')->with('success', 'Admin deleted successfully.');
    }
}
