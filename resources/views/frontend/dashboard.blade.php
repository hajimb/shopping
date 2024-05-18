@extends('layouts.frontend')

@section('title', $pageTitle)

@section('content')

    <!-- main-container -->
  <div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <section class="col-sm-9">
        <div class="col-main">
          <div class="my-account">
            <div class="page-title">
              <h1>My Dashboard</h1>
            </div>
            <div class="dashboard">
              <div class="welcome-msg"> <strong>Hello, John Doe!</strong>
                <p>From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</p>
              </div>
              <div class="recent-orders">
                <div class="title-buttons"><strong>Recent Orders</strong> <a href="#">View All </a> </div>
                <div class="table-responsive">
                  <table class="data-table" id="my-orders-table">
                    <col>
                    <col>
                    <col>
                    <col width="1">
                    <col width="1">
                    <col width="1">
                    <thead>
                      <tr class="first last">
                        <th>Order #</th>
                        <th>Date</th>
                        <th>Ship to</th>
                        <th><span class="nobr">Order Total</span></th>
                        <th>Status</th>
                        <th>&nbsp;</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="first odd">
                        <td>500000002</td>
                        <td>9/9/10 </td>
                        <td>John Doe</td>
                        <td><span class="price">$5.00</span></td>
                        <td><em>Pending</em></td>
                        <td class="a-center last"><span class="nobr"> <a href="#">View Order</a> <span class="separator">|</span> <a href="#">Reorder</a> </span></td>
                      </tr>
                      <tr class="last even">
                        <td>500000001</td>
                        <td>9/9/10 </td>
                        <td>John Doe</td>
                        <td><span class="price">$1,397.99</span></td>
                        <td><em>Pending</em></td>
                        <td class="a-center last"><span class="nobr"> <a href="#">View Order</a> <span class="separator">|</span> <a href="#">Reorder</a> </span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="box-account">
                <div class="page-title">
                  <h2>Account Information</h2>
                </div>
                <div class="col2-set">
                  <div class="col-1">
                    <h5>Contact Information</h5>
                    <a href="#">Edit</a>
                    <p> John Doe<br>
                      jone-doe@example.com<br>
                      <a href="#">Change Password</a> </p>
                  </div>
                  <div class="col-2">
                    <h5>Newsletters</h5>
                    <a href="#">Edit</a>
                    <p> You are currently not subscribed to any newsletter. </p>
                  </div>
                </div>
                <div class="col2-set">
                  <h4>Address Book</h4>
                  <div class="manage_add"><a href="#">Manage Addresses</a> </div>
                  <div class="col-1">
                    <h5>Primary Billing Address</h5>
                    <address>
                      John Doe<br>
                      USA<br>
                      Anytown,  Alabama, 46532<br>
                      United States<br>
                      T: 454541 <br>
                      <a href="#">Edit Address</a>
                      </address>
                  </div>
                  <div class="col-2">
                    <h5>Primary Shipping Address</h5>
                    <address>
                      John Doe<br>
                      USA<br>
                      Anytown,  Alabama, 46532<br>
                      United States<br>
                      T: 454541 <br>
                      <a href="#">Edit Address</a>
                      </address>
                  </div>
                </div>
              </div>
            </div>
          </div> </div>
        </section>
        <aside class="col-right sidebar col-sm-3 col-xs-12">
          <div class="block block-account">
            <div class="block-title"><h3>My Account</h3></div>
            <div class="block-content">
              <ul>
                <li class="current"><a>Account Dashboard</a></li>
                <li><a href="#">Account Information</a></li>
                <li><a href="#">Address Book</a></li>
                <li><a href="#">My Orders</a></li>
                <li><a href="#">Billing Agreements</a></li>
                <li><a href="#">Recurring Profiles</a></li>
                <li><a href="#">My Product Reviews</a></li>
                <li><a href="#">My Tags</a></li>
                <li><a href="#">My Wishlist</a></li>
                <li><a href="#">My Downloadable</a></li>
                <li class="last"><a href="#">Newsletter Subscriptions</a></li>
              </ul>
            </div>
          </div>
          <div class="block block-compare">
            <div class="block-title "><h3>Compare Products (2)</h3></div>
            <div class="block-content">
              <ol id="compare-items">
                <li class="item odd">
                  <input type="hidden" value="2173" class="compare-item-id">
                  <a class="btn-remove1" title="Remove This Item" href="#"></a> <a href="#" class="product-name"> Sofa with Box-Edge Polyester Wrapped Cushions</a> </li>
                <li class="item last even">
                  <input type="hidden" value="2174" class="compare-item-id">
                  <a class="btn-remove1" title="Remove This Item" href="#"></a> <a href="#" class="product-name"> Sofa with Box-Edge Down-Blend Wrapped Cushions</a> </li>
              </ol>
              <div class="ajax-checkout">
                <button type="submit" title="Submit" class="button button-compare"><span>Compare</span></button>
                <button type="submit" title="Submit" class="button button-clear"><span>Clear</span></button>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>
  <!--End main-container --> 

    <!-- Brand Logo -->
    @include('frontend.includes.brand-logo')

    <!-- our features -->
    @include('frontend.includes.features-box')
@endsection
