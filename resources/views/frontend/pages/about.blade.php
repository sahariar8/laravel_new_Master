
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

@section('aboutContent')
      <!-- CONTAIN START-->
  <section class="ptb-60">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="image-part"> <img alt="Xpent " src="{{asset('/')}}frontend/images/banner/about-banner.jpg"> </div>
        </div>
      </div>
      <div class="about-detail mt-40">
        <div class="row">
          <div class="col-sm-6 mb-xs-30">
            <div class="about-title">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently</div>
          </div>
          <div class="col-sm-6">
            <p>Oh, would I could describe these conceptions, could impress upon paper all that is living so full and warm within me, that it might be the mirror of my soul, as my soul is the mirror of the infinite God!</p>
            <p> I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense. </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ptb-60 align-center bg-gray">
    <div class="container">
      <div class="client-inner">
        <div class="heading-part mb-40">
          <h2 class="main_title">What Our Clients Say</h2>
        </div>
        <div id="client" class="owl-carousel">
          <div class="item client-detail">
            <div class="rating big">
              <div class="rating-result" title="60%"> <span style="width:60%"></span> </div>
            </div>
            <h4 class="sub-title client-title">Wed Censtoriya</h4>
            <p>make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was make a type specimen book. It has survived not only five centuries.</p>
          </div>
          <div class="item client-detail">
            <div class="rating big">
              <div class="rating-result" title="60%"> <span style="width:60%"></span> </div>
            </div>
            <h4 class="sub-title client-title">Wed Censtoriya</h4>
            <p>make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was make a type specimen book. It has survived not only five centuries.</p>
          </div>
          <div class="item client-detail">
            <div class="rating big">
              <div class="rating-result" title="60%"> <span style="width:60%"></span> </div>
            </div>
            <h4 class="sub-title client-title">Wed Censtoriya</h4>
            <p>make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was make a type specimen book. It has survived not only five centuries.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ptb-60">
    <div class="container">
      <div class="responsive-part">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="res-detail mb-sm-30">
              <div class="heading-part align_left center-md">
                <h2 class="heading">Nullam vel sollicitudin diam proin congue lacinia tortor vel vulputate morbi et mauris nec risus id at odio.</h2>
              </div>
              <p>Nullam vel sollicitudin diam proin congue lacinia tortor vel vulputate morbi et mauris nec risus feugiat malesuada id at odio nulla ornare scelerisque est, nec rutrum arcu elementu.</p>
              <p>Nullam vel sollicitudin diam proin congue lacinia tortor vel vulputate morbi et mauris nec risus feugiat malesuada id at odio nulla ornare scelerisque est, nec rutrum arcu elementu.</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="image-part"> <img alt="Xpent " src="{{asset('/')}}frontend/images/banner/about-thumb.jpg"> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CONTAINER END --> 
@endsection
  
  