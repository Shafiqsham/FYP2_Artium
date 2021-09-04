<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;

use Session;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    //
    function index()
    {   
        $data=Product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id)
    {
       $data =Product::find($id);
       return view('detail',['product'=>$data]);
    }
    function search(Request $req)
    {
        $data= Product::
        where('name', 'like', '%'.$req->input('query').'%')
        ->get();
        return view('search',['products'=>$data]);
    }
    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart= new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/product');

        }
        else
        {
         return redirect('/login');
        }
    }
    static function cartItem()
    {
        $userID=Session::get('user')['id'];
        return Cart::where('user_id', $userID)->count();
    }
    function cartList()
    {
        $userID=Session::get('user')['id'];
        $products=DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userID)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['products'=>$products]);
    }
    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');

    }
    function orderNow()
    {
        $userID=Session::get('user')['id'];
        $total= $products=DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userID)
        ->sum('products.Price');

        return view('ordernow',['total'=>$total]);   
    }
    function placeOrder(Request $req)
    {
        $userID=Session::get('user')['id'];
        $allCart= Cart::where('user_id', $userID)->get();
        foreach($allCart as $cart)
        {
            $order= new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="pending";
            $order->address=$req->address;
            $order->phone_number=Hash::make($req->phone_number);


            $order->save();
            Cart::where('user_id', $userID)->delete();
        }
        $req->input();
        return redirect('/product');
    }
    function myOrders()
    {
        $userID=Session::get('user')['id'];
        $orders= DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userID)
        ->get();

        return view('myorders',['orders'=>$orders]); 
    }
}
    