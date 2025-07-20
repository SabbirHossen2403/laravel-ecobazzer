
@extends('layouts.frontend')
@push('style')
    
    <link rel="stylesheet" href="{{ asset('frontendstyle/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontendstyle/css/responsive.css') }}">
@endpush
@section('title', 'homepage' )
    

@section('content')
    

    <!-- banner  -->
 <section id="banner">
  <div class="container">


    <div class="bannerslider">
      <div>
        <div class="row">
          <div class="col-lg-7">
              <img class="img-fluid" src="{{ asset('frontendstyle/images/slider1.png') }}" alt="">
          </div>
          <div class="col-lg-5 rightsite">
            <p class="welcome">WELCOME TO SHOPERY</p>
            <h1>Fresh & Healthy 
              Organic Food</h1>
            <p>Free shipping on all your order. we deliver, you enjoy</p>
            <a class="cssbuttons-io-button" href="./shop.html">
              Shop now
              <div class="icon">
                <svg
                  height="24"
                  width="24"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path d="M0 0h24v24H0z" fill="none"></path>
                  <path
                    d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                    fill="currentColor"
                  ></path>
                </svg>
              </div>
            </a>          </div>
        </div>
      </div>
      <div>
        <div class="row">
          <div class="col-lg-7">
              <img class="img-fluid" src="{{ asset('frontendstyle/images/slide (2).png') }}" alt="">
          </div>
          <div class="col-lg-5 rightsite">
            <p class="welcome">WELCOME TO SHOPERY</p>
            <h1>Fresh & Healthy 
              Organic Food</h1>
            <p>Free shipping on all your order. we deliver, you enjoy</p>
            <a class="cssbuttons-io-button">
              Shop now
              <div class="icon">
                <svg
                  height="24"
                  width="24"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path d="M0 0h24v24H0z" fill="none"></path>
                  <path
                    d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                    fill="currentColor"
                  ></path>
                </svg>
              </div>
            </a>          </div>
        </div>
      </div>
      <div>
        <div class="row">
          <div class="col-lg-7">
              <img class="img-fluid" src="{{ asset('frontendstyle/images/slide(3).png') }}" alt="">
          </div>
          <div class="col-lg-5 rightsite">
            <p class="welcome">WELCOME TO SHOPERY</p>
            <h1>Fresh & Healthy 
              Organic Food</h1>
            <p>Free shipping on all your order. we deliver, you enjoy</p> 
          <a class="cssbuttons-io-button">
              Shop now
              <div class="icon">
                <svg
                  height="24"
                  width="24"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path d="M0 0h24v24H0z" fill="none"></path>
                  <path
                    d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                    fill="currentColor"
                  ></path>
                </svg>
              </div>
            </a>
          
        
          </div>
        </div>
      </div>

    </div>
        


    <div class="lineheight leftArrow"><iconify-icon icon="bitcoin-icons:arrow-left-filled" width="24" height="24"></iconify-icon></div>
    <div class="lineheight rightArrow"><iconify-icon icon="bitcoin-icons:arrow-right-filled" width="24" height="24"></iconify-icon></div>
  </div>

 </section>

 <!-- banner ends -->
 <!-- cards  -->
 <section id="cards">
  <div class="container px-0">
    <div class="row g-0"> 
      <div class="col-lg-3 col-md-6  col-sm-6  col-12 p-0"> 
          <div class="card h-100"> 
            <img src="{{ asset('frontendstyle/images/Icon.png') }}" alt="">
            <h3>Free Shipping</h3>
            <p>Free shipping with discount</p>
          </div>
      </div>
      <div class="col-lg-3 col-md-6  col-sm-6  col-12 p-0">
          <div class="card h-100">
            <img src="{{ asset('frontendstyle/images/Icon (1).png') }}" alt="">
            <h3>Great Support 24/7</h3>
            <p>Instant access to Contact</p>
          </div>
      </div>
      <div class="col-lg-3 col-md-6  col-sm-6 col-12 p-0">
          <div class="card h-100">
            <img src="{{ asset('frontendstyle/images/Icon (2).png') }}" alt="">
            <h3>100% Secure Payment</h3>
            <p>We ensure your money is save</p>
          </div>
      </div>
      <div class="col-lg-3 col-md-6  col-sm-6  col-12 p-0">
          <div class="card h-100">
            <img src="{{ asset('frontendstyle/images/Icon (3).png') }}" alt="">
            <h3>Money-Back Guarantee</h3>
            <p>30 days money-back guarantee</p>
          </div>
      </div>
    </div>
  </div>
</section>


 <!-- cards ends -->

 <!-- Products  -->






 <section id="Products">
   <div class="container">

<h1>Introducing Our Products</h1>
<ul class="list">
  <li  ><a class="active"  href="">All</a></li>
  <li><a class="hover d-lg-block d-none" href=""></a></li>
  <li><a  href="">Vegetable</a></li>
  <li><a class="hover d-lg-block d-none" href=""></a></li>
  <li><a   href="">Fruit</a></li>
  <li><a class="hover d-lg-block d-none" href=""></a></li>
  <li><a  href="">Meat & Fish</a></li>
  <li><a class="hover d-lg-block d-none" href=""></a></li>
  <li><a   href="">View All</a></li>
</ul>
 <div class="row g-0">
  <div class="productCard col-lg-3 col-md-4 col-6 ">
    <div class="thumbnail">
      <a href="#"><img src="{{ asset('frontendstyle/images/Product Image (6).png') }}" alt="Image 1" class="img-fluid"></a>
      <ul class="quickLinks">
        <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
        <li><a href="#"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
      </ul>
    </div>
    <div class="content">
      <a href="#">Green Apple</a>
      <strong>$14.99 <span>$20.99</span></strong>
      <div class="rating">
        <input type="radio" id="star5" name="rate" value="5" />
        <label for="star5" title="text"></label>
        <input type="radio" id="star4" name="rate" value="4" />
        <label for="star4" title="text"></label>
        <input type="radio" id="star3" name="rate" value="3" />
        <label for="star3" title="text"></label>
        <input type="radio" id="star2" name="rate" value="2" />
        <label for="star2" title="text"></label>
        <input checked="" type="radio" id="star1" name="rate" value="1" />
        <label for="star1" title="text"></label>
      </div>
      
      <a class="addToCart" href="#"><iconify-icon icon="heroicons:shopping-bag" width="24"
          height="24"></iconify-icon></a>
    </div>
  </div>
  <div class="productCard col-lg-3 col-md-4 col-6 ">
    <div class="thumbnail">
      <a href="#"><img src="{{ asset('frontendstyle/images/Image (3).png') }}" alt="Image 1" class="img-fluid"></a>
      <ul class="quickLinks">
        <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
        <li><a href="#"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
      </ul>
    </div>
    <div class="content">
      <a href="#">Surjapur Mango</a>
      <strong>$14.99 </strong>
      <div class="rating">
        <input type="radio" id="star5" name="rate" value="5" />
        <label for="star5" title="text"></label>
        <input type="radio" id="star4" name="rate" value="4" />
        <label for="star4" title="text"></label>
        <input type="radio" id="star3" name="rate" value="3" />
        <label for="star3" title="text"></label>
        <input type="radio" id="star2" name="rate" value="2" />
        <label for="star2" title="text"></label>
        <input checked="" type="radio" id="star1" name="rate" value="1" />
        <label for="star1" title="text"></label>
      </div>
      
      <a class="addToCart" href="#"><iconify-icon icon="heroicons:shopping-bag" width="24"
          height="24"></iconify-icon></a>
    </div>
  </div>
  <div class="productCard col-lg-3 col-md-4 col-6 ">
    <div class="thumbnail">
      <a href="#"><img src="{{ asset('frontendstyle/images/Image (4).png') }}" alt="Image 1" class="img-fluid"></a>
      <ul class="quickLinks">
        <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
        <li><a href="#"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
      </ul>
    </div>
    <div class="content">
      <a href="#">Red Tomatos</a>
      <strong>$14.99 </strong>
      <div class="rating">
        <input type="radio" id="star5" name="rate" value="5" />
        <label for="star5" title="text"></label>
        <input type="radio" id="star4" name="rate" value="4" />
        <label for="star4" title="text"></label>
        <input type="radio" id="star3" name="rate" value="3" />
        <label for="star3" title="text"></label>
        <input type="radio" id="star2" name="rate" value="2" />
        <label for="star2" title="text"></label>
        <input checked="" type="radio" id="star1" name="rate" value="1" />
        <label for="star1" title="text"></label>
      </div>
      
      <a class="addToCart" href="#"><iconify-icon icon="heroicons:shopping-bag" width="24"
          height="24"></iconify-icon></a>
    </div>
  </div>
  <div class="productCard col-lg-3 col-md-4 col-6 ">
    <div class="thumbnail">
      <a href="#"><img src="{{ asset('frontendstyle/images/Product Image (1).png') }}" alt="Image 1" class="img-fluid"></a>
      <ul class="quickLinks">
        <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
        <li><a href="#"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
      </ul>
    </div>
    <div class="content">
      <a href="#">Fresh Cauliflower</a>
      <strong>$14.99 </strong>
      <div class="rating">
        <input type="radio" id="star5" name="rate" value="5" />
        <label for="star5" title="text"></label>
        <input type="radio" id="star4" name="rate" value="4" />
        <label for="star4" title="text"></label>
        <input type="radio" id="star3" name="rate" value="3" />
        <label for="star3" title="text"></label>
        <input type="radio" id="star2" name="rate" value="2" />
        <label for="star2" title="text"></label>
        <input checked="" type="radio" id="star1" name="rate" value="1" />
        <label for="star1" title="text"></label>
      </div>
      
      <a class="addToCart" href="#"><iconify-icon icon="heroicons:shopping-bag" width="24"
          height="24"></iconify-icon></a>
    </div>
  </div>
  <div class="productCard col-lg-3 col-md-4 col-6 ">
    <div class="thumbnail">
      <a href="#"><img src="{{ asset('frontendstyle/images/Product Image (2).png') }}" alt="Image 1" class="img-fluid"></a>
      <ul class="quickLinks">
        <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
        <li><a href="#"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
      </ul>
    </div>
    <div class="content">
      <a href="#">Green Lettuce</a>
      <strong>$14.99</strong>
      <div class="rating">
        <input type="radio" id="star5" name="rate" value="5" />
        <label for="star5" title="text"></label>
        <input type="radio" id="star4" name="rate" value="4" />
        <label for="star4" title="text"></label>
        <input type="radio" id="star3" name="rate" value="3" />
        <label for="star3" title="text"></label>
        <input type="radio" id="star2" name="rate" value="2" />
        <label for="star2" title="text"></label>
        <input checked="" type="radio" id="star1" name="rate" value="1" />
        <label for="star1" title="text"></label>
      </div>
      <a class="addToCart" href="#"><iconify-icon icon="heroicons:shopping-bag" width="24"
          height="24"></iconify-icon></a>
    </div>
  </div>
  <div class="productCard col-lg-3 col-md-4 col-6 ">
    <div class="thumbnail">
      <a href="#"><img src="{{ asset('frontendstyle/images/Product Image (3).png') }}" alt="Image 1" class="img-fluid"></a>
      <ul class="quickLinks">
        <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
        <li><a href="#"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
      </ul>
    </div>
    <div class="content">
      <a href="#">Eggplant</a>
      <strong>$14.99 </strong>
      <div class="rating">
        <input type="radio" id="star5" name="rate" value="5" />
        <label for="star5" title="text"></label>
        <input type="radio" id="star4" name="rate" value="4" />
        <label for="star4" title="text"></label>
        <input type="radio" id="star3" name="rate" value="3" />
        <label for="star3" title="text"></label>
        <input type="radio" id="star2" name="rate" value="2" />
        <label for="star2" title="text"></label>
        <input checked="" type="radio" id="star1" name="rate" value="1" />
        <label for="star1" title="text"></label>
      </div>
      <a class="addToCart" href="#"><iconify-icon icon="heroicons:shopping-bag" width="24"
          height="24"></iconify-icon></a>
    </div>
  </div>
  <div class="productCard col-lg-3 col-md-4 col-6 ">
    <div class="thumbnail">
      <a href="#"><img src="{{ asset('frontendstyle/images/Product Image (4).png') }}" alt="Image 1" class="img-fluid"></a>
      <ul class="quickLinks">
        <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
        <li><a href="#"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
      </ul>
    </div>
    <div class="content">
      <a href="#">Green Chilli</a>
      <strong>$14.99 </strong>
      <div class="rating">
        <input type="radio" id="star5" name="rate" value="5" />
        <label for="star5" title="text"></label>
        <input type="radio" id="star4" name="rate" value="4" />
        <label for="star4" title="text"></label>
        <input type="radio" id="star3" name="rate" value="3" />
        <label for="star3" title="text"></label>
        <input type="radio" id="star2" name="rate" value="2" />
        <label for="star2" title="text"></label>
        <input checked="" type="radio" id="star1" name="rate" value="1" />
        <label for="star1" title="text"></label>
      </div>
      <a class="addToCart" href="#"><iconify-icon icon="heroicons:shopping-bag" width="24"
          height="24"></iconify-icon></a>
    </div>
  </div>
  <div class="productCard col-lg-3 col-md-4 col-6 ">
    <div class="thumbnail">
      <a href="#"><img src="{{ asset('frontendstyle/images/Product Image (5).png') }}" alt="Image 1" class="img-fluid"></a>
      <ul class="quickLinks">
        <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
        <li><a href="#"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
      </ul>
    </div>
    <div class="content">
      <a href="#">Eggplant</a>
      <strong>$14.99 </strong>
      <div class="rating">
        <input type="radio" id="star5" name="rate" value="5" />
        <label for="star5" title="text"></label>
        <input type="radio" id="star4" name="rate" value="4" />
        <label for="star4" title="text"></label>
        <input type="radio" id="star3" name="rate" value="3" />
        <label for="star3" title="text"></label>
        <input type="radio" id="star2" name="rate" value="2" />
        <label for="star2" title="text"></label>
        <input checked="" type="radio" id="star1" name="rate" value="1" />
        <label for="star1" title="text"></label>
      </div>
      <a class="addToCart" href="#"><iconify-icon icon="heroicons:shopping-bag" width="24"
          height="24"></iconify-icon></a>
    </div>
  </div>

 
        
     </div>
   </div>
 </section>

 <!-- Products ends -->


 <!-- shortcut  -->

<section id="shortcut">
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 col-12">
      <div class="milkimg">
        <a href=""><img src="{{ asset('frontendstyle/images/Image (7).png') }}" alt=""></a>
        <div class="milkcont">
          <h2>100% Fresh </h2>
          <h2>Cow Milk</h2>
          <h6>Starting at <span>$14.99</span> </h6>
          <a class="cssbuttons-io-button">
            Shop Now
            <div class="icon">
              <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0h24v24H0z" fill="none"></path>
                <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
              </svg>
            </div>
          </a> 
        </div>
      </div>
  </div>
    <div class="col-lg-4 col-md-6 col-12">
      <div class="drinkimg">
        <a href=""><img src="{{ asset('frontendstyle/images/Image (6).png') }}" alt=""></a>
        <div class="drinkcont">
          <h6>Drink Sale </h6>
          <h2>Water & <span class="d-block">Soft Drink</span> </h2>
          <h2></h2>
          <a class="cssbuttons-io-button">
            Shop Now
            <div class="icon">
              <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0h24v24H0z" fill="none"></path>
                <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
              </svg>
            </div>
          </a> 
        </div>
      </div>
  </div>
    <div class="col-lg-4 col-md-6 col-12">
      <div class="breakfastimg">
        <a href=""><img src="{{ asset('frontendstyle/images/Image (5).png') }}" alt=""></a>
        <div class="breakfastcont">
          <h6>100% Organic </h6>
          <h2>Quick <span class="d-block">Breakfastvv</span></h2>
          <a class="cssbuttons-io-button">
            Shop Now
            <div class="icon">
              <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0h24v24H0z" fill="none"></path>
                <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
              </svg>
            </div>
          </a> 
        </div>
      </div>
  </div>
</div>
</section>

 <!-- shortcut ends -->

 <!-- special  -->

<section id="special">
  <div class="container">
   
      <div class=" midlesection " >
        <h5>Best Deals</h5>
        <h2>Our Special Products <span class="d-block">Deal of the Month</span></h2>
      
      <div class="timer" data-date="october 25, 2025 00:00:00">
          <div class="timercount">
            <h2  id="days">00</h2>
            <span>Days</span>
          </div>
          <span id="dots"></span>
          <div class="timercount">
            <h2 id="Hours">00</h2>
            <span>Hours</span>
          </div>
          <span id="dots"></span>
          <div class="timercount">
            <h2 id="minutes">00</h2>
            <span>minutes</span>
          </div>
          <span id="dots"></span>
          <div class="timercount timecount1" >
            <h2 id="seconds">00</h2>
            <span>seconds</span>
          </div>

      </div>
      <a class="cssbuttons-io-button">
        Shop Now
        <div class="icon">
          <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0h24v24H0z" fill="none"></path>
            <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
          </svg>
        </div>
      </a> 
      </div>

    </div>
  </div>
</section>


 <!-- special ends -->


 <!-- featuredproducts  -->




<section id="featuredproducts">
  <div class="container">
    <h1>Featured Products</h1>
    <div class="row">
      <div class="lineheight leftArrow"><iconify-icon icon="bitcoin-icons:arrow-left-filled" width="24" height="24"></iconify-icon></div>
      <div class="lineheight rightArrow"><iconify-icon icon="bitcoin-icons:arrow-right-filled" width="24" height="24"></iconify-icon></div>
    
      <div class="featureSlider">
        <div class="productCard  ">
          <div class="thumbnail">
            <a href="#"><img src="{{ asset('frontendstyle/images/Product Image mango.png') }}" alt="Image 1" class="img-fluid"></a>
            <ul class="quickLinks">
              <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
              <li><a href="#"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
            </ul>
          </div>
          <div class="content">
            <a href="#">Surjapur Mango</a>
            <strong>$14.99 </strong>
            <div class="rating">
              <input type="radio" id="star5" name="rate" value="5" />
              <label for="star5" title="text"></label>
              <input type="radio" id="star4" name="rate" value="4" />
              <label for="star4" title="text"></label>
              <input type="radio" id="star3" name="rate" value="3" />
              <label for="star3" title="text"></label>
              <input type="radio" id="star2" name="rate" value="2" />
              <label for="star2" title="text"></label>
              <input checked="" type="radio" id="star1" name="rate" value="1" />
              <label for="star1" title="text"></label>
            </div>
            
            <a class="addToCart" href="#"><iconify-icon icon="heroicons:shopping-bag" width="24"
                height="24"></iconify-icon></a>
          </div>
        </div>
        
        <div class="productCard  ">
          <div class="thumbnail">
            <a href="#"><img src="{{ asset('frontendstyle/images/Product Image (11).png') }}" alt="Image 1" class="img-fluid"></a>
            <ul class="quickLinks">
              <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
              <li><a href="#"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
            </ul>
          </div>
          <div class="content">
            <a href="#">Fresh Indian Malta</a>
            <strong>$14.99 </strong>
            <div class="rating">
              <input type="radio" id="star5" name="rate" value="5" />
              <label for="star5" title="text"></label>
              <input type="radio" id="star4" name="rate" value="4" />
              <label for="star4" title="text"></label>
              <input type="radio" id="star3" name="rate" value="3" />
              <label for="star3" title="text"></label>
              <input type="radio" id="star2" name="rate" value="2" />
              <label for="star2" title="text"></label>
              <input checked="" type="radio" id="star1" name="rate" value="1" />
              <label for="star1" title="text"></label>
            </div>
            
            <a class="addToCart" href="#"><iconify-icon icon="heroicons:shopping-bag" width="24"
                height="24"></iconify-icon></a>
          </div>
        </div>
        
        <div class="productCard  ">
          <div class="thumbnail">
            <a href="#"><img src="{{ asset('frontendstyle/images/Product Image (9).png') }}" alt="Image 1" class="img-fluid"></a>
            <ul class="quickLinks">
              <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
              <li><a href="#"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
            </ul>
          </div>
          <div class="content">
            <a href="#">Chinese cabbage</a>
            <strong>$14.99</strong>
            <div class="rating">
              <input type="radio" id="star5" name="rate" value="5" />
              <label for="star5" title="text"></label>
              <input type="radio" id="star4" name="rate" value="4" />
              <label for="star4" title="text"></label>
              <input type="radio" id="star3" name="rate" value="3" />
              <label for="star3" title="text"></label>
              <input type="radio" id="star2" name="rate" value="2" />
              <label for="star2" title="text"></label>
              <input checked="" type="radio" id="star1" name="rate" value="1" />
              <label for="star1" title="text"></label>
            </div>
            
            <a class="addToCart" href="#"><iconify-icon icon="heroicons:shopping-bag" width="24"
                height="24"></iconify-icon></a>
          </div>
        </div>
        
        <div class="productCard  ">
          <div class="thumbnail">
            <a href="#"><img src="{{ asset('frontendstyle/images/Product Image (10).png') }}" alt="Image 1" class="img-fluid"></a>
            <ul class="quickLinks">
              <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
              <li><a href="#"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
            </ul>
          </div>
          <div class="content">
            <a href="#">Big Potatoes</a>
            <strong>$14.99 </strong>
            <div class="rating">
              <input type="radio" id="star5" name="rate" value="5" />
              <label for="star5" title="text"></label>
              <input type="radio" id="star4" name="rate" value="4" />
              <label for="star4" title="text"></label>
              <input type="radio" id="star3" name="rate" value="3" />
              <label for="star3" title="text"></label>
              <input type="radio" id="star2" name="rate" value="2" />
              <label for="star2" title="text"></label>
              <input checked="" type="radio" id="star1" name="rate" value="1" />
              <label for="star1" title="text"></label>
            </div>
            
            <a class="addToCart" href="#"><iconify-icon icon="heroicons:shopping-bag" width="24"
                height="24"></iconify-icon></a>
          </div>
        </div>
        
        <div class="productCard  ">
          <div class="thumbnail">
            <a href="#"><img src="{{ asset('frontendstyle/images/corn.png') }}" alt="Image 1" class="img-fluid"></a>
            <ul class="quickLinks">
              <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
              <li><a href="#"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
            </ul>
          </div>
          <div class="content">
            <a href="#">Corn</a>
            <strong>$14.99</strong>
            <div class="rating">
              <input type="radio" id="star5" name="rate" value="5" />
              <label for="star5" title="text"></label>
              <input type="radio" id="star4" name="rate" value="4" />
              <label for="star4" title="text"></label>
              <input type="radio" id="star3" name="rate" value="3" />
              <label for="star3" title="text"></label>
              <input type="radio" id="star2" name="rate" value="2" />
              <label for="star2" title="text"></label>
              <input checked="" type="radio" id="star1" name="rate" value="1" />
              <label for="star1" title="text"></label>
            </div>
            <a class="addToCart" href="#"><iconify-icon icon="heroicons:shopping-bag" width="24"
                height="24"></iconify-icon></a>
          </div>
        </div>
        
        <div class="productCard  ">
          <div class="thumbnail">
            <a href="#"><img src="{{ asset('frontendstyle/images/Product Image (13).png') }}" alt="Image 1" class="img-fluid"></a>
            <ul class="quickLinks">
              <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
              <li><a href="#"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
            </ul>
          </div>
          <div class="content">
            <a href="#">Red Chili</a>
            <strong>$14.99</strong>
            <div class="rating">
              <input type="radio" id="star5" name="rate" value="5" />
              <label for="star5" title="text"></label>
              <input type="radio" id="star4" name="rate" value="4" />
              <label for="star4" title="text"></label>
              <input type="radio" id="star3" name="rate" value="3" />
              <label for="star3" title="text"></label>
              <input type="radio" id="star2" name="rate" value="2" />
              <label for="star2" title="text"></label>
              <input checked="" type="radio" id="star1" name="rate" value="1" />
              <label for="star1" title="text"></label>
            </div>
            <a class="addToCart" href="#"><iconify-icon icon="heroicons:shopping-bag" width="24"
                height="24"></iconify-icon></a>
          </div>
        </div>
        
        <div class="productCard  ">
          <div class="thumbnail">
            <a href="#"><img src="{{ asset('frontendstyle/images/tomatos.png') }}" alt="Image 1" class="img-fluid"></a>
            <ul class="quickLinks">
              <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
              <li><a href="#"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
            </ul>
          </div>
          <div class="content">
            <a href="#">Red Tomatos</a>
            <strong>$14.99</strong>
            <div class="rating">
              <input type="radio" id="star5" name="rate" value="5" />
              <label for="star5" title="text"></label>
              <input type="radio" id="star4" name="rate" value="4" />
              <label for="star4" title="text"></label>
              <input type="radio" id="star3" name="rate" value="3" />
              <label for="star3" title="text"></label>
              <input type="radio" id="star2" name="rate" value="2" />
              <label for="star2" title="text"></label>
              <input checked="" type="radio" id="star1" name="rate" value="1" />
              <label for="star1" title="text"></label>
            </div>
            <a class="addToCart" href="#"><iconify-icon icon="heroicons:shopping-bag" width="24"
                height="24"></iconify-icon></a>
          </div>
        </div>
        
        <div class="productCard  ">
          <div class="thumbnail">
            <a href="#"><img src="{{ asset('frontendstyle/images/Product Image (12).png') }}" alt="Image 1" class="img-fluid"></a>
            <ul class="quickLinks">
              <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
              <li><a href="#"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
            </ul>
          </div>
          <div class="content">
            <a href="#">Green Chili</a>
            <strong>$14.99 </strong>
            <div class="rating">
              <input type="radio" id="star5" name="rate" value="5" />
              <label for="star5" title="text"></label>
              <input type="radio" id="star4" name="rate" value="4" />
              <label for="star4" title="text"></label>
              <input type="radio" id="star3" name="rate" value="3" />
              <label for="star3" title="text"></label>
              <input type="radio" id="star2" name="rate" value="2" />
              <label for="star2" title="text"></label>
              <input checked="" type="radio" id="star1" name="rate" value="1" />
              <label for="star1" title="text"></label>
            </div>
            <a class="addToCart" href="#"><iconify-icon icon="heroicons:shopping-bag" width="24"
                height="24"></iconify-icon></a>
          </div>
        </div>
        
        <div class="productCard  ">
          <div class="thumbnail">
            <a href="#"><img src="{{ asset('frontendstyle/images/Eggplant.png') }}" alt="Image 1" class="img-fluid"></a>
            <ul class="quickLinks">
              <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
              <li><a href="#"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
            </ul>
          </div>
          <div class="content">
            <a href="#">Eggplant</a>
            <strong>$14.99</strong>
            <div class="rating">
              <input type="radio" id="star5" name="rate" value="5" />
              <label for="star5" title="text"></label>
              <input type="radio" id="star4" name="rate" value="4" />
              <label for="star4" title="text"></label>
              <input type="radio" id="star3" name="rate" value="3" />
              <label for="star3" title="text"></label>
              <input type="radio" id="star2" name="rate" value="2" />
              <label for="star2" title="text"></label>
              <input checked="" type="radio" id="star1" name="rate" value="1" />
              <label for="star1" title="text"></label>
            </div>
            <a class="addToCart" href="#"><iconify-icon icon="heroicons:shopping-bag" width="24"
                height="24"></iconify-icon></a>
          </div>
        </div>
        
        <div class="productCard  ">
          <div class="thumbnail">
            <a href="#"><img src="{{ asset('frontendstyle/images/Fresh Cauliflower.png') }}" alt="Image 1" class="img-fluid"></a>
            <ul class="quickLinks">
              <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
              <li><a href="#"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
            </ul>
          </div>
          <div class="content">
            <a href="#">Fresh Cauliflower</a>
            <strong>$14.99</strong>
            <div class="rating">
              <input type="radio" id="star5" name="rate" value="5" />
              <label for="star5" title="text"></label>
              <input type="radio" id="star4" name="rate" value="4" />
              <label for="star4" title="text"></label>
              <input type="radio" id="star3" name="rate" value="3" />
              <label for="star3" title="text"></label>
              <input type="radio" id="star2" name="rate" value="2" />
              <label for="star2" title="text"></label>
              <input checked="" type="radio" id="star1" name="rate" value="1" />
              <label for="star1" title="text"></label>
            </div>
            <a class="addToCart" href="#"><iconify-icon icon="heroicons:shopping-bag" width="24"
                height="24"></iconify-icon></a>
          </div>
        </div>
        
        <div class="productCard  ">
          <div class="thumbnail">
            <a href="#"><img src="{{ asset('frontendstyle/images/Green Lettuce.png') }}" alt="Image 1" class="img-fluid"></a>
            <ul class="quickLinks">
              <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
              <li><a href="#"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
            </ul>
          </div>
          <div class="content">
            <a href="#">Green Lettuce</a>
            <strong>$14.99</strong>
            <div class="rating">
              <input type="radio" id="star5" name="rate" value="5" />
              <label for="star5" title="text"></label>
              <input type="radio" id="star4" name="rate" value="4" />
              <label for="star4" title="text"></label>
              <input type="radio" id="star3" name="rate" value="3" />
              <label for="star3" title="text"></label>
              <input type="radio" id="star2" name="rate" value="2" />
              <label for="star2" title="text"></label>
              <input checked="" type="radio" id="star1" name="rate" value="1" />
              <label for="star1" title="text"></label>
            </div>
            <a class="addToCart" href="#"><iconify-icon icon="heroicons:shopping-bag" width="24"
                height="24"></iconify-icon></a>
          </div>
        </div>
        
        <div class="productCard  ">
          <div class="thumbnail">
            <a href="#"><img src="{{ asset('frontendstyle/images/Green Apple.png') }}" alt="Image 1" class="img-fluid"></a>
            <ul class="quickLinks">
              <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
              <li><a href="#"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
            </ul>
          </div>
          <div class="content">
            <a href="#">Green Apple</a>
            <strong>$14.99</strong>
            <div class="rating">
              <input type="radio" id="star5" name="rate" value="5" />
              <label for="star5" title="text"></label>
              <input type="radio" id="star4" name="rate" value="4" />
              <label for="star4" title="text"></label>
              <input type="radio" id="star3" name="rate" value="3" />
              <label for="star3" title="text"></label>
              <input type="radio" id="star2" name="rate" value="2" />
              <label for="star2" title="text"></label>
              <input checked="" type="radio" id="star1" name="rate" value="1" />
              <label for="star1" title="text"></label>
            </div>
            <a class="addToCart" href="#"><iconify-icon icon="heroicons:shopping-bag" width="24"
                height="24"></iconify-icon></a>
          </div>
        </div>
      
        
       </div>
      </div>
</section>




 
 <!-- featuredproducts ends -->


 <!-- review  -->

<section id="review">
  <div class="container">
    <h1>What our Clients Says</h1>
     <div class="reviewcardsslider d-flex">
      <div class="reviewcards ">
        <div class=" reviewcardscount">
          <img src="{{ asset('frontendstyle/images/Vector.png') }}" alt="">
          <h6>“Aenean et nisl eget eros consectetur vestibulum vel id erat. Aliquam feugiat massa dui. Sed sagittis diam sit amet ante sodales semper. Aliquam commodo lorem laoreet ultricies ele. ”</h6>
        </div>
        <div class="reviewcardsimg">
          <img src="{{ asset('frontendstyle/images/Image (11).png') }}" alt="">
          <h5>Jenny Wilson</h5>
          <p>Customer</p>
        </div>
      </div>
      <div class="reviewcards ">
        <div class=" reviewcardscount">
          <img src="{{ asset('frontendstyle/images/Vector.png') }}" alt="">
          <h6>“Aenean et nisl eget eros consectetur vestibulum vel id erat. Aliquam feugiat massa dui. Sed sagittis diam sit amet ante sodales semper. Aliquam commodo lorem laoreet ultricies ele. ”</h6>
        </div>
        <div class="reviewcardsimg">
          <img src="{{ asset('frontendstyle/images/Image (12).png') }}" alt="">
          <h5>Jenny Wilson</h5>
          <p>Customer</p>
        </div>
      </div>
      <div class="reviewcards ">
        <div class=" reviewcardscount">
          <img src="{{ asset('frontendstyle/images/Vector.png') }}" alt="">
          <h6>“Aenean et nisl eget eros consectetur vestibulum vel id erat. Aliquam feugiat massa dui. Sed sagittis diam sit amet ante sodales semper. Aliquam commodo lorem laoreet ultricies ele. ”</h6>
        </div>
        <div class="reviewcardsimg">
          <img src="{{ asset('frontendstyle/images/Image (13).png') }}" alt="">
          <h5>Jenny Wilson</h5>
          <p>Customer</p>
        </div>
      </div>
      <div class="reviewcards ">
        <div class=" reviewcardscount">
          <img src="{{ asset('frontendstyle/images/Vector.png') }}" alt="">
          <h6>“Aenean et nisl eget eros consectetur vestibulum vel id erat. Aliquam feugiat massa dui. Sed sagittis diam sit amet ante sodales semper. Aliquam commodo lorem laoreet ultricies ele. ”</h6>
        </div>
        <div class="reviewcardsimg">
          <img src="{{ asset('frontendstyle/images/Image (12).png') }}" alt="">
          <h5>Jenny Wilson</h5>
          <p>Customer</p>
        </div>
      </div>
      <div class="reviewcards ">
        <div class=" reviewcardscount">
          <img src="{{ asset('frontendstyle/images/Vector.png') }}" alt="">
          <h6>“Aenean et nisl eget eros consectetur vestibulum vel id erat. Aliquam feugiat massa dui. Sed sagittis diam sit amet ante sodales semper. Aliquam commodo lorem laoreet ultricies ele. ”</h6>
        </div>
        <div class="reviewcardsimg">
          <img src="{{ asset('frontendstyle/images/Image (11).png') }}" alt="">
          <h5>Jenny Wilson</h5>
          <p>Customer</p>
        </div>
      </div>


    </div>
    
    <div class="lineheight leftArrow"><iconify-icon icon="bitcoin-icons:arrow-left-filled" width="24" height="24"></iconify-icon></div>
    <div class="lineheight rightArrow"><iconify-icon icon="bitcoin-icons:arrow-right-filled" width="24" height="24"></iconify-icon></div>
  
    <div class="video-container">
      <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://youtu.be/aRxymTETvXk?si=eOvPaXAYKlyttxJD">
        <img class="img-fluid" src="{{ asset('frontendstyle/images/Group 30.png') }}" alt="">
      </a>
    </div>
  </div>
</section>



 <!-- review ends -->


 <!-- latestnews  -->

 <section id="latestnewss">
  <div class="container">
    <h1>Latest News</h1>
    <div class="row latestnews">
      <div class="col-lg-4">
        <div class="card">
          <img src="{{ asset('frontendstyle/images/Image (14).png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Curabitur porttitor orci eget neque accumsan venenatis.</h5>
            <p class="card-text">Nulla libero lorem, euismod venenatis nibh sed, sodales dictum ex. Etiam nisi augue, malesuada et pulvinar at, posuere eu neque.</p>
          </div>
          <div class="card-body">
            <a class="cssbuttons-io-button">
              Read More
              <div class="icon">
                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
                </svg>
              </div>
            </a> 
          </div>
        </div>
      </div> 

      <div class="col-lg-4">
        <div class="card">
          <img src="{{ asset('frontendstyle/images/Image (15).png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Curabitur porttitor orci eget neque accumsan venenatis.</h5>
            <p class="card-text">Nulla libero lorem, euismod venenatis nibh sed, sodales dictum ex. Etiam nisi augue, malesuada et pulvinar at, posuere eu neque.</p>
          </div>
          <div class="card-body">
            <a class="cssbuttons-io-button">
              Read More
              <div class="icon">
                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
                </svg>
              </div>
            </a> 
          </div>
        </div>
      </div> 

      
      <div class="col-lg-4">
        <div class="card">
          <img src="{{ asset('frontendstyle/images/Image (16).png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Curabitur porttitor orci eget neque accumsan venenatis.</h5>
            <p class="card-text">Nulla libero lorem, euismod venenatis nibh sed, sodales dictum ex. Etiam nisi augue, malesuada et pulvinar at, posuere eu neque.</p>
          </div>
          <div class="card-body">
            <a class="cssbuttons-io-button">
              Read More
              <div class="icon">
                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
                </svg>
              </div>
            </a> 
          </div>
        </div>
      </div>
    </div> 
  </div> 
</section>






 <!-- latestnews ends -->


 <!-- email  -->





 <section id="email">
  <div class="container">
    <div class="row align-items-center">
      <!-- Logo - Order 1 on all screens -->
      <div class="col-lg-2 col-md-3 col-12 Newsletterimg d-flex align-items-center order-lg-1 order-md-1 order-1">
        <a href=""><img src="{{ asset('frontendstyle/images/Logo (1).png') }}" alt="Ecobazar Logo"></a>
        <div class="damotext d-none d-lg-none d-md-block ">
          <h3>Subscribe our Newsletter</h3>
          <p>Pellentesque eu nibh eget mauris congue mattis matti.</p>
        </div>
 </div>
      
      <!-- Form - Order 2 on mobile, Order 3 on larger screens -->
      <div class="col-lg-6 col-md-5 col-12 Newsletterform order-lg-3 order-md-3 order-2">
        <form class="search-form">
          <div class="search-input-wrapper">
            <input placeholder="Your email address" type="email">
            <button type="submit">Subscribe</button>
          </div>
        </form>
      </div>
      
      <!-- Text - Order 3 on mobile, Order 2 on larger screens -->
      <div class="col-lg-4 col-md-4 col-12 Newslettertext order-lg-2 order-md-2 order-3 d-lg-block d-block d-md-none">
        <h3>Subscribe our Newsletter</h3>
        <p>Pellentesque eu nibh eget mauris congue mattis matti.</p>
      </div>
    </div>
  </div>
</section>
 <!-- email ends -->

 
@endsection
@push('scripts')
    
   <script src="{{ asset('frontendstyle/js/app.js') }}"></script>
@endpush