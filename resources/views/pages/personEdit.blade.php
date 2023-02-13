@extends('layouts.main-layout')

@section('content')
    <h1>New person:</h1>
    <form method="POST" action=" {{ route('person.update', $person)}}">
        @csrf
        <label for="firstName">First name</label>
        <input type="text" name="firstName" value="{{ $person -> firstName }}">
        <br>
        <label for="lastName">Last name</label>
        <input type="text" name="lastName" value="{{ $person -> lastName }}">
        <br>
        <label for="dateOfBirth">Date of birth</label>
        <input type="date" name="dateOfBirth" value="{{ $person -> dateOfBirth }}">
        <br>
        <label for="height">Height</label>
        <input type="number" name="height" value="{{ $person -> height }}">
        <br>
        <input type="submit" value="UPDATE PERSON">
    </form>
@endsection