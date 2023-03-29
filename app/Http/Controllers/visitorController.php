<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use App\Models\Feedbacks;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
        $categories = Category::all();
        $products = Product::all();
        if(Auth::check()):
        $user=Auth::getUser();
        session()->put('user',$user);
        endif;
        return view('home', compact('products'), compact('categories'));
    }
    //show product information and user-comments on product-detail
    public function productDetail($id)
    {
        $product = Product::find($id);
        $users = User::with('feedbacks')->get();
        return view('product-detail', compact('users'), compact('product'));
    }
    //show user-comments history

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
        if ($cart==null) {
            session()->put('cart',[]);
            $cart = [
                $id => [
                    "id"=>$product->id,
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
            "id"=>$product->id,
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
            ->update(array('location' => $user->address));  // update the record in the DB. 
        }
        $cart =session()->get('cart');
        if($cart):
        $total*=(1-$discount);
        $id=Auth::id();
        $query="insert into orders (users_id,status) values ({$id},'Processing')";
        DB::insert($query);
        
        unset($details);
        $rs=DB::select('select id from orders where id=(select max(id) from orders)');
        //insert into orderDetails
            foreach($cart as $id=>$details):
                $query2="insert into order_details (orders_id,products_id,unit_quantity,unit_sold_price) values ({$rs[0]->id},{$id},{$details['quantity']},{$details['price']})";
                DB::insert($query2);
            endforeach;
            session()->put('cart', null);
        endif;
        if($request->session()->get('couponValue')>0):
            $coupon=$request->session()->get('coupon');
            DB::table('coupons')
            ->where('code', $coupon)  // find coupon code
            ->limit(1)  // optional - to ensure only one record is updated.
            ->update(array('status' => 'used','orders_id'=>$rs[0]->id));  // update the record in the DB. 
        endif;
        return redirect('/home')->with('orderSuccess', 'Order confirmed, Please wait for us to check.');
    }
    public function checkCoupon(Request $request)
    {
        $coupon=$request->input('checkCoupon');
        $query="select * from coupons where code='{$coupon}'";
        $rs=DB::select($query);
        if(!$rs):
            return redirect('/cart')->with('msgFail','Coupon does not exists!');
        endif;
        if($rs[0]->status=='used'):
            return redirect('/cart')->with('msgFail', 'Coupon is used!');
        endif;
        if(strtotime(date("Y/m/d"))>strtotime($rs[0]->exp_date)):
            return redirect('/cart')->with('msgFail', 'Coupon is expired!');
        endif;
        if($rs):
        session()->put('couponValue',$rs[0]->value);
        return redirect('/cart')->with('msgSuccess', 'Coupon is usable!');
        endif;
    }
    public function orderHistory(Request $request)
    {
        $user=session()->get('user');
        session()->put('orders',null);
        $orders=DB::table('orders')->where('users_id',$user->id)->get();
        if($orders) session()->put('orders',$orders);
        return view('orderHistory');
    }
    public function orderDetail(Request $request)
    {
        $user=session()->get('user');
        session()->put('orders',null);
        $orders=DB::table('orders')->where('users_id',$user->id)->get();
        if($orders) session()->put('orders',$orders);
        return view('orderDetail');
    }
    public function orderCancel(Request $request)
    {
        $user=session()->get('user');
        session()->put('orders',null);
        $orders=DB::table('orders')->where('users_id',$user->id)->get();
        if($orders) session()->put('orders',$orders);
        return view('orderHistory');
    }
}
