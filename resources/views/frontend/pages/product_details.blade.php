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

@section('pdetails')
<!-- CONTAIN START -->
<section class="pt-60">
    <div class="container">
      <div class="row">

        <div class="col-md-5 col-sm-5 mb-xs-30">
          <div class="fotorama" data-nav="thumbs" data-allowfullscreen="native"> 
            <a href="#"><img src="{{asset('/')}}frontend/images/products/item-large-1.jpg" alt="Xpent Super Shop "></a> 
            <a href="#"><img src="{{asset('/')}}frontend/images/products/item-large-2.jpg" alt="Xpent Super Shop "></a> 
            <a href="#"><img src="{{asset('/')}}frontend/images/products/item-large-3.jpg" alt="Xpent Super Shop "></a> 
            <a href="#"><img src="{{asset('/')}}frontend/images/products/item-large-4.jpg" alt="Xpent Super Shop "></a> 
            <a href="#"><img src="{{asset('/')}}frontend/images/products/item-large-5.jpg" alt="Xpent Super Shop "></a> 
            <a href="#"><img src="{{asset('/')}}frontend/images/products/item-large-6.jpg" alt="Xpent Super Shop "></a> 
            <a href="#"><img src="{{asset('/')}}frontend/images/products/item-large-7.jpg" alt="Xpent Super Shop "></a> 
            <a href="#"><img src="{{asset('/')}}frontend/images/products/item-large-8.jpg" alt="Xpent Super Shop "></a>  
          </div>
        </div>

        <div class="col-md-7 col-sm-7">
          <div class="row">
            <div class="col-xs-12">
              <div class="product-detail-main">
                <div class="product-item-details">
                  <h1 class="product-item-name">Denim Smart Ladis Jacket</h1>
                  <div class="rating-summary-block">
                    <div title="70%" class="rating-result"> <span style="width:70%"></span> </div>
                  </div>
                  <div class="price-box"> <span class="price">$260.00</span> <del class="price old-price">$240.00</del> </div>
                  <div class="product-info-stock-sku">
                    <div>
                      <label>Availability: </label>
                      <span class="info-deta">In stock</span> </div>
                    <div>
                      <label>SKU: </label>
                      <span class="info-deta">DSLQ69-18</span> </div>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias aperiam delectus nostrum voluptatem, assumenda ratione, eveniet rerum animi praesentium ipsa sint facere, distinctio porro iste at voluptas sequi repudiandae provident. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero consequuntur, accusamus quasi incidunt ipsa nihil molestias harum dignissimos.</p>
                  <div class="product-size select-arrow mb-20 mt-30">
                    <label>Size</label>
                    <select class="selectpicker form-control" id="select-by-size">
                      <option selected="selected" value="#">S</option>
                      <option value="#">M</option>
                      <option value="#">L</option>
                    </select>
                  </div>
                  <div class="product-color select-arrow mb-20">
                    <label>Color</label>
                    <select class="selectpicker form-control" id="select-by-color">
                      <option selected="selected" value="#">Blue</option>
                      <option value="#">Green</option>
                      <option value="#">Orange</option>
                      <option value="#">White</option>
                    </select>
                  </div>
                  <div class="mb-40">
                    <div class="product-qty">
                      <label for="qty">Qty:</label>
                      <div class="custom-qty">
                        <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) result.value--;return false;" class="reduced items" type="button"> <i class="fa fa-minus"></i> </button>
                        <input type="text" class="input-text qty" title="Qty" value="1" maxlength="8" id="qty" name="qty">
                        <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items" type="button"> <i class="fa fa-plus"></i> </button>
                      </div>
                    </div>
                    <div class="bottom-detail cart-button">
                      <ul>
                        <li><button title="Add to Cart" class="btn-black"><i class="fa fa-shopping-cart"></i><span></span>Add to Cart</button></li>
                      </ul>
                    </div>
                  </div>

                  <div class="bottom-detail">
                    <ul>
                      <li><a href="#"><i class="fa fa-heart-o"></i><span></span>Wishlist</a></li>
                      <li><a href="#"><i class="fa fa-random"></i><span></span>Compare</a></li>
                      <li><a href="#"><i class="fa fa-envelope-o"></i><span></span>Email to Friends</a></li>
                    </ul>
                  </div>

                  <div class="share-link">
                    <label>Share This : </label>
                    <div class="social-link">
                      <ul class="social-icon">
                        <li><a class="facebook" title="Facebook" href="#"><i class="fa fa-facebook"> </i></a></li>
                        <li><a class="twitter" title="Twitter" href="#"><i class="fa fa-twitter"> </i></a></li>
                        <li><a class="linkedin" title="Linkedin" href="#"><i class="fa fa-linkedin"> </i></a></li>
                        <li><a class="rss" title="RSS" href="#"><i class="fa fa-rss"> </i></a></li>
                        <li><a class="pinterest" title="Pinterest" href="#"><i class="fa fa-pinterest"> </i></a></li>
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
  </section>
@endsection

@section('description')
<section class="ptb-60 ptb-xs-30">
    <div class="container">
      <div class="product-detail-tab">
        <div class="row">
          <div class="col-md-12">
            <div id="tabs">
              <ul class="nav nav-tabs">
                <li><a class="tab-Description selected" title="Description">Description</a></li>
                <li><a class="tab-Product-Tags" title="Product-Tags">Product-Tags</a></li>
                <li><a class="tab-Reviews" title="Reviews">Reviews</a></li>
              </ul>
            </div>
            <div id="items">
              <div class="tab_content">
                <ul>
                  <li>
                    <div class="items-Description selected gray-bg">
                      <div class="Description"> <strong>The standard Lorem Ipsum passage, used since the 1500s</strong><br />
                        <p>Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy  took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets</p>
                        <p>Tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="items-Product-Tags gray-bg"><strong>Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</strong><br />
                      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur</div>
                  </li>
                  <li>
                    <div class="items-Reviews gray-bg">
                      <div class="comments-area">
                        <h4>Comments<span>(2)</span></h4>
                        <ul class="comment-list mt-30">
                          <li>
                            <div class="comment-user"> <img src="{{asset('/')}}frontend/images/comment-user.jpg" alt="Xpent "> </div>
                            <div class="comment-detail">
                              <div class="user-name">John Doe</div>
                              <div class="post-info">
                                <ul>
                                  <li>Fab 11, 2016</li>
                                  <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                </ul>
                              </div>
                              <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                            </div>
                            <ul class="comment-list child-comment">
                              <li>
                                <div class="comment-user"> <img src="{{asset('/')}}frontend/images/comment-user.jpg" alt="Xpent "> </div>
                                <div class="comment-detail">
                                  <div class="user-name">John Doe</div>
                                  <div class="post-info">
                                    <ul>
                                      <li>Fab 11, 2016</li>
                                      <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                    </ul>
                                  </div>
                                  <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                                </div>
                              </li>
                              <li>
                                <div class="comment-user"> <img src="{{asset('/')}}frontend/images/comment-user.jpg" alt="Xpent "> </div>
                                <div class="comment-detail">
                                  <div class="user-name">John Doe</div>
                                  <div class="post-info">
                                    <ul>
                                      <li>Fab 11, 2016</li>
                                      <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                    </ul>
                                  </div>
                                  <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                                </div>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <div class="comment-user"> <img src="{{asset('/')}}frontend/images/comment-user.jpg" alt="Xpent "> </div>
                            <div class="comment-detail">
                              <div class="user-name">John Doe</div>
                              <div class="post-info">
                                <ul>
                                  <li>Fab 11, 2016</li>
                                  <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                </ul>
                              </div>
                              <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="main-form mt-30">
                        <h4>Leave a comments</h4>
                        <div class="row mt-30">
                          <form >
                            <div class="col-sm-4 mb-30">
                              <input type="text" placeholder="Name" required>
                            </div>
                            <div class="col-sm-4 mb-30">
                              <input type="email" placeholder="Email" required>
                            </div>
                            <div class="col-sm-4 mb-30">
                              <input type="text" placeholder="Website" required>
                            </div>
                            <div class="col-xs-12 mb-30">
                              <textarea cols="30" rows="3" placeholder="Message" required></textarea>
                            </div>
                            <div class="col-xs-12 mb-30">
                              <button class="btn-black" name="submit" type="submit">Submit</button>
                            </div>
                          </form>
                        </div>
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
  </section>
@endsection

@section('related')

<section class="pb-60">
    <div class="container">
      <div class="product-slider">
        <div class="row">
          <div class="col-xs-12">
            <div class="heading-part mb-20">
              <h2 class="main_title">Related Products</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="product-slider-main position-r">
            <div class="owl-carousel pro_cat_slider">

              <div class="item">
                <div class="product-item">
                  <div class="sale-label"><span>Sale</span></div>
                  <div class="product-image"> <a href="#"> <img src="{{asset('/')}}frontend/images/products/item-6.jpg" alt="Xpent "> </a>
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

              <div class="item">
                <div class="product-item">
                  <div class="product-image"> <a href="#"> <img src="{{asset('/')}}frontend/images/products/item-7.jpg" alt="Xpent "> </a>
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

              <div class="item">
                <div class="product-item">
                  <div class="product-image"> <a href="#"> <img src="{{asset('/')}}frontend/images/products/item-8.jpg" alt="Xpent "> </a>
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

              <div class="item">
                <div class="product-item">
                  <div class="product-image"> <a href="#"> <img src="{{asset('/')}}frontend/images/products/item-9.jpg" alt="Xpent "> </a>
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

              <div class="item">
                <div class="product-item">
                  <div class="product-image"> <a href="#"> <img src="{{asset('/')}}frontend/images/products/item-10.jpg" alt="Xpent "> </a>
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

              <div class="item">
                <div class="product-item">
                  <div class="product-image"> <a href="#"> <img src="{{asset('/')}}frontend/images/products/item-11.jpg" alt="Xpent "> </a>
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

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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
