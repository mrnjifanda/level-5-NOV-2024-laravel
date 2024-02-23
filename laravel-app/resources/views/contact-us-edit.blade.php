@extends('layouts.app')

@section('content')
    <form action="{{ route('contact.edit.post', $contact->id) }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{ $contact->name }}">
        <input type="email" name="email" placeholder="Email" value="{{ $contact->email }}">
        <button type="submit">Update</button>
    </form>
@stop