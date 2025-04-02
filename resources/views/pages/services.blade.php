@extends('layouts.master')

@section('title', 'Services')

@section('content')
    @include('partials.breadcrumb', [
        'backgroundImage' => asset('images/bg-breadcrumb.jpg'),
        'title' => 'Services board',
    ])

@endsection