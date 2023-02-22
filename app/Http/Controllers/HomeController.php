<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\View;

use App\Models\User;

use App\Models\Product;

use App\Models\Cart;

use App\Models\Order;

use App\Models\Brand;

use App\Models\Category;

use App\Models\Course;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;

class HomeController extends Controller
{
    public function index()
    {
        $product = Product::latest()->paginate(6);

        $product1 = Product::where('PopularProducts', '=', 1)->latest()->paginate(6);;

        $brand=Brand::all();
        if(Auth::id())
        {
            $id=Auth::user()->id;
            $cart=Cart::where('user_id', '=', $id)->get();
            $count=Cart::where('user_id', '=', $id)->count();
            return view('home.userpage', compact('product', 'cart', 'count','brand','product1'));
        }
        else
        {
            return view('home.userpage', compact('product','brand','product1'));
        }

    }

    public function redirect()
    {
        $usertype=Auth::user()->usertype;
        $brand=Brand::all();
        $product1 = Product::where('PopularProducts', '=', 1)->latest()->paginate(3);;

        if($usertype=='1')
        {
            $total_product=Product::all()->count();
            $total_order=Order::all()->count();
            $total_user=User::all()->count();

            $order=Order::all();
            $total_revenue=0;

            foreach ($order as $order)
            {
                $total_revenue=$total_revenue+$order->price;
            }

            $total_delivered=Order::where('delivery_status','=','delivered')->get()->count();
            $total_processing=Order::where('delivery_status','=','processing')->get()->count();

            return view('admin.home',compact('product1','total_product','total_order',
                'total_user','total_revenue','total_delivered','total_processing', 'brand'));
        }

        else{
            $product=Product::paginate(3);
            $id=Auth::user()->id;
            $cart=Cart::where('user_id', '=', $id)->get();
            $count=Cart::where('user_id', '=', $id)->count();
            return view('home.userpage',compact('product1','product','cart','count','brand'),['usertype'=>$usertype]);
        }
    }

    public function about()
    {
        if(Auth::id())
        {
            $id=Auth::user()->id;
            $cart=Cart::where('user_id', '=', $id)->get();
            $count=Cart::where('user_id', '=', $id)->count();
            return view('about.aboutpage', compact('cart', 'count'));
        }
        else
        {
            return view('about.aboutpage');
        }
    }

    public function contact()
    {
        if(Auth::id())
        {
            $id=Auth::user()->id;
            $cart=Cart::where('user_id', '=', $id)->get();
            $count=Cart::where('user_id', '=', $id)->count();
            return view('contact.contactpage', compact('cart', 'count'));
        }
        else
        {
            return view('contact.contactpage');
        }
    }

    public function shop()
    {
        $brand=Brand::all();
        $products=Product::paginate(6);
        $category=Category::all();
        if(Auth::id())
        {
            $id=Auth::user()->id;
            $cart=Cart::where('user_id', '=', $id)->get();
            $count=Cart::where('user_id', '=', $id)->count();
            return view('shop.shop', compact('cart', 'count', 'products','brand','category'));
        }
        else
        {
            return view('shop.shop', compact('products','brand','category'));
        }
    }

    public function courses()
    {
        $courses=Course::all();
        if(Auth::id())
        {
            $id=Auth::user()->id;
            $cart=Cart::where('user_id', '=', $id)->get();
            $count=Cart::where('user_id', '=', $id)->count();

            return view('courses.coursesview', compact('cart', 'count', 'courses'));
        }
        else
        {
            return view('courses.coursesview', compact('courses'));
        }
    }

    public function course_details($id)
    {
        $course=Course::find($id);


        $images = $course->images;

        if(Auth::id())
        {
            $id=Auth::user()->id;
            $cart=Cart::where('user_id', '=', $id)->get();
            $count=Cart::where('user_id', '=', $id)->count();

            return view('coursetype.course', compact('course','cart', 'count', 'images'));
        }
        else
        {
            return view('coursetype.course', compact('course'));
        }
    }

    public function product_details($id)
    {
        $product=product::find($id);
        if(Auth::id())
        {
            $id=Auth::user()->id;
            $cart=Cart::where('user_id', '=', $id)->get();
            $count=Cart::where('user_id', '=', $id)->count();
            return view('product.product', compact('product', 'cart', 'count'));
        }
        else
        {
            return view('product.product', compact('product'));
        }
    }

    public function add_cart(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');
        $usertype=Auth::user()->usertype;

        if(Auth::id())
        {
            if ($usertype=='0')
            {
                $user=Auth::user();
                $user_id=Auth::user()->id;

                $product=Product::find($product_id);

                // Check if stock is available
                $getProductStock = Product::getProductStock ($product_id);
                if($getProductStock<$product_qty)
                {
                    return redirect()->back()->with('message', 'Not enough');
                }
                else
                {
                    // Check Product if already exists in the User Cart
                    $cart_item = Cart::where('product_id', $product_id)->where('user_id', Auth::id())->first();

                    if($cart_item) {
                        // Update the existing cart item quantity
                        $cart_item->quantity += $product_qty;
                        $cart_item->save();
                    }
                    else {
                        // Save product in carts table
                        $cart=new Cart;
                        $cart->name=$user->name;
                        $cart->email=$user->email;
                        $cart->phone=$user->phone;
                        $cart->user_id=$user->id;
                        $cart->product_title=$product->title;
                        if($product->discount_price!=null) {

                            $cart->price=$product->discount_price * $request->quantity;
                            $cart->unitprice=$product->discount_price;

                        } else {
                            $cart->price=$product->price * $request->quantity;
                            $cart->unitprice=$product->price;

                        }
                        $cart->image=$product->image;
                        $cart->product_id=$product->id;
                        $cart->quantity=$product_qty;
                        $cart->save();
                    }
                    $cart=Cart::where('user_id', '=', $user_id)->get();
                    $count=Cart::where('user_id', '=', $user_id)->count();
                    return response()->json([
                        'status'=>true,
                        'view'=>(String)View::make('home.header')->with(compact('count','cart'))
                    ]);


                }
            }
            elseif ($usertype=='2')
            {
                $user=Auth::user();
                $user_id=Auth::user()->id;

                $product=Product::find($product_id);

                // Check if stock is available
                $getProductStock = Product::getProductStock ($product_id);
                if($getProductStock<$product_qty)
                {
                    return redirect()->back()->with('message', 'Not enough');
                }
                else
                {
                    // Check Product if already exists in the User Cart
                    $cart_item = Cart::where('product_id', $product_id)->where('user_id', Auth::id())->first();

                    if($cart_item) {
                        // Update the existing cart item quantity
                        $cart_item->quantity += $product_qty;
                        $cart_item->save();
                    }
                    else {
                        // Save product in carts table
                        $cart=new Cart;
                        $cart->name=$user->name;
                        $cart->email=$user->email;
                        $cart->phone=$user->phone;
                        $cart->user_id=$user->id;
                        $cart->product_title=$product->title;
                        if($product->discount_price!=null) {

                            $cart->price=$product->discount_price * $request->quantity;
                            $cart->unitprice=$product->discount_price;


                        } else {

                            $cart->price=$product->Stylistprice * $request->quantity;
                            $cart->unitprice=$product->Stylistprice;

                        }
                        $cart->image=$product->image;
                        $cart->product_id=$product->id;
                        $cart->quantity=$product_qty;
                        $cart->save();
                    }
                    $cart=Cart::where('user_id', '=', $user_id)->get();
                    $count=Cart::where('user_id', '=', $user_id)->count();
                    return response()->json([
                        'status'=>true,
                        'view'=>(String)View::make('home.header')->with(compact('count','cart'))
                    ]);


                }
            }

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

    public function checkout()
    {
        if(Auth::id())
        {
            $id=Auth::user()->id;
            $cart=Cart::where('user_id', '=', $id)->get();
            $count=Cart::where('user_id', '=', $id)->count();
            return view('checkout.checkout', compact('cart','count'));

        }
        else
        {
            return redirect('login');
        }
    }

    public function cash_order(Request $request)
    {
        $user=Auth::user();

        $userid=$user->id;
        $cart=cart::where('user_id', '=', $userid)->get();

        $info='';
        $price=0;

        foreach($cart as $cart)
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
            $order->user_id=$cart->user_id;
            $order->product_title=$cart->product_title;
            $info=$info.$cart->product_title.', ';
            $order->price=$cart->unitprice*$cart->quantity;
            $price=$price+$order->price;
            $order->quantity=$cart->quantity;
            $order->image=$cart->image;
            $order->product_id=$cart->Product_id;

            $order->payment_status='cash on delivery';
            $order->delivery_status='processing';

            $order->save();

            $cart_id=$cart->id;
            $cart1=cart::find($cart_id);
            $cart1->delete();
        }

        $data = array(
            'products' => $info,
            'price'  =>  $price,
            'buyername'  =>  $request->firstname,
            'buyersurname'  =>  $request->lastname,
            'address'   =>   $request->address,
        );

        Mail::to('nazif.selimi73@gmail.com')->send(new OrderShipped($data));

        return redirect()->back()->with('message', 'We have received your order and will soon ship your product');
    }

    public function cartUpdate(Request $request){
        if($request->ajax()){
            $id=Auth::user()->id;
            $data = $request->all();

            //Get Cart Details
            $cartDetails = Cart::find($data['cartid']);

            $availableStock = Product::select('quantity')->where(['id'=>$cartDetails['Product_id']])->first()->toArray();

            if($data['qty']>$availableStock['quantity']){
                $cart=Cart::where('user_id', '=', $id)->get();
                return response()->json([
                    'status'=>false,
                    'message'=>'Product Stock is not available',
                    'view'=>(String)View::make('cart.cartArea')->with(compact('cart'))
                ]);
            }

            Cart::where('id', $data['cartid'])->update(['quantity'=>$data['qty']]);
            $cart=Cart::where('user_id', '=', $id)->get();
            return response()->json([
            'status'=>true,
            'view'=>(String)View::make('cart.cartArea')->with(compact('cart'))
            ]);

        }
    }

    public function cartDelete(Request $request){
        if($request->ajax()){
            $id=Auth::user()->id;
            $data = $request->all();
            Cart::where('id',$data['cartid'])->delete();
            $cart=Cart::where('user_id', '=', $id)->get();
            return response()->json([
            'view'=>(String)View::make('cart.cartArea')->with(compact('cart'))
            ]);
        }
    }


    public function searchProdUser(Request $request)
    {
        $searchproduct=$request->search;
        $products=product::where('category','LIKE',"%$searchproduct%")->orWhere('brand','LIKE',"%$searchproduct%")
            ->orWhere('title','LIKE',"%$searchproduct%")->paginate(6);

        $brand=Brand::all();
        $category=Category::all();
        if(Auth::id())
        {
            $id=Auth::user()->id;
            $cart=Cart::where('user_id', '=', $id)->get();
            $count=Cart::where('user_id', '=', $id)->count();
            return view('shop.shop', compact('cart', 'count', 'products','brand','category'));
        }else
        {
            return view('shop.shop', compact('products','brand','category'));
        }

    }

    public function category($category)
    {
        $products = Product::where('category', '=', $category)->paginate(6);

        $brand=Brand::all();
        $category=Category::all();
        if(Auth::id())
        {
            $id=Auth::user()->id;
            $cart=Cart::where('user_id', '=', $id)->get();
            $count=Cart::where('user_id', '=', $id)->count();
            return view('shop.shop', compact('cart', 'count', 'products','brand','category'));
        }
        else
        {
            return view('shop.shop', compact('products','brand','category'));
        }

    }

    public function brand($brand)
    {
        $products = Product::where('brand', '=', $brand)->paginate(6);

        $brand=Brand::all();
        $category=Category::all();
        if(Auth::id())
        {
            $id=Auth::user()->id;
            $cart=Cart::where('user_id', '=', $id)->get();
            $count=Cart::where('user_id', '=', $id)->count();
            return view('shop.shop', compact('cart', 'count', 'products','brand','category'));
        }
        else
        {
            return view('shop.shop', compact('products','brand','category'));
        }

    }
    public function MyOrders()
    {
        $id=Auth::user()->id;
        $order=Order::where('user_id', '=', $id)->get();
        $product=Product::paginate(4);
        if(Auth::id())
        {
            $cart=Cart::where('user_id', '=', $id)->get();
            $count=Cart::where('user_id', '=', $id)->count();
            return view('Orders.myorders', compact('cart', 'count', 'order','product'));
        }
        else
        {
            return view('Orders.myorders', compact('order','product'));
        }
    }

}
