@extends('layouts.app')

@section('main') 

{{-- TEXTE INFOS JEU-------------------------------------------------------------------------------------------------------------------------------------------------------}}

    <section class=" oppacité max-w-7xl p-10  mx-auto bg-[#D9D9D9] text-black">
        <article class="max-w-7xl px-6 py-15 mx-auto space-y-12">
            <div class="w-full mx-auto  text-center">

<div class= "flex mx-96 pl-16">
                <img src="/storage/img/mazu_cameleon_transparent_D.png" alt="mazu" class="w-32">
                <img src="/storage/img/mazu_cameleon_transparent_G.png" alt="mazu" class="w-32">
</div>
                <h1 class="text-4xl font-bold leading-tight md:text-3xl ">ONE DAY</h1>
                <h1 class="text-4xl font-bold leading-tight md:text-6xl">I AM</h1>
                


            </div>
            <div class="pt-14 ">
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>&nbsp;
                <p> Proin ac turpis vel sem laoreet fermentum at ut dolor. Etiam posuere elit at interdum varius. Fusce
                    lectus
                    quam, ultricies id mi ut, lacinia placerat turpis. Nam efficitur velit in tortor condimentum cursus.
                    Nulla
                    euismod ut justo non laoreet. Ut cursus vestibulum eros, eu ullamcorper lacus dapibus eu. </p>&nbsp;
                <p> Mauris semper mi ut ante rutrum, quis condimentum est porta. Nam vestibulum ultricies sapien, fermentum
                    bibendum leo pellentesque eu. Phasellus at metus eget dolor aliquet mattis. Ut egestas, ligula eget
                    varius
                    ultrices, metus erat vestibulum nunc, at sagittis orci sapien ut erat. Donec malesuada nisl id dui
                    condimentum sagittis.</p>&nbsp;
                <p>Proin ac turpis vel sem laoreet fermentum at ut dolor. Etiam posuere elit at interdum varius. Fusce
                    lectus
                    quam, ultricies id mi ut, lacinia placerat turpis. Nam efficitur velit in tortor condimentum cursus.
                    Nulla
                    euismod ut justo non laoreet. Ut cursus vestibulum eros, eu ullamcorper lacus dapibus eu. Donec
                    malesuada
                    nisl id dui condimentum sagittis.Ut cursus vestibulum eros, eu ullamcorper lacus dapibus eu. </p>&nbsp;
                <p> Proin ac turpis vel sem laoreet fermentum at ut dolor. Etiam posuere elit at interdum varius. Fusce
                    lectus
                    quam, ultricies id mi ut, lacinia placerat turpis. Nam efficitur velit in tortor condimentum cursus.
                    Nulla
                    euismod ut justo non laoreet. Ut cursus vestibulum eros, eu ullamcorper lacus dapibus eu. </p>&nbsp;
                <p> Mauris semper mi ut ante rutrum, quis condimentum est porta. Nam vestibulum ultricies sapien, fermentum
                    bibendum leo pellentesque eu. Phasellus at metus eget dolor aliquet mattis. Ut egestas, ligula eget
                    varius
                    ultrices, metus erat vestibulum nunc, at sagittis orci sapien ut erat. Donec malesuada nisl id dui
                    condimentum sagittis.</p>&nbsp;
                <p>Proin ac turpis vel sem laoreet fermentum at ut dolor. Etiam posuere elit at interdum varius. Fusce
                    lectus
                    quam, ultricies id mi ut, lacinia placerat turpis. Nam efficitur velit in tortor condimentum cursus.
                    Nulla
                    euismod ut justo non laoreet. Ut cursus vestibulum eros, eu ullamcorper lacus dapibus eu. Donec
                    malesuada
                    nisl id dui condimentum sagittis.Ut cursus vestibulum eros, eu ullamcorper lacus dapibus eu. </p>
            </div>

        </article>
    </section>
    
    {{-- GALERIE-----------------------------------------------------------------------------------------------------------------------------------------------------------}}
    
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


  {{-- DERNIER ARTICLE------------------------------------------------------------------------------------------------------------------------------------------------------}}

    <section class=" oppacité max-w-7xl p-8 mb-16 mx-auto bg-[#D9D9D9] text-black">
        <div class=" mx-auto space-y-12">
            <h1 class="text-4xl font-bold leading-tight md:text-3xl text-center ">Dernier article publié</h1>
            <div class="flex flex-col overflow-hidden rounded-md shadow-sm lg:flex-row">
                <img src="/storage/img/1080pSS10.jpg" alt="" class=" lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded">
                <div class="flex flex-col justify-center flex-1 p-6 bg-white">

                    <h2 class="text-xl font-bold mx-auto">Game play</h2>

                    <p class="leading-relaxed mb-2 mt-5 ml-1">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit.
                        Proin ac turpis vel sem laoreet fermentum at ut dolor. Etiam posuere elit at interdum
                        varius. Fusce lectus quam, ultricies id mi ut, lacinia placerat turpis. Nam efficitur velit
                        in tortor condimentum cursus. Nulla euismod ut justo non laoreet. Ut cursus vestibulum eros,
                        eu ullamcorper lacus dapibus eu. Nam efficitur velit in tortor condimentum cursus. Nulla
                        euismod ut justo non laoreet. Ut cursus vestibulum eros, eu ullamcorper lacus dapibus
                        eu.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Proin ac turpis vel sem laoreet fermentum at ut dolor. Etiam posuere elit at interdum
                        varius. Fusce lectus quam, ultricies id mi ut, lacinia placerat turpis. Nam efficitur velit
                        in tortor condimentum cursus. Nulla euismod ut justo non laoreet. Ut cursus vestibulum eros,
                        eu ullamcorper lacus dapibus eu. Nam efficitur velit in tortor condimentum cursus. Nulla
                        euismod ut justo non laoreet. Ut cursus vestibulum eros, eu ullamcorper lacus dapibus eu...
                    </p>


                    <p class="text-sm text-gray-400 mt-3 ml-1">publié le 09/09/2022</p>

                    <button
                        class="flex justify-between mt-20  ml-auto text-black bg-[#F2A341] border-0 py-2 px-6 focus:outline-none hover:bg-[#FFC83C] rounded-full">
                        <span>Voir plus </span>
                        <img src="/storage/img/iconlogin2.png" alt="" class="w-auto h-6 ml-3 pt-0" />
                    </button>
                </div>
            </div>
        </div>

    </section>

   {{-- LES ARTICLES DU MOMOENTS-------------------------------------------------------------------------------------------------------------------------------------- --}}

    <section class=" sm:py-12 mb-16 max-w-7xl mx-auto text-black  ">
<h1 class="text-4xl font-bold leading-tight md:text-3xl text-center text-white mb-14">Les articles du moment</h1>
        <div class="max-w-7xl mx-auto">
            <div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <a rel="noopener noreferrer" href="#"
                    class=" group hover:no-underline focus:no-underline bg-white">
                    <img role="presentation" class="object-cover w-full  h-44 bg-white"
                        src="/storage/img/1080pSS10.jpg">
                    <div class="p-6 space-y-2">
                        <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">Gameplay</h3>
                        <p class="text-sm text-gray-400 mt-3 ml-1">publié le 09/09/2022</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Proin ac turpis vel sem laoreet fermentum at ut dolor. Etiam posuere elit at interdum
                            varius. Fusce lectus quam, ultricies id mi ut, lacinia placerat turpis. Nam efficitur velit
                            in tortor condimentum cursus. Nulla euismod ut justo non laoreet...</p>
                    </div>
                </a>
                <a rel="noopener noreferrer" href="#"
                    class="   group hover:no-underline focus:no-underline bg-white">
                    <img role="presentation" class="object-cover w-full  h-44 bg-white"
                        src="/storage/img/2021-12-26_2.png">
                    <div class="p-6 space-y-2">
                        <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">Les personnages</h3>
                        <p class="text-sm text-gray-400 mt-3 ml-1">publié le 09/09/2022</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Proin ac turpis vel sem laoreet fermentum at ut dolor. Etiam posuere elit at interdum
                            varius. Fusce lectus quam, ultricies id mi ut, lacinia placerat turpis. Nam efficitur velit
                            in tortor condimentum cursus. Nulla euismod ut justo non laoreet...
                    </div>
                </a>
                <a rel="noopener noreferrer" href="#"
                    class="  group hover:no-underline focus:no-underline bg-white">
                    <img role="presentation" class="object-cover w-full  h-44 bg-white"
                        src="/storage/img/nouvelle_map_wip.png">
                    <div class="p-6 space-y-2">
                        <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">La carte</h3>
                        <p class="text-sm text-gray-400 mt-3 ml-1">publié le 09/09/2022</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Proin ac turpis vel sem laoreet fermentum at ut dolor. Etiam posuere elit at interdum
                            varius. Fusce lectus quam, ultricies id mi ut, lacinia placerat turpis. Nam efficitur velit
                            in tortor condimentum cursus. Nulla euismod ut justo non laoreet...</p>
                    </div>
                </a>

            </div>
        </div>
    </section>

{{-- DERNIER SONDAGE------------------------------------------------------------------------------------------------------------------------------------- --}}

    <section class=" oppacité max-w-7xl p-8 mb-16 mx-auto bg-[#D9D9D9] text-black">
        <div class=" mx-auto space-y-12">
            <h1 class="text-4xl font-bold leading-tight md:text-3xl text-center ">Derniers sondages</h1>
            <div class="flex flex-col overflow-hidden rounded-md shadow-sm lg:flex-row">
                <img src="/storage/img/1080pSS10.jpg" alt="" class="h-90 w-[640px]">
                <div class="flex flex-col justify-center flex-1 p-6 bg-white">

                    <h2 class="text-xl font-bold mx-auto mt-10">Game play</h2>

                    <h3 class="text-lg font-bold mt-10 mx-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Nulla euismod ut justo non laoreet ?</h3>


                    <ul class="flex justify-center mt-10">
                        <li>
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 text-yellow-500 mr-1 mt-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li>
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 text-yellow-500 mr-1 mt-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li>
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 text-yellow-500 mr-1 mt-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li>
                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                class="w-4 text-yellow-500 mr-1 mt-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                </path>
                            </svg>
                        </li>
                        <li>
                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                class="w-4 text-yellow-500 mt-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                </path>
                            </svg>
                        </li>
                        <span class="text-gray-400 ml-3">(3 sur 5)</span>
                    </ul>
                    <p class="text-sm text-gray-400 mt-3 mx-auto">861 votes</p>

                    <button
                        class="flex justify-between mt-20  ml-auto text-black bg-[#F2A341] border-0 py-2 px-6 focus:outline-none hover:bg-[#FFC83C] rounded-full">
                        <span>Voir plus </span>
                        <img src="/storage/img/iconlogin2.png" alt="" class="w-auto h-6 ml-3 pt-0" />
                    </button>
                </div>
            </div>

            <div class="flex flex-col overflow-hidden rounded-md shadow-sm lg:flex-row-reverse">
                <img src="/storage/img/2021-12-26_2.png" alt="" class="h-90 w-[640px]">
                <div class="flex flex-col justify-center flex-1 p-6 bg-white">

                    <h2 class="text-xl font-bold mx-auto">Les personnages</h2>

                    <h3 class="text-lg font-bold mt-10 mx-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Nulla euismod ut justo non laoreet ?</h3>


                    <ul class="flex justify-center mt-10">
                        <li>
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 text-yellow-500 mr-1 mt-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li>
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 text-yellow-500 mr-1 mt-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li>
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 text-yellow-500 mr-1 mt-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li>
                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                class="w-4 text-yellow-500 mr-1 mt-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                </path>
                            </svg>
                        </li>
                        <li>
                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                class="w-4 text-yellow-500 mt-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                </path>
                            </svg>
                        </li>
                        <span class="text-gray-400 ml-3">(3 sur 5)</span>
                    </ul>
                    <p class="text-sm dark:text-gray-400 mt-3 mx-auto">861 votes</p>

                    <button
                        class="flex justify-between mt-20  ml-auto text-black bg-[#F2A341] border-0 py-2 px-6 focus:outline-none hover:bg-[#FFC83C] rounded-full">
                        <span>Voir plus </span>
                        <img src="/storage/img/iconlogin2.png" alt="" class="w-auto h-6 ml-3 pt-0" />
                    </button>
                </div>
            </div>

            <div class="flex flex-col overflow-hidden rounded-md shadow-sm lg:flex-row">
                <img src="/storage/img/nouvelle_map_wip.png" alt="" class="h-90 w-[640px]">
                <div class="flex flex-col justify-center flex-1 p-6 bg-white">

                    <h2 class="text-xl font-bold mx-auto mt-10">La carte</h2>
                    <h3 class="text-lg font-bold mt-10 mx-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Nulla euismod ut justo non laoreet ?</h3>

                    <ul class="flex justify-center mt-10">
                        <li>
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 text-yellow-500 mr-1 mt-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li>
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 text-yellow-500 mr-1 mt-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li>
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 text-yellow-500 mr-1 mt-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li>
                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                class="w-4 text-yellow-500 mr-1 mt-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                </path>
                            </svg>
                        </li>
                        <li>
                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                class="w-4 text-yellow-500 mt-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                </path>
                            </svg>
                        </li>
                        <span class="text-gray-400 ml-3">(3 sur 5)</span>
                    </ul>
                    <p class="text-sm text-gray-400 mt-3 mx-auto">861 votes</p>

                    <button
                        class="flex justify-between mt-20  ml-auto text-black bg-[#F2A341] border-0 py-2 px-6 focus:outline-none hover:bg-[#FFC83C] rounded-full">
                        <span>Voir plus </span>
                        <img src="/storage/img/iconlogin2.png" alt="" class="w-auto h-6 ml-3 pt-0" />
                    </button>
                </div>
            </div>
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
@endsection
