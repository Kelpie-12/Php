@extends('layouts.app')

@section('content')
    <h2>Дочерняя страница — список пользователей</h2>
    
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Имя</th>
                <th>Действие</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)               
                @include('partials.user_row', ['user' => $user])
            @endforeach
        </tbody>
    </table>
@endsection