
@extends('frontend.master.mastering')

@section('slider')

  <!-- BANNER STRAT -->
  <div class="banner">
    <div class="container">
      <div class="row m-0">
        <div class="col-md-3"></div>
        <div class="col-md-9 p-0">
          <div class="main-banner">
            <div class="banner1"> <img src="{{asset('/')}}frontend/images/slider/slider-image-1.jpg" alt=" ">
              <div class="banner-detail">
                <div class="banner-detail-inner"> 
                  <span class="slogan">Men’s Categories</span>
                  <h1 class="banner-title">Fashion Sale</h1>
                  <span class="slogan">Get Now - Sale Off 30%</span><br>
                  <a  href="#" class="btn btn-color">Shop Now</a>
                </div>
              </div>
            </div>
            <div class="banner2"> <img src="{{asset('/')}}frontend/images/slider/slider-image-2.jpg" alt=" ">
              <div class="banner-detail">
                <div class="row">
                  <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5"></div>
                  <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 text-center">
                    <div class="banner-detail-inner"> 
                      <span class="slogan">Women’s Categories</span>
                      <h1 class="banner-title">Fashion Sale</h1>
                      <span class="slogan">Get Now - Sale Off 30%</span><br>
                      <a  href="#" class="btn btn-color">Shop Now</a>   
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="banner3"> <img src="{{asset('/')}}frontend/images/slider/slider-image-3.jpg" alt=" ">
              <div class="banner-detail">
                <div class="banner-detail-inner"> 
                  <span class="slogan">The wait is over</span>
                  <h1 class="banner-title">Our online shop</h1>
                  <span class="slogan">Get Now - Sale Off 5%</span><br>
                  <a  href="#" class="btn btn-color">Shop Now</a>
                </div>
              </div>
              </div>
            </div>
          </div> 
      </div>
    </div>
  </div>
  <!-- BANNER END --> 

@endsection

@section('banner')

  <!-- CONTAIN START -->
  <section class="mt-20 mt-xs-30">
    <div class="container">
      <div class="sub-banner-block center-xs">
        <div class="row mlr_-20">
          <div class="col-sm-6 plr-20">
            <div class="sub-banner banner-text-left"> 
              <a> 
                <img src="{{asset('/')}}frontend/images/banner/banner-1.jpg" alt=" ">
                <div class="sub-banner-detail">
                  <div class="sub-banner-type">Launching Discount</div>
                  <div class="sub-banner-title">30%</div>
                  <div class="sub-banner-subtitle">USE COUPON CODE: <i>RAMADAN100</i></div>
                  <span class="btn btn-color">SHOP NOW</span>
                </div> 
                <div class="sub-banner-effect"></div>
              </a> 
            </div>
          </div>
          <div class="col-sm-6 plr-20">
            <div class="sub-banner banner-text-right"> 
              <a> 
                <img src="{{asset('/')}}frontend/images/banner/banner-2.jpg" alt=" ">
                <div class="sub-banner-detail">
                 <div class="sub-banner-type">CHIFFON</div>
                 <div class="sub-banner-title">SAREES</div>
                 <div class="sub-banner-subtitle">USE COUPON CODE: <i>RAMADAN100</i></div>
                 <span class="btn btn-color">SHOP NOW</span>
               </div>
                <div class="sub-banner-effect"></div>
              </a> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

@section('fproduct')

<!--  Featured Products Slider Block Start  -->
<section class="pt-60 pt-xs-30">
    <div class="container">

        <div class="row">
          <div class="col-xs-12">
            <div class="heading-part mb-20">
              <h2 class="main_title">Featured Products</h2>
            </div>
          </div>
        </div>

        <div class="featured-product">
          <div class="row mlr_-20">

            <div class="col-md-3 col-sm-4 col-xs-6 plr-20">
              <div class="product-item">
                <div class="sale-label"><span>Sale</span></div>
                <div class="product-image"> 
                <a  href="product-page.html"> <img src="{{asset('/')}}frontend/images/products/item-1.jpg" alt=""> </a>
                  <div class="product-detail-inner">
                    <div class="item-overlay">
                      <ul>
                        <li><a  href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        <li><a  href="#" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                        <li><a  href="#" title="Compare"><i class="fa fa-random"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="product-item-details">
                <div class="item-title"> <a  href="product-page.html">Denim Ladis Long Jacket</a> </div>
                  <div class="price-box"> 
                    <span class="price">$90.00</span>
                    <del class="price old-price">$100.00</del>
                    <div class="item-rating">
                      <div title="70%" class="rating-result"> <span style="width:70%"></span> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-4 col-xs-6 plr-20">
              <div class="product-item">
                <div class="product-image"> 
                <a  href="product-page.html"> <img src="{{asset('/')}}frontend/images/products/item-2.jpg" alt=""> </a>
                  <div class="product-detail-inner">
                    <div class="item-overlay">
                      <ul>
                        <li><a  href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        <li><a  href="#" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                        <li><a  href="#" title="Compare"><i class="fa fa-random"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="product-item-details">
                  <div class="item-title"> <a  href="product-page.html">Denim Ladis Red Cloth</a> </div>
                  <div class="price-box"> 
                    <span class="price">$120.00</span> 
                    <div class="item-rating">
                      <div title="66%" class="rating-result"> <span style="width:66%"></span> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-4 col-xs-6 plr-20">
              <div class="product-item">
              <div class="product-image"> 
                <a  href="product-page.html"> <img src="{{asset('/')}}frontend/images/products/item-3.jpg" alt=""> </a>
                <div class="product-detail-inner">
                  <div class="item-overlay">
                      <ul>
                        <li><a  href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        <li><a  href="#" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                        <li><a  href="#" title="Compare"><i class="fa fa-random"></i></a></li>
                      </ul>
                  </div>
                </div>
                </div>
                <div class="product-item-details">
                  <div class="item-title"> 
                    <a  href="product-page.html">Super Slim Women Cloth</a> 
                  </div>
                  <div class="price-box"> 
                    <span class="price">$48.00</span> 
                    <div class="item-rating">
                        <div title="68%" class="rating-result"> <span style="width:68%"></span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-4 col-xs-6 plr-20">
              <div class="product-item">
                <div class="product-image"> 
                <a  href="product-page.html"> <img src="{{asset('/')}}frontend/images/products/item-4.jpg" alt=""> </a>
                  <div class="product-detail-inner">
                    <div class="item-overlay">
                      <ul>
                        <li><a  href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        <li><a  href="#" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                        <li><a  href="#" title="Compare"><i class="fa fa-random"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="product-item-details">
                  <div class="item-title"> 
                    <a  href="product-page.html">American Ladis Cloth</a> 
                  </div>
                  <div class="price-box"> 
                    <span class="price">$40.00</span> 
                    <div class="item-rating">
                       <div title="58%" class="rating-result"> <span style="width:58%"></span> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-4 col-xs-6 plr-20">
              <div class="product-item">
              <div class="sale-label"><span>Sale</span></div>
                <div class="product-image"> 
                <a  href="product-page.html"> <img src="{{asset('/')}}frontend/images/products/item-5.jpg" alt=""> </a>
                  <div class="product-detail-inner">
                    <div class="item-overlay">
                      <ul>
                        <li><a  href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        <li><a  href="#" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                        <li><a  href="#" title="Compare"><i class="fa fa-random"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="product-item-details">
                  <div class="item-title"> 
                    <a  href="product-page.html">Slim Girls Jeans</a>
                  </div>
                  <div class="price-box"> 
                    <span class="price">$110.00</span>
                    <div class="item-rating">
                        <div title="69%" class="rating-result"> <span style="width:69%"></span> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-4 col-xs-6 plr-20">
              <div class="product-item">
                <div class="product-image"> 
                <a  href="product-page.html"> <img src="{{asset('/')}}frontend/images/products/item-6.jpg" alt=""> </a>
                  <div class="product-detail-inner">
                    <div class="item-overlay">
                      <ul>
                        <li><a  href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        <li><a  href="#" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                        <li><a  href="#" title="Compare"><i class="fa fa-random"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="product-item-details">
                  <div class="item-title"> 
                    <a  href="product-page.html">Denim Ladis Cloth</a>
                  </div>
                  <div class="price-box"> 
                    <span class="price">$205.00</span>
                    <div class="item-rating">
                      <div title="55%" class="rating-result"> <span style="width:55%"></span> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-4 col-xs-6 plr-20">
              <div class="product-item">
              <div class="sale-label"><span>Sale</span></div>
                <div class="product-image"> 
                <a  href="product-page.html"> <img src="{{asset('/')}}frontend/images/products/item-7.jpg" alt=""> </a>
                  <div class="product-detail-inner">
                    <div class="item-overlay">
                      <ul>
                        <li><a  href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        <li><a  href="#" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                        <li><a  href="#" title="Compare"><i class="fa fa-random"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="product-item-details">
                  <div class="item-title"> 
                    <a  href="product-page.html">American Ladis Red Cloth</a>
                  </div>
                  <div class="price-box"> 
                    <span class="price">$30.00</span>
                    <div class="item-rating">
                      <div title="80%" class="rating-result"> <span style="width:80%"></span> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-4 col-xs-6 plr-20">
              <div class="product-item">
                <div class="product-image"> 
                <a  href="product-page.html"> <img src="{{asset('/')}}frontend/images/products/item-8.jpg" alt=""> </a>
                  <div class="product-detail-inner">
                    <div class="item-overlay">
                      <ul>
                        <li><a  href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        <li><a  href="#" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                        <li><a  href="#" title="Compare"><i class="fa fa-random"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="product-item-details">
                  <div class="item-title"> 
                    <a  href="product-page.html">Beautiful Ladis White Cloth</a>
                  </div>
                  <div class="price-box"> 
                      <span class="price">$28.00</span>
                      <div class="item-rating">
                        <div title="70%" class="rating-result"> <span style="width:70%"></span> </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

    </div>
  </section>
  <!--  Featured Products Slider Block End  --> 

@endsection

@section('banner2')

 <!-- perellex-banner Start -->
 <section class="ptb-60 ptb-xs-30">
    <div class="parallax-bg client-bg align-center dark-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 mtb-40 ptb-60">
            <h1>NEW DESIGN 2018</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt atque repellat consequuntur harum ipsum vero ullam labore tenetur numquam facilis laboriosam minus in porro architecto odio. Hic!</p>

            <a  href="shop.html" class="btn btn-color">Shop Now!</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- perellex-banner End -->

@endsection

@section('lproduct')
  <!--  Best Sallers Slider Block Start  -->
  <section class="pb-60 pb-xs-30 featured-product">
    <div class="container">
      <div class="product-slider">
        <div class="row">
          <div class="col-xs-12">
            <div class="heading-part mb-20">
              <h2 class="main_title">Latest Products</h2>
            </div>
          </div>
        </div>
        <div class="position-r">
          <div class="row">
            <div class="owl-carousel pro_cat_slider">

              <div class="item">
                <div class="product-item">
                  <div class="sale-label"><span>Sale</span></div>
                  <div class="product-image"> <a  href="product-page.html"> <img src="{{asset('/')}}frontend/images/products/item-9.jpg" alt=" "> </a>
                    <div class="product-detail-inner">
                      <div class="item-overlay">
                        <ul>
                          <li><a  href="#"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a  href="#" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                          <li><a  href="#" title="Compare"><i class="fa fa-random"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="product-item-details">
                    <div class="item-title"> <a  href="#">American Ladis Cloth</a> </div>
                    <div class="price-box"> 
                      <span class="price">$90.00</span> <del class="price old-price">$100.00</del>
                      <div class="item-rating">
                       <div title="55%" class="rating-result"> <span style="width:55%"></span> </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="product-item">
                  <div class="product-image"> 
                  <a  href="product-page.html"> <img src="{{asset('/')}}frontend/images/products/item-8.jpg" alt=" "> </a>
                    <div class="product-detail-inner">
                      <div class="item-overlay">
                        <ul>
                          <li><a  href="#"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a  href="#" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                          <li><a  href="#" title="Compare"><i class="fa fa-random"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="product-item-details">
                    <div class="item-title"> <a  href="#">Ecstasy Ladis Cloth</a> </div>
                    <div class="price-box"> 
                      <span class="price">$205.00</span> 
                      <div class="item-rating">
                        <div title="90%" class="rating-result"> <span style="width:90%"></span> </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="product-item">
                  <div class="product-image"> 
                  <a  href="product-page.html"> <img src="{{asset('/')}}frontend/images/products/item-9.jpg" alt=" "> </a>
                    <div class="product-detail-inner">
                      <div class="item-overlay">
                        <ul>
                          <li><a  href="#"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a  href="#" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                          <li><a  href="#" title="Compare"><i class="fa fa-random"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="product-item-details">
                    <div class="item-title"> <a  href="#">American Ladis Cloths</a> </div>
                    <div class="price-box"> 
                      <span class="price">$30.00</span> 
                      <div class="item-rating">
                        <div title="65%" class="rating-result"> <span style="width:65%"></span> </div>
                      </div>  
                    </div>
                  </div>
                </div>
              </div>

                <div class="item">
                  <div class="product-item">
                    <div class="product-image"> 
                    <a  href="product-page.html"> <img src="{{asset('/')}}frontend/images/products/item-10.jpg" alt=" "> </a>
                      <div class="product-detail-inner">
                        <div class="item-overlay">
                          <ul>
                            <li><a  href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            <li><a  href="#" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                            <li><a  href="#" title="Compare"><i class="fa fa-random"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="item-title"> <a  href="#">American Ladis Cloth</a> </div>
                      <div class="price-box"> 
                        <span class="price">$40.00</span>
                        <div class="item-rating">
                          <div title="70%" class="rating-result"> <span style="width:70%"></span> </div>
                        </div> 
                      </div>
                    </div>
                  </div>
                </div>

                  <div class="item">
                    <div class="product-item">
                      <div class="product-image"> 
                      <a  href="product-page.html"> <img src="{{asset('/')}}frontend/images/products/item-11.jpg" alt=" "> </a>
                        <div class="product-detail-inner">
                          <div class="item-overlay">
                            <ul>
                              <li><a  href="#"><i class="fa fa-shopping-cart"></i></a></li>
                              <li><a  href="#" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                              <li><a  href="#" title="Compare"><i class="fa fa-random"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="product-item-details">
                        <div class="item-title"> <a  href="#">Denim Slim Ladis Cloth</a> </div>
                        <div class="price-box"> 
                          <span class="price">$46.00</span>
                          <div class="item-rating">
                            <div title="85%" class="rating-result"> <span style="width:85%"></span> </div>
                          </div> 
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="item">
                    <div class="product-item">
                      <div class="product-image"> 
                      <a  href="product-page.html"> <img src="{{asset('/')}}frontend/images/products/item-5.jpg" alt=" "> </a>
                        <div class="product-detail-inner">
                          <div class="item-overlay">
                            <ul>
                              <li><a  href="#"><i class="fa fa-shopping-cart"></i></a></li>
                              <li><a  href="#" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                              <li><a  href="#" title="Compare"><i class="fa fa-random"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="product-item-details">
                        <div class="item-title"> <a  href="#">American Ladis Cloth</a> </div>
                        <div class="price-box"> 
                          <span class="price">$80.00</span> 
                          <div class="item-rating">
                            <div title="60%" class="rating-result"> <span style="width:60%"></span> </div>
                          </div>
                       </div>
                      </div>
                    </div>
                  </div>

                  <div class="item">
                    <div class="product-item">
                      <div class="product-image"> 
                      <a  href="product-page.html"> <img src="{{asset('/')}}frontend/images/products/item-3.jpg" alt=" "> </a>
                        <div class="product-detail-inner">
                          <div class="item-overlay">
                            <ul>
                              <li><a  href="#"><i class="fa fa-shopping-cart"></i></a></li>
                              <li><a  href="#" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                              <li><a  href="#" title="Compare"><i class="fa fa-random"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="product-item-details">
                        <div class="item-title"> <a  href="#">American Ladis Cloth</a> </div>
                        <div class="price-box"> 
                          <span class="price">$80.00</span>
                          <div class="item-rating">
                            <div title="72%" class="rating-result"> <span style="width:72%"></span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  Best Sallers Slider Block End  -->
@endsection

@section('feature')

   <!--  Site Services Features Block Start  -->
   <section class="pb-60 pb-xs-30">
    <div class="service-block center-sm">
    <div class="container">
        <div class="row">
          <div class="col-md-3 col-xs-6 feature-box-main">
            <div class="feature-box">
              <i class="fa fa-truck"></i>
              <div class="title">Free Delivery</div>
              <div class="subtitle">From $99.99</div>
            </div>
          </div>
          <div class="col-md-3 col-xs-6 feature-box-main">
            <div class="feature-box">
              <i class="fa fa-users"></i>
              <div class="title">Support 24/7</div>
              <div class="subtitle">Online 24 hours</div>
            </div>
          </div>
          <div class="col-md-3 col-xs-6 feature-box-main">
            <div class="feature-box">
              <i class="fa fa-shield"></i>
              <div class="title">Safe Payment</div>
              <div class="subtitle">Buyers Safety</div>
            </div>
          </div>
          <div class="col-md-3 col-xs-6 feature-box-main">
            <div class="feature-box">
              <i class="fa fa-usd"></i>
              <div class="title">More Discount</div>
              <div class="subtitle">on affiliation</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  Site Services Features Block End  -->

@endsection

@section('blog')
  <!--  Blog Slider Block Start  -->
  <section class="pb-60 pb-xs-30">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mb-sm-30">
          <div class="heading-part mb-20">
            <h2 class="main_title">Latest Blog</h2>
          </div>
          <div class="row blog-mobile-m">
            <div id="news" class="owl-carousel">
              <div class="item">
                <div class="blog-item">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="blog-media">                         
                        <a  href="single-blog.html" title="" class="read">
                        <img src="{{asset('/')}}frontend/images/blog/blog-1.jpg" alt=" "> 
                        </a> 
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="blog-detail">
                        <div class="date">27 Jan 2018</div>
                        <h3><a  href="single-blog.html">Lorem ipsum dolor sit amet</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, nulla accusantium ut blanditiis quas, repellendus voluptates rem provident qui dolorem minus id vero repellat.</p>
                        <hr>
                        <div class="post-info">
                          <ul>
                            <li><span>By</span><a  href="#"> Xpent</a></li>
                            <li><a  href="#">(5) comments</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="blog-item">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="blog-media">
                        <a  href="single-blog.html" title="" class="read">
                        <img src="{{asset('/')}}frontend/images/blog/blog-2.jpg" alt=" "> 
                        </a> 
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="blog-detail">
                        <div class="date">27 Jan 2018</div>
                        <h3><a  href="single-blog.html">Lorem ipsum dolor sit amet</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus eum, similique, quia, saepe ea distinctio soluta nobis architecto accusamus ullam accusantium.</p>
                        <hr>
                        <div class="post-info">
                          <ul>
                            <li><span>By</span><a  href="#"> Xpent</a></li>
                            <li><a  href="#">(5) comments</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="blog-item">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="blog-media"> 
                        <a  href="single-blog.html" title="" class="read">
                        <img src="{{asset('/')}}frontend/images/blog/blog-3.jpg" alt=" "> 
                        </a> 
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="blog-detail">
                        <div class="date">27 Jan 2018</div>
                        <h3><a  href="single-blog.html">Lorem ipsum dolor sit amet</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quasi quas iusto quaerat. Architecto, velit nostrum laborum aliquid hic impedit quis porro, sunt id dolorem error.</p>
                        <hr>
                        <div class="post-info">
                          <ul>
                            <li><span>By</span><a  href="#"> Xpent</a></li>
                            <li><a  href="#">(5) comments</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

         <div class="col-md-4">
            <div class="client-inner testimonial-block">
              <div id="client" class="owl-carousel">
                <div class="item client-detail">
                  <div class="client-img"> <img src="{{asset('/')}}frontend/images/testimonial/testimonial-1.jpg" alt="Xpent"> </div>
                  <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, amet cumque ad similique laboriosam."</p>
                  <h4 class="sub-title client-title">Marketing</h4>
                  <div class="date">Dec, 12 2017</div>
                </div>
                <div class="item client-detail">
                  <div class="client-img"> <img src="{{asset('/')}}frontend/images/testimonial/testimonial-2.jpg" alt="Xpent"> </div>
                  <p>"Temporibus dicta soluta, distinctio voluptatum, non culpa quod vitae laudantium! Esse qui, labore ducimus."</p>
                  <h4 class="sub-title client-title">Marketing</h4>
                  <div class="date">Dec, 12 2017</div>
                </div>
                <div class="item client-detail">
                  <div class="client-img"> <img src="{{asset('/')}}frontend/images/testimonial/testimonial-3.jpg" alt="Xpent"> </div>
                  <p>"Ipsum dolor sit amet, consectetur adipisicing elit. Molestias modi, dolor a voluptatibus, quaerat, at rerum, explicabo temporibus."</p>
                  <h4 class="sub-title client-title">Marketing</h4>
                  <div class="date">Dec, 12 2017</div>
                </div>
              </div>
            </div>
         </div>
      </div>
    </div>
  </section>
  <!--  Blog Slider Block End  -->
@endsection

@section('brand')
   <!-- Brand logo block Start  -->
   <section class="ptb-30">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="heading-part mb-20">
            <h2 class="main_title">Our Brands</h2>
          </div>
        </div>
      </div>
      <div class="row brand">
        <div class="col-md-12">
          <div id="brand-logo" class="owl-carousel align_center">
            <div class="item"><a  href="#"><img src="{{asset('/')}}frontend/images/brands/brand-1.jpg" alt=" "></a></div>
            <div class="item"><a  href="#"><img src="{{asset('/')}}frontend/images/brands/brand-2.jpg" alt=" "></a></div>
            <div class="item"><a  href="#"><img src="{{asset('/')}}frontend/images/brands/brand-3.jpg" alt=" "></a></div>
            <div class="item"><a  href="#"><img src="{{asset('/')}}frontend/images/brands/brand-4.jpg" alt=" "></a></div>
            <div class="item"><a  href="#"><img src="{{asset('/')}}frontend/images/brands/brand-5.jpg" alt=" "></a></div>
            <div class="item"><a  href="#"><img src="{{asset('/')}}frontend/images/brands/brand-6.jpg" alt=" "></a></div>
            <div class="item"><a  href="#"><img src="{{asset('/')}}frontend/images/brands/brand-7.jpg" alt=" "></a></div>
            <div class="item"><a  href="#"><img src="{{asset('/')}}frontend/images/brands/brand-8.jpg" alt=" "></a></div>
            <div class="item"><a  href="#"><img src="{{asset('/')}}frontend/images/brands/brand-9.jpg" alt=" "></a></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Brand logo block End  --> 
@endsection

@section('widget')
  <!-- Bottom Widget Products  -->
  <section class="pb-60 pb-xs-30">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="widget widget_products">
            <div class="widget-title-wrap"><h5 class="widget-title">Products</h5></div>

            <ul class="product_list_widget">
              <li>
                <a  href="#"> 
                  <img width="70" height="85" src="{{asset('/')}}frontend/images/products/item-small-1.jpg"> 
                  <span class="product-title">Ecstasy Ladis Cloth</span> 
                </a> 
                <div class="price-box"> 
                  <span class="price">$30.00</span> <del class="price old-price">$100.00</del>
                </div>
              </li>
              <li>
                <a  href="#"> 
                  <img width="70" height="85" src="{{asset('/')}}frontend/images/products/item-small-2.jpg"> 
                  <span class="product-title">Ecstasy Ladis Cloth</span> 
                </a> 
                <div class="price-box"> 
                  <span class="price">$30.00</span> <del class="price old-price">$100.00</del>
                </div>
              </li>
              <li>
                <a  href="#"> 
                  <img width="70" height="85" src="{{asset('/')}}frontend/images/products/item-small-3.jpg"> 
                  <span class="product-title">Ecstasy Ladis Cloth</span> 
                </a> 
                <div class="price-box"> 
                  <span class="price">$30.00</span> <del class="price old-price">$100.00</del>
                </div>
              </li>
            </ul>

          </div>
        </div>
        
        <div class="col-sm-4">
          <div class="widget widget_products">
            <div class="widget-title-wrap"><h5 class="widget-title">Top Rated Products</h5></div>

            <ul class="product_list_widget">
              <li>
                <a  href="#"> 
                  <img width="70" height="85" src="{{asset('/')}}frontend/images/products/item-small-4.jpg"> 
                  <span class="product-title">Ecstasy Ladis Cloth</span> 
                </a> 
                <div class="price-box"> 
                  <span class="price">$30.00</span> <del class="price old-price">$100.00</del>
                  <div class="item-rating">
                   <div title="60%" class="rating-result"> <span style="width:60%"></span> </div>
                  </div>
                </div>
              </li>
              <li>
                <a  href="#"> 
                  <img width="70" height="85" src="{{asset('/')}}frontend/images/products/item-small-5.jpg"> 
                  <span class="product-title">Ecstasy Ladis Cloth</span> 
                </a> 
                <div class="price-box"> 
                  <span class="price">$30.00</span> <del class="price old-price">$100.00</del>
                  <div class="item-rating">
                   <div title="60%" class="rating-result"> <span style="width:60%"></span> </div>
                  </div>
                </div>
              </li>
              <li>
                <a  href="#"> 
                  <img width="70" height="85" src="{{asset('/')}}frontend/images/products/item-small-6.jpg"> 
                  <span class="product-title">Ecstasy Ladis Cloth</span> 
                </a> 
                <div class="price-box"> 
                  <span class="price">$30.00</span> <del class="price old-price">$100.00</del>
                  <div class="item-rating">
                   <div title="60%" class="rating-result"> <span style="width:60%"></span> </div>
                  </div>
                </div>
              </li>
            </ul>

          </div>
        </div>

        <div class="col-sm-4">
          <div class="widget widget_products">
            <div class="widget-title-wrap"><h5 class="widget-title">Recent Reviews</h5></div>

            <ul class="product_list_widget">
              <li>
                <a  href="#"> 
                  <img width="70" height="85" src="{{asset('/')}}frontend/images/products/item-small-7.jpg"> 
                  <span class="product-title">Ecstasy Ladis Cloth</span> 
                </a> 
                <div class="price-box"> 
                  <span class="price">$30.00</span> <del class="price old-price">$100.00</del>
                  <div class="item-rating">
                   <div title="60%" class="rating-result"> <span style="width:60%"></span> </div>
                  </div>
                </div>
              </li>
              <li>
                <a  href="#"> 
                  <img width="70" height="85" src="{{asset('/')}}frontend/images/products/item-small-8.jpg"> 
                  <span class="product-title">Ecstasy Ladis Cloth</span> 
                </a> 
                <div class="price-box"> 
                  <span class="price">$30.00</span> <del class="price old-price">$100.00</del>
                  <div class="item-rating">
                   <div title="60%" class="rating-result"> <span style="width:60%"></span> </div>
                  </div>
                </div>
              </li>
              <li>
                <a  href="#"> 
                  <img width="70" height="85" src="{{asset('/')}}frontend/images/products/item-small-9.jpg"> 
                  <span class="product-title">Ecstasy Ladis Cloth</span> 
                </a> 
                <div class="price-box"> 
                  <span class="price">$30.00</span> <del class="price old-price">$100.00</del>
                  <div class="item-rating">
                   <div title="60%" class="rating-result"> <span style="width:60%"></span> </div>
                  </div>
                </div>
              </li>
            </ul>

          </div>
        </div>
      </div>
    </div>
  </section>
<!-- Bottom Widget Products Ends -->
@endsection
