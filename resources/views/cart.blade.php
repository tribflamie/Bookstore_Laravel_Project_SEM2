@extends('layouts.cart-layout')
@section('title', 'Cart - The best-selling individual books')
@section('content')
    <!--=== Products Start ======-->
    <section>
    <div id="modalOne" class="modal form-login">
      <div class="modal-content">
        <div class="contact-form">
          <a class="close">&times;</a>
          <form action="/orderControl">
            <h2>Confirm your purchase</h2>
            <div>
              <input class="fname" type="text" name="name" placeholder="Full name" />
              <input type="text" name="name" placeholder="Email" />
              <input type="text" name="name" placeholder="Phone number" />
              <input type="text" name="name" placeholder="Website" />
            </div>
            <span>Message</span>
            <div>
              <textarea rows="4"></textarea>
            </div>
            <button type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered shop-cart">
                            <thead>
                                <tr>
                                    <th>&nbsp;</th>
                                    <th>Item</th>
                                    <th>Book</th>
                                    <th>Author</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $total = 0; ?>
                                @if (session('cart'))
                                    @foreach (session('cart') as $id => $details)
                                        <?php $total += $details['price']*(1-$details['discount']) * $details['quantity']; ?>
                                        <tr data-id="{{ $id }}" class="cart_item">
                                            <td><a class="remove-from-cart"><i class="icofont-close-circled"></i></a>
                                            </td>
                                            <td><a href="#"> <img src="{{ asset($details['photo']) }}" alt="">
                                                </a> </td>
                                            <td><a href="#">{{ $details['name'] }}</a> </td>
                                            <td><a href="#">{{ $details['author'] }}</a> </td>
                                            <td><span>${{ $details['price']*(1-$details['discount']) }}</span> </td>
                                            <td data-th="Quantity"><input class="form-control quantity update-cart"
                                                    type="number" step="1" min="0"
                                                    value="{{ $details['quantity'] }}" title="Qty" placeholder="Qty">
                                            </td>
                                            <td data-th="Subtotal" class="product-subtotal">
                                                <span>${{ $details['price']*(1-$details['discount']) * $details['quantity'] }}</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="payment-box">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="summary-cart">
                                            <h6 class="upper-case">Order Details</h6>
                                            <table class="order_table table-responsive table">
                                                <tbody>
                                                    <tr>
                                                        <th>Subtotal</th>
                                                        <td><span>${{ $total }}</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Total</th>
                                                        <td>
                                                            <h6><strong>$59.99</strong></h6>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="check-btns">
                                                <button class="btn btn-green btn-animate" type="button"><span>Continue
                                                        Shopping
                                                        <i class="icofont icofont-refresh"></i></span></button>
                                                <button class="btn btn-color btn-animate button" data-modal="modalOne"><span>
                                                        Checkout <i class="icofont icofont-check"></i></span></button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-coupon">
                                            <h6 class="upper-case">Have a Coupon?</h6>
                                            <div class="input-group">
                                                <input class="form-control" type="text" placeholder="Coupon code">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-color btn-animate" type="button"><span>Apply
                                                            Coupon <i class="icofont icofont-check"></i></span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-md-3 col-sm-6">
                    <div class="product">
                        <div class="product-wrap"> <img src="{{ asset('images/shop/product-01.jpg') }}"
                                class="img-responsive" alt="team-01">
                            <div class="product-caption">
                                <div class="product-description text-center">
                                    <div class="product-description-wrap">
                                        <div class="product-title"> <a href="#" class="btn btn-color btn-circle">ADD
                                                TO CART <span class="icon"><i class="mdi mdi-cart"></i></span></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail">
                            <h4>Jet Black/White Sports Trim</h4>
                            <p>$85.99 <span class="old-price">$104.99</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=== Products End ======-->
@endsection

@section('scripts')
    <script type="text/javascript">
        let modalBtns = [...document.querySelectorAll(".button")];
      modalBtns.forEach(function (btn) {
        btn.onclick = function () {
          let modal = btn.getAttribute("data-modal");
          document.getElementById(modal).style.display = "block";
        };
      });
      let closeBtns = [...document.querySelectorAll(".close")];
      closeBtns.forEach(function (btn) {
        btn.onclick = function () {
          let modal = btn.closest(".modal");
          modal.style.display = "none";
        };
      });
      window.onclick = function (event) {
        if (event.target.className === "modal") {
          event.target.style.display = "none";
        }
      };
        
        $(".update-cart").change(function(e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '{{ route('update.cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        });

        $(".remove-from-cart").click(function(e) {
            e.preventDefault();

            var ele = $(this);

            if (confirm("Are you sure want to remove?")) {
                $.ajax({
                    url: '{{ route('remove.from.cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
@endsection
