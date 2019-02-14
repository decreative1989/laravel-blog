@extends('layouts.frontend.varsity.layout')
@section('title')
    <title>Landing Page</title>
@endsection

@section('content')
    <!-- Start Slider -->
    @include('layouts.frontend.varsity._partials.slider')
    <!-- End Slider -->
    <!-- Start service  -->
    @include('layouts.frontend.varsity._partials.service')
    <!-- End service  -->
    <!-- Start about us -->
    @include('layouts.frontend.varsity._partials.about-us')
    <!-- End about us -->
    <!-- Start about us counter -->
    @include('layouts.frontend.varsity._partials.counter')
    <!-- End about us counter -->
    <!-- Start features section -->
    @include('layouts.frontend.varsity._partials.features')
    <!-- End features section -->
    <!-- Start latest course section -->
    @include('layouts.frontend.varsity._partials.course')
    <!-- End latest course section -->
    <!-- Start our teacher -->
    @include('layouts.frontend.varsity._partials.teacher')
    <!-- End our teacher -->
    <!-- Start testimonial -->
    @include('layouts.frontend.varsity._partials.testimonial')
    <!-- End testimonial -->
    <!-- Start from blog -->
    @include('layouts.frontend.varsity._partials.blog')
    <!-- End from blog -->
@endsection
