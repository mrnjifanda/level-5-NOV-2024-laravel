@extends('layouts.app')

@section('content')
    <form action="{{ route('contact.post') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <button type="submit">Send</button>
    </form>
@stop