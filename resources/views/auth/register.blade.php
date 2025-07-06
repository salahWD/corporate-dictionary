@extends('layout/blank')

@section('page')
  <div class="flex min-h-screen flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <div class="font-medium text-sm text-green-600">
        {{ session('status') }}
      </div>
      <h1 class="text-center text-4xl">Corporate Dictionary</h1>
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Create new account</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" method="POST" action="{{ route('register') }}">
        @csrf

        <div>
          <label for="name" class="block text-sm font-medium leading-6 text-gray-900">{{ __('Name') }}</label>
          <div class="mt-2">
            <input id="name" name="name" type="name" required autofocus autocomplete="name"
              value="{{ old('name') }}"
              class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
          </div>
        </div>

        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">{{ __('Email') }}</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" required autofocus autocomplete="username"
              value="{{ old('email') }}"
              class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
          </div>
        </div>

        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">{{ __('Password') }}</label>
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" required autocomplete="new-password"
              class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
          </div>
        </div>

        <div>
          <div class="flex items-center justify-between">
            <label for=""
              class="block text-sm font-medium leading-6 text-gray-900">{{ __('Confirm Password') }}</label>

          </div>
          <div class="mt-2">
            <input id="password_confirmation" name="password_confirmation" type="password" required
              autocomplete="new-password"
              class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
          </div>
        </div>

        <label for="remember_me" class="inline-flex items-center">
          <input id="remember_me" type="checkbox"
            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
          <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label>

        <div>
          <button
            class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
            type="submit">{{ __('Register') }}</button>
        </div>
      </form>


      <p class="mt-10 text-center text-sm text-gray-500">
        Already registered?
        <a class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500" href="{{ route('login') }}">
          {{ __('login') }}
        </a>
      </p>
    </div>
  </div>
@endsection
