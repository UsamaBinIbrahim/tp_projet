@extends('layouts.posts')

@section('title') Profile @endsection
@section('content')
    <div class="post-form mt-5">
        <h2>{{$user->first_name . ' ' . $user->last_name}}</h2>
        <form action="{{route('users.profile.update', $user->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="pfp_input">edit profile picture</label>
                <input type="file" id="pfp_input" name="pfp_input" accept="image/*">
                <img id="pfp" src="#" alt="profile picture">
            </div>
            <div>
                <label for="username">username:</label>
                <input type="text" name="username" id="username" value="{{$user->username}}" required>
            </div>
            <div>
                <label for="username">email:</label>
                <input type="email" name="email" id="email" value="{{$user->email}}" required>
            </div>

            <button type="submit">Save</button>
        </form>
    </div>
    
    @if ($errors->any())
    <div class="error-message">
        <p>Invalid Inputs: </p>
        <ul>
            @foreach ($errors->all() as $error)
            <li> {{$error}} </li>
            @endforeach
        </ul>
    </div>
    @endif
@endsection
