  <!-- _______________________________________customer review______________________________________________ -->
  <section class="max-w-6xl p-8 mx-auto z-0">
        <div class="block6">
            <div class="mx-auto max-w-[1220px] ">
                
                <div class=" md:mt-12 swiper-container">
                    <div class="swiper-wrapper py-8">
                        <div class="swiper-slide">
                            <blockquote>
                                <div
                                    class="flex flex-col w-full max-w-md p-8 text-left bg-white shadow-md mx-4 rounded-xl h-60">

                                    <div class="flex">
                                        <img alt=""
                                            class="inline-block object-cover object-center w-12 h-12 rounded-full"
                                            src="https://source.unsplash.com/40x40/?portrait?2">
                                        <div class="flex">
                                            <h2 class="pl-4 pb-4 text-xl font-semibold">
                                                Jenny Wilson<br>
                                                <span href="#" class="font-light text-gray-600 lg:mb-0 text-xs">Web
                                                    Developer</span>
                                            </h2>
                                        </div>
                                    </div>
                                    <p
                                        class="mx-auto font-medium text-sm leading-relaxed text-gray-800 h-[68px] md:h-auto ">
                                        Sed nec aenean
                                        risus
                                        condimentum aliquam integer enim. Auctor nisl, urna, tincidunt tincidunt ut
                                        turpis ante
                                        magna
                                    </p>
                                </div>
                            </blockquote>
                        </div>

                        <div class="swiper-slide">
                            <blockquote>
                                <div
                                    class="flex flex-col w-full max-w-md p-8 text-left bg-white shadow-md mx-4 rounded-xl h-60">

                                    <div class="flex">
                                        <img alt=""
                                            class="inline-block object-cover object-center w-12 h-12 rounded-full"
                                            src="https://source.unsplash.com/40x40/?portrait?4">
                                        <div class="flex">
                                            <h2 class="pl-4 pb-4 text-xl font-semibold">
                                                John Dohn<br>
                                                <span href="#" class="font-light text-gray-600 lg:mb-0 text-xs">Customer
                                                </span>
                                            </h2>
                                        </div>
                                    </div>
                                    <p
                                        class="mx-auto font-medium text-sm leading-relaxed text-gray-800 h-[68px] md:h-auto">
                                        Sed nec aenean
                                        risus
                                        condimentum aliquam integer enim. Auctor nisl, urna, tincidunt tincidunt ut
                                        turpis ante
                                        magna
                                    </p>
                                </div>
                            </blockquote>
                        </div>

                        <div class="swiper-slide">
                            <blockquote>
                                <div
                                    class="flex flex-col w-full max-w-md p-8 text-left bg-white shadow-md mx-4 rounded-xl h-60">

                                    <div class="flex">
                                        <img alt=""
                                            class="inline-block object-cover object-center w-12 h-12 rounded-full"
                                            src="https://source.unsplash.com/40x40/?portrait?6">
                                        <div class="flex">
                                            <h2 class="pl-4 pb-4 text-xl font-semibold">
                                                Frank Daros<br>
                                                <span href="#" class="font-light text-gray-600 lg:mb-0 text-xs">
                                                    Designer</span>
                                            </h2>
                                        </div>
                                    </div>
                                    <p
                                        class="mx-auto font-medium text-sm leading-relaxed text-gray-800 h-[68px] md:h-auto">
                                        Sed nec aenean
                                        risus
                                        condimentum aliquam integer enim. Auctor nisl, urna, tincidunt tincidunt ut
                                        turpis ante
                                        magna
                                    </p>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	<style>
	 .swiper-container {
    overflow: hidden;
}
	</style>
	
	<script>
	document.addEventListener('DOMContentLoaded', function () {
        const swiper = new Swiper('.swiper-container', {
            loop: true,
            slidesPerView: 1.5,
            spaceBetween: 24,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                800: {
                    slidesPerView: 3,
                },
                1100: {
                    slidesPerView: 4,
                },
            },
        })
    })
	</script>