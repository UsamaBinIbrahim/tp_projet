@extends('layouts.posts')

@section('title') New Post @endsection
@section('content')
    <div class="post-form">
        <h2>Create a Post</h2>
        <form action="{{route('posts.store', $user_id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="description">Description:</label>
            <textarea id="description" name="description" placeholder="Write your post description here..." required></textarea>

            <label for="image">Upload Image:</label>
            <input type="file" id="image" name="image" accept="image/*">

            <img id="imagePreview" src="#" alt="Image Preview">

            <button type="submit">Post</button>
        </form>
    </div>
@endsection