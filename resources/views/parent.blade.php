@extends('layouts.app') 
@section('content')
    <h1>Родительская страница</h1>
    <a href="{{ route('child', ['users' => $users]) }}">Перейти к дочерней странице</a>
@endsection