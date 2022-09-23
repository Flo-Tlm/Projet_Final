
<section class="max-w-7xl p-10  mx-auto  text-white">
     <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img
            class="object-cover w-full h-96"
            src="/storage/img/1080pSS01.jpg" alt="1080pSS01"
            alt="apple watch photo"
          />
        </div>
        <div class="swiper-slide">
          <img
            class="object-cover w-full h-96"
            src="/storage/img/1080pSS04.jpg"
            alt="apple watch photo"
          />
        </div>
        <div class="swiper-slide">
          <img
            class="object-cover w-full h-96"
            src="/storage/img/1080pSS10.jpg"
            alt="apple watch photo"
          />
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper('.mySwiper', {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
    </script>
</section>