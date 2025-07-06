@extends('layout/blank')

@section('page')
  <div class="bg-white py-6 min-h-screen flex place-items-center">
    <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
      <div class="flex flex-row flex-wrap">
        <div class="flex-shrink max-w-full w-full">
          <div class="p-10 text-center">
            <div class="mb-4 text-center">
              <h1 class="text-9xl text-gray-800 font-bold mb-2">@yield('code')</h1>
              <span class="inline-block h-0.5 w-20 bg-red-600"></span>
            </div>
            <h3 class="text-4xl mb-2">Oops!</h3>
            <span>@yield('message')</span>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
