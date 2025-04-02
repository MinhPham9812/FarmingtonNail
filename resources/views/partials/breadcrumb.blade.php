<!-- resources/views/partials/breadcrumb.blade.php -->
<section class="relative overflow-hidden">
    @if (request()->routeIs('home'))
      <!-- Trang Home: Swiper với 3 hình -->
      <div class="swiper relative">
        <div class="swiper-wrapper">
          @foreach ($slides ?? [] as $index => $slide)
          <div class="swiper-slide">
            <img src="{{ $slide['image'] }}" alt="Slide {{ $index + 1 }}" class="w-full h-full object-contain object-center">
          </div>
          @endforeach
        </div>
        <!-- Điều khiển Swiper -->
        <div class="slider-button">
            <span class="custom-next"></span>
            <span class="custom-prev"></span>
        </div>
        <div class="dotted">
            <div class="dotted_index"></div>
            <div class="dotted_index"></div>
            <div class="active_dotted_index dotted_index"></div>
        </div>
      </div>
    @else
      <!-- Các trang khác: Hình nền với tiêu đề -->
      <div class="lg:pt-[90px] sm:pt-[40px] pt-[30px] lg:pb-[60px] sm:pb-[40px] pb-[30px] relative bg__breadcrumb z-[1] hidden-block-navigator" style="background-image: url('{{ $backgroundImage }}'); background-size: cover; background-position: center top; background-attachment: fixed;">
        <h1 class="item__title__main relative block z-10 text-center sm:text-[75px] text-[45px] text-white font-cookie is-visible">{{ $title }}</h1>
      </div>
    @endif
  </section>