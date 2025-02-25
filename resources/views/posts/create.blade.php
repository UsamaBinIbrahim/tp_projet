@extends('layouts.posts')

@section('title') New Post @endsection

@section('content')
    <div class="post-form">
        <h2>Create a Post</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <!-- Description Text Input -->
            <label for="description">Description:</label>
            <textarea id="description" name="description" placeholder="Write your post description here..." required></textarea>

            <!-- Image Input -->
            <label for="image">Upload Image:</label>
            <input type="file" id="image" name="image" accept="image/*">

            <!-- Submit Button -->
            <button type="submit">Post</button>
        </form>
    </div>
@endsection