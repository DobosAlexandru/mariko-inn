@extends('_layouts.app')

@section('body')
<section class="relative text-center lg:text-left xl:pl-24 2xl:pl-44 mt-16">
    <div class="flex flex-col-reverse lg:grid lg:grid-cols-2 justify-end items-center">
        <div class="flex flex-col items-center lg:items-start mt-24 lg:mt-0 px-8">
            <div class="text-5xl lg:text-7xl 2xl:text-8xl font-bold">
                <h2>Corporate la</br> <span class="text-green-dark">Mariko Inn</span></h2>
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
        <div class="flex justify-end w-full pl-16">
            <img src="{{asset('img/corporate-hero.png')}}" alt="Corporate Hero">
        </div>
    </div>
</section>
@foreach($restaurants as $restaurant)
<section class="mt-100 lg:mt-36">
    <img src="{{ URL::to(asset('img/'. $restaurant['slug'] .'.jpg'))}}" class="w-screen"
        alt="{{$restaurant['face'].' '.$restaurant['type']}}">
    <div class="lg:grid lg:grid-cols-2 xl:px-24 2xl:px-44">
        <div class="relative mx-6 lg:mx-0">
            <div
                class="absolute -top-16 lg:bottom-0 lg:top-auto shadow-md bg-white rounded-2xl">
                <div class="flex flex-col items-start justify-center py-8 lg:py-12 px-10 ">
                    <h2 class="text-3xl lg:text-6xl 2xl:text-7xl font-bold">
                        {{$restaurant['face']}}</br><span class="text-green-dark">{{$restaurant['type']}}</span></h2>
                    <div class="py-8 text-sm flex flex-col items-start gap-y-2 2xl:text-xl">
                        {!!$restaurant['description']!!}
                    </div>
                    @include('_components.buton-rezervare')
                </div>
            </div>
        </div>
        <div class="hidden lg:block">
            <div class="flex flex-col items-end mt-8">
                <div class="grid grid-cols-2 gap-6">
                    @for($i=1; $i <= 4; $i++) <div class="relative overflow-hidden">
                        <img class="rounded-2xl" src="{{asset('img/'. $restaurant['images'][$i] .'.jpg')}}"
                            alt="Camera Superior Double 4">
                        <div class="absolute inset-0 z-30 bg-gray-200 bg-opacity-50 rounded-2xl hover:bg-opacity-0">
                        </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
    </div>
</section>
@endforeach
@endsection
