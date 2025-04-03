<!-- resources/views/pages/home.blade.php -->
@extends('layouts.master')

@section('title', 'About')

@section('content')
    @include('partials.breadcrumb', [
        'backgroundImage' => asset('images/bg-breadcrumb.jpg'),
        'title' => 'About us',
    ])

    <section class="py-[45px] overflow-hidden" style="background-image: url( '{{ asset('/images/bg-about.jpeg') }}'); background-size: cover;">
        <div class="container lg:max-w-[1320px] sm:max-w-[560px]">
            <div class="grid lg:grid-cols-[7fr_5fr] items-start">
                <div class="item__title lg:pb-0 pb-3 is-visible">
                    <span class="md:text-[45px] text-[30px] font-cookie text-white">Welcome to</span>
                    <h3 class="md:text-[45px] text-[30px] text-secondary font-black font-mons">Farmington Nail Spa</h3>
                    <div class="text-[15px] text-white font-mons">
                        <p style="text-align: justify">
                            Farmington Nail Spa is a top-notch nail salon and spa in Farmington, MI 48336. We are the ideal destination for you to immerse yourself in a luxury environment.
                            <br>
                            <br>
                            We guarantee to provide excellent services, especially catching up with new trends in nail & beauty care services. Our nail salon offers many services such as Manicures, Pedicures, and Nail Enhancement. Our staff & technicians are always there to serve you with the best services. They are all careful in working and comprehensive all your needs. We assure you that you would have a memorable time with us!
                        </p>
                    </div>
                </div>

                <div class="item__image lg:pt-0 pt-3 is-visible">
                    <img src="{{ asset('images/aboutus.png') }}" alt="image" class="w-full h-full object-center object-cover aspect-[1/1]">
                </div>
            </div>
        </div>
    </section>
@endsection