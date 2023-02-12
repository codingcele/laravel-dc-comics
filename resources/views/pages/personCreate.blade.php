@extends('layouts.main-layout')

@section('content')
    <h1>New person:</h1>
    <form method="POST" action=" {{ route('person.store')}}">
        @csrf
        <label for="firstName">First name</label>
        <input type="text" name="firstName">
        <br>
        <label for="lastName">Last name</label>
        <input type="text" name="lastName">
        <br>
        <label for="dateOfBirth">Date of birth</label>
        <input type="date" name="dateOfBirth">
        <br>
        <label for="height">Height</label>
        <input type="number" name="height">
        <br>
        <input type="submit" value="ADD NEW PERSON">
    </form>
@endsection