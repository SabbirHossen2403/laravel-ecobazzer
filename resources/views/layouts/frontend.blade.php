<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ env('APP_NAME') }} - @yield( 'title', "All in one place " )</title>
    <meta name="title" content="  {{ env('APP_NAME') }}  @yield( 'title',"-All in one place " ) " >
    <meta name="description" content="Naturall produced Vegetables and Fruits" />
    <meta name="name" content="Sabbir hossen">
    <link rel="shortcut icon" href="{{ asset('frontendstyle/images/plant 1.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('frontendstyle/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontendstyle/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontendstyle/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontendstyle/css/slick.css') }}">
    @stack('style')
  </head>
  <body>
    <header>
      <!-- topheader starts -->
      <div class="topheader">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 rightsite d-flex text-center">
              <iconify-icon
                icon="mdi:location"
                width="30"
                height="30"
              ></iconify-icon>
              <p>Store Location: Lincoln- 344, Illinois, Chicago, USA</p>
            </div>
            <div class="col-lg-4 text-center liftsite d-flex d-none d-lg-block">
              <ul>
                <li>
                  <select>
                    <option value="ENG">ENG</option>
                    <option value="BNG">BNG</option>
                  </select>
                </li>
                <li>
                  <select>
                    <option value="USD">USD</option>
                    <option value="BNG">BNG</option>
                  </select>
                </li>
                <li class="lineheight">
                  <iconify-icon
                    icon="fluent:divider-tall-24-regular"
                    width="24"
                    height="24"
                  ></iconify-icon>
                </li>

                <li>
                  <a href="">Sign In / Sign Up</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- topheader ends -->

      <!-- midelheader starts -->
      <div class="midelheader">
        <div class="container">
          <div class="row">
            <div
              class="col-lg-2 col-6 order-1 order-lg-1 justify-content-start"
            >
              <a href=""><img src="{{ asset('frontendstyle/images/Logo (1).png') }}" alt="" /></a>
            </div>
            <div class="col-lg-6 order-3 order-lg-2">
              <form class="d-flex" role="search">
                <input
                  class="form-control"
                  type="search"
                  placeholder="Search"
                  aria-label="Search"
                />
                <button class="btn btn-outline-success" type="submit">
                  Search
                </button>
              </form>
            </div>
            <div
              class="col-lg-4 col-6 text-end order-2 order-lg-3 d-none d-lg-block"
            >
              <ul class="d-flex">
                <li><a href="">
                  <iconify-icon
                    icon="solar:heart-outline"
                    width="40"
                    height="40"
                  ></iconify-icon>
                </a> </li>
                <li class="lineheight">
                  <iconify-icon
                    icon="fluent:divider-tall-24-regular"
                    width="40"
                    height="40"
                  ></iconify-icon>
                </li>
                <li class="cartprent"><a href="./cart.html">
                  <iconify-icon
                    icon="solar:bag-outline"
                    width="40"
                    height="40"
                  ></iconify-icon>
                  <span class="cartcounter">2</span>
                </a> </li>

                <li class="para1"><a href="./cart.html">
                  <p>Shopping cart:</p>
                  <h5>$57.00</h5>
                </a></li>
              </ul>
            </div>
            <div
              class="option col-6 d-block d-lg-none order-2 order-lg-3 text-end"
            >
              <ul class="">
                <li>
                  <a
                    data-bs-toggle="offcanvas"
                    href="#offcanvasExample"
                    role="button"
                    aria-controls="offcanvasExample"
                    ><iconify-icon
                      icon="tabler:menu-3"
                      width="34"
                      height="34"
                    ></iconify-icon
                  ></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- midelheader ends -->
      <!-- offcanvas start -->
      <div
        class="offcanvas offcanvas-start"
        tabindex="-1"
        id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel"
      >
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasExampleLabel"><img src="" alt=""></h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="offcanvas"
            aria-label="Close"
          ></button>
        </div>
        <div class="offcanvas-body">
          <div>
            <ul class="list">
              <li><a href="{{ route('frontend.index')}}">HOME</a></li>
              <li><a href="./shop.html">Shop</a></li>
              <li><a href="./Details.html">Details</a></li>
              <li><a href="./16_Checkout.html">Checkout</a></li>
              <li><a href="">About us</a></li>
              <li><a href="">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- offcanvas ends -->

      <!-- buttomheader -->
      <div id="buttomheader" class="d-none d-lg-block">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-9">
              <div class="liftmanu">
                <ul class="d-flex align-items-center ">
                  <li >
                    <a class="active" href=""><iconify-icon icon="ic:round-menu" width="24" height="24"></iconify-icon>All Categories<iconify-icon icon="fe:arrow-down" width="24" height="24"></iconify-icon></a>
                  
               <ul class="categorySubmenu">
    @foreach($categories as $category)
        <li>
            <a href="{{ route('frontend.category_archive', $category->category_url) }}" >
                <img 
                    src="{{ $category->category_icon ? asset('storage/' . $category->category_icon) : asset('images/default-icon.png') }}" 
                    alt="" 
                    style="width: 24px; height: 24px; object-fit: contain; margin-right: 5px;"
                >
                {{ ucfirst($category->category_name) }}

            </a>
        </li>
    @endforeach
</ul>

                  
                  </li>
                  <li><a  href="{{ route('frontend.index')}}" class="active1" >Home<iconify-icon icon="fe:arrow-down" width="24" height="24"></iconify-icon></a></li>
                  <li><a href="{{ route('frontend.shop') }}">Shop<iconify-icon icon="fe:arrow-down" width="24" height="24"></iconify-icon></a></li>
                  <li><a href="./16_Checkout.html">Checkout<iconify-icon icon="fe:arrow-down" width="24" height="24"></iconify-icon></a></li>
                  <li><a href="./Details.html">Details<iconify-icon icon="fe:arrow-down" width="24" height="24"></iconify-icon></a></li>
                  <li><a href="">About Us</a></li>
                  <li><a href="">Contact Us</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3">
              <a href="tel:2195550114" class="d-flex align-items-center contactNum">
                <iconify-icon icon="line-md:phone-call" width="25" height="25"></iconify-icon>
                (219) 555-0114
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- footer  -->
      <footer class="d-block d-lg-none">
        <div class="footersection d-flex">
          <div class="container">
            <div class="row text-center">
              <div class="col-3">
                <a href="./shop.html"
                  ><iconify-icon
                    icon="material-symbols:home"
                    width="24"
                    height="24"
                  ></iconify-icon
                ></a>
                <p>Shop</p>
              </div>
              <div class="col-3">
                <a href=""
                  ><iconify-icon
                    icon="solar:heart-linear"
                    width="24"
                    height="24"
                  ></iconify-icon
                ></a>
                <p>Favourite</p>
              </div>
              <div class="col-3">
                <a href="./cart.html"
                  ><iconify-icon
                    icon="mdi:cart-outline"
                    width="24"
                    height="24"
                  ></iconify-icon
                ></a>
                <p>Cart</p>
              </div>
              <div class="col-3">
                <a href=""
                  ><iconify-icon
                    icon="uil:setting"
                    width="24"
                    height="24"
                  ></iconify-icon
                ></a>
                <p>My profile</p>
              </div>
            </div>
          </div>
        </div>
      </footer>

      <!-- footer ends -->

      <!-- buttomheader ends -->
    </header>


  <main>
 
    @yield('content')
 
</main>


 <!-- shopery-footer  -->



 <footer class="shopery-footer">
  <div class="container">
      <div class="footer-content">
          <div class="footer-about">
              <h3>About Shopery</h3>
              <p>Maind during monitor anim laberini mobiletie but it provides junior BA, sport laberinum morgue, congue nice.</p>
              <div class="contact-info">
                  <p>(98) 595-018</p>
                  <p>Privacy@gmail.com</p>
              </div>
          </div>
          
          <div class="footer-links">
              <div class="links-column">
                  <h4>My Account</h4>
                  <ul>
                      <li><a href="#">My Account</a></li>
                      <li><a href="#">Order History</a></li>
                      <li><a href="#">Shaping Cart</a></li>
                      <li><a href="#">Weather</a></li>
                      <li><a href="#">Settings</a></li>
                  </ul>
              </div>
              
              <div class="links-column">
                  <h4>Helps</h4>
                  <ul>
                      <li><a href="#">Content</a></li>
                      <li><a href="#">Total</a></li>
                      <li><a href="#">Terms & Condition</a></li>
                      <li><a href="#">Privacy Policy</a></li>
                      <li><a href="#">Trade Order</a></li>
                  </ul>
              </div>
              
              <div class="links-column">
                  <h4>Proxy</h4>
                  <ul>
                      <li><a href="#">About</a></li>
                      <li><a href="#">Shop</a></li>
                      <li><a href="#">Product</a></li>
                      <li><a href="#">Products Details</a></li>
                  </ul>
              </div>
              
              <div class="links-column">
                  <h4>Instagram</h4>
                  <a href=""><img class="img-fluid" src="{{ asset('frontendstyle/images/Instagram (1).png') }}" alt=""></a>     
              </div>
          </div>
      </div>
      
      <div class="footer-bottom">
          <p>&copy; 2023 Shopery. All rights reserved.</p>
      </div>
  </div>
</footer>







 <!-- shopery-footer ends -->





    <!-- js start hear  -->
    <script src="{{ asset('frontendstyle/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontendstyle/js/venobox.min.js')}}"></script>
    <script src="{{ asset('frontendstyle/js/slick.min.js')}}"></script>
    <script src="{{ asset('frontendstyle/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.8/iconify-icon.min.js"></script>
   
    @stack('scripts')
  </body>
</html>


