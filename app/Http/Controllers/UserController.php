<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index', ['user' => auth()->user()]);
    }

    public function update(User $user)
    {
        // $attributes = request()->validate([
        //     'username' => 'required',
        //     'name' => 'required',
        //     'email' => 'required',
        //     'password' => 'required'
        // ]);

        $attributes = request()->validate([
            'name' => 'required'
        ]);

        $user->update($attributes);

        return back()->with('success', "Profile Updated!");
    }
}
