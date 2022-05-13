@extends('_layouts.app')

@section('body')
<section class="text-center lg:text-left px-6 xl:px-24 2xl:px-44">
    <div class="flex justify-between flex-col items-center lg:flex-row mt-24 mb-12">
        <h2 class="text-gray-light text-5xl lg:text-6xl 2xl:text-7xl font-serif font-bold">Avem <span
                class="text-green-dark">multe
                lucruri</span> </br> să-ți
            oferim</h2>
        <div class="text-gray-500 mt-16 lg:mt-0 2xl:text-xl px-8 lg:w-1/2 lg:pl-24">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et
                dolore magna aliqua.</p>
            <div class="flex justify-center lg:justify-start items-center mt-12">
                <div class="">
                    <svg class="stroke-current fill-current text-gray-300 hover:text-gray-dark mr-8" width="42"
                        height="17" viewBox="0 0 42 17">
                        <path
                            d="M41.875 8.49999C41.875 8.08559 41.7104 7.68816 41.4174 7.39513C41.1244 7.10211 40.7269 6.93749 40.3125 6.93749H5.93755L10.0417 2.83332C10.3177 2.53712 10.468 2.14536 10.4608 1.74056C10.4537 1.33577 10.2897 0.949551 10.0034 0.663274C9.71715 0.376996 9.33093 0.213013 8.92614 0.205871C8.52134 0.198729 8.12958 0.348985 7.83338 0.624985L1.06255 7.39582C0.769944 7.68879 0.605591 8.08592 0.605591 8.49999C0.605591 8.91405 0.769944 9.31118 1.06255 9.60415L7.83338 16.375C8.12958 16.651 8.52134 16.8012 8.92614 16.7941C9.33093 16.787 9.71715 16.623 10.0034 16.3367C10.2897 16.0504 10.4537 15.6642 10.4608 15.2594C10.468 14.8546 10.3177 14.4629 10.0417 14.1667L5.93755 10.0625H40.3125C40.7269 10.0625 41.1244 9.89787 41.4174 9.60484C41.7104 9.31182 41.875 8.91439 41.875 8.49999Z" />
                    </svg>
                </div>
                <div class="">
                    <svg class="stroke-current fill-current text-gray-300 hover:text-gray-dark" width="42" height="17"
                        viewBox="0 0 42 17">
                        <path
                            d="M0.124955 8.50007C0.124955 8.91447 0.289571 9.3119 0.582596 9.60493C0.875622 9.89795 1.27305 10.0626 1.68745 10.0626L36.0625 10.0626L31.9583 14.1667C31.6823 14.4629 31.532 14.8547 31.5392 15.2595C31.5463 15.6643 31.7103 16.0505 31.9966 16.3368C32.2828 16.6231 32.6691 16.787 33.0739 16.7942C33.4787 16.8013 33.8704 16.6511 34.1666 16.3751L40.9375 9.60424C41.2301 9.31127 41.3944 8.91414 41.3944 8.50007C41.3944 8.08601 41.2301 7.68888 40.9375 7.39591L34.1666 0.625072C33.8704 0.349071 33.4787 0.198814 33.0739 0.205957C32.6691 0.2131 32.2829 0.377082 31.9966 0.66336C31.7103 0.949637 31.5463 1.33586 31.5392 1.74065C31.532 2.14544 31.6823 2.53721 31.9583 2.8334L36.0625 6.93757L1.68746 6.93757C1.27305 6.93757 0.875623 7.10219 0.582597 7.39522C0.289571 7.68824 0.124955 8.08567 0.124955 8.50007Z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="my-12">
    <div class="swiper mySwiper w-full h-full">
        <div class="swiper-wrapper flex items-center py-8">
            <div class="swiper-slide">
                <div class="relative group flex flex-col items-center">
                    <img src="{{ asset('img/carousel1.jpg') }}"
                        class="block object-cover rounded-2xl group-hover:shadow-2xl" alt="Restaurant 1">
                    <div class="absolute -bottom-4 text-white text-base font-bold">
                        <a href="{{ route('facilitati') }}"
                            class="2xl:text-xl bg-gray-light group-hover:bg-red-dark px-10 py-4 rounded-lg">Hotel</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="relative group flex flex-col items-center">
                    <img src="{{ asset('img/carousel2.jpg') }}"
                        class="block object-cover rounded-2xl group-hover:shadow-2xl" alt="Restaurant 1">
                    <div class="absolute -bottom-4 text-white text-base font-bold">
                        <a href="{{ route('restaurant') }}"
                            class="2xl:text-xl bg-gray-light group-hover:bg-red-dark px-10 py-4 rounded-lg">Restaurant</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="relative group flex flex-col items-center">
                    <img src="{{ asset('img/carousel-loc-de-joaca.jpg') }}"
                        class="block object-cover rounded-2xl group-hover:shadow-2xl" alt="Loc de joaca 1">
                    <div class="absolute -bottom-4 text-white text-base font-bold">
                        <a href="{{ route('loc-de-joaca') }}"
                            class="2xl:text-xl bg-gray-light group-hover:bg-red-dark px-10 py-4 rounded-lg">Loc de joacă</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="relative group flex flex-col items-center">
                    <img src="{{ asset('img/carousel4.jpg') }}"
                        class="block object-cover rounded-2xl group-hover:shadow-2xl" alt="Evenimente 1">
                    <div class="absolute -bottom-4 text-white text-base font-bold">
                        <a href="{{ route('evenimente') }}"
                            class="2xl:text-xl bg-gray-light group-hover:bg-red-dark px-10 py-4 rounded-lg">Evenimente</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="relative group flex flex-col items-center">
                    <img src="{{ asset('img/carousel-corporate.jpg') }}"
                        class="block object-cover rounded-2xl group-hover:shadow-2xl" alt="Corporate 1">
                    <div class="absolute -bottom-4 text-white text-base font-bold">
                        <a href=""
                            class="2xl:text-xl bg-gray-light group-hover:bg-red-dark px-10 py-4 rounded-lg">Corporate</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="relative group flex flex-col items-center">
                    <img src="{{ asset('img/carousel3.jpg') }}"
                        class="block object-cover rounded-2xl group-hover:shadow-2xl" alt="Bază sportivă 1">
                    <div class="absolute -bottom-4 text-white text-base font-bold">
                        <a href="{{ route('baza-sportiva') }}"
                            class="2xl:text-xl bg-gray-light group-hover:bg-red-dark px-10 py-4 rounded-lg">Bază sportivă</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="relative group flex flex-col items-center">
                    <img src="{{ asset('img/carousel-atractii.jpg') }}"
                        class="block object-cover rounded-2xl group-hover:shadow-2xl" alt="Atracții 1">
                    <div class="absolute -bottom-4 text-white text-base font-bold">
                        <a href="{{ route('atractii') }}"
                            class="2xl:text-xl bg-gray-light group-hover:bg-red-dark px-10 py-4 rounded-lg">Atracții</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="relative my-36 w-screen">
    <div class="flex justify-center md:justify-between items-center flex-col md:flex-row">
        <div class="mb-40 md:mb-0">
            <img src="{{ asset('img/moment-1.jpg') }}"
                class="rounded-l-2xl lg:rounded-l-none rounded-r-2xl w-screen lg:w-auto" alt="Moment 1">
        </div>
        <div class="absolute lg:bottom-7 2xl:px-32">
            <div class="rounded-xl shadow-base bg-white py-8 px-6 mx-6 sm:mx-12 lg:mx-80">
                <div class="2xl:px-24">
                    <h2 class="text-gray-light text-5xl lg:text-6xl 2x:text-7xl text-center font-serif font-bold my-6">
                        Complex
                        hotelier<span class="text-green-dark"></br>Mariko
                            Inn</span>
                    </h2>
                    <div class="2xl:text-xl text-center text-gray-500 font-base sm:px-20 md:px-4 lg:px-14">
                        <p class="leading-6 my-4">
                            Situat in centrul regiunii istorice Moldova in NE Romaniei complexul hotelier Mariko INN
                            este
                            locatia
                            ideala pentru cei care calatoresc aici in scop turistic sau de afaceri.
                        </p>
                        <p class="leading-6 my-4">
                            Hotelul detine o infrastructura complexa combinand modernismul elementelor decorative alese
                            cu
                            grija cu
                            linii traditionale asezate cu bun gust.
                        </p>
                        <p class="leading-6 my-4">
                            Cele 50 de camere, modernul centru spa si cele trei restaurante cu specific diferit va
                            asteapta
                            sa le
                            descoperiti.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-60 md:mt-0">
            <img src="{{ asset('img/moment-2.jpg') }}"
                class="rounded-r-2xl lg:rounded-r-none rounded-l-2xl w-screen lg:w-auto" alt="Moment 2">
        </div>
    </div>
    <div class="flex flex-col items-center">
        <div class="absolute -top-14 -z-1">
            @include('_components.back-flower1')
        </div>

    </div>
</section>
<section class="xl:px-24 2xl:px-44">
    <div class="flex flex-col justify-center items-center text-center lg:text-right lg:flex-row">
        <div class="flex flex-col items-center lg:items-end px-8 lg:mr-12">
            <h2 class="text-gray-light text-5xl lg:text-6xl 2xl:text-7xl font-serif font-bold">
                Facilități de cazare</br>
                <span class="text-green-dark">
                    la un alt nivel
                </span>
            </h2>
            <div class="text-gray-500 max-w-xl 2xl:text-xl leading-6 my-8 sm:px-20 lg:px-0">
                <p>
                    Camerele Mariko Inn isi rasfata oaspetii cu o atmosfera calda si primitoare garantata prin designul
                    modern perfect echilibrat cu elementele clasice. Facilitatile de lux asigura o
                    experienta relaxanta
                    si comfortabila
                </p>
            </div>
            <a href="{{route('facilitati')}}"
                class="flex items-center justify-center bg-red-dark text-white rounded-xl hover:bg-red-700 px-6 py-3">
                <svg class="mr-4" width="14" height="14" viewBox="0 0 14 14" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7 13.25C10.4462 13.25 13.25 10.4462 13.25 7C13.25 3.55375 10.4463 0.75 7 0.749999C3.55375 0.749999 0.750001 3.55375 0.750001 7C0.75 10.4462 3.55375 13.25 7 13.25ZM3.875 6.375L7 6.375L7 3.875L10.125 7L7 10.125L7 7.625L3.875 7.625L3.875 6.375Z"
                        fill="white" />
                </svg>
                Află mai multe
            </a>
        </div>
        <img src="{{ asset('img/image16.jpg') }}" class="hidden lg:block rounded-2xl" alt="Facilitati 1">
    </div>
    <div
        class="flex flex-col justify-evenly items-center lg:items-start gap-x-16 gap-y-16 text-center my-12 px-8 lg:h-96 lg:flex-row">
        <div class="flex flex-col group rounded-2xl shadow-2xl gap-y-4 p-2 xs:w-64 sm:w-80">
            <img src="{{ asset('img/hotel-1.jpg') }}" class="shadow-lg" alt="Camera Twin">
            <h3 class="text-2xl 2xl:text-3xl font-bold">Cameră twin</h3>
            <div class="lg:hidden group-hover:block">
                <p class="2xl:text-xl text-gray-500 p-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="p-2">
                    <a href="#"
                        class="flex items-center justify-center bg-red-dark text-white rounded-xl hover:bg-red-700 px-6 py-3">
                        <svg class="mr-4" width="14" height="14" viewBox="0 0 14 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 13.25C10.4462 13.25 13.25 10.4462 13.25 7C13.25 3.55375 10.4463 0.75 7 0.749999C3.55375 0.749999 0.750001 3.55375 0.750001 7C0.75 10.4462 3.55375 13.25 7 13.25ZM3.875 6.375L7 6.375L7 3.875L10.125 7L7 10.125L7 7.625L3.875 7.625L3.875 6.375Z"
                                fill="white" />
                        </svg>
                        Află mai multe
                    </a>
                </div>
            </div>
        </div>
        <div class="flex flex-col group rounded-2xl shadow-2xl gap-y-4 p-2 xs:w-64 sm:w-80">
            <img src="{{ asset('img/hotel-2.jpg') }}" class="shadow-lg" alt="Camera dubla">
            <h3 class="text-2xl 2xl:text-3xl font-bold">Cameră dublă</h3>
            <div class="lg:hidden group-hover:block">
                <p class="2xl:text-xl text-gray-500 p-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="p-2">
                    <a href="#"
                        class="flex items-center justify-center bg-red-dark text-white rounded-xl hover:bg-red-700 px-6 py-3">
                        <svg class="mr-4" width="14" height="14" viewBox="0 0 14 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 13.25C10.4462 13.25 13.25 10.4462 13.25 7C13.25 3.55375 10.4463 0.75 7 0.749999C3.55375 0.749999 0.750001 3.55375 0.750001 7C0.75 10.4462 3.55375 13.25 7 13.25ZM3.875 6.375L7 6.375L7 3.875L10.125 7L7 10.125L7 7.625L3.875 7.625L3.875 6.375Z"
                                fill="white" />
                        </svg>
                        Află mai multe
                    </a>
                </div>
            </div>
        </div>
        <div class="flex flex-col group rounded-2xl shadow-2xl gap-y-4 p-2 xs:w-64 sm:w-80">
            <img src="{{ asset('img/hotel-3.jpg') }}" class="shadow-lg" alt="Camera 2 dormitoare">
            <h3 class="text-2xl 2xl:text-3xl font-bold">Cameră 2 dormitoare</h3>
            <div class="lg:hidden group-hover:block">
                <p class="2xl:text-xl text-gray-500 p-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="p-2">
                    <a href="#"
                        class="flex items-center justify-center bg-red-dark text-white rounded-xl hover:bg-red-700 px-6 py-3">
                        <svg class="mr-4" width="14" height="14" viewBox="0 0 14 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 13.25C10.4462 13.25 13.25 10.4462 13.25 7C13.25 3.55375 10.4463 0.75 7 0.749999C3.55375 0.749999 0.750001 3.55375 0.750001 7C0.75 10.4462 3.55375 13.25 7 13.25ZM3.875 6.375L7 6.375L7 3.875L10.125 7L7 10.125L7 7.625L3.875 7.625L3.875 6.375Z"
                                fill="white" />
                        </svg>
                        Află mai multe
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mt-24 xl:pr-24 2xl:pr-44 2xl:mt-44">
    <div class="flex flex-col-reverse md:grid md:grid-cols-2 items-center w-screen">
        <div class="w-full h-full">
            <img id="defaultImg" src="{{ asset('img/home-restaurant-rustic.jpg') }}" class="w-full rounded-l-2xl md:rounded-l-none rounded-r-2xl"
                alt="Rustic">
        </div>
        <div class="flex flex-col items-center lg:items-start text-center max-w-xl 2xl:max-w-2xl lg:text-left px-8 mb-8 lg:px-16">
            <div class="flex flex-col items-center lg:items-start">
                <h2 class="font-serif font-bold text-5xl lg:text-6xl 2xl:text-7xl">Restaurant</br><span
                        class="text-green-dark">pentru fiecare
                        capriciu</span></h2>
                <p class="text-gray-500 my-8 2xl:text-xl">Chef Liviu Morarescu & team specialitati (cel mai bun gulas
                    din
                    Moldova, cunoscuti pt sturioni, pizzerie steak-uri)
                    diversitate si Pepsi si Cola toata gama.</p>
            </div>
            <div class="hidden md:grid grid-rows-3 gap-y-6 mb-12 md:text-xl lg:text-3xl 2xl:text-4xl text-white">
                <div class="flex gap-x-4">
                    <button id="rustic" class="font-bold  bg-gray-150 rounded-2xl hover:bg-green-dark px-6 py-4">
                        Rustic
                    </button>
                    <button id="highclass" class="font-bold bg-gray-150 rounded-2xl hover:bg-green-dark px-6 py-4">
                        Highclass
                    </button>
                </div>

                <button id="terasa" class="font-bold bg-gray-150 rounded-2xl hover:bg-green-dark px-6 py-4">
                    Terasă acoperită si descoperită
                </button>

                <div class="flex gap-x-4">
                    <button id="steakhouse" class="font-bold bg-gray-150 rounded-2xl hover:bg-green-dark px-6 py-4">
                        Steakhouse
                    </button>
                    <button id="pergola" class="font-bold bg-gray-150 rounded-2xl hover:bg-green-dark px-6 py-4">
                        Pergola
                    </button>
                </div>
            </div>
            <div class="hidden md:block">
                <a href="{{route('restaurant')}}"
                    class="flex items-center justify-center bg-red-dark text-white rounded-xl hover:bg-red-700 px-6 py-3">
                    <svg class="mr-4" width="14" height="14" viewBox="0 0 14 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7 13.25C10.4462 13.25 13.25 10.4462 13.25 7C13.25 3.55375 10.4463 0.75 7 0.749999C3.55375 0.749999 0.750001 3.55375 0.750001 7C0.75 10.4462 3.55375 13.25 7 13.25ZM3.875 6.375L7 6.375L7 3.875L10.125 7L7 10.125L7 7.625L3.875 7.625L3.875 6.375Z"
                            fill="white" />
                    </svg>
                    Află mai multe
                </a>
            </div>
        </div>
    </div>
    @include('_components.home-restaurants-swiper')
</section>
@endsection
