@extends('frontend.layouts.main')
@section('main-container')


<section class="bg-gray-200 text-gray-600 body-font relative">
    <div class="container py-2 mx-auto ">
      <div class="flex flex-col text-center w-full mb-6 mt-10">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Update Meaurments</h1>
      </div>

        {{-- message showing part --}}
        @if (session()->has('message'))
        <div class="bg-green-300 flex justify-between text-gray-700 shadow-inner p-3">
          <strong class="mx-6">{{session()->get('message')}}</strong>
          <strong class="text-xl align-items-center mx-4 cursor-pointer alert-del">&times;</strong>
        </div>
        @endif
      
    
      <div class="container flex align-items-center justify-center" >
        <form action="{{url('uploadUpdateMeasurment',$measurment->id )}}" method="POST">
          @csrf
          <div>
          <label class="leading-7 text-sm text-gray-600" for="collar">Collar</label>
          <input type="number" name="collar" value="{{$measurment->collar}}" id="collar" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div>
          <label class="leading-7 text-sm text-gray-600"for="shoulder">Shoulder</label>
          <input type="number" name="shoulder" value="{{$measurment->shoulder}}" id="shoulder" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div> 
        <div>
          <label class="leading-7 text-sm text-gray-600" for="chest">Chest</label>
          <input type="number" name="chest" value="{{$measurment->chest}}" id="chest" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
         <div>
          <label class="leading-7 text-sm text-gray-600" for="sleeves">Sleeves</label>
          <input type="number" name="sleeves" value="{{$measurment->sleeves}}" id="sleeves" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div>
          <label class="leading-7 text-sm text-gray-600" for="waist">Waist</label>
          <input type="number" name="waist" value="{{$measurment->waist}}" id="waist" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div>
          <label class="leading-7 text-sm text-gray-600" for="shirt length">Shirt Length</label>
          <input type="number" name="slength" value="{{$measurment->shirt_length}}" id="slenght" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div>
          <label class="leading-7 text-sm text-gray-600" for="pant length">Pant Lenght</label>
          <input type="number" name="plength" value="{{$measurment->paint_length}}" id="plength" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div>
          <label class="leading-7 text-sm text-gray-600" for="bottom">Bottom</label>
          <input type="number" name="bottom" value="{{$measurment->bottom}}" id="bottom" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="pt-4">
          <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Update</button>
        </div>
        </form>
      </div>
      
  </section>

@endsection
