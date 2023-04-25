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
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.9539103006864!2d106.69133627394542!3d10.814839158486253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528e962682287%3A0xb40b8ddfe7593e6!2zMjc1IE5ndXnhu4VuIFbEg24gxJDhuq11LCBQaMaw4budbmcgMTEsIELDrG5oIFRo4bqhbmgsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1682426735372!5m2!1svi!2s"
                    class="bg-flex-right col-md-6 map-section" height="100%" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="col-about-left col-md-6 text-left">
                    <h2>Contact Us</h2>
                    <h4 class="text-uppercase">Give us your opinion</h4>
                    <form class="mt-50" action="/send-contact" method="POST">
                        @csrf

                        <!--=== Your Name ===-->
                        <div class="form-group">
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control mb-20"
                                placeholder="Your Name" readonly>
                        </div>
                        <!--=== Your Email ===-->
                        <div class="form-group">
                            <input type="email" name="email" value="{{ $user->email }}" class="form-control mb-20"
                                placeholder="Your Email" readonly>
                        </div>
                        <!--=== Your Phone ===-->
                        <div class="form-group">
                            <input type="phone" name="phone" value="{{ $user->phone }}" class="form-control mb-20"
                                placeholder="Your Phone" required>
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
