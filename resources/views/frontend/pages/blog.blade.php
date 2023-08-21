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
  
  @section('blogContent')
        <!-- CONTAIN START -->
  <section class="ptb-60">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-sm-8 pb-xs-60">
          <div class="blog-listing">
            <div class="row">
              <div class="col-xs-12">
                <div class="blog-item">
                  <div class="blog-media"> 
                    <a href="single-blog.html" title="Click For Read More" class="read">
                      <img src="{{asset('/')}}frontend/images/blog/blog-large-1.jpg" alt="Xpent "> 
                    </a> 
                  </div>
                  <div class="blog-detail mt-30"> <span class="post-date">Dec, 12 2017</span>
                    <h3><a href="single-blog.html">Maecenas tempus, tellus eget condimentum</a></h3>                    
                    <p>Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.</p>
                    <hr>
                    <div class="post-info">
                      <ul>
                        <li><span>By</span><a href="#">  Cindy Jefferson</a></li>
                        <li><a href="#">(5) comments</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12">
                <div class="blog-item">
                  <div class="blog-media"> 
                    <a href="single-blog.html" title="Click For Read More" class="read">
                      <img src="{{asset('/')}}frontend/images/blog/blog-large-1.jpg" alt="Xpent "> 
                    </a> 
                  </div>

                  <div class="blog-detail mt-30"> <span class="post-date">Dec, 12 2017</span>
                    <h3><a href="single-blog.html">Maecenas tempus, tellus eget condimentum</a></h3>                    
                    <p>Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.</p>
                    <hr>
                    <div class="post-info">
                      <ul>
                        <li><span>By</span><a href="#">  Cindy Jefferson</a></li>
                        <li><a href="#">(5) comments</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12">
                <div class="blog-item">
                  <div class="blog-media"> 
                    <a href="single-blog.html" title="Click For Read More" class="read">
                      <img src="{{asset('/')}}frontend/images/blog/blog-large-1.jpg" alt="Xpent "> 
                    </a> 
                  </div>

                  <div class="blog-detail mt-30"> <span class="post-date">Dec, 12 2017</span>
                    <h3><a href="single-blog.html">Maecenas tempus, tellus eget condimentum</a></h3>                    
                    <p>Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.</p>
                    <hr>
                    <div class="post-info">
                      <ul>
                        <li><span>By</span><a href="#">  Cindy Jefferson</a></li>
                        <li><a href="#">(5) comments</a></li>
                      </ul>
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
                    <div class="pro-detail-info"> <a>Slim Nice Skirt</a>
                      <div class="post-info">Dec, 12 2017</div>
                    </div>
                  </li>
                  <li>
                    <div class="pro-media"> <a><img alt="T-shirt" src="{{asset('/')}}frontend/images/blog/blog-large-2.jpg"></a> </div>
                    <div class="pro-detail-info"> <a>Slim Nice Skirt</a>
                      <div class="post-info">Dec, 12 2017</div>
                    </div>
                  </li>
                  <li>
                    <div class="pro-media"> <a><img alt="T-shirt" src="{{asset('/')}}frontend/images/blog/blog-large-3.jpg"></a> </div>
                    <div class="pro-detail-info"> <a>Slim Nice Skirt</a>
                      <div class="post-info">Dec, 12 2017</div>
                    </div>
                  </li>
                  <li>
                    <div class="pro-media"> <a><img alt="T-shirt" src="{{asset('/')}}frontend/images/blog/blog-large-4.jpg"></a> </div>
                    <div class="pro-detail-info"> <a>Slim Nice Skirt</a>
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