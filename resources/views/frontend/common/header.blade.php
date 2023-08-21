<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> Xpent - eCommerce HTML Template</title>
  
  <!-- SEO Meta
    ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="distribution" content="global">
  <meta name="revisit-after" content="2 Days">
  <meta name="robots" content="ALL">
  <meta name="rating" content="8 YEARS">
  <meta name="Language" content="en-us">
  <meta name="GOOGLEBOT" content="NOARCHIVE">

  <!-- Mobile Specific Metas
    ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- CSS
    ================================================== -->
  <link rel="stylesheet" type="text/css"  href="{{asset('/')}}frontend/css/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css"  href="{{asset('/')}}frontend/css/bootstrap.css"/>
  <link rel="stylesheet" type="text/css"  href="{{asset('/')}}frontend/css/jquery-ui.css">
  <link rel="stylesheet" type="text/css"  href="{{asset('/')}}frontend/css/owl.carousel.css">
  <link rel="stylesheet" type="text/css"  href="{{asset('/')}}frontend/css/magnific-popup.css">
  <link rel="stylesheet" type="text/css"  href="{{asset('/')}}frontend/css/fotorama.css">
  <link rel="stylesheet" type="text/css"  href="{{asset('/')}}frontend/css/custom.css">
  <link rel="stylesheet" type="text/css"  href="{{asset('/')}}frontend/css/responsive.css">

  <link rel="shortcut icon"  href="images/favicon.png">
  <link rel="apple-touch-icon"  href="images/apple-touch-icon.html">
  <link rel="apple-touch-icon" sizes="72x72"  href="images/apple-touch-icon-72x72.html">
  <link rel="apple-touch-icon" sizes="114x114"  href="images/apple-touch-icon-114x114.html">

</head>

<body class="common-home">
<div class="xpent-loader"></div>

<div id="newslater-popup" class="mfp-hide white-popup-block open align-center">
  <div class="nl-popup-main">
    <div class="nl-popup-inner">
      <div class="row">
        <div class="col-md-6 col-sm-6"></div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="newsletter-inner"> <img src="{{asset('/')}}frontend/images/plane.png" alt=" ">
            <h2 class="main_title">Subscribe Emails</h2>
            <span>Get Latest Products Update</span>
            <p>We hate spam. Just to let you know our offer.</p>
            <form>
              <input type="email" placeholder="Email Here...">
              <button title="Subscribe">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="main"> 
  <!-- HEADER START -->
  <header class="navbar navbar-custom" id="header">
    <div class="header-top bg-gray">
      <div class="container">
        <div class="row">
            <div class="col-sm-5">
              <div class="top-link top-link-left">
                  <ul class="social-icon">
                    <li><a title="Facebook" class="facebook"><i class="fa fa-facebook"> </i></a></li>
                    <li><a title="Twitter" class="twitter"><i class="fa fa-twitter"> </i></a></li>
                    <li><a title="Linkedin" class="linkedin"><i class="fa fa-linkedin"> </i></a></li>
                    <li><a title="RSS" class="rss"><i class="fa fa-rss"> </i></a></li>
                    <li><a title="Pinterest" class="pinterest"><i class="fa fa-pinterest"> </i></a></li>
                  </ul>
              </div>
            </div>
            <div class="col-sm-7">
              <div class="top-link right-side">
                <ul>
                  <li class="Compare-icon">
                    <a  href="#" title="Compare">
                      <i class="fa fa-sign-in"></i>
                      <span class="hidden-xs hidden-sm hidden-md">Compare</span>
                    </a>
                  </li>
                  <li class="login-icon">
                    <a  href="login.html" title="Sing In">
                      <i class="fa fa-user"></i>
                      <span class="hidden-xs hidden-sm hidden-md">Sign In</span>
                    </a>
                  </li>
                  <li class="Register-icon">
                    <a  href="register.html" title="Register">
                      <i class="fa fa-user-plus"></i>
                      <span class="hidden-xs hidden-sm hidden-md">Register</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
      </div>
    </div>

    <div class="header-middle">
      <div class="container">
      <div class="header-inner">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><i class="fa fa-bars"></i></button>
          <a class="navbar-brand page-scroll"  href="index.html"> <img alt=" " src="{{asset('/')}}frontend/images/logo.png"> </a> </div>
        <div class="right-side float-none-sm">
          <div class="right-side float-left-xs header-right-link">

            <ul>
            <li class="main-search">
                <div class="header_search_toggle desktop-view">
                  <form>
                    <div class="search-box">
                      <input class="input-text" type="text" placeholder="Search Here...">
                      <button class="search-btn"><i class="fa fa-search"></i></button>
                    </div>
                  </form>
                </div>
              </li>

               <li class="cart-icon"> <a><span><i class="fa fa-shopping-cart"></i> <small class="cart-notification">0</small> </span> </a>
                  <div class="cart-dropdown header-link-dropdown">
                    <ul class="cart-list link-dropdown-list">
                      <li> <a class="close-cart"><i class="fa fa-times-circle"></i></a>
                        <div class="media"> <a class="pull-left"> <img alt=" " src="{{asset('/')}}frontend/images/products/item-small-1.jpg"></a>
                          <div class="media-body"> <span><a>Summer Women Nice Cloth</a></span>
                            <p class="cart-price">$29.99</p>
                          </div>
                        </div>
                      </li>
                      <li> <a class="close-cart"><i class="fa fa-times-circle"></i></a>
                        <div class="media"> <a class="pull-left"> <img alt=" " src="{{asset('/')}}frontend/images/products/item-small-2.jpg"></a>
                          <div class="media-body"> <span><a>Summer Women Nice Cloth</a></span>
                            <p class="cart-price">$29.99</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <p class="cart-sub-totle"> <span class="pull-left">Cart Subtotal</span> <span class="pull-right"><strong class="price-box">$29.98</strong></span> </p>
                    <div class="clearfix"></div>
                    <div class="mt-20"> <a  href="cart.html" class="btn-color btn">Cart</a> <a  href="checkout.html" class="btn-color btn right-side">Checkout</a> </div>
                  </div>
                </li>
              <li class="account-icon"> <a  href="#"><span><i class="fa fa-heart-o"></i></span></a></li>
            </ul>
          </div>
        </div>
        <div class="header_search_toggle mobile-view">
          <form>
            <div class="search-box">
              <input class="input-text" type="text" placeholder="Search entire store here...">
              <button class="search-btn"></button>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>

  <div class="header-bottom">
    <div class="container position-r">
      <div class="row m-0">
        <div class="col-md-3 position-i p-0">
            <div class="sidebar-menu-dropdown home ptb-20">
              <a class="btn-sidebar-menu-dropdown"><span></span> Categories</a>
              <div id="cat" class="cat-dropdown">
                <div class="sidebar-contant">
                  <div id="menu" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                      <li class="level sub-megamenu">
                        <span class="opener plus"></span>
                        <a  href="shop.html" class="page-scroll">Cloths<i class="fa fa-angle-right right-side"></i></a>
                        <div class="megamenu mobile-sub-menu">
                          <div class="megamenu-inner-top">
                            <ul class="sub-menu-level1">
                              <li class="level2">
                                <a  href="shop.html"><span>Kids Fashion</span></a>
                                <ul class="sub-menu-level2 ">
                                  <li class="level3"><a  href="shop.html">Baby Suits</a></li>
                                  <li class="level3"><a  href="shop.html">Tops</a></li>
                                  <li class="level3"><a  href="shop.html">Trousers</a></li>
                                  <li class="level3"><a  href="shop.html">Shorts</a></li>
                                  <li class="level3"><a  href="shop.html">Jackets</a></li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li class="level"><a  href=shop.html" class="page-scroll">Women Cloths</a></li>
                      <li class="level"><a  href=shop.html" class="page-scroll">Playsuits & Jumpsuits</a></li>
                      <li class="level sub-megamenu">
                        <span class="opener plus"></span>
                        <a  href="shop.html" class="page-scroll">Fashion<i class="fa fa-angle-right right-side"></i></a>
                          <div class="megamenu mobile-sub-menu">
                            <div class="megamenu-inner-top">
                              <ul class="sub-menu-level1">
                                <li class="level2">
                                  <a  href="shop.html"><span>Women Clothings</span></a>
                                  <ul class="sub-menu-level2">
                                    <li class="level3"><a  href="shop.html">Dresses</a></li>
                                    <li class="level3"><a  href="shop.html">Skirts</a></li>
                                    <li class="level3"><a  href="shop.html">Tops</a></li>
                                    <li class="level3"><a  href="shop.html">Sleepwear</a></li>
                                    <li class="level3"><a  href="shop.html">Trousers</a></li>
                                    <li class="level3"><a  href="shop.html">Shorts</a></li>
                                  </ul>
                                </li>
                                <li class="level2">
                                  <a  href="shop.html"><span>Girls Fashion</span></a>
                                  <ul class="sub-menu-level2 ">
                                    <li class="level3"><a  href="shop.html">Dresses</a></li>
                                    <li class="level3"><a  href="shop.html">Skirts</a></li>
                                    <li class="level3"><a  href="shop.html">Tops</a></li>
                                    <li class="level3"><a  href="shop.html">Sleepwear</a></li>
                                    <li class="level3"><a  href="shop.html">Trousers</a></li>
                                    <li class="level3"><a  href="shop.html">Shorts</a></li>
                                  </ul>
                                </li>
                                <li class="level2 hidden-xs hidden-sm">
                                  <a  href="shop.html">
                                    <img src="{{asset('/')}}frontend/images/banner/menu-banner.jpg" alt="Xpent ">
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                      </li>
                      <li class="level"><a  href="shop.html" class="page-scroll">Swimwear</a></li>
                      <li class="level"><a  href="shop.html" class="page-scroll">Jackets</a></li>
                      <li class="level"><a  href="shop.html" class="page-scroll">Playsuits & Jumpsuits</a></li>
                      <li class="level sub-megamenu">
                        <span class="opener plus"></span>
                        <a class="page-scroll">Pages<i class="fa fa-angle-right right-side"></i></a>
                         <div class="megamenu mobile-sub-menu">
                           <div class="megamenu-inner-top">
                             <ul class="sub-menu-level1">
                               <li class="level2">
                                 <ul class="sub-menu-level2 ">
                                   <li class="level3"><a  href="about.html">About</a></li>
                                   <li class="level3"><a  href="account.html">Account</a></li>
                                   <li class="level3"><a  href="checkout.html">Checkout</a></li>
                                   <li class="level3"><a  href="contact.html">Contact</a></li>
                                   <li class="level3"><a  href="404.html">404 Error</a></li>
                                   <li class="level3"><a  href="blog.html">Blog</a></li>
                                   <li class="level3"><a  href="single-blog.html">Single Blog</a></li>
                                 </ul>
                               </li>
                             </ul>
                           </div>
                         </div>
                      </li>
                      <li class="level"><a  href="shop.html" class="page-scroll">Ladis Coats</a></li>
                      <li class="level"><a  href="shop.html" class="page-scroll">Tracksuits</a></li>
                      <li class="level"><a  href="shop.html" class="page-scroll">All Categories >></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-md-9 p-0">
            <div class="nav_sec position-r">
              <div class="mobilemenu-title mobilemenu">
                <span>Menu</span>
                <i class="fa fa-bars pull-right"></i>
              </div>
              <div class="mobilemenu-content">
                <ul class="nav navbar-nav" id="menu-main">
                  <li>
                    <a  href="{{route('home')}}">Home</a>
                  </li>
                  <li>
                    <a  href="{{route('shop')}}">Shop</a>
                  </li>
                  <li>
                    <a  href="{{asset('about')}}">About</a>
                  </li>
                  <li>
                    <a  href="{{asset('blog')}}">Blog</a>
                  </li>
                  <li>
                    <a  href="{{route('contact')}}">Contact</a>
                  </li>
                  <li class="level">
                    <span class="opener plus"></span>
                    <a class="page-scroll">Pages</a>
                    <div class="megamenu mobile-sub-menu">
                      <div class="megamenu-inner-top">
                        <ul class="sub-menu-level1">
                          <li class="level2">
                            <ul class="sub-menu-level2 ">
                              <li class="level3"><a  href="{{route('account')}}">Account</a></li>
                              <li class="level3"><a  href="{{route('checkout')}}">Checkout</a></li>
                              <li class="level3"><a  href="{{route('error')}}">404 Error</a></li>
                              <li class="level3"><a  href="{{route('singleblog')}}">Single Blog</a></li>
                              <li class="level3"><a  href="{{route('individualProduct')}}">Product Details</a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </header>
    <!-- HEADER END --> 