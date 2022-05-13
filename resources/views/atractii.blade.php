@extends('_layouts.app')

@section('body')
<section class="text-center lg:text-left xl:pl-24 2xl:pl-44">
    <div class="flex flex-col-reverse justify-end lg:grid lg:grid-cols-2 items-center justify-between">
        <div class="flex flex-col items-center lg:items-start mt-24 px-8 lg:px-0">
            <h2 class="text-5xl lg:text-7xl 2xl:text-8xl font-bold">Zone atractive</br> <span
                    class="text-green-dark">aproape de
                    tine</span></h2>
            <p class="text-gray-500 my-12 font-base leading-6 lg:pr-20 2xl:text-xl">Nunc sed nunc vitae diam pulvinar
                placerat in vel
                tellus. Phasellus purus mauris, dapibus sed auctor vel, lobortis non arcu. Vestibulum varius elementum
                blandit. Ut dapibus, mauris ultrices congue vulputate, est odio tincidunt risus, in suscipit felis
                ligula non nunc.</p>
        </div>
        <div class="flex justify-end">
            <img src="{{asset('img/map1.png')}}" class="" alt="Map 1">
        </div>
    </div>
</section>
@foreach($atractii as $atractie)
@if($atractie['index'] % 2 == 0)
<section class="relative flex justify-center mt-36 2xl:mt-52 w-screen xl:px-24 2xl:px-44">
    <div class="absolute -top-20 right-0 -z-1">
        @include('_components.back-flower3')
    </div>
    <div class="flex flex-col-reverse px-12 lg:grid lg:grid-cols-2 2xl:gap-x-12 items-center">
        <div class="flex flex-col items-end text-right lg:pr-16 pt-20">
            <p class="text-green-dark font-bold pb-2">{{ $atractie['distance'] }}</p>
            <h2 class="text-6xl text-black 2xl:text-7xl font-bold">{{ $atractie['name'] }}</h2>
            <p class="my-8 2xl:text-xl">{{ $atractie['description'] }}</p>
            @include('_components.buton-atractii')
        </div>
        <div class="relative">

            <img class="rounded-2xl" src="{{asset('img/'.$atractie['slug'].'.jpg')}}" alt="$atractie['name']">
            <div class="absolute -left-8 2xl:-left-12 -bottom-16 lg:-bottom-28">
                <img class="shadow-2xl rounded-2xl w-2/3 lg:w-auto"
                    src="{{asset('img/'.$atractie['secondary-image'].'.jpg')}}" alt="$atractie['name']">
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
            <img class="rounded-2xl" src="{{asset('img/'.$atractie['slug'].'.jpg')}}" alt="{{$atractie['name']}}">
            <div class="absolute -right-36 lg:-right-8 2xl:-right-12 -bottom-16 lg:-bottom-28 ">
                <img class="w-2/3 lg:w-auto shadow-2xl rounded-2xl"
                    src="{{asset('img/'.$atractie['secondary-image'].'.jpg')}}" alt="$atractie['name']">
            </div>
        </div>
        <div class="flex flex-col items-start text-left pt-20 lg:pl-16">
            <p class="text-green-dark font-bold pb-2">{{ $atractie['distance'] }}</p>
            <h2 class="text-6xl text-black 2xl:text-7xl font-bold">{{$atractie['name']}}</h2>
            <p class="my-8 2xl:text-xl">{{$atractie['description']}}</p>
            @include('_components.buton-atractii')
        </div>
    </div>
</section>
@endif
@endforeach
@endsection
