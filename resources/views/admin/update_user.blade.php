<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">
    @include('admin.css')

    <style type="text/css">

        .div_center
        {
            text-align:center;
            padding-top:40px;
        }

        .font_size
        {
            font-size:40px;
            padding-bottom:40px;

        }

        .text_color
        {
            color:black;
            padding-bottom:20px;
        }

        label
        {
            display: inline-block;
            width: 200px;
        }

        .div_design
        {
            padding-bottom: 15px;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
      <!-- partial -->
      <div class="main-panel">
          <div class="content-wrapper">


            @if(session()->has('message'))

            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{session()->get('message')}}

            </div>
            @endif

            <div class="div_center">
                <h1 class="font_size">Update User</h1>


                <form action="{{url('/update_user_confirm', $User->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="div_design">
                <label>Id:</label>
                <input class="text_color" type="text" name="id" placeholder=""  value="{{$User->id}} ">
                </div>
                <div class="div_design">
                <label>Name:</label>
                <input class="text_color" type="text" name="name" placeholder=""  value="{{$User->name}} ">
                </div>
                <div class="div_design">
                <label>User Email:</label>
                <input class="text_color" type="text" name="email" placeholder="" value="{{$User->email}}">
                </div>

                <div class="div_design">
                <label>User Type:</label>
                <input class="text_color" type="number" min="0" name="usertype" placeholder="" value="{{$User->usertype}}">
                </div>
                <div class="div_design">
                <label>Phone Number:</label>
                <input class="text_color" type="number" name="phone" placeholder=""  value="{{$User->phone}}">
                </div>
                <div class="div_design">
                <label>Address:</label>
                <input class="text_color" type="text" name="address" placeholder=""" value="{{$User->address}}" readonly>
                </div>

                <div class="div_design">
                <input type="submit" value="Update User" class="btn btn-primary">
                </div>

                </form>

            </div>


        </div>
       </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>