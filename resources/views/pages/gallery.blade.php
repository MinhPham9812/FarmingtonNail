@extends('layouts.master')

@section('title', 'Gallery')

@section('content')
    @include('partials.breadcrumb', [
        'backgroundImage' => asset('images/bg-breadcrumb.jpg'), 
        'title' => 'Gallery',
    ])
    
@endsection