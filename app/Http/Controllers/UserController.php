<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json($user, 201);
    }

    public function show(int $id)
    {
        return User::findOrFail($id);
    }

    public function update(Request $request, int $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->only('name', 'email'));
        return response()->json($user, 200);
    }

    public function destroy(int $id)
    {
        User::destroy($id);
        return response()->json(null, 204);
    }
}
