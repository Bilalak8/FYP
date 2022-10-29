{{-- head area --}}
@include('admin.head')

<body class="bg-gray-200">
 <div class="flex">

  {{-- side bar --}}
  @include('tailer.tailersiderbar')


    <main  class="z-40 ml-80 flex-1 mx-56">
     
{{-- add tailer info --}}
<section class="bg-gray-50 text-gray-600 mx-40 my-14 body-font relative rounded-md shadow-xl">
  <div class="container px-5 py-10 mx-auto ">
    <div class="flex flex-col text-center w-full mb-8">
      <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">Tailer Info</h1>
    </div>
  
    <div class="container flex align-items-center justify-center" >
      <form action="{{url('uploadtinfo')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="p-2">
        <label class="leading-7 text-sm text-gray-600" for="shopname">Shop Name</label>
        <input type="text" name="sname" id="sname" class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
        <div class="p-2">
        <label class="leading-7 text-sm text-gray-600" for="location">Location</label>
        <input type="text" name="loc" id="loc" class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="p-2">
        <label class="leading-7 text-sm text-gray-600"for="phone">Phone</label>
        <input type="number" name="phone" id="phone" class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div> 
      <div class="p-2">
        <label class="leading-7 text-sm text-gray-600" for="email">Email</label>
        <input type="email" name="email" id="email" class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
       <div class="p-2">
        <label class="leading-7 text-sm text-gray-600" for="suit price">Suit Price</label>
        <input type="number" name="suitprice" id="suitprice" class="w-full  rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="p-2">
        <label class="leading-7 text-sm text-gray-600" for="delivery time">Delivery Time</label>
        <input type="text" name="deliverytime" id="deliverytime" class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="p-2">
        <label class="leading-7 text-sm text-gray-600" for="services">Services</label>
        <input type="text" name="services" id="services" class="w-full  rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>

      {{-- this for forgin key --}}
       <div class="p-2">
      <label class="leading-7 text-sm text-gray-600" for="tailer name">Tailer Name</label>
        <select name="tailername" class="w-full   rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"">
          @foreach ($addtailer as $data)
          <option value="{{$data->id}}">{{$data->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="p-2">
        <label class="leading-7 text-sm text-gray-600" for="image"></label>
        <input type="file" name="image" id="image" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
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
