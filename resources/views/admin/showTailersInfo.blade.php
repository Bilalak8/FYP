{{-- head area --}}
@include('admin.head')

<body class="bg-gray-200">
 <div class="flex">

    {{-- sidebar area --}}
    @include('admin.header')

    <main  class="z-40 ml-36 md:ml-[210px]">
      {{-- show tailershop  --}}

<div class=" relative">
    <div class="container px-5 py-2 md:py-4 mx-auto">
    <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
        <h1 class="sm:text-3xl text-4xl  font-bold title-font mb-4 text-gray-900">Total Tailers Detail Info</h1>
    </div>

       {{-- message showing part --}}
       @if (session()->has('message'))
       <div class="bg-green-300 flex justify-between text-gray-700 shadow-inner p-3">
         <strong class="mx-6">{{session()->get('message')}}</strong>
         <strong class="text-xl align-items-center mx-4 cursor-pointer alert-del">&times;</strong>
       </div>
     @endif


    <table class="w-full text-sm text-left text-gray-600 md:mt-10 mt-5 rounded-md shadow-xl">
        <thead class="text-xs text-gray-200 uppercase bg-gray-500">
            <tr>
                <th scope="col" class="py-3 px-4">
                    #S.NO
                </th>
                <th scope="col" class="py-3 px-4">
                    Shop Name
                </th>
                <th scope="col" class="py-3 px-4">
                    Location
                </th>
                <th scope="col" class="py-3 px-4">
                    Phone
                </th>
                <th scope="col" class="py-3 px-4">
                   Email
                </th>
                 <th scope="col" class="py-3 px-4">
                    Suit Price
                </th>
                <th scope="col" class="py-3 px-4">
                    Delivery Time
                </th>
                <th scope="col" class="py-3 px-4">
                    Services
                </th>
                <th scope="col" class="py-3 px-4">
                    Image
                </th>
                <th scope="col" class="py-3 px-4">
                    Update
                </th>
                <th scope="col" class="py-3 px-4">
                    Delete
                </th>
            </tr>
        </thead>
       @foreach ($showinfo as $tailer)
        <tbody>
            <tr class="bg-white border-b">
                <td class="py-4 px-4"> {{$tailer->id}} </td>
                <th scope="row" class="py-4 px-4 font-medium text-gray-900 whitespace-nowrap"> {{$tailer->shop_name}}</th>
                <td class="py-4 px-4"> {{$tailer->location}} </td>
                <td class="py-4 px-4"> {{$tailer->phone}} </td>
                <td class="py-4 px-4"> {{$tailer->email}} </td>
                <td class="py-4 px-4"> {{$tailer->suit_price}} </td>
                <td class="py-4 px-4"> {{$tailer->delivery_time}} </td>
                <td class="py-4 px-4"> {{$tailer->services}} </td>
                <td class="py-4 px-4"> 
                <img height="50px" width="50px" src="/images/{{$tailer->image}}">
                </td>

                <td class="py-4 px-6">
                    <a href="{{url('updateTailerInfo',$tailer->id)}}" class="text-white bg-indigo-600 hover:bg-indigo-700 font-normal px-1 py-1 rounded-sm">Update</a>
                </td>
                <td class="py-4 px-6">
                    <a href="{{url('deletetailerinfo',$tailer->id)}}" class="text-white bg-rose-600 hover:bg-rose-700 font-normal px-1 py-1 rounded-sm">Delete</a>
                </td>
            </tr>  
        </tbody>
        @endforeach
    </table>
    </div>
</div>

    </main>
 </div>
 @include('frontend.layouts.script')
</body>


  
