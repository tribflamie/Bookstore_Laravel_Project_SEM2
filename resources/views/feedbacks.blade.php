@extends('layouts.home-layout')
@section('title', 'Cart - The best-selling individual books')
@section('content')
    <!--=== Products Start ======-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table id="datatables" class="table table-striped table-bordered table-sm shop-cart">
                            <thead>
                                <tr>
                                    <th class="th-sm">Account</th>
                                    <th class="th-sm">Rating</th>
                                    <th class="th-sm">Feedback</th>
                                    <th class="th-sm">Time</th>
                                    <th class="th-sm">Item</th>
                                    <th class="th-sm">Book</th>
                                    <th class="th-sm">Author</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($feedbacks as $feedback)
                                    <tr class="cart_item">
                                        <td><a href="#">{{ $name = Auth::user()->name }}</a></td>
                                        <td><a href="#" class="grey">
                                                {{-- <?php
                                                $count = 0;
                                                //xuất số sao vàng làm tròn trung bình rating trong bảng feedback
                                                for ($count = 1; $count <= $feedback->rating; $count++):
                                                    echo '<span class="fa fa-star checked"></span>';
                                                endfor;
                                                //xuất số sao đen còn lại
                                                for (; $count <= 5; $count++):
                                                    echo '<span class="fa fa-star"></span>';
                                                endfor;
                                                ?></a></td> --}}
                                                {{ $feedback->ratings }}</a></td>
                                        <td><a href="#">{{ $feedback->description }}</a></td>
                                        <td><a href="#">{{ $feedback->created_at }}</a></td>
                                        <td><a href="{{ route('productDetail', $feedback->id) }}"> <img
                                                    src="{{ asset($feedback->photo) }}" alt="">
                                            </a> </td>
                                        <td><a href="{{ route('productDetail', $feedback->id) }}">{{ $feedback->name }}</a>
                                        </td>
                                        <td><a
                                                href="{{ route('productDetail', $feedback->id) }}">{{ $feedback->author }}</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=== Products End ======-->
@endsection

@section('scripts')
    <script src="{{ asset('js/datatables.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatables').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });
    </script>
@endsection
