@extends('layouts.app')

@section('main')
    <article class="max-w-7xl px-6 py-15 mx-auto space-y-12">
        <div class="w-full mx-auto  text-center text-white ">

            <h1 class="text-4xl font-bold leading-tight md:text-3xl ">ONE DAY</h1>
            <h1 class="text-4xl font-bold leading-tight md:text-6xl">I AM</h1>


        </div>
        <div class="text-white pt-10 mt-16">
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>&nbsp;
            <p> Proin ac turpis vel sem laoreet fermentum at ut dolor. Etiam posuere elit at interdum varius. Fusce lectus
                quam, ultricies id mi ut, lacinia placerat turpis. Nam efficitur velit in tortor condimentum cursus. Nulla
                euismod ut justo non laoreet. Ut cursus vestibulum eros, eu ullamcorper lacus dapibus eu. </p>&nbsp;
            <p> Mauris semper mi ut ante rutrum, quis condimentum est porta. Nam vestibulum ultricies sapien, fermentum
                bibendum leo pellentesque eu. Phasellus at metus eget dolor aliquet mattis. Ut egestas, ligula eget varius
                ultrices, metus erat vestibulum nunc, at sagittis orci sapien ut erat. Donec malesuada nisl id dui
                condimentum sagittis.</p>&nbsp;
            <p>Proin ac turpis vel sem laoreet fermentum at ut dolor. Etiam posuere elit at interdum varius. Fusce lectus
                quam, ultricies id mi ut, lacinia placerat turpis. Nam efficitur velit in tortor condimentum cursus. Nulla
                euismod ut justo non laoreet. Ut cursus vestibulum eros, eu ullamcorper lacus dapibus eu. Donec malesuada
                nisl id dui condimentum sagittis.Ut cursus vestibulum eros, eu ullamcorper lacus dapibus eu. </p>&nbsp;
            <p> Proin ac turpis vel sem laoreet fermentum at ut dolor. Etiam posuere elit at interdum varius. Fusce lectus
                quam, ultricies id mi ut, lacinia placerat turpis. Nam efficitur velit in tortor condimentum cursus. Nulla
                euismod ut justo non laoreet. Ut cursus vestibulum eros, eu ullamcorper lacus dapibus eu. </p>&nbsp;
            <p> Mauris semper mi ut ante rutrum, quis condimentum est porta. Nam vestibulum ultricies sapien, fermentum
                bibendum leo pellentesque eu. Phasellus at metus eget dolor aliquet mattis. Ut egestas, ligula eget varius
                ultrices, metus erat vestibulum nunc, at sagittis orci sapien ut erat. Donec malesuada nisl id dui
                condimentum sagittis.</p>&nbsp;
            <p>Proin ac turpis vel sem laoreet fermentum at ut dolor. Etiam posuere elit at interdum varius. Fusce lectus
                quam, ultricies id mi ut, lacinia placerat turpis. Nam efficitur velit in tortor condimentum cursus. Nulla
                euismod ut justo non laoreet. Ut cursus vestibulum eros, eu ullamcorper lacus dapibus eu. Donec malesuada
                nisl id dui condimentum sagittis.Ut cursus vestibulum eros, eu ullamcorper lacus dapibus eu. </p>
        </div>

    </article>
    <section class="max-w-7xl mx-auto overflow-x-auto pb-10">
        <h1 class="text-4xl font-bold leading-tight md:text-3xl text-center text-white mt-32 ">Gallerie</h1>

        <div class="swiper mySwiper mt-20 ">
            <div class="swiper-wrapper flex justify-between shadow-xl ">
                <div class="swiper-slide">
                    <img class="object-cover w-full  h-90" src="/storage/img/1.png" alt="rivière" />
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


    <section class= "max-w-7xl px-6 py-15 mx-auto space-y-12 pb-10">
      <div class= "max-w-7xl bg-[#D9D9D9]">
        <h1 class="text-4xl font-bold leading-tight md:text-3xl text-center text-black mt-32">Dernier article publié</h1>
        <
       
      </div>
      
       


    </section>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.mySwiper', {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },


        });
    </script>
@endsection
