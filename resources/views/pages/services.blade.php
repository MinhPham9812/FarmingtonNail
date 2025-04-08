@extends('layouts.master')

@section('title', 'Services')

@section('content')
    @include('partials.breadcrumb', [
        'backgroundImage' => asset('images/bg-breadcrumb.jpg'),
        'title' => 'Services board',
    ])

    <section class="py-[20px] ">
        <div class="container flex items-center justify-center flex-col">
            <h2 class="text-[30px] text-black font-cookie border-[3px] border-black py-[5px] px-[10px] font-bold leading-[36px] mb-[30px]">SERVICES</h2>
            <div class="grid lg:grid-cols-2 gap-[30px]">
                
            </div>
        </div>
    </section>
    
@endsection