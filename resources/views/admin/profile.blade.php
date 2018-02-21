@extends('main-layout')

@section('title', 'Profile')

@section('content')

    <div class="container mt-4">
        <h1>Welcome back, {{$user->name}}</h1>
        <p>Your email is {{$user->email}}</p>
    </div>
    

@endsection