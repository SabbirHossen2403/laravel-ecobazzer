@extends('layouts.frontend')


@push('style')
    <link rel="stylesheet" href="{{ asset('frontendstyle/css/shopstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('frontendstyle/css/shopresponsive.css') }}">
@endpush
@section('title', $category->category_name ?? 'Shop')
@section('content')


    <!-- banner section starts here -->


    <section id="banner">
        <div class="container">
            <ul class="manu d-flex">
                <li><a href=" {{ route('frontend.index') }} "><iconify-icon icon="material-symbols:home-outline" width="24"
                            height="24"></iconify-icon></a></li>
                <li><iconify-icon icon="weui:arrow-filled" width="12" height="24"></iconify-icon></li>
                <li><a href="">Categories</a></li>
                <li><iconify-icon icon="weui:arrow-filled" width="12" height="24"></iconify-icon></li>
                <li><a class="green" href="">{{ request()->category_url ?? 'Shop' }}</a></li>
            </ul>
        </div>
    </section>










    <!-- banner section end here -->





    <!--cards section start hear  -->
    <form action="" method="GET">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">


                        <div class="filter-section1">

                            <button type="submit" class="filter-button">Filter</button>


                            {{-- <button type="submit" class="">
                            Filter
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5"
                                    d="M3 7h3M3 17h6m9 0h3M15 7h6M6 7c0-.932 0-1.398.152-1.765a2 2 0 0 1 1.083-1.083C7.602 4 8.068 4 9 4s1.398 0 1.765.152a2 2 0 0 1 1.083 1.083C12 5.602 12 6.068 12 7s0 1.398-.152 1.765a2 2 0 0 1-1.083 1.083C10.398 10 9.932 10 9 10s-1.398 0-1.765-.152a2 2 0 0 1-1.083-1.083C6 8.398 6 7.932 6 7m6 10c0-.932 0-1.398.152-1.765a2 2 0 0 1 1.083-1.083C13.602 14 14.068 14 15 14s1.398 0 1.765.152a2 2 0 0 1 1.083 1.083C18 15.602 18 16.068 18 17s0 1.398-.152 1.765a2 2 0 0 1-1.083 1.083C16.398 20 15.932 20 15 20s-1.398 0-1.765-.152a2 2 0 0 1-1.083-1.083C12 18.398 12 17.932 12 17"
                                    color="currentColor" />
                            </svg>
                        </button> --}}


                        </div>

                        <div class="main-content">
                            <div class="filter-section" id="filterSection">
                                <div class="filter-group">
                                    <h3>All Categories</h3>
                                    @foreach ($productsCategorys as $productsCategory)
                                        <div class="filter-option">
                                            <label>
                                                <input class="checkmark" type="radio"
                                                    id="{{ $productsCategory->category_url }}" name="category"
                                                    value="{{ $productsCategory->id }}" />
                                                <div class="checkmark">
                                                    <span class="off"></span>
                                                    <span class="on"></span>
                                                </div>
                                            </label>
                                            <label for="{{ $productsCategory->category_url }}"
                                                class="label">{{ $productsCategory->category_name }}
                                                ({{ $productsCategory->products_count }})</label>
                                        </div>
                                    @endforeach
                                </div>


                                @php
                                    $min_price =
                                        $products->pluck('price')->min() < $products->pluck('selling_price')->min()
                                            ? $products->pluck('price')->min()
                                            : $products->pluck('selling_price')->min();
                                    $max_price =
                                        $products->pluck('price')->max() > $products->pluck('selling_price')->max()
                                            ? $products->pluck('price')->max()
                                            : $products->pluck('selling_price')->max();
                                @endphp


                                <div class="price-filter-container">
                                    <div class="price-header">
                                        <h3 class="price-title">Price Range</h3>
                                        <span class="toggle-arrow"></span>
                                    </div>

                                    <div class="range-slider-container">
                                        <div class="slider-track"></div>
                                        <div class="slider-range"></div>
                                        <input name="minprice" type="range" min="{{ $min_price }}"
                                            max="{{ $max_price }}" value="{{ old('minprice', $min_price) }}"
                                            id="slider-min">
                                        <input name="maxprice" type="range" min="{{ $min_price }}"
                                            max="{{ $max_price }}" value="{{ old('maxprice', $max_price) }}"
                                            id="slider-max">
                                    </div>

                                    <div class="price-display">
                                        <div class="price-value">Min: <span
                                                id="price-min">{{ old('minprice', $min_price) }}</span></div>
                                        <div class="price-separator"></div>
                                        <div class="price-value">Max: <span
                                                id="price-max">{{ old('maxprice', $max_price) }}</span></div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h3>Rating</h3>
                                    <div class="ratingdiv d-flex">
                                        <label class="custom-checkbox">
                                            <input name="rating" type="checkbox" value="5" id="fivestar">
                                            <span class="checkmark"></span>
                                        </label>
                                        <div class="rating">
                                            <span id="rationnumber">5.0</span>
                                            <label for="fivestar" style="font-size: 20px">⭐⭐⭐⭐⭐ </label>
                                        </div>
                                    </div>

                                    <div class="ratingdiv d-flex">
                                        <label class="custom-checkbox">
                                            <input name="rating" type="checkbox" value="4" id="fourstar">
                                            <span class="checkmark"></span>
                                        </label>
                                        <div class="rating">
                                            <span id="rationnumber">4.0 & up</span>
                                            <label for="fourstar" style="font-size: 20px">⭐⭐⭐⭐ </label>
                                        </div>
                                    </div>

                                    <div class="ratingdiv d-flex">
                                        <label class="custom-checkbox">
                                            <input name="rating" type="checkbox" value="3" id="threestar">
                                            <span class="checkmark"></span>
                                        </label>
                                        <div class="rating">
                                            <span id="rationnumber"> 3.0 & up</span>
                                            <label for="threestar" style="font-size: 20px">⭐⭐⭐ </label>
                                        </div>
                                    </div>

                                    <div class="ratingdiv d-flex">
                                        <label class="custom-checkbox">
                                            <input name="rating" type="checkbox" value="2" id="towstar">
                                            <span class="checkmark"></span>
                                        </label>
                                        <div class="rating ">
                                            <span id="rationnumber"> 2.0 & up</span>
                                            <label for="towstar" style="font-size: 20px">⭐⭐ </label>
                                        </div>
                                    </div>

                                    <div class="ratingdiv d-flex">
                                        <label class="custom-checkbox">
                                            <input name="rating" type="checkbox" value="1" id="onestar">
                                            <span class="checkmark"></span>
                                        </label>
                                        <div class="rating ">
                                            <span id="rationnumber"> 1.0 </span>
                                            <label for="onestar" style="font-size: 20px">⭐ </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="populartags">

                                    <div class="tags-container">
                                        <h1>Popular Tags</h1>
                                        <div class="tags-grid" id="tagsGrid">
                                            <span class="tag active">Healthy</span>
                                            <span class="tag highlighted">Low fat</span>
                                            <span class="tag">Vegetarian</span>
                                            <span class="tag1">Kid foods</span>
                                            <span class="tag1">Meat</span>
                                            <span class="tag1">Vitamins</span>
                                            <span class="tag">Bread</span>
                                            <span class="tag">Snacks</span>
                                            <span class="tag">Tiffin</span>
                                            <span class="tag">Launch</span>
                                            <span class="tag">Dinner</span>
                                            <span class="tag">Breakfast</span>
                                            <span class="tag">Fruit</span>
                                        </div>
                                    </div>

                                </div>

                                <div class="bannerimg">
                                    <a href=""><img class="img-fluid"
                                            src="{{ asset('frontendstyle/images/Bannar.png') }}" alt=""></a>
                                </div>
                                <div class="saleproducts">
                                    <h4>Sale Products</h4>
                                    <div class="saleproductsimg">

                                        <div class="card">
                                            <div class="card-1">
                                                <a href="#"><img
                                                        src="{{ asset('frontendstyle/images/Imagesm.png') }}"
                                                        alt=""></a>

                                            </div>
                                            <div class="right">
                                                <div class="card-2">
                                                    <a href="#">Red Capsicum</a>
                                                    <a href="#">
                                                        <h2>$32.00 <span>$20.99</span></h2>
                                                    </a>
                                                    <div class="rating ">
                                                        <input type="radio" id="star5" name="rate"
                                                            value="5" />
                                                        <label for="star5" title="text"></label>
                                                        <input type="radio" id="star4" name="rate"
                                                            value="4" />
                                                        <label for="star4" title="text"></label>
                                                        <input type="radio" id="star3" name="rate"
                                                            value="3" />
                                                        <label for="star3" title="text"></label>
                                                        <input type="radio" id="star2" name="rate"
                                                            value="2" />
                                                        <label for="star2" title="text"></label>
                                                        <input checked type="radio" id="star1" name="rate"
                                                            value="1" />
                                                        <label for="star1" title="text"></label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="saleproductsimg">

                                        <div class="card">
                                            <div class="card-1">
                                                <a href="#"><img
                                                        src="{{ asset('frontendstyle/images/Imagemgsm.png') }}"
                                                        alt=""></a>

                                            </div>
                                            <div class="right">
                                                <div class="card-2">
                                                    <a href="#">Chanise Cabbage</a>
                                                    <a href="#">
                                                        <h2>$24.00<span>$20.99</span></h2>
                                                    </a>
                                                    <div class="rating ">
                                                        <input type="radio" id="star5" name="rate"
                                                            value="5" />
                                                        <label for="star5" title="text"></label>
                                                        <input type="radio" id="star4" name="rate"
                                                            value="4" />
                                                        <label for="star4" title="text"></label>
                                                        <input type="radio" id="star3" name="rate"
                                                            value="3" />
                                                        <label for="star3" title="text"></label>
                                                        <input type="radio" id="star2" name="rate"
                                                            value="2" />
                                                        <label for="star2" title="text"></label>
                                                        <input checked type="radio" id="star1" name="rate"
                                                            value="1" />
                                                        <label for="star1" title="text"></label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="saleproductsimg">

                                        <div class="card">
                                            <div class="card-1">
                                                <a href="#"><img
                                                        src="{{ asset('frontendstyle/images/Imagegreensm.png') }}"
                                                        alt=""></a>

                                            </div>
                                            <div class="right">
                                                <div class="card-2">
                                                    <a href="#">Green Capsicum</a>
                                                    <a href="#">
                                                        <h2>$32.00 <span>$20.99</span></h2>
                                                    </a>
                                                    <div class="rating ">
                                                        <input type="radio" id="star5" name="rate"
                                                            value="5" />
                                                        <label for="star5" title="text"></label>
                                                        <input type="radio" id="star4" name="rate"
                                                            value="4" />
                                                        <label for="star4" title="text"></label>
                                                        <input type="radio" id="star3" name="rate"
                                                            value="3" />
                                                        <label for="star3" title="text"></label>
                                                        <input type="radio" id="star2" name="rate"
                                                            value="2" />
                                                        <label for="star2" title="text"></label>
                                                        <input checked type="radio" id="star1" name="rate"
                                                            value="1" />
                                                        <label for="star1" title="text"></label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-8 ">

                        <div class="row d-flex align-content-center shortfilter">
                            <div class="col-lg-4 d-flex">
                                <span>short by :</span>
                                <select name="shorting">
                                    <option value="1"> Latest</option>
                                    <option value="2">Oldest</option>
                                    <option value="3">Price: low to high</option>
                                    <option value="4">Price: high to low</option>
                                </select>
                            </div>

                            <div class="col-lg-4">

                            </div>
                            <div class="col-lg-4 d-flex align-content-center  justify-content-end">
                                <div class="results-info">
                                    {{ $products->count() }} <span id="results_found"> : Results Found</span>
                                </div>
                            </div>
                        </div>


                        <div class="row prodcutrow">
                            @forelse ($products as $product)
                                <div class="col-lg-4 productcard">

                                    <div class="card h-100">
                                        <a href="{{ route('frontend.product.show', $product->slug) }}"> <img
                                                src="{{ getimage($product->featured_img) }}"
                                                class="card-img card-img-top" alt="..."> </a>
                                        <div class="card-body">
                                            <a href="{{ route('frontend.product.show', $product->slug) }}">
                                                <h4 class="card-text">{{ $product->title }}</h4>
                                            </a>
                                            <a class="d-flex pricetext"
                                                href="{{ route('frontend.product.show', $product->slug) }}">
                                                @if ($product->selling_price)
                                                    <h5 class="card-title">
                                                        {{ number_format($product->selling_price, 2) }}৳
                                                    </h5>
                                                    <span>{{ number_format($product->price, 2) }}৳</span>
                                                @else
                                                    <h5 class="card-title">{{ number_format($product->price, 2) }}৳</h5>
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
                                            {{-- @if ($product->stock) --}}
                                            <a class="addToCart" href="{{ route('cart.add', $product->id) }}">
                                                <i class="fa-solid fa-cart-shopping cartbutton"></i>
                                                </a>
                                                {{-- @endif --}}

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

                        {{ $products->links() }}
                    </div>

                </div>

            </div>

        </section>
        <!--cards section end hear  -->

    </form>

    <!-- email  -->
    <section id="email">
        <div class="container">
            <div class="row align-items-center">
                <!-- Logo - Order 1 on all screens -->
                <div
                    class="col-lg-4 col-md-4 col-12 Newslettertext order-lg- order-md-2 order-3 d-lg-block d-block d-md-none">
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
                <div
                    class="col-lg-3 col-md-3 col-12 Newsletterimg d-flex align-items-center order-lg-3 order-md-1 order-1">
                    <div class="card">
                        <a class="socialContainer containerOne" href="#">
                            <svg viewBox="0 0 16 16" class="socialSvg instagramSvg">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                                </path>
                            </svg>
                        </a>

                        <a class="socialContainer containerTwo" href="#">
                            <svg viewBox="0 0 16 16" class="socialSvg twitterSvg">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                                </path>
                            </svg>
                        </a>

                        <a class="socialContainer containerThree" href="#">
                            <svg viewBox="0 0 448 512" class="socialSvg linkdinSvg">
                                <path
                                    d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                                </path>
                            </svg>
                        </a>

                        <a class="socialContainer containerFour" href="#">
                            <svg viewBox="0 0 16 16" class="socialSvg whatsappSvg">
                                <path
                                    d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z">
                                </path>
                            </svg>
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
    <script src="{{ asset('frontendstyle/js/shopapp.js') }} "></script>
    <script>
        document.querySelectorAll('.ratingdiv').forEach(div => {
            let checkbox = div.querySelector('.custom-checkbox input');
            let text = div.querySelector('#rationnumber');

            // শুধু একটিই সিলেক্ট হবে
            checkbox.addEventListener('change', function() {
                if (this.checked) {
                    document.querySelectorAll('.custom-checkbox input').forEach(cb => {
                        if (cb !== this) cb.checked = false;
                    });
                }
            });

            // টেক্সটে ক্লিক করলে checkbox সিলেক্ট হবে
            text.addEventListener('click', function() {
                checkbox.checked = true;
                checkbox.dispatchEvent(new Event('change')); // trigger the uncheck others
            });
        });
    </script>
@endpush
