@extends('layouts.master')

@section('title', 'Contact')

@section('content')
    @include('partials.breadcrumb',[
        'backgroundImage' => asset('images/bg-breadcrumb.jpg'),
        'title' => 'Contact us',
     ])
        

@endsection