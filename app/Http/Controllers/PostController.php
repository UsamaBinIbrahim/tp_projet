<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class PostController extends Controller
{
    public function dashboard($user_id) {
        $posts = [
            [
                'user_id' => 3,
                'description' => 'This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.',
                'image' => 'desktop_shelfs.jpeg',
                'created_at' => '02-01-2020', 
            ],
            [
                'user_id' => 3,
                'description' => 'This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.',
                'image' => 'desktop_shelfs.jpeg',
                'created_at' => '02-01-2020', 
            ],
            [
                'user_id' => 1,
                'description' => 'This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is our first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.',
                'image' => 'wooden shelf desktop.jpg',
                'created_at' => '02-01-2020', 
            ],
            [
                'user_id' => 3,
                'description' => 'This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.',
                'image' => 'desktop_shelf.jpeg',
                'created_at' => '02-01-2020', 
            ],
            [
                'user_id' => 1,
                'description' => 'This is my first post.',
                'image' => 'wooden shelf desktop.jpg',
                'created_at' => '02-01-2020', 
            ],
            [
                'user_id' => 3,
                'description' => 'This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.',
                'image' => 'desktop_shelfs.jpeg',
                'created_at' => '02-01-2020', 
            ],
            [
                'user_id' => 1,
                'description' => 'This is my first post.',
                'image' => 'wooden shelf desktop.jpg',
                'created_at' => '02-01-2020', 
            ],
            [
                'user_id' => 3,
                'description' => 'This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.This is my first post.',
                'image' => 'desktop_shelfs.jpeg',
                'created_at' => '02-01-2020', 
            ],
            [
                'user_id' => 1,
                'description' => 'This is my first post.',
                'image' => 'wooden shelf desktop.jpg',
                'created_at' => '02-01-2020', 
            ],
        ];
        $dynamic_posts = Post::all();
        // dd($dynamic_posts);

        return view('posts.dashboard', ['posts' => $dynamic_posts, 'user_id' => $user_id]);
    }

    public function create($id) {
        return view('posts.create', ['user_id' => $id]);
    }

    public function store(User $user, Request $request) {
        $request->validate([
            'description' => 'required_without_all:image|max:255',
            'image' => 'required_without_all:description|image',
        ]);

        $file_name = null;
        if($request->hasFile('image')) {
            $file = $request->image;
            $file_name = date('Y-m-d_H-i-s') . '-' . $user->id . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('img'), $file_name);
        }

        $data = [
            'description' => $request->description,
            'image' => $file_name,
            'user_id' => $user->id,
        ];
        Post::create($data);

        return to_route('users.profile.show', $user->id);
    }
}
