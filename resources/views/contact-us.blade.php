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
          <form class="mt-50" action="/send-contact" method="POST">
            @csrf

            <!--=== Your Name ===-->
            <div class="form-group">
              <input type="text" name="name" value="{{$user->name}}" class="form-control mb-20" placeholder="Your Name" readonly>
            </div>
            <!--=== Your Email ===-->
            <div class="form-group">
              <input type="email" name="email" value="{{$user->email}}" class="form-control mb-20" placeholder="Your Email" readonly>
            </div>
            <!--=== Your Phone ===-->
            <div class="form-group">
              <input type="phone" name="phone" value="{{$user->phone}}" class="form-control mb-20" placeholder="Your Phone" required>
            </div>
            <!--=== Your Message ===-->
            <div class="form-group">
              <textarea name="message" class="form-control" rows="7" placeholder="Please, Leave us a message" required></textarea>
            </div>
            <!--=== Submit ===-->
            <button type="submit" class="btn btn-color btn-circle">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!--=== Contact Us End ======-->

  @endsection
  <!--=== Testimonails End ===-->
