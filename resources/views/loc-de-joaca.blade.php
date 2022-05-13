@extends('_layouts.app')

@section('body')
<section class="relative text-center lg:text-left px-8 xl:px-24 2xl:px-44 mt-16">
    <div class="flex flex-col-reverse lg:grid lg:grid-cols-2 items-center">
        <div class="flex flex-col items-center lg:items-start">
            <div class="text-5xl lg:text-7xl 2xl:text-8xl font-bold">
                <h2>Loc de joacă la</br> <span class="text-green-dark">Mariko Inn</span></h2>
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
        <div class="absolute -z-1 top-0 lg:top-1 right-0">
            @include('_components.back-flower1')
        </div>
        <img src="{{asset('img/baza-sportiva-hero.png')}}" class="" alt="Baza Sportiva Hero">
    </div>
</section>
@endsection
