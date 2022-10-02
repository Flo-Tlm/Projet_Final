<section class=" text-white body-font overflow-hidden z-auto">
    <div class="fixed w-full top-0  p-5   items-center  ">
        <div class=" hidden w-full bg-[#395558] shadow-xl mx-auto md:flex p-5   items-center ">

            <a href="/" class=" flex title-font font-medium items-center text-white mb-4 md:mb-0">
                <img src="/storage/img/Logo-TCS.png" alt="logo" class="h-14">
            </a>
            <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
                <a href="/" class="mr-5 hover:text-[#F2A341]">Accueil</a>
                <a href="/studio" class="mr-5 hover:text-[#F2A341]">Studio</a>
                <a href="/articles" class="mr-5 hover:text-[#F2A341]">Articles</a>
                <a href="/contact"class="mr-5 hover:text-[#F2A341]">Contact</a>
            </nav>
            <div class="flex pt-4 md:pt-0">
                <div class="flex">
                    <img src="/storage/img/Login.png" alt="Login" class="w-10">
                </div>
                <div class=" md:ml-1">
                    <img src="/storage/img/iconLogin.png" alt="Login" class="mt-3 w-4">
                </div>
            </div>
        </div>
    </div>
    <!-- menu mobile -->

    <div class="z-50" id="scrollM">
        <div class="hamburger-menu md:hidden ">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn bg-[#183140] pt-3" for="menu__toggle">
                <span></span>
            </label>

            <ul class="menu__box">
                <li><a class="menu__item" href="/">Accueil</a></li>
                <li><a class="menu__item" href="/studio">Studio</a></li>
                <li><a class="menu__item" href="/articles">Articles</a></li>
                <li><a class="menu__item" href="/contact">Contact</a></li>
                <li><a class="menu__item" href="#">Sign up</a></li>
                <li><a class="menu__item" href="#">Login</a></li>
            </ul>
        </div>
    </div>

</section>

{{-- <script>
    const scrollM = document.getElementById('scrollM')
    document.getElementById('scrollM').style.display = 'block';

    document.addEventListener("scroll", () => {
        var scroll_position = window.scrollY;
        if (scroll_position > 60) {
            scrollM.style.display = 'none';

        } else {
            scrollM.style.display = 'block';

        }
    });
</script> --}}
