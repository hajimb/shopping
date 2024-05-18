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
                        <li class="category1599"> <a href="{{route('list')}}" title="">Women</a> <span>/ </span> </li>
                        <li class="category1600"> <a href="{{route('list')}}" title="">Styliest Bag</a> <span>/</span> </li>
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
                                    <div class="item"> <a href="#"><img alt="category-img"
                                                src="http://via.placeholder.com/915x390"></a>
                                        <div class="cat-img-title cat-bg cat-box">
                                            <div class="small-tag"><span>Sale</span> 10% OFF</div>
                                            <h2 class="cat-heading">Women Collection</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                        </div>
                                    </div>
                                    <!-- End Item -->

                                    <!-- Item -->
                                    <div class="item"> <a href="#"><img alt="category-img"
                                                src="http://via.placeholder.com/915x390"></a>

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
                                <div class="view-mode"> <a class="button button-grid" title="Grid"
                                        href="{{route('list')}}">&nbsp;</a><span class="button button-active button-list"
                                        title="List">&nbsp;</span> </div>
                            </div>
                        </div>
                        <div class="category-products">
                            <ol class="products-list" id="products-list">
                                <li class="item first">
                                    <div class="product-image"> <a href="{{route('product.details')}}" title="HTC Rhyme Sense"> <img
                                                class="small-image" src="http://via.placeholder.com/700x850"
                                                alt="HTC Rhyme Sense"> </a> </div>
                                    <div class="product-shop">
                                        <h2 class="product-name"><a href="{{route('product.details')}}" title="HTC Rhyme Sense">HTC
                                                Rhyme Sense</a></h2>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div style="width:50%" class="rating"></div>
                                            </div>
                                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span
                                                    class="separator">|</span> <a href="#review-form">Add Your Review</a>
                                            </p>
                                        </div>
                                        <div class="desc std">
                                            <p>Sed volutpat ac massa eget
                                                lacinia.
                                                Aenean volutpat lacus at dolor blandit </p>
                                            <p>Sed sed interdum diam. Donec sit ametenim tempor, dapibus nunc eu,
                                                tincidunt mi. Vivamus dictum nec... <a class="link-learn" title=""
                                                    href="{{route('product.details')}}">Learn More</a> </p>
                                        </div>
                                        <div class="price-box">
                                            <p class="old-price"> <span class="price-label"></span> <span class="price">
                                                    $442.99 </span> </p>
                                            <p class="special-price"> <span class="price-label"></span> <span
                                                    class="price"> $222.99 </span> </p>
                                        </div>
                                        <div class="actions">
                                            <button class="button btn-cart ajx-cart" title="Add to Cart"
                                                type="button"><span>Add to Cart</span></button>
                                            <span class="add-to-links"> <a title="Add to Wishlist"
                                                    class="button link-wishlist" href="{{route('users.whishlist')}}"><span>Add to
                                                        Wishlist</span></a> <a title="Add to Compare"
                                                    class="button link-compare" href="{{route('compare')}}"><span>Add to
                                                        Compare</span></a> </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="item even">
                                    <div class="product-image"> <a href="{{route('product.details')}}"
                                            title="Microsoft Natural Keyboard"> <img class="small-image"
                                                src="http://via.placeholder.com/700x850" alt="Microsoft Natural Keyboard">
                                        </a> </div>
                                    <div class="product-shop">
                                        <h2 class="product-name"><a href="{{route('product.details')}}"
                                                title="Microsoft Natural Keyboard">Microsoft Natural Keyboard</a></h2>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div style="width:10%" class="rating"></div>
                                            </div>
                                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span
                                                    class="separator">|</span> <a href="#review-form">Add Your Review</a>
                                            </p>
                                        </div>
                                        <div class="desc std">
                                            <p>Sed volutpat ac massa eget
                                                lacinia. Suspendisse non purus semper, tellus vel, tristique urna.
                                                Aenean volutpat lacus at dolor blandit. </p>
                                            <p>Sed sed interdum diam. Donec sit ametenim tempor, dapibus nunc eu,
                                                tincidunt mi. Vivamus dignissimm ... <a class="link-learn" title=""
                                                    href="{{route('product.details')}}">Learn More</a></p>
                                        </div>
                                        <div class="price-box"> <span class="regular-price"> <span
                                                    class="price">$99.99</span> </span> </div>
                                        <div class="actions">
                                            <button class="button btn-cart ajx-cart" title="Add to Cart"
                                                type="button"><span>Add to Cart</span></button>
                                            <span class="add-to-links"> <a title="Add to Wishlist"
                                                    class="button link-wishlist" href="{{route('users.whishlist')}}"><span>Add to
                                                        Wishlist</span></a> <a title="Add to Compare"
                                                    class="button link-compare" href="{{route('compare')}}"><span>Add to
                                                        Compare</span></a> </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="item odd">
                                    <div class="product-image"> <a href="{{route('product.details')}}"
                                            title="30&quot; Flat-Panel HD Monitor"> <img class="small-image"
                                                src="http://via.placeholder.com/700x850"
                                                alt="30&quot; Flat-Panel HD Monitor"> </a> </div>
                                    <div class="product-shop">
                                        <h2 class="product-name"><a href="{{route('product.details')}}"
                                                title="30&quot; Flat-Panel HD Monitor">30" Flat-Panel HD Monitor</a></h2>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div style="width:0%" class="rating"></div>
                                            </div>
                                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span
                                                    class="separator">|</span> <a href="#review-form">Add Your Review</a>
                                            </p>
                                        </div>
                                        <div class="desc std">Computer games, digital photo
                                            editing and graphic applications will astound you on this huge 30"
                                            flat-panel monitor.
                                            <p>Sed sed interdum diam. Donec sit ametenim tempor, dapibus nunc eu,
                                                tincidunt mi. </p>
                                            <p>Phasellus consequat id purus in convallis. Nulla quis... <a
                                                    class="link-learn" title="" href="{{route('product.details')}}">Learn
                                                    More</a></p>
                                        </div>
                                        <div class="price-box"> <span class="regular-price"> <span
                                                    class="price">$699.99</span> </span> </div>
                                        <div class="actions">
                                            <button class="button btn-cart ajx-cart" title="Add to Cart"
                                                type="button"><span>Add to Cart</span></button>
                                            <span class="add-to-links"> <a title="Add to Wishlist"
                                                    class="button link-wishlist" href="{{route('users.whishlist')}}"><span>Add to
                                                        Wishlist</span></a> <a title="Add to Compare"
                                                    class="button link-compare" href="{{route('compare')}}"><span>Add to
                                                        Compare</span></a> </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="item even">
                                    <div class="product-image"> <a href="{{route('product.details')}}"
                                            title="19&quot; Widescreen LCD Monitor"> <img class="small-image"
                                                src="http://via.placeholder.com/700x850"
                                                alt="19&quot; Widescreen LCD Monitor"> </a> </div>
                                    <div class="product-shop">
                                        <h2 class="product-name"><a href="{{route('product.details')}}"
                                                title="19&quot; Widescreen LCD Monitor">19" Widescreen LCD Monitor</a></h2>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div class="rating width80"></div>
                                            </div>
                                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span
                                                    class="separator">|</span> <a href="#review-form">Add Your Review</a>
                                            </p>
                                        </div>
                                        <div class="desc std">2 ms response time; 10,000:1 contrast ratio; 300 cd/m²
                                            brightness; 1440 x 900 maximum resolution; DVI-D and 15-pin D-sub inputs
                                            <p>Phasellus consequat id purus
                                                pretium enimnec, tristique... <a class="link-learn" title=""
                                                    href="{{route('product.details')}}">Learn More</a> </p>
                                        </div>
                                        <div class="price-box"> <span class="regular-price"> <span
                                                    class="price">$399.99</span> </span> </div>
                                        <div class="actions">
                                            <button class="button btn-cart ajx-cart" title="Add to Cart"
                                                type="button"><span>Add to Cart</span></button>
                                            <span class="add-to-links"> <a title="Add to Wishlist"
                                                    class="button link-wishlist" href="{{route('users.whishlist')}}"><span>Add to
                                                        Wishlist</span></a> <a title="Add to Compare"
                                                    class="button link-compare" href="{{route('compare')}}"><span>Add to
                                                        Compare</span></a> </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="item odd">
                                    <div class="product-image"> <a href="{{route('product.details')}}" title="Seagate 250GB HD ">
                                            <img class="small-image" src="http://via.placeholder.com/700x850"
                                                alt="Seagate 250GB HD "> </a> </div>
                                    <div class="product-shop">
                                        <h2 class="product-name"><a href="{{route('product.details')}}"
                                                title="Seagate 250GB HD ">Seagate 250GB HD </a></h2>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div style="width:100%" class="rating"></div>
                                            </div>
                                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span
                                                    class="separator">|</span> <a href="#review-form">Add Your Review</a>
                                            </p>
                                        </div>
                                        <div class="desc std">1 TB - 7200RPM, SATA 3.0Gb/s, 32MB Cache
                                            <p>Maecenas vehicula volutpat elit, in interdum lacus faucibus sit amet. </p>
                                            <p>Sed sed interdum diam. Donec sit ametenim tempor, dapibus nunc eu,
                                                tincidunt mi. Vivamus dignissim nisl. Donec eget feugiat ante.
                                                Integerarcu libero, dictum nec congue sed, faucibus ... <a
                                                    class="link-learn" title="" href="{{route('product.details')}}">Learn
                                                    More</a> </p>
                                        </div>
                                        <div class="price-box"> <span class="regular-price"> <span
                                                    class="price">$99.00</span> </span> </div>
                                        <div class="actions">
                                            <button class="button btn-cart ajx-cart" title="Add to Cart"
                                                type="button"><span>Add to Cart</span></button>
                                            <span class="add-to-links"> <a title="Add to Wishlist"
                                                    class="button link-wishlist" href="{{route('users.whishlist')}}"><span>Add to
                                                        Wishlist</span></a> <a title="Add to Compare"
                                                    class="button link-compare" href="{{route('compare')}}"><span>Add to
                                                        Compare</span></a> </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="item even">
                                    <div class="product-image"> <a href="{{route('product.details')}}" title="Seagate 500GB HD">
                                            <img class="small-image" src="http://via.placeholder.com/700x850"
                                                alt="Seagate 500GB HD"> </a> </div>
                                    <div class="product-shop">
                                        <h2 class="product-name"><a href="{{route('product.details')}}"
                                                title="Seagate 500GB HD">Seagate 500GB HD</a></h2>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div style="width:90%" class="rating"></div>
                                            </div>
                                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span
                                                    class="separator">|</span> <a href="#review-form">Add Your Review</a>
                                            </p>
                                        </div>
                                        <div class="desc std">1 TB - 7200RPM, SATA 3.0Gb/s, 32MB Cache
                                            <p>Aenean volutpat lacus at dolor blandit,
                                                vitae lobortisante semper. Ut
                                                bibendum metusfringilla, in interdum lacus faucibus sit amet. </p>
                                            <p> Donec eget feugiat ante.
                                                Integerarcu libero... <a class="link-learn" title=""
                                                    href="{{route('product.details')}}">Learn More</a> </p>
                                        </div>
                                        <div class="price-box"> <span class="regular-price"> <span
                                                    class="price">$299<span class="sub">.00</span></span> </span>
                                        </div>
                                        <div class="actions">
                                            <button class="button btn-cart ajx-cart" title="Add to Cart"
                                                type="button"><span>Add to Cart</span></button>
                                            <span class="add-to-links"> <a title="Add to Wishlist"
                                                    class="button link-wishlist" href="{{route('users.whishlist')}}"><span>Add to
                                                        Wishlist</span></a> <a title="Add to Compare"
                                                    class="button link-compare" href="{{route('compare')}}"><span>Add to
                                                        Compare</span></a> </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="item odd">
                                    <div class="product-image"> <a href="{{route('product.details')}}"
                                            title="Intel Core 2 Extreme QX9775"> <img class="small-image"
                                                src="http://via.placeholder.com/700x850"
                                                alt="Intel Core 2 Extreme QX9775"> </a> </div>
                                    <div class="product-shop">
                                        <h2 class="product-name"><a href="{{route('product.details')}}"
                                                title="Intel Core 2 Extreme QX9775">Intel Core 2 Extreme QX9775</a></h2>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div style="width:60%" class="rating"></div>
                                            </div>
                                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span
                                                    class="separator">|</span> <a href="#review-form">Add Your Review</a>
                                            </p>
                                        </div>
                                        <div class="desc std">Intel Core 2 Extreme QX9775
                                            Processor BX80574QX9775 - 45nm, 3.20GHz, 12MB Cache, 1600MHz FSB,
                                            <p>Vivamus dignissim nisl eu euismod ullamcorper. Donec
                                                pellentesque diam id est tristique vestibulum. Donec eget feugiat ante.
                                                Integerarcu libero, dictum nec congue sed, faucibus sit amet lectus. </p>
                                            <p>Phasellus consequat... <a class="link-learn" title=""
                                                    href="{{route('product.details')}}">Learn More</a> </p>
                                        </div>
                                        <div class="price-box"> <span class="regular-price"> <span
                                                    class="price">$2,049.99</span> </span> </div>
                                        <div class="actions">
                                            <button class="button btn-cart ajx-cart" title="Add to Cart"
                                                type="button"><span>Add to Cart</span></button>
                                            <span class="add-to-links"> <a title="Add to Wishlist"
                                                    class="button link-wishlist" href="{{route('users.whishlist')}}"><span>Add to
                                                        Wishlist</span></a> <a title="Add to Compare"
                                                    class="button link-compare" href="{{route('compare')}}"><span>Add to
                                                        Compare</span></a> </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="item even">
                                    <div class="product-image"> <a href="{{route('product.details')}}"
                                            title="24&quot; Widescreen LCD Monitor"> <img class="small-image"
                                                src="http://via.placeholder.com/700x850"
                                                alt="24&quot; Widescreen LCD Monitor"> </a> </div>
                                    <div class="product-shop">
                                        <h2 class="product-name"><a href="{{route('product.details')}}"
                                                title="24&quot; Widescreen LCD Monitor">24" Widescreen LCD Monitor</a></h2>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div style="width:20%" class="rating"></div>
                                            </div>
                                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span
                                                    class="separator">|</span> <a href="#review-form">Add Your Review</a>
                                            </p>
                                        </div>
                                        <div class="desc std">5 ms response time; 10,000:1 contrast ratio; 400 cd/m²
                                            brightness; 1920 x 1200 maximum resolution; DVI-D and 15-pin D-sub inputs
                                            <p> tellus vel, tristique urna. </p>
                                            <p>Phasellus consequat id purus in convallis. Nulla quis nunc auctor,
                                                pretium enimnec, tristique magna... <a class="link-learn" title=""
                                                    href="{{route('product.details')}}">Learn More</a> </p>
                                        </div>
                                        <div class="price-box"> <span class="regular-price"> <span
                                                    class="price">$699.99</span> </span> </div>
                                        <div class="actions">
                                            <button class="button btn-cart ajx-cart" title="Add to Cart"
                                                type="button"><span>Add to Cart</span></button>
                                            <span class="add-to-links"> <a title="Add to Wishlist"
                                                    class="button link-wishlist" href="{{route('users.whishlist')}}"><span>Add to
                                                        Wishlist</span></a> <a title="Add to Compare"
                                                    class="button link-compare" href="{{route('compare')}}"><span>Add to
                                                        Compare</span></a> </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="item odd">
                                    <div class="product-image"> <a href="{{route('product.details')}}"
                                            title="Logitech Optical Trackman"> <img class="small-image"
                                                src="http://via.placeholder.com/700x850" alt="Logitech Optical Trackman">
                                        </a> </div>
                                    <div class="product-shop">
                                        <h2 class="product-name"><a href="{{route('product.details')}}"
                                                title="Logitech Optical Trackman">Logitech Optical Trackman</a></h2>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div style="width:25%" class="rating"></div>
                                            </div>
                                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span
                                                    class="separator">|</span> <a href="#review-form">Add Your Review</a>
                                            </p>
                                        </div>
                                        <div class="desc std">Our most advanced trackball yet.

                                            Save space and eliminate desktop clutter.
                                            <p>Donec eget feugiat ante.
                                                Integerarcu libero, dictum nec congue sed, faucibus sit amet lectus. </p>
                                            <p>Vivamus vitae arcu faucibus, dictum
                                                magna vel, adipiscing... <a class="link-learn" title=""
                                                    href="{{route('product.details')}}">Learn More</a> </p>
                                        </div>
                                        <div class="price-box"> <span class="regular-price"> <span
                                                    class="price">$79.99</span> </span> </div>
                                        <div class="actions">
                                            <button class="button btn-cart ajx-cart" title="Add to Cart"
                                                type="button"><span>Add to Cart</span></button>
                                            <span class="add-to-links"> <a title="Add to Wishlist"
                                                    class="button link-wishlist" href="{{route('users.whishlist')}}"><span>Add to
                                                        Wishlist</span></a> <a title="Add to Compare"
                                                    class="button link-compare" href="{{route('compare')}}"><span>Add to
                                                        Compare</span></a> </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="item last even">
                                    <div class="product-image"> <a href="{{route('product.details')}}"
                                            title="Logitech diNovo Edge Keyboard"> <img class="small-image"
                                                src="http://via.placeholder.com/700x850"
                                                alt="Logitech diNovo Edge Keyboard"> </a> </div>
                                    <div class="product-shop">
                                        <h2 class="product-name"><a href="{{route('product.details')}}"
                                                title="Logitech diNovo Edge Keyboard">Logitech diNovo Edge Keyboard</a>
                                        </h2>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div class="rating width80"></div>
                                            </div>
                                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span
                                                    class="separator">|</span> <a href="#">Add Your Review</a> </p>
                                        </div>
                                        <div class="desc std">Li-Ion powered.
                                            <p>Sed volutpat ac massa eget lacinia. Suspendisse non purus semper,
                                                vitae lobortisante semper. </p>
                                            <p>Integerarcu libero, dictum nec congue sed, faucibus sit... <a
                                                    class="link-learn" title="" href="{{route('product.details')}}">Learn
                                                    More</a> </p>
                                        </div>
                                        <div class="price-box"> <span class="regular-price"> <span
                                                    class="price">$239.99</span> </span> </div>
                                        <div class="actions">
                                            <button class="button btn-cart ajx-cart" title="Add to Cart"
                                                type="button"><span>Add to Cart</span></button>
                                            <span class="add-to-links"> <a title="Add to Wishlist"
                                                    class="button link-wishlist" href="{{route('users.whishlist')}}"><span>Add to
                                                        Wishlist</span></a> <a title="Add to Compare"
                                                    class="button link-compare" href="{{route('compare')}}"><span>Add to
                                                        Compare</span></a> </span>
                                        </div>
                                    </div>
                                </li>
                            </ol>
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
                                            <a class="button-asc left" href="#"
                                                title="Set Descending Direction"><span class="top_arrow"></span></a>
                                        </div>
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
                                    <li> <a class="active" href="{{route('list')}}">Women</a> <span
                                            class="subDropdown plus"></span>
                                        <ul>
                                            <li> <a href="{{route('list')}}"> Tops </a> <span class="subDropdown plus"></span>
                                                <ul class="level1">
                                                    <li> <a href="{{route('list')}}"> Evening Tops </a> </li>
                                                    <li> <a href="{{route('list')}}"> Shirts &amp; Blouses </a> </li>
                                                    <li> <a href="{{route('list')}}"> Tunics </a> </li>
                                                    <li> <a href="{{route('list')}}"> Vests </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="{{route('list')}}"> Bags </a> <span class="subDropdown plus"></span>
                                                <ul class="level1">
                                                    <li> <a href="{{route('list')}}"> Bags </a> </li>
                                                    <li> <a href="{{route('list')}}"> Designer Handbags </a> </li>
                                                    <li> <a href="{{route('list')}}"> Purses </a> </li>
                                                    <li> <a href="{{route('list')}}"> Shoulder Bags </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="{{route('list')}}"> Shoes </a> <span class="subDropdown plus"></span>
                                                <ul class="level1">
                                                    <li> <a href="{{route('list')}}"> Flat Shoes </a> </li>
                                                    <li> <a href="{{route('list')}}"> Flat Sandals </a> </li>
                                                    <li> <a href="{{route('list')}}"> Boots </a> </li>
                                                    <li> <a href="{{route('list')}}"> Heels </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="{{route('list')}}"> Jewellery </a>
                                                <ul class="level1">
                                                    <li> <a href="{{route('list')}}"> Bracelets </a> </li>
                                                    <li> <a href="{{route('list')}}"> Necklaces &amp; Pendants </a> </li>
                                                    <li> <a href="{{route('list')}}"> Pins &amp; Brooches </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="{{route('list')}}"> Dresses </a> <span class="subDropdown plus"></span>
                                                <ul class="level1">
                                                    <li> <a href="{{route('list')}}"> Casual Dresses </a> </li>
                                                    <li> <a href="{{route('list')}}"> Evening </a> </li>
                                                    <li> <a href="{{route('list')}}"> Designer </a> </li>
                                                    <li> <a href="{{route('list')}}"> Party </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="{{route('list')}}"> Lingerie </a> <span class="subDropdown plus"></span>
                                                <ul class="level1">
                                                    <li> <a href="{{route('list')}}"> Bras </a> </li>
                                                    <li> <a href="{{route('list')}}"> Bodies </a> </li>
                                                    <li> <a href="{{route('list')}}"> Lingerie Sets </a> </li>
                                                    <li> <a href="{{route('list')}}"> Shapewear </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="{{route('list')}}"> Jackets </a> <span class="subDropdown plus"></span>
                                                <ul class="level1">
                                                    <li> <a href="{{route('list')}}"> Coats </a> </li>
                                                    <li> <a href="{{route('list')}}"> Jackets </a> </li>
                                                    <li> <a href="{{route('list')}}"> Leather Jackets </a> </li>
                                                    <li> <a href="{{route('list')}}"> Blazers </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="{{route('list')}}"> Swimwear </a> <span class="subDropdown plus"></span>
                                                <ul class="level1">
                                                    <li> <a href="{{route('list')}}"> Swimsuits </a> </li>
                                                    <li> <a href="{{route('list')}}"> Beach Clothing </a> </li>
                                                    <li> <a href="{{route('list')}}"> Bikinis </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                        </ul>
                                        <!--level0-->
                                    </li>
                                    <!--level 0-->
                                    <li> <a href="{{route('list')}}">Men</a> <span class="subDropdown plus"></span>
                                        <ul class="level0_455" style="display:none">
                                            <li> <a href="{{route('list')}}"> Shoes </a> <span class="subDropdown plus"></span>
                                                <ul class="level1">
                                                    <li> <a href="{{route('list')}}"> Flat Shoes </a> </li>
                                                    <li> <a href="{{route('list')}}"> Boots </a> </li>
                                                    <li> <a href="{{route('list')}}"> Heels </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="{{route('list')}}"> Jewellery </a> <span
                                                    class="subDropdown plus"></span>
                                                <ul class="level1">
                                                    <li> <a href="{{route('list')}}"> Bracelets </a> </li>
                                                    <li> <a href="{{route('list')}}"> Necklaces &amp; Pendants </a> </li>
                                                    <li> <a href="{{route('list')}}"> Pins &amp; Brooches </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="{{route('list')}}"> Dresses </a> <span class="subDropdown plus"></span>
                                                <ul class="level1">
                                                    <li> <a href="{{route('list')}}"> Casual Dresses </a> </li>
                                                    <li> <a href="{{route('list')}}"> Evening </a> </li>
                                                    <li> <a href="{{route('list')}}"> Designer </a> </li>
                                                    <li> <a href="{{route('list')}}"> Party </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="{{route('list')}}"> Jackets </a> <span class="subDropdown plus"></span>
                                                <ul class="level1">
                                                    <li> <a href="{{route('list')}}"> Coats </a> </li>
                                                    <li> <a href="{{route('list')}}"> Jackets </a> </li>
                                                    <li> <a href="{{route('list')}}"> Leather Jackets </a> </li>
                                                    <li> <a href="{{route('list')}}"> Blazers </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="{{route('list')}}"> Swimwear </a> <span class="subDropdown plus"></span>
                                                <ul class="level1">
                                                    <li> <a href="{{route('list')}}"> Swimsuits </a> </li>
                                                    <li> <a href="{{route('list')}}"> Beach Clothing </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                        </ul>
                                        <!--level0-->
                                    </li>
                                    <!--level 0-->
                                    <li> <a href="{{route('list')}}">Electronics</a> <span class="subDropdown plus"></span>
                                        <ul class="level0_482" style="display:none">
                                            <li> <a href="{{route('list')}}"> Smartphones </a> <span
                                                    class="subDropdown plus"></span>
                                                <ul class="level1">
                                                    <li> <a href="{{route('list')}}"> Samsung </a> </li>
                                                    <li> <a href="{{route('list')}}"> Apple </a> </li>
                                                    <li> <a href="{{route('list')}}"> Blackberry </a> </li>
                                                    <li> <a href="{{route('list')}}"> Nokia </a> </li>
                                                    <li> <a href="{{route('list')}}"> HTC </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="{{route('list')}}"> Cameras </a> <span class="subDropdown plus"></span>
                                                <ul class="level1">
                                                    <li> <a href="{{route('list')}}"> Digital Cameras </a> </li>
                                                    <li> <a href="{{route('list')}}"> Camcorders </a> </li>
                                                    <li> <a href="{{route('list')}}"> Lenses </a> </li>
                                                    <li> <a href="{{route('list')}}"> Filters </a> </li>
                                                    <li> <a href="{{route('list')}}"> Tripod </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="{{route('list')}}"> Accesories </a> <span
                                                    class="subDropdown plus"></span>
                                                <ul class="level1">
                                                    <li> <a href="{{route('list')}}"> HeadSets </a> </li>
                                                    <li> <a href="{{route('list')}}"> Batteries </a> </li>
                                                    <li> <a href="{{route('list')}}"> Screen Protectors </a> </li>
                                                    <li> <a href="{{route('list')}}"> Memory Cards </a> </li>
                                                    <li> <a href="{{route('list')}}"> Cases </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                        </ul>
                                        <!--level0-->
                                    </li>
                                    <!--level 0-->
                                    <li> <a href="{{route('list')}}">Digital</a> </li>
                                    <!--level 0-->
                                    <li class="last"> <a href="{{route('list')}}">Fashion</a> </li>
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
