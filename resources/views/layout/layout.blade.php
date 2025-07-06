@extends('layout/blank')

@section('page')
  @include('layout/header')

  <!-- =========={ MAIN }==========  -->
  <main id="content">

    @yield('content')

  </main><!-- end main -->


  @include('layout/footer')

  @yield('script')
@endsection
