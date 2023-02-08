<!DOCTYPE html>
<html lang="en">
  <head>
 
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">

    .filter{
 position: absolute;
 left: 14.5%;
 top: 10%;
 bottom: 0;
 right: 0;
 z-index: 1;
 
 overflow-x: auto;
 background: rgb(233,76,161);
background: -moz-linear-gradient(90deg, rgba(233,76,161,1) 0%, rgba(199,74,233,1) 100%);
background: -webkit-linear-gradient(90deg, rgba(233,76,161,1) 0%, rgba(199,74,233,1) 100%);
background: linear-gradient(90deg, rgba(233,76,161,1) 0%, rgba(199,74,233,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#e94ca1",endColorstr="#c74ae9",GradientType=1);

}

.center{
position: absolute;
left: 10%;
 top: 20%;
 bottom: 10%;
 right: 10%;
 border-spacing: 0;
 box-shadow: 0 2px 15px rgba(64,64,64,.7);
 border-radius: 12px 12px 0 0;
 overflow: hidden;
 



}
td , th{
 padding: 15px 20px;
 text-align: center;
 

}
th{
 background-color: #ba68c8;
 color: #fafafa;
 font-family: 'Open Sans',Sans-serif;
 font-weight: 200;
 text-transform: uppercase;

}
tr{
 width: 100%;
 background-color: #fafafa;
 font-family: 'Montserrat', sans-serif;
}

td{
color:#6B728E;
}

tr:nth-child(even){
 background-color: #eeeeee;
}
.font_size{
    position: absolute;
    top: 5%;
    left:45%;
            text-align:center;
            font-size: 40px;
            padding-top: 20px;
            color:black;
            font-weight: 600;
        }

        .img_size{
            max-width: 40px;
            max-height: 40px;
        }
        table{
  width: 80%; /* decrease the width of the table */
}

td, th{
  padding: 14px; /* decrease the padding */
  font-size: 16px; /* decrease the font-size */
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

              <button type="button" class="close" data_dismiss="alert" aria-hidden="true">x</button>
              
              {{session()->get('message')}}

            </div>

            @endif

         
<div  class="filter">
  <h2 class="font_size">All Courses</h2>
            <table class="center tabelaa">

                <tr class="th_color">
                    <th class="col1">Course Title</th>
                    <th class="th_deg">Category</th>
                    <th class="th_deg">Description</th>
                    <th class="th_deg">Cover</th>
                    <th class="th_deg">Images</th>
                    <th class="th_deg">Edit</th>
                    <th class="th_deg">Delete</th>
                </tr>

                @foreach($course as $course)
                <tr>
                    <td>{{$course->title}}</td>
                    <td>{{$course->category}}</td>
                    <td>{{$course->description}}</td>
                    <td >
                        <img class="img_size" src="/course/{{$course->cover}}">
                    </td>
                    <td >
                        <a class="btn btn-success" href="{{route('course.images', $course->id)}}">View</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" onclick="return confirm('Confirm Deletion')" href="{{url('delete_course', $course->id)}}">Delete</a>
                    </td>
                    <td>
                        <a class="btn btn-success" href="{{url('update_course',$course->id)}}">Edit</a>
                    </td>
                  </tr>

                @endforeach
            </table>
</div>
        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    <!-- End custom js for this page -->
  </body>