@extends('layouts.posts')

@section('title') New Post @endsection
@section('style')
    {{-- <link rel="stylesheet" href="/css/posts/create.css"> --}}
@endsection
@section('content')
    <div class="post-form">
        <h2>Create a Post</h2>
        <form action="{{route('posts.store', $user_id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Description Text Input -->
            <label for="description">Description:</label>
            <textarea id="description" name="description" placeholder="Write your post description here..." required></textarea>

            <!-- Image Input -->
            <label for="image">Upload Image:</label>
            <input type="file" id="image" name="image" accept="image/*">

            <!-- Image Preview -->
            <img id="imagePreview" src="#" alt="Image Preview">

            <!-- Submit Button -->
            <button type="submit">Post</button>
        </form>
    </div>
@endsection
<style>
    .navbar {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
    }
    .navbar ul {
        display: flex;
        justify-content: flex-start;
        list-style: none;
        padding: 0 20px;
        width: 100%;
    }
    .navbar ul li {
        margin-right: 20px;
    }
    .navbar ul li a {
        text-decoration: none;
        color: white;
    }

    /* Add these styles to center the post-form */
    .post-form {
        max-width: 600px;
        margin: 80px auto; /* Adjusted margin to account for the fixed navbar */
        padding: 20px;
        background-color: #acd5f0;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .post-form h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .post-form label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    .post-form textarea {
        width: 100%;
        height: 150px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 20px;
        resize: vertical;
    }

    .post-form input[type="file"] {
        margin-bottom: 20px;
    }

    .post-form img#imagePreview {
        display: block;
        max-width: 100%;
        height: auto;
        margin-bottom: 20px;
        border-radius: 4px;
    }

    .post-form button {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .post-form button:hover {
        background-color: #0056b3;
    }
</style>
