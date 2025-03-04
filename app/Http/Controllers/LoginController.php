<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Redis;

class LoginController extends Controller
{
    public function index() {
        if(FacadesAuth::check()) {
            $user = FacadesAuth::user();
            return to_route('dashboard', $user->id);
        }
        return view('auth.login');
    }

    public function login(Request $request) {
        // server side validation
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // fields that need to be verified from database
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        // checking if such record exists in the User table
        // if exists, authenticated object (here User Model) gets stored in session
        if(FacadesAuth::attempt($credentials, true)) {
            return to_route('dashboard', FacadesAuth::id());
        }
        return back()
            ->withInput()
            ->withErrors(['login' => 'Incorrect email or password.']);
    }

    public function register() {
        return view('auth.register');
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

        // insert new user after validation of inputs
        $user = User::create([
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        FacadesAuth::login($user, true);
        // redirect to user login route
        return to_route('dashboard', $user->id);   
    }

    public function logout() {
        FacadesAuth::logout();
        return to_route('index');
    }
}
