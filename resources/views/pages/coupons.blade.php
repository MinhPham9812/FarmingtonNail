@extends('layouts.master')

@section('title', 'Coupons')

@section('content')
    @include('partials.breadcrumb',[
        'backgroundImage' => asset('images/bg-breadcrumb.jpg'),
        'title' => 'Coupons',
    ])

    <section class="py-[45px]" style="background-color: black">
        <div class="container">
            <div class="grid lg:grid-cols-2 gap-[30px] mb-[15px]">
                <div class="item__coupon cursor-pointer my-[15px] hover__coupon border-[3px] border-secondary relative is-visible">
                    <img src="{{ asset('/images/coupons-1.jpg') }}" alt="item 1"
                    class="w-full aspect-[5/4] object-cover">
                </div>
                <div class="item__coupon cursor-pointer my-[15px] hover__coupon border-[3px] border-secondary relative is-visible">
                    <img src="{{ asset('/images/coupons-2.jpg') }}" alt="item 1"
                    class="w-full aspect-[5/4] object-cover">
                </div>
            </div>
        </div>
    </section>
@endsection