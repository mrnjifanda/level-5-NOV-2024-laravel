@extends('layouts.app')

@section('content')
    <table>
        <thead>
            <tr>
                <th>N°</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>
                        <a href="{{ route('contact.edit', $contact->id) }}">Edit</a>
                        <a href="{{ route('contact.destroy', $contact->id) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop