<!doctype html>
<html lang="zxx">

<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>@yield('title')</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="manifest" href="site.webmanifest">
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

@yield('css')
<!-- CSS here -->
<link rel="stylesheet" href="{{ url('../css/base.css') }}">
<link rel="stylesheet" href="{{ url('../assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ url('../assets/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ url('../assets/css/flaticon.css') }}">
<link rel="stylesheet" href="{{ url('../assets/css/slicknav.css') }}">
<link rel="stylesheet" href="{{ url('../assets/css/animate.min.css') }}">
<link rel="stylesheet" href="{{ url('../assets/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ url('../assets/css/fontawesome-all.min.css') }}">
<link rel="stylesheet" href="{{ url('../assets/css/themify-icons.css') }}">
<link rel="stylesheet" href="{{ url('../assets/css/slick.css') }}">
<link rel="stylesheet" href="{{ url('../assets/css/nice-select.css') }}">
<link rel="stylesheet" href="{{ url('../assets/css/style.css') }}">
</head>

<body>
 @yield('header')
<header>
<!-- Header Start -->
<div class="header-area">
<div class="main-header ">
<div class="header-top top-bg d-none d-lg-block">
<div class="container-fluid">
<div class="col-xl-12">
<div class="row d-flex justify-content-between align-items-center">
    <div class="header-info-left d-flex">
        {{-- <div class="flag">
            <img src="assets/img/icon/header_icon.png" alt="">
        </div> --}}
    </div>
    <div class="header-info-right">
        <ul>       
        <li><a href="cart.html">Shopping</a></li>
        <li><a href="cart.html">Cart</a></li>
        <li><a href="checkout.html">Checkout</a></li>
        </ul>
    </div>
</div>
</div>
</div>
</div>
<div class="header-bottom  header-sticky">
<div class="container-fluid">
<div class="row align-items-center">
<!-- Logo -->
<div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">
    <div class="logo">
        <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
    </div>
</div>
<div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
    <!-- Main-menu -->
    <div class="main-menu f-right d-none d-lg-block">
        <nav>                                                
            <ul id="navigation">                                                                                                                                     
                <li><a href="/">Home</a></li>
                <li><a href="/blog">Blog</a></li>
            </ul>
        </nav>
    </div>
</div> 
<div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
    <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
        <li class="d-none d-xl-block">
            <div class="form-box f-right ">
                <input type="text" name="Search" placeholder="">
                <div class="search-icon">
                    <i class="fas fa-search special-tag"></i>
                </div>
            </div>
            </li>
        <li class="d-none d-lg-block"> <a href="/logout" class="btn header-btn">Log Out</a></li>
    </ul>
</div>
<!-- Mobile Menu -->
<div class="col-12">
    <div class="mobile_menu d-block d-lg-none"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Header End -->
</header>

<!-- slider Area Start-->
@yield('content')

 {{-- @include('sweet::alert') --}}

@yield('footer')
<footer>
<!-- Footer Start-->
<div class="footer-area footer-padding2">
<div class="container">
<div class="row d-flex justify-content-between">
<div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
<div class="single-footer-caption mb-50">
<div class="single-footer-caption mb-30">
    <!-- logo -->
    <div class="footer-logo">
        <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
    </div>
    <div class="footer-tittle">
        <div class="footer-pera">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
    </div>
    </div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
<div class="single-footer-caption mb-50">
<div class="footer-tittle">
    <h4>Quick Links</h4>
    <ul>
        <li><a href="#">About</a></li>
        <li><a href="#"> Offers & Discounts</a></li>
        <li><a href="#"> Get Coupon</a></li>
        <li><a href="#">  Contact Us</a></li>
    </ul>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
<div class="single-footer-caption mb-50">
<div class="footer-tittle">
    <h4>New Products</h4>
    <ul>
        <li><a href="#">Woman Cloth</a></li>
        <li><a href="#">Fashion Accessories</a></li>
        <li><a href="#"> Man Accessories</a></li>
        <li><a href="#"> Rubber made Toys</a></li>
    </ul>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
<div class="single-footer-caption mb-50">
<div class="footer-tittle">
    <h4>Support</h4>
    <ul>
        <li><a href="#">Frequently Asked Questions</a></li>
        <li><a href="#">Terms & Conditions</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Report a Payment Issue</a></li>
    </ul>
</div>
</div>
</div>
</div>
<!-- Footer bottom -->
<div class="row">
<div class="col-xl-7 col-lg-7 col-md-7">
<div class="footer-copy-right">
<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>                </div>
</div>
<div class="col-xl-5 col-lg-5 col-md-5">
<div class="footer-copy-right f-right">
<!-- social -->
<div class="footer-social">
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-behance"></i></a>
    <a href="#"><i class="fas fa-globe"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- Footer End-->
</footer>

<!-- JS here -->

<!-- All JS Custom Plugins Link Here here -->
<script src="{{ url('./assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>

<!-- Jquery, Popper, Bootstrap -->
<script src="{{ url('../assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ url('../assets/js/popper.min.js') }}"></script>
<script src="{{ url('../assets/js/bootstrap.min.js') }}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{ url('../assets/js/jquery.slicknav.min.js') }}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{ url('../assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ url('../assets/js/slick.min.js') }}"></script>

<!-- One Page, Animated-HeadLin -->
<script src="{{ url('../assets/js/wow.min.js') }}"></script>
<script src="{{ url('../assets/js/animated.headline.js') }}"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="{{ url('../assets/js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ url('../assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ url('../assets/js/jquery.sticky.js') }}"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- contact js -->
<script src="{{ url('../assets/js/contact.js') }}"></script>
<script src="{{ url('../assets/js/jquery.form.js') }}"></script>
<script src="{{ url('../assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ url('../assets/js/mail-script.js') }}"></script>
<script src="{{ url('./assets/js/jquery.ajaxchimp.min.js') }}"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="{{ url('../assets/js/plugins.js') }}"></script>
<script src="{{ url('../assets/js/main.js') }}"></script>

</body>

</html>