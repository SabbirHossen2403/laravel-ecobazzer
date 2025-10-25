<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecobazzer</title>
    <link rel="shortcut icon" href="./images/plant 1.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('frontendstyle/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontendstyle/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontendstyle/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('backendstyle/css/register.css') }}">

    <style>
    #register .container {
        /* display: flex; */
}
.socialdiv{
    padding: 0;
}
.login-container {
    background-color: white;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 100%;
}
.social-btn{
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid #ddd;
    border-radius: 30px;
    text-align: center;
    text-decoration: none;
    color: #333;
    width: 100%;
}

/* Dashboard Styles */
.dashboard-container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
}

.dashboard-header {
    width: 100%;
    padding: 20px 0;
    border-bottom: 1px solid #e1e4e8;
    margin-bottom: 30px;
}

.dashboard-logo {
    font-size: 28px;
    font-weight: 700;
    color: #4a6cf7;
}

.dashboard-welcome {
    width: 100%;
    margin-bottom: 30px;
}

.dashboard-welcome h1 {
    font-size: 32px;
    color: #2d3748;
    margin-bottom: 15px;
}

.dashboard-welcome p {
    font-size: 18px;
    color: #718096;
    max-width: 800px;
}

.dashboard-divider {
    height: 1px;
    background: linear-gradient(to right, transparent, #e2e8f0, transparent);
    margin: 25px 0;
    width: 100%;
}

.dashboard-section {
    width: 100%;
}

.dashboard-section h2 {
    font-size: 24px;
    color: #4a5568;
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 2px solid #4a6cf7;
    display: inline-block;
}

.dashboard-menu {
    background: white;
    border-radius: 12px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    width: 300px;
    overflow: hidden;
}

.dashboard-menu-item {
    padding: 18px 25px;
    display: flex;
    align-items: center;
    border-left: 4px solid transparent;
    transition: all 0.3s ease;
    cursor: pointer;
    color: #4a5568;
    text-decoration: none;
}

.dashboard-menu-item:hover {
    background-color: #f8fafc;
    border-left-color: #4a6cf7;
    color: #4a6cf7;
}

.dashboard-menu-item i {
    margin-right: 15px;
    font-size: 20px;
    width: 24px;
    text-align: center;
}

.dashboard-content {
    flex: 1;
    min-width: 300px;
    background: white;
    border-radius: 12px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    padding: 30px;
}

.dashboard-content h3 {
    font-size: 22px;
    color: #2d3748;
    margin-bottom: 20px;
}

.dashboard-stats {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    margin-bottom: 30px;
}

.dashboard-stat-card {
    flex: 1;
    min-width: 200px;
    background: #f8fafc;
    padding: 20px;
    border-radius: 10px;
    border-left: 4px solid #4a6cf7;
}

.dashboard-stat-card h4 {
    font-size: 16px;
    color: #718096;
    margin-bottom: 10px;
}

.dashboard-stat-card p {
    font-size: 28px;
    font-weight: 700;
    color: #2d3748;
}

.dashboard-recent-activity {
    margin-top: 30px;
}

.dashboard-activity-item {
    display: flex;
    align-items: center;
    padding: 15px 0;
    border-bottom: 1px solid #e2e8f0;
}

.dashboard-activity-item:last-child {
    border-bottom: none;
}

.dashboard-activity-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: #edf2ff;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 15px;
    color: #4a6cf7;
}

.dashboard-activity-content {
    flex: 1;
}

.dashboard-activity-content h5 {
    font-size: 16px;
    color: #2d3748;
    margin-bottom: 5px;
}

.dashboard-activity-content p {
    font-size: 14px;
    color: #718096;
}

@media (max-width: 768px) {
    .dashboard-container {
        flex-direction: column;
    }
    
    .dashboard-menu {
        width: 100%;
    }
}
</style>
</head>

<body>

    <!--nav section start hear  -->
    <header>
        <!-- topheader starts -->
        <div class="topheader">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 rightsite d-flex text-center">
                        <iconify-icon icon="mdi:location" width="30" height="30"></iconify-icon>
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
                                <iconify-icon icon="fluent:divider-tall-24-regular" width="24"
                                    height="24"></iconify-icon>
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
                    <div class="col-lg-2 col-6 order-1 order-lg-1 justify-content-start">
                        <a href=""><img src="{{ asset('frontendstyle/images/Logo (1).png') }}" alt="" /></a>
                    </div>
                    <div class="col-lg-6 order-3 order-lg-2">
                        <form class="d-flex" role="search">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
                            <button class="btn btn-outline-success" type="submit">
                                Search
                            </button>
                        </form>
                    </div>
                    <div class="col-lg-4 col-6 text-end order-2 order-lg-3 d-none d-lg-block">
                        <ul class="d-flex">
                            <li>
                                <iconify-icon icon="solar:heart-outline" width="40" height="40"></iconify-icon>
                            </li>
                            <li class="lineheight">
                                <iconify-icon icon="fluent:divider-tall-24-regular" width="40"
                                    height="40"></iconify-icon>
                            </li>
                            <li class="cartprent"><a href="./cart.html">
                                    <iconify-icon icon="solar:bag-outline" width="40" height="40"></iconify-icon>
                                    <span class="cartcounter">2</span>
                                </a> </li>

                            <li class="para1"><a href="./cart.html">
                                    <p>Shopping cart:</p>
                                    <h5>$57.00</h5>
                                </a></li>
                        </ul>
                    </div>
                    <div class="option col-6 d-block d-lg-none order-2 order-lg-3 text-end">
                        <ul class="">
                            <li>
                                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                                    aria-controls="offcanvasExample"><iconify-icon icon="tabler:menu-3" width="34"
                                        height="34"></iconify-icon></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- midelheader ends -->
        <!-- offcanvas start -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel"><img src="./images/" alt=""></h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div>
                    <ul class="list">
                        <li><a href="./homepage4.html">HOME</a></li>
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
                                <li>
                                    <a class="active" href=""><iconify-icon icon="ic:round-menu"
                                            width="24" height="24"></iconify-icon>All Categories<iconify-icon
                                            icon="fe:arrow-down" width="24" height="24"></iconify-icon></a>

                                    <ul class="categorySubmenu">
                                        <li><a href="#"><img
                                                    src="https://cdn-icons-png.flaticon.com/512/896/896530.png"
                                                    alt="">
                                                Electronics</a></li>
                                        <li><a href="#"><img
                                                    src="https://cdn-icons-png.flaticon.com/512/5564/5564823.png"
                                                    alt="">
                                                Furniture</a></li>
                                        <li><a href="#"> <img
                                                    src="https://cdn-icons-png.flaticon.com/512/3050/3050198.png"
                                                    alt="">Fashion</a>
                                        </li>
                                        <li><a href="#"><img
                                                    src="https://cdn-icons-png.flaticon.com/512/3081/3081993.png"
                                                    alt="">Toys</a>
                                        </li>
                                        <li><a href="#"><img
                                                    src="https://cdn-icons-png.flaticon.com/512/6456/6456651.png"
                                                    alt="">Shoes</a>
                                        </li>
                                        <li><a href="#"> <img
                                                    src="https://cdn-icons-png.flaticon.com/512/3728/3728783.png"
                                                    alt="">Festival</a></li>
                                    </ul>

                                </li>
                                <li><a href="{{ route('frontend.index')}}" class="{{ request()->routeIs('frontend.index') ? 'active1' : '' }}">Home<iconify-icon icon="fe:arrow-down" width="24"
                                            height="24"></iconify-icon></a></li>
                                <li><a  href="{{ route('frontend.category_archive') }}" class="{{ request()->routeIs('frontend.category_archive') ? 'active1' : '' }}">Shop<iconify-icon icon="fe:arrow-down"
                                            width="24" height="24"></iconify-icon></a></li>
                                <li><a href="./Details.html">Details<iconify-icon icon="fe:arrow-down" width="24"
                                            height="24"></iconify-icon></a></li>
                                <li><a href="{{ route('checkout')}}" class="{{ request()->routeIs('checkout') ? 'active1' : '' }}">Checkout<iconify-icon icon="fe:arrow-down"
                                            width="24" height="24"></iconify-icon></a></li>
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
        <footer class="d-block d-md-none d-lg-none">
            <div class=" row menu">
                <div class="col-3">
                    <a href="./homepage4.html" class="link">
                        <span class="link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="192" height="192"
                                fill="currentColor" viewBox="0 0 256 256">
                                <rect width="256" height="256" fill="none"></rect>
                                <path
                                    d="M213.3815,109.61945,133.376,36.88436a8,8,0,0,0-10.76339.00036l-79.9945,72.73477A8,8,0,0,0,40,115.53855V208a8,8,0,0,0,8,8H208a8,8,0,0,0,8-8V115.53887A8,8,0,0,0,213.3815,109.61945Z"
                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="16"></path>
                            </svg>
                        </span>
                        <span class="link-title">Home</span>
                    </a>
                </div>
                <div class="col-3">

                    <a href="#" class="link">
                        <span class="link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12.001 4.529a6 6 0 0 1 8.242.228a6 6 0 0 1 .236 8.236l-8.48 8.492l-8.478-8.492a6 6 0 0 1 8.480-8.464m6.826 1.641a4 4 0 0 0-5.49-.153l-1.335 1.198l-1.336-1.197a4 4 0 0 0-5.686 5.605L12 18.654l7.02-7.03a4 4 0 0 0-.193-5.454" />
                            </svg> </span>
                        <span class="link-title">Like</span>
                    </a>
                </div>

                <div class="col-3">

                    <a href="./cart.html" class="link">
                        <span class="link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M0 1h4.764l.545 2h18.078l-3.666 11H7.78l-.5 2H22v2H4.72l1.246-4.989L3.236 3H0zm7.764 11h10.515l2.334-7H5.855zM4 21a2 2 0 1 1 4 0a2 2 0 0 1-4 0m14 0a2 2 0 1 1 4 0a2 2 0 0 1-4 0" />
                            </svg>
                        </span>
                        <span class="link-title">cart</span>
                    </a>
                </div>
                <div class="col-3">

                    <a href="#" class="link">
                        <span class="link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="192" height="192"
                                fill="currentColor" viewBox="0 0 256 256">
                                <rect width="256" height="256" fill="none"></rect>
                                <circle cx="128" cy="96" r="64" fill="none" stroke="currentColor"
                                    stroke-miterlimit="10" stroke-width="16"></circle>
                                <path d="M30.989,215.99064a112.03731,112.03731,0,0,1,194.02311.002" fill="none"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="16"></path>
                            </svg>
                        </span>
                        <span class="link-title">Profile</span>
                    </a>
                </div>
            </div>

        </footer>

        <!-- footer ends -->

        <!-- buttomheader ends -->
    </header>

    <!--nav section end hear  -->
    <main>
        <!-- banner section starts here -->
        <section id="banner">
            <div class="container">
                <ul class="manu d-flex">
                    <li><a href="#"><iconify-icon icon="material-symbols:home-outline" width="24"
                                height="24"></iconify-icon></a></li>
                    <li><iconify-icon icon="weui:arrow-filled" width="12" height="24"></iconify-icon></li>
                    <li><a href="">Account</a></li>
                    <li><iconify-icon icon="weui:arrow-filled" width="12" height="24"></iconify-icon></li>
                    <li><a class="green" href="">Create Account</a></li>
                </ul>
            </div>
        </section>
        <!-- banner section end here -->

        <!-- Dashboard Section -->
        <section id="dashboard">
            <div class="container">
                <div class="dashboard-container">
                    <section class="dashboard-welcome">
                        <h1>Hello Themesflat</h1>
                        <p>From your account dashboard you can view your recent orders, manage your shipping and billing address, and edit your password and account details.</p>
                    </section>
                    
                    <div class="dashboard-divider"></div>
                    
                    <section class="dashboard-section">
                        <h2>Dashboard</h2>
                        
                        <div class="dashboard-container" style="gap: 0;">
                            <div class="dashboard-menu">
                                <a href="#" class="dashboard-menu-item">
                                    <i>🏠</i>
                                    <span>Dashboard</span>
                                </a>
                                <a href="#" class="dashboard-menu-item">
                                    <i>📦</i>
                                    <span>Orders</span>
                                </a>
                                
                                <a href="#" class="dashboard-menu-item">
                                    <i>👤</i>
                                    <span>Account Details</span>
                                </a>
                                <a href="#" class="dashboard-menu-item">
                                    <i>❤️</i>
                                    <span>Wishlist</span>
                                </a>
                                <a href="{{ route('customer.logout') }}" class="dashboard-menu-item">
                                    <i>🚪</i>
                                    <span>Logout</span>
                                </a>
                            </div>
                            
                            <div class="dashboard-content">
                                <h3>Account Overview</h3>
                                
                                <div class="dashboard-stats">
                                    <div class="dashboard-stat-card">
                                        <h4>Pending Orders</h4>
                                        <p>2</p>
                                    </div>
                                    <div class="dashboard-stat-card">
                                        <h4>Wishlist Items</h4>
                                        <p>7</p>
                                    </div>
                                    <div class="dashboard-stat-card">
                                        <h4>Addresses</h4>
                                        <p>3</p>
                                    </div>
                                </div>
                                
                                <div class="dashboard-recent-activity">
                                    <h3>Recent Activity</h3>
                                    
                                    <div class="dashboard-activity-item">
                                        <div class="dashboard-activity-icon">📦</div>
                                        <div class="dashboard-activity-content">
                                            <h5>Order Shipped</h5>
                                            <p>Your order #TF-2023 has been shipped</p>
                                        </div>
                                    </div>
                                    
                                    <div class="dashboard-activity-item">
                                        <div class="dashboard-activity-icon">👤</div>
                                        <div class="dashboard-activity-content">
                                            <h5>Profile Updated</h5>
                                            <p>You updated your account information</p>
                                        </div>
                                    </div>
                                    
                                    <div class="dashboard-activity-item">
                                        <div class="dashboard-activity-icon">❤️</div>
                                        <div class="dashboard-activity-content">
                                            <h5>Added to Wishlist</h5>
                                            <p>You added "Minimalist Desk" to your wishlist</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>

        <!-- email  -->
        <section id="email1">
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
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.920.96.96 0 0 0 0-1.920zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
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
                                        d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.930-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 极 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 极 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z">
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
    </main>

    <footer class="shopery-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-about">
                    <h3>About Shopery</h3>
                    <p>Maind during monitor anim laberini mobiletie but it provides junior BA, sport laberinum
                        morgue, congue nice.</p>
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
                        <a href=""><img class="img-fluid" src="./images/Instagram (1).png"
                                alt=""></a>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2023 Shopery. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('frontendstyle/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontendstyle/js/venobox.min.js') }}"></script>
    <script src="{{ asset('frontendstyle/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontendstyle/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.8/iconify-icon.min.js"></script>
</body>

</html>