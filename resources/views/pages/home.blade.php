<!-- resources/views/pages/home.blade.php -->
@extends('layouts.master')

@section('title', 'Welcome')

@section('content')
    @include('partials.breadcrumb', [
        'slides' => [
            ['image' => asset('images/homepage1.jpg')],
            ['image' => asset('images/homepage2.jpg')],
            ['image' => asset('images/homepage3.jpg')],
        ],
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