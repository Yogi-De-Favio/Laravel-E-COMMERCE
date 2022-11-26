<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session as FacadesSession;

class ProductController extends Controller
{
    function index()
    {
        $data = Product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id)
    {
        $data = Product::find($id);
        return view('detail',['products'=>$data]);
    }
    function search(Request $request)
    {
        $data = Product::where('name','like','%'.$request->input('query').'%')->Orwhere('category','like','%'.$request->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }
    function addtocart(Request $request)
    {
        if($request->session()->has('user'))
        {
            $cart = new Cart;
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('/');
        }
        else
        {
            return redirect('/login');
        }

    }
    static function cartItem()
    {
       $userId =FacadesSession::get('user')['id'];
       return Cart::where('user_id',$userId)->count();
    }
    function cartlist()
    {
        if(isset(FacadesSession::get('user')['id'])){
        $userId = FacadesSession::get('user')['id'] ;
        $products = DB::table('cart')->join('products','cart.product_id','=','products.id')->where('cart.user_id',$userId)->select('products.*','cart.id as cart_id')->get();
        }
        else {
            return redirect('/');
        }
        return view('cardlist',['products'=>$products]);
    }
    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
    function orderNow()
    {
        $userId = FacadesSession::get('user')['id'];
        $total = $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');

        return view('ordernow',['total'=>$total]);
    }
    function orderPlace(Request $request)
    {
        $userId = FacadesSession::get('user')['id'];
        $allcart = Cart::where('user_id',$userId)->get();
        foreach ($allcart as $cart)
        {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->payment_method = $request->payment;
            $order->payment_status = "pending";
            $order->address = $request->address;

            $order->save();
            Cart::where('user_id',$userId)->delete();

        }
        $request->input();
        return redirect('/');
    }
    function myOrders()
    {
        if(isset(FacadesSession::get('user')['id'])){
            $userId = FacadesSession::get('user')['id'];
            $orders =  DB::table('orders')
            ->join('products','orders.product_id','=','products.id')
            ->where('orders.user_id',$userId)
            ->get();

            return view('myorders',['orders'=>$orders]);
        }
        else{
            return redirect('/');
        }

    }


}
