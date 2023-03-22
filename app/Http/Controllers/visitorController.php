<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

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
        return view('home', compact('products'), compact('categories'));
    }

    public function productDetail($id)
    {
        $product = Product::find($id);
        return view('product-detail', compact('product'));
    }

    public function cart()
    {
        return view('cart');
    }
    /**
     * Write code on Method
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
        //chưa lấy userID được
        //$user=session()->get('user');
        $cart =session()->get('cart');
        $count=0;$total=0;
        foreach($cart as $id=>$details):
            $count++;
            $total+=$details['price']*$details['quantity'];
        endforeach;
        $query="insert into orders (users_id,total_quantity,total_price,status) values (1,{$count},{$total},'Processing')";
        DB::insert($query);
        session()->flash('success', 'Order confirmed, Please wait for us to check.');
        unset($details);
        $rs=DB::select('select id from orders where id=(select max(id) from orders)');
        //insert into orderDetails
        foreach($cart as $id=>$details):
            $query2="insert into order_details (orders_id,products_id,unit_quantity,unit_total) values ({$rs[0]->id},{$id},{$details['quantity']},{$details['price']}*{$details['quantity']})";
            DB::insert($query2);
        endforeach;
        session()->put('cart', null);
        return redirect('/home');
    }
}
