<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class UserController extends Controller
{
    public function show(User $user) {
        $posts = Post::where('user_id', $user->id)->get();
        return view('users.profile.show', ['user' => $user, 'user_id' => $user->id, 'posts' => $posts]);
    }

    public function edit(User $user) {
        return view('users.profile.edit', ['user' => $user, 'user_id' => $user->id]);
    }
    
    public function update(User $user, Request $request) {
        $request->validate([
            'username' => 'required|min:5',
            'email' => $user->email != $request->email? 'required|unique:users|email|min:20': 'required|email|min:20',
        ]);
        
        $user->update([
            'username' => $request->username,
            'email' => $request->email,
        ]);
        
        return to_route('dashboard', $user->id);
    }
}
