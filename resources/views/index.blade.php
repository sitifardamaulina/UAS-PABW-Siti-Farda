@extends('layout.main')
@section('container')
@foreach ($header as $h)
<section class=" pt-8 pb-28  bg-[#FFFAF2]">
  <div class="container flex flex-col items-center lg:flex-row">
  <div class=" space-y-8 flex-1">
    <h1 class="text-7xl font-bold leading-none relative">
      {!! $h['title'] !!}
    </h1>
    <p class="text-xl text-gray-500">
      {!! $h['description'] !!}
    </p>
    <button class="bg-[#FF994F] py-3 px-8 text-white rounded-full hover:bg-opacity-50">Register Now</button>
  </div>

  <div class="flex space-x-4 flex-1 hidden lg:flex">
    <img class="w-full" src="assets/gambar/{{ $h['image'] }}" alt="">
  </div>
  </div>
</section>
@endforeach

<div class="container py-20">
  @foreach ($coursetitle as $ct)
  <div class="flex justify-between items-center w-full">
    <h3 class="text-5xl font-bold w-[364px]">{{ $ct['title'] }}</h3>
    <p>{!! $ct['description'] !!}</p>
  </div>
  @endforeach

  <div class="grid lg:grid-cols-3 sm:grid-cols-1 mt-7 gap-7">
    @foreach ($course as $c)
    @if($c['id'] <= '3')  
    <div class="rounded-md bg-white bg-[url('assets/gambar/{{ $c['image_bg'] }}')] bg-center bg-cover overflow-hidden">
    @else
    <div class="rounded-md bg-white bg-[url('{{ asset('storage/'.$c['image_bg'])}}')] bg-center bg-cover overflow-hidden">
  @endif  
    <a href="">
        <div class="flex p-5 min-h-[220px] flex-col items-start bg-gradient-to-b from-transparent to-black">
          <div class="flex w-full">
            <span class="bg-white rounded-3xl py-3 px-5 text-[#FF994F] text-sm mr-auto"><b>${{ $c['price'] }}</b>/Course</span>
            <span class="flex rounded-3xl bg-[#00000066] py-3 px-5 text-sm ml-auto">
              <img src="assets/gambar/star.svg" alt="">
              <p class="text-white ml-2"> ({{ $c['rating'] }}) </p>
            </span>
          </div>
          <div class="mt-auto">
            <h5 class="text-white text-lg font-bold">{{ $c['title'] }}</h5>
          </div>
          <div class="flex w-full mt-2">
            <div class="text-sm mr-auto flex">
              <img src="assets/gambar/{{ $c['image'] }}" class="max-h-[24px] max-w-[24px]" alt=""/>
              <div class="pl-3 text-white">
                <span class="block text-sm">{{ $c['teacher'] }}</span>
                <span class="text-xs">{{ $c['job'] }}</span>
              </div>
            </div>
            <div class="text-sm ml-auto flex">
              <span class="h-[22px] w-[22px] bg-gray-300 rounded-full flex text-white justify-center items-center">
                <img src="assets/gambar/Polygon 1.svg" alt="">
              </span>
              <div class="pl-3 text-white">
                <span class="block text-sm">{{ $c['video'] }} Video</span>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
    @endforeach
    <div class="w-full justify-center mt-7 flex"></div>
  </div>
  <div class="w-full justify-center mt-7 flex">
    <button class="bg-[#FF994F] py-3 px-8 text-white rounded-full hover:bg-opacity-50">See course</button>
  </div>

@foreach ($mentor as $m)    
<section class="container py-20 flex flex-col space-y-5 lg:flex-row lg:space-x-10 lg:space-y-0 items-center">
@if($m['id'] == '1')    
<img src="assets/gambar/{{ $m['image'] }}" class="w-full flex-1" alt="">
@else
  <img src="{{ asset('storage/'.$m['image'])}}" class="w-full flex-1" alt="">
  @endif
  <div class="flex-1 space-y-6">
    <h2 class="text-5xl font-bold w-[364px]">{{ $m['title'] }}</h2>
    <p class="text-gray-500">
      {!! $m['description'] !!}
    </p>
  </div>
</section>
@endforeach

@foreach ($graph as $g)    
<section class="container py-20 flex flex-col space-y-5 lg:flex-row lg:space-x-10 lg:space-y-0 items-center">
  <div class="flex-1 space-y-6">
    <h2 class="text-5xl font-bold">{{ $g['title'] }}</h2>
    {!! $g['description'] !!}
    <button class="bg-[#FF994F] py-3 px-8 text-white rounded-full">Registration</button>
  </div>
  @if($g['id'] == '1')  
  <img src="assets/gambar/{{ $g['image'] }}" class="w-full flex-1" alt="">
  @else
  <img src="{{ asset('storage/'.$g['image'])}}" class="w-full flex-1" alt="">
  @endif
</section>
@endforeach

@foreach ($trusted as $t)    
<section class="bg-[#FFFAF2] py-20 mb-20">
  <div class="container flex flex-col space-y-5 lg:flex-row lg:space-x-10 lg:space-y-0 items-center">
  <div class="flex-1 space-y-6">
    <h1 class="text-5xl font-bold">{{ $t['title'] }}</h1> 
    <h1 class="text-5xl font-bold">{{ $t['subtitle'] }}</h1>
    <p class="text-gray-500">
      {!! $t['description'] !!}
    </p>
  </div>
  <div class="grid grid-rows-2 grid-cols-1 items-center justify-center sm:mt-8 lg:mt-0">
    <div class="shadow-sm max-w-[350px] rounded-md bg-white relative z-10 sm:ml-[250px]">
      <img src="assets/gambar/{{ $t['image'] }}" class="w-full" alt="">
    </div>
    <div class="shadow-sm max-w-[350px] rounded-md bg-white relative mt-5 sm:mt-[-40px]">
      <img src="assets/gambar/{{ $t['image2'] }}" class="w-full" alt="">
    </div>
  </div>
  </div>
</section>
@endforeach

@foreach ($develop as $d)    
<section class="banner container relative mt-20 mb-20 bg-[#FFFAF2] min-h-[400px] flex items-center justify-center">
  <img src="assets/gambar/develop-quality-background.svg" alt="" class="absolute top-0 left-0">

  <div class="flex-1 space-y-6 ml-[80px]">
    <h2 class="text-5xl font-bold">{{ $d['title'] }}</h2>
    <p class="text-gray-500">
       {!! $d['description'] !!} 
    </p>
    <button class="bg-[#FF994F] py-3 px-8 text-white rounded-full">Get Started</button>
  </div>
  <img src="assets/gambar/{{ $d['image'] }}" class="w-1/3 flex-1" alt="">
</section>
@endforeach
@endsection