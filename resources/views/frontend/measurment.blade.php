@extends('frontend.layouts.main')
@section('main-container')
{{-- measurment giving form --}}
<section class="bg-gray-200 text-gray-600 body-font relative">
    <div class="container py-2 mx-auto ">
      <div class="flex flex-col text-center w-full mb-6">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mt-6 mb-4 text-gray-900">Give Meaurments</h1>
      </div>
    
      <div class="container flex align-items-center justify-center" >
        <form action="{{url('uploadnaap')}}" method="POST">
          @csrf
          <div class="p-2">
          <label class="leading-7 text-sm text-gray-600" for="collar">Collar</label>
          <input type="number" name="collar" id="collar" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="p-2">
          <label class="leading-7 text-sm text-gray-600"for="shoulder">Shoulder</label>
          <input type="number" name="shoulder" id="shoulder" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div> 
        <div class="p-2">
          <label class="leading-7 text-sm text-gray-600" for="chest">Chest</label>
          <input type="number" name="chest" id="chest" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="p-2">
          <label class="leading-7 text-sm text-gray-600" for="sleeves">Sleeves</label>
          <input type="number" name="sleeves" id="sleeves" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="p-2">
          <label class="leading-7 text-sm text-gray-600" for="waist">Waist</label>
          <input type="number" name="waist" id="waist" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="p-2">
          <label class="leading-7 text-sm text-gray-600" for="shirt lenght">Shirt Length</label>
          <input type="number" name="slength" id="slenght" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="p-2">
          <label class="leading-7 text-sm text-gray-600" for="pant lenght">Pant Lenght</label>
          <input type="number" name="plength" id="plenght" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="p-2">
          <label class="leading-7 text-sm text-gray-600" for="bottom">Bottom</label>
          <input type="number" name="bottom" id="bottom" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="p-2">
          <label class="leading-7 text-sm text-gray-600" for="tailername">Tailer Name</label>
         <select name="tailerid" id="">
          @foreach ($tailerid as $item)
              <option value="{{$item->id}}">{{$item->name}}</option>
          @endforeach
         </select>
          
        </div>
        <div class="pt-4">
          <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>
        </div>
        </form>
      </div>
      
  </section>
@endsection