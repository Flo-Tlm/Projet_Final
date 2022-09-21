@extends('layouts.app')

@section('main')
    <section class="max-w-7xl p-10  mx-auto  text-black">
        <article class="max-w-7xl px-6 py-15 mx-auto space-y-12">
            <div class="w-full mx-auto  text-center">
                <div class="flex mx-96 pl-16">
                    <img src="/storage/img/mazu_cameleon_transparent_D.png" alt="mazu" class="w-32">
                    <img src="/storage/img/mazu_cameleon_transparent_G.png" alt="mazu" class="w-32">
                </div>
                <h1 class="text-4xl font-bold leading-tight md:text-3xl text-white ">Articles</h1>

            </div>
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

                        <div class="flex justify-evenly">
                            <div class="flex flex-start m-6">
                                <p class=""> 319 </p>
                                <img src="/storage/img/like.png" alt="like" class="h-5 ml-1">
                            </div>

                            <div class="flex flex-start m-6">
                                <p class=""> 319 </p>
                                <img src="/storage/img/bulle.png" alt="like" class="h-5 ml-1">
                            </div>
                            <div class="flex flex-start m-6">
                                <p class=""> 319 </p>
                                <img src="/storage/img/share.png" alt="like" class="h-5 ml-1">
                            </div>
                        </div>

                    </a>
                    <a rel="noopener noreferrer" href="#"
                        class="   group hover:no-underline focus:no-underline bg-white">
                        <img role="presentation" class="object-cover w-full  h-44 bg-white"
                            src="/storage/img/2021-12-26_2.png">
                        <div class="p-6 space-y-2">
                            <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">Les personnages
                            </h3>
                            <p class="text-sm text-gray-400 mt-3 ml-1">publié le 09/09/2022</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Proin ac turpis vel sem laoreet fermentum at ut dolor. Etiam posuere elit at interdum
                                varius. Fusce lectus quam, ultricies id mi ut, lacinia placerat turpis. Nam efficitur velit
                                in tortor condimentum cursus. Nulla euismod ut justo non laoreet...
                        </div>

                        <div class="flex justify-evenly">
                            <div class="flex flex-start m-6">
                                <p class=""> 319 </p>
                                <img src="/storage/img/like.png" alt="like" class="h-5 ml-1">
                            </div>

                            <div class="flex flex-start m-6">
                                <p class=""> 319 </p>
                                <img src="/storage/img/bulle.png" alt="like" class="h-5 ml-1">
                            </div>
                            <div class="flex flex-start m-6">
                                <p class=""> 319 </p>
                                <img src="/storage/img/share.png" alt="like" class="h-5 ml-1">
                            </div>
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

                        <div class="flex justify-evenly">
                            <div class="flex flex-start m-6">
                                <p class=""> 319 </p>
                                <img src="/storage/img/like.png" alt="like" class="h-5 ml-1">
                            </div>

                            <div class="flex flex-start m-6">
                                <p class=""> 319 </p>
                                <img src="/storage/img/bulle.png" alt="like" class="h-5 ml-1">
                            </div>
                            <div class="flex flex-start m-6">
                                <p class=""> 319 </p>
                                <img src="/storage/img/share.png" alt="like" class="h-5 ml-1">
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </article>
    </section>

    {{-- PAGINATION ----------------------------- --}}
    <div class=" p-10 flex justify-center space-x-1 text-gray-100">
        <button title="previous" type="button"
            class="inline-flex items-center justify-center w-8 h-8 py-0 border rounded-md shadow-md bg-gray-900 border-gray-800">
            <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                stroke-linejoin="round" class="w-4">
                <polyline points="15 18 9 12 15 6"></polyline>
            </svg>
        </button>
        <button type="button" title="Page 1"
            class="inline-flex items-center justify-center w-8 h-8 text-sm font-semibold border rounded shadow-md bg-gray-900 text-[#F2A341] border-[#F2A341]">1</button>
        <button type="button"
            class="inline-flex items-center justify-center w-8 h-8 text-sm border rounded shadow-md bg-gray-900 border-gray-800"
            title="Page 2">2</button>
        <button type="button"
            class="inline-flex items-center justify-center w-8 h-8 text-sm border rounded shadow-md bg-gray-900 border-gray-800"
            title="Page 3">3</button>
        <button type="button"
            class="inline-flex items-center justify-center w-8 h-8 text-sm border rounded shadow-md bg-gray-900 border-gray-800"
            title="Page 4">4</button>
        <button title="next" type="button"
            class="inline-flex items-center justify-center w-8 h-8 py-0 border rounded-md shadow-md bg-gray-900 border-gray-800">
            <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                stroke-linejoin="round" class="w-4">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </button>
    </div>
@endsection
