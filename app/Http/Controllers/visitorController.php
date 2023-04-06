<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Feedback;
use App\Models\Reply;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class visitorController extends Controller
{
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
        $topDiscount = Product::orderBy('discount','desc')->get();
        $topRating = Product::select('products.id', 'products.name', 'products.author', 'products.photo', 'products.price','products.discount', DB::raw("AVG(feedbacks.rating) AS ratings"))
            ->join('feedbacks', 'products.id', '=', 'feedbacks.products_id')
            ->orderByRaw('AVG(feedbacks.rating) desc')
            ->groupBy('products.id', 'products.name', 'products.author', 'products.photo', 'products.price','products.discount')
            ->take(10)
            ->get();
        $topNewest = product::orderBy('created_at', 'desc')->take(8)->get();
        $categories = Category::all();
        $products = Product::all();
        $feedbacks = Feedback::all();
        if(Auth::check()):
            $user=Auth::getUser();
            session()->put('user',$user);
            endif;
            return view('home', compact('products', 'categories', 'feedbacks','topDiscount','topRating','topNewest'));
    }
    
    public function filter(Request $request,$search){
        // //Get the search value from the request
        // $search = $request->input('search');
        // //Search in the title and body columns from the posts table
        // $products = Product::query()
        //     ->where('name', 'LIKE', "%{$search}%")
        //     ->orWhere('author', 'LIKE', "%{$search}%")
        //     ->paginate(8);
        // // Return the search view with the resluts compacted
        $categories = category::all();
        if ($request->has('sorter')){
            switch($request->get('sorter')){
                case 'date_asc':
                    $products = Product::query()
                    ->where('name', 'LIKE', "%{$search}%")
                    ->orWhere('author', 'LIKE', "%{$search}%")
                    ->orderBy('created_at', 'asc')
                    ->paginate(8);
                    break;
                case 'date_desc':
                    $products = Product::query()
                    ->where('name', 'LIKE', "%{$search}%")
                    ->orWhere('author', 'LIKE', "%{$search}%")
                    ->orderBy('created_at', 'desc')
                    ->paginate(8);
                    break;
                case 'price_asc':
                    $products = Product::query()
                    ->where('name', 'LIKE', "%{$search}%")
                    ->orWhere('author', 'LIKE', "%{$search}%")
                    ->orderByRaw('price*discount asc')
                    ->paginate(8);
                    break;
                case 'price_desc':
                    $products = Product::query()
                    ->where('name', 'LIKE', "%{$search}%")
                    ->orWhere('author', 'LIKE', "%{$search}%")
                    ->orderByRaw('price*discount desc')
                    ->paginate(8);
                    break;
            }
        } else {
            $products = Product::query()
             ->where('name', 'LIKE', "%{$search}%")
             ->orWhere('author', 'LIKE', "%{$search}%")
             ->paginate(8);
        }
        return view('products', compact('products','categories','search'));
    }
    public function products(Request $request){
        $categories = category::all();
        //Get the search value from the request
        $search = $request->input('search');
        //Search in the title and body columns from the posts table
        if ($request->has('sorter')){
            switch($request->get('sorter')){
                case 'date_asc':
                    $products = Product::query()
                    ->orderBy('created_at', 'asc')
                    ->paginate(8);
                    break;
                case 'date_desc':
                    $products = Product::query()
                    ->orderBy('created_at', 'desc')
                    ->paginate(8);
                    break;
                case 'price_asc':
                    $products = Product::query()
                    ->orderByRaw('price*discount asc')
                    ->paginate(8);
                    break;
                case 'price_desc':
                    $products = Product::query()
                    ->orderByRaw('price*discount desc')
                    ->paginate(8);
                    break;
            }
        } else {
            $products = Product::query()
             ->where('name', 'LIKE', "%{$search}%")
             ->orWhere('author', 'LIKE', "%{$search}%")
             ->paginate(8);
        }
        // Return the search view with the resluts compacted
        return view('products', compact('products','categories'))->with('search',$search);
    }

    public function product($id,Request $request)
    {
        $category = category::where('id', $id)->get();
        $categories = category::all();
        if ($request->has('sorter')){
            switch($request->get('sorter')){
                case 'date_asc':
                    $products = Product::where('categories_id', $id)->orderBy('created_at', 'asc')->paginate(8);
                    break;
                case 'date_desc':
                    $products = Product::where('categories_id', $id)->orderBy('created_at', 'desc')->paginate(8);
                    break;
                case 'price_asc':
                    $products = Product::where('categories_id', $id)->orderByRaw('price*discount asc')->paginate(8);
                    break;
                case 'price_desc':
                    $products = Product::where('categories_id', $id)->orderBy('price*discount desc')->paginate(8);
                    break;
            }
        } else {
            $products = Product::where('categories_id', $id)->paginate(8);
        }
        return view('product', compact('products','category', 'categories'));
    }
    //show product details, feedbacks and replies on product-detail
    public function productDetail($id)
    {
        $product = Product::find($id);
        $feedbacks = Feedback::all();
        $replies = Reply::all();
        $lastest = Feedback::orderBy('created_at', 'DESC')->get();
        $stars5 = Feedback::where('rating', 5)->get();
        $stars4 = Feedback::where('rating', 4)->get();
        $stars3 = Feedback::where('rating', 3)->get();
        $stars2 = Feedback::where('rating', 2)->get();
        $stars1 = Feedback::where('rating', 1)->get();
        return view('product-detail', compact('product', 'feedbacks', 'replies', 'lastest', 'stars5', 'stars4', 'stars3', 'stars2', 'stars1'));
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

        return redirect()->back()->with('success', 'Your profile has been updated successfully.');
    }

    //show user-comments history

    //user-feedbacks
    public function feedbacks()
    {
        $user = Auth::user()->id;
        $feedbacks = Product::join('feedbacks', 'products.id', '=', 'feedbacks.products_id')
            ->where('users_id', $user)
            ->get();
        return view('feedbacks', compact('feedbacks', 'user', 'feedbacks','categories'));
    }
    //cart add, update and remove
    public function cart()
    {
        //$user=User::find($id)
        //session()->put('user',$user)
        return view('cart');
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
        $user=session()->get('user');
        if($user->phone==null)
        {
            $user->phone=$request->input('getPhone');
            session()->put('user',$user);
            DB::table('users')
            ->where('id', $user->id)  // find coupon code
            ->limit(1)  // optional - to ensure only one record is updated.
            ->update(array('phone' => $user->phone));  // update the record in the DB. 
        }
        if($user->address==null)
        {
            $user->address=$request->input('getAddress');
            session()->put('user',$user);
            DB::table('users')
            ->where('id', $user->id)  // find coupon code
            ->limit(1)  // optional - to ensure only one record is updated.
            ->update(array('address' => $user->address));  // update the record in the DB. 
        }
        $cart =session()->get('cart');
        if($cart):
        $count=0;$total=0;
        $discount=session()->get('discount');
        foreach($cart as $id=>$details):
            $count++;
            $total+=$details['price']*$details['quantity'];
        endforeach;
        $total*=(1-$discount);
        $id=Auth::id();
        $query="insert into orders (users_id,total_quantity,total_price,status) values ({$id},{$count},{$total},'Processing')";
        DB::insert($query);
        
        unset($details);
        $rs=DB::select('select id from orders where id=(select max(id) from orders)');
        //insert into orderDetails
            foreach($cart as $id=>$details):
                $query2="insert into order_details (orders_id,products_id,unit_quantity,unit_total) values ({$rs[0]->id},{$id},{$details['quantity']},{$details['price']}*{$details['quantity']})";
                DB::insert($query2);
            endforeach;
            session()->put('cart', null);
        endif;
        if ($request->session()->get('couponValue') > 0) :
            $coupon = $request->session()->get('coupon');
            DB::table('coupons')
                ->where('code', $coupon)  // find coupon code
                ->limit(1)  // optional - to ensure only one record is updated.
                ->update(array('status' => 'used', 'orders_id' => $rs[0]->id, 'updated_at' => now()));  // update the record in the DB. 
        endif;
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
        if ($rs[0]->status == 'used') :
            return redirect('/cart')->with('msgFail', 'Coupon is used!');
        endif;
        if (strtotime(date("Y/m/d")) > strtotime($rs[0]->exp_date)) :
            return redirect('/cart')->with('msgFail', 'Coupon is expired!');
        endif;
        if ($rs) :
            session()->put('couponValue', $rs[0]->value);
            return redirect('/cart')->with('msgSuccess', 'Coupon is usable!');
        endif;
    }
    public function getUserInfo(Request $request)
    {

    }
}
