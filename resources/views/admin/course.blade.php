<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
            text-align: left;
            padding-left: 31%;
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
    
            <div class="div_center" style="border-top:3px solid; border-top-color:white; text-align:center;">
                <h1 class="font_size">Add Course</h1>


                <form action="{{url('/add_course')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="div_design">
                <label>Course Title:</label>
                <input class="text_color" type="text" name="title" placeholder="Write the Course Title" required="">
                </div>
                <div class="div_design">
                <label>Course Category:</label>
                <input class="text_color" type="text" name="category" placeholder="Write the Course Category" required="">
                </div>
                <div class="div_design">
                <label>Course Description:</label>
                <input class="text_color" type="text" name="description" placeholder="Write the Course Description" required="">
                </div>
                <div class="div_design">
                <label>Upload Cover Image:</label>
                <input type="file" name="cover" required="">
                </div>
                <div class="div_design">
                <label>Upload Course Images Here:</label>
                <input 
                  type="file" 
                  name="images[]" 
                  accept="image/*"
                  multiple 
                  required="">
                </div>
                

                <div class="div_design" style="text-align:left;">
                <input type="submit" value="Add Course" class="btn btn-primary">
                </div>

                </form>

            </div>


        </div>
       </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    <!-- End custom js for this page -->
    </div>
  </body>
</html>