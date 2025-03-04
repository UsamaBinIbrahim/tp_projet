@extends('layouts.login')

@section('title') Login @endsection

@section('heading') Login @endsection

@section('content')
    <form action="{{route('login')}}" method="POST">
        @csrf
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{$errors->any()? old('email') : null}}" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
    <p><a href="{{route('register')}}">Don't have an account? Create one now</a></p>
@endsection