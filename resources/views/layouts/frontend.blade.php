<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ env('APP_NAME') }} - @yield( 'title', "All in one place " )</title>
    <meta name="title" content="  {{ env('APP_NAME') }}  @yield( 'title',"-All in one place" ) " >
    <meta name="description" content="Naturall produced Vegetables and Fruits" />
    <meta name="name" content="Sabbir hossen">
    <link rel="shortcut icon" href="{{ asset('frontendstyle/images/plant 1.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('frontendstyle/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontendstyle/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontendstyle/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontendstyle/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontendstyle/css/frontendlayout.css') }}">
    <style>
      .midelheader .searchdiv {
        width: 500px;
      }
      .midelheader .form-control {
        width: 400px;
      }

     .cursor-dot {
position: fixed; left:0; top:0; width:12px; height:12px;
border-radius:50%; background: #5de6de;
box-shadow: 0 0 12px rgba(93,230,222,0.8), 0 0 20px rgba(255,154,158,0.5);
pointer-events:none; z-index:9999;
transition: transform 0.12s ease, background 0.2s ease;
}
.cursor-outline {
position: fixed; left:0; top:0; width:40px; height:40px;
border-radius:50%; border:2px solid #ff6b6b;
pointer-events:none; z-index:9998;
transition: transform 0.08s ease;
}

 </style>
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
                  <a href="{{ route('customer.login') }}">Sign In / Sign Up</a>
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
            <div class="col-lg-6 order-3 order-lg-2 d-flex   searchdiv"> <!-- w-100 -->
              <form class="d-flex" role="search" method="GET" action=" {{ route('frontend.category_archive') }}">
                <div class="search position-relative">
 <input
                  class="form-control"
                  type="search"
                  placeholder="Search"
                  aria-label="Search"
                  value="{{ request()->search }}"
                  name="search"
                />

                <div class="searchResult position-absolute bg-white w-100 shadow" style="padding: 20px; z-index: 1000; display: none;">
                  <ul>
                    
                  </ul>
                </div>
                </div>
               
                <button class="btn btn-outline-success" type="submit">
                  Search
                </button>



              </form>
            </div>
            <div
              class="col-lg-4 col-6 text-end order-2 order-lg-3 d-none d-lg-block"
            >
              <ul class="d-flex justify-content-center">
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
                <li class="cartprent"><a href="{{ route('checkout') }}">
                  <iconify-icon
                    icon="solar:bag-outline"
                    width="40"
                    height="40"
                  ></iconify-icon>
                  <span class="cartcounter">{{ $cart['cartCount'] }}</span>
                </a> </li>

                <li class="para1"><a href="{{ route('checkout') }}">
                  <p>Shopping cart:</p>
                  <h5>{{ number_format($cart['cartTotal'],2) }}৳</h5>
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
                  <li><a  href="{{ route('frontend.index')}}" class="{{ request()->routeIs('frontend.index') ? 'active1' : '' }}" >Home<iconify-icon icon="fe:arrow-down" width="24" height="24"></iconify-icon></a></li>
                  <li><a href="{{ route('frontend.category_archive') }}" class="{{ request()->routeIs('frontend.category_archive') ? 'active1' : '' }}">Shop<iconify-icon icon="fe:arrow-down" width="24" height="24"></iconify-icon></a></li>
                  <li><a href="{{ route('checkout')}}" class="{{ request()->routeIs('checkout') ? 'active1' : '' }}">Checkout<iconify-icon icon="fe:arrow-down" width="24" height="24"></iconify-icon></a></li>
                  <li><a href="{{ route('frontend.details')}}">Details<iconify-icon icon="fe:arrow-down" width="24" height="24"></iconify-icon></a></li>
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

<div class="cursor-dot" id="cursorDot"></div>
<div class="cursor-outline" id="cursorOutline"></div>
<div class="cursor-trail" id="cursorTrail"></div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script>
(function($){
const $dot = $('#cursorDot');
const $outline = $('#cursorOutline');
const $trail = $('#cursorTrail');


let mouseX = window.innerWidth/2, mouseY = window.innerHeight/2;
let outlineX = mouseX, outlineY = mouseY;


function lerp(a,b,n){ return (1-n)*a + n*b; }


$(window).on('mousemove', function(e){
mouseX = e.clientX;
mouseY = e.clientY;
$dot.css('transform', `translate(${mouseX}px, ${mouseY}px) translate(-50%,-50%)`);
spawnTrail(mouseX, mouseY);
});


$(window).on('mousedown', function(e){
burstSparkles(e.clientX, e.clientY, 10);
});


function animate(){
outlineX = lerp(outlineX, mouseX, 0.5); // Faster follow
outlineY = lerp(outlineY, mouseY, 0.5);
$outline.css('transform', `translate(${outlineX}px, ${outlineY}px) translate(-50%,-50%)`);
requestAnimationFrame(animate);
}
animate();


function spawnTrail(x,y){
const $t = $('<div class="trail-item"></div>');
const s = 5+Math.random()*8;
const hue = Math.floor(Math.random()*360);
$t.css({left:x+'px',top:y+'px',width:s+'px',height:s+'px',background:`hsl(${hue},80%,65%)`,opacity:0.8});
$trail.append($t);
const life = 600;
const start = performance.now();
function tick(now){
const t = (now-start)/life;
if(t>=1){$t.remove();return;}
const opacity = 0.8*(1-t);
const scale = 1-(t*0.6);
$t.css({transform:`translate(${x}px,${y-(t*30)}px) translate(-50%,-50%) scale(${scale})`,opacity:opacity});
requestAnimationFrame(tick);
}
requestAnimationFrame(tick);
}


function burstSparkles(x,y,count){
for(let i=0;i<count;i++){
const $s = $('<div class="trail-item"></div>');
const size = 4+Math.random()*6;
const hue = Math.floor(Math.random()*360);
$s.css({left:x+'px',top:y+'px',width:size+'px',height:size+'px',background:`hsl(${hue},100%,70%)`});
$trail.append($s);
const angle = Math.random()*Math.PI*2;
const speed = 50+Math.random()*60;
const vx = Math.cos(angle)*speed; const vy = Math.sin(angle)*speed;
const life = 700;
const start = performance.now();
function tick(now){
const t = (now-start)/life;
if(t>=1){$s.remove();return;}
const px = x+vx*t; const py = y+vy*t+t*t*30;
const opacity = 1-t;
const scale = 1-(t*0.7);
$s.css({transform:`translate(${px}px,${py}px) translate(-50%,-50%) scale(${scale})`,opacity:opacity});
requestAnimationFrame(tick);
}
requestAnimationFrame(tick);
}
}
})(jQuery);
</script>


    <!-- js start hear  -->
    <script src="{{ asset('frontendstyle/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontendstyle/js/venobox.min.js')}}"></script>
    <script src="{{ asset('frontendstyle/js/slick.min.js')}}"></script>
    <script src="{{ asset('frontendstyle/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.8/iconify-icon.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
            const Toast = Swal.mixin({
  toast: true,
  position: "top-end",
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.onmouseenter = Swal.stopTimer;
    toast.onmouseleave = Swal.resumeTimer;
  }
});


        </script>




<script>
$('.search input').keyup(function() {
    const searchValue = $(this).val();

    if (searchValue.length >= 3) {

        setTimeout(() => {
$.ajax({
    url: "{{ route('frontend.search') }}",
    type: "GET",
    data: { search: searchValue},
    success: function(response) {
        if(response.length > 0){
          let listItems = [];
          response.forEach(item => {
            let url = "{{ route('frontend.product.show', '::slug') }}";
            url = url.replace('::slug', item.slug);
            let liItem = `<li class="my-2"><a href="${url}">${item.title}</a></li>`
            listItems.push(liItem);
          });
          $('.searchResult ul').html(listItems);
        }else{
          $('.searchResult ul').html("No Product Found");
          
        }

    },
    error: function(error) {
        console.error(error);
    }

})

            $('.searchResult').slideDown();
        }, 250); // delay 500ms

    } else {
        $('.searchResult').hide();
    }
});
</script>


        {{-- <script>
          $('.search input').keyup(function() {
  const searchValue =  $(this).val()

  if(searchValue.length >= 3){

    $.ajax({
    url: "{{ route('frontend.search') }}",
    type: "GET",
    data: { search: searchValue},
    success: function(response) {
        if(response.length > 0){
          let listItems = [];
          response.forEach(item => {
            let url = "{{ route('frontend.product.show', '::slug') }}";
            url = url.replace('::slug', item.slug);
            let liItem = `<li class="my-2"><a href="${url}">${item.title}</a></li>`
            listItems.push(liItem);
          });
          $('.searchResult ul').html(listItems);
        }else{
          $('.searchResult ul').html("No Product Found");
          
        }

    },
    error: function(error) {
        console.error(error);
    }

})

    $('.searchResult').slideDown();
  }else{
    $('.searchResult').hide();
  }

});


        </script> --}}


        @if (session('success'))
            <script>
                Toast.fire({
                    icon: 'success',
                    title: '{{ session('success') }}'
                });
            </script>

@endif

    @stack('scripts')
  </body>
</html>


