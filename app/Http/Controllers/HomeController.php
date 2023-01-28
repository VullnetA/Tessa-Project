<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Product;

use App\Models\Cart;

use App\Models\Order;

class HomeController extends Controller
{
    public function index()
    {
        $product=Product::paginate(3);
        return view('home.userpage',compact('product'));
    }

    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }
        else
        {
            $product=Product::paginate(3);
            return view('home.userpage',compact('product'));
        }
    }

    public function product_details($id)
    {
        $product=product::find($id);
        return view('product.product', compact('product'));
    }

    public function add_cart(Request $request,$id)
    {
        if(Auth::id())
        {
            $user=Auth::user();

            $product=Product::find($id);

            $cart=new Cart;

            $cart->name=$user->name;

            $cart->email=$user->email;

            $cart->phone=$user->phone;

            $cart->user_id=$user->id;

            $cart->product_title=$product->title;

            if($product->discount_price!=null)
            {
                $cart->price=$product->discount_price * $request->quantity;
                $cart->unitprice=$product->discount_price;
            }
            else
            {
                $cart->price=$product->price * $request->quantity;
                $cart->unitprice=$product->price;
            }


            $cart->image=$product->image;

            $cart->Product_id=$product->id;

            $cart->quantity=$request->quantity;

            $cart->save();

            return redirect()->back();

        }
        else
        {
            return redirect('login');
        }
    }

    public function show_cart()
    {
        if(Auth::id())
        {
            $id=Auth::user()->id;
            $cart=Cart::where('user_id', '=', $id)->get();

            return view('cart.showcart', compact('cart'));

        }
        else
        {
            return redirect('login');
        }
    }

    public function remove_cart($id)
    {
        $cart=Cart::find($id);

        $cart->delete();

        return redirect()->back();
    }

    public function checkout()
    {
        $user=Auth::user();

        $userid=$user->id;
        $data=cart::where('user_id', '=', $userid)->get();

        return view('checkout.checkout',compact('data'));
    }

    public function cash_order(Request $request)
    {
        $user=Auth::user();

        $userid=$user->id;
        $data=cart::where('user_id', '=', $userid)->get();

        foreach($data as $data)
        {
            $order=new order;
            $order->city=$request->city;
            $order->firstname=$request->firstname;
            $order->lastname=$request->lastname;
            $order->company=$request->company;
            $order->address=$request->address;
            $order->phone=$request->phone;
            $order->postcode=$request->postcode;
            $order->email=$request->email;
            $order->user_id=$data->user_id;
            $order->product_title=$data->product_title;
            $order->price=$data->price;
            $order->quantity=$data->quantity;
            $order->image=$data->image;
            $order->product_id=$data->Product_id;

            $order->payment_status='cash on delivery';
            $order->delivery_status='processing';

            $order->save();

            $cart_id=$data->id;
            $cart=cart::find($cart_id);
            $cart->delete();
        }

        return redirect()->back()->with('message', 'We have received your order and will soon ship your product');

    }

    public function  searchProdUser(Request $request)
    {
        $searchproduct=$request->search;

        $product=product::where('category','LIKE',"%$searchproduct%")->orWhere('vendor','LIKE',"%$searchproduct%")
            ->orWhere('title','LIKE',"%$searchproduct%")->get();

        return view('home.userpage',compact('product'));
    }

}
