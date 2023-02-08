<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Course;
use App\Models\Order;
use App\Models\Brand;
use App\Models\User;
use App\Models\Image;
use App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Notification;

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

    public function view_course()
    {
        return view('admin.course');
    }

    public function add_course(Request $request)
    {
        $course=new Course;
        $course->title=$request->title;
        $course->category=$request->category;
        $course->description=$request->description;

        $image=$request->cover;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->cover->move('course',$imagename);
        $course->cover=$imagename;

        $course->save();
        
        if($request->has('images')){
            foreach ($request->file('images') as $image){
                
                $imageName=$request->title.'-image-'.time().rand(1,1000).'.'.$image->extension();
                $image->move('course',$imageName);

                Image::create([
                    'course_id'=>$course->id,
                    'image'=>$imageName
                ]);
            }
        }
        return redirect()->back()->with('message','Course Added Successfully');
    }

    public function show_course()
    {
        $course=Course::all();
        return view('admin.show_course',compact('course'));
    }

    public function view_images ($id){
        $course=Course::find($id);

        $images = $course->images;
        return view('admin.images',compact('course','images'));
    }

    public function delete_course($id)
    {
        $course=Course::find($id);

        $course->delete();

        return redirect()->back()->with('message','Course Deleted Successfully');
    }

    public function update_course($id)
    {
        $course=Course::find($id);
        return view('admin.update_course',compact('course'));
    }

    public function update_course_confirm(Request $request, $id)
    {
        $course=Course::find($id);
        $course->title=$request->title;
        $course->category=$request->category;
        $course->description=$request->description;

        $image=$request->cover;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->cover->move('course',$imagename);

            $course->cover=$imagename;
        }

        $course->save();
        return redirect()->back()->with('message','Course Updated Successfully');
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

    public function view_users()
    {
        $User=User::all();
        return view('admin.view_users', compact('User'));
    }

    public function update_user_confirm(Request $request, $id)
    {
        $User=User::find($id);

        $User->id=$request->id;
        $User->name=$request->name;
        $User->email=$request->email;
        $User->usertype=$request->usertype;
        $User->phone=$request->phone;
        $User->address=$request->address;

        $User->save();

        return redirect()->back()->with('message','User Updated Successfully');
    }
    public function update_user($id)
    {
        $User=User::find($id);


        return view('admin.update_user',compact('User'));
    }
    public function delete_user($id)
    {
        $User=User::find($id);
        $User->delete();
        return redirect()->back()->with('message','User Deleted Successfully');
    }

    public function approve_account($id)
{
    $user = User::find($id);
    $user->usertype = 3;
    $user->save();
    return redirect()->back()->with('success', 'User type updated successfully');
}

public function send_email($id){

    $user=User::find($id);

    return view('admin.email_info', compact('user'));
}
    public function send_user_email(Request $request, $id){

        $user=User::find($id);

        $details = [
            'greeting' => $request->greeting,
            'firstline' => $request->firstline,
            'body' => $request->body,
            'button' => $request->button,
            'url' => $request->url,
            'lastline' => $request->lastline,
        ];

        Notification::send($user,new SendEmailNotification($details));
        return redirect()->back()->with('message', 'Email Sent Succesfully');

    }

}


