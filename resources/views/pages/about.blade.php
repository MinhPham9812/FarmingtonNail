<!-- resources/views/pages/home.blade.php -->
@extends('layouts.master')

@section('title', 'About')

@section('content')
    @include('partials.breadcrumb', [
        'backgroundImage' => asset('images/bg-breadcrumb.jpg'),
        'title' => 'About us',
    ])
@endsection