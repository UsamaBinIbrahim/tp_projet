@extends('layouts.posts')

@section('title') Dashboard @endsection
@section('style')
    <link rel="stylesheet" href="{{asset('css/posts/dashboard.css')}}">
@endsection
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
                    {{-- if image exists in the public/img directory,
                    display the img element with the image url --}}
                    @if (!empty($post['image']) && file_exists(public_path('img/'. $post['image'])))
                        <img src="{{asset('img/'. $post['image'])}}" alt="Post Image">
                    @endif
                </div>
            </div>
        @endforeach
    </div>
    <button class="fixed-button bg-dark" onclick="window.location.href='{{route('posts.create', $user_id)}}'">+</button>
@endsection