{{-- head area --}}
@include('admin.head')

<body class="bg-gray-200">
 <div class="flex">

  {{-- sidebar area --}}
  @include('admin.header')
  <main  class="z-40 ml-80 flex-1 mx-32">
           
     {{-- show tailershop  --}}

  <div class="overflow-x-auto relative">
    <div class="container px-8 py-10 ">
       <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
          <h1 class="sm:text-3xl text-4xl  font-bold title-font  text-gray-900">All Messages</h1>
       </div>


         <table class="w-full text-sm text-left text-gray-600 mt-16 rounded-md shadow-xl">
            <thead class="text-xs text-gray-200 uppercase bg-gray-500">
                <tr>
                    <th scope="col" class="py-3 px-6">
                            #S.NO
                    </th>
                    <th scope="col" class="py-3 px-6">
                            Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                            Email
                    </th>
                    <th scope="col" class="py-3 px-6">
                            Messages
                    </th>
                </tr>
            </thead>

            @foreach ($data as $message)
            <tbody>
                <tr class="bg-white border-b">
                    <td class="py-4 px-6"> {{$message->id}} </td>
                    <td class="py-4 px-6"> {{$message->name}} </td>
                    <td class="py-4 px-6"> {{$message->email}} </td>
                    <td class="py-4 px-6"> {{$message->message}} </td>
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
