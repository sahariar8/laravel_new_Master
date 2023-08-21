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

@section('singleblog')

<!-- CONTAIN START -->
<section class="ptb-60">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-sm-8 pb-xs-60">
          <div class="row">
            <div class="col-xs-12 mb-60">
              <div class="blog-media"> <img src="{{asset('/')}}frontend/images/blog/blog-large-2.jpg" alt="Xpent "> </div>
              <div class="blog-detail ">
                <div class="post-info">
                  <ul>
                    <li><span class="post-date">Dec, 12 2017</span></li>
                    <li><span>By</span><a href="#">  Cindy Jefferson</a></li>
                  </ul>
                </div>
                <h3>Aenean leo ligula, porttitor eu, consequat</h3>
                <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>

                <p>Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.</p>
                <hr>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <div class="comments-area-main gray-bg">
                <div class="comments-area">
                  <h4>Comments<span>(2)</span></h4>
                  <ul class="comment-list mt-30">
                    <li>
                      <div class="comment-user"> <img src="{{asset('/')}}frontend/images/comment-user.jpg" alt="Xpent "> </div>
                      <div class="comment-detail">
                        <div class="user-name">Max Well</div>
                        <div class="post-info">
                          <ul>
                            <li>Dec, 12 2017</li>
                            <li><a href="#">Reply</a></li>
                          </ul>
                        </div>
                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. </p>
                      </div>
                      <ul class="comment-list child-comment">
                        <li>
                          <div class="comment-user"> <img src="{{asset('/')}}frontend/images/comment-user.jpg" alt="Xpent "> </div>
                          <div class="comment-detail">
                            <div class="user-name">Max Well</div>
                            <div class="post-info">
                              <ul>
                                <li>Dec, 12 2017</li>
                                <li><a href="#">Reply</a></li>
                              </ul>
                            </div>
                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. </p>
                          </div>
                        </li>
                        <li>
                          <div class="comment-user"> <img src="{{asset('/')}}frontend/images/comment-user.jpg" alt="Xpent "> </div>
                          <div class="comment-detail">
                            <div class="user-name">Max Well</div>
                            <div class="post-info">
                              <ul>
                                <li>Dec, 12 2017</li>
                                <li><a href="#">Reply</a></li>
                              </ul>
                            </div>
                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. </p>
                          </div>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <div class="comment-user"> <img src="{{asset('/')}}frontend/images/comment-user.jpg" alt="Xpent "> </div>
                      <div class="comment-detail">
                        <div class="user-name">Max Well</div>
                        <div class="post-info">
                          <ul>
                            <li>Dec, 12 2017</li>
                            <li><a href="#">Reply</a></li>
                          </ul>
                        </div>
                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. </p>
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
                      <div class="col-xs-12">
                        <button class="btn-color" name="submit" type="submit">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-4">
          <div class="sidebar-block">
            <div class="sidebar-box mb-40">
              <form>
                <div class="search-box">
                  <input type="text" placeholder="Search entire store here..." class="input-text">
                  <button class="search-btn"><i class="fa fa-search"></i></button>
                </div>
              </form>
            </div>
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
            <div class="sidebar-box mb-40"> <span class="opener plus"></span>
              <div class="sidebar-title">
                <h3>Tags</h3>
              </div>
              <div class="sidebar-contant">
                <ul class="tagcloud">
                  <li><a href="#">Orange</a></li>
                  <li><a href="#">Neutral</a></li>
                  <li><a href="#">Print</a></li>
                  <li><a href="#">Tan</a></li>
                  <li><a href="#">Purple</a></li>
                  <li><a href="#">Yellow</a></li>
                  <li><a href="#">White</a></li>
                  <li><a href="#">Metallic</a></li>
                  <li><a href="#">Red</a></li>
                </ul>
              </div>
            </div>
            <div class="sidebar-box sidebar-item sidebar-item-wide"> <span class="opener plus"></span>
              <div class="sidebar-title">
                <h3>Recent Post</h3>
              </div>
              <div class="sidebar-contant">
                <ul>
                  <li>
                    <div class="pro-media"> <a><img alt="T-shirt" src="{{asset('/')}}frontend/images/blog/blog-large-1.jpg"></a> </div>
                    <div class="pro-detail-info"> <a>Slim Nice Skirt </a>
                      <div class="post-info">Dec, 12 2017</div>
                    </div>
                  </li>
                  <li>
                    <div class="pro-media"> <a><img alt="T-shirt" src="{{asset('/')}}frontend/images/blog/blog-large-2.jpg"></a> </div>
                    <div class="pro-detail-info"> <a>Slim Nice Skirt </a>
                      <div class="post-info">Dec, 12 2017</div>
                    </div>
                  </li>
                  <li>
                    <div class="pro-media"> <a><img alt="T-shirt" src="{{asset('/')}}frontend/images/blog/blog-large-3.jpg"></a> </div>
                    <div class="pro-detail-info"> <a>Slim Nice Skirt </a>
                      <div class="post-info">Dec, 12 2017</div>
                    </div>
                  </li>
                  <li>
                    <div class="pro-media"> <a><img alt="T-shirt" src="{{asset('/')}}frontend/images/blog/blog-large-4.jpg"></a> </div>
                    <div class="pro-detail-info"> <a>Slim Nice Skirt </a>
                      <div class="post-info">Dec, 12 2017</div>
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
  <!-- CONTAINER END --> 

@endsection