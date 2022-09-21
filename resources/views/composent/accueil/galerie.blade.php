<section class="max-w-7xl mx-auto overflow-x-auto pb-36">
    <h1 class="text-4xl font-bold leading-tight md:text-3xl text-center text-white mt-32 ">Gallerie</h1>

    <div class="swiper mySwiper mt-20 ">
        <div class="swiper-wrapper flex justify-between shadow-xl ">
            <div class="swiper-slide">
                <img class="object-cover w-full  h-96" src="/storage/img/1.png" alt="rivière" />
            </div>

            <div class="swiper-slide">
                <img class="object-cover w-full  h-96" src="/storage/img/2.png" alt="volcan" />
            </div>

            <div class="swiper-slide">
                <img class="object-cover w-full h-96" src="/storage/img/3.png" alt="ciloas" />
            </div>

            <div class="swiper-slide">
                <img class="object-cover w-full h-96" src="/storage/img/4.png" alt="sables" />
            </div>

            <div class="swiper-slide">
                <img class="object-cover w-full h-96" src="/storage/img/5.png" alt="mafate" />
            </div>

            <div class="swiper-slide">
                <img class="object-cover w-full h-96" src="/storage/img/6.png" alt="babet" />
            </div>

        </div>

        <div class="swiper-pagination mb-5"></div>
    </div>
</section>

  <!-- Caroussel JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
      var swiper = new Swiper('.mySwiper', {
          spaceBetween: 30,
          centeredSlides: true,
          autoplay: {
              delay: 2800,
              disableOnInteraction: false,
          },
          pagination: {
              el: '.swiper-pagination',
              clickable: true,
          },
      });
  </script>