<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\Brand;

class AdminController extends Controller
{
    public function view_category()
    {
        $data=category::all();
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $data=new category;

        $data->category_name=$request->category;

        $data->save();

        return redirect()->back()->with('message','Category Added Successfully');

    }

    public function delete_category($id)
    {
        $data=category::find($id);

        $data->delete();

        return redirect()->back()->with('message','Category Deleted Successfully');
    }

    public function view_brand()
    {
        $data=Brand::all();
        return view('admin.brand', compact('data'));
    }

    public function add_brand(Request $request)
    {
        $data=new brand;

        $data->brand_name=$request->brand;

        $data->save();

        return redirect()->back()->with('message', 'Brand Added Successfully');
    }

    public function delete_brand($id)
    {
        $data=Brand::find($id);

        $data->delete();

        return redirect()->back()->with('message','Brand Deleted Successfully');
    }

    public function view_product()
    {
        $category=Category::all();
        $brand=Brand::all();
        return view('admin.product',compact('category', 'brand'));
    }

    public function add_product(Request $request)
    {
        $product=new Product;
        $product->title=$request->title;
        $product->description=$request->description;
        $product->category=$request->category;
        $product->quantity=$request->quantity;
        $product->price=$request->price;
        $product->Stylistprice=$request->Stylistprice;
        $product->discount_price=$request->dis_price;
        $product->vendor=$request->vendor;
        $product->new=$request->new;


        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $product->image=$imagename;


        $product->save();


        return redirect()->back()->with('message','Product Added Successfully');

    }

    public function show_product()
    {
        $product=Product::all();
        return view('admin.show_product',compact('product'));
    }

    public function delete_product($id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect()->back()->with('message','Product Deleted Successfully');
    }

    public function update_product($id)
    {
        $product=Product::find($id);

        $category=Category::all();

        return view('admin.update_product',compact('product', 'category'));
    }

    public function update_product_confirm(Request $request, $id)
    {
        $product=Product::find($id);

        $product->title=$request->title;
        $product->description=$request->description;
        $product->quantity=$request->quantity;
        $product->price=$request->price;
        $product->discount_price=$request->dis_price;
        $product->vendor=$request->vendor;
        $product->new=$request->new;
        $product->category=$request->category;

        $image=$request->image;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('product',$imagename);

            $product->image=$imagename;
        }

        $product->save();

        return redirect()->back()->with('message','Product Updated Successfully');
    }

    public function order()
    {
        $order=order::all();

        return view('admin.order', compact('order'));
    }

    public function delivered($id)
    {
        $order=Order::find($id);
        $order->delivery_status="delivered";
        $order->payment_status = 'Paid';
        $order->save();
        return redirect()->back();
    }

    public function  searchdata(Request $request)
    {
        $searchtext=$request->search;

        $order=order::where('firstname','LIKE',"%$searchtext%")->orWhere('phone','LIKE',"%$searchtext%")
            ->orWhere('product_title','LIKE',"%$searchtext%")->get();

        return view('admin.order',compact('order'));
    }

    public function  searchProd(Request $request)
    {
        $searchproduct=$request->search;

        $product=product::where('category','LIKE',"%$searchproduct%")->orWhere('vendor','LIKE',"%$searchproduct%")
            ->orWhere('title','LIKE',"%$searchproduct%")->get();

        return view('admin.show_product',compact('product'));
    }


}
