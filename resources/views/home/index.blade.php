@extends('home.home_master')
@section('home')
   @include('home.homelayouts.sliders')
  <!-- end hero -->
   @include('home.homelayouts.features')
  <!-- end content -->
    @include('home.homelayouts.clarifies')
  <!-- end content -->
    @include('home.homelayouts.get_all')

  <div class="lonyo-content-shape3">
    <img src="{{ asset('frontend/images/shape/shape2.svg') }}" alt="">
  </div>

  <!-- end content -->
   @include('home.homelayouts.usability')

  <div class="lonyo-content-shape1">
    <img src="{{ asset('frontend/images/shape/shape3.svg') }}" alt="">
  </div>
  <!-- end video -->

   @include('home.homelayouts.review')
  <!-- end testimonial -->

  @include('home.homelayouts.answers')

  <div class="lonyo-content-shape3">
    <img src="{{ asset('frontend/images/shape/shape2.svg') }}" alt="">
  </div>
  <!-- end faq -->
  @include('home.homelayouts.apps')
  <!-- end cta -->
@endsection