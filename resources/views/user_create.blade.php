@extends('master')

@section('title', 'Add user - CRUD laravel')
@section('content')

    <div class="title-container">
        <h2>/ Users / Create</h2>

        <a href="{{ route('users.index') }}" class="btn-default">< Back</a>
    </div>

    @if(session()->has('message'))
        <div class="message-container">
            {{session()->get('message')}}
        </div>
    @endif

    <div>
        <form action="{{ route('users.store') }}" method="post">
            @csrf
            <input type="text" name="name" placeholder="Your name">
            <input type="text" name="email" placeholder="Your E-mail">
            <input type="password" name="password" placeholder="Your password">
            <button type="submit">Add user</button>
        </form>
    </div>

@endsection