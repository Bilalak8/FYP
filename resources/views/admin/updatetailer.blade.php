@extends('frontend.layouts.main')
@section('main-container')


{{-- Update tailer form --}}
      <section class="bg-gray-200 text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto ">
          <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Update Tailer Info</h1>
          </div>

          {{-- message showing part --}}
        @if (session()->has('message'))
        <div class="bg-green-300 flex justify-between text-gray-700 shadow-inner p-3">
          <strong class="mx-6">{{session()->get('message')}}</strong>
          <strong class="text-xl align-items-center mx-4 cursor-pointer alert-del">&times;</strong>
        </div>
        @endif
      
             
        
          <div class="container flex align-items-center justify-center" >
            <form action="{{url('uploadupdatetailer',$data->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="p-2">
              <label class="leading-7 text-sm text-gray-600" for="shopname">Shop Name</label>
              <input type="text" name="sname" value="{{$data->shop_name}}" id="sname" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="p-2">
              <label class="leading-7 text-sm text-gray-600"for="tailerName">Tailer Name</label>
              <input type="text" name="tname" value="{{$data->name}}" id="tname" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div> 
            <div class="p-2">
              <label class="leading-7 text-sm text-gray-600" for="Location">Location</label>
              <input type="text" name="loc" value="{{$data->location}}" id="loc" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="p-2">
                <label class="leading-7 text-sm text-gray-600" for="phone">Phone</label>
                <input type="number" name="phone" value="{{$data->phone}}" id="phone" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
              <div class="p-2">
                <label class="leading-7 text-sm text-gray-600" for="phone">Old Image</label>
                <img height="100px" width="100px" src="/images/{{$data->image}}" alt="">
              </div>
             <div class="p-2">
              <label class="leading-7 text-sm text-gray-600" for="image">Change image</label>
              <input type="file" name="image" id="image" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="p-2">
              <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>
            </div>
            </form>
          </div>
          
      </section>


@endsection