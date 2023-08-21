@extends('frontend.master.mastering')
  
 
@section('sbanner')
     <!-- BANNER STRAT -->
  <div class="banner inner-banner">
    <div class="container">
      <section class="banner-detail">
        <h1 class="banner-title">Shop</h1>
        <div class="bread-crumb right-side">
          <ul>
            <li><a href="index.html">Home</a>/</li>
            <li><span>Shop</span></li>
          </ul>
        </div>
      </section>
    </div>
  </div>
  <!-- BANNER END --> 
@endsection

@section('scontent')
   <!-- CONTAIN START -->
   <section class="ptb-60">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4 mb-xs-30">
          <div class="sidebar-block">
            <div class="sidebar-box listing-box mb-40"> <span class="opener plus"></span>
              <div class="sidebar-title">
                <h3>Categories</h3>
              </div>
              <div class="sidebar-contant">
                <ul>
                  <li><a>Clothing <span>(21)</span></a></li>
                  <li><a>Shoes <span>(05)</span></a></li>
                  <li><a>Jewellery <span>(10)</span></a></li>
                  <li><a>Home & Furniture <span>(12)</span></a></li>
                  <li><a>Bags <span>(18)</span></a></li>
                  <li><a>Accessories <span>(70)</span></a></li>
                </ul>
              </div>
            </div>
            <div class="sidebar-box gray-box mb-40"> <span class="opener plus"></span>
              <div class="sidebar-title">
                <h3>Shop by</h3>
              </div>
              <div class="sidebar-contant">
                <div class="price-range mb-30">
                  <div class="inner-title">Price range</div>
                  <input class="price-txt" type="text" id="amount">
                  <div id="slider-range"></div>
                </div>
                <div class="mb-20">
                  <div class="inner-title">Category</div>
                  <ul>
                    <li><a>Bags 2 <span>(0)</span></a></li>
                    <li><a>Clothing x2 2 <span>(05)</span></a></li>
                    <li><a>Lingerie 2 <span>(10)</span></a></li>
                  </ul>
                </div>
                <div class="mb-20">
                  <div class="inner-title">Color</div>
                  <ul>
                    <li><a>Black <span>(0)</span></a></li>
                    <li><a>Blue <span>(05)</span></a></li>
                    <li><a>Brown <span>(10)</span></a></li>
                  </ul>
                </div>
                <div class="mb-20">
                  <div class="inner-title">Manufacture</div>
                  <ul>
                    <li><a>Augue congue <span>(0)</span></a></li>
                    <li><a>Eu magna <span>(05)</span></a></li>
                    <li><a>Ipsum sit <span>(10)</span></a></li>
                  </ul>
                </div>
                <a href="#" class="btn btn-color">Refine</a> </div>
            </div>

            <div class="sidebar-box sidebar-item"> <span class="opener plus"></span>
              <div class="sidebar-title">
                <h3>Best Seller</h3>
              </div>
              <div class="sidebar-contant">
                <ul>
                  <li>
                    <div class="pro-media"> <a><img alt="T-shirt" src="{{asset('/')}}frontend/images/products/item-small-1.jpg"></a> </div>
                    <div class="pro-detail-info"> <a>Summer Women Nice Cloth</a>
                      <div class="price-box"> <span class="price">$80.00</span> </div>
                    </div>
                  </li>
                  <li>
                    <div class="pro-media"> <a><img alt="T-shirt" src="{{asset('/')}}frontend/images/products/item-small-2.jpg"></a> </div>
                    <div class="pro-detail-info"> <a>Summer Women Nice Cloth</a>
                      <div class="price-box"> <span class="price">$80.00</span> </div>
                    </div>
                  </li>
                  <li>
                    <div class="pro-media"> <a><img alt="T-shirt" src="{{asset('/')}}frontend/images/products/item-small-3.jpg"></a> </div>
                    <div class="pro-detail-info"> <a>Summer Women Nice Cloth</a>
                      <div class="price-box"> <span class="price">$80.00</span> </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-9 col-sm-8">
          <div class="shorting mb-30">
            <div class="row">
              <div class="col-md-6">
                <div class="view">
                  <div class="list-types grid active "> 
                    <a href="shop.html">
                      <div class="grid-icon list-types-icon"></div>
                    </a> 
                  </div>
                  <div class="list-types list"> 
                    <a href="shop-list.html">
                      <div class="list-icon list-types-icon"></div>
                    </a> 
                  </div>
                </div>
                <div class="short-by float-right-sm"> <span>Sort By</span>
                  <div class="select-item">
                    <select>
                      <option value="" selected="selected">Name (A to Z)</option>
                      <option value="">Name(Z - A)</option>
                      <option value="">price(low&gt;high)</option>
                      <option value="">price(high &gt; low)</option>
                      <option value="">rating(highest)</option>
                      <option value="">rating(lowest)</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="show-item right-side float-left-sm"> <span>Show</span>
                  <div class="select-item">
                    <select>
                      <option value="" selected="selected">30</option>
                      <option value="">20</option>
                      <option value="">10</option>
                    </select>
                  </div>
                  <span>Per Page</span>
                </div>
              </div>

            </div>
          </div>

          <div class="product-listing">
            <div class="row mlr_-20">

              <div class="col-md-4 col-xs-6 plr-20">
                <div class="product-item">
                  <div class="sale-label"><span>Sale</span></div>
                  <div class="product-image"> 
                  <a href="product-page.html"> <img src="{{asset('/')}}frontend/images/products/item-1.jpg" alt=""> </a>
                    <div class="product-detail-inner">
                      <div class="item-overlay">
                        <ul>
                          <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a href="#" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                          <li><a href="#" title="Compare"><i class="fa fa-random"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                <div class="product-item-details">
                <div class="item-title"> <a href="product-page.html">Denim Ladis Long Jacket</a> </div>
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

              <div class="col-md-4 col-xs-6 plr-20">
                <div class="product-item">
                  <div class="product-image"> 
                  <a href="product-page.html"> <img src="{{asset('/')}}frontend/images/products/item-2.jpg" alt=""> </a>
                    <div class="product-detail-inner">
                      <div class="item-overlay">
                        <ul>
                          <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a href="#" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                          <li><a href="#" title="Compare"><i class="fa fa-random"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="product-item-details">
                    <div class="item-title"> <a href="product-page.html">Denim Ladis Red Cloth</a> </div>
                    <div class="price-box"> 
                      <span class="price">$120.00</span> 
                      <div class="item-rating">
                        <div title="66%" class="rating-result"> <span style="width:66%"></span> </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-xs-6 plr-20">
                <div class="product-item">
                <div class="product-image"> 
                  <a href="product-page.html"> <img src="{{asset('/')}}frontend/images/products/item-3.jpg" alt=""> </a>
                  <div class="product-detail-inner">
                    <div class="item-overlay">
                        <ul>
                          <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a href="#" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                          <li><a href="#" title="Compare"><i class="fa fa-random"></i></a></li>
                        </ul>
                    </div>
                  </div>
                  </div>
                  <div class="product-item-details">
                    <div class="item-title"> 
                      <a href="product-page.html">Super Slim Women Cloth</a> 
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

              <div class="col-md-4 col-xs-6 plr-20">
                <div class="product-item">
                  <div class="product-image"> 
                  <a href="product-page.html"> <img src="{{asset('/')}}frontend/images/products/item-4.jpg" alt=""> </a>
                    <div class="product-detail-inner">
                      <div class="item-overlay">
                        <ul>
                          <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a href="#" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                          <li><a href="#" title="Compare"><i class="fa fa-random"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="product-item-details">
                    <div class="item-title"> 
                      <a href="product-page.html">American Ladis Cloth</a> 
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

              <div class="col-md-4 col-xs-6 plr-20">
                <div class="product-item">
                <div class="sale-label"><span>Sale</span></div>
                  <div class="product-image"> 
                  <a href="product-page.html"> <img src="{{asset('/')}}frontend/images/products/item-5.jpg" alt=""> </a>
                    <div class="product-detail-inner">
                      <div class="item-overlay">
                        <ul>
                          <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a href="#" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                          <li><a href="#" title="Compare"><i class="fa fa-random"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="product-item-details">
                    <div class="item-title"> 
                      <a href="product-page.html">Slim Girls Jeans</a>
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

              <div class="col-md-4 col-xs-6 plr-20">
                <div class="product-item">
                  <div class="product-image"> 
                  <a href="product-page.html"> <img src="{{asset('/')}}frontend/images/products/item-6.jpg" alt=""> </a>
                    <div class="product-detail-inner">
                      <div class="item-overlay">
                        <ul>
                          <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a href="#" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                          <li><a href="#" title="Compare"><i class="fa fa-random"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="product-item-details">
                    <div class="item-title"> 
                      <a href="product-page.html">Denim Ladis Cloth</a>
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

              <div class="col-md-4 col-xs-6 plr-20">
                <div class="product-item">
                <div class="sale-label"><span>Sale</span></div>
                  <div class="product-image"> 
                  <a href="product-page.html"> <img src="{{asset('/')}}frontend/images/products/item-7.jpg" alt=""> </a>
                    <div class="product-detail-inner">
                      <div class="item-overlay">
                        <ul>
                          <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a href="#" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                          <li><a href="#" title="Compare"><i class="fa fa-random"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="product-item-details">
                    <div class="item-title"> 
                      <a href="product-page.html">American Ladis Red Cloth</a>
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

              <div class="col-md-4 col-xs-6 plr-20">
                <div class="product-item">
                  <div class="product-image"> 
                  <a href="product-page.html"> <img src="{{asset('/')}}frontend/images/products/item-8.jpg" alt=""> </a>
                    <div class="product-detail-inner">
                      <div class="item-overlay">
                        <ul>
                          <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a href="#" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                          <li><a href="#" title="Compare"><i class="fa fa-random"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="product-item-details">
                    <div class="item-title"> 
                      <a href="product-page.html">Beautiful Ladis White Cloth</a>
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

              <div class="col-md-4 col-xs-6 plr-20">
                <div class="product-item">
                  <div class="product-image"> 
                  <a href="product-page.html"> <img src="{{asset('/')}}frontend/images/products/item-9.jpg" alt=""> </a>
                    <div class="product-detail-inner">
                      <div class="item-overlay">
                        <ul>
                          <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a href="#" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                          <li><a href="#" title="Compare"><i class="fa fa-random"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="product-item-details">
                    <div class="item-title"> <a href="#">American Ladis Cloth</a> </div>
                    <div class="price-box"> 
                      <span class="price">$90.00</span> <del class="price old-price">$100.00</del>
                      <div class="item-rating">
                       <div title="55%" class="rating-result"> <span style="width:55%"></span> </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-xs-6 plr-20">
                <div class="product-item">
                  <div class="product-image"> 
                  <a href="product-page.html"> <img src="{{asset('/')}}frontend/images/products/item-10.jpg" alt=""> </a>
                    <div class="product-detail-inner">
                      <div class="item-overlay">
                        <ul>
                          <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a href="#" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                          <li><a href="#" title="Compare"><i class="fa fa-random"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="product-item-details">
                    <div class="item-title"> <a href="#">Ecstasy Ladis Cloth</a> </div>
                    <div class="price-box"> 
                      <span class="price">$205.00</span> 
                      <div class="item-rating">
                        <div title="90%" class="rating-result"> <span style="width:90%"></span> </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-xs-6 plr-20">
                <div class="product-item">
                  <div class="product-image"> 
                  <a href="product-page.html"> <img src="{{asset('/')}}frontend/images/products/item-11.jpg" alt=""> </a>
                    <div class="product-detail-inner">
                      <div class="item-overlay">
                        <ul>
                          <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a href="#" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                          <li><a href="#" title="Compare"><i class="fa fa-random"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="product-item-details">
                    <div class="item-title"> <a href="#">Denim Slim Ladis Cloth</a> </div>
                    <div class="price-box"> 
                      <span class="price">$46.00</span>
                      <div class="item-rating">
                        <div title="85%" class="rating-result"> <span style="width:85%"></span> </div>
                      </div> 
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-xs-6 plr-20">
                <div class="product-item">
                  <div class="product-image"> 
                  <a href="product-page.html"> <img src="{{asset('/')}}frontend/images/products/item-6.jpg" alt=""> </a>
                    <div class="product-detail-inner">
                      <div class="item-overlay">
                        <ul>
                          <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a href="#" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                          <li><a href="#" title="Compare"><i class="fa fa-random"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="product-item-details">
                    <div class="item-title"> <a href="#">American Ladis Cloth</a> </div>
                    <div class="price-box"> 
                      <span class="price">$80.00</span> 
                      <div class="item-rating">
                        <div title="60%" class="rating-result"> <span style="width:60%"></span> </div>
                      </div>
                   </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-xs-12">
                <div class="pagination-bar">
                  <ul>
                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CONTAINER END --> 
@endsection

  
