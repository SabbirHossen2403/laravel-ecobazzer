@extends('layouts.frontend')

@push('style')
    <link rel="stylesheet" href="{{ asset('frontendstyle/css/Details.css') }}"> 
    <link rel="stylesheet" href="{{ asset('frontendstyle/css/Detailsresponsive.css') }}"> 
    
@endpush
@section('title', $product->title ?? 'Details')
@section('content')
    

    <!-- banner -->

<section id="banner">
    <div class="container">
    <ul class="manu d-flex">
      <li><a href="./homepage4.html"><iconify-icon icon="material-symbols:home-outline" width="24" height="24"></iconify-icon></a></li>
      <li><iconify-icon icon="weui:arrow-filled" width="12" height="24"></iconify-icon></li>
      <li><a href="">Categories</a></li>
      <li><iconify-icon icon="weui:arrow-filled" width="12" height="24"></iconify-icon></li>
      <li><a class="green" href="">{{ $product->title}}</a></li>
    </ul>
    </div>
    </section>

    

<!-- banner -->


<!-- cabbage  -->


<section id="chinese">
    <div class="container">
        <div class="row">
            <div class="col-lg-5  leftsite">
                <div class="product-slider-wrapper"> <!-- Added wrapper for positioning -->
                    <div class="product-slider">
                        <div><img class="img-fluid" src=" {{ getimage( $product->featured_img ) }}" alt="{{ $product->title}}"></div>
                        
                        @if (count(json_decode($product->gallery_img ?? '[]')) > 0)
                        @foreach (json_decode($product->gallery_img ?? '[]') as $img)
                        <div><img class="img-fluid"  src=" {{ getimage($img) }}" alt="{{ $product->title}}"></div>


                        @endforeach
                            
                        @endif
                        
                       </div>

                    <div class="product-thumbnail">
                        <div><img class="img-fluid"  src=" {{ getimage( $product->featured_img ) }}" alt="{{ $product->title}}"></div>
                       
                       
                       
                        @if (count(json_decode($product->gallery_img ?? '[]')) > 0)
                        @foreach (json_decode($product->gallery_img ?? '[]') as $img)
                        <div><img class="img-fluid"  src="{{ getimage( $img ) }}" alt="{{ $product->title}}"></div>


                        @endforeach
                            
                        @endif
                        
                       
                       </div>
                </div>
            </div>
            <div class="col-lg-7 col-12">
              <div class="headingcabbage d-flex">
              <h1>{{ $product->title}}</h1>
              @if ( $product->stock)
              <h6 class="Stock-in">In Stock</h6>
              @else
              <h6 class="Stock-out">Out of Stock</h6>
                  
              @endif
            </div>
              <div class="review d-flex justify-content-start">
               
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
                <p> 4 Review</p>
                <i id="dot" class="fa-solid fa-circle" style="color: #9ca1ab; font-size: 5px;"></i>          
              <div class="sku d-flex ">
              <h6>SKU:</h6>
              <span>{{ $product->sku }}</span>
            </div>
              
              </div>
           
          
           
           
              <div class="product-details">
                <div class="price-container">
                  @if ($product->selling_price)
                  <div class="current-price">{{ number_format($product->selling_price,2)}}৳</div>
                      <div class="original-price">{{ number_format($product->price,2)}}৳</div>
                    <div class="discount-badge">
                      {{ round(100 - ((100/$product->price) * $product->selling_price))}}
                      % Off</div>
                    @else
                    <div class="original-price">{{ number_format($product->price,2)}}৳</div>
                  @endif
                  
                </div>

                <div class="row">
                 <div class="col-lg-5 col-4">
                <div class="brand-info">
                   <a href="">Brand: <img class="img-fluid" src=" {{ getimage($product->brand->brand_icon) }}" alt=""> </a> 
                </div>
              </div>
              <div class="col-lg-7  col-8 d-flex ">
                <div class="share-option d-flex align-items-center">
               <h5> Share item :</h5>    
                <div class="card">
                      <a class="socialContainer containerOne" href="#">
                        <svg viewBox="0 0 16 16" class="socialSvg instagramSvg"> <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path> </svg>
                      </a>
                      
                      <a class="socialContainer containerTwo" href="#">
                        <svg viewBox="0 0 16 16" class="socialSvg twitterSvg"> <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path> </svg>
                      </a>
                        
                      <a class="socialContainer containerThree" href="#">
                        <svg viewBox="0 0 448 512" class="socialSvg linkdinSvg"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path></svg>
                      </a>
                      
                      <a class="socialContainer containerFour" href="#">
                        <svg viewBox="0 0 16 16" class="socialSvg whatsappSvg"> <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path> </svg>
                      </a>
                    </div>
                </div>
              </div>
              </div>

              <p id="aptent"> {!!$product->short_details!!} </p>
              <form action="{{ route('cart.add', $product->id) }}" ">
                <div class="add-to-cart lineheight">
                    <div class="quantity-selector d-flex">
                        <button type="button" class="quantity-btn minus">-</button>
                        <input type="text" class="quantity-input" name="qty" value="1" min="1">
                        <button type="button" class="quantity-btn plus">+</button>
                    </div>
                    <button type="submit" class="add-to-cart-btn ">Add to Cart <iconify-icon class="lineheight" icon="solar:bag-linear" width="24" height="24"></iconify-icon></button>
                      <button id="heart" type="submit"><iconify-icon icon="iconamoon:heart-light" width="24" height="24"></iconify-icon></button>
                  </div>
                </form>
                <div class="catagory d-flex">
                    <h6 >Category:</h6>
                    <p>Vegetables</p>
                </div>
                
                <div class="tag d-flex">
                    <h6>Tag:</h6>
                    <p>Vegetables   Healthy  <span>Chinese </span>  Cabbage  Green Cabbage</p>
                    
                </div>
                
              
           
           
           
           
            </div>
        </div>
    </div>
</section>



<!-- cabbage ends -->



<!-- tab -->

<section id="tab">
  <div class="container ">
    <div class="row">
      <div class="product-tabs d-flex justify-content-center">
        @if (!empty($product->long_details))
        <button class="tab-btn active" data-tab="descriptions">Descriptions</button>
        @endif
        @if (!empty($product->additional_info))
          <button class="tab-btn" data-tab="additional">Additional Information</button>
        @endif

        <button class="tab-btn" data-tab="feedback">Customer Feedback</button>
      </div>
      @if (!empty($product->long_details))
      <div class="tab-content active" id="descriptions">
          <p>{!! $product->long_details !!}</p>
      </div>
      @endif
      @if (!empty($product->additional_info))
        <div class="tab-content" id="additional">
          <table class="info-table">
              <tr>
                  {!! $product->additional_info !!}
              </tr>
          </table>
        </div>
      @endif
      
      
            <div class="tab-content" id="feedback">
<div class="row">
  <div class="@auth col-lg-8 @else col-lg-12 @endauth">
    @foreach ($reviews as $review)
    <div class="reviewbox mt-3">
      <div class="topsection d-flex">
        <img src="{{ asset('frontendstyle/images/Image (11).png') }}" alt="">

        <h4 class="reviewheading">{{ auth()->user()->name }}</h4> 
         <div class="rating">
                   @for ($i = 5; $i >= 1; $i--)
        <input type="radio" id="star{{ $i }}" name="rate{{ $review->id }}" value="{{ $i }}" {{ $review->rating == $i ? 'checked' : '' }} />
        <label for="star{{ $i }}" title="{{ $i }} stars"></label>
    @endfor
                </div>
                <span class="create_date">{{ $review->created_at->diffForHumans() }}</span>
              </div>
              <p class="text-start"> {{ $review->reviewText ?? 'No review text provided.' }}</p>
    </div>
     @endforeach
  </div>

@auth
      

  <div class="col-lg-4 userreviewform">

<form id="reviewForm" action="{{ route('frontend.review.submite') }}" method="POST" >
    @csrf
    <div class="mb-4 text-center">
        <label class="form-label d-block">Your Rating</label>
        <!-- Number input -->
        <input type="number" class="form-control mb-3" id="numberRating" name="rating" placeholder="Enter your rating" min="1" max="5" step="0.1">

        <input type="hidden" name="product_id" value="{{$product->id}}">
        <!-- Star rating -->
        <div class="rating" id="starRating">
            <span class="star"><i class="fas fa-star"></i></span>
            <span class="star"><i class="fas fa-star"></i></span>
            <span class="star"><i class="fas fa-star"></i></span>
            <span class="star"><i class="fas fa-star"></i></span>
            <span class="star"><i class="fas fa-star"></i></span>

            {{-- <input type="radio" id="star5" name="rating" value="5" />
            <label for="star5"><i class="fas fa-star"></i></label>

            <input type="radio" id="star4" name="rating" value="4" />
            <label for="star4" title="4 stars"></label>

            <input type="radio" id="star3" name="rating" value="3" />
            <label for="star3" title="3 stars"></label>

            <input type="radio" id="star2" name="rating" value="2" />
            <label for="star2" title="2 stars"></label>

            <input type="radio" id="star1" name="rating" value="1" />
            <label for="star1" title="1 star"></label> --}}
        </div>
    </div>

    <div class="mb-4">
        <label for="reviewText" class="form-label">Your Review</label>
        <textarea class="form-control" id="reviewText" name="reviewText" rows="5" placeholder="Tell us more about your experience..." maxlength="500"></textarea>
        <div class="character-count"><span id="charCount">0</span>/500 characters</div>
    </div>

    <button type="submit" class="btn-submit">Submit Review</button>
</form>
</div>
@endauth


</div>
</div>  
      
  
    </div>
  </div>
</section>



<!-- tab end -->


<!-- related start -->
<section id="related">
  <div class="container">
    <h2 class="text-center mb-4"> Related Products</h2>
    <div class="row prodcutrow">
                        @forelse ($relatedProducts as $relatedProduct)
                            <div class="col-lg-3 productcard">

                                <div class="card h-100">
                                    <a href="{{ route('frontend.product.show', $relatedProduct->slug) }}"> <img src="{{ getimage($relatedProduct->featured_img) }}"
                                            class="card-img card-img-top" alt="..."> </a>
                                    <div class="card-body">
                                        <a href="{{ route('frontend.product.show', $relatedProduct->slug) }}">
                                            <h4 class="card-text">{{ $relatedProduct->title }}</h4>
                                        </a>
                                        <a class="d-flex pricetext" href="{{ route('frontend.product.show', $relatedProduct->slug) }}">
                                            @if ($relatedProduct->selling_price)
                                                <h5 class="card-title">{{ number_format($relatedProduct->selling_price, 2) }}৳
                                                </h5>
                                                <span>{{ number_format($relatedProduct->price, 2) }}৳</span>
                                            @else
                                                <h5 class="card-title">{{ number_format($relatedProduct->price, 2) }}৳</h5>
                                            @endif


                                        </a>
                                        <span>
                                            <div class="rating">
                                                <input value="5" name="rate" id="star5" type="radio">
                                                <label title="text" for="star5"></label>
                                                <input value="4" name="rate" id="star4" type="radio">
                                                <label title="text" for="star4"></label>
                                                <input value="3" name="rate" id="star3" type="radio"
                                                    checked="">
                                                <label title="text" for="star3"></label>
                                                <input value="2" name="rate" id="star2" type="radio">
                                                <label title="text" for="star2"></label>
                                                <input value="1" name="rate" id="star1" type="radio">
                                                <label title="text" for="star1"></label>
                                            </div>
                                        </span>

                                        <a class="addToCart" href=""><i
                                                class="fa-solid fa-cart-shopping cartbutton"></i></a>

                                        <div class="action-icons" id="actionIcons">
                                            <a class="icon-button cart-icon">
                                                <i class="fa-solid fa-cart-shopping"></i>
                                            </a>
                                            <a class="icon-button like-icon">
                                                <i class="fa-solid fa-heart"></i>
                                            </a>
                                            <a class="icon-button view-icon">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a class="icon-button share-icon">
                                                <i class="fa-solid fa-share-nodes"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        @empty
                            <h4 class="text-danger noItems">NO ITEMS FOUND</h4>
                        @endforelse
                    </div>

  </div>
  

</section>


<!-- related end -->





<!-- email  -->
<section id="email">
    <div class="container">
      <div class="row align-items-center">
        <!-- Logo - Order 1 on all screens -->
        <div class="col-lg-4 col-md-4 col-12 Newslettertext order-lg- order-md-2 order-3 d-lg-block d-block d-md-none">
          <h3>Subscribe our Newsletter</h3>
          <p>Pellentesque eu nibh eget mauris congue mattis matti.</p>
        </div>
       
        
        <!-- Form - Order 2 on mobile, Order 3 on larger screens -->
        <div class="col-lg-5 col-md-5 col-12 Newsletterform order-lg-2 order-md-3 order-2">
          <form class="search-form">
            <div class="search-input-wrapper">
              <input placeholder="Your email address" type="email">
              <button type="submit">Subscribe</button>
            </div>
          </form>
        </div>
        
        <!-- Text - Order 3 on mobile, Order 2 on larger screens -->
        <div class="col-lg-3 col-md-3 col-12 Newsletterimg d-flex align-items-center order-lg-3 order-md-1 order-1">
          <div class="card">
            <a class="socialContainer containerOne" href="#">
              <svg viewBox="0 0 16 16" class="socialSvg instagramSvg"> <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path> </svg>
            </a>
            
            <a class="socialContainer containerTwo" href="#">
              <svg viewBox="0 0 16 16" class="socialSvg twitterSvg"> <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path> </svg>
            </a>
              
            <a class="socialContainer containerThree" href="#">
              <svg viewBox="0 0 448 512" class="socialSvg linkdinSvg"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path></svg>
            </a>
            
            <a class="socialContainer containerFour" href="#">
              <svg viewBox="0 0 16 16" class="socialSvg whatsappSvg"> <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path> </svg>
            </a>
          </div>
                       
          
          
          <div class="damotext d-none d-lg-none d-md-block ">
            <h3>Subscribe our Newsletter</h3>
            <p>Pellentesque eu nibh eget mauris congue mattis matti.</p>
          </div>
   </div>
      </div>
    </div>
  </section>
  
  
  <!-- email ends -->
@endsection


@push('scripts')
<script src=" {{ asset('frontendstyle/js/Details.js') }} "></script>
<script>
const numberInput = document.getElementById('numberRating');
const stars = document.querySelectorAll('#starRating .star');
const reviewText = document.getElementById('reviewText');
const charCount = document.getElementById('charCount');

// Update stars based on number input
numberInput.addEventListener('input', () => {
    let value = parseFloat(numberInput.value);
    if (value > 5) value = 5;
    if (value < 0) value = 0;

    stars.forEach((star, index) => {
        const starValue = index + 1;
        const icon = star.querySelector('i');

        if (value >= starValue) {
            // Full star
            icon.className = 'fas fa-star';
            icon.style.color = 'gold';
        } else if (value > index && value < starValue) {
            // Half star
            icon.className = 'fas fa-star-half-alt';
            icon.style.color = 'gold';
        } else {
            // Empty star
            icon.className = 'fas fa-star';
            icon.style.color = '#ddd';
        }
    });
});

// Character count update
reviewText.addEventListener('input', () => {
    charCount.textContent = reviewText.value.length;
});
</script>
@endpush




