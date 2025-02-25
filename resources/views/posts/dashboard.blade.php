@extends('layouts.posts')

@section('title') Dashboard @endsection

@section('content')
    <div class="posts-container">
        @foreach ($posts as $post)
            <div class="post">
                <div class="post-header">
                    <div>User ID: {{$post['user_id']}}</div>
                    <div>Created At: {{$post['created_at']}}</div>
                </div>
                <div class="post-description">
                    {{$post['description']}}
                </div>
                <div class="post-image">
                    <img src="{{asset('img/'. $post['image'])}}" alt="Post Image">
                </div>
            </div>
        @endforeach
    </div>
    <button class="fixed-button bg-dark" onclick="window.location.href='{{route('posts.create', $user_id)}}'">+</button>
@endsection