@extends('layouts.layout-banner')
@section('title', 'About us - The best selling individual books')
@section('content')
  <!--=== page-title-section start ===-->
  <section class="title-hero-bg shop-cover-bg" data-stellar-background-ratio="0.2">
    <div class="container">
      <div class="page-title text-center">
        <h1>About Us</h1>
      </div>
    </div>
  </section>
  <!--=== page-title-section end ===-->

   <!--=== Who We Are Start ===-->
   <section class="first-ico-box">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 section-heading">
          <h2 class="text-uppercase">Who We Are</h2>
          <h4 class="text-uppercase source-font">- Papyrus.com -</h4>
          <div class="mt-30">
            <p>Papyrus.com began as an idea to help support bookstores and their communities as more and more people are buying their books online. We saw an opportunity to create an alternative to Amazon for socially-conscious online shoppers. Amazon sells over 60% of all books in the US and is growing. That shift threatens the future of bookstores and will hurt readers, authors, and publishers who rely on a diverse, healthy ecosystem for books. We had a better idea — give readers the convenience of online shopping while supporting independent bookstores at the same time.</p>
          </div>
        </div>
      </div>
      <div class="row mt-50">
        <div class="col-md-4 feature-box text-center radius-icon wow fadeTop" data-wow-delay="0.1s"> <i class="icofont icofont-history font-50px dark-icon"></i>
          <h4 class="text-uppercase">History</h4>
          <p>We launched in January of 2020, with just 88 bookstore partners and a team of four passionate book people.
            As the COVID-19 pandemic surged, our growing platform helped our community of independent booksellers survive shutdowns. That spring, traffic to Bookshop.org hit 1 million users in a single day. By the end of 2020 we had grown to over 1,000 bookstores and distributed over ten million dollars in profits. Bookshop.org has since expanded internationally, launching in the UK and Spain.
            78% of our customers said they regularly bought books from Amazon before they made the switch.</p>
        </div>
        <div class="col-md-4 feature-box text-center radius-icon wow fadeTop" data-wow-delay="0.2s"> <i class="icofont icofont-users font-50px dark-icon"></i>
          <h4 class="text-uppercase">Our Mission</h4>
          <p>Our mission is simple: To help local, independent bookstores thrive in the age of ecommerce.
            Papyrus.com puts this mission and the public good above financial interests, giving over 80% of our profit margin to independent bookstores. In 2022, B-Labs announced we were "best for the world": in the top 5% of all B-Corps.
          </p>
        </div>
        <div class="col-md-4 feature-box text-center radius-icon wow fadeTop" data-wow-delay="0.3s"> <i class="icofont icofont-livejournal font-50px dark-icon"></i>
          <h4 class="text-uppercase">Our service</h4>
          <p>Papyrus.com works to connect readers with independent booksellers all over the world.
            ‍We believe local bookstores are essential community hubs that foster culture, curiosity, and a love of reading, and we're committed to helping them thrive.
            Every purchase on the site financially supports independent bookstores. Our platform gives independent bookstores tools to compete online and financial support to help them maintain their presence in local communities.</p>
        </div>
      </div>
    </div>
  </section>
  <!--=== Who We Are End ===-->

  <!--=== Our Service Start ======-->
  <section class="white-bg">
    <div class="col-md-6 col-sm-4 bg-flex bg-flex-right">
      <div class="bg-flex-holder bg-flex-cover" style="background-image: url(images/background/home-banner11.jpg);"></div>
    </div>
    <div class="container">
      <div class="col-md-5 col-sm-7">
        <h2 class="text-uppercase font-700">BOOKS</h2>
        <h4 class="mt-10 line-height-26 default-color">Papyrus.com</h4>
        <p class="mt-20">It is really hard to be lonely very long in a world of words. Even if you don't have friends somewhere, you still have language, and it will find you and wrap its little syllables around you and suddenly there will be a story to live in.</p>
        <p class="mt-30"><a href="{{ route('home') }}" class="btn btn-color btn-circle">Home Page</a></p>
      </div>
    </div>
  </section>
  <!--=== Our Service End ======-->

  <!--=== Our Team Start ======-->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-8 section-heading">
          <h2 class="text-uppercase font-700">Meet Our Team</h2>
          <h4 class="mt-10 line-height-26 text-uppercase">- We Are Stronger -</h4>
        </div>
      </div>
      <div class="row mt-51">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="team-member-container gallery-image-hover"> <img src="images/team/leader.jpg" class="img-responsive" alt="team-01">
            <div class="member-caption">
              <div class="member-description text-center">
                <div class="member-description-wrap">
                  <h4 class="member-title">Nguyen Ngoc Bao Duy</h4>
                  <p class="member-subtitle">Co-founder</p>
                  <ul class="member-icons">
                    <li class="social-icon"><a href="#"><i class="icofont icofont-facebook"></i></a></li>
                    <li class="social-icon"><a href="#"><i class="icofont icofont-twitter"></i></a></li>
                    <li class="social-icon"><a href="#"><i class="fa fa-youtube"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--=== Member End ===-->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="team-member-container gallery-image-hover"> <img src="images/team/member-02.jpg" class="img-responsive" alt="team-02">
            <div class="member-caption">
              <div class="member-description text-center">
                <div class="member-description-wrap">
                  <h4 class="member-title">Bui Nguyen Hai Tri</h4>
                  <p class="member-subtitle">Co-founder</p>
                  <ul class="member-icons">
                    <li class="social-icon"><a href="#"><i class="icofont icofont-facebook"></i></a></li>
                    <li class="social-icon"><a href="#"><i class="icofont icofont-twitter"></i></a></li>
                    <li class="social-icon"><a href="#"><i class="fa fa-youtube"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--=== Member End ===-->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="team-member-container gallery-image-hover"> <img src="images/team/member-03.jpg" class="img-responsive" alt="team-03">
            <div class="member-caption">
              <div class="member-description text-center">
                <div class="member-description-wrap">
                  <h4 class="member-title">Trinh Hoang Phuoc Sang</h4>
                  <p class="member-subtitle">Co-founder</p>
                  <ul class="member-icons">
                    <li class="social-icon"><a><i class="icofont icofont-facebook"></i></a></li>
                    <li class="social-icon"><a><i class="icofont icofont-twitter"></i></a></li>
                    <li class="social-icon"><a><i class="fa fa-youtube"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--=== Member End ===-->
      </div>
    </div>
  </section>
  <!--=== Our Team End ======-->

  <!--=== Testimonails Start ===-->
  <section class="parallax-bg-18 fixed-bg" data-stellar-background-ratio="0.2">
    <div class="overlay-bg"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-8 section-heading white-color">
          <h2 class="wow fadeTop" data-wow-delay="0.1s">Regular Customers</h2>
          <h4 class="text-uppercase wow fadeTop" data-wow-delay="0.2s">- Happy Shopping -</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          
            <!--=== Slide ===-->
            <div class="testimonial-item">
              <div class="testimonial-content"> <img class="img-responsive" src="images/team/teacher.jpg" alt="avatar-1"/>
                <h5>Le Thanh Nhan</h5>
                <p>FPT Aptech's Teacher</p>
              </div>
            </div>
          
        </div>
      </div>
    </div>
  </section>
  @endsection
  <!--=== Testimonails End ===-->
