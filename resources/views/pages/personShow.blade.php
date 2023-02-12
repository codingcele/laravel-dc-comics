@extends('layouts.main-layout')

@section('content')
    
    <h1>
        {{ $person -> firstName }} {{ $person -> lastName }} - {{ $person -> dateOfBirth }} - {{ $person -> height ?? "unknown" }}
    </h1>

@endsection