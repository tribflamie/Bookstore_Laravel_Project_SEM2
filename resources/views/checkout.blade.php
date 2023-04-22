@extends('layouts.layout-no-banner')
@section('title', 'Cart - The best-selling individual books')
@section('content')
    <!--=== Products Start ======-->
    <section>
    <?php $subTotal=0;?>
    @if (session('cart'))
    @foreach (session('cart') as $id => $details)
        <?php $subTotal += $details['price'] * (1 - $details['discount']) * $details['quantity']; ?>
    @endforeach
    @endif
        <div class="container">
            <div class="row">
            <div class="col-sm-20 col-md-offset-0 col-md-12" style="padding-top: 20px">
                        <form name="checkout" class="contact-me" action="/orderControl" onsubmit="return validateForm()"
                            method="GET">
                            <?php
                            $user = session('user');
                            $cart = session('cart');
                            $discount = session('couponValue');
                            $total = $subTotal * (1 - $discount);
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
                                <h3>Phone (Required)</h3>
                                <p style="color:red" id="textP"></p>
                                <?php if($user->phone!=null):?>
                                <input class="form-control" type="text" value="{{ $user->phone }}" name="getPhone"
                                    readonly />
                                <div class="help-block with-errors mt-20"></div>
                                <?php else:?>
                                <input class="form-control" type="text" name="getPhone" />
                                <?php endif;?>
                            </div>
                            <div class="form-group">
                                <h3>Address (Required)</h3>
                                <p style="color:red" id="textA"></p>
                                <?php if($user->location!=null):?>
                                <input class="form-control" type="text" value="{{ $user->location }}" name="getAddress"
                                    readonly />
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
                                        <td rowspan="2"><img src="{{ asset('/images/shop/' . $item['photo']) }}"
                                                class="cart-thumb" alt="" /></td>
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
    </section>

    <!--=== Products End ======-->
@endsection

@section('scripts')
    <script type="text/javascript">
        function validateForm() {
            let textPhone = "";
            textAddress = "";
            let x = document.forms["checkout"]["getPhone"].value;
            let y = document.forms["checkout"]["getAddress"].value;
            let filter = /^(84|0[3|5|7|8|9])+([0-9]{8})$/;
            if (!x.match(filter)) {
                textPhone = "Invalid phone number";
            }
            if (x == "") {
                textPhone = "Phone must be filled out";
            }
            if (y == "") {
                textAddress = "Address must be filled out";
            }
            if (textPhone == "" && textAddress == "") return true;
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
