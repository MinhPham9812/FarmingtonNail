<!-- resources/views/pages/home.blade.php -->
@extends('layouts.master')

@section('title', 'Welcome')

@section('content')
    @include('partials.breadcrumb', [
        'backgroundImage' => asset('images/homepage2.jpg'),
        'title' => 'Lifestyle Experience',
        'subtitle' => 'A SPA WITH A'
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