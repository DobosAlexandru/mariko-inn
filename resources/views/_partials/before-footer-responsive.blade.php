<section class="xl:px-24 2xl:px-44 mt-36">
    <div class="flex flex-col items-center text-center">
        <h2 class="text-5xl lg:text-6xl 2xl:text-7xl font-bold">Ce spun</br><span class="text-green-dark">clienții
                noștrii</span>
        </h2>
        <div class="flex items-center gap-x-4 my-12">
            <p class="text-white bg-green-dark font-extrabold text-lg 2xl:text-xl rounded-xl px-6 py-2 2xl:py-4">9.0</p>
            <p class="text-green-dark 2xl:text-lg">Scor booking.com pe</br> baza a 87 de recenzii.</p>
        </div>
    </div>
    <div class="flex flex-col justify-center lg:items-start lg:grid lg:grid-cols-4 lg:grid-rows-1 gap-x-12 mt-8">
        <div class="text-gray-500">
            <div class="px-6 lg:px-0">
                <div class="p-4">
                    <p class="italic text-left text-base 2xl:text-xl leading-6 pt-2">
                        Camera spatioasa si curata, cu o baie moderna;
                        Patul confortabil;</br>
                        Mancarea de la restaurant delicioasa (mic dejun si cina);
                        Personalul foarte amabil;
                        Parcarea incapatoare;
                        Se respecta masurile de siguranta Covid.
                    </p>
                    <div class="flex items-center gap-x-4 my-8">
                        <span class="rounded-2xl text-white text-3xl font-black py-2 px-4 bg-green-dark">G</span>
                        <div>
                            <p class="text-2xl 2xl:text-3xl font-bold">Gabriel</p>
                            <p class="text-xs 2xl:text-lg">Postat pe 24 iunie 2021</p>
                        </div>
                    </div>
                </div>
                <picture>
                    <source media="(min-width: 768px)" srcset="{{asset('img/image21.jpg')}}">
                    <source media="(min-width: 200px)" srcset="{{ asset('img/image21mobile.jpg') }}">
                    <img src="{{asset('img/image21.jpg')}}" class="w-full shadow-2xl rounded-2xl" alt="Clienti 1">
                </picture>
            </div>
        </div>
        <div class="text-gray-500 mt-12 lg:mt-0">
            <div class="px-6 lg:px-0">
                <div class="p-4">
                    <p class="italic text-left text-base 2xl:text-xl leading-6 pt-2">
                        Camera mai mult decât confortabilă, pune la dispoziția călătorului ceea ce trebuie. Curat,
                        mobilier
                        modern, concept modern care oferă intimitatea necesară. Personalul atent la nevoile oaspetelui.
                    </p>
                    <div class="flex items-center gap-x-4 my-8">
                        <span class="rounded-2xl text-white text-3xl font-black py-2 px-4 bg-green-dark">A</span>
                        <div>
                            <p class="text-2xl 2xl:text-3xl font-bold">Adrian</p>
                            <p class="text-xs 2xl:text-lg">Postat pe 24 iunie 2021</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-gray-500">
            <div class="px-6 lg:px-0">
                <div class="p-4">
                    <p class="italic text-left text-base 2xl:text-xl leading-6 pt-2">
                        A fost minunat.Totul la superlativ. Revenim cu drag.
                    </p>
                    <div class="flex items-center gap-x-4 my-8">
                        <span class="rounded-2xl text-white text-3xl font-black py-2 px-4 bg-green-dark">P</span>
                        <div>
                            <p class="text-2xl 2xl:text-3xl font-bold">Petru</p>
                            <p class="text-xs 2xl:text-lg">Postat pe 24 iunie 2021</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-gray-500">
            <div class="px-6 lg:px-0">
                <picture>
                    <source media="(min-width: 768px)" srcset="{{asset('img/image22.jpg')}}">
                    <source media="(min-width: 200px)" srcset="{{ asset('img/image22mobile.jpg') }}">
                    <img src="{{asset('img/image22.jpg')}}" class="w-full shadow-2xl rounded-2xl" alt="Clienti 1">
                </picture>
                <div class="p-4 mt-12">
                    <p class="italic text-left text-base 2xl:text-xl leading-6 pt-2">
                        Camera mare dotată ultra modern. Foarte curat, cald, toate facilitatile. Baie foarte mare.
                        Personal
                        foarte amabil. Mancate foarte buna. Recomand cu drag. Voi reveni.
                    </p>
                    <div class="flex items-center gap-x-4 my-8">
                        <span class="rounded-2xl text-white text-3xl font-black py-2 px-4 bg-green-dark">C</span>
                        <div>
                            <p class="text-2xl 2xl:text-3xl font-bold">Camelia</p>
                            <p class="text-xs 2xl:text-lg">Postat pe 24 iunie 2021</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-green-dark mt-12 lg:mt-36">
    <div class="flex flex-col items-center text-center py-8 px-8">
        <h2 class="text-5xl text-white font-bold">Descoperă</br>Mariko Inn</h2>
        <p class="text-white my-8 2xl:text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor
            incididunt ut labore et dolore
            magna aliqua.</p>
        @include('_components.buton-rezervare')
    </div>
    <div class="mx-0">
        <div class="-mb-6">
            <div class="flex justify-center rounded-2xl px-6">
                @include('_components.iframe-prezentare')
            </div>
        </div>
        <div class="flex justify-between">
            <picture>
                <source media="(min-width:640px)" srcset="{{asset('img/image29.jpg')}}">
                <source media="(min-width:200px)" srcset="{{asset('img/image29mobile.png')}}">
                <img src="{{asset('img/image29.jpg')}}" alt="Descopera 1">
            </picture>

            <picture>
                <source media="(min-width:640px)" srcset="{{asset('img/image30.jpg')}}">
                <source media="(min-width:200px)" srcset="{{asset('img/image30mobile.png')}}">
                <img src="{{asset('img/image30.jpg')}}" alt="Descopera 2">
            </picture>
        </div>
        <div class="relative flex justify-center h-36 mt-1">
            <div class="absolute -bottom-28">
                <picture>
                    <source media="(min-width:640px)" srcset="{{asset('img/image27.jpg')}}">
                    <source media="(min-width:200px)" srcset="{{asset('img/image27mobile.png')}}">
                    <img src="{{asset('img/image27.jpg')}}" alt="Descopera 3">
                </picture>
            </div>
        </div>
    </div>
</section>
<section class="relative mt-52 w-screen px-6">
    <div class="absolute -top-20 left-0 -z-1">
        @include('_components.back-flower2')
    </div>
    <div class="flex flex-col items-center">
        <div class="relative">
            <div class="mr-8">
                <picture>
                    <source media="(min-width:768px)" srcset="{{asset('img/castelul-miclauseni.jpg')}}">
                    <source media="(min-width:200px)" srcset="{{asset('img/castelul-miclauseni-responsive.jpg')}}">
                    <img class="rounded-2xl" src="{{asset('img/castelul-miclauseni.jpg')}}" alt="Castelul Miclăușeni">
                </picture>
            </div>
            <div class="absolute -right-2 -bottom-16">
                <picture>
                    <source media="(min-width:768px)" srcset="{{asset('img/image26.jpg')}}">
                    <source media="(min-width:200px)" srcset="{{asset('img/image26responsive.jpg')}}">
                    <img class="shadow-2xl rounded-2xl" src="{{asset('img/image26.jpg')}}" alt="">
                </picture>
            </div>
        </div>
        <div class="flex flex-col items-center text-center mt-36">
            <h2 class="text-5xl font-bold"><span class="text-green-dark">Zone atractive</span></br>aproape
                de tine
            </h2>
            <p class="my-8 2xl:text-xl">
                Lorem ipsum dolor sit amet, consectetur</br> adipiscing elit, sed do eiusmod tempor incididunt</br> ut
                labore et
                dolore magna aliqua.
            </p>
            @include('_components.buton-atractii')
        </div>
    </div>
</section>
<section class="bg-gray-50 mt-24 pt-24">

    <div class="flex flex-col items-center text-center">
        <img src="{{asset('img/MarikoInn-Logo1.png')}}" alt="Mariko Inn Logo">
        <h2 class="text-5xl font-bold my-8"><span class="text-green-dark">
                Te așteptăm la</span></br>Mariko Inn
        </h2>
        <p class="mb-8 2xl:text-xl">
            Lorem ipsum dolor sit amet, consectetur</br> adipiscing elit, sed do eiusmod tempor incididunt</br> ut
            labore et
            dolore magna aliqua.
        </p>
        @include('_components.buton-rezervare')
    </div>
    <img src="{{asset('img/locatie-mobile.jpg')}}" class="w-screen" alt="Location">
</section>
