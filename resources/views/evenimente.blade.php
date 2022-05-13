@extends('_layouts.app')

@section('body')
<section class="relative text-center lg:text-left px-8 xl:px-24 2xl:px-44 mt-16">
    <div class="flex flex-col-reverse lg:grid lg:grid-cols-2 items-center">
        <div class="flex flex-col items-center lg:items-start">
            <div class="text-5xl lg:text-7xl 2xl:text-8xl font-bold">
                <h2>Evenimente la</br> <span class="text-green-dark">Mariko Inn</span></h2>
            </div>
            <div class="text-gray-500 my-12 font-base leading-6 lg:pr-20 2xl:text-xl">
                <p>Nunc sed nunc vitae diam
                    pulvinar
                    placerat in vel
                    tellus. Phasellus purus mauris, dapibus sed auctor vel, lobortis non arcu. Vestibulum varius
                    elementum
                    blandit. Ut dapibus, mauris ultrices congue vulputate, est odio tincidunt risus, in suscipit felis
                    ligula non nunc.</p>
            </div>
        </div>
        <div class="absolute -z-1 top-0 lg:top-auto right-0">
            @include('_components.back-flower3')
        </div>
        <img src="{{asset('img/evenimente-hero.png')}}" class="" alt="Plate 1">
    </div>
</section>
@foreach($evenimente as $eveniment)
@if($eveniment['index'] % 2 == 0)
<section class="relative flex justify-center mt-36 2xl:mt-52 w-screen xl:px-24 2xl:px-44">
    <div class="absolute -top-20 right-0 -z-1">
        @include('_components.back-flower3')
    </div>
    <div class="flex flex-col-reverse px-12 lg:grid lg:grid-cols-2 2xl:gap-x-12 items-center">
        <div class="flex flex-col items-end text-right lg:pr-16 lg:mr-10 pt-20">
            <h2 class="text-green-dark text-6xl 2xl:text-7xl font-bold">{{ $eveniment['name'] }}</h2>
            <p class="my-8 2xl:text-xl">{{ $eveniment['description'] }}</p>
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
        <div class="relative">

            <img class="rounded-2xl" src="{{asset('img/'.$eveniment['slug'].'.jpg')}}" alt="$eveniment['name']">
            <div class="absolute -left-8 lg:-left-12 -bottom-16 lg:-bottom-28">
                <img class="shadow-2xl rounded-2xl w-2/3 lg:w-auto"
                    src="{{asset('img/'.$eveniment['secondary-image'].'.jpg')}}" alt="$eveniment['name']">
            </div>
        </div>
    </div>
</section>
@else
<section class="relative flex justify-center mt-36 2xl:mt-52 w-screen xl:px-24 2xl:px-44">
    <div class="absolute -top-20 left-0 -z-1">
        @include('_components.back-flower2')
    </div>
    <div class="flex flex-col px-12 lg:grid lg:grid-cols-2 2xl:gap-x-12 items-center">
        <div class="relative flex justify-end">
            <img class="rounded-2xl" src="{{asset('img/'.$eveniment['slug'].'.jpg')}}" alt="{{$eveniment['name']}}">
            <div class="absolute -right-36 lg:-right-12 -bottom-16 lg:-bottom-28 ">
                <img class="w-2/3 lg:w-auto shadow-2xl rounded-2xl"
                    src="{{asset('img/'.$eveniment['secondary-image'].'.jpg')}}" alt="$eveniment['name']">
            </div>
        </div>
        <div class="flex flex-col items-start text-left pt-20 lg:pl-16 lg:ml-10">
            <h2 class="text-green-dark text-6xl 2xl:text-7xl font-bold">{{$eveniment['name']}}</h2>
            <p class="my-8 2xl:text-xl">{{$eveniment['description']}}</p>
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
</section>
@endif
@endforeach
<section class="mt-64 xl:px-24 2xl:px-44">
    <div class="flex flex-col justify-center items-center text-center lg:text-right lg:flex-row">
        <div class="flex flex-col items-center lg:items-end px-8 lg:mr-12">
            <h2 class="text-gray-light text-5xl lg:text-6xl 2xl:text-7xl font-serif font-bold">
                <span class="text-green-dark">Nevoie de cazare</span></br>
                la eveniment?
            </h2>
            <div class="text-gray-500 max-w-xl 2xl:text-xl leading-6 my-8 sm:px-20 lg:px-0">
                <p>
                    Camerele Mariko Inn isi rasfata oaspetii cu o atmosfera calda si primitoare garantata prin designul
                    modern perfect echilibrat cu elementele clasice. Facilitatile de lux asigura o
                    experienta relaxanta
                    si comfortabila.
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
    {{-- <div
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
    </div> --}}
</section>
@endsection
