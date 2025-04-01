<!-- resources/views/partials/breadcrumb.blade.php -->
<section class="relative overflow-hidden">
    <div class="hero-swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide relative" style="background-image: url('{{ $backgroundImage ?? asset('images/hero-bg.jpg') }}'); background-size: cover; background-position: center; height: 60vh;">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-center">
                    <div class="container">
                        <h3 class="text-white text-3xl md:text-5xl mb-3 font-light">{{ $subtitle ?? 'A SPA WITH A' }}</h3>
                        <h2 class="text-white text-5xl md:text-7xl font-script">{{ $title ?? 'Lifestyle Experience' }}</h2>
                    </div>
                </div>
            </div>
            <!-- Thêm slides khác nếu cần -->
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next text-white"></div>
        <div class="swiper-button-prev text-white"></div>
    </div>
</section>