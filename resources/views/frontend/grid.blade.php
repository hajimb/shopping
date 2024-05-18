@extends('layouts.frontend')

@section('title', $pageTitle)

@section('content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li class="home"> <a href="{{route('home')}}" title="Go to Home Page">Home</a> <span>/</span> </li>
                        <li class="category1599"> <a href="{{route('grid')}}" title="">Women</a> <span>/ </span> </li>
                        <li class="category1600"> <a href="{{route('grid')}}" title="">Styliest Bag</a> <span>/</span> </li>
                        <li class="category1601"> <strong>Clutch Handbags</strong> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Main Container -->
    <section class="main-container col2-left-layout bounceInUp animated">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-sm-push-3">
                    <div class="category-description std">
                        <div class="slider-items-products">
                            <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                                <div class="slider-items slider-width-col1 owl-carousel owl-theme">

                                    <!-- Item -->
                                    <div class="item"> <a href="#"><img alt=""
                                                src="http://via.placeholder.com/915x390"></a>
                                        <div class="cat-img-title cat-bg cat-box">
                                            <div class="small-tag">Fashion 2018</div>
                                            <h2 class="cat-heading">Women Collection</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                        </div>
                                    </div>
                                    <!-- End Item -->

                                    <!-- Item -->
                                    <div class="item"> <a href="#"><img alt=""
                                                src="http://via.placeholder.com/915x390"></a>
                                        <div class="cat-img-title cat-bg cat-box">
                                            <div class="small-tag">Street Style</div>
                                            <h2 class="cat-heading">New Season</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                        </div>
                                        <!-- End Item -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <article class="col-main">
                        <h2 class="page-heading"> <span class="page-heading-title">Women</span> </h2>
                        <div class="display-product-option">
                            <div class="pager hidden-xs">
                                <div class="pages">
                                    <ul class="pagination">
                                        <li><a href="#">&laquo;</a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">&raquo;</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sorter">
                                <div class="view-mode"> <span title="Grid"
                                        class="button button-active button-grid">&nbsp;</span><a href="{{route('list)}}"
                                        title="List" class="button-list">&nbsp;</a> </div>
                            </div>
                        </div>
                        <div class="category-products">
                            <ul class="products-grid">
                                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                    <div class="item-inner">
                                        <div class="item-img">
                                            <div class="item-img-info"><a href="#" title="Retis lapen casen"
                                                    class="product-image"><img src="http://via.placeholder.com/700x850"
                                                        alt="Retis lapen casen"></a>
                                                <div class="new-label new-top-left">New</div>
                                                <div class="box-hover">
                                                    <ul class="add-to-links">
                                                        <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                                        </li>
                                                        <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a> </li>
                                                        <li><a class="link-compare" href="{{route('compare')}}">Compare</a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <h4><a href="#" title="Retis lapen casen">Retis lapen casen</a>
                                                    </h4>
                                                </div>
                                                <div class="item-content">
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating width80"></div>
                                                            </div>
                                                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span
                                                                    class="separator">|</span> <a href="#">Add
                                                                    Review</a> </p>
                                                        </div>
                                                    </div>
                                                    <div class="item-price">
                                                        <div class="price-box">
                                                            <p class="old-price"><span class="price-label">Regular
                                                                    Price:</span> <span class="price">$100.00 </span> </p>
                                                            <p class="special-price"><span class="price-label">Special
                                                                    Price</span> <span class="price">$90.00 </span> </p>
                                                        </div>
                                                    </div>
                                                    <div class="action">
                                                        <button class="button btn-cart" type="button" title=""
                                                            data-original-title="Add to Cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                    <div class="item-inner">
                                        <div class="item-img">
                                            <div class="item-img-info"><a href="#" title="Retis lapen casen"
                                                    class="product-image"><img src="http://via.placeholder.com/700x850"
                                                        alt="Retis lapen casen"></a>
                                                <div class="box-hover">
                                                    <ul class="add-to-links">
                                                        <li><a class="link-quickview" href="{{route('quick.view')}}">Quick
                                                                View</a> </li>
                                                        <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                                        </li>
                                                        <li><a class="link-compare" href="{{route('compare')}}">Compare</a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <h4><a href="#" title="Retis lapen casen">Retis lapen casen</a>
                                                    </h4>
                                                </div>
                                                <div class="item-content">
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating width80"></div>
                                                            </div>
                                                            <p class="rating-links"><a href="#">1 Review(s)</a>
                                                                <span class="separator">|</span> <a href="#">Add
                                                                    Review</a> </p>
                                                        </div>
                                                    </div>
                                                    <div class="item-price">
                                                        <div class="price-box"><span class="regular-price"><span
                                                                    class="price">$125.00</span> </span> </div>
                                                    </div>
                                                    <div class="action">
                                                        <button class="button btn-cart" type="button" title=""
                                                            data-original-title="Add to Cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                    <div class="item-inner">
                                        <div class="item-img">
                                            <div class="item-img-info"><a href="#" title="Retis lapen casen"
                                                    class="product-image"><img src="http://via.placeholder.com/700x850"
                                                        alt="Retis lapen casen"></a>
                                                <div class="box-hover">
                                                    <ul class="add-to-links">
                                                        <li><a class="link-quickview" href="{{route('quick.view')}}">Quick
                                                                View</a> </li>
                                                        <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                                        </li>
                                                        <li><a class="link-compare" href="{{route('compare')}}">Compare</a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <h4><a href="#" title="Retis lapen casen">Retis lapen casen</a>
                                                    </h4>
                                                </div>
                                                <div class="item-content">
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating width80"></div>
                                                            </div>
                                                            <p class="rating-links"><a href="#">1 Review(s)</a>
                                                                <span class="separator">|</span> <a href="#">Add
                                                                    Review</a> </p>
                                                        </div>
                                                    </div>
                                                    <div class="item-price">
                                                        <div class="price-box"><span class="regular-price"><span
                                                                    class="price">$125.00</span> </span> </div>
                                                    </div>
                                                    <div class="action">
                                                        <button class="button btn-cart" type="button" title=""
                                                            data-original-title="Add to Cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                    <div class="item-inner">
                                        <div class="item-img">
                                            <div class="item-img-info"><a href="#" title="Retis lapen casen"
                                                    class="product-image"><img src="http://via.placeholder.com/700x850"
                                                        alt="Retis lapen casen"></a>
                                                <div class="new-label new-top-left">New</div>
                                                <div class="box-hover">
                                                    <ul class="add-to-links">
                                                        <li><a class="link-quickview" href="{{route('quick.view')}}">Quick
                                                                View</a> </li>
                                                        <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                                        </li>
                                                        <li><a class="link-compare" href="{{route('compare')}}">Compare</a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <h4><a href="#" title="Retis lapen casen">Retis lapen casen</a>
                                                    </h4>
                                                </div>
                                                <div class="item-content">
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating width80"></div>
                                                            </div>
                                                            <p class="rating-links"> <a href="#">1 Review(s)</a>
                                                                <span class="separator">|</span> <a href="#">Add
                                                                    Review</a> </p>
                                                        </div>
                                                    </div>
                                                    <div class="item-price">
                                                        <div class="price-box">
                                                            <p class="old-price"><span class="price-label">Regular
                                                                    Price:</span> <span class="price">$100.00 </span> </p>
                                                            <p class="special-price"><span class="price-label">Special
                                                                    Price</span> <span class="price">$90.00 </span> </p>
                                                        </div>
                                                    </div>
                                                    <div class="action">
                                                        <button class="button btn-cart" type="button" title=""
                                                            data-original-title="Add to Cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                    <div class="item-inner">
                                        <div class="item-img">
                                            <div class="item-img-info"><a href="#" title="Retis lapen casen"
                                                    class="product-image"><img src="http://via.placeholder.com/700x850"
                                                        alt="Retis lapen casen"></a>
                                                <div class="box-hover">
                                                    <ul class="add-to-links">
                                                        <li><a class="link-quickview" href="{{route('quick.view')}}">Quick
                                                                View</a> </li>
                                                        <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                                        </li>
                                                        <li><a class="link-compare" href="{{route('compare')}}">Compare</a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <h4><a href="#" title="Retis lapen casen">Retis lapen casen</a>
                                                    </h4>
                                                </div>
                                                <div class="item-content">
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating width80"></div>
                                                            </div>
                                                            <p class="rating-links"><a href="#">1 Review(s)</a>
                                                                <span class="separator">|</span> <a href="#">Add
                                                                    Review</a> </p>
                                                        </div>
                                                    </div>
                                                    <div class="item-price">
                                                        <div class="price-box"><span class="regular-price"><span
                                                                    class="price">$125.00</span> </span> </div>
                                                    </div>
                                                    <div class="action">
                                                        <button class="button btn-cart" type="button" title=""
                                                            data-original-title="Add to Cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                    <div class="item-inner">
                                        <div class="item-img">
                                            <div class="item-img-info"><a href="#" title="Retis lapen casen"
                                                    class="product-image"><img src="http://via.placeholder.com/700x850"
                                                        alt="Retis lapen casen"></a>
                                                <div class="box-hover">
                                                    <ul class="add-to-links">
                                                        <li><a class="link-quickview" href="{{route('quick.view')}}">Quick
                                                                View</a> </li>
                                                        <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                                        </li>
                                                        <li><a class="link-compare" href="{{route('compare')}}">Compare</a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <h4><a href="#" title="Retis lapen casen">Retis lapen casen</a>
                                                    </h4>
                                                </div>
                                                <div class="item-content">
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating width80"></div>
                                                            </div>
                                                            <p class="rating-links"><a href="#">1 Review(s)</a>
                                                                <span class="separator">|</span> <a href="#">Add
                                                                    Review</a> </p>
                                                        </div>
                                                    </div>
                                                    <div class="item-price">
                                                        <div class="price-box"><span class="regular-price"><span
                                                                    class="price">$125.00</span> </span> </div>
                                                    </div>
                                                    <div class="action">
                                                        <button class="button btn-cart" type="button" title=""
                                                            data-original-title="Add to Cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                    <div class="item-inner">
                                        <div class="item-img">
                                            <div class="item-img-info"><a href="#" title="Retis lapen casen"
                                                    class="product-image"><img src="http://via.placeholder.com/700x850"
                                                        alt="Retis lapen casen"></a>
                                                <div class="new-label new-top-left">New</div>
                                                <div class="box-hover">
                                                    <ul class="add-to-links">
                                                        <li><a class="link-quickview" href="{{route('quick.view')}}">Quick
                                                                View</a> </li>
                                                        <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                                        </li>
                                                        <li><a class="link-compare" href="{{route('compare')}}">Compare</a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <h4><a href="#" title="Retis lapen casen">Retis lapen casen</a>
                                                    </h4>
                                                </div>
                                                <div class="item-content">
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating width80"></div>
                                                            </div>
                                                            <p class="rating-links"> <a href="#">1 Review(s)</a>
                                                                <span class="separator">|</span> <a href="#">Add
                                                                    Review</a> </p>
                                                        </div>
                                                    </div>
                                                    <div class="item-price">
                                                        <div class="price-box">
                                                            <p class="old-price"><span class="price-label">Regular
                                                                    Price:</span> <span class="price">$100.00 </span> </p>
                                                            <p class="special-price"><span class="price-label">Special
                                                                    Price</span> <span class="price">$90.00 </span> </p>
                                                        </div>
                                                    </div>
                                                    <div class="action">
                                                        <button class="button btn-cart" type="button" title=""
                                                            data-original-title="Add to Cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                    <div class="item-inner">
                                        <div class="item-img">
                                            <div class="item-img-info"><a href="#" title="Retis lapen casen"
                                                    class="product-image"><img src="http://via.placeholder.com/700x850"
                                                        alt="Retis lapen casen"></a>
                                                <div class="box-hover">
                                                    <ul class="add-to-links">
                                                        <li><a class="link-quickview" href="{{route('quick.view')}}">Quick
                                                                View</a> </li>
                                                        <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                                        </li>
                                                        <li><a class="link-compare" href="{{route('compare')}}">Compare</a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <h4><a href="#" title="Retis lapen casen">Retis lapen casen</a>
                                                    </h4>
                                                </div>
                                                <div class="item-content">
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating width80"></div>
                                                            </div>
                                                            <p class="rating-links"><a href="#">1 Review(s)</a>
                                                                <span class="separator">|</span> <a href="#">Add
                                                                    Review</a> </p>
                                                        </div>
                                                    </div>
                                                    <div class="item-price">
                                                        <div class="price-box"><span class="regular-price"><span
                                                                    class="price">$125.00</span> </span> </div>
                                                    </div>
                                                    <div class="action">
                                                        <button class="button btn-cart" type="button" title=""
                                                            data-original-title="Add to Cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                    <div class="item-inner">
                                        <div class="item-img">
                                            <div class="item-img-info"><a href="#" title="Retis lapen casen"
                                                    class="product-image"><img src="http://via.placeholder.com/700x850"
                                                        alt="Retis lapen casen"></a>
                                                <div class="box-hover">
                                                    <ul class="add-to-links">
                                                        <li><a class="link-quickview" href="{{route('quick.view')}}">Quick
                                                                View</a> </li>
                                                        <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                                        </li>
                                                        <li><a class="link-compare" href="{{route('compare')}}">Compare</a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <h4><a href="#" title="Retis lapen casen">Retis lapen casen</a>
                                                    </h4>
                                                </div>
                                                <div class="item-content">
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating width80"></div>
                                                            </div>
                                                            <p class="rating-links"><a href="#">1 Review(s)</a>
                                                                <span class="separator">|</span> <a href="#">Add
                                                                    Review</a> </p>
                                                        </div>
                                                    </div>
                                                    <div class="item-price">
                                                        <div class="price-box"><span class="regular-price"><span
                                                                    class="price">$125.00</span> </span> </div>
                                                    </div>
                                                    <div class="action">
                                                        <button class="button btn-cart" type="button" title=""
                                                            data-original-title="Add to Cart"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="toolbar">
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <div id="sort-by">
                                        <label class="left">Sort By: </label>
                                        <ul>
                                            <li><a href="#">Position<span class="right-arrow"></span></a>
                                                <ul>
                                                    <li><a href="#">Name</a></li>
                                                    <li><a href="#">Price</a></li>
                                                    <li><a href="#">Position</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-7 col-md-5">
                                    <div class="pager">
                                        <div class="pages">
                                            <label>Page:</label>
                                            <ul class="pagination">
                                                <li><a href="#">&laquo;</a></li>
                                                <li class="active"><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">5</a></li>
                                                <li><a href="#">&raquo;</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12 col-md-3">
                                    <div id="limiter">
                                        <label>View: </label>
                                        <ul>
                                            <li><a href="#">09<span class="right-arrow"></span></a>
                                                <ul>
                                                    <li><a href="#">15</a></li>
                                                    <li><a href="#">20</a></li>
                                                    <li><a href="#">30</a></li>
                                                    <li><a href="#">35</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <a class="button-asc left" href="#" title="Set Descending Direction"><span
                                                class="top_arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!--	///*///======    End article  ========= //*/// -->
                </div>
                <div class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
                    <aside class="col-left sidebar">
                        <div class="side-nav-categories">
                            <div class="block-title">
                                <h3>Categories</h3>
                            </div>
                            <!--block-title-->
                            <!-- BEGIN BOX-CATEGORY -->
                            <div class="box-content box-category">
                                <ul>
                                    <li> <a class="active" href="{{route('grid')}}">Women</a> <span
                                            class="subDropdown plus"></span>
                                        <ul>
                                            <li> <a href="{{route('grid')}}"> Tops </a> <span class="subDropdown plus"></span>
                                                <ul class="level1">
                                                    <li> <a href="{{route('grid')}}"> Evening Tops </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Shirts &amp; Blouses </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Tunics </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Vests </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="{{route('grid')}}"> Bags </a> <span class="subDropdown plus"></span>
                                                <ul class="level1">
                                                    <li> <a href="{{route('grid')}}"> Bags </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Designer Handbags </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Purses </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Shoulder Bags </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="{{route('grid')}}"> Shoes </a> <span class="subDropdown plus"></span>
                                                <ul class="level1">
                                                    <li> <a href="{{route('grid')}}"> Flat Shoes </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Flat Sandals </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Boots </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Heels </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="{{route('grid')}}"> Jewellery </a>
                                                <ul class="level1">
                                                    <li> <a href="{{route('grid')}}"> Bracelets </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Necklaces &amp; Pendants </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Pins &amp; Brooches </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="{{route('grid')}}"> Dresses </a> <span class="subDropdown plus"></span>
                                                <ul class="level1">
                                                    <li> <a href="{{route('grid')}}"> Casual Dresses </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Evening </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Designer </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Party </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="{{route('grid')}}"> Lingerie </a> <span class="subDropdown plus"></span>
                                                <ul class="level1">
                                                    <li> <a href="{{route('grid')}}"> Bras </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Bodies </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Lingerie Sets </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Shapewear </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="{{route('grid')}}"> Jackets </a> <span class="subDropdown plus"></span>
                                                <ul class="level1">
                                                    <li> <a href="{{route('grid')}}"> Coats </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Jackets </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Leather Jackets </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Blazers </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="{{route('grid')}}"> Swimwear </a> <span class="subDropdown plus"></span>
                                                <ul class="level1">
                                                    <li> <a href="{{route('grid')}}"> Swimsuits </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Beach Clothing </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Bikinis </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                        </ul>
                                        <!--level0-->
                                    </li>
                                    <!--level 0-->
                                    <li> <a href="{{route('grid')}}">Men</a> <span class="subDropdown plus"></span>
                                        <ul class="level0_455" style="display:none">
                                            <li> <a href="{{route('grid')}}"> Shoes </a> <span class="subDropdown plus"></span>
                                                <ul class="level1">
                                                    <li> <a href="{{route('grid')}}"> Flat Shoes </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Boots </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Heels </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="{{route('grid')}}"> Jewellery </a> <span
                                                    class="subDropdown plus"></span>
                                                <ul class="level1">
                                                    <li> <a href="{{route('grid')}}"> Bracelets </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Necklaces &amp; Pendants </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Pins &amp; Brooches </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="{{route('grid')}}"> Dresses </a> <span class="subDropdown plus"></span>
                                                <ul class="level1">
                                                    <li> <a href="{{route('grid')}}"> Casual Dresses </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Evening </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Designer </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Party </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="{{route('grid')}}"> Jackets </a> <span class="subDropdown plus"></span>
                                                <ul class="level1">
                                                    <li> <a href="{{route('grid')}}"> Coats </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Jackets </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Leather Jackets </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Blazers </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="{{route('grid')}}"> Swimwear </a> <span class="subDropdown plus"></span>
                                                <ul class="level1">
                                                    <li> <a href="{{route('grid')}}"> Swimsuits </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Beach Clothing </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                        </ul>
                                        <!--level0-->
                                    </li>
                                    <!--level 0-->
                                    <li> <a href="{{route('grid')}}">Electronics</a> <span class="subDropdown plus"></span>
                                        <ul class="level0_482" style="display:none">
                                            <li> <a href="{{route('grid')}}"> Smartphones </a> <span
                                                    class="subDropdown plus"></span>
                                                <ul class="level1">
                                                    <li> <a href="{{route('grid')}}"> Samsung </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Apple </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Blackberry </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Nokia </a> </li>
                                                    <li> <a href="{{route('grid')}}"> HTC </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="{{route('grid')}}"> Cameras </a> <span class="subDropdown plus"></span>
                                                <ul class="level1">
                                                    <li> <a href="{{route('grid')}}"> Digital Cameras </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Camcorders </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Lenses </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Filters </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Tripod </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="{{route('grid')}}"> Accesories </a> <span
                                                    class="subDropdown plus"></span>
                                                <ul class="level1">
                                                    <li> <a href="{{route('grid')}}"> HeadSets </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Batteries </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Screen Protectors </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Memory Cards </a> </li>
                                                    <li> <a href="{{route('grid')}}"> Cases </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                        </ul>
                                        <!--level0-->
                                    </li>
                                    <!--level 0-->
                                    <li> <a href="{{route('grid')}}">Digital</a> </li>
                                    <!--level 0-->
                                    <li class="last"> <a href="{{route('grid')}}">Fashion</a> </li>
                                    <!--level 0-->
                                </ul>
                            </div>
                            <!--box-content box-category-->
                        </div>
                        <div class="hot-banner"><img alt="banner" src="http://via.placeholder.com/285x465"></div>
                        <div class="block block-layered-nav">
                            <div class="block-title">
                                <h3>Shop By</h3>
                            </div>
                            <div class="block-content">
                                <p class="block-subtitle">Shopping Options</p>
                                <dl id="narrow-by-list">
                                    <dt class="odd">Price</dt>
                                    <dd class="odd">
                                        <ol>
                                            <li> <a href="#"><span class="price">$0.00</span> - <span
                                                        class="price">$99.99</span></a> (6) </li>
                                            <li> <a href="#"><span class="price">$100.00</span> and above</a> (6)
                                            </li>
                                        </ol>
                                    </dd>
                                    <dt class="even">Manufacturer</dt>
                                    <dd class="even">
                                        <ol>
                                            <li> <a href="#">TheBrand</a> (9) </li>
                                            <li> <a href="#">Company</a> (4) </li>
                                            <li> <a href="#">LogoFashion</a> (1) </li>
                                        </ol>
                                    </dd>
                                    <dt class="odd">Color</dt>
                                    <dd class="odd">
                                        <ol>
                                            <li> <a href="#">Green</a> (1) </li>
                                            <li> <a href="#">White</a> (5) </li>
                                            <li> <a href="#">Black</a> (5) </li>
                                            <li> <a href="#">Gray</a> (4) </li>
                                            <li> <a href="#">Dark Gray</a> (3) </li>
                                            <li> <a href="#">Blue</a> (1) </li>
                                        </ol>
                                    </dd>
                                    <dt class="last even">Size</dt>
                                    <dd class="last even">
                                        <ol>
                                            <li> <a href="#">S</a> (6) </li>
                                            <li> <a href="#">M</a> (6) </li>
                                            <li> <a href="#">L</a> (4) </li>
                                            <li> <a href="#">XL</a> (4) </li>
                                        </ol>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="block block-cart">
                            <div class="block-title ">
                                <h3>My Cart</h3>
                            </div>
                            <div class="block-content">
                                <div class="summary">
                                    <p class="amount">There are <a href="{{route('shopping.cart')}}">2 items</a> in your cart.</p>
                                    <p class="subtotal"> <span class="label">Cart Subtotal:</span> <span
                                            class="price">$27.99</span> </p>
                                </div>
                                <div class="ajax-checkout">
                                    <button class="button button-checkout" title="Submit"
                                        type="submit"><span>Checkout</span></button>
                                </div>
                                <p class="block-subtitle">Recently added item(s) </p>
                                <ul>
                                    <li class="item"> <a href="{{route('shopping.cart')}}" title="Fisher-Price Bubble Mower"
                                            class="product-image"><img src="http://via.placeholder.com/700x850"
                                                alt="Fisher-Price Bubble Mower"></a>
                                        <div class="product-details">
                                            <div class="access"> <a href="{{route('shopping.cart')}}" title="Remove This Item"
                                                    class="btn-remove1"> <span class="icon"></span> Remove </a> </div>
                                            <strong>1</strong> x <span class="price">$19.99</span>
                                            <p class="product-name"> <a href="{{route('shopping.cart')}}">Skater Dress In Leaf
                                                    Print Grouped Product</a> </p>
                                        </div>
                                    </li>
                                    <li class="item last"> <a href="{{route('shopping.cart')}}"
                                            title="Prince Lionheart Jumbo Toy Hammock" class="product-image"><img
                                                src="http://via.placeholder.com/700x850"
                                                alt="Prince Lionheart Jumbo Toy Hammock"></a>
                                        <div class="product-details">
                                            <div class="access"> <a href="{{route('shopping.cart')}}" title="Remove This Item"
                                                    class="btn-remove1"> <span class="icon"></span> Remove </a> </div>
                                            <strong>1</strong> x <span class="price">$8.00</span>
                                            <p class="product-name"> <a href="{{route('shopping.cart')}}"> Sample Fashion Product
                                                    Prince Lionheart </a> </p>

                                            <!--access clearfix-->
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="block block-compare">
                            <div class="block-title ">
                                <h3>Compare Products (2)</h3>
                            </div>
                            <div class="block-content">
                                <ol id="compare-items">
                                    <li class="item odd">
                                        <input type="hidden" value="2173" class="compare-item-id">
                                        <a class="btn-remove1" title="Remove This Item" href="#"></a> <a
                                            href="#" class="product-name"> Sofa with Box-Edge Polyester Wrapped
                                            Cushions</a>
                                    </li>
                                    <li class="item last even">
                                        <input type="hidden" value="2174" class="compare-item-id">
                                        <a class="btn-remove1" title="Remove This Item" href="#"></a> <a
                                            href="#" class="product-name"> Sofa with Box-Edge Down-Blend Wrapped
                                            Cushions</a>
                                    </li>
                                </ol>
                                <div class="ajax-checkout">
                                    <button type="submit" title="Submit"
                                        class="button button-compare"><span>Compare</span></button>
                                    <button type="submit" title="Submit"
                                        class="button button-clear"><span>Clear</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="custom-slider">
                            <div>
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#carousel-example-generic" data-slide-to="0">
                                        </li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1" class="">
                                        </li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2" class="">
                                        </li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="item active"><img src="http://via.placeholder.com/360x460"
                                                alt="slide3">
                                            <div class="carousel-caption">
                                                <h3><a title=" Sample Product" href="#">50% OFF</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <a class="link" href="#">Buy Now</a>
                                            </div>
                                        </div>
                                        <div class="item"><img src="http://via.placeholder.com/360x460" alt="slide1">
                                            <div class="carousel-caption">
                                                <h3><a title=" Sample Product" href="#">Hot collection</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </div>
                                        <div class="item"><img src="http://via.placeholder.com/360x460" alt="slide2">
                                            <div class="carousel-caption">
                                                <h3><a title=" Sample Product" href="#">Summer collection</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="#" data-slide="prev"> <span
                                            class="sr-only">Previous</span> </a> <a class="right carousel-control"
                                        href="#" data-slide="next"> <span class="sr-only">Next</span> </a>
                                </div>
                            </div>
                        </div>
                        <div class="block block-list block-viewed">
                            <div class="block-title">
                                <h3>Recently Viewed</h3>
                            </div>
                            <div class="block-content">
                                <ol id="recently-viewed-items">
                                    <li class="item odd">
                                        <p class="product-name"><a href="#"> Armchair with Box-Edge Upholstered
                                                Arm</a></p>
                                    </li>
                                    <li class="item even">
                                        <p class="product-name"><a href="#"> Pearce Upholstered Slee pere</a></p>
                                    </li>
                                    <li class="item last odd">
                                        <p class="product-name"><a href="#"> Sofa with Box-Edge Down-Blend Wrapped
                                                Cushions</a></p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="block block-poll">
                            <div class="block-title">
                                <h3>Community Poll</h3>
                            </div>
                            <form id="pollForm" action="#" method="post"
                                onSubmit="return validatePollAnswerIsSelected();">
                                <div class="block-content">
                                    <p class="block-subtitle">What is your favorite Magento feature?</p>
                                    <ul id="poll-answers">
                                        <li class="odd">
                                            <input type="radio" name="vote" class="radio poll_vote" id="vote_5"
                                                value="5">
                                            <span class="label">
                                                <label for="vote_5">Layered Navigation</label>
                                            </span>
                                        </li>
                                        <li class="even">
                                            <input type="radio" name="vote" class="radio poll_vote" id="vote_6"
                                                value="6">
                                            <span class="label">
                                                <label for="vote_6">Price Rules</label>
                                            </span>
                                        </li>
                                        <li class="odd">
                                            <input type="radio" name="vote" class="radio poll_vote" id="vote_7"
                                                value="7">
                                            <span class="label">
                                                <label for="vote_7">Category Management</label>
                                            </span>
                                        </li>
                                        <li class="last even">
                                            <input type="radio" name="vote" class="radio poll_vote" id="vote_8"
                                                value="8">
                                            <span class="label">
                                                <label for="vote_8">Compare Products</label>
                                            </span>
                                        </li>
                                    </ul>
                                    <div class="actions">
                                        <button type="submit" title="Vote"
                                            class="button button-vote"><span>Vote</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="block block-tags">
                            <div class="block-title">
                                <h3>Popular Tags</h3>
                            </div>
                            <div class="block-content">
                                <ul class="tags-list">
                                    <li><a href="#" class="small">Camera</a></li>
                                    <li><a href="#">Hohoho</a></li>
                                    <li><a href="#" class="sup">SEXY</a></li>
                                    <li><a href="#" class="samp">Tag</a></li>
                                    <li><a href="#">Test</a></li>
                                    <li><a href="#">bones</a></li>
                                    <li><a href="#">cool</a></li>
                                    <li><a href="#">cool t-shirt</a></li>
                                    <li><a href="#">crap</a></li>
                                    <li><a href="#">good</a></li>
                                    <li><a href="#">green</a></li>
                                    <li><a href="#">hip</a></li>
                                    <li><a href="#">laptop</a></li>
                                    <li><a href="#">mobile</a></li>
                                    <li><a href="#">nice</a></li>
                                    <li><a href="#">phone</a></li>
                                    <li><a href="#">red</a></li>
                                    <li><a href="#">tight</a></li>
                                    <li><a href="#">trendy</a></li>
                                    <li><a href="#">young</a></li>
                                </ul>
                                <div class="actions"> <a href="#" class="view-all">View All Tags</a> </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Container End -->

    <!-- Brand Logo -->
    @include('frontend.includes.brand-logo')

    <!-- our features -->
    @include('frontend.includes.features-box')
@endsection
