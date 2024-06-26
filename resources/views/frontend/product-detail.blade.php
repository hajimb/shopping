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
    <section class="main-container col1-layout">
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-main">
                        <div class="product-view">
                            <div class="product-essential">
                                <form action="#" method="post" id="product_addtocart_form">
                                    <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
                                    <div class="product-img-box col-lg-4 col-sm-5 col-xs-12">
                                        <div class="new-label new-top-left"> New </div>
                                        <div class="product-image">
                                            <div class="product-full"> <img id="product-zoom"
                                                    src="http://via.placeholder.com/700x850"
                                                    data-zoom-image="http://via.placeholder.com/700x850"
                                                    alt="product-image" /> </div>
                                            <div class="more-views">
                                                <div class="slider-items-products">
                                                    <div id="gallery_01"
                                                        class="product-flexslider hidden-buttons product-img-thumb">
                                                        <div class="slider-items slider-width-col4 block-content">
                                                            <div class="more-views-items"> <a href="#"
                                                                    data-image="http://via.placeholder.com/700x850"
                                                                    data-zoom-image="http://via.placeholder.com/700x850">
                                                                    <img id="product-zoom"
                                                                        src="http://via.placeholder.com/700x850"
                                                                        alt="product-image" /> </a></div>
                                                            <div class="more-views-items"> <a href="#"
                                                                    data-image="http://via.placeholder.com/700x850"
                                                                    data-zoom-image="http://via.placeholder.com/700x850">
                                                                    <img id="product-zoom"
                                                                        src="http://via.placeholder.com/700x850"
                                                                        alt="product-image" /> </a></div>
                                                            <div class="more-views-items"> <a href="#"
                                                                    data-image="http://via.placeholder.com/700x850"
                                                                    data-zoom-image="http://via.placeholder.com/700x850">
                                                                    <img id="product-zoom"
                                                                        src="http://via.placeholder.com/700x850"
                                                                        alt="product-image" /> </a></div>
                                                            <div class="more-views-items"> <a href="#"
                                                                    data-image="http://via.placeholder.com/700x850"
                                                                    data-zoom-image="http://via.placeholder.com/700x850">
                                                                    <img id="product-zoom"
                                                                        src="http://via.placeholder.com/700x850"
                                                                        alt="product-image" /> </a> </div>
                                                            <div class="more-views-items"> <a href="#"
                                                                    data-image="http://via.placeholder.com/700x850"
                                                                    data-zoom-image="http://via.placeholder.com/700x850">
                                                                    <img id="product-zoom"
                                                                        src="http://via.placeholder.com/700x850"
                                                                        alt="product-image" /> </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end: more-images -->
                                    </div>
                                    <div class="product-shop col-lg-8 col-sm-7 col-xs-12">
                                        <div class="product-next-prev"> <a class="product-next"
                                                href="#"><span></span></a> <a class="product-prev"
                                                href="#"><span></span></a> </div>
                                        <div class="product-name">
                                            <h1>Wholesale Charming Blouse</h1>
                                        </div>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div style="width:60%" class="rating"></div>
                                            </div>
                                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span
                                                    class="separator">|</span> <a href="#">Add Your Review</a> </p>
                                        </div>
                                        <div class="price-block">
                                            <div class="price-box">
                                                <p class="special-price"> <span class="price-label">Special Price</span>
                                                    <span id="product-price-48" class="price"> $309.99 </span>
                                                </p>
                                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span
                                                        class="price"> $315.99 </span> </p>
                                                <p class="availability in-stock pull-right"><span>In Stock</span></p>
                                            </div>
                                        </div>
                                        <div class="short-description">
                                            <h2>Quick Overview</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue
                                                nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi
                                                ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate
                                                adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque
                                                aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum
                                                turpis eros eget velit. Donec ac tempus ante. </p>
                                        </div>
                                        <div class="add-to-box">
                                            <div class="add-to-cart">
                                                <div class="pull-left">
                                                    <div class="custom pull-left">
                                                        <button
                                                            onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;"
                                                            class="reduced items-count" type="button"><i
                                                                class="fa fa-minus">&nbsp;</i></button>
                                                        <input type="text" class="input-text qty" title="Qty"
                                                            value="1" maxlength="12" id="qty" name="qty">
                                                        <button
                                                            onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;"
                                                            class="increase items-count" type="button"><i
                                                                class="fa fa-plus">&nbsp;</i></button>
                                                    </div>
                                                </div>
                                                <button class="button btn-cart" title="Add to Cart" type="button">Add to
                                                    Cart</button>
                                            </div>
                                            <div class="email-addto-box">
                                                <ul class="add-to-links">
                                                    <li> <a class="link-wishlist" href="{{route('users.whishlist')}}"><span>Add to
                                                                Wishlist</span></a></li>
                                                    <li><span class="separator">|</span> <a class="link-compare"
                                                            href="{{route('compare')}}"><span>Add to Compare</span></a></li>
                                                </ul>
                                                <p class="email-friend"><a href="#" class=""><span>Email to a
                                                            Friend</span></a></p>
                                            </div>
                                        </div>
                                        <div class="social">
                                            <ul class="link">
                                                <li class="fb"><a href="#"></a></li>
                                                <li class="tw"><a href="#"></a></li>
                                                <li class="googleplus"><a href="#"></a></li>
                                                <li class="rss"><a href="#"></a></li>
                                                <li class="pintrest"><a href="#"></a></li>
                                                <li class="linkedin"><a href="#"></a></li>
                                                <li class="youtube"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="product-collateral col-lg-12 col-sm-12 col-xs-12">
                        <div class="add_info">
                            <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                                <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Product
                                        Description </a> </li>
                                <li><a href="#product_tabs_tags" data-toggle="tab">Tags</a></li>
                                <li> <a href="#reviews_tabs" data-toggle="tab">Reviews</a> </li>
                                <li> <a href="#product_tabs_custom" data-toggle="tab">Custom Tab</a> </li>
                                <li> <a href="#product_tabs_custom1" data-toggle="tab">Custom Tab1</a> </li>
                            </ul>
                            <div id="productTabContent" class="tab-content">
                                <div class="tab-pane fade in active" id="product_tabs_description">
                                    <div class="std">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec
                                            est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare
                                            lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus
                                            eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget
                                            laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget
                                            velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus
                                            eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non
                                            neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor,
                                            lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio
                                            quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida
                                            vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi
                                            tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi,
                                            rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec
                                            aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue.
                                        </p>
                                        <p> Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis
                                            vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis
                                            in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend
                                            laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus
                                            malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia
                                            nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu,
                                            placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum.
                                            Quisque in arcu id dui vulputate mollis eget non arcu. Aenean et nulla purus.
                                            Mauris vel tellus non nunc mattis lobortis.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="product_tabs_tags">
                                    <div class="box-collateral box-tags">
                                        <div class="tags">
                                            <form id="addTagForm" action="#" method="get">
                                                <div class="form-add-tags">
                                                    <label for="productTagName">Add Tags:</label>
                                                    <div class="input-box">
                                                        <input class="input-text" name="productTagName"
                                                            id="productTagName" type="text">
                                                        <button type="button" title="Add Tags" class=" button btn-add"
                                                            onClick="submitTagForm()"> <span>Add Tags</span> </button>
                                                    </div>
                                                    <!--input-box-->
                                                </div>
                                            </form>
                                        </div>
                                        <!--tags-->
                                        <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="reviews_tabs">
                                    <div class="box-collateral box-reviews" id="customer-reviews">
                                        <div class="box-reviews1">
                                            <div class="form-add">
                                                <form id="review-form" method="post"
                                                    action="http://www.magikcommerce.com/review/product/post/id/176/">
                                                    <h3>Write Your Own Review</h3>
                                                    <fieldset>
                                                        <h4>How do you rate this product? <em class="required">*</em></h4>
                                                        <span id="input-message-box"></span>
                                                        <table id="product-review-table" class="data-table">
                                                            <colgroup>
                                                                <col>
                                                                <col width="1">
                                                                <col width="1">
                                                                <col width="1">
                                                                <col width="1">
                                                                <col width="1">
                                                            </colgroup>
                                                            <thead>
                                                                <tr class="first last">
                                                                    <th>&nbsp;</th>
                                                                    <th><span class="nobr">1 *</span></th>
                                                                    <th><span class="nobr">2 *</span></th>
                                                                    <th><span class="nobr">3 *</span></th>
                                                                    <th><span class="nobr">4 *</span></th>
                                                                    <th><span class="nobr">5 *</span></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="first odd">
                                                                    <th>Price</th>
                                                                    <td class="value"><input type="radio"
                                                                            class="radio" value="11" id="Price_1"
                                                                            name="ratings[3]"></td>
                                                                    <td class="value"><input type="radio"
                                                                            class="radio" value="12" id="Price_2"
                                                                            name="ratings[3]"></td>
                                                                    <td class="value"><input type="radio"
                                                                            class="radio" value="13" id="Price_3"
                                                                            name="ratings[3]"></td>
                                                                    <td class="value"><input type="radio"
                                                                            class="radio" value="14" id="Price_4"
                                                                            name="ratings[3]"></td>
                                                                    <td class="value last"><input type="radio"
                                                                            class="radio" value="15" id="Price_5"
                                                                            name="ratings[3]"></td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <th>Value</th>
                                                                    <td class="value"><input type="radio"
                                                                            class="radio" value="6" id="Value_1"
                                                                            name="ratings[2]"></td>
                                                                    <td class="value"><input type="radio"
                                                                            class="radio" value="7" id="Value_2"
                                                                            name="ratings[2]"></td>
                                                                    <td class="value"><input type="radio"
                                                                            class="radio" value="8" id="Value_3"
                                                                            name="ratings[2]"></td>
                                                                    <td class="value"><input type="radio"
                                                                            class="radio" value="9" id="Value_4"
                                                                            name="ratings[2]"></td>
                                                                    <td class="value last"><input type="radio"
                                                                            class="radio" value="10" id="Value_5"
                                                                            name="ratings[2]"></td>
                                                                </tr>
                                                                <tr class="last odd">
                                                                    <th>Quality</th>
                                                                    <td class="value"><input type="radio"
                                                                            class="radio" value="1" id="Quality_1"
                                                                            name="ratings[1]"></td>
                                                                    <td class="value"><input type="radio"
                                                                            class="radio" value="2" id="Quality_2"
                                                                            name="ratings[1]"></td>
                                                                    <td class="value"><input type="radio"
                                                                            class="radio" value="3" id="Quality_3"
                                                                            name="ratings[1]"></td>
                                                                    <td class="value"><input type="radio"
                                                                            class="radio" value="4" id="Quality_4"
                                                                            name="ratings[1]"></td>
                                                                    <td class="value last"><input type="radio"
                                                                            class="radio" value="5" id="Quality_5"
                                                                            name="ratings[1]"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <input type="hidden" value="" class="validate-rating"
                                                            name="validate_rating">
                                                        <div class="review1">
                                                            <ul class="form-list">
                                                                <li>
                                                                    <label class="required"
                                                                        for="nickname_field">Nickname<em>*</em></label>
                                                                    <div class="input-box">
                                                                        <input type="text" class="input-text"
                                                                            id="nickname_field" name="nickname">
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <label class="required"
                                                                        for="summary_field">Summary<em>*</em></label>
                                                                    <div class="input-box">
                                                                        <input type="text" class="input-text"
                                                                            id="summary_field" name="title">
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="review2">
                                                            <ul>
                                                                <li>
                                                                    <label class="required "
                                                                        for="review_field">Review<em>*</em></label>
                                                                    <div class="input-box">
                                                                        <textarea rows="3" cols="5" id="review_field" name="detail"></textarea>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="buttons-set">
                                                                <button class="button submit" title="Submit Review"
                                                                    type="submit"><span>Submit Review</span></button>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="box-reviews2">
                                            <h3>Customer Reviews</h3>
                                            <div class="box visible">
                                                <ul>
                                                    <li>
                                                        <table class="ratings-table">
                                                            <colgroup>
                                                                <col width="1">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <th>Value</th>
                                                                    <td>
                                                                        <div class="rating-box">
                                                                            <div class="rating" style="width:100%;"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Quality</th>
                                                                    <td>
                                                                        <div class="rating-box">
                                                                            <div class="rating" style="width:100%;"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Price</th>
                                                                    <td>
                                                                        <div class="rating-box">
                                                                            <div class="rating" style="width:100%;"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="review">
                                                            <h6><a href="#">Excellent</a></h6>
                                                            <small>Review by <span>Leslie Prichard </span>on 1/3/2018
                                                            </small>
                                                            <div class="review-txt"> I have purchased shirts from
                                                                Minimalism a few times and am never disappointed. The
                                                                quality is excellent and the shipping is amazing. It seems
                                                                like it's at your front door the minute you get off your pc.
                                                                I have received my purchases within two days - amazing.
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="even">
                                                        <table class="ratings-table">
                                                            <colgroup>
                                                                <col width="1">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <th>Value</th>
                                                                    <td>
                                                                        <div class="rating-box">
                                                                            <div class="rating" style="width:100%;"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Quality</th>
                                                                    <td>
                                                                        <div class="rating-box">
                                                                            <div class="rating" style="width:100%;"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Price</th>
                                                                    <td>
                                                                        <div class="rating-box">
                                                                            <div class="rating" style="width:80%;"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="review">
                                                            <h6><a href="#/catalog/product/view/id/60/">Amazing</a></h6>
                                                            <small>Review by <span>Sandra Parker</span>on 1/3/2018 </small>
                                                            <div class="review-txt"> Minimalism is the online ! </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <table class="ratings-table">
                                                            <colgroup>
                                                                <col width="1">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <th>Value</th>
                                                                    <td>
                                                                        <div class="rating-box">
                                                                            <div class="rating" style="width:100%;"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Quality</th>
                                                                    <td>
                                                                        <div class="rating-box">
                                                                            <div class="rating" style="width:100%;"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Price</th>
                                                                    <td>
                                                                        <div class="rating-box">
                                                                            <div class="rating" style="width:80%;"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="review">
                                                            <h6><a href="#/catalog/product/view/id/59/">Nicely</a></h6>
                                                            <small>Review by <span>Anthony Lewis</span>on 1/3/2018 </small>
                                                            <div class="review-txt last"> Unbeatable service and selection.
                                                                This store has the best business model I have seen on the
                                                                net. They are true to their word, and go the extra mile for
                                                                their customers. I felt like a purchasing partner more than
                                                                a customer. You have a lifetime client in me. </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="actions"> <a class="button view-all" id="revies-button"
                                                    href="#"><span><span>View all</span></span></a> </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="product_tabs_custom">
                                    <div class="product-tabs-content-inner clearfix">
                                        <p><strong>Lorem Ipsum</strong><span>&nbsp;is
                                                simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                                has been the industry's standard dummy text ever since the 1500s, when
                                                an unknown printer took a galley of type and scrambled it to make a type
                                                specimen book. It has survived not only five centuries, but also the
                                                leap into electronic typesetting, remaining essentially unchanged. It
                                                was popularised in the 1960s with the release of Letraset sheets
                                                containing Lorem Ipsum passages, and more recently with desktop
                                                publishing software like Aldus PageMaker including versions of Lorem
                                                Ipsum.</span></p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="product_tabs_custom1">
                                    <div class="product-tabs-content-inner clearfix">
                                        <p> <strong> Comfortable </strong><span>&nbsp;preshrunk shirts. Highest Quality
                                                Printing. 6.1 oz. 100% preshrunk heavyweight cotton Shoulder-to-shoulder
                                                taping Double-needle sleeves and bottom hem

                                                Lorem Ipsumis
                                                simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                                has been the industry's standard dummy text ever since the 1500s, when
                                                an unknown printer took a galley of type and scrambled it to make a type
                                                specimen book. It has survived not only five centuries, but also the
                                                leap into electronic typesetting, remaining essentially unchanged. It
                                                was popularised in the 1960s with the release of Letraset sheets
                                                containing Lorem Ipsum passages, and more recently with desktop
                                                publishing software like Aldus PageMaker including versions of Lorem
                                                Ipsum.</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Container End -->
    <!-- Related Products Slider -->

    <div class="container">
        <!-- Related Slider -->
        <div class="related-pro">
            <div class="slider-items-products">
                <div class="related-block">
                    <div id="related-products-slider" class="product-flexslider hidden-buttons">
                        <div class="home-block-inner">
                            <div class="block-title">
                                <h2>
                                    Related<br />
                                    <em> Products</em>
                                </h2>
                            </div>
                            <div class="pretext">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Curabitur eu odio non justo euismod
                                congue ut nec orci.
                            </div>
                            <a href="{{route('grid')}}" class="view_more_bnt">View All</a>
                        </div>
                        <div class="slider-items slider-width-col4 products-grid block-content">
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info">
                                            <a class="product-image" title="Retis lapen casen"
                                                href="{{route('product.details')}}">
                                                <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850" />
                                            </a>
                                            <div class="new-label new-top-right">new</div>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li>
                                                        <a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                                    </li>
                                                    <li>
                                                        <a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                                    </li>
                                                    <li>
                                                        <a class="link-compare" href="{{route('compare')}}">Compare</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h4>
                                                    <a title="Retis lapen casen" href="{{route('product.details')}}">
                                                        Retis lapen casen
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="rating">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating width80"></div>
                                                    </div>
                                                    <p class="rating-links">
                                                        <a href="#">1 Review(s)</a>
                                                        <span class="separator">|</span>
                                                        <a href="#">Add Review</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="item-content">
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <span class="regular-price">
                                                            <span class="price">$125.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title=""
                                                        data-original-title="Add to Cart">
                                                        <span>Add to Cart</span>
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
                                            <a class="product-image" title="Retis lapen casen"
                                                href="{{route('product.details')}}">
                                                <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li>
                                                        <a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                                    </li>
                                                    <li>
                                                        <a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                                    </li>
                                                    <li>
                                                        <a class="link-compare" href="{{route('compare')}}">Compare</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h4>
                                                    <a title="Retis lapen casen" href="{{route('product.details')}}">
                                                        Retis lapen casen
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating width80"></div>
                                                        </div>
                                                        <p class="rating-links">
                                                            <a href="#">1 Review(s)</a>
                                                            <span class="separator">|</span>
                                                            <a href="#">Add Review</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <span class="regular-price">
                                                            <span class="price">$235.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title=""
                                                        data-original-title="Add to Cart">
                                                        <span>Add to Cart</span>
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
                                            <a class="product-image" title="Retis lapen casen"
                                                href="{{route('product.details')}}">
                                                <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li>
                                                        <a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                                    </li>
                                                    <li>
                                                        <a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                                    </li>
                                                    <li>
                                                        <a class="link-compare" href="{{route('compare')}}">Compare</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h4>
                                                    <a title="Retis lapen casen" href="{{route('product.details')}}">
                                                        Retis lapen casen
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating width80"></div>
                                                        </div>
                                                        <p class="rating-links">
                                                            <a href="#">1 Review(s)</a>
                                                            <span class="separator">|</span>
                                                            <a href="#">Add Review</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <span class="regular-price">
                                                            <span class="price">$325.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title=""
                                                        data-original-title="Add to Cart">
                                                        <span>Add to Cart</span>
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
                                            <a class="product-image" title="Retis lapen casen"
                                                href="{{route('product.details')}}">
                                                <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850" />
                                            </a>
                                            <div class="new-label new-top-left">new</div>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li>
                                                        <a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                                    </li>
                                                    <li>
                                                        <a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                                    </li>
                                                    <li>
                                                        <a class="link-compare" href="{{route('compare')}}">Compare</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h4>
                                                    <a title="Retis lapen casen" href="{{route('product.details')}}">
                                                        Retis lapen casen
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating width80"></div>
                                                        </div>
                                                        <p class="rating-links">
                                                            <a href="#">1 Review(s)</a>
                                                            <span class="separator">|</span>
                                                            <a href="#">Add Review</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <span class="regular-price">
                                                            <span class="price">$425.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title=""
                                                        data-original-title="Add to Cart">
                                                        <span>Add to Cart</span>
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
                                            <a class="product-image" title="Retis lapen casen"
                                                href="{{route('product.details')}}">
                                                <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li>
                                                        <a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                                    </li>
                                                    <li>
                                                        <a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                                    </li>
                                                    <li>
                                                        <a class="link-compare" href="{{route('compare')}}">Compare</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h4>
                                                    <a title="Retis lapen casen" href="{{route('product.details')}}">
                                                        Retis lapen casen
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating width80"></div>
                                                        </div>
                                                        <p class="rating-links">
                                                            <a href="#">1 Review(s)</a>
                                                            <span class="separator">|</span>
                                                            <a href="#">Add Review</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <span class="regular-price">
                                                            <span class="price">$525.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title=""
                                                        data-original-title="Add to Cart">
                                                        <span>Add to Cart</span>
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
                                            <a class="product-image" title="Retis lapen casen"
                                                href="{{route('product.details')}}">
                                                <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li>
                                                        <a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                                    </li>
                                                    <li>
                                                        <a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                                    </li>
                                                    <li>
                                                        <a class="link-compare" href="{{route('compare')}}">Compare</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h4>
                                                    <a title="Retis lapen casen" href="{{route('product.details')}}">
                                                        Retis lapen casen
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating width80"></div>
                                                        </div>
                                                        <p class="rating-links">
                                                            <a href="#">1 Review(s)</a>
                                                            <span class="separator">|</span>
                                                            <a href="#">Add Review</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <span class="regular-price">
                                                            <span class="price">$225.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title=""
                                                        data-original-title="Add to Cart">
                                                        <span>Add to Cart</span>
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
                                            <a class="product-image" title="Retis lapen casen"
                                                href="{{route('product.details')}}">
                                                <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li>
                                                        <a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                                    </li>
                                                    <li>
                                                        <a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                                    </li>
                                                    <li>
                                                        <a class="link-compare" href="{{route('compare')}}">Compare</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h4>
                                                    <a title="Retis lapen casen" href="{{route('product.details')}}">
                                                        Retis lapen casen
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating width80"></div>
                                                        </div>
                                                        <p class="rating-links">
                                                            <a href="#">1 Review(s)</a>
                                                            <span class="separator">|</span>
                                                            <a href="#">Add Review</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <span class="regular-price">
                                                            <span class="price">$185.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title=""
                                                        data-original-title="Add to Cart">
                                                        <span>Add to Cart</span>
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
        <!-- End related products Slider -->
    </div>
    <!-- Related Products Slider End -->

    <!-- Upsell Product Slider -->

    <div class="container">
        <!-- upsell Slider -->
        <div class="upsell-pro">
            <div class="slider-items-products">
                <div class="upsell-block">
                    <div id="upsell-products-slider" class="product-flexslider hidden-buttons">
                        <div class="home-block-inner">
                            <div class="block-title">
                                <h2>
                                    Upsell<br />
                                    <em>Product</em>
                                </h2>
                            </div>
                            <div class="pretext">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Curabitur eu odio non justo euismod
                                congue ut nec orci.
                            </div>
                            <a href="{{route('grid')}}" class="view_more_bnt">View All</a>
                        </div>
                        <div class="slider-items slider-width-col4 products-grid block-content">
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info">
                                            <a class="product-image" title="Retis lapen casen"
                                                href="{{route('product.details')}}">
                                                <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850" />
                                            </a>
                                            <div class="new-label new-top-right">new</div>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li>
                                                        <a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                                    </li>
                                                    <li>
                                                        <a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                                    </li>
                                                    <li>
                                                        <a class="link-compare" href="{{route('compare')}}">Compare</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h4>
                                                    <a title="Retis lapen casen" href="{{route('product.details')}}">
                                                        Retis lapen casen
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="rating">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating width80"></div>
                                                    </div>
                                                    <p class="rating-links">
                                                        <a href="#">1 Review(s)</a>
                                                        <span class="separator">|</span>
                                                        <a href="#">Add Review</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="item-content">
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <span class="regular-price">
                                                            <span class="price">$245.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title=""
                                                        data-original-title="Add to Cart">
                                                        <span>Add to Cart</span>
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
                                            <a class="product-image" title="Retis lapen casen"
                                                href="{{route('product.details')}}">
                                                <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li>
                                                        <a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                                    </li>
                                                    <li>
                                                        <a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                                    </li>
                                                    <li>
                                                        <a class="link-compare" href="{{route('compare')}}">Compare</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h4>
                                                    <a title="Retis lapen casen" href="{{route('product.details')}}">
                                                        Retis lapen casen
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating width80"></div>
                                                        </div>
                                                        <p class="rating-links">
                                                            <a href="#">1 Review(s)</a>
                                                            <span class="separator">|</span>
                                                            <a href="#">Add Review</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <span class="regular-price">
                                                            <span class="price">$155.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title=""
                                                        data-original-title="Add to Cart">
                                                        <span>Add to Cart</span>
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
                                            <a class="product-image" title="Retis lapen casen"
                                                href="{{route('product.details')}}">
                                                <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li>
                                                        <a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                                    </li>
                                                    <li>
                                                        <a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                                    </li>
                                                    <li>
                                                        <a class="link-compare" href="{{route('compare')}}">Compare</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h4>
                                                    <a title="Retis lapen casen" href="{{route('product.details')}}">
                                                        Retis lapen casen
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating width80"></div>
                                                        </div>
                                                        <p class="rating-links">
                                                            <a href="#">1 Review(s)</a>
                                                            <span class="separator">|</span>
                                                            <a href="#">Add Review</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <span class="regular-price">
                                                            <span class="price">$185.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title=""
                                                        data-original-title="Add to Cart">
                                                        <span>Add to Cart</span>
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
                                            <a class="product-image" title="Retis lapen casen"
                                                href="{{route('product.details')}}">
                                                <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850" />
                                            </a>
                                            <div class="new-label new-top-left">new</div>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li>
                                                        <a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                                    </li>
                                                    <li>
                                                        <a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                                    </li>
                                                    <li>
                                                        <a class="link-compare" href="{{route('compare')}}">Compare</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h4>
                                                    <a title="Retis lapen casen" href="{{route('product.details')}}">
                                                        Retis lapen casen
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating width80"></div>
                                                        </div>
                                                        <p class="rating-links">
                                                            <a href="#">1 Review(s)</a>
                                                            <span class="separator">|</span>
                                                            <a href="#">Add Review</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <span class="regular-price">
                                                            <span class="price">$235.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title=""
                                                        data-original-title="Add to Cart">
                                                        <span>Add to Cart</span>
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
                                            <a class="product-image" title="Retis lapen casen"
                                                href="{{route('product.details')}}">
                                                <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li>
                                                        <a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                                    </li>
                                                    <li>
                                                        <a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                                    </li>
                                                    <li>
                                                        <a class="link-compare" href="{{route('compare')}}">Compare</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h4>
                                                    <a title="Retis lapen casen" href="{{route('product.details')}}">
                                                        Retis lapen casen
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating width80"></div>
                                                        </div>
                                                        <p class="rating-links">
                                                            <a href="#">1 Review(s)</a>
                                                            <span class="separator">|</span>
                                                            <a href="#">Add Review</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <span class="regular-price">
                                                            <span class="price">$225.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title=""
                                                        data-original-title="Add to Cart">
                                                        <span>Add to Cart</span>
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
                                            <a class="product-image" title="Retis lapen casen"
                                                href="{{route('product.details')}}">
                                                <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li>
                                                        <a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                                    </li>
                                                    <li>
                                                        <a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                                    </li>
                                                    <li>
                                                        <a class="link-compare" href="{{route('compare')}}">Compare</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h4>
                                                    <a title="Retis lapen casen" href="{{route('product.details')}}">
                                                        Retis lapen casen
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating width80"></div>
                                                        </div>
                                                        <p class="rating-links">
                                                            <a href="#">1 Review(s)</a>
                                                            <span class="separator">|</span>
                                                            <a href="#">Add Review</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <span class="regular-price">
                                                            <span class="price">$335.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title=""
                                                        data-original-title="Add to Cart">
                                                        <span>Add to Cart</span>
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
                                            <a class="product-image" title="Retis lapen casen"
                                                href="{{route('product.details')}}">
                                                <img alt="Retis lapen casen" src="http://via.placeholder.com/700x850" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li>
                                                        <a class="link-quickview" href="{{route('quick.view')}}">Quick View</a>
                                                    </li>
                                                    <li>
                                                        <a class="link-wishlist" href="{{route('users.whishlist')}}">Wishlist</a>
                                                    </li>
                                                    <li>
                                                        <a class="link-compare" href="{{route('compare')}}">Compare</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h4>
                                                    <a title="Retis lapen casen" href="{{route('product.details')}}">
                                                        Retis lapen casen
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating width80"></div>
                                                        </div>
                                                        <p class="rating-links">
                                                            <a href="#">1 Review(s)</a>
                                                            <span class="separator">|</span>
                                                            <a href="#">Add Review</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <span class="regular-price">
                                                            <span class="price">$125.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <button class="button btn-cart" type="button" title=""
                                                        data-original-title="Add to Cart">
                                                        <span>Add to Cart</span>
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
        <!-- End Upsell  Slider -->
    </div>
    <!-- Brand Logo -->
    @include('frontend.includes.brand-logo')

    <!-- our features -->
    @include('frontend.includes.features-box')
@endsection
