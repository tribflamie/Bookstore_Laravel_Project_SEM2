@extends('layouts.layout-banner')
@section('title', 'FAQS - The best selling individual books')
@section('content')
    <!--=== page-title-section start ===-->
    <section class="title-hero-bg shop-cover-bg" data-stellar-background-ratio="0.2">
        <div class="container">
            <div class="page-title text-center">
                <h1>faqs</h1>
            </div>
        </div>
    </section>
    <!--=== page-title-section end ===-->

    <!--=== Accordions Start ======-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="panel-group accordion-color" id="accordion-color">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-color"
                                        data-target="#collapseOne">Can I partner or advertise with Papyrus.com?</a> </h3>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body"> Absolutely. We offer a range of advertising and partnership
                                    opportunities.
                                    For partnerships and promotions, contact papyrus-promotions@gmail.com.
                                    For website and email advertising, contact papyrus-ads@gmail.com </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                        data-parent="#accordion-color" data-target="#collapseFour">How do I report a problem
                                        with the website or my order?</a> </h3>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body"> <a href="{{ route('contact-us') }}">Contact Us</a> </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                        data-parent="#accordion-color" data-target="#collapseFifth"> How do I return an
                                        order if I receive a book that I don't want? </a> </h3>
                            </div>
                            <div id="collapseFifth" class="panel-collapse collapse">
                                <div class="panel-body"> You may return an unwanted item within 14 days of the delivery date
                                    for a full refund of the cost of the books returned including initial shipping costs. To
                                    ensure your package is returned correctly, please return the package to the address
                                    indicated below and display the order number prominently on the packaging. Return
                                    postage is to be covered by the sender. </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                        data-parent="#accordion-color" data-target="#collapseSixth"> How does Papyrus.com
                                        target online customers? </a> </h3>
                            </div>
                            <div id="collapseSixth" class="panel-collapse collapse">
                                <div class="panel-body"> Papyrus.com is designed to generate affiliate revenue. Our network
                                    of publishers, authors, bookstagrammers, celebrity book clubs, and other media sites
                                    reaches socially-conscious online consumers who are not yet buying their books online
                                    through an independent bookstore.Papyrus.com's interface and purchase process is
                                    designed to be as convenient, streamlined, and user-friendly as possible, for an
                                    alternative that is just as easy as our competitors.78% of our customers previously were
                                    Amazon customers, according to our customer survey. </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="banner-box mt-30">
                        <div class="red-overlay-bg"></div>
                        <div class="relative white-color text-center">
                            <h4 class="text-uppercase">We're Here to Help!</h4>
                            <p>We're friendly and available to chat. Reach out to us anytime and we'll happily answer your
                                questions.</p>
                            <a href="{{ route('contact-us') }}" class="btn btn-outline-white btn-square mt-10">Contact
                                Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=== Accordions End ======-->

@endsection
<!--=== Testimonails End ===-->
