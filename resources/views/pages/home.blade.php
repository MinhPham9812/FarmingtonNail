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
    {{-- About --}}
    <section class="py-[45px] overflow-hidden" style="background-image: url( '{{ asset('/images/bg-about.jpeg') }}'); background-size: cover;">
        <div class="container lg:max-w-[1320px] sm:max-w-[560px]">
            <div class="grid lg:grid-cols-[7fr_5fr] item-start">
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
    
    {{-- Service --}}
    <section class="py-[45px]" style="background-image: url('{{asset('/images/bg-home.jpeg')}}'); background-size: cover">
        <div class="container">
            <div class="text-center mb-[8px]">
                <h3 class="text-[45px] font-cookie text-[#ac8152]">Our Services</h3>
                <span class="text-[15px] font-mons mb-[30px]">Fall in Love with the Art of Nails</span>
            </div>
            <div class="grid sm:grid-cols-2 md:grid-cols-3">
                <a href="{{route('services')}}" class="px-[12px] my-[15px] cursor-pointer">
                    <div>
                        <img src="{{asset('/images/service-1.jpg')}}" alt="" class="w-full object-cover aspect-[1/1]">
                    </div>
                    <h3 class="md:text-[24px] text-[20px] font-mons text-center text-white uppercase m-auto py-[30px] px-[15px] bg-black" style="background-image: url('{{asset('/images/border-service.png')}}'); background-size: 100% 100%; background-position: center center">Pedicure</h3>
                </a>
            </div>
        </div>
    </section>
    <!-- Other sections -->
@endsection