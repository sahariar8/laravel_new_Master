<!-- FOOTER START -->
<div class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="newsletter">
          <div class="newsletter-inner center-sm">
            <div class="row">
              <div class="col-md-4">
                <div class="newsletter-title">
                  <div class="newsletter-icon"><img src="{{asset('/')}}frontend/images/newsletter-icon.png" alt=" "></div>
                  <h2 class="main_title">Subscribe to our newsletter</h2>
                </div>
              </div>

              <div class="col-md-4">
                <input type="email" placeholder="Your email address">
                <button title="Subscribe"><i class="fa fa-paper-plane"></i> Subscribe</button> 
              </div>

              <div class="col-md-4">
                <div class="footer_social right-side float-none-sm pt-sm-15 pb-sm-15 center-sm mt-sm-15">
                  <ul class="social-icon">
                    <li><div class="title">Follow us on :</div></li>
                    <li><a title="Facebook" class="facebook"><i class="fa fa-facebook"> </i></a></li>
                    <li><a title="Twitter" class="twitter"><i class="fa fa-twitter"> </i></a></li>
                    <li><a title="Linkedin" class="linkedin"><i class="fa fa-linkedin"> </i></a></li>
                    <li><a title="RSS" class="rss"><i class="fa fa-rss"> </i></a></li>
                    <li><a title="Pinterest" class="pinterest"><i class="fa fa-pinterest"> </i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-middle">
      <div class="container">
        <div class="row">
          <div class="col-md-4 f-col">
           <div class="footer-static-block">
              <h3 class="title">About Us</h3>
              <p>Lorem khaled ipsum is a major key to success. It’s on you how you want to live your life. Everyone has a choice. I pick my choice, squeaky clean. Always remember in the jungle there’s a lot of they in there, after you overcome.</p>
            </div>
           </div>
          <div class="col-md-8">
          <div class="row">
            <div class="col-md-4 f-col">
             <div class="footer-static-block">
              <h3 class="title">Information</h3>
            <ul class="link">
              <li><a>About</a></li>
              <li><a>Contact Us</a></li>
              <li><a>Blog</a></li>
              <li><a>Affiliates</a></li>
              <li><a>Career</a></li>
              <li><a>FAQ?</a></li>
            </ul>
              </div>
            </div>

            <div class="col-md-4 f-col">
              <div class="footer-static-block">
                <h3 class="title">Customer care</h3>
                <ul class="link">
                  <li><a>My Account</a></li>
                  <li><a>Order Tracking</a></li>
                  <li><a>Wishlist</a></li>
                  <li><a>Support</a></li>
                  <li><a>Customer Services</a></li>
                  <li><a>Exchange</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4 f-col">
             <div class="footer-static-block">
                <h3 class="title">Address</h3>
                <ul class="address-footer">
                  <li class="item"> <i class="fa fa-home"> </i>
                    <p>1056 Arlington Avenue, Mountain View, Arkansas</p>
                  </li>
                  <li class="item"> <i class="fa fa-envelope-o"> </i>
                    <p> <a>info@expent.info</a> </p>
                  </li>
                  <li class="item"> <i class="fa fa-phone"> </i>
                    <a  href="tel:+223366554">+223366554</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="row"> 
          <div class="col-md-6 col-sm-6 center-sm">
            <div class="copy-right">© 2018  All Rights Reserved. Design By <a  href="http://themespry.com/">Themespry</a></div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="payment float-none-xs center-sm">
              <img src="{{asset('/')}}frontend/images/payment-method.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="scroll-top">
    <div id="scrollup"></div>
  </div>
  <!-- FOOTER END --> 
  </div>

  <script src="{{asset('/')}}frontend/js/jquery-1.12.3.min.js"></script> 
  <script src="{{asset('/')}}frontend/js/bootstrap.min.js"></script> 
  <script src="{{asset('/')}}frontend/js/jquery-ui.min.js"></script> 
  <script src="{{asset('/')}}frontend/js/fotorama.js"></script> 
  <script src="{{asset('/')}}frontend/js/jquery.magnific-popup.js"></script> 
  <script src="{{asset('/')}}frontend/js/owl.carousel.min.js"></script> 
  <script src="{{asset('/')}}frontend/js/custom.js"></script>

<script>
  /* ------------ Newslater-popup JS Start ------------- */
  $(window).load(function() {
    $.magnificPopup.open({
      items: {src: '#newslater-popup'},type: 'inline'}, 0);
  });
    /* ------------ Newslater-popup JS End ------------- */
</script>

</body>
</html>
