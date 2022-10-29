<aside class="w-36 md:w-48 z-50 fixed left-0 top-0 h-screen bg-gray-700 p-5">
    <a href="{{url('/redirect')}}"><h1 class="text-blue-400 text-2xl text-center font-normal cursor-pointer">Dashboard</h1></a>
    <hr class="w-[75%] mx-auto">
    
    <ul class=" text-gray-300">

        @role('tailer')
        <li><a class="flex text-lg mt-4 ml-3 font-normal hover:text-cyan-500" href="{{url('/myprofile')}}">My Profile</a></li>
        @endrole

        <li><a class="flex text-lg mt-4 ml-3 font-normal hover:text-cyan-500" href="{{url('/addtailer')}}">Add Tailer</a></li>
        
        @role('admin')
        <li><a class="flex text-lg mt-4  ml-3 font-normal hover:text-cyan-500" href="{{url('/showTailers')}}">Total Tailers</a></li>
        @endrole

    
        <li><a class="flex text-lg mt-4 ml-3 font-normal hover:text-cyan-500" href="{{url('/tailerinfo')}}">Add Tailers Info</a></li>
    

        @role('admin')
        <li><a class="flex text-lg mt-4 ml-3 font-normal hover:text-cyan-500" href="{{url('/showTailersInfo')}}">Total Tailer Info</a></li>
        @endrole

        {{-- will make later --}}
        @role('tailer')
        <li><a class="flex text-lg mt-4 ml-3 font-normal hover:text-cyan-500" href="{{url('/singletailerinfo')}}">Tailer Info</a></li>
        @endrole

        @role('admin')
        <li><a class="flex text-lg mt-4 ml-3 font-normal hover:text-cyan-500" href="{{url('/showMeasurment')}}">Total Measurments</a></li>
        @endrole


        @role('admin')
        <li><a class="flex text-lg mt-4 ml-3 mb-2 font-normal hover:text-cyan-500" href="{{url('/showMessage')}}">Messages</a></li>
        @endrole

        <hr>
        <li>
            <x-app-layout>
            
            </x-app-layout>
        </li>

    </ul>
</aside>