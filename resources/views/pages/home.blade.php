@extends('layouts.main-layout')

@section('content')
    <h1>People</h1>
    <ul>
        @foreach ($people as $person)
            <li>
                {{ $person -> firstName }} {{ $person -> lastName }} - {{ $person -> dateOfBirth }}
            </li>
        @endforeach
    </ul>
@endsection