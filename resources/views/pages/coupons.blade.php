@extends('layouts.master')

@section('title', 'Coupons')

@section('content')
    @include('partials.breadcrumb',[
        'backgroundImage' => asset('images/bg-breadcrumb.jpg'),
        'title' => 'Coupons',
    ])

@endsection