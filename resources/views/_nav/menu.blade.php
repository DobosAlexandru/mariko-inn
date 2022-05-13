<section class="flex justify-between xs:text-xs sm:text-sm font-sans my-2 xl:px-24 2xl:px-44">
    <div class="flex items-center">
        <svg class="mr-2" width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M6.99993 0.607147C10.8464 0.607147 13.9642 3.725 13.9642 7.57143C13.9642 10.5143 11.8964 13.7214 7.81422 17.2271C7.58723 17.4221 7.29783 17.5292 6.99859 17.529C6.69936 17.5287 6.41014 17.4211 6.1835 17.2257L5.9135 16.9914C2.01207 13.5771 0.0356445 10.4486 0.0356445 7.57143C0.0356445 3.725 3.1535 0.607147 6.99993 0.607147ZM6.99993 4.89286C6.28953 4.89286 5.60822 5.17507 5.10589 5.6774C4.60356 6.17973 4.32136 6.86103 4.32136 7.57143C4.32136 8.28183 4.60356 8.96314 5.10589 9.46547C5.60822 9.9678 6.28953 10.25 6.99993 10.25C7.71033 10.25 8.39164 9.9678 8.89397 9.46547C9.3963 8.96314 9.6785 8.28183 9.6785 7.57143C9.6785 6.86103 9.3963 6.17973 8.89397 5.6774C8.39164 5.17507 7.71033 4.89286 6.99993 4.89286Z"
                fill="#374151" />
        </svg>
        <p class="2xl:text-xl"><span class="font-bold">Str. Ștefan cel Mare nr. 278</span>, Roman, Jud. Neamț</p>
    </div>
    <div class="flex items-center">
        <svg class="mr-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M15.0725 12.2833L11.685 9.20333C11.5249 9.05779 11.3144 8.98017 11.0982 8.98686C10.8819 8.99354 10.6767 9.08401 10.5258 9.23916L8.53166 11.29C8.05166 11.1983 7.08666 10.8975 6.09332 9.90666C5.09999 8.9125 4.79916 7.945 4.70999 7.46833L6.75916 5.47333C6.9145 5.3226 7.0051 5.11735 7.01179 4.901C7.01848 4.68466 6.94073 4.4742 6.79499 4.31416L3.71582 0.927496C3.57003 0.76696 3.36739 0.669583 3.15095 0.656045C2.93451 0.642508 2.72132 0.713878 2.55666 0.854996L0.748324 2.40583C0.60425 2.55043 0.518257 2.74287 0.506657 2.94666C0.494157 3.155 0.255824 8.09 4.08249 11.9183C7.42082 15.2558 11.6025 15.5 12.7542 15.5C12.9225 15.5 13.0258 15.495 13.0533 15.4933C13.2571 15.4819 13.4494 15.3955 13.5933 15.2508L15.1433 13.4417C15.285 13.2775 15.3569 13.0645 15.3437 12.8481C15.3304 12.6317 15.2331 12.429 15.0725 12.2833Z"
                fill="#374151" />
        </svg>
        <p class="font-bold mr-8 2xl:text-xl">+40 233 74 25 25 <span class="font-normal">sau</span> +40 748 88 66 68</p>
        @include('_components.buton-rezervare')
    </div>
</section>
@if(\Request::is('/'))
<section class="relative flex flex-col items-center justify-center overflow-hidden">
    <div class="w-screen">
        <img src="{{ asset('img/background-home.jpg') }}" class="w-full" alt="Background Home">
    </div>
    <div class="absolute text-white max-w-boxed">
        <div class="text-center">
            <p class="uppercase font-bold mb-8 2xl:text-xl">Complex hotelier de 3 stele</p>
            <h1 class="font-serif text-7xl 2xl:text-8xl font-bold text-center">Un pachet complet</br> de experiențe</br>
                extraordinare.</h1>
        </div>
        <div class="flex flex-col items-center mt-16">
            <div class="flex gap-x-4">
                @include('_components.buton-rezervare')
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
<section class=" text-white bg-green-dark">
    <div class="flex justify-between items-center font-bold text-center text-xs 2xl:text-lg  xl:px-24 2xl:px-44">
        <a href="{{ route('facilitati') }}" class="uppercase">Hotel</a>
        <a href="{{ route('restaurant') }}" class="uppercase">Restaurant </a>
        <a href="{{ route('evenimente') }}" class="uppercase">Evenimente</a>
        <a href="{{ route('loc-de-joaca') }}" class="uppercase">Loc de joacă</a>
        <div class="relative w-44 py-8">
            <a href="{{ route('home') }}">
                @include('_components.logo1')
            </a>
        </div>
        <a href="{{ route('corporate') }}" class="uppercase">Corporate</a>
        <a href="{{ route('baza-sportiva') }}" class="uppercase">Bază sportivă</a>
        <a href="{{ route('atractii') }}" class="uppercase">Atracții</a>
        <a href="galerie" class="uppercase">Galerie</a>
        <a href="contact" class="uppercase">Contact</a>
    </div>
</section>
