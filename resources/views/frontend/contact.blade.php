@extends('frontend.layouts.main')
@section('main-container')

      <!-- Contact Area -->
    <section class="text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">if you have any Question or facing any Problem, Simply fill the form <br> and write dowm your Queries in Comments section.</p>
          </div>
          <form action="{{url('uploadcontact')}}" method="POST">
            @csrf
          <div class="lg:w-1/2 md:w-2/3 mx-auto">
            <div class="flex flex-wrap -m-2">
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                  <input type="text" id="name" name="name" class="w-full rounded  border-gray-400 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                  <input type="email" id="email" name="email" class="w-full  rounded  border-gray-400 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>
              <div class="p-2 w-full">
                <div class="relative">
                  <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                  <textarea id="message" name="message" class="w-full rounded border-gray-400 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
              </div>
              <div class="p-2 w-full">
                <button class="flex mx-auto text-white bg-blue-600 border-0 py-2 px-8 focus:outline-none hover:bg-blue-700 rounded text-lg">Submit</button>
              </div>
            </form>
              <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
                <a class="text-indigo-500">e-tailer@gmail.com</a>
                <p class="leading-normal my-5">office.
                  <br>Talash kPK, Pakistan
                </p>
                <span class="inline-flex">
                  <a class="text-gray-500">
                    <li class="fa fa-facebook"></li>
                  </a>
                  <a class="ml-4 text-gray-500">
                   <li class="fa fa-twitter"></li>
                  </a>
                  <a class="ml-4 text-gray-500">
                    <li class="fa fa-instagram"></li>
                  </a>
                  <a class="ml-4 text-gray-500">
                   <li class="fa fa-whatsapp"></li>
                  </a>
                </span>
              </div>
            </div>
          </div>
        </div>
      </section>

           <!-- footter tailwind -->
    @endsection