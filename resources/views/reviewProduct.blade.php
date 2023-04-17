@extends('layouts.layout-no-banner')
@section('title', 'Cart - The best-selling individual books')
@section('content')
    <!--=== Products Start ======-->
    <section>
        <div class="container">
        @if(count($errors))
            <div class="form-group">
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
        <h1 style="text-align:center">Product review</h1>
            <div class="row">
                <div class="col-md-12">
                    <form name="rating" action="/submitReview" onsubmit="return validateForm()">
                    <div class="table-responsive">
                        <table class="table table-bordered shop-cart">
                            <tbody>
                                <?php $product=session()->get('reviewedProduct');
                                        session()->put('userID',$userID);?>
                                <tr>
                                    <td><img src="{{ asset($product->photo) }}"></td>
                                    <td colspan="2">Name: {{$product->name}}<br>Author:{{$product->author}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Your rating:
                                    </td>
                                    <td name="rating">
                                    <p id="ratingCheck"></p>
                                    <input class="star star-5" id="star-5" type="radio" name="reviewRating" value="5"/>
                                    <label class="star star-5" for="star-5"></label>
                                    <input class="star star-4" id="star-4" type="radio" name="reviewRating" value="4"/>
                                    <label class="star star-4" for="star-4"></label>
                                    <input class="star star-3" id="star-3" type="radio" name="reviewRating" value="3"/>
                                    <label class="star star-3" for="star-3"></label>
                                    <input class="star star-2" id="star-2" type="radio" name="reviewRating" value="2"/>
                                    <label class="star star-2" for="star-2"></label>
                                    <input class="star star-1" id="star-1" type="radio" name="reviewRating" value="1"/>
                                    <label class="star star-1" for="star-1"></label>
                                    </td>
                                    <td style="width:300px; border-left:none"><span class="ratingTxt"></span></td>
                                </tr>
                                <tr>
                                    <td colspan="3">Your comment<br>
                                    <textarea rows="7" cols="100" id="content" name="reviewContent"></textarea>
                                </td>
                                </tr>
                                <tr><td colspan="3"><button type="submit">Post your review</button></td></tr>
                            </tbody>
                        </table>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
    
    <!--=== Products End ======-->
@endsection

@section('scripts')
    <script type="text/javascript">
        $( document ).ready(function() {
            var result="";
            $("input[name='reviewRating']").change(function(){
                if($("input[name='reviewRating']:checked").val()==5) result="Very satisfied";
                else if($("input[name='reviewRating']:checked").val()==4) result="Satisfied";
                else if($("input[name='reviewRating']:checked").val()==3) result="Neutral";
                else if($("input[name='reviewRating']:checked").val()==2) result="Disatisfied";
                else if($("input[name='reviewRating']:checked").val()==1) result="Very disatisfied";
            $(".ratingTxt").text(result);
            });
        });
        function trimfield(str) 
        { 
            return str.replace(/^\s+|\s+$/g,''); 
        }
        function validateForm() {
        let textRating="";
        let x=0;
        x = document.forms["rating"]["reviewRating"].value;
        var review = document.getElementById('content');
        if (x == 0) {
            textRating="Please rate the product!";
            document.getElementById("ratingCheck").innerHTML = textRating;
            return false;
        }
        return true;
        }
    </script>
@endsection
