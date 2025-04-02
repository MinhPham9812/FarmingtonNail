<!-- resources/views/pages/home.blade.php -->
@extends('layouts.master')

@section('title', 'About')

@section('content')
    @include('partials.breadcrumb', [
        'backgroundImage' => asset('images/bg-breadcrumb.jpg'),
        'title' => 'About us',
    ])
    
    <section class="welcome">
        <div class="container">
            <h2>Welcome to Farmington Nail Spa</h2>
            <p>Experience luxury nail care services in a relaxing environment.</p>
            <!-- More content here -->
        </div>
    </section>
    
    <!-- Other sections -->
@endsection