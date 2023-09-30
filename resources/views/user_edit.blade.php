@extends('master')

@section('title', 'Edit - CRUD laravel')

@section('content')
    <div class="title-container">
        <h2>/ Users / Edit</h2>
        <a href="{{ route('users.index') }}" class="btn-default">< Back</a>
    </div>

    @if(session()->has('message'))
        <div class="message-container">
            {{session()->get('message')}}
        </div>
    @endif

    <div class="form-container">
        <form action="{{ route('users.update', ['user' => $user->id]) }}" method="post" class="form-edit">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <input type="text" name="name" value="{{ $user->name }}">
            <input type="text" name="email" value="{{ $user->email }}">
            <button type="submit">Edit</button>
        </form>
    </div>
@endsection