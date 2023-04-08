@extends('layouts.layout-banner')
@section('title', 'About us - The best selling individual books')
@section('content')
<!--=== page-title-section start ===-->
<section class="title-hero-bg shop-cover-bg" data-stellar-background-ratio="0.2">
    <div class="container">
      <div class="page-title text-center">
        <h1>Contact Us</h1>
      </div>
    </div>
  </section>
  <!--=== page-title-section end ===-->

  <!--=== Contact Us Start ======-->
  <section class="contact-us white-bg" id="contact">
    <div class="container">
      <div class="clearfix">
        <div class="bg-flex-right col-md-6 map-section">
          <div id="myMap"></div>
          <script>
            function myMap() {
            var mapProp= {
              center:new google.maps.LatLng(51.508742,-0.120850),
              zoom:5,
            };
            var map = new google.maps.Map(document.getElementById("myMap"),mapProp);
            }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJZbCNj8xRhzFSNeB8fxAAodEdN6CPhCY&callback=myMap"></script>
        </div>
        <div class="col-about-left col-md-6 text-left">
          <h2>Contact Us</h2>
          <h4 class="text-uppercase">Give us your opinion</h4>
          <form class="mt-50" name="contactForm" ng-submit="sendMess()" novalidate>
            <!--=== Your Name ===-->
            <div class="form-group">
              <input type="text" id="yourname" name="yourname" ng-required="true" ng-model="contact.name" class="form-control mb-20" placeholder="Your Name">
            </div>
            <!--=== Your Email ===-->
            <div class="form-group">
              <input type="email" id="email" name="email" ng-required="true" ng-model="contact.email" class="form-control mb-20" placeholder="Your Email">
            </div>
            <!--=== Your Phone ===-->
            <div class="form-group">
              <input type="phone" id="phone" name="phone" ng-required="true" ng-model="contact.phone" class="form-control mb-20" placeholder="Your Phone">
            </div>
            <!--=== Your Message ===-->
            <div class="form-group">
              <textarea id="message" name="message" ng-required="true" ng-model="contact.message" class="form-control" rows="7" placeholder="Please, Leave us a message"></textarea>
            </div>
            <!--=== Submit ===-->
            <button type="submit" name="submit" ng-disabled="contactForm.$invalid" class="btn btn-color btn-circle">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!--=== Contact Us End ======-->

  @endsection
  <!--=== Testimonails End ===-->
