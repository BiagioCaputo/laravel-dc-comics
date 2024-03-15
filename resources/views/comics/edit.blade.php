@extends('layouts.main')

@section('title', 'Edit Comic')

@section('main-content')

<main>
    {{-- Errors --}}
    @include('includes.comics.errors')
    {{-- Form --}}
    @include('includes.comics.form')
</main>

@endsection