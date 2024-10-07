@php
$sliders = App\Models\HospitalSlider::where('status', '1')->orderBy('id', 'desc')->get();
@endphp
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Demo styles -->
<style>
  /* html,
  body {
    position: relative;
    height: 100%;
  }

  body {
    background: #eee;
    font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
    font-size: 14px;
    color: #000;
    margin: 0;
    padding: 0;
  } */


  @media (max-width: 576px) {
    .swiper {
      aspect-ratio: 9/4;
      /* width: 100%; */
      /* height: 40%; */
    }
  }

  @media (min-width: 576px) {
    .swiper {
      /* width: 100%;
      height: 40%; */
      aspect-ratio: 9/4;
    }
  }

  @media (min-width: 768px) {
    .swiper {
      /* width: 100%;
      height: 100%;
       */
      aspect-ratio: 9/4;
    }
  }

  @media (min-width: 992px) {
    .swiper {
      /* width: 100%;
      height: 100%; */
      aspect-ratio: 9/4;
    }
  }

  @media (min-width: 1200px) {
    .swiper {
      /* width: 100%;
      height: 100%; */
      aspect-ratio: 9/4;
    }
  }

  @media (min-width: 1400px) {
    .swiper {
      /* width: 100%;
      height: 100%; */
      aspect-ratio: 9/4;
    }
  }


  /* 
  .swiper {
    width: 100%;
    height: 100%;
  } */

  .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .autoplay-progress {
    position: absolute;
    right: 16px;
    bottom: 16px;
    z-index: 10;
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    color: var(--swiper-theme-color);
  }

  .autoplay-progress svg {
    --progress: 0;
    position: absolute;
    left: 0;
    top: 0px;
    z-index: 10;
    width: 100%;
    height: 100%;
    stroke-width: 4px;
    stroke: var(--swiper-theme-color);
    fill: none;
    stroke-dashoffset: calc(125.6px * (1 - var(--progress)));
    stroke-dasharray: 125.6;
    transform: rotate(-90deg);
  }
</style>

<!-- Swiper -->
<div class="swiper mySwiper">
  <div class="swiper-wrapper">
    @foreach($sliders as $index => $slider)
    <div class="swiper-slide ">
      <img class="banner-img img-sizes" src="{{ asset($slider->image) }}">
    </div>
    @endforeach

  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-pagination"></div>
  <div class="autoplay-progress" hidden>
    <svg viewBox="0 0 48 48">
      <circle cx="24" cy="24" r="20"></circle>
    </svg>
    <span></span>
  </div>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  const progressCircle = document.querySelector(".autoplay-progress svg");
  const progressContent = document.querySelector(".autoplay-progress span");
  var swiper = new Swiper(".mySwiper", {
    loop: true, // Enable looping
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    on: {
      autoplayTimeLeft(s, time, progress) {
        progressCircle.style.setProperty("--progress", 1 - progress);
        progressContent.textContent = `${Math.ceil(time / 1000)}s`;
      },
    },
  });
</script>