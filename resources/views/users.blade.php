@extends('master')

@section('title', 'Users - CRUD laravel')

@section('content')
    <div class="title-container">
        <h2>/ Users</h2>
        <a href="{{ route('users.create') }}" class="btn-default">
            + Add user
        </a>
    </div>

    <table>
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
                <td>Option</td>
            </tr>
        </thead>

        <tbody>
            @foreach($users as $user)
                <tr class="color-line-table">
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="options-td">
                        <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="edit options">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </a>
                        <a href="{{ route('users.show', ['user' => $user->id]) }}" class="show options">
                            <i class="fa-regular fa-eye"></i>
                        </a>
                    </td>
                </tr>
                @php
                    $contador++
                @endphp
            @endforeach
            
            <tr class="color-line-table">
                <td>Total de registros: <strong>{{$contador}}</strong></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>

@endsection