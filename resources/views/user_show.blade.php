@extends('master')

@section('title', 'Show - CRUD laravel')
@section('content')

    <div class="title-container">
        <h2>/ Users / User: {{ $user->name }}</h2>
        <a href="{{ route('users.index') }}" class="btn-default">< Back</a>
    </div>

    <div>
        <ul>
            <li><strong>User:</strong> {{ $user->name }}</li>
            <li><strong>Email:</strong> {{ $user->email }}</li>
        </ul>
    </div>

    <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn-delete"><i class="fa-sharp fa-solid fa-trash"></i> Delete user</button>
    </form>
    

@endsection