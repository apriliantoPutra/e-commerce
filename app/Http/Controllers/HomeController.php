<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Stripe;
use Illuminate\Support\Facades\Session;


class HomeController extends Controller
{
    public function index()
    {
        $user= User::where('usertype', 'user')->get()->count();
        $product= Product::all()->count();
        $order= Order::all()->count();
        $done= Order::where('status', 'Done')->get()->count();
        return view('admin.index', compact('user', 'product', 'order', 'done'));
    }
    // root
    public function home()
    {
        $data = Product::all();
        if (Auth::id()) {
            $user = Auth::user();
            $user_id = $user->id;
            $count = Cart::where('user_id', $user_id)->count();
        } else {
            $count = '';
        }

        return view('user/home', compact('data', 'count'));
    }
    public function shop(){
        if (Auth::id()) {
            $user = Auth::user();
            $user_id = $user->id;
            $count = Cart::where('user_id', $user_id)->count();
        } else {
            $count = '';
        }
        return view('user.shop', compact('count'));
    }
    public function why_us(){
        if (Auth::id()) {
            $user = Auth::user();
            $user_id = $user->id;
            $count = Cart::where('user_id', $user_id)->count();
        } else {
            $count = '';
        }
        return view('user.why_us', compact('count'));
    }
    public function testimonial(){
        if (Auth::id()) {
            $user = Auth::user();
            $user_id = $user->id;
            $count = Cart::where('user_id', $user_id)->count();
        } else {
            $count = '';
        }
        return view('user.testimonial', compact('count'));
    }
    public function contact(){
        if (Auth::id()) {
            $user = Auth::user();
            $user_id = $user->id;
            $count = Cart::where('user_id', $user_id)->count();
        } else {
            $count = '';
        }
        return view('user.contact', compact('count'));
    }

    // dasboard user
    public function home_user()
    {

        $data = Product::all();
        $user = Auth::user();
        $user_id = $user->id;
        $count = Cart::where('user_id', $user_id)->count();
        return view('user/home', compact('data', 'count'));
    }
    // detail produk (root/ dashboard)
    public function detail_product($slug)
    {

        $data = Product::where('slug', $slug)->get()->first();
        if (Auth::id()) {
            $user = Auth::user();
            $user_id = $user->id;
            $count = Cart::where('user_id', $user_id)->count();
        } else {
            $count = '';
        }
        return view('user/product_detail', compact('data', 'count'));
    }
    // add cart user
    public function add_cart($id)
    {

        $product_id = $id;
        $user = Auth::user();
        $user_id = $user->id;

        $data = new Cart;
        $data->user_id = $user_id;
        $data->product_id = $product_id;
        $data->save();
        toastr()->timeOut(3000)->closeButton()->success('Cart added successfuly!!');
        return redirect('/dashboard');
    }

    // my cart user
    public function mycart()
    {

        if (Auth::id()) {
            $user = Auth::user();
            $user_id = $user->id;
            $count = Cart::where('user_id', $user_id)->count();
            $cart = Cart::where('user_id', $user_id)->get();
        } else {
            $count = '';
            $cart = '';
        }
        return view('user.mycart', compact('count', 'cart'));
    }

    // confirm order
    public function confirm_order(Request $request)
    {
        $name = $request->name;
        $address = $request->address;
        $phone = $request->phone;

        $user_id = Auth::user()->id;
        $cart = Cart::where('user_id', $user_id)->get();

        foreach ($cart as $carts) {
            $order = new Order;

            $order->name = $name;
            $order->rec_address = $address;
            $order->phone = $phone;

            $order->user_id = $user_id;
            $order->product_id = $carts->product_id;
            $order->save();
        }

        $cart_remove= Cart::where('user_id', $user_id)->get();
        foreach($cart_remove as $remove){
            $data= Cart::find($remove->id);
            $data->delete();

        }

        toastr()->timeOut(3000)->closeButton()->success('Cart ordered successfuly!!');
        return redirect()->back();
    }

    // my order
    public function myorders(){
        $user= Auth::user()->id;
        $count= Order::where('user_id', $user)->get()->count();

        $orders= Order::where('user_id', $user)->get();
        return view('user.myorder', compact('count', 'orders'));
    }

    // payment card
    public function stripe($totalPrice){
        return view('user.payment_card', compact('totalPrice'));
    }
    public function stripePost(Request $request, $totalPrice)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create ([
                "amount" => $totalPrice * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from giftos.com."
        ]);

        $name = Auth::user()->name;
        $address = Auth::user()->address;
        $phone = Auth::user()->phone;

        $user_id = Auth::user()->id;
        $cart = Cart::where('user_id', $user_id)->get();

        foreach ($cart as $carts) {
            $order = new Order;

            $order->name = $name;
            $order->rec_address = $address;
            $order->phone = $phone;

            $order->user_id = $user_id;
            $order->product_id = $carts->product_id;
            $order->payment_status = 'paid';
            $order->save();
        }

        $cart_remove= Cart::where('user_id', $user_id)->get();
        foreach($cart_remove as $remove){
            $data= Cart::find($remove->id);
            $data->delete();

        }

        toastr()->timeOut(3000)->closeButton()->success('Cart ordered successfuly!!');
        return redirect('/myorders');
    }
}
