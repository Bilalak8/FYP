{{-- head area --}}
@include('admin.head')

<body class="bg-gray-200">
 <div class="flex">

     {{-- side bar --}}
     @include('tailer.tailersiderbar')

    <main  class="z-40 ml-[254px] flex-1 mx-56">

    {{-- show tailershop  --}}

    <div class="overflow-x-auto relative">
        <div class="container py-10">
        <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
            <h1 class="sm:text-3xl text-4xl  font-bold title-font mb-4 text-gray-900">All Customers Measurment</h1>
        </div>

        {{-- message showing part --}}
        @if (session()->has('message'))
        <div class="bg-gray-500 flex justify-between text-gray-700 shadow-inner p-3">
            <strong class="mx-6">{{session()->get('message')}}</strong>
            <strong class="text-xl align-items-center mx-4 cursor-pointer alert-del">&times;</strong>
        </div>
        @endif


        <table class="w-full text-sm text-left text-gray-600 mt-12 rounded-md shadow-xl">
            <thead class="text-xs text-gray-200 uppercase bg-gray-500">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        #S.NO
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Collar
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Shoulder
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Chest
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Sleeves
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Waist
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Shirt Length
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Paint Length
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Bottom
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Update
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Delete
                    </th>

                </tr>
            </thead>
        @foreach ($data as $tailer)
            <tbody>
                <tr class="bg-white border-b">
                    <td class="py-4 px-6"> {{$tailer->id}} </td>
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap"> {{$tailer->collar}}</th>
                    <td class="py-4 px-6"> {{$tailer->shoulder}} </td>
                    <td class="py-4 px-6"> {{$tailer->chest}} </td>
                    <td class="py-4 px-6"> {{$tailer->sleeves}} </td>
                    <td class="py-4 px-6"> {{$tailer->waist}} </td>
                    <td class="py-4 px-4"> {{$tailer->shirt_length}} </td>
                    <td class="py-4 px-6"> {{$tailer->paint_length}} </td>
                    <td class="py-4 px-6"> {{$tailer->bottom}} </td>
                    <td class="py-4 px-6">
                        <a href="{{url('updatemeasurment',$tailer->id)}}" class="text-white bg-indigo-600 hover:bg-indigo-700 font-normal px-2 py-[7px]  rounded-md">Update</a>
                    </td>
                    <td class="py-4 px-6">
                        <a href="{{url('deletemeasurment',$tailer->id)}}" class="text-white bg-rose-600 hover:bg-rose-700 font-normal px-2 py-[7px]  rounded-md">Delete</a>
                    </td>
                </tr>  
            </tbody>
            @endforeach
        </table>
        </div>
    </div>

    </main>
 </div>
</body>