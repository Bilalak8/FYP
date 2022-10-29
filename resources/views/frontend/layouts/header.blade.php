{{-- body header --}}
  <body class="bg-gray-200">
    <nav
      class="p-2 bg-gray-700 shadow md:flex md:items-center md:justify-between text-white"
    >
      <div class="flex justify-between items-center">
        <span class="text-3xl font-sans cursor-pointer hover:text-cyan-500">
         <a href="{{url('/')}}"> <img
          class="mx-2 h-16 inline"
          src="{{url('frontend/images/logo1.png')}}"
          alt=""
        /></a>
          E-Tailer
        </span>
        <span class="text-3xl cursor-pointer mx-2 md:hidden block">
          <ion-icon name="menu-outline" onclick="Menu(this)"></ion-icon>
        </span>
      </div>
      <div class="opacity-90 ">
        <ul
        class="nav md:flex md:items-center z-[1] md:z-auto md:static absolute bg-gray-700 w-full left-0 
        md:w-auto text-white md:py-0  pb-4 md:pl-0 pl-7  md:opacity-100 top-[-400px] transition-all ease-in duration-500"
      >
        <li class="mx-4 my-4">
          <a
            href="{{url('/')}}"
            class="text-xl hover:text-cyan-500 cursor-pointer duration-500 opacity-100 font-semibold"
            >Home</a
          >
        </li>
        <li class="mx-4 my-4 md:my-0">
          <a
            href="{{url('/tailer')}}"
            class="text-xl hover:text-cyan-500 cursor-pointer duration-500 font-semibold"
            >Tailers</a
          >
        </li>
        <li class="mx-4 my-4 md:my-0">
          <a
            href="{{url('/contact')}}"
            class="text-xl hover:text-cyan-500 cursor-pointer duration-500 font-semibold"
            >Contact</a
          >
        </li>
        <li class="mx-4 my-4 md:my-0">
          <a
            href="{{url('/about')}}"
            class="text-xl hover:text-cyan-500 cursor-pointer duration-500 font-semibold"
            >About</a
          >
        </li>
       @role('user')
       <li class="mx-4 my-4 md:my-0">
        <a
          href="{{url('/userprofile')}}"
          class="text-xl hover:text-cyan-500 cursor-pointer duration-500 font-semibold"
          >User Profile</a
        >
      </li>
      @endrole
        {{-- login authniucation area --}}

        @if (Route::has('login'))
                    @auth
                    <x-app-layout>
                    </x-app-layout>
                    @else
                        <li class="sm:my-5"><a   class="bg-white text-black font-sans  duration-500 px-[18px]
                            py-1 mx-2  hover:bg-gray-200 hover:text-green-600 rounded font-semibold" href="{{ route('login') }}">Log in</a></li>

                        @if (Route::has('register'))
                      <li class="mt-3 md:mt-0"> <a  class="bg-white py-1 text-black font-sans duration-500 px-3 font-semibold pt-1 mx-2  hover:bg-gray-200 hover:text-green-600 rounded" href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
            @endif
 
      </ul>
      </div>
    </nav>