{{-- head area --}}
@include('admin.head')

<body class="bg-gray-200">
 <div class="flex">

    {{-- sidebar area --}}
    @include('admin.header')

    <main  class="z-40 ml-80 flex-1 mx-56">
      {{-- add tailer form --}}
      <section class="bg-gray-50 mx-40 my-10 text-gray-600 body-font rounded-md shadow-xl relative ">
        <div class="container px-5 py-10 mx-auto ">
          <div class="flex flex-col text-center w-full mb-8">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Tailer Registration</h1>
          </div>

         {{-- message showing part --}}
        @if (session()->has('message'))
        <div class="bg-gray-500 flex justify-between text-gray-700 shadow-inner p-3">
            <strong class="mx-6">{{session()->get('message')}}</strong>
            <strong class="text-xl align-items-center mx-4 cursor-pointer alert-del">&times;</strong>
        </div>
        @endif
      
             
        
          <div class="container flex align-items-center justify-center  " >
            <form action="{{url('uploadtailer')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="p-2">
              <label class="leading-7 text-sm text-gray-600" for="shopname">Shop Name</label>
              <input type="text" name="sname" id="sname" class="w-full  bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="p-2">
              <label class="leading-7 text-sm text-gray-600"for="tailerName">Tailer Name</label>
              <input type="text" name="tname" id="tname" class="w-full bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div> 
            <div class="p-2">
              <label class="leading-7 text-sm text-gray-600" for="Location">Location</label>
              <input type="text" name="loc" id="loc" class="w-full  bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
             <div class="p-2">
              <label class="leading-7 text-sm text-gray-600" for="phone">Phone</label>
              <input type="number" name="phone" id="phone" class="w-full  bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
             <div class="p-2">
              <label class="leading-7 text-sm text-gray-600" for="image"></label>
              <input type="file" name="image" id="image" class="w-full bg-white  rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="p-2">
              <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>
            </div>
            </form>
          </div>
          
      </section>


    </main>
 </div>
</body>

