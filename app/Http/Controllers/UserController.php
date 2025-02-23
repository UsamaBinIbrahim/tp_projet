<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function dashboard(User $user) {
        return view('user.dashboard', ['user_id' => $user->id]);
    }
}
