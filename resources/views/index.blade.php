<!doctype html>
<html lang="en" ng-app="snow" ng-controller="mainCtrl" id="main-controller" ng-init="loadProfile()">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, viewport-fit=cover, height=device-height, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- dl Icon CSS -->
    <link rel="stylesheet" href="assets/css/dl-icon.css">

    <!-- All Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- Revoulation Slider CSS  -->
    <link rel="stylesheet" href="assets/css/revoulation.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="/assets/css/main.css">
    <link href="theme/assets/css/style.bundle_1.css?v=7.0.4" rel="stylesheet" type="text/css" />

    <!-- <link rel="stylesheet" type="text/css" href="theme/custom/plugins/ModalWindowEffects/css/default.css" /> -->
    <link rel="stylesheet" type="text/css" href="theme/custom/plugins/ModalWindowEffects/css/component.css" />

    <!-- modernizr JS
    ============================================ -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <link href="theme/assets/plugins/global/plugins.bundle.css?v=7.0.4" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="frontend/assets/css/custom.css" />
    <!-- <link rel="stylesheet" href="theme/frontend/css/custom.css" />
    <link rel="stylesheet" href="theme/frontend/css/laptop-responsive.css" />
    <link rel="stylesheet" href="theme/frontend/css/tablet-responsive.css" />
    <link rel="stylesheet" href="theme/frontend/css/mobile-responsive.css" /> -->

    <link rel="shortcut icon" href="{{'theme/frontend/images/favicon-16x16.png'}}" />
    <title>ABC</title>
  
</head>

<body>
    <!-- 29 Aug -->
    <div class="ai-preloader active">
        <div class="ai-preloader-inner h-100 d-flex align-items-center justify-content-center">
            <div class="ai-child ai-bounce1"></div>
            <div class="ai-child ai-bounce2"></div>
            <div class="ai-child ai-bounce3"></div>
        </div>
    </div>

    <!-- Main Wrapper Start -->
    <div class="wrapper enable-header-transparent">
        <!-- Header Area Start -->
        <header class="header header-fullwidth header-style-1">
            <!-- <div class="top-bar d-none d-md-block">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="notice-text-wrapper">
                                <p class="notice-text"><span><strong>BIG</strong> SUMMER</span> <strong>OFF 50%</strong>
                                    SHOPPING NOW - DON'T MISS THIS CHANGE.</p>
                                <a class="close-notice"><i class="dl-icon-close"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="header-outer" ng-class="{'d-none': $root.displayHeader==0}" id="main-header">
                <div class="header-inner fixed-header">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-xl-5 col-lg-6">
                                <!-- Main Navigation Start Here -->
                                <nav class="main-navigation">
                                    <ul class="mainmenu">
                                        <li class="mainmenu__item">
                                            <a href="#/" class="mainmenu__link">
                                                <span class="mm-text">Home</span>
                                            </a>
                                        </li>
                                        
                                        <li class="mainmenu__item">
                                            <a href="#/products" class="mainmenu__link">
                                                <span class="mm-text">Collections</span>
                                            </a>
                                        </li>
                                        <li class="mainmenu__item d-none">
                                            <a href="#/startdesigning" class="mainmenu__link">
                                                <span class="mm-text">Start Designing</span>
                                            </a>
                                        </li>
                                        <li class="mainmenu__item">
                                            <a href="#/startmaking" class="mainmenu__link">
                                                <span class="mm-text">Start Making</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- Main Navigation End Here -->
                            </div>
                            <div class="col-lg-2 col-md-3 col-4 text-lg-center">
                                <!-- Logo Start Here -->    
                                <a href="#/" class="logo-box">
                                    <figure class="logo--normal">
                                        <img alt="Logo"  class="p-2 pt-4" style="height:55px;" />
                                        <img alt="Logo"  class="p-2 pt-4" style="height:55px;" />
                                    </figure>
                                    
                                </a>
                                <!-- Logo End Here -->
                            </div>
                            <div class="col-xl-5 col-lg-4 col-md-9 col-8">
                                <ul class="header-toolbar text-end">
                                    <!-- <li class="header-toolbar__item d-lg-block">
                                        <a href="#sideNav" class="toolbar-btn">
                                            <i class="dl-icon-menu2"></i>
                                        </a>
                                    </li> -->
                                    <li class="header-toolbar__item user-info-menu-btn">
                                        <a href="javascript:;">
                                            <i class="fa fa-user-circle"></i>
                                        </a>
                                        <ul class="user-info-menu">
                                            <li ng-if="$root.loggedIn==1">
                                                <a href="#/profile">My Account</a>
                                            </li>
                                            <li ng-if="$root.loggedIn==1">
                                                <a href="#/logout">Logout</a>
                                            </li>
                                            <li ng-if="$root.loggedIn==0">
                                                <a ng-click="$root.showLoginModal()" href="javascript:;">Login</a>
                                            </li>
                                            <!-- <li ng-if="$root.isMobile==false">
                                                <a href="/admin/orders" target="_blank">Admin (Login)</a>
                                            </li> -->
                                        </ul>
                                    </li>
                                    <li class="header-toolbar__item">
                                        <a href="#miniCart" class="mini-cart-btn toolbar-btn">
                                            <i class="dl-icon-cart4"></i>
                                            <sup class="mini-cart-count">5</sup>
                                        </a>
                                    </li>
                                     <li class="header-toolbar__item">
                                        <a href="/admin/orders" target="_blank">
                                            <i class="fas fa-user-shield"></i>
                                        </a>
                                    </li>
                                    <li class="header-toolbar__item d-none">
                                        <a href="#searchForm" class="search-btn toolbar-btn">
                                            <i class="dl-icon-search1"></i>
                                        </a>
                                    </li>
                                    <li class="header-toolbar__item d-lg-none">
                                        <a href="javascript:;" class="menu-btn"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-sticky-header-height"></div>
            </div>
        </header>
        <!-- Header Area End -->

        <!-- Mobile Header area Start -->
        <header class="header-mobile" ng-class="{'d-none': $root.displayHeader==0}">    
            <div class="header-mobile__outer">
                <div class="header-mobile__inner fixed-header">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <a href="#/" class="logo-box">
                                    <figure class="logo--normal">
                                        <img alt="Logo black"  style="height:55px; max-width: none;" class="p-2 pt-4" />
                                        <img alt="Logo white"  style="height:55px; max-width:none;" class="p-2 pt-4" />
                                    </figure>
                                </a>
                            </div>
                            <div class="col-8" >
                                <ul class="header-toolbar text-end">
                                    <li class="header-toolbar__item user-info-menu-btn">
                                        <a href="javascript:;">
                                            <i class="fa fa-user-circle"></i>
                                        </a>
                                        <ul class="user-info-menu">
                                            <li ng-if="$root.loggedIn==1">
                                                <a href="#/profile">My Account</a>
                                            </li>
                                            <li ng-if="$root.loggedIn==1">
                                                <a href="#/logout">Logout</a>
                                            </li>
                                            <li ng-if="$root.loggedIn==0">
                                                <a ng-click="$root.showLoginModal()" href="javascript:;">Login</a>
                                            </li>
                                            <li ng-if="$root.isMobile==false">
                                                <a href="/admin/orders">Admin (Login)</a>
                                            </li>                                            
                                        </ul>
                                    </li>
                                    <li class="header-toolbar__item">
                                        <a href="#miniCart" class="mini-cart-btn toolbar-btn">
                                            <i class="dl-icon-cart4"></i>
                                            <sup class="mini-cart-count">5</sup>
                                        </a>
                                    </li>
                                    <li class="header-toolbar__item d-none">
                                        <a href="#searchForm" class="search-btn toolbar-btn">
                                            <i class="dl-icon-search1"></i>
                                        </a>
                                    </li>
                                    <li class="header-toolbar__item d-lg-none">
                                        <a href="javascript:;" class="menu-btn"></a>
                                    </li>
                                </ul>
                               
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <!-- Mobile Navigation Start Here -->
                                <div class="mobile-navigation dl-menuwrapper" id="dl-menu">
                                    <button class="dl-trigger">Open Menu</button>
                                    <ul class="dl-menu">
                                        <li>
                                            <a href="#/">
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#/products">
                                                Collections
                                            </a>
                                        </li>
                                         <li>
                                            <a href="#/startmaking">
                                               Start Making
                                            </a>
                                        </li>
        
                                    </ul>
                                </div>
                                <!-- Mobile Navigation End Here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Mobile Header area End -->


        <div class="view-content">
            <div ng-view></div>
        </div>

        <div class="pt--100 pb--100" style="" ng-if="$root.SupportedBy==1">
            <div class="support-section" style="margin:0 20%;">
                <h3 class="heading-tertiary heading-color mb--30" style=" color:#7f7f7f !important; font-size: 12pt;  text-align: center; font-family: Poppins;">Supported by</h3>
                <div class="row mt-10">
                    <div class="support-item col">
                        <img src="theme/frontend/images/support-item-nvidia.png">
                    </div>
                    <div class="support-item col">
                        <img src="theme/frontend/images/support-item-01.png">
                    </div>
                    <div class="support-item col">
                        <img src="theme/frontend/images/support-item-02.png">
                    </div>
                    <div class="w-100 d-md-none"></div>
                    <div class="support-item col">
                        <img src="theme/frontend/images/support-item-03.png">
                    </div>
                    <div class="support-item col">
                        <img src="theme/frontend/images/support-item-04.png">
                    </div>
                    <div class="w-100 d-md-none"></div>
                    <div class="support-item col text-align-center">
                        <img src="theme/frontend/images/support-item-05.png">
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Start -->
        <footer class="footer footer-1 bg--dark-blue ptb--40" ng-if="$root.displayFooter==1" style="background-color: Blue;">
            <div class="footer-top pb--40 pb-md--30">
                <div class="container">
                    <div class="row" >
                        <div class="col-lg-3 col-md-8 mb-md--30">
                            <div class="footer-widget">
                                <div class="textwidget">
                                    <a href="#/" onclick="scrollToTop()">
                                        <img alt="Logo"  class="p-2 pt-4" width="128px" src="" />
                                    </a>

                                    <p class="font-size-16 font-2 mb--20 d-none">Integer ut ligula quis lectus fringilla
                                        elementum porttitor sed est. Duis fringilla efficitur ligula sed lobortis.</p>
                                    <!-- Social Icons Start Here -->
                                    <ul class="social">
                                        <li class="social__item">
                                            <a href="https://twitter.com" class="social__link color--white">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="https://plus.google.com" class="social__link color--white">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="https://facebook.com" class="social__link color--white">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="https://youtube.com" class="social__link color--white">
                                                <i class="fa fa-youtube"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="https://instagram.com" class="social__link color--white">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Social Icons End Here -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-md--30">
                            <div class="footer-widget">
                                <h3 class="widget-title">Company</h3>
                                <ul class="widget-menu" >
                                    <li><a onclick="scrollToTop()" href="#/aboutus" >About Us</a></li>
                                    <li><a onclick="scrollToTop()" href="#/mission-statement">Mission Statement</a></li>
                                    <li><a href="https://www.instagram.com/customspace.shop/" target="_blank">Instagram</a></li>
                                    <li><a href="https://www.linkedin.com/company/super-design-tech/" target="_blank">LinkedIn</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-sm--30">
                            <div class="footer-widget">
                                <h3 class="widget-title">Legal</h3>
                                <ul class="widget-menu">

                                    <li><a onclick="scrollToTop()" href="#/terms-and-conditions">Terms and conditions</a></li>
                                    
                                    <li><a onclick="scrollToTop()" href="#/privacy-policy">Privacy policy</a></li>

                                    <li><a onclick="scrollToTop()" href="#/purchase-agreement">Purchase agreement</a></li>
                                </ul>
                            </div>
                        </div>
                       
                        <div class="col-lg-3 col-md-4">
                            <div class="footer-widget">
                                <h4 class="widget-title">CONTACT INFO</h4>
                                <ul class="contact-info">
                                     <li class="contact-info__item">
                                        <span><a href="#/contact-us" class="contact-info__link">Contact Us</a></span>
                                    </li>
                                    <li class="contact-info__item">
                                        <i class="fa fa-phone-alt"></i>
                                        <span><a href="tel:+012345 6788" class="contact-info__link">+91-656345334 (WhatsApp, Telegram)</a></span>
                                    </li>
                                    <li class="contact-info__item">
                                        <i class="far fa-envelope"></i>
                                        <span><a href="#" class="contact-info__link"></a>abc@gmail.com</span>
                                    </li>
                                    <li class="contact-info__item">
                                        <i class="fa fa-map-marker-alt"></i>
                                        <span>Address1 , Germany</span>
                                    </li>
                                    <li class="contact-info__item">
                                        <i class="fa fa-map-marker-alt"></i>
                                        <span>Addres line 2</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-middle pb--40 pb-md--30 d-none">
                <div class="container">
                    <div class="row method-box-wrapper">
                        <div class="col-lg-3 col-md-6 mb-md--10">
                            <div class="method-box">
                                <h4>LOCALLY PRODUCED</h4>
                                <p>We employ local makers</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-md--10">
                            <div class="method-box">
                                <h4>30 DAYS MONEY BACK</h4>
                                <p>You can back money any times</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-sm--10">
                            <div class="method-box">
                                <h4>PROFESSIONAL SUPPORT 24/7</h4>
                                <p>hey@superdesign.tech</p> 
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="method-box">
                                <h4>100% SECURE CHECKOUT</h4>
                                <p>Protect buyer & clients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom d-none">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <p class="copyright-text">&copy; AIRI 2021 MADE WITH <i class="fa fa-heart"></i> BY HASTHEMES</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->


        <!-- Side Navigation Start -->
       
        <!-- Side Navigation End -->

        <!-- Mini Cart Start -->
        <aside class="mini-cart" id="miniCart" ng-controller="cartCtrl" data-ng-init="loadCart()">
            <div class="mini-cart-wrapper">
                <a href="" class="btn-close"><i class="dl-icon-close"></i></a>
                <div class="mini-cart-inner">
                    <h5 class="mini-cart__heading mb--40 mb-lg--30">Shopping Cart</h5>
                    <div class="mini-cart__content">
                        <ul class="mini-cart__list">
                            <li class="mini-cart__product" ng-repeat="product in $root.cartData" ng-init="$last && layoutDone()">
                                <a href="javascript:;" ng-click="updateQty(product.rowid,0)" class="remove-from-cart remove">
                                    <i class="dl-icon-close"></i>
                                </a>
                                <div class="mini-cart__product__image">
                                    <img src="" alt="products">
                                </div>
                                <div class="mini-cart__product__content">
                                    <a class="mini-cart__product__title" href="javascript:;">
                                        <span class="font-weight-bolder text-dark font-size-h3">
                                            ABC
                                        </span>
                                        <span class="text-muted font-weight-bolder font-size-12 mt-3 mb-3 d-block" ng-if="product.options.note!=''">
                                            note
                                        </span>
                                        <span class="text-muted">
                                            subtext
                                        </span>
                                    </a>
                                    <span class="mini-cart__product__quantity">2 x $ 500</span>
                                </div>
                            </li>
                            <div ng-if="$root.cartSize==0">
                                <div class="alert alert-custom alert-light-primary">
                                    Your cart is empty
                                </div>
                            </div>
                        </ul>
                        <div class="mini-cart__total" ng-if="$root.cartSize>0">
                            <span>Subtotal</span>
                            <span class="ammount">$ --</span>
                        </div>
                        <div class="mini-cart__buttons" ng-if="$root.cartSize>0">
                            <a href="#/cart" class="btn btn-lg btn-block btn-dark">View Cart</a>
                            <a href="#/checkout" class="btn btn-dark btn-lg btn-block">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Mini Cart End -->

        <!-- Global Overlay Start -->
        <div class="ai-global-overlay"></div>
        <!-- Global Overlay End -->

    </div>

    
    <div class="modal fade sidebar cart-modal" id="cart" tabindex="-1" role="dialog" aria-labelledby="cartLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content"
                ng-controller="cartCtrl" id="cart-controller" data-ng-init="loadCart()">
                <div class="modal-header cart-box-header">
                    <h5 class="modal-title" id="cartLabel">Cart</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg width="27" height="29" viewBox="0 0 27 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="20.7782" y1="7.70711" x2="6.63602" y2="21.8492" stroke="#3D5467" stroke-width="2" />
                            <line x1="20.3639" y1="21.8492" x2="6.2218" y2="7.70706" stroke="#3D5467" stroke-width="2" />
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <div class="row gutter-3">
                        <div class="col-12" ng-repeat="product in $root.cartData" ng-init="$last && layoutDone()">
                            <div class="cart-item cart-item-sm">
                                <div class="row align-items-center">
                                    <div class="col-lg-7">
                                        <div class="media media-product">
                                            <img src="" alt="Image">
                                            <div class="media-body">
                                                <h5 class="media-title">ABCC</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                         x 2
                                    </div>
                                    <div class="col-lg-3 text-center text-lg-right">
                                        <span class="cart-item-price">$ 2*5</span>
                                    </div>
                                    <a href="javascript:;" class="cart-item-close"
                                        ng-click="productRemove(product.rowid)"
                                        >
                                        <i class="icon-x"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer cart-box-footer">
                    <div class="container-fluid">
                        <div class="total-cart-price">
                            <h6>Total</h6>
                            <h6>$ --</h6>
                        </div>
                        <div class="row gutter-0 total-cart-btn">
                            <div class="col d-md-block">
                                <a href="{$root.baseUrl}}/products/cart" class="btn btn-dark-blue">View Cart</a>
                            </div>
                            <div class="col" align="right">
                                <a href="{$root.baseUrl}}/checkout" class="btn btn-dark-blue">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- search -->
    <div class="modal fade search" id="search" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <input type="text" class="form-control" placeholder="Type your search here" aria-label="Type your search here" aria-describedby="button-addon2">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="md-modal modal-effect-10" id="loginModal">
        <div class="md-content" style="padding:40px 10px 40px 10px;">            
            <section class="" ng-controller="LoginController" id="login-controller">    

                <!-- Main Content Wrapper Start -->
                <div id="content" class="main-content-wrapper">
                    <div class="page-content-inner" >
                        <div class="container">
                            <div class="signin-block" style="font-family: poppins;">
                                <div class="row login-main justify-content-center">
                                       
                                    <div class="login-box col-sm-7">
                                        
                                        <form class="form" id="loginForm" autocomplete="off">
                                            <input autocomplete="false" name="hidden" type="text" style="display:none;">
                                            <div class="mb--25 mb-sm--20 text-center"><a style="text-decoration: underline;" href="javascript:;" onclick="toggle_forms(1)">New here? Register Here</a></div>
                                            
                                            <h4 class="text-center" style="margin-bottom: 10px;"> Sign In</h4>
                                            <div class="form-group">
                                                <label>Username or Email</label>
                                                <input type="text" class="form-control" id="username" name="username" placeholder="Username or Email">
                                            </div>
                                            <div class="mb--20 form-group">
                                                <label>Password</label>
                                                <input type="password" class=" form-control" id="password"
                                                    placeholder="Password"
                                                    name="password">
                                            </div>
                                            <div class="mb--20 form-group">
                                                <div class="g-recaptcha" data-sitekey="6Lds5hYpAAAAAAKBW4ZBM59r--oIh3jYrAAQcJ_s"></div>
                                            </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="col-sm-6 text-left ">
                                                    <a href="/admin/login/forgot" id="login_forgot">Forget Password ?</a>
                                                </div>
                                                <div class="col-sm-6 text-right ">
                                                     <input type="submit" value="Sign in" id="loginButton" class="btn btn-submit btn-primary btn-lg">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form__label checkbox-label d-none" for="store_session">
                                                        <input type="checkbox" name="store_session" id="store_session">
                                                        <span>Remember me</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div> 
                                
                                <div class="signup-main" ng-class="{'col-sm-8 offset-sm-2 ': curr_url == 'login' }" ng-class="{'col-sm-8': curr_url != 'login' }" style="display: none;">
                                    <div class="register-box" style="font-family: poppins;">
                                        <h4 class="text-center" style="margin-bottom: 10px;">Register</h4>
                                        <form class="form fv-plugins-bootstrap fv-plugins-framework form--login" id="signUpForm" autocomplete="off">
                                            <input autocomplete="false" name="hidden" type="text" style="display:none;">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>First Name</label>
                                                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
                                                    </div>
                                                </div>    
                                                <div class="col-sm-6">  
                                                    <div class="form-group">
                                                        <label>Last Name</label>
                                                        <input type="text" class=" form-control" id="lastname" name="lastname" placeholder="Last Name">
                                                    </div>      
                                                </div>   
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-sm-6">     
                                                    <div class="mb--20 form-group">
                                                        <label>Username</label>
                                                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                                                    </div>  
                                                </div> 
                                                <div class="col-sm-6">    
                                                    <div class="mb--20 form-group">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                                    </div>  
                                                </div>   
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6"> 
                                                    <div class="mb--20 form-group">
                                                        <label>Password</label>
                                                        <input type="password" class="form-control" 
                                                            id="register-password" name="password" placeholder="Password">
                                                    </div>                
                                                </div> 
                                                <div class="col-sm-6"> 
                                                    <div class="mb--20 form-group">
                                                        <label>Confirm Password</label>   
                                                        <input type="password" class="form-control" id="rpassword" name="rpassword" placeholder="Confirm password">
                                                    </div>
                                                </div>     
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 text-center mb--20" style="margin-top:10px;">
                                                    <input type="submit" value="Create Account" id="registerButton" class="btn btn-submit btn-primary btn-lg">
                                                </div>
                                            </div>
                                             <div class="row">
                                                <div class="col-sm-12 text-center">
                                                    <a href="javascript:;" id="login_req" onclick="toggle_forms(0)" style="text-decoration:underline;">Already have an account?Sign in here</a>   
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>      
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
                    <!-- Main Content Wrapper Start -->
               
                <!-- <button class="md-close">Close me!</button> -->
            
    
    <div class="md-overlay"></div><!-- the overlay element -->
    <!-- the overlay element -->

    <div class="modal fade"  id="myModal51" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" >
            <div class="modal-content">
                <!-- <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Modal title</h4>
                    <small class="font-bold">testy.</small>
                </div> -->
                <div class="modal-body">  
                    <!-- <section class="" ng-controller="LoginController" id="login-controller">    

                        <div id="content" class="main-content-wrapper">
                            <div class="page-content-inner" >
                                <div class="container">
                                    
                                    <div class="row login-main mt-20">
                                            <div class="col-sm-6 text-center align-middle hide-xs pt-30" style="height: 200px;">
                                                <span class="fa fa-lock" style="font-size: 128px; color:#ccc;"></span>
                                            </div>
                                            <div class="login-box col-sm-6">
                                                <h4 class="mb--25 mb-sm--20">New here? &nbsp;<a onclick="toggle_forms(1)" style="color: cornflowerblue;">Create a new login</a></h4>
                                                <form class="form form--login" id="loginForm" autocomplete="off">
                                                    <input autocomplete="false" name="hidden" type="text" style="display:none;">
                                                    <div class="form__group mb--20 form-group">
                                                        <label class="form__label form__label--2" for="username_email">Username or email
                                                            <span class="required">*</span></label>

                                                        <input type="text" class="form__input form__input--4 form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6" id="username" name="username" 
                                                            placeholder="Enter your username or email address" value=" ">
                                                    </div>
                                                    <div class="form__group mb--20 form-group">
                                                        <label class="form__label form__label--2" for="password">Password <span
                                                                class="required">*</span></label>
                                                        <input type="password" class="form__input form__input--4 form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6" id="password"
                                                            placeholder="Enter your password" 
                                                            name="password">
                                                    </div>
                                                    <div class="d-flex align-items-center mb--20">
                                                        <div class="form__group">
                                                            <input type="submit" value="Log in" id="loginButton" class="btn btn-submit btn-dark btn-lg">
                                                        </div>
                                                        <div class="form__group">
                                                            <label class="form__label checkbox-label" for="store_session">
                                                                <input type="checkbox" name="store_session" id="store_session">
                                                                <span>Remember me</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <a class="forgot-pass d-none" href="#">Lost your password?</a>
                                                </form>
                                            </div>
                                        </div> 
                                        
                                    <div class="row pt--30 pt-md--55 pt-sm--35 pb--80 pb-md--60 pb-sm--40">      
                                        <div class="signup-main" ng-class="{'col-sm-8 offset-sm-2 ': curr_url == 'login' }" ng-class="{'col-sm-8': curr_url != 'login' }" style="display: none;">
                                            <div class="register-box">
                                                <h4 class="mb--15 mb-sm--20">Register</h4>
                                                <form class="form fv-plugins-bootstrap fv-plugins-framework form--login" id="signUpForm" autocomplete="off">
                                                    <input autocomplete="false" name="hidden" type="text" style="display:none;">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form__group mb--20 form-group">
                                                                <label class="form__label form__label--2" for="firstname">First name <span
                                                                        class="required">*</span></label>
                                                                <input type="text" class="form__input form__input--4 form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6" id="firstname" name="firstname">
                                                            </div>
                                                        </div>    
                                                        <div class="col-sm-6">  
                                                            <div class="form__group mb--20 form-group">
                                                                <label class="form__label form__label--2" for="lastname">Last name <span
                                                                        class="required">*</span></label>
                                                                <input type="text" class="form__input form__input--4 form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6" id="lastname" name="lastname">
                                                            </div>      
                                                        </div>   
                                                        
                                                    </div>
                                                    <div class="row">
                                                        
                                                        
                                                        <div class="col-sm-6"> 
                                                            <div class="form__group mb--20 form-group">
                                                                <label class="form__label form__label--2" for="password">Password <span
                                                                        class="required">*</span></label>
                                                                <input type="password" class="form__input form__input--4 form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6" 
                                                                    id="register-password" name="password" placeholder="Password">
                                                            </div>                                        
                                                        </div> 
                                                        <div class="col-sm-6"> 
                                                            
                                                            <div class="form__group mb--20 form-group">
                                                                <label class="form__label form__label--2" for="rpassword">Retype Password <span
                                                                        class="required">*</span></label>
                                                                <input type="hidden" value="1" id="tnc" name="tnc"/>    
                                                                <input type="password" class="form__input form__input--4 form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6" 
                                                                    id="rpassword" name="rpassword" placeholder="Retype password">
                                                            </div>
                                                            
                                                        </div>     
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">     
                                                            <div class="form__group mb--20 form-group">
                                                                <label class="form__label form__label--2" for="username">Username<span
                                                                        class="required">*</span></label>   
                                                                <input type="text" class="form__input form__input--4 form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6" id="username" name="username">
                                                            </div>  
                                                        </div> 

                                                        <div class="col-sm-6">    
                                                            <div class="form__group mb--20 form-group">
                                                                <label class="form__label form__label--2" for="email">Email<span
                                                                        class="required">*</span></label>
                                                                <input type="email" class="form__input form__input--4 form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6" id="email" name="email">
                                                            </div>  
                                                        </div> 
                                                        
                                                        <div class="col-sm-12 text-center"> 
                                                            
                                                            <p class="privacy-text mb--20">Your personal data will be used to support your
                                                                experience throughout this website, to manage access to your account, and for
                                                                other purposes described in our privacy policy.</p>
                                                            
                                                        </div>   
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 offset-sm-6 text-right mt-10"> 
                                                            
                                                            <div class="form__group">
                                                                <input type="button" value="Cancel" onclick="toggle_forms(0)" class="btn btn-lg">
                                                                <input type="submit" value="Register" id="registerButton" class="btn btn-submit btn-dark btn-lg">
                                                            </div>
                                                        </div>  
                                                    </div>
                                                        
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </section> -->
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
            </div>
        </div>
    </div>


    <!-- jQuery JS -->
    <script src="frontend/assets/js/vendor/jquery.min.js"></script>

    <!-- Bootstrap and Popper Bundle JS -->
    <script src="frontend/assets/js/bootstrap.bundle.min.js"></script>

    <!-- All Plugins Js -->
    <script src="frontend/assets/js/plugins.js"></script>

    <!-- Ajax Mail Js -->
    <script src="frontend/assets/js/ajax-mail.js"></script>

    <!-- Main JS -->
    <script src="frontend/assets/js/main.js"></script>
    

    <script src="theme/custom/plugins/ModalWindowEffects/js/modernizr.custom.js"></script>
    <script src="theme/custom/plugins/ModalWindowEffects/js/classie.js"></script>
    <script src="theme/custom/plugins/ModalWindowEffects/js/modalEffects.js"></script>
    <!-- <script>
        // this is important for IEs
        var polyfilter_scriptpath = 'theme/custom/plugins/ModalWindowEffects/js/';
    </script>
    <script src="theme/custom/plugins/ModalWindowEffects/js/cssParser.js"></script>
    <script src="theme/custom/plugins/ModalWindowEffects/js/css-filters-polyfill.js"></script> -->

    <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
    <script src="theme/assets/plugins/global/plugins.bundle.js?v=7.0.4"></script>
    <script src="theme/assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.4"></script>
    <script src="theme/assets/js/scripts.bundle.js?v=7.0.4"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="theme/custom/global/angular/angular.min.js"></script>
    <script src="theme/custom/global/angular/paging.js"></script>
    <script src="theme/custom/global/angular/paging-custom.js"></script>
    <script src="theme/custom/global/angular/angular-sanitize.js"></script>
    <script src="theme/custom/global/angular/angular-messages.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-route.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-cookies.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-storage/0.0.15/angular-storage.min.js"></script>
    <script type="text/javascript" src="theme/custom/global/angular/ocLazyLoad.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/ismobilejs@1/dist/isMobile.min.js"></script>
    <script type="text/javascript" src="theme/assets/plugins/global/freshslider/freshslider.js"></script>

    <div class="blockUI blockOverlay" style="z-index: 1100; border: none; margin: 0px; padding: 0px; width: 100%; height: 100%; top: 0px; left: 0px; background-color: rgb(0, 0, 0); opacity: 0.7; cursor: wait; position: fixed; display: none;"></div>
    <div class="blockUI blockMsg blockPage" style="display:none; z-index: 1011; position: fixed; padding: 0px; margin: 0px; width: 151px; top: 50%; left: 50%; text-align: center; color: rgb(0, 0, 0); border: 0px; cursor: wait;"><div class="blockui " style="margin-left:-75.5px;"><span>Please wait...</span><span style="padding-right: 40px;"><span class="spinner  spinner-danger "></span></span></div></div>

    <!-- <script src="theme/frontend/js/vendor.min.js"></script> -->
    <script src="theme/frontend/js/app.js"></script>
    
    
    <script src="js/custom.js"></script>
    <script src="https://viewer.shapediver.com/v3/2.11.0/bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.5/js/uikit.min.js" integrity="sha256-jN++RwBoYassp9qTuZDfQuptszFdL1Pm4dKZWS5KjjY=" crossorigin="anonymous"></script>
    <!-- <script src="https://viewer.shapediver.com/v3/1.13.0/bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.5/js/uikit.min.js" integrity="sha256-jN++RwBoYassp9qTuZDfQuptszFdL1Pm4dKZWS5KjjY=" crossorigin="anonymous"></script> -->
    <script type="text/javascript" src="theme/custom/plugins/jquery-validation/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="theme/custom/global/custom-rules.js"></script>
    <script type="text/javascript" src="theme/frontend/js/custom/login.js"></script>
    
    <script type="text/javascript" src="theme/frontend/js/custom/subscribe.js"></script>
    <script type="text/javascript" src="cordova.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
</body>

</html>