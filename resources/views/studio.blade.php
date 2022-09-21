@extends('layouts.app')

@section('main')

    {{-- TEXTE INFOS QUI SOMME NOUS  ------------------------------------------------------------- --}}

    <section class="max-w-7xl p-10  mx-auto  text-white">
        <article class="max-w-7xl px-6 py-15 mx-auto space-y-12">
            <div class="w-full mx-auto  text-center">

                <div class="flex mx-96 pl-16">
                    <img src="/storage/img/mazu_cameleon_transparent_D.png" alt="mazu" class="w-32 ">
                    <img src="/storage/img/mazu_cameleon_transparent_G.png" alt="mazu" class="w-32">
                </div>
                <h1 class="text-4xl font-bold leading-tight md:text-3xl ">QUI SOMMES-NOUS</h1>
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

    {{-- GALERIE EQUIPE ------------------------------------------------------------------------------------------------------------ --}}

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
          <div class="flex w-full mb-20 flex-wrap">
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 lg:w-1/3 lg:mb-0 mb-4">Master Cleanse Reliac Heirloom</h1>
            <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom.</p>
          </div>
          <div class="flex flex-wrap md:-m-2 -m-1">
            <div class="flex flex-wrap w-1/2">
              <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://dummyimage.com/500x300">
              </div>
              <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://dummyimage.com/501x301">
              </div>
              <div class="md:p-2 p-1 w-full">
                <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://dummyimage.com/600x360">
              </div>
            </div>
            <div class="flex flex-wrap w-1/2">
              <div class="md:p-2 p-1 w-full">
                <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://dummyimage.com/601x361">
              </div>
              <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://dummyimage.com/502x302">
              </div>
              <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://dummyimage.com/503x303">
              </div>
            </div>
          </div>
        </div>
      </section>
    
@endsection
