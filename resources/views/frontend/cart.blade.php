@extends('layouts.frontend')
@section('title', 'cart')
@push('style')
    <link rel="stylesheet" href="{{ asset('frontendstyle/css/cartstyle.css')}}">
    <link rel="stylesheet" href="{{ asset('frontendstyle/css/cartresponsive.css')}}">
@section('content')


      <!-- Shopping cart  -->
      <section id="cart">
        <div class="container">
            <h1>My Shopping Cart</h1>
          <div class="row ">
            <div class="col-lg-8">
              <div class="leftcount">
                <div class="row leftmanu">
                    <div class="col-lg-5 col-4">Product</div>
                    <div class="col-lg-2 col-2">price</div>
                    <div class="col-lg-2 col-3">Quantity</div>
                    <div class="col-lg-3 col-3 ">Subtotal</div>
                </div>
                <div class="row productcard d-flex align-items-center">
                    <div class="col-lg-5 col-4 d-lg-flex d-block">
                        <a href=""><img class="img-fluid" src="./images/Imagegreensm.png" alt=""></a>
                         <h5>Green Capsicum</h5>
                    </div>
                    <div class="col-lg-1 col-2 PRICE">$14.00</div>
                    <div class="col-lg-3 col-3 d-flex justify-content-center">
                      <div class="counter-container">
                        <button class="decrease button">-</button>
                        <span class="counter">0</span>
                        <button class="increase button">+</button>
                      </div>
                    </div>
                    <div class="col-lg-3 col-3 d-flex justify-content-between">
                      <h4 >  $70.00</h4>
                      <iconify-icon icon="basil:cross-outline" width="34" height="34"></iconify-icon>
                    </div>  
                </div>
                <div class="row  productcard d-flex align-items-center">
                    <div class="col-lg-5 col-4 d-lg-flex d-block">
                        <a href=""><img class="img-fluid" src="./images/Imagegreensm.png" alt=""></a>
                         <h5>Green Capsicum</h5>
                    </div>
                    <div class="col-lg-1 col-2 PRICE">$14.00</div>
                    <div class="col-lg-3 col-3  d-flex justify-content-center">
                      <div class="counter-container">
                        <button class="decrease button">-</button>
                        <span class="counter">0</span>
                        <button class="increase button">+</button>
                      </div>
                    </div>
                    <div class="col-lg-3 col-3 d-flex justify-content-between">
                      <h4 >  $70.00</h4>
                      <iconify-icon icon="basil:cross-outline" width="34" height="34"></iconify-icon>
                    </div>  
                </div>
                <div class="row productcard1 d-flex align-items-center">
                    <div class="col-lg-6 col-12 d-flex justify-content-lg-start justify-content-center mb-5">
                        <a href="">Return to shop</a>
                    </div>
                    <div class="col-lg-6 col-12 d-flex justify-content-lg-end justify-content-center">
                      <a href="">Update Cart</a>
                    </div>  
                </div>
              </div>

              <div class="couponcode">
                
                <div class="row ">
                  <div class="codecount col-lg-3 d-flex align-items-center justify-content-center ">
                    <h3>Coupon Code</h3>
                  </div>
                  <div class="col-lg-9">
                    <form class="search-form">
                      <div class="search-input-wrapper">
                        <input placeholder="Enter code" type="email" />
                        <button type="submit">Apply Coupon</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>


              </div>
              
              

            <div class="col-lg-4 ">
            <div class="rightcount ">
              <h4>Cart Total</h4>
              <div class="row d-flex subcount">
                <div class="col-lg-6 col-6">
                  <p>Subtotal :</p>
                </div>
                <div class="col-lg-6  col-6  d-flex justify-content-end">
                  <h5>$84.00</h5>                 
                </div>
              </div>
              <div class="row d-flex subcount subcount1 ">
                <div class="col-lg-6  col-6">
                  <p>Shipping :</p>
                </div>
                <div class="col-lg-6  col-6 d-flex justify-content-end">
                  <h5>Free</h5>                 
                </div>
              </div>
              <div class="row d-flex subcount">
                <div class="col-lg-6  col-6">
                  <p>Total :</p>
                </div>
                <div class="col-lg-6  col-6 d-flex justify-content-end">
                  <h5 id="h5">$84.00</h5>                 
                </div>
              </div>
              <div class="checkout d-flex justify-content-center mb-4">
                <a href="{{ route('frontend.checkout')}}">Proceed to checkout</a>
              </div>
            </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Shopping cart end  -->

   
@endsection
@push('scripts')
<script src="{{ asset('frontendstyle/js/cartapp.js')}}"></script>
@endpush


