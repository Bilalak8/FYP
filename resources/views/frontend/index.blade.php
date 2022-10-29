@extends('frontend.layouts.main')
@section('main-container')
  
    <!-- background area -->
    <section class="text-gray-600 body-font">
      <div
        class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center"
      >
        <div
          class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center"
        >
          <h1
            class="title-font sm:text-4xl text-3xl mb-4 font-bold text-gray-900"
          >
            E-Tailer Platform
          </h1>
          <p class="mb-8 leading-relaxed">
            E-Tailer makes your life easier.Order your Clothes or Coats from
            your home couch and save your precious time.
          </p>
          <div class="flex justify-center">
            <button
              class="inline-flex hover:font-semibold hover:text-gray-900 border hover:border-gray-700 py-2 px-6 ocus:outline-none bg-gray-700 text-white hover:bg-gray-200 rounded-md text-base"
            >
              View all Products
            </button>
          </div>
        </div> 
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
          <img
            class="bgimage object-cover object-center"
            alt="hero"
            src="{{url('frontend/images/bg00.jpg')}}"
          />
        </div>
      </div>
    </section>
   
        <!-- tailers shops -->

        <h1
        class="font-bold mt-12 mb-6 text-center text-gray-700 capitalize text-4xl">
        Tailers Shop
      </h1>
      <hr class="w-1/5 mx-auto" />
     
    

      <!-- my cards -->
      <div
        class="container grid grid-flow-row px-3 md:grid-cols-2 md:gap-5 lg:grid-cols-3 lg:gap-10 justify-center mt-4 lg:ml-10 md:auto md:px-4 
        " >
        <!-- first card -->

        @foreach ($data as $tailer)
        <div class="py-10">
          <div class="rounded-lg overflow-hidden bg-white mx-auto  shadow-md hover:shadow-xl max-w-sm">
            <img src="/images/{{$tailer->image}}" alt="" class="h-72 w-full " />
            <div class="py-4 ">
              <div
                class="font-semibold text-lg
                 mb-2 text-center bg-gray-800 text-gray-100 w-full"
              >
                {{$tailer->shop_name}}
              </div>
             
              <div class="text-md text-gray-600 mx-6">
                <strong>Name : </strong> {{$tailer->name}} <br />
                <strong>location : </strong> {{$tailer->location}} <br />
                <strong>Phone : </strong> {{$tailer->phone}} <br />
              </div>
              <div class="h-[2px] bg-gray-200 mt-2 w-full"></div>
              <div class="flex items-center justify-between mt-3">
                <div class="mx-6">
                <a  href="{{url('measurment/'.$tailer->id)}}"
                  class="text-blue-500 inline-flex items-center md:mb-2 lg:mb-0 cursor-pointer  text-xl hover:text-blue-800"
                  >Measurment
                </a>
               </div>
                <div class="mx-6 ">
                  <a href="{{url('cloth/'.$tailer->id)}}"
                    class="text-blue-500 inline-flex items-center md:mb-2 lg:mb-0 cursor-pointer
                    text-xl  hover:text-blue-800"
                    >Learn More
                  </a>
                
                </div>
            </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>


        
          
   @endsection
