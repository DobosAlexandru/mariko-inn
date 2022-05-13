<section class="text-gray-500 xl:px-24 2xl:px-44 mt-44">
    <div class="flex flex-col items-center text-center">
        <h2 class="text-6xl 2xl:text-7xl font-bold">Ce spun</br><span class="text-green-dark">clienții noștrii</span>
        </h2>
        <div class="flex items-center gap-x-4 my-12">
            <p class="text-white bg-green-dark font-extrabold text-lg 2xl:text-xl rounded-xl px-6 py-2 2xl:py-4">9.0</p>
            <p class="text-green-dark 2xl:text-lg">Scor booking.com pe</br> baza a 87 de recenzii.</p>
        </div>
    </div>
    <div class="flex flex-col items-center">
        <div class="grid sm:grid-cols-2 sm:gap-x-16 lg:grid-cols-4 lg:gap-x-12 mt-8 px-8 lg:px-0">
            <div class="text-gray-500">
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
                <img src="{{asset('img/image22.jpg')}}" class="shadow-2xl rounded-2xl" alt="Clienti 1">
            </div>
            <div class="text-gray-500">
                <img src="{{asset('img/image21.jpg')}}" class="shadow-2xl rounded-2xl mb-2" alt="Clienti 2">
                <div class="p-4">
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
            <div class="text-gray-500">
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
                <img src="{{asset('img/image23.jpg')}}" class="shadow-2xl rounded-2xl" alt="Clienti 3">
            </div>
            <div class="text-gray-500">
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
                <img src="{{asset('img/image24.jpg')}}" class="shadow-2xl rounded-2xl" alt="Clienti 4">
            </div>
        </div>
    </div>
</section>
<section class="grid grid-cols-2 bg-green-dark mt-36 xl:pl-24 2xl:pl-44">
    <div class="flex flex-col items-start py-8">
        <h2 class="text-6xl 2xl:text-7xl text-white font-bold">Descoperă</br>Mariko Inn</h2>
        <p class="text-white my-8 pr-36 2xl:pr-24 2xl:text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor
            incididunt ut labore et dolore
            magna aliqua.</p>
        @include('_components.buton-rezervare')
    </div>
    <div class="relative">
        <div class="">
            <div class="absolute right-70 bottom-0">
                <div class="flex flex-col items-end gap-y-5 bottom-0">
                    <div class="flex justify-center items-center rounded-2xl">
                        @include('_components.iframe-prezentare')
                    </div>
                    <div>
                        <img src="{{asset('img/image29.jpg')}}" class="rounded-t-2xl" alt="Descopera 1">
                    </div>
                </div>
            </div>
            <div class="absolute right-0 top-0">
                <div class="flex flex-col gap-y-5">
                    <div>
                        <img src="{{asset('img/image30.jpg')}}" class="rounded-bl-2xl" alt="Descopera 2">
                    </div>
                    <div>
                        <img src="{{asset('img/image27.jpg')}}" class="shadow-2xl rounded-l-2xl" alt="Descopera 3">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="relative flex justify-center mt-52 w-screen xl:px-24 2xl:px-44">
    <div class="absolute -top-20 left-0 -z-1">
        @include('_components.back-flower2')
    </div>
    <div class="flex justify-center items-center">
        <div class="relative">
            <img class="rounded-2xl mr-8" src="{{asset('img/castelul-miclauseni.jpg')}}" alt="Castelul Miclăușeni">
            <img class="absolute -right-2 -bottom-28 shadow-2xl rounded-2xl" src="{{asset('img/image26.jpg')}}" alt="">
        </div>
        <div class="flex flex-col items-start pt-20 pl-12">
            <h2 class="text-6xl 2xl:text-7xl font-bold"><span class="text-green-dark">Zone atractive</span></br>aproape
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
<section class="flex items-center relative mt-64 mb-24 ml-24">
    <img src="{{asset('img/location.jpg')}}" class="border rounded-l-2xl w-screen" alt="Location">
    <div class="absolute z-10 left-16 flex flex-col items-start">
        <img src="{{asset('img/MarikoInn-Logo1.png')}}" alt="Mariko Inn Logo">
        <h2 class="text-6xl 2xl:text-7xl font-bold my-8"><span class="text-green-dark">
                Te așteptăm la</span></br>Mariko Inn
        </h2>
        <p class="mb-8 2xl:text-xl">
            Lorem ipsum dolor sit amet, consectetur</br> adipiscing elit, sed do eiusmod tempor incididunt</br> ut
            labore et
            dolore magna aliqua.
        </p>
        @include('_components.buton-rezervare')
    </div>
</section>
