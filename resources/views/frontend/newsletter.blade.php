@extends('layouts.frontend')

@section('title', $pageTitle)

@section('content')

     <!-- Slider -->
     <div id="magik-slideshow" class="magik-slideshow">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
                <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                  <ul>
                    <li data-transition='random' data-slotamount='7' data-mIberisspeed='1000' data-thumb='http://via.placeholder.com/915x490'><img src='http://via.placeholder.com/915x490' alt="slide-img" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' />
                      <div class="info">
                        <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;white-space:nowrap;'><span>Modern Design</span> </div>
                        <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;white-space:nowrap;'><span>Season Sale</span> </div>
                        <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;white-space:nowrap;'>In augue urna, nunc, tincidunt, augue, augue facilisis facilisis.</div>
                        <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;white-space:nowrap;'><a href='#' class="buy-btn">Shop Now</a> </div>
                      </div>
                    </li>
                    <li data-transition='random' data-slotamount='7' data-mIberisspeed='1000' data-thumb='http://via.placeholder.com/915x490'><img src='images/slide-img3.jpg' alt="slide-img" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' />
                      <div class="info">
                        <div class='tp-caption ExtraLargeTitle sft slide2  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;white-space:nowrap;padding-right:0px'><span>Mega Sale</span> </div>
                        <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;white-space:nowrap;'>Go Lightly</div>
                        <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;white-space:nowrap;'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                        <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;white-space:nowrap;'><a href='#' class="buy-btn">Buy Now</a> </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 hot-deal">
              <ul class="products-grid">
                <li class="right-space two-height item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info">
                        <a href="#" title="Retis lapen casen" class="product-image"> <img src="http://via.placeholder.com/700x850" alt="Retis lapen casen"> </a>
                        <div class="hot-label hot-top-left">Hot</div>
                        <div class="box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                            </li>
                            <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                            </li>
                            <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                            </li>
                          </ul>
                        </div>
                        <div class="box-timer">
                          <div class="countbox_1 timer-grid"></div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"><h4><a href="{{route('product.details')}}" title="Retis lapen casen"> Retis lapen casen </a></h4></div>
                        <div class="item-content">
                          <div class="rating">
                            <div class="ratings">
                              <div class="rating-box">
                                <div class="rating width80"></div>
                              </div>
                              <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                            </div>
                          </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span>
                            </div>
                          </div>
                          <div class="action">
                            <button data-original-title="Add to Cart" title="" type="button" class="button btn-cart"><span>Add to Cart</span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  
      <!-- end Slider -->
      <div class="content-page">
        <div class="container">
          <!-- featured category fashion -->
          <div class="category-product">
            <div class="navbar nav-menu">
              <div class="navbar-collapse">
                <ul class="nav navbar-nav">
                  <li>
                    <div class="new_title">
                      <h2><strong>new</strong> Products</h2>
                    </div>
                  </li>
                  <li class="active"><a data-toggle="tab" href="#tab-1">Women</a>
                  </li>
                  <li class="divider"></li>
                  <li><a data-toggle="tab" href="#tab-2">Furniture</a>
                  </li>
                  <li class="divider"></li>
                  <li><a data-toggle="tab" href="#tab-3">Men</a>
                  </li>
                  <li class="divider"></li>
                  <li><a data-toggle="tab" href="#tab-4">Kids</a>
                  </li>
                  <li class="divider"></li>
                  <li><a data-toggle="tab" href="#tab-5">Accessories</a>
                  </li>
                </ul>
              </div>
              <!-- /.navbar-collapse -->
  
            </div>
            <div class="product-bestseller">
              <div class="product-bestseller-content">
                <div class="product-bestseller-list">
                  <div class="tab-container">
                    <!-- tab product -->
                    <div class="tab-panel active" id="tab-1">
                      <div class="category-products">
                        <ul class="products-grid">
                          <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info">
                                  <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                                  <div class="box-hover">
                                    <ul class="add-to-links">
                                      <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                      </li>
                                      <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                      </li>
                                      <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating width80"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span> </span>
                                      </div>
                                    </div>
                                    <div class="action">
                                      <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info">
                                  <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                                  <div class="box-hover">
                                    <ul class="add-to-links">
                                      <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                      </li>
                                      <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                      </li>
                                      <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating width80"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span>
                                      </div>
                                    </div>
                                    <div class="action">
                                      <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info">
                                  <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                                  <div class="box-hover">
                                    <ul class="add-to-links">
                                      <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                      </li>
                                      <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                      </li>
                                      <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating width80"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"> <span class="regular-price"> <span class="price">$99.00</span> </span>
                                      </div>
                                    </div>
                                    <div class="action">
                                      <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info">
                                  <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                                  <div class="new-label new-top-left">new</div>
                                  <div class="box-hover">
                                    <ul class="add-to-links">
                                      <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                      </li>
                                      <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                      </li>
                                      <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating width80"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box">
                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $156.00 </span> </p>
                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $167.00 </span> </p>
                                      </div>
                                    </div>
                                    <div class="action">
                                      <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- tab product -->
                    <div class="tab-panel" id="tab-2">
                      <div class="category-products">
                        <ul class="products-grid">
                          <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info">
                                  <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                                  <div class="box-hover">
                                    <ul class="add-to-links">
                                      <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                      </li>
                                      <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                      </li>
                                      <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating width80"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span> </span>
                                      </div>
                                    </div>
                                    <div class="action">
                                      <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info">
                                  <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                                  <div class="box-hover">
                                    <ul class="add-to-links">
                                      <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                      </li>
                                      <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                      </li>
                                      <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating width80"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span>
                                      </div>
                                    </div>
                                    <div class="action">
                                      <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info">
                                  <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                                  <div class="box-hover">
                                    <ul class="add-to-links">
                                      <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                      </li>
                                      <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                      </li>
                                      <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating width80"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"> <span class="regular-price"> <span class="price">$99.00</span> </span>
                                      </div>
                                    </div>
                                    <div class="action">
                                      <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info">
                                  <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                                  <div class="new-label new-top-left">new</div>
                                  <div class="box-hover">
                                    <ul class="add-to-links">
                                      <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                      </li>
                                      <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                      </li>
                                      <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating width80"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box">
                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $156.00 </span> </p>
                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $167.00 </span> </p>
                                      </div>
                                    </div>
                                    <div class="action">
                                      <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="tab-panel" id="tab-3">
                      <div class="category-products">
                        <ul class="products-grid">
                          <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info">
                                  <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                                  <div class="box-hover">
                                    <ul class="add-to-links">
                                      <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                      </li>
                                      <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                      </li>
                                      <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating width80"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span> </span>
                                      </div>
                                    </div>
                                    <div class="action">
                                      <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info">
                                  <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                                  <div class="box-hover">
                                    <ul class="add-to-links">
                                      <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                      </li>
                                      <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                      </li>
                                      <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating width80"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span>
                                      </div>
                                    </div>
                                    <div class="action">
                                      <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info">
                                  <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                                  <div class="box-hover">
                                    <ul class="add-to-links">
                                      <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                      </li>
                                      <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                      </li>
                                      <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating width80"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"> <span class="regular-price"> <span class="price">$99.00</span> </span>
  
                                      </div>
                                    </div>
                                    <div class="action">
                                      <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info">
                                  <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                                  <div class="new-label new-top-left">new</div>
                                  <div class="box-hover">
                                    <ul class="add-to-links">
                                      <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                      </li>
                                      <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                      </li>
                                      <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating width80"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box">
                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $156.00 </span> </p>
                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $167.00 </span> </p>
                                      </div>
                                    </div>
                                    <div class="action">
                                      <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="tab-panel" id="tab-4"> <div class="category-products">
                        <ul class="products-grid">
                          <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info">
                                  <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                                  <div class="box-hover">
                                    <ul class="add-to-links">
                                      <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                      </li>
                                      <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                      </li>
                                      <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating width80"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span> </span>
                                      </div>
                                    </div>
                                    <div class="action">
                                      <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info">
                                  <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                                  <div class="box-hover">
                                    <ul class="add-to-links">
                                      <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                      </li>
                                      <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                      </li>
                                      <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating width80"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span>
                                      </div>
                                    </div>
                                    <div class="action">
                                      <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info">
                                  <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                                  <div class="box-hover">
                                    <ul class="add-to-links">
                                      <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                      </li>
                                      <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                      </li>
                                      <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating width80"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"> <span class="regular-price"> <span class="price">$99.00</span> </span>
                                      </div>
                                    </div>
                                    <div class="action">
                                      <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info">
                                  <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                                  <div class="new-label new-top-left">new</div>
                                  <div class="box-hover">
                                    <ul class="add-to-links">
                                      <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                      </li>
                                      <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                      </li>
                                      <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating width80"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box">
                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $156.00 </span> </p>
                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $167.00 </span> </p>
                                      </div>
                                    </div>
                                    <div class="action">
                                      <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div> </div>
                    <div class="tab-panel" id="tab-5"> <div class="category-products">
                        <ul class="products-grid">
                          <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info">
                                  <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                                  <div class="box-hover">
                                    <ul class="add-to-links">
                                      <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                      </li>
                                      <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                      </li>
                                      <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating width80"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span> </span>
                                      </div>
                                    </div>
                                    <div class="action">
                                      <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info">
                                  <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                                  <div class="box-hover">
                                    <ul class="add-to-links">
                                      <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                      </li>
                                      <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                      </li>
                                      <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating width80"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span>
                                      </div>
                                    </div>
                                    <div class="action">
                                      <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info">
                                  <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                                  <div class="box-hover">
                                    <ul class="add-to-links">
                                      <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                      </li>
                                      <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                      </li>
                                      <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating width80"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"> <span class="regular-price"> <span class="price">$99.00</span> </span>
                                      </div>
                                    </div>
                                    <div class="action">
                                      <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info">
                                  <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                                  <div class="new-label new-top-left">new</div>
                                  <div class="box-hover">
                                    <ul class="add-to-links">
                                      <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                      </li>
                                      <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                      </li>
                                      <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating width80"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box">
                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $156.00 </span> </p>
                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $167.00 </span> </p>
                                      </div>
                                    </div>
                                    <div class="action">
                                      <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div> </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <!-- bestsell Slider -->
      <section class="bestsell-pro">
        <div class="container">
          <div class="slider-items-products">
            <div class="bestsell-block">
              <div id="bestsell-slider" class="product-flexslider hidden-buttons">
                <div class="home-block-inner">
                  <div class="block-title">
                    <h2>Best<br>
                    <em> Sellers</em></h2>
                  </div>
                  <div class="pretext">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Curabitur eu odio non justo euismod congue ut nec orci. </div>
                  <a href="{{route('grid')}}" class="view_more_bnt">View All</a> </div>
                <div class="slider-items slider-width-col4 products-grid block-content">
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                          <div class="new-label new-top-right">new</div>
                          <div class="box-hover">
                            <ul class="add-to-links">
                              <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                              </li>
                              <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                              </li>
                              <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                          <div class="rating">
                            <div class="ratings">
                              <div class="rating-box">
                                <div class="rating width80"></div>
                              </div>
                              <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                            </div>
                          </div>
                          <div class="item-content">
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span>
                              </div>
                            </div>
                            <div class="action">
                              <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <!-- Item -->
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                          <div class="box-hover">
                            <ul class="add-to-links">
                              <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                              </li>
                              <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                              </li>
                              <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating width80"></div>
                                </div>
                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$325.00</span> </span>
                              </div>
                            </div>
                            <div class="action">
                              <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Item -->
  
                  <!-- Item -->
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                          <div class="box-hover">
                            <ul class="add-to-links">
                              <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                              </li>
                              <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                              </li>
                              <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating width80"></div>
                                </div>
                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$245.00</span> </span>
                              </div>
                            </div>
                            <div class="action">
                              <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Item -->
  
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                          <div class="new-label new-top-left">new</div>
                          <div class="box-hover">
                            <ul class="add-to-links">
                              <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                              </li>
                              <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                              </li>
                              <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating width80"></div>
                                </div>
                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span>
                              </div>
                            </div>
                            <div class="action">
                              <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <!-- Item -->
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                          <div class="box-hover">
                            <ul class="add-to-links">
                              <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                              </li>
                              <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                              </li>
                              <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating width80"></div>
                                </div>
                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$115.00</span> </span>
                              </div>
                            </div>
                            <div class="action">
                              <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Item -->
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                          <div class="box-hover">
                            <ul class="add-to-links">
                              <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                              </li>
                              <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                              </li>
                              <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating width80"></div>
                                </div>
                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span> </span>
                              </div>
                            </div>
                            <div class="action">
                              <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Item -->
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                          <div class="box-hover">
                            <ul class="add-to-links">
                              <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                              </li>
                              <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                              </li>
                              <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating width80"></div>
                                </div>
                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$175.00</span> </span>
                              </div>
                            </div>
                            <div class="action">
                              <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Item -->
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Bestsell Slider -->
  
      <!-- featured Slider -->
      <section class="featured-pro">
        <div class="container">
          <div class="slider-items-products">
            <div class="featured-block">
              <div id="featured-slider" class="product-flexslider hidden-buttons">
                <div class="home-block-inner">
                  <div class="block-title">
                    <h2>Featured<br>
                    <em>Product</em></h2>
                  </div>
                  <div class="pretext">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Curabitur eu odio non justo euismod congue ut nec orci.</div>
                  <a href="{{route('grid')}}" class="view_more_bnt">View All</a> </div>
                <div class="slider-items slider-width-col4 products-grid block-content">
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                          <div class="new-label new-top-right">new</div>
                          <div class="box-hover">
                            <ul class="add-to-links">
                              <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                              </li>
                              <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                              </li>
                              <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                          <div class="rating">
                            <div class="ratings">
                              <div class="rating-box">
                                <div class="rating width80"></div>
                              </div>
                              <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                            </div>
                          </div>
                          <div class="item-content">
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span>
                              </div>
                            </div>
                            <div class="action">
                              <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <!-- Item -->
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                          <div class="box-hover">
                            <ul class="add-to-links">
                              <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                              </li>
                              <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                              </li>
                              <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating width80"></div>
                                </div>
                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$235.00</span> </span>
                              </div>
                            </div>
                            <div class="action">
                              <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Item -->
  
                  <!-- Item -->
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                          <div class="box-hover">
                            <ul class="add-to-links">
                              <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                              </li>
                              <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                              </li>
                              <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating width80"></div>
                                </div>
                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$325.00</span> </span>
                              </div>
                            </div>
                            <div class="action">
                              <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Item -->
  
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                          <div class="new-label new-top-left">new</div>
                          <div class="box-hover">
                            <ul class="add-to-links">
                              <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                              </li>
                              <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                              </li>
                              <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating width80"></div>
                                </div>
                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$425.00</span> </span>
                              </div>
                            </div>
                            <div class="action">
                              <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <!-- Item -->
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                          <div class="box-hover">
                            <ul class="add-to-links">
                              <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                              </li>
                              <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                              </li>
                              <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating width80"></div>
                                </div>
                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$525.00</span> </span>
                              </div>
                            </div>
                            <div class="action">
                              <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Item -->
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                          <div class="box-hover">
                            <ul class="add-to-links">
                              <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                              </li>
                              <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                              </li>
                              <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating width80"></div>
                                </div>
                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span>
                              </div>
                            </div>
                            <div class="action">
                              <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Item -->
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                          <div class="box-hover">
                            <ul class="add-to-links">
                              <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                              </li>
                              <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                              </li>
                              <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating width80"></div>
                                </div>
                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$185.00</span> </span>
                              </div>
                            </div>
                            <div class="action">
                              <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Item -->
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End featured Slider -->
  
      <!-- new arrivals slider -->
      <!-- bestsell Slider -->
      <section class="new-arrivals-pro">
        <div class="container">
          <div class="slider-items-products">
            <div class="new-arrivals-block">
              <div id="new-arrivals-slider" class="product-flexslider hidden-buttons">
                <div class="home-block-inner">
                  <div class="block-title">
                    <h2>Special<br>
                    <em>Product</em></h2>
                  </div>
                  <div class="pretext">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Curabitur eu odio non justo euismod congue ut nec orci.</div>
                  <a href="{{route('grid')}}" class="view_more_bnt">View All</a> </div>
                <div class="slider-items slider-width-col4 products-grid block-content">
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                          <div class="new-label new-top-right">new</div>
                          <div class="box-hover">
                            <ul class="add-to-links">
                              <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                              </li>
                              <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                              </li>
                              <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                          <div class="rating">
                            <div class="ratings">
                              <div class="rating-box">
                                <div class="rating width80"></div>
                              </div>
                              <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                            </div>
                          </div>
                          <div class="item-content">
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$245.00</span> </span>
                              </div>
                            </div>
                            <div class="action">
                              <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <!-- Item -->
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                          <div class="box-hover">
                            <ul class="add-to-links">
                              <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                              </li>
                              <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                              </li>
                              <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating width80"></div>
                                </div>
                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span> </span>
                              </div>
                            </div>
                            <div class="action">
                              <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Item -->
  
                  <!-- Item -->
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                          <div class="box-hover">
                            <ul class="add-to-links">
                              <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                              </li>
                              <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                              </li>
                              <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating width80"></div>
                                </div>
                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$185.00</span> </span>
                              </div>
                            </div>
                            <div class="action">
                              <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Item -->
  
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                          <div class="new-label new-top-left">new</div>
                          <div class="box-hover">
                            <ul class="add-to-links">
                              <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                              </li>
                              <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                              </li>
                              <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating width80"></div>
                                </div>
                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$235.00</span> </span>
                              </div>
                            </div>
                            <div class="action">
                              <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <!-- Item -->
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                          <div class="box-hover">
                            <ul class="add-to-links">
                              <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                              </li>
                              <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                              </li>
                              <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating width80"></div>
                                </div>
                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span>
                              </div>
                            </div>
                            <div class="action">
                              <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Item -->
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                          <div class="box-hover">
                            <ul class="add-to-links">
                              <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                              </li>
                              <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                              </li>
                              <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating width80"></div>
                                </div>
                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$335.00</span> </span>
                              </div>
                            </div>
                            <div class="action">
                              <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Item -->
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a class="product-image" title="Retis lapen casen" href="{{route('product.details')}}"> <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850"> </a>
                          <div class="box-hover">
                            <ul class="add-to-links">
                              <li><a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                              </li>
                              <li><a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                              </li>
                              <li><a class="link-compare" href="{{route('compare')}}">Compare</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"><h4><a title="Retis lapen casen" href="{{route('product.details')}}"> Retis lapen casen </a></h4></div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating width80"></div>
                                </div>
                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span>
                              </div>
                            </div>
                            <div class="action">
                              <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Item -->
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End New  Arrivals Slider -->
  
      <!-- bottom banner section -->
      <div class="bottom-banner-section">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="bottom-banner-img1"> <img src="http://via.placeholder.com/390x240" alt="bottom banner">
                <div class="bottom-img-info1">
                  <h3>Handbags</h3>
                  <span class="line"></span> </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <a href="#" class="bottom-banner-img1"> <img src="http://via.placeholder.com/390x240" alt="bottom banner">
                <div class="bottom-img-info1">
                  <h3>Electronics</h3>
                  <span class="line"></span> </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="bottom-banner-img1"> <img src="http://via.placeholder.com/390x240" alt="bottom banner"><span class="banner-overly"></span>
                <div class="bottom-img-info1">
                  <h3>Men Shoes</h3>
                  <span class="line"></span> </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="bottom-banner-img1"><img src="http://via.placeholder.com/390x240" alt="bottom banner"> <span class="banner-overly"></span>
                <div class="bottom-img-info1">
                  <h3>Furniture</h3>
                  <span class="line"></span> </div>
              </div>
            </div>
            <div class="col-md-8 col-sm-12">
              <div class="bottom-banner-img1 last"><img src="http://via.placeholder.com/810x240" alt="bottom banner"> <span class="banner-overly"></span>
                <div class="bottom-img-info last">
                  <h3>up to <span>25%</span> off</h3>
                  <h6>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Latest Blog -->
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="blog-outer-container">
              <div class="new_title">
                <h2><strong>Latest</strong> Blog</h2>
              </div>
              <div class="blog-inner">
                <div class="col-lg-6 col-md-6 col-sm-6 blog-preview_item">
                  <div class="entry-thumb image-hover2">
                    <a href="{{route('blog.single')}}"> <img alt="Blog" src="http://via.placeholder.com/1140x450"> </a>
                  </div>
                  <div class="blog-preview_info">
                    <ul class="post-meta">
                      <li><i class="fa fa-user"></i>posted by <a href="#">admin</a>
                      </li>
                      <li><i class="fa fa-comments"></i><a href="#">8 comments</a>
                      </li>
                      <li><i class="fa fa-calendar"></i>2018-01-15 08:55:22</li>
                    </ul>
                    <h4 class="blog-preview_title"><a href="{{route('blog.single')}}">Standard blog post with photo</a></h4>
                    <div class="blog-preview_desc">Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips.</div>
                    <a class="blog-preview_btn" href="{{route('blog.single')}}">READ MORE</a> </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 blog-preview_item">
                  <div class="entry-thumb image-hover2">
                    <a href="{{route('blog.single')}}"> <img alt="Blog" src="http://via.placeholder.com/1140x450"> </a>
                  </div>
                  <div class="blog-preview_info">
                    <ul class="post-meta">
                      <li><i class="fa fa-user"></i>posted by <a href="#">admin</a>
                      </li>
                      <li><i class="fa fa-comments"></i><a href="#">4 comments</a>
                      </li>
                      <li><i class="fa fa-calendar"></i>2018-01-05 07:01:49</li>
                    </ul>
                    <h4 class="blog-preview_title"><a href="{{route('blog.single')}}">Standard blog post with photo</a></h4>
                    <div class="blog-preview_desc">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros.</div>
                    <a class="blog-preview_btn" href="{{route('blog.single')}}">READ MORE</a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- Brand Logo -->
    @include('frontend.includes.brand-logo')

    <!-- our features -->
    @include('frontend.includes.features-box')
@endsection
