<header class="sticky right-0 lg:top-[-45px] top-0 left-0 z-[12] w-full shrink-0">
    <div class="lg:block hidden header__top" >
        <div class="container">
            <div class="flex items-center justify-between" >
                <div class="text-white w-full text-center pr-[120px] text-[15px] font-mons leading-[45px]" >
                    <span >24061 Orchard Lake Rd, Farmington, MI 48336</span>
                </div>
                <div class="flex w-full pl-[120px] text-center items-center" >
                    <div class="text-white block w-full text-[15px] font-mons leading-[45px]" >
                        Call for Appointment: 
                        <a href="tel:248-478-0790" rel="noopener noreferrer" >
                            <span itemprop="telephone" >248-478-0790</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header__bottom lg:h-[92px] h-[120px] sticky top-0 lg:bg-[#101010] bg-[#232323] lg:border-b-[2px] border-[#9f7741]">
        {{-- Mobile logo --}}
        <a href="{{ route('home') }}" class="mobile__logo lg:hidden flex items-center justify-center mr-[100px] h-[120px]" >
            <img src="{{ asset('images/logo/header-logo.png') }}" class="max-h-[90px]" alt="">
        </a>
        {{-- Navbar --}}
        <div class="container lg:h-full">
            <div class="flex h-full">
                <nav class="lg:flex hidden pr-[120px] justify-center w-full h-full" >
                    <ul class="flex items-center flex-wrap">
                        <li itemprop="name">
                            <a aria-current="{{ request()->routeIs('home') ? 'page' : 'false' }}" 
                                href="{{ route('home') }}" 
                                class="text-white text-nav text-[14px] font-bold uppercase font-mons {{ request()->routeIs('home') ? 'active' : '' }}" 
                                itemprop="url">
                                <span itemprop="name">Home</span>
                            </a>
                        </li>
                        <li itemprop="name">
                            <a aria-current="{{ request()->routeIs('about') ? 'page' : 'false' }}" 
                                href="{{ route('about') }}" 
                                class="text-white text-nav text-[14px] font-bold uppercase font-mons {{ request()->routeIs('about') ? 'active' : '' }}" 
                                itemprop="url">
                                <span itemprop="name">About us</span>
                            </a>
                        </li>
                        <li itemprop="name">
                            <a aria-current="{{ request()->routeIs('services') ? 'page' : 'false' }}" 
                                href="{{ route('services') }}" 
                                class="text-white text-nav text-[14px] font-bold uppercase font-mons {{ request()->routeIs('services') ? 'active' : '' }}" 
                                itemprop="url">
                                <span itemprop="name">Services</span>
                            </a>
                        </li>
                        <li itemprop="name">
                            <a aria-current="{{ request()->routeIs('coupons') ? 'page' : 'false' }}" 
                                href="{{ route('coupons') }}" 
                                class="text-white text-nav text-[14px] font-bold uppercase font-mons {{ request()->routeIs('coupons') ? 'active' : '' }}" 
                                itemprop="url">
                                <span itemprop="name">Coupons</span>
                            </a>
                        </li>
                    </ul>    
                </nav>
                <nav class="lg:flex hidden pl-[120px] justify-center w-full h-full" >
                    <ul class="flex items-center flex-wrap">
                        <li itemprop="name">
                            <a  
                                href="https://booking.gocheckin.net/v2/18124" 
                                class="text-white text-nav text-[14px] font-bold uppercase font-mons {{ request()->routeIs('booking') ? 'active' : '' }}" 
                                itemprop="url">
                                <span itemprop="name">Booking</span>
                            </a>
                        </li>
                        <li itemprop="name">
                            <a aria-current="{{ request()->routeIs('gallery') ? 'page' : 'false' }}" 
                                href="{{ route('gallery') }}" 
                                class="text-white text-nav text-[14px] font-bold uppercase font-mons {{ request()->routeIs('gallery') ? 'active' : '' }}" 
                                itemprop="url">
                                <span itemprop="name">Gallery</span>
                            </a>
                        </li>
                        <li itemprop="name">
                            <a aria-current="{{ request()->routeIs('contact') ? 'page' : 'false' }}" 
                                href="{{ route('contact') }}" 
                                class="text-white text-nav text-[14px] font-bold uppercase font-mons {{ request()->routeIs('contact') ? 'active' : '' }}" 
                                itemprop="url">
                                <span itemprop="name">Contact us</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>