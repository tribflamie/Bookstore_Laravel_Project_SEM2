<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Feedback;
use App\Models\Reply;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class visitorController extends Controller
{
    /*Global variables
    $products = Product::all();
    $category = Category::all();
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $feedbacks = Feedback::all();
        $user = Auth::getUser();
        session()->put('user', $user);
        // $topRating = Product::select('products.id', 'products.name', 'products.author', 'products.photo', 'products.price','products.discount', DB::raw("AVG(feedbacks.rating) AS ratings"))
        //     ->join('feedbacks', 'products.id', '=', 'feedbacks.products_id')
        //     ->orderByRaw('AVG(feedbacks.rating) desc')
        //     ->groupBy('products.id', 'products.name', 'products.author', 'products.photo', 'products.price','products.discount')
        //     ->take(10)
        //     ->get();
        $topDiscount = Product::where('status', '=', 'show')->orderBy('discount', 'desc')->get();
        $topSelling = Product::select('products.id', 'products.name', 'products.author', 'products.photo', 'products.price', 'products.discount')
            ->join('order_details', 'products.id', '=', 'order_details.products_id')
            ->join('orders', 'order_details.orders_id', '=', 'orders.id')
            ->where('orders.status', '!=', 'cancelled')
            ->where('products.status', '=', 'show')
            ->orderByRaw('SUM(order_details.unit_quantity) desc')
            ->groupBy('products.id', 'products.name', 'products.author', 'products.photo', 'products.price', 'products.discount')
            ->take(8)
            ->get();
        $topRating = Product::join(DB::raw('(SELECT products_id, AVG(rating) avg_rating FROM `feedbacks` GROUP BY products_id) r'), function ($join) {
            $join->on('products.id', '=', 'r.products_id');
        })->orderBy('r.avg_rating', 'DESC')->take(9)->get();
        $topNewest = product::where('status', '=', 'show')->orderBy('id', 'desc')->take(8)->get();
        return view('home', compact('feedbacks', 'topDiscount', 'topRating', 'topNewest', 'topSelling'));
    }

    public function products(Request $request)
    {
        $countries = Product::select('country')->distinct()->orderBy('country', 'ASC')->get();
        $years = Product::select('published')->distinct()->orderBy('published', 'DESC')->get();
        $topDiscount = Product::where('status', '=', 'show')->orderBy('discount', 'desc')->take(5)->get();
        $topSelling = Product::select('products.id', 'products.name', 'products.author', 'products.photo', 'products.price', 'products.discount')
            ->join('order_details', 'products.id', '=', 'order_details.products_id')
            ->join('orders', 'order_details.orders_id', '=', 'orders.id')
            ->where('orders.status', '!=', 'cancelled')
            ->where('products.status', '=', 'show')
            ->orderByRaw('SUM(order_details.unit_quantity) desc')
            ->groupBy('products.id', 'products.name', 'products.author', 'products.photo', 'products.price', 'products.discount')
            ->take(5)
            ->get();
        $filter = Product::where('status', '=', 'show')->when($request->input('categories') != null, function ($object) use ($request) {
            return $object->where('categories_id', $request->input('categories'));
        })->when($request->input('countries') != null, function ($object) use ($request) {
            return $object->where('country', $request->input('countries'));
        })->when($request->input('published') != null, function ($object) use ($request) {
            return $object->where('published', $request->input('published'));
        })->when($request->input('search') != null, function ($object) use ($request) {
            return $object->where('name', 'LIKE', "%" . $request->input('search') . "%")
                ->orWhere('author', 'LIKE', "%" . $request->input('search') . "%");
        })->when($request->input('sort') != null, function ($object) use ($request) {
            if ($request->input('sort') == 'lastest') return $object->orderBy('created_at', 'DESC');
            if ($request->input('sort') == 'oldest') return $object->orderBy('created_at', 'ASC');
            if ($request->input('sort') == 'a-z') return $object->orderBy('name', 'ASC');
            if ($request->input('sort') == 'z-a') return $object->orderBy('created_at', 'DESC');
            if ($request->input('sort') == 'highest') return $object->orderByRaw('discount*price DESC');
            if ($request->input('sort') == 'lowest') return $object->orderByRaw('discount*price ASC');
        })->when($request->input('rating') != null, function ($object) use ($request) {
            if ($request->input('rating') == '5') return $object->join(DB::raw('(SELECT products_id, AVG(rating) avg_rating FROM `feedbacks` GROUP BY products_id) r'), function ($join) {
                $join->on('products.id', '=', 'r.products_id');
            })->whereRaw('r.avg_rating > 4 AND r.avg_rating <= 5');
            if ($request->input('rating') == '4') return $object->join(DB::raw('(SELECT products_id, AVG(rating) avg_rating FROM `feedbacks` GROUP BY products_id) r'), function ($join) {
                $join->on('products.id', '=', 'r.products_id');
            })->whereRaw('r.avg_rating > 3 AND r.avg_rating <= 4');
            if ($request->input('rating') == '3') return $object->join(DB::raw('(SELECT products_id, AVG(rating) avg_rating FROM `feedbacks` GROUP BY products_id) r'), function ($join) {
                $join->on('products.id', '=', 'r.products_id');
            })->whereRaw('r.avg_rating > 2 AND r.avg_rating <= 3');
            if ($request->input('rating') == '2') return $object->join(DB::raw('(SELECT products_id, AVG(rating) avg_rating FROM `feedbacks` GROUP BY products_id) r'), function ($join) {
                $join->on('products.id', '=', 'r.products_id');
            })->whereRaw('r.avg_rating > 1 AND r.avg_rating <= 2');
            if ($request->input('rating') == '1') return $object->join(DB::raw('(SELECT products_id, AVG(rating) avg_rating FROM `feedbacks` GROUP BY products_id) r'), function ($join) {
                $join->on('products.id', '=', 'r.products_id');
            })->whereRaw('r.avg_rating > 0 AND r.avg_rating <= 1');
        })->paginate(6);
        return view('products', compact('filter', 'countries', 'years', 'topDiscount', 'topSelling'));
    }

    //show product details, feedbacks and replies on product-detail
    public function productDetail($id)
    {
        $product = Product::find($id);
        $feedbacks = Feedback::where('status', '=', 'show')->get();
        $replies = Reply::where('status', '=', 'show')->get();
        $lastest = Feedback::where('status', '=', 'show')->orderBy('created_at', 'DESC')->get();
        $topNewest = Product::where('products.categories_id', $product->categories_id)->take(4)->get();
        return view('product-detail', compact('product', 'feedbacks', 'replies', 'lastest', 'topNewest'));
    }
    //insert and store in DATABASE
    public function storeReplies($id, Request $request)
    {
        $replies = new Reply;
        /* Store $replies in DATABASE */
        $replies->feedbacks_id = $id;
        $replies->users_id = Auth::user()->id;
        $replies->description = $request->input('reply');
        $replies->save();
        return redirect()->back();
    }

    //show edit-profile
    public function editProfile()
    {
        $data = User::find(Auth::user()->id);
        return view('edit-profile', compact('data'));
    }

    //insert and store Profile in DATABASE
    public function updateProfile(Request $request)
    {
        $data = User::find(Auth::user()->id);

        /* Store $data in DATABASE*/
        $data->name = $request->input('username');
        $data->gender = $request->input('gender');
        $data->yob = $request->input('yob');
        $data->phone = $request->input('phone');
        $data->location = $request->input('location');
        $data->bio = $request->input('bio');
        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('images/team/'), $filename);
            $data->photo = $filename;
        }
        $data->save();
        return redirect()->back()->with('message', 'Profile updated successfully!');
    }

    public function changePassword(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'current_password' => 'required',
                'new_password' => 'required|string|min:6|same:confirm_password',
                'confirm_password' => 'required'
            ]
        );
        if ($validator->fails()) {
            return back()->with('message', 'Change password failed! Please try again.')->withInput()->withErrors($validator);
        }

        $user = User::find(Auth::user()->id);

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('message', 'Current password does not match!');
        }

        $user->password = Hash::make($request->new_password);

        $user->save();

        return redirect()->back()->with('message', 'Password successfully changed!');
    }

    //cart add, update and remove
    public function cart()
    {
        //$user=User::find($id)
        //session()->put('user',$user)
        return view('cart')->with('coupon', "");
    }

    /**
     * Write code on Methods
     *
     * @return response()
     */
    public function addToCart($id)
    {
        $product = Product::find($id);
        if (!$product) {
            abort(404);
        }
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if ($cart == null) {
            session()->put('cart', []);
            $cart = [
                $id => [
                    "id" => $product->id,
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "discount" => $product->discount,
                    "author" => $product->author,
                    "photo" => $product->photo
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "id" => $product->id,
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "discount" => $product->discount,
            "author" => $product->author,
            "photo" => $product->photo
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
    public function orderControl(Request $request)
    {
        $user = Auth::getUser();
        if ($user->phone == null) {
            $user->phone = $request->input('getPhone');
            session()->put('user', $user);
            DB::table('users')
                ->where('id', $user->id)  // find coupon code
                ->limit(1)  // optional - to ensure only one record is updated.
                ->update(array('phone' => $user->phone, 'updated_at' => now()));  // update the record in the DB. 
        }
        if ($user->location == null) {
            $user->location = $request->input('getAddress');
            session()->put('user', $user);
            DB::table('users')
                ->where('id', $user->id)  // find coupon code
                ->limit(1)  // optional - to ensure only one record is updated.
                ->update(array('location' => $user->location, 'updated_at' => now()));  // update the record in the DB. 
        }
        $cart = session()->get('cart');

        if ($cart) :
            $id = Auth::id();
            $query = "insert into orders (users_id,status) values ({$id},'Pending')";
            DB::insert($query);
            $rs = DB::select('select id from orders where id=(select max(id) from orders)');
            unset($details);
            //insert into orderDetails
            foreach ($cart as $id => $details) :
                $query2 = "insert into order_details (orders_id,products_id,unit_quantity,unit_sold_price) values ({$rs[0]->id},{$id},{$details['quantity']},{$details['price']}*(1-{$details['discount']}))";
                DB::insert($query2);
            endforeach;
            session()->put('cart', null);
        endif;
        $coupon = $request->input('coupon');
        DB::table('coupons')
            ->where('code', $coupon)  // find coupon code
            ->limit(1)  // optional - to ensure only one record is updated.
            ->update(array('status' => 'used', 'orders_id' => $rs[0]->id, 'updated_at' => now()));  // update the record in the DB. 
        return redirect('/home')->with('orderSuccess', 'Order confirmed, Please wait for us to check.');
    }
    public function checkCoupon(Request $request)
    {
        $coupon = $request->input('checkCoupon');
        $query = "select * from coupons where code='{$coupon}'";
        $rs = DB::select($query);
        if (!$rs) :
            return redirect('/cart')->with('msgFail', 'Coupon does not exists!');
        endif;
        if ($rs[0]->status == 'used'):
            return redirect('/cart')->with('msgFail', 'Coupon is used!');
        endif;
        if (strtotime(date("Y/m/d")) > strtotime($rs[0]->exp_date)) :
            return redirect('/cart')->with('msgFail', 'Coupon is expired!');
        endif;
        if ($rs) :
            session()->put('couponValue',$rs[0]->value);
            return redirect('/cart')->with('msgSuccess', 'Coupon is usable!')->with('coupon',$coupon);
        endif;
    }
    public function orderHistory(Request $request, $filter)
    {
        $userID = Auth::id();
        session()->put('orders', null);
        $sort = array("a", "a");
        if ($filter != "a") {
            $sort = explode('+', $filter, 2);
            $orders = DB::table('orders')->where('users_id', $userID)->orderBy($sort[0], $sort[1])->simplePaginate(15);
        } else $orders = DB::table('orders')->where('users_id', $userID)->simplePaginate(15);
        return view('orderHistory')->with('filter', $filter)->with('orders', $orders);
    }
    public function orderDetail(Request $request, $id)
    {
        session()->put('orderDetails', null);
        $status = DB::table('orders')->select('status')->where('id', $id)->get();
        $orderDetail = DB::table('order_details')->where('orders_id', $id)->get();
        if ($orderDetail) session()->put('orderDetails', $orderDetail);
        return view('orderDetail')->with('status', $status);
    }
    public function orderCancel(Request $request, $id, $filter)
    {
        $userID = Auth::id();
        DB::table('orders')
            ->where('id', $id)  // find order
            ->limit(1)  // optional - to ensure only one record is updated.
            ->update(array('status' => 'Cancelled', 'updated_at' =>now()));  // update the record in the DB. 
        session()->put('orders', null);
        if ($filter != "a") {
            $sort = explode('+', $filter, 2);
            $orders = DB::table('orders')->where('users_id', $userID)->orderBy($sort[0], $sort[1])->get();
        } else $orders = DB::table('orders')->where('users_id', $userID)->get();
        return redirect("/orderHistory/$filter")->with('filter', $filter)->with('orders', $orders)->with('cancelSuccess',"Your order has been cancelled!");
    }
    public function reviewProduct(Request $request, $id)
    {
        $userID = Auth::id();
        $reviewedProduct = Product::find($id);
        session()->put('reviewedProduct', $reviewedProduct);
        return view('reviewProduct')->with('userID', $userID);
    }
    public function submitReview(Request $request)
    {
        $userID = $request->session()->get('userID');
        $productID = session()->get('reviewedProduct')->id;
        $content = $request->input('reviewContent');
        $rating = $request->input('reviewRating');
        DB::table('feedbacks')->insert([
            'users_id' => $userID,
            'products_id' => $productID,
            'rating' => $rating,
            'description' => $content
        ]);
        echo "<script>window.close();</script>";
    }
    public function aboutUs()
    {
        return view('about-us');
    }
    public function contactUs()
    {
        $user = User::find(Auth::user()->id);
        return view('contact-us', compact('user'));
    }
    public function sendContact(Request $request)
    {
        $contacts = new Contact;
        $contacts->name = $request->input('name');
        $contacts->email = $request->input('email');
        $contacts->phone = $request->input('phone');
        $contacts->message = $request->input('message');
        $contacts->save();
        $user = User::find(Auth::user()->id);
        $user->phone = $request->input('phone');
        $user->update();
        return redirect('home');
    }
    public function faqs()
    {
        return view('faqs');
    }
    public function term()
    {
        return view('term-condition');
    }
    public function privacy()
    {
        return view('privacy');
    }
    public function site()
    {
        $categories = category::all();
        return view('site-map', compact('categories'));
    }
}
