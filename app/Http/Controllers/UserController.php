<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function dashboard(User $user) {
        $posts = [
            [
                'user_id' => 1,
                'description' => 'This is my first post.',
                'image' => '1.jpg',
                'created_at' => '02-01-2020', 
            ],
            [
                'user_id' => 3,
                'description' => 'This is my first post.',
                'image' => '1.jpg',
                'created_at' => '02-01-2020', 
            ],
        ];

        return view('user.dashboard', ['posts' => $posts]);
    }
}
