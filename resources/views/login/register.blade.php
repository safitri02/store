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

<!-- CSS here -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/flaticon.css">
<link rel="stylesheet" href="assets/css/slicknav.css">
<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/css/magnific-popup.css">
<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
<link rel="stylesheet" href="assets/css/themify-icons.css">
<link rel="stylesheet" href="assets/css/slick.css">
<link rel="stylesheet" href="assets/css/nice-select.css">
<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

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
        <li class="d-none d-lg-block"> <a href="/login" class="btn header-btn">Sign in</a></li>
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
<div class="slider-area ">
<!-- Mobile Menu -->
<div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/category.jpg">
<div class="container">
<div class="row">
<div class="col-xl-12">
    <div class="hero-cap text-center">
        <h2>Register</h2>
    </div>
</div>
</div>
</div>
</div>
</div>
<!-- slider Area End-->

<!--================login_part Area =================-->
<section class="login_part section_padding ">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-md-6">
<div class="login_part_text text-center">
    <div class="login_part_text_iner">
        <h2>New to our Shop?</h2>
        <p>There are advances being made in science and technology
            everyday, and a good example of this is the</p>
        <a href="/login" class="btn_3">Sign in now!</a>
    </div>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="login_part_form">
    <div class="login_part_form_iner">
        <h3>Welcome! <br>
            Please Sign Up now</h3>
        <form class="row contact_form" action="/proses_register" method="post" novalidate="novalidate">
        @csrf
        <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="name" name="name" value=""
                    placeholder="name" autofocus="on" autocomplete="off">
            </div>
            <div class="col-md-12 form-group p_star">
                <input type="email" class="form-control" id="email" name="email" value=""
                    placeholder="Email" autofocus="on" autocomplete="off">
            </div>
            <div class="col-md-12 form-group p_star">
                <input type="password" class="form-control" id="password" name="password" value=""
                    placeholder="Password" autofocus="on" autocomplete="off">
            </div>
            <div class="col-md-12 form-group p_star">
                <input type="hidden" class="form-control" id="level" name="level" value="pembeli"
                     autofocus="on" autocomplete="off">
            </div>
            <div class="col-md-12 form-group p_star">
                <input type="password" class="form-control" id="password" name="password_confirmation" value=""
                    placeholder="Confirmation Password" autofocus="on" autocomplete="off">
            </div>
            <div class="col-md-12 form-group">
                <button type="submit" value="submit" class="btn_3">
                    Sign Up
                </button>
                <a class="lost_pass" href="/login">Sudah Punya akun!</a>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
</section>
<!--================login_part end =================-->

</footer>

<!-- JS here -->

<!-- All JS Custom Plugins Link Here here -->
<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>

<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>

<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="./assets/js/jquery.scrollUp.min.js"></script>
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>

</body>

</html>



