<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Feedback;
use App\Models\Reply;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Contact;
use App\Models\Coupon; 

class adminController extends Controller
{
    //return view user-tables
    public function userTables()
    {
        $users = User::all();
        return view('admin.user-tables', compact('users'));
    }

    //updateRoles
    public function updateRoles($id)
    {
        $data = User::find($id);
        if ($data->role == 'user') {
            $data->role = 'admin';
        } else {
            $data->role = 'user';
        }
        $data->update();
        return redirect()->back()->with('message', 'Role updated successfully');
    }

    //return view category-table
    public function categoryTable()
    {
        return view('admin.category-table');
    }
    //create category
    public function saveCategories(Request $request)
    {
        $data = new Category;
        //Store in database
        $data->categories = $request->input('categories');
        $data->description = $request->input('description');
        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('images/categories/'), $filename);
            $data->photo = $filename;
        }
        $data->save();
        return redirect()->back()->with('message', 'New category created successfully!');
    }

    //get category id
    public function updateCategoriesId($id)
    {
        $data = Category::find($id);
        return response()->json([
            'categories' => $data
        ]);
    }

    //update category
    public function updateCategories(Request $request)
    {
        $categories_id = $request->input('categories_id');
        $data = Category::find($categories_id);
        $data->categories = $request->input('categories');
        $data->description = $request->input('description');
        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('images/categories/'), $filename);
            $data->photo = $filename;
        }
        $data->update();
        return redirect()->back()->with('message', 'Category updated successfully!');
    }

    //return view product-tables
    public function productTable()
    {
        return view('admin.product-table');
    }

    //create product
    public function saveProducts(Request $request)
    {
        $data = new Product;
        //Store in database
        $data->categories_id = $request->input('categories_id');
        $data->name = $request->input('name');
        $data->author = $request->input('author');
        $data->country = $request->input('country');
        $data->published = $request->input('published');
        $data->price = $request->input('price');
        $data->discount = $request->input('discount');
        $data->description = $request->input('description');
        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('images/shop/'), $filename);
            $data->photo = $filename;
        }
        $data->save();
        return redirect()->back()->with('message', 'New product created successfully!');
    }

    //get update product id
    public function updateProductsId($id)
    {
        $data = Product::find($id);
        return response()->json([
            'products' => $data
        ]);
    }

    //update product
    public function updateProducts(Request $request)
    {
        $product_id = $request->input('product_id');
        $data = Product::find($product_id);
        //Store in database
        $data->categories_id = $request->input('product_categories_id');
        $data->name = $request->input('product_name');
        $data->author = $request->input('product_author');
        $data->country = $request->input('product_country');
        $data->published = $request->input('product_published');
        $data->price = $request->input('product_price');
        $data->discount = $request->input('product_discount');
        $data->description = $request->input('product_description');
        if ($request->hasfile('product_photo')) {
            $file = $request->file('product_photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('images/shop/'), $filename);
            $data->photo = $filename;
        }
        $data->update();
        return redirect()->back()->with('message', 'Product updated successfully!');
    }

    //show product
    public function showProduct($id)
    {
        $data = Product::find($id);
        $data->status = 'show';
        $data->update();
        return redirect()->back()->with('message', 'Product changed status to show!');
    }

    //hide product
    public function hideProduct($id)
    {
        $data = Product::find($id);
        $data->status = 'hide';
        $data->update();
        return redirect()->back()->with('message', 'Product changed status to hide!');
    }

    //return view coupon-table
    public function couponTable(){
        $coupons = Coupon::all();
        return view('admin.coupon-table', compact('coupons'));
    }

    //find coupon id
    public function findCouponId($id)
    {
        $data = Coupon::find($id);
        return response()->json([
            'coupons' => $data
        ]);
    }

    //update coupon 
    public function updateCoupon(Request $request){
        $coupons_id = $request->input('id');
        $data = Coupon::find($coupons_id);
        $data->code = $request->input('codeUpdate');
        $data->value = $request->input('valueUpdate');
        $data->description = $request->input('descriptionUpdate');
        $data->exp_date = $request->input('exp_dateUpdate');
        $data->update();
        return redirect()->back()->with('message', 'Coupon updated successfully');
    }

    //save coupon
    public function saveCoupon(Request $request){
        $data = new Coupon;
        $data->code = $request->input('code');
        $data->value = $request->input('value');
        $data->description = $request->input('description');
        $data->exp_date = $request->input('exp_date');
        $data->save();
        return redirect()->back()->with('message', 'Coupon created successfully');
    }

    //return view oder-tables
    public function oderTables()
    {
        $orders = Order::all();
        $orderDetails = OrderDetail::all();
        return view('admin.oder-tables', compact('orders', 'orderDetails'));
    }
    public function findOrderId($id)
    {
        $order = DB::table('order_details')->where('orders_id', $id)->get();
        
        $orderDetail=array();
        foreach ($order as $id=>$detail)
        {
            $product =  DB::table('products')->where('id', $detail->id)->first();
            $orderDetail[]=array("name"=>$product->name,"photo"=>asset('/images/shop/' . $product->photo),"Quantity"=>$detail->unit_quantity,"soldPrice"=>$detail->unit_sold_price);
        }
        return response()->json(
            ['orderDetail' => $orderDetail]
        );
    }
    //approve orders
    public function approveOrder($id)
    {
        $data = Order::find($id);
        if($data->status=='Pending'):
        $data->status = 'Approved';
        $data->update();
        return redirect()->back()->with('message', 'Order updated successfully!');
        endif;
        return redirect()->back()->with('message', 'Cannot update order!');
    }

    //cancle orders
    public function cancleOrder($id)
    {
        $data = Order::find($id);
        $data->status = 'Cancelled';
        $data->update();
        return redirect()->back()->with('message', 'Order updated successfully!');
    }

    //return view feedback-tables
    public function feedbackTables()
    {
        $feedbacks = Feedback::all();
        $replies = Reply::all();
        return view('admin.feedback-tables', compact('feedbacks', 'replies'));
    }

    //update Feedback
    public function showFeedback($id)
    {
        $data = Feedback::find($id);
        $data->status = 'show';
        $data->update();
        return redirect()->back()->with('message', 'Feedback changed status to show successfully!');
    }

    //update Feedback
    public function hideFeedback($id)
    {
        $data = Feedback::find($id);
        $data->status = 'hide';
        $data->update();
        return redirect()->back()->with('message', 'Feedback changed status to hide successfully!');
    }

    //update Reply
    public function showReply($id)
    {
        $data = Reply::find($id);
        $data->status = 'show';
        $data->update();
        return redirect()->back()->with('message', 'Reply changed status to show successfully!');
    }

    //update Reply
    public function hideReply($id)
    {
        $data = Reply::find($id);
        $data->status = 'hide';
        $data->update();
        return redirect()->back()->with('message', 'Reply changed status to hide successfully!');
    }

    //return view contact-table
    public function contactTable(){
        $contacts = Contact::all();
        return view('admin.contact-table', compact('contacts'));
    }
}
