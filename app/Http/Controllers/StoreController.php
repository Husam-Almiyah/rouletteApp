<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.dashboard', compact('users'));
    }

    public function edit()
    {
        $users = User::all();
        return view('admin.dashboard', compact('users'));
    }

    public function create()
    {
        return view('stores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required',
        ]);

        $storeData = $request->only(['name', 'email', 'role']);
        $storeData['password'] = bcrypt($request->password);  // Hash the password

        User::create($storeData);

        return redirect()->route('admin.dashboard')->with('success', 'Store created successfully!');
    }
}
