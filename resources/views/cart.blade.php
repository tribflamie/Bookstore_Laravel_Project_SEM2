@extends('layouts.layout-no-banner')
@section('title', 'Cart - The best-selling individual books')
@section('content')
    <!--=== Products Start ======-->
    <section>
        <div class="container">
            @if (count($errors))
                <div class="form-group">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
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
                                <?php $subTotal = 0; ?>
                                @if (session('cart'))
                                    @foreach (session('cart') as $id => $details)
                                        <?php $subTotal += $details['price'] * (1 - $details['discount']) * $details['quantity']; ?>
                                        <tr data-id="{{ $id }}" class="cart_item">
                                            <td><a class="remove-from-cart"><i class="icofont-close-circled"></i></a>
                                            </td>
                                            <td><a href="#"> <img src="{{ asset($details['photo']) }}" alt="">
                                                </a> </td>
                                            <td><a href="#">{{ $details['name'] }}</a> </td>
                                            <td><a href="#">{{ $details['author'] }}</a> </td>
                                            <td><span>${{ $details['price'] * (1 - $details['discount']) }}</span> </td>
                                            <td data-th="Quantity"><input class="form-control quantity update-cart"
                                                    type="number" step="1" min="0"
                                                    value="{{ $details['quantity'] }}" title="Qty" placeholder="Qty">
                                            </td>
                                            <td data-th="Subtotal" class="product-subtotal">
                                                <span>${{ $details['price'] * (1 - $details['discount']) * $details['quantity'] }}</span>
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
                                                    <?php
                                                    $total = $subTotal;
                                                    $discount = 0;
                                                    $code = '';
                                                    if (session('msgSuccess')):
                                                        $discount = session('couponValue');
                                                        $total = $subTotal * (1 - $discount);
                                                        $code = session('coupon');
                                                    endif;
                                                    ?>
                                                    <tr>
                                                        <th>Subtotal</th>
                                                        <td><span>${{ $subTotal }}</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Current discount</th>
                                                        <td><span>{{ $discount * 100 }}% ({{ $code }})</span> </td>
                                                    </tr>

                                                    <tr>
                                                        <th>Total</th>
                                                        <td>
                                                            <h6><strong>${{ $total }}</strong></h6>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="check-btns">
                                                <a href="{{ route('home') }}"><button class="btn btn-green btn-animate"
                                                        type="button"><span>Continue
                                                            Shopping
                                                            <i class="icofont icofont-refresh"></i></span></button></a>
                                                <button class="btn btn-color btn-animate button"
                                                    data-modal="modalOne"><span>
                                                        Checkout <i class="icofont icofont-check"></i></span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="/checkCoupon">
                                        <div class="col-md-6">
                                            <div class="form-coupon">
                                                <h6 class="upper-case">Have a Coupon?</h6>
                                                <div class="input-group">
                                                    <input class="form-control" type="text" placeholder="Coupon code"
                                                        name='checkCoupon' autocomplete="off">
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-color btn-animate" type="submit"><span>Apply
                                                                Coupon <i class="icofont icofont-check"></i></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            @if (session('msgSuccess'))
                                                <div class="alert alert-success">
                                                    {{ session('msgSuccess') }}
                                                </div>
                                            @endif
                                            @if (session('msgFail'))
                                                <div class="alert alert-danger">
                                                    {{ session('msgFail') }}
                                                </div>
                                            @endif
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if (session('cart'))
            <div id="modalOne" class="modal form-login">
                <div class="row">
                    <div class="col-sm-12 col-md-offset-2 col-md-8" style="padding-top: 20px">
                        <form name="checkout" class="contact-me" action="/orderControl" onsubmit="return validateForm()" method="GET">
                            <?php
                            $user = session('user');
                            $cart = session('cart');
                            ?>
                            <div class="form-group">
                                <a class="close">&times;</a>
                                <h2>Confirm your purchase</h2>
                                <h3>Name</h3>
                                <input type="text" class="form-control" value="{{ $user->name }}" readonly />
                                <div class="help-block with-errors mt-20">
                                </div>
                            </div>
                            <div class="form-group">
                                <h3>Phone (Required)</h3><p style="color:red" id="textP"></p>
                                <?php if($user->phone!=null):?>
                                <input class="form-control" type="text" value="{{ $user->phone }}" name="getPhone" readonly />
                                <div class="help-block with-errors mt-20"></div>
                                <?php else:?>
                                <input class="form-control" type="text" name="getPhone" />
                                <?php endif;?>
                            </div>
                            <div class="form-group">
                                <h3>Address (Required)</h3><p style="color:red" id="textA"></p>
                                <?php if($user->location!=null):?>
                                <input class="form-control" type="text" value="{{ $user->location }}" name="getAddress" readonly />
                                <div class="help-block with-errors mt-20"></div>
                                <?php else:?>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="getAddress" />
                                <div class="help-block with-errors mt-20"></div>
                                <?php endif;?>
                            </div>
                            <h3 class="upper-case">Order summary:</h3>
                            <table class="table table-bordered shop-cart">

                                @foreach ($cart as $item)
                                    <tr>
                                        <td rowspan="2"><img src="{{ asset($item['photo']) }}" class="cart-thumb"
                                                alt="" /></td>
                                        <td>Name: {{ $item['name'] }} </td>
                                        <td rowspan="2">Quantity: {{ $item['quantity'] }}</td>
                                        <td rowspan="2">Unit price: {{ $item['price'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>Author: {{ $item['author'] }}</td>
                                    </tr>
                                @endforeach
                                <table class="table shop-cart" style="border=0px">
                                    <tr>
                                        <td>
                                            <h3>Total:</h3>
                                        </td>
                                        <td colspan="3"><span
                                                style="text-decoration: line-through;">${{ $subTotal }}</span>
                                            ({{ $discount * 100 }}% discount)<br><br><span
                                                style="color:red; font-weight:bold">
                                                ${{ $total }}</span></td>
                                    </tr>
                                </table>
                            </table>
                            <button type="submit" class="btn btn-color btn-block btn-animate">Order</button>
                        </form>
                    </div>
                </div>
            </div>
        @endif
        </div>
    </section>

    <!--=== Products End ======-->
@endsection

@section('scripts')
    <script type="text/javascript">
        let modalBtns = [...document.querySelectorAll(".button")];
        modalBtns.forEach(function(btn) {
            btn.onclick = function() {
                let modal = btn.getAttribute("data-modal");
                document.getElementById(modal).style.display = "block";
            };
        });
        let closeBtns = [...document.querySelectorAll(".close")];
        closeBtns.forEach(function(btn) {
            btn.onclick = function() {
                let modal = btn.closest(".modal");
                modal.style.display = "none";
            };
        });
        window.onclick = function(event) {
            if (event.target.className === "modal") {
                event.target.style.display = "none";
            }
        };
        function validateForm() {
        let textPhone="";textAddress="";
        let x = document.forms["checkout"]["getPhone"].value;
        let y = document.forms["checkout"]["getAddress"].value;
        let filter = /^(84|0[3|5|7|8|9])+([0-9]{8})$/;
        if (!x.match(filter)) {
            textPhone="Invalid phone number";
        }
        if (x == "") {
            textPhone="Phone must be filled out";
        }
        if (y == "") {
           textAddress ="Address must be filled out";
        }
        if(textPhone==""&&textAddress=="") return true;
        document.getElementById("textP").innerHTML = textPhone;
        document.getElementById("textA").innerHTML = textAddress;
        return false;
        }
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
