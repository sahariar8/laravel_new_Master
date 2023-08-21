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

@section('contact')
    
  
  <!-- CONTAIN START -->
  <section class="pt-60">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="map">
            <div class="map-part">
              <div id="map" class="map-inner-part"></div>
            <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyC_G1wZMKrwyHHOteMdVwCy82Qm4Pp7vyI&amp;callback=initMap"></script> 
            <script type="text/javascript">
                // When the window has finished loading create our google map below
                google.maps.event.addDomListener(window, 'load', init);
            
                function init() {
                  // Basic options for a simple Google Map
                  // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                  
                  var mapOptions = {
                      // How zoomed in you want the map to start at (always required)
                      zoom: 14,
                      scrollwheel:false,

                      // The latitude and longitude to center the map (always required)
                      center: new google.maps.LatLng(35.868408, -92.117652), // New York
                      
                      // How you would like to style the map. 
                      // This is where you would paste any style found on Snazzy Maps.
                      styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#666666"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#666666"},{"lightness":100},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
                  };

                  // Get the HTML DOM element that will contain your map 
                  // We are using a div with id="map" seen below in the <body>
                  var mapElement = document.getElementById('map');

                  // Create the Google Map using our element and options defined above
                  var map = new google.maps.Map(mapElement, mapOptions);

                  // Let's also add a marker while we're at it
                
                  var marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(35.868408, -92.117652)});infowindow = new google.maps.InfoWindow({content:"<b>Themespry Web Services</b><br/> Your Best Choice" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
              </script> 
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="pt-60 align-center">
    <div class="container">
      <div class="contact-info">
        <div class="row m-0">
          <div class="col-sm-4 p-0">
            <div class="contact-box">
              <i class="fa fa-phone"></i>
              <span><b>Tel</b></span>
              <p>223 366 554</p>
            </div>
          </div>
          <div class="col-sm-4 p-0">
            <div class="contact-box">
              <i class="fa fa-envelope"></i>
              <span><b>Mail</b></span>
              <p>info@expent.info</p>
            </div>
          </div>
          <div class="col-sm-4 p-0">
            <div class="contact-box">
              <i class="fa fa-home"></i>
              <span><b>Open</b></span>
              <p>Mon – Sat: 9:00 – 18:00</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ptb-60">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="heading-part mb-20">
            <h2 class="main_title">Leave a message!</h2>
          </div>
        </div>
      </div>
      <div class="main-form">
        <div class="row">
          <form action="#" method="POST" name="contactform">
            <div class="col-sm-4 mb-30">
              <input type="text" required placeholder="Name" name="name">
            </div>
            <div class="col-sm-4 mb-30">
              <input type="email" required placeholder="Email" name="email">
            </div>
            <div class="col-sm-4 mb-30">
              <input type="text" required placeholder="Website" name="website">
            </div>
            <div class="col-xs-12 mb-30">
              <textarea required placeholder="Message" rows="3" cols="30" name="message"></textarea>
            </div>
            <div class="col-xs-12">
              <div class="align-center">
                <button type="submit" name="submit" class="btn-color">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- CONTAINER END --> 
@endsection