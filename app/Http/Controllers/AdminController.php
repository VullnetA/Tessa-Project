<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class AdminController extends Controller
{
    public function view_category(){

        $data=Category::all();

        return view('admin.category', compact('data'));
    }



    public function add_category(Request $request){

        $data=new Category;
        $data -> category_name=$request->category;

        $data->save();
        return redirect()->back()->with('message', 'Category Added Successfully');
    }

    public function delete_category($id){
        
        $data=Category::find($id);
        $data->delete();

        return redirect()->back()->with('message', 'Category Deleted Successfully' );

    }
    public function view_product(){
        $category = Category::all();

        return view('admin.product', compact('category'));
    }

    public function add_product(Request $request){

        $product= new Product();
        $product->title=$request->title;
        $product->description=$request->description;
        $product->category=$request->category;
        $product->brand=$request->brand;
        $product->quantity=$request->quantity;
        $product->price=$request->price;
        $product->discount_price=$request->discount_price;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('Product', $imagename);
        $product->image=$imagename;



        $product->save();

        return Redirect()->back()->with('message', 'Product Added Successfully');

    }


}

