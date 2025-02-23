<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login() {
        return view('login');
    }

    public function register() {
        return view('register');
    }

    public function store(Request $request) {
        // validate inputs
        $request->validate([
            'firstName' => 'required|min:5',
            'lastName' => 'required|min:5',
            'username' => 'required|min:5',
            'email' => 'required|unique:users|email|min:20',
            'password' => 'required|confirmed|min:8',
        ]);

        // insert new user
        $user = new User;
        $user->insert([
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // redirect to user login route
        return to_route('user.login');
    }
}
