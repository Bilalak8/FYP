
@extends('frontend.layouts.main')
@section('main-container')
  
    <!-- Product specification -->
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 ml-4 ">
          <div class="lg:w-4/5 ml-4 flex flex-wrap">
            <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto  h-64 object-cover object-center rounded" src="{{url('frontend/images/car1.jpg')}}">
            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
              <h2 class="text-sm title-font text-gray-500 tracking-widest">BRAND NAME</h2>
              <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">Grace fabric</h1>
              <div class="flex mb-4">
                <span class="flex items-center">
                    <i class="text-orange-600 fa fa-star"></i>
                    <i class="text-orange-600 fa fa-star"></i>
                    <i class="text-orange-600 fa fa-star"></i>
                    <i class="text-orange-600 fa fa-star-half-full"></i>
                    <i class="text-orange-600  fa fa-star-o"></i>
                  <span class="text-gray-600 ml-3">5 Reviews</span>
                </span>
              </div>
              <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
                <div class="flex ml-6 items-center">
                  <span class="mr-3">Color</span>
                   <input  type="color" id="color" name="color" value="#ff0000">
                </div>
              </div>
              <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
                <div class="flex ml-6 items-center">
                  <span class="mr-3">Quantity</span>
                <input class="rounded border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3 pr-10" type="number" name="quantity">
                </div>
              </div>
              <div class="flex">
                <span class="title-font font-medium text-2xl text-gray-900">$58.00</span>
                <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Add Cart</button>
                <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                <i class="fa fa-heart-o"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- clothes galerty -->
      <section class="text-gray-600 body-font">
        <div class="container px-5 py-10 mx-auto flex flex-wrap">
          <div class="flex w-full mb-10 flex-wrap">
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 lg:w-1/3 lg:mb-0 mb-4">Color Collection</h1>
          </div>
          <div class="flex flex-wrap md:-m-2 -m-1">
            <div class="flex flex-wrap w-1/2">
              <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block" src="{{url('frontend/images/car2.jpg')}}">
              </div>
              <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block" src="{{url('frontend/images/car3.jpg')}}">
              </div>
              <div class="md:p-2 p-1 w-full">
                <img alt="gallery" class="w-full h-full object-cover object-center block" src="{{url('frontend/images/car4.jpg')}}">
              </div>
            </div>
            <div class="flex flex-wrap w-1/2">
              <div class="md:p-2 p-1 w-full">
                <img alt="gallery" class="w-full h-full object-cover object-center block" src="{{url('frontend/images/car1.jpg')}}">
              </div>
              <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block" src="{{url('frontend/images/clo1.jpg')}}">
              </div>
              <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block" src="{{url('frontend/images/clo2.jpg')}}">
              </div>
            </div>
          </div>
        </div>
      </section>
    @endsection