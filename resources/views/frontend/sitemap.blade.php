@extends('layouts.frontend')

@section('title', $pageTitle)

@section('content')

<section class="main-container col1-layout">
    <div class="main container">
      <div class="col-main">
        <div class="cart">
          <div class="page-title">
            <h1>Sitemap</h1>
          </div>
          <div class="row content-row">
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-4">
              <ul class="simple-list arrow-list bold-list">
                <li> <a href="{{route('grid')}}">Woman</a>
                  <ul>
                    <li><a href="{{route('grid')}}">Featured products</a></li>
                    <li><a href="{{route('grid')}}">New arrivals</a></li>
                    <li><a href="{{route('grid')}}">Bestsellers</a></li>
                    <li><a href="{{route('grid')}}">Footwear Womens</a></li>
                    <li><a href="{{route('grid')}}">Shorts</a></li>
                  </ul>
                </li>
                <li> <a href="{{route('grid')}}">Man</a>
                  <ul>
                    <li><a href="{{route('grid')}}">Polo Shirts</a></li>
                    <li><a href="{{route('grid')}}">Shirts</a></li>
                    <li><a href="{{route('grid')}}">Big &amp; Tall</a></li>
                    <li><a href="{{route('grid')}}">Jeans</a></li>
                    <li><a href="{{route('grid')}}">Sweaters</a></li>
                  </ul>
                </li>
                <li><a href="{{route('grid')}}">Electronics</a></li>
                <li><a href="{{route('grid')}}">Furniture</a></li>
                <li><a href="{{route('grid')}}">Sale</a></li>
              </ul>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-4">
              <ul class="simple-list arrow-list bold-list">
                <li><a href="{{route('shopping.cart')}}">Shopping Cart</a></li>
                <li> <a href="{{route('login')}}">My Account</a>
                  <ul>
                    <li><a href="{{route('login')}}">My Account</a></li>
                    <li><a href="#">Order history</a></li>
                    <li><a href="#">Advanced search</a></li>
                    <li><a href="#">Reviews</a></li>
                  </ul>
                </li>
                <li> <a href="#">Customer service</a>
                  <ul>
                    <li><a href="#">Online support</a></li>
                    <li><a href="#">Help & FAQs</a></li>
                    <li><a href="#">Call Center</a></li>
                  </ul>
                </li>
                <li> <a href="#">Information</a>
                  <ul>
                    <li><a href="{{route('aboutus')}}">About Us</a></li>
                    <li><a href="#">Shipping &amp; Returns</a></li>
                    <li><a href="#">Privacy Notice</a></li>
                    <li><a href="#">Conditions of Use</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> <img class="img-responsive animate scale" src="http://via.placeholder.com/270x290" alt=""> </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- Brand Logo -->
    @include('frontend.includes.brand-logo')

    <!-- our features -->
    @include('frontend.includes.features-box')
@endsection
