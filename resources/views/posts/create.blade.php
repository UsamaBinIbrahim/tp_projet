@extends('layouts.posts')

@section('title') New Post @endsection

<script src="{{asset('js/jquery/jquery-3.7.1.js')}}"></script>
<script>
    $(document).ready(function () {
        $('#image').on('change', function(e) {
            const fileInput = e.target;
            const imagePreview = $('#imagePreview');

            if(fileInput.files && fileInput.files[0]) {
                const file = fileInput.files[0];
                const reader = new FileReader();
                reader.onload = function(e1) {
                    imagePreview.attr('src', e1.target.result);
                }
                reader.readAsDataURL(file);
            }
        });
    });
</script>

@section('content')
    <div class="post-form" style="margin-top:80px;">
        <h2>Create a Post</h2>
        <form action="{{route('posts.store', $user_id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="description">Description:</label>
            <textarea id="description" name="description" placeholder="Write your post description here..."></textarea><br>

            <label for="image">Upload Image:</label>
            <input type="file" id="image" name="image" accept="image/*"><br>

            <img id="imagePreview" name="imagePreview" src="#" alt="Image Preview" width="100px" height="100px"><br>

            <button type="submit">Post</button>
        </form>
    </div>
@endsection