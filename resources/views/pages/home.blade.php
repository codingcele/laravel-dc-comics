@extends('layouts.main-layout')

@section('content')
    <h1>People</h1>
    <a href="{{ route('person.create')}}">ADD NEW PERSON</a>
    <ul>
        @foreach ($people as $person)
            <li>
                <a href="{{ route('person.show', $person) }}">
                    {{ $person -> firstName }} {{ $person -> lastName }}
                </a>
                ---
                <a href="{{ route('person.edit', $person) }}">MODIFY</a>
                ---
                <a href="{{ route('person.delete', $person) }}">DELETE</a>
            </li>
        @endforeach
    </ul>
@endsection