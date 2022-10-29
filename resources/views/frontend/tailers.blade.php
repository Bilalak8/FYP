@extends('frontend.layouts.main')
@section('main-container')
<!-- tailers shops -->

<h1 class="mt-12 mb-2 text-center text-4xl font-bold capitalize text-gray-700">
	Tailers Shop
</h1>
<hr class="mx-auto w-1/5" />

{{-- search Area --}}
<div class="flex justify-end mr-14 mt-10">
	<form action="" method="">
		@csrf
		<input type="search" name="search" placeholder="search tailer"
			class="bg-white rounded-md border hover:border-indigo-500">
		<input type="submit" name="" value="search"
			class="text-white bg-indigo-600 hover:bg-indigo-700 font-normal px-2 py-2 rounded-md">
	</form>
</div>



<!-- my cards -->
<div
class="container grid grid-flow-row md:grid-cols-2 md:gap-10 lg:grid-cols-3 lg:gap-3 justify-center mt-4 lg:mx-8 md:mx-24
" >
	<!-- first card -->

	@foreach ($data as $tailer)
	<div class="py-10">
		<div class="mx-auto max-w-sm overflow-hidden rounded bg-white shadow-md hover:shadow-lg">
			<img src="/images/{{ $tailer->image }}" alt="" class="h-72 w-full" />
			<div class="py-4">
				<div class="mb-2 w-full bg-gray-800 text-center text-lg font-semibold text-gray-100">
					{{ $tailer->shop_name }}
				</div>

				<div class="text-md mx-6 text-gray-600">
					<strong>Name : </strong> {{ $tailer->name }} <br />
					<strong>location : </strong> {{ $tailer->location }} <br />
					<strong>Phone : </strong> {{ $tailer->phone }} <br />
				</div>
				<div class="mt-2 h-[2px] w-full bg-gray-200"></div>
				<div class="mt-3 flex items-center justify-between">
					<div class="mx-6">
						<a href="{{ url('measurment/' . $tailer->id) }}"
							class="inline-flex cursor-pointer items-center text-xl text-blue-500 hover:text-blue-800 md:mb-2 lg:mb-0">Measurment
							{{-- <img src="{{url('frontend/images/p.png')}}" alt="" class="h-6" /> --}}
						</a>
					</div>
					<div class="mx-6">
						<a href="{{ url('cloth/' . $tailer->id) }}"
							class="inline-flex cursor-pointer items-center text-xl text-blue-500 hover:text-blue-800 md:mb-2 lg:mb-0">Learn
							More

						</a>

					</div>
				</div>
			</div>
		</div>
	</div>
	@endforeach
</div>

{{-- pagination code --}}
<div class="align-items-center flex justify-center py-2">
	{!! $data->links() !!}
</div>
@endsection