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
                <div>
                    {{-- Loop each category --}}
                    @foreach($services as $category => $items)
                        <div class="accordion">
                            <div class="flex items-center justify-between bg-black p-[15px] cursor-pointer mb-[5px]">
                                <h3 class="text-[21px] font-bold font-mons text-white">{{ $category }}</h3>
                                <span class="rotate__span {{ $activeCategory == $category ? 'active' : '' }}"></span>
                            </div>
                            <div class="span__transition px-[15px] bg-[#f8f8f8] {{ $activeCategory == $category ? 'h-auto py-[15px]' : 'h-0 overflow-hidden' }}">
                                <!-- Lặp qua từng dịch vụ trong category -->
                                @foreach($items as $service)
                                    <div class="flex items-center justify-between mb-[15px]">
                                        <span class="font-mons text-[16px] font-bold">{{ $service->name }}</span>
                                        <span class="block flex-1 w-full border-dotted border-b border-[#a9a9a9] mx-[5px] mt-[10px]"></span>
                                        <span class="font-mons text-[16px] font-bold">${{ number_format($service->price) }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
                <img src=" {{ asset('/images/' . $image) }}" alt="" class="w-full object-cover aspect-[1/1]">
            </div>
        </div>
    </section>
    
@endsection