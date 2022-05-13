<section class="flex justify-center md:text-xs lg:text-sm font-sans mt-2 mb-8 xl:px-24 2xl:px-44">
    <div class="flex items-center ml-4">
        <svg class="mr-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M15.0725 12.2833L11.685 9.20333C11.5249 9.05779 11.3144 8.98017 11.0982 8.98686C10.8819 8.99354 10.6767 9.08401 10.5258 9.23916L8.53166 11.29C8.05166 11.1983 7.08666 10.8975 6.09332 9.90666C5.09999 8.9125 4.79916 7.945 4.70999 7.46833L6.75916 5.47333C6.9145 5.3226 7.0051 5.11735 7.01179 4.901C7.01848 4.68466 6.94073 4.4742 6.79499 4.31416L3.71582 0.927496C3.57003 0.76696 3.36739 0.669583 3.15095 0.656045C2.93451 0.642508 2.72132 0.713878 2.55666 0.854996L0.748324 2.40583C0.60425 2.55043 0.518257 2.74287 0.506657 2.94666C0.494157 3.155 0.255824 8.09 4.08249 11.9183C7.42082 15.2558 11.6025 15.5 12.7542 15.5C12.9225 15.5 13.0258 15.495 13.0533 15.4933C13.2571 15.4819 13.4494 15.3955 13.5933 15.2508L15.1433 13.4417C15.285 13.2775 15.3569 13.0645 15.3437 12.8481C15.3304 12.6317 15.2331 12.429 15.0725 12.2833Z"
                fill="#374151" />
        </svg>
        <p class="font-bold mr-8 2xl:text-xl">+40 233 74 25 25 <span class="font-normal">sau</span> +40 748 88 66 68</p>
    </div>
</section>
@if(\Request::is('/'))
<section class="flex flex-col items-center justify-center">
    <div class=" w-screen h-hero_mobile">
        <picture>
            <source type="image/jpeg" srcset="{{ asset('img/background-home-responsive1.jpg') }}">
            <img src="{{ asset('img/background-home-responsive1.jpg') }}" class="w-full h-full" alt="Background Home">
        </picture>
    </div>
    <div class="absolute text-white">
        <div class="text-center px-4">
            <p class="uppercase font-bold mb-8 text-xs lg:text-base 2xl:text-xl">Complex hotelier de 3 stele</p>
            <h1 class="font-serif text-5xl xl:text-7xl 2xl:text-8xl font-bold text-center">Un pachet</br> complet de
                experiențe
                extraordinare.</h1>
        </div>
        <div class="flex flex-col items-center mt-16">
            <div class="flex gap-x-4 flex-col lg:flex-row items-center">
                <div class="mb-16 lg:mb-0">
                    @include('_components.buton-rezervare')
                </div>
                <div class="flex items-center gap-x-4">
                    <p
                        class="text-green-dark bg-white font-superbold text-lg 2xl:text-xl rounded-xl px-6 py-2 2xl:py-4">
                        9.0</p>
                    <p class="2xl:text-lg">Scor booking.com pe</br> baza a 87 de recenzii.</p>
                </div>
            </div>
        </div>

    </div>
</section>
@endif
<section class="relative text-white bg-green-dark">
    <div class="grid grid-cols-2 items-center font-bold text-center text-xs 2xl:text-lg  xl:px-24 2xl:px-44">
        <div class="relative w-44 py-8 ml-8">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/MarikoInn-Logo1.png') }}" alt="Logo Mariko Inn" class="absolute -top-6 z-30">
            </a>
        </div>
        <div class="flex items-center justify-end mr-8">
            <div class="uppercase font-bold">
                <p>Menu</p>
            </div>
            <div class="ml-4">
                <button onclick="isActive()" id="hamburger">
                    <svg width="26" height="18" viewBox="0 0 26 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.251709 17.2327H25.7621V14.4291H0.251709V17.2327ZM0.251709 10.2236H25.7621V7.41997H0.251709V10.2236ZM0.251709 0.410889V3.21452H25.7621V0.410889H0.251709Z"
                            fill="white" />
                    </svg>
                </button>
                <div class="absolute bg-green-dark w-screen inset-x-0 z-10" id="dropdown">
                    <div class="flex flex-col items-start">
                        <div class="mt-16 ml-8">
                            <button id="close">
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-white" width="16" height="16" viewBox="0 0 24 24">
                                    <path
                                        d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z" />
                                    </svg>
                            </button>
                        </div>
                        <div class="flex flex-col items-start gap-y-4 text-lg px-8 mt-4 pb-8">
                            <a href="{{ route('facilitati') }}" class="uppercase">Hotel</a>
                            <a href="{{ route('restaurant') }}" class="uppercase">Restaurant </a>
                            <a href="{{ route('evenimente') }}" class="uppercase">Evenimente</a>
                            <a href="{{ route('loc-de-joaca') }}" class="uppercase">Loc de joacă</a>
                            <a href="{{ route('corporate') }}" class="uppercase">Corporate</a>
                            <a href="{{ route('baza-sportiva') }}" class="uppercase">Bază sportivă</a>
                            <a href="{{ route('atractii') }}" class="uppercase">Atracții</a>
                            <a href="galerie" class="uppercase">Galerie</a>
                            <a href="contact" class="uppercase">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
