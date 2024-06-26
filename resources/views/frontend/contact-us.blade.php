@extends('layouts.frontend')

@section('title', $pageTitle)

@section('content')

     <!-- breadcrumbs -->
  
     <div class="breadcrumbs">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <ul>
                <li class="home"> <a title="Go to Home Page" href="{{route('home')}}">Home</a> <span>/</span> </li>
                <li class="category1601"> <strong>Contact Us</strong> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      
      <!-- main-container -->
      <div class="main-container col2-right-layout">
        <div class="main container">
          <div class="row">
            <section class="col-sm-9">
            <div class="col-main">
              <div class="page-title">
                <h2>Contact Us</h2>
              </div>
              <div class="static-contain">
                <fieldset class="group-select">
                  <ul>
                    <li id="billing-new-address-form">
                      <fieldset>
                     
                        <input type="hidden" name="billing[address_id]" value="" id="billing:address_id">
                        <ul>
                          <li>
                            <div class="customer-name">
                              <div class="input-box name-firstname">
                                <label for="billing:firstname"> First Name<span class="required">*</span></label>
                                <br>
                                <input type="text" id="billing:firstname" name="billing[firstname]" value="" title="First Name" class="input-text ">
                              </div>
                              <div class="input-box name-lastname">
                                <label for="billing:lastname"> Email Address <span class="required">*</span> </label>
                                <br>
                                <input type="text" id="billing:lastname" name="billing[lastname]" value="" title="Last Name" class="input-text">
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="input-box">
                              <label for="billing:company">Company</label>
                              <br>
                              <input type="text" id="billing:company" name="billing[company]" value="" title="Company" class="input-text">
                            </div>
                            <div class="input-box">
                              <label for="billing:email">Telephone <span class="required">*</span></label>
                              <br>
                              <input type="text" name="billing[email]" id="billing:email" value="" title="Email Address" class="input-text validate-email">
                            </div>
                          </li>
                          <li>
                            <label>Address <span class="required">*</span></label>
                            <br>
                            <input type="text" title="Street Address" name="billing[street][]" id="billing" value="" class="input-text required-entry">
                          </li>
                          <li>
                            <input type="text" title="Street Address 2" name="billing[street][]" id="billing2" value="" class="input-text required-entry">
                          </li>
                          <li class="">
                            <label for="comment">Comment<em class="required">*</em></label>
                            <br>
                            <div>
                              <textarea name="comment" id="comment" title="Comment" class="required-entry input-text" cols="5" rows="3"></textarea>
                            </div>
                          </li>
                        </ul>
                      </fieldset>
                    </li>
                    <li class="require"><em class="required">* </em>Required Fields</li>
                    
                    <li class="buttons-set">
                      <button type="submit" title="Submit" class="button submit"> <span> Submit </span> </button>
                    </li>
                  </ul>
                </fieldset>
              </div></div>
            </section>
            <aside class="col-right sidebar col-sm-3 col-xs-12">
              <div class="block block-company">
                <div class="block-title"><h3>Company</h3></div>
                <div class="block-content">
                  <ol id="recently-viewed-items">
                    <li class="item odd"><a href="#">About Us</a></li>
                    <li class="item even"><a href="#">Sitemap</a></li>
                    <li class="item  odd"><a href="#">Terms of Service</a></li>
                    <li class="item even"><a href="#">Search Terms</a></li>
                    <li class="item last"><strong>Contact Us</strong></li>
                  </ol>
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
