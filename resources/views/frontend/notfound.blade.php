@extends('layouts.frontend')

@section('title', $pageTitle)

@section('content')
    
<!-- main-container -->
<section class="content-wrapper">
    <div class="container">
      <div class="std">
        <div class="page-not-found">
          <h1>404</h1>
          <h3><img src="images/signal.png" alt="404 error">Oops! The Page you requested was not found!</h3>
          <div><a href="{{route('home')}}" class="btn-home"><span>Back To Home</span></a></div>
        </div>
      </div>
    </div>
  </section>
  <!--End main-container --> 
    <!-- Brand Logo -->
    @include('frontend.includes.brand-logo')

    <!-- our features -->
    @include('frontend.includes.features-box')
@endsection
