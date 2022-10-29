@extends('frontend.layouts.main')
@section('main-container')

      <!-- tailer detail with measurments and fabric collection -->

      @foreach ($tailerinfo as $tinfo)
    <div class="flex flex-col text-center w-full mb-12">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mt-10  text-blue-800 underline">{{$tinfo->shop_name}}</h1>
      </div>
    <section class="
    text-gray-600 body-font">
        <div  class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">   
              <h1 class="title-font sm:text-4xl items-center text-center mb-10 text-3xl  font-medium text-gray-900">Tailer Info</h1>
            <img class="object-cover object-center rounded h-80 w-90" alt="hero" src="/images/{{$tinfo->image}}">
          </div>
          <div class="lg:flex-grow md:w-1/2 lg:pl-44 md:pl-52 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="title-font sm:text-2xl text-xl mb-3 mt-4 ml-2 font-medium text-gray-900"><ion-icon name="location-outline" class="mr-1"></ion-icon>{{$tinfo->location}}</h1>
            <h1 class="title-font sm:text-2xl text-xl mb-5 mt-4 ml-2 font-medium text-gray-900"><ion-icon name="call-outline"></ion-icon> {{$tinfo->phone}} </h1>
            <h1 class="title-font sm:text-2xl text-xl mb-5 mt-4 ml-2 font-medium text-gray-900"><ion-icon name="mail-outline" class="mr-1"></ion-icon> {{$tinfo->email}} </h1>
            <h1 class="title-font sm:text-2xl text-xl mb-5 mt-4 ml-2 font-medium text-gray-900">Per Suit Price : <strong> {{$tinfo->suit_price}} </strong>-PKR</h1>
            <h1 class="title-font sm:text-2xl text-xl mb-5 mt-4 ml-2 font-medium text-gray-900">Delivery Within: <strong> {{$tinfo->delivery_time}} </strong></h1>
            <h1 class="title-font sm:text-2xl text-xl mb-5 mt-4 ml-2 font-medium text-gray-900">Services Time: <strong> {{$tinfo->services}} </strong></h1>
            <div class="pt-1">
             <a href="{{url('measurment/'.$tinfo->id)}}">
              <button class="flex mx-auto text-white bg-indigo-500 pl-2 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Measurment</button>
             </a>
            </div>
          </div>
    
         
        </div>
      </section>
      @endforeach

      <!-- clothes Gallery -->
      <section class="text-gray-600 body-font">
        <div class="flex flex-col text-center w-full mb-12">
          <h1 class="sm:text-4xl text-3xl font-medium title-font mb-4 mt-16 text-gray-900">Clothes Collection</h1>
          <p class="lg:w-2/3 mx-auto leading-relaxed text-base">We have precious <u>Brands</u> Clothes in different varities for male, female and kids.</p>
        </div>
        <div class="container px-5 py-10 mx-auto">
          <div class="flex flex-wrap -m-4">
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{url('frontend/images/clo1.jpg')}}">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium hover:underline"><a href="{{url('/cart')}}">The Catalyzer</a></h2>
                <p class="mt-1">$16.00</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{url('frontend/images/clo3.jpg')}}">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium hover:underline"><a href="{{url('/cart')}}">Shooting Stars</a></h2>
                <p class="mt-1">$21.15</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{url('frontend/images/clo5.jpg')}}">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium hover:underline"><a href="{{url('/cart')}}">Grace Dastak</a></h2>
                <p class="mt-1">$12.00</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{url('frontend/images/clo2.jpg')}}">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium hover:underline"><a href="{{url('/cart')}}">time text</a></h2>
                <p class="mt-1">$18.40</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{url('frontend/images/clo4.jpg')}}">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium hover:underline"><a href="{{url('/cart')}}">GN. text</a></h2>
                <p class="mt-1">$16.00</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{url('frontend/images/6.jpg')}}">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium hover:underline"><a href="{{url('/cart')}}">Gull Ahmad</a></h2>
                <p class="mt-1">$21.15</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{url('frontend/images/clo3.jpg')}}">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium hover:underline"><a href="{{url('/cart')}}">Qasim carton</a></h2>
                <p class="mt-1">$12.00</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{url('frontend/images/5.jpg')}}">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium hover:underline">The 400 Blows</h2>
                <p class="mt-1">$18.40</p>
              </div>
            </div>
          </div>
        </div>
      </section>
             <!-- footter tailwind -->
    @endsection