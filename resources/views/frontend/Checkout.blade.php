@extends('layouts.frontend')
@section('title', 'Checkout')
@push('style')
    <link rel="stylesheet" href="{{ asset('frontendstyle/css/16_Checkout.css')}}">
    <link rel="stylesheet" href="{{ asset('frontendstyle/css/Checkoutresponsive.css')}}">
@endpush
@section('content')

<section id="billing">
    <div class="container">
        <h1>Billing Information</h1>
        <div class="row ">
            <div class="col-lg-8">
                <div class="billinginfor">
                    <div class="row ">
                        <div class="col-lg-4 col-12   billingform">
                            <h4>First name</h4>
                            <div class="wave-group">
                                <input required="" type="text" class="input" placeholder="Your first name">
                                <span class="bar"></span>
                                <label class="label " > </label>
                              </div>
                        </div>
                        <div class="col-lg-4 billingform">
                            <h4>Last name</h4>
                            <div class="wave-group">
                                <input required="" type="text" class="input" placeholder="Your last name">
                                <span class="bar"></span>
                                <label class="label " > </label>
                              </div>
                        </div>
                        <div class="col-lg-4 billingform">
                            <h4>Company Name <span>(optional)</span> </h4>
                            <div class="wave-group">
                                <input required="" type="text" class="input" placeholder="Company name">
                                <span class="bar"></span>
                                <label class="label " > </label>
                              </div>
                        </div>
                    </div>
                      </div>


                <div class="row secondcount">
                  <div class="col-lg-4">
                    <div class="country">
                      <h4>Country / Region</h4>
                      <select class="custom-select">
                        <option value="" disabled selected>Select an option</option>
                        <option value="1">India </option>
                        <option value="2"> Myanmar</option>
                        <option value="3">Pakistan</option>
                        <option value="3">Bangladesh </option>
                    </select>
                    
                  </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="country">
                      <h4>States</h4>
                      <select class="custom-select">
                        <option value="" disabled selected>Select an option</option>
                        <option value="1">Barishal </option>
                        <option value="2"> Chattogram</option>
                        <option value="3">Dhaka</option>
                        <option value="3">Khulna </option>
                        <option value="3">Rajshahi </option>
                        <option value="3">Rangpur </option>
                        <option value="3">Mymensingh  </option>
                        <option value="3">Sylhet  </option>
                    </select>
                    
                  </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="country">
                      <h4>Zip Code</h4>
                     <input class="ZipCode" type="text" placeholder="Zip Code">
                     <label for="ZipCode"></label>
                    
                  </div>    
                  </div>
                </div>

            <div class="row">
              <div class="address">
                <h4>Street Address</h4>
                <div class="wave-group">
                  <input required="" type="text" class="input" placeholder="Address">
                  <span class="bar"></span>
                  <label class="label " > </label>
                </div>
              </div>
            </div>


            <div class="row thirdcount">
              <div class="col-lg-6">
                <h4>Email</h4>
                <div class="wave-group">
                  <input required="" type="text" class="input" placeholder="Email Address">
                  <span class="bar"></span>
                  <label class="label " > </label>
                </div>
             
              </div>
              <div class="col-lg-6">
                <h4>Phone</h4>
                <div class="wave-group">
                  <input required="" type="text" class="input" placeholder="Phone number">
                  <span class="bar"></span>
                  <label class="label " > </label>
                </div>
             


            


              </div>
            
            
            
            
            
            </div>


        
       <div class="checkbox">
        <label for="cbx" class="cbx">
          <div class="checkmark">
          <input checked="" type="checkbox" id="cbx">
          <div class="flip">
            <div class="front"></div>
              <div class="back">
                <svg viewBox="0 0 16 14" height="14" width="16">
                  <path d="M2 8.5L6 12.5L14 1.5"></path>
                </svg>
              </div>
            </div>
          </div>
        </label>
        <p>Ship to a different address</p>
       </div>

       <div class="row additional">
        <div class="address ">
          <h2>Additional Info</h2>

          <h5>Order Notes (Optional)</h5>
          <div class="wave-group">
            <label class="label " > </label>
            <textarea id="order-notes" class="order-notes-textarea" placeholder="Notes about your order, e.g., special notes for delivery"></textarea>

          </div>
        </div>
      </div>
               
            </div>
            <div class="col-lg-4  PlaceOrder">
              <div class="rightcount ">
                <h2>Order Summery</h2>

                @php
                $totalprice = 0;
                    
                @endphp

                 @foreach ($carts as $cart)
                     
                
                <div class="row d-flex subcount subproduct">
                  <div class="col-lg-9 col-9 d-flex align-items-center ">
                    <a width="20px" href=""><img width="50px" class="img-fluid" src="{{getimage($cart->product->featured_img)}}" alt="redapple"></a>
                  <p>{{$cart->product->title}} <span>x{{ $cart->qty}}</span></p>
                  </div>
                  <div class="col-lg-3 col-3 d-flex align-items-center justify-content-end">
                    @php 
                    $price = $cart->qty * ($cart->product->selling_price ?? $cart->product->price);
                    $totalprice += $price;
                    @endphp
                    <h5>{{ number_format($price,2)}}৳</h5>                 
                  </div>
                </div>
                @endforeach
               
                <div class="row d-flex subcount">
                  <div class="col-lg-6 col-9">
                    <p>Subtotal :</p>
                  </div>
                  <div class="col-lg-6 col-3 d-flex justify-content-end">
                    <h5 id="subcounth5">{{number_format($totalprice,2)}}৳</h5>                 
                  </div>
                </div>
                <div class="row d-flex subcount subcount1 ">
                  <div class="col-lg-6 col-9">
                    <p id="shpping">Shipping :</p>
                  </div>
                  <div class="col-lg-6 col-3 alert justify-content-end align-items-center">
                    <h5 id="subcounth5">Free</h5>                 
                  </div>
                </div>
                <div class="row d-flex subcount">
                  <div class="col-lg-6 col-9">
                    <p id="shpping">Total :</p>
                  </div>
                  <div class="col-lg-6 col-3 d-flex justify-content-end">
                    <h5 id="h5 " class="subcounth5">{{number_format($totalprice,2)}}৳</h5>                 
                  </div>
                </div>
                  
               <div class="paymethod">
  <h2>Payment Method</h2>

  <div class="paymentcard d-flex align-items-center">
    <div class="checkbox-wrapper-12">
      <div class="cbx">
        <input type="radio" name="payment_method" id="cod" value="Cash on Delivery" checked>
        <label for="cod"></label>
        <svg fill="none" viewBox="0 0 15 14" height="14" width="15">
          <path d="M2 8.36364L6.23077 12L13 2"></path>
        </svg>
      </div>

      <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
        <defs>
          <filter id="goo-12">
            <feGaussianBlur result="blur" stdDeviation="4" in="SourceGraphic"></feGaussianBlur>
            <feColorMatrix result="goo-12"
              values="1 0 0 0 0  
                      0 1 0 0 0  
                      0 0 1 0 0  
                      0 0 0 22 -7"
              mode="matrix" in="blur"></feColorMatrix>
            <feBlend in2="goo-12" in="SourceGraphic"></feBlend>
          </filter>
        </defs>
      </svg>
    </div>
    <h6 id="h6">Cash on Delivery</h6>
  </div>

  <div class="paymentcard d-flex align-items-center">
    <div class="checkbox-wrapper-12">
      <div class="cbx">
        <input type="radio" name="payment_method" id="paypal" value="Paypal">
        <label for="paypal"></label>
        <svg fill="none" viewBox="0 0 15 14" height="14" width="15">
          <path d="M2 8.36364L6.23077 12L13 2"></path>
        </svg>
      </div>

      <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
        <defs>
          <filter id="goo-12">
            <feGaussianBlur result="blur" stdDeviation="4" in="SourceGraphic"></feGaussianBlur>
            <feColorMatrix result="goo-12"
              values="1 0 0 0 0  
                      0 1 0 0 0  
                      0 0 1 0 0  
                      0 0 0 22 -7"
              mode="matrix" in="blur"></feColorMatrix>
            <feBlend in2="goo-12" in="SourceGraphic"></feBlend>
          </filter>
        </defs>
      </svg>
    </div>
    <h6 id="h6">Paypal</h6>
  </div>

  <div class="paymentcard d-flex align-items-center">
    <div class="checkbox-wrapper-12">
      <div class="cbx">
        <input type="radio" name="payment_method" id="amazon" value="Amazon Pay">
        <label for="amazon"></label>
        <svg fill="none" viewBox="0 0 15 14" height="14" width="15">
          <path d="M2 8.36364L6.23077 12L13 2"></path>
        </svg>
      </div>

      <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
        <defs>
          <filter id="goo-12">
            <feGaussianBlur result="blur" stdDeviation="4" in="SourceGraphic"></feGaussianBlur>
            <feColorMatrix result="goo-12"
              values="1 0 0 0 0  
                      0 1 0 0 0  
                      0 0 1 0 0  
                      0 0 0 22 -7"
              mode="matrix" in="blur"></feColorMatrix>
            <feBlend in2="goo-12" in="SourceGraphic"></feBlend>
          </filter>
        </defs>
      </svg>
    </div>
    <h6 id="h6">Amazon Pay</h6>
  </div>
</div>

                <div class="checkout d-flex justify-content-center">
                  <a href="">Place Order</a>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>
















<!-- billing ends  -->
@endsection
@push('scripts')
<script src="{{asset('frontendstyle/js/16_Checkout.js')}}"></script>

@endpush