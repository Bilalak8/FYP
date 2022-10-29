<aside class="w-48 fixed left-0 top-0 h-full bg-gray-700 p-5">
    <h1 class="text-blue-400 text-2xl text-center font-normal cursor-pointer">Dashboard</h1>
    <hr class="w-[75%] mx-auto">
    
    <ul class=" text-gray-300">
        <li><a class="flex text-xl mt-4 ml-3 font-normal hover:text-cyan-500" href="{{url('/addtailer')}}">Add Tailer</a></li>
        @role('admin')
        <li><a class="flex text-xl mt-4  ml-3 font-normal hover:text-cyan-500" href="{{url('/showTailers')}}">Total Tailers</a></li>
        @endrole
        <li><a class="flex text-xl mt-4 ml-3 font-normal hover:text-cyan-500" href="{{url('/tailerinfo')}}">Add Tailers Info</a></li>
        <li><a class="flex text-xl mt-4 ml-3 font-normal hover:text-cyan-500" href="{{url('/showTailersInfo')}}">Total Tailer Info</a></li>
       @role('user')
        <li><a class="flex text-xl mt-4 ml-3 font-normal hover:text-cyan-500" href="{{url('/showMeasurment')}}">Measurments</a></li>
       @endrole
        @role('tailer')
        <li><a class="flex text-xl mt-4 ml-3 font-normal hover:text-cyan-500" href="{{url('/myprofile')}}">My Profile</a></li>
        @endrole
        <li><a class="flex text-xl mt-4 ml-3 mb-2 font-normal hover:text-cyan-500" href="{{url('/showMessage')}}">Messages</a></li>
        <hr>
    </ul>
</aside>