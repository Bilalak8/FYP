 {{-- sidebar area --}}
 <aside class="w-48 fixed left-0 top-0 h-full bg-gray-700 p-5">
    <a href="{{url('/redirect')}}"><h1 class="text-blue-400 text-2xl text-center font-normal cursor-pointer">Dashboard</h1></a>
    <hr class="w-[75%] mx-auto">
    
    <ul class=" text-gray-300">

        @role('tailer')
        <li><a class="flex text-base mt-4 ml-3 font-normal hover:text-cyan-500" href="{{url('/myprofile')}}">My Profile</a></li>
        @endrole

        {{-- @if($data->count() < '1') --}}
        <li><a class="flex text-base mt-4 ml-3 font-normal hover:text-cyan-500" href="{{url('/addtailerfortailer')}}">Add Tailer</a></li>
        {{-- @else --}}
        @role('tailer')
        <li><a class="flex text-base mt-4 ml-3 font-normal hover:text-cyan-500" href="{{url('/singletailerinfo')}}">Tailer Info</a></li>
        @endrole
        {{-- @endif --}}


        {{-- @if($data->count() === '1')
        <li><a class="flex text-xl mt-4 ml-3 font-normal hover:text-cyan-500" href="{{url('/tailerdetailinfo')}}">Add Tailers Info</a></li> --}}

       
    
        <li><a class="flex text-xl mt-4 ml-3 font-normal hover:text-cyan-500" href="{{url('/totalmeasurmentrecord')}}">Total Measurments</a></li>
    

        <hr>
        <li>
            <x-app-layout>
            
            </x-app-layout>
        </li>

    </ul>
</aside>
