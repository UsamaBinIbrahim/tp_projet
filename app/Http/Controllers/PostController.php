<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return view('posts.dashboard', ['posts' => $posts, 'user_id' => $user_id]);
    }

    public function create($id) {
        return view('posts.create', ['user_id' => $id]);
    }
}
