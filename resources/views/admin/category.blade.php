
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
        .div_center
        {
            text-align: center;
            padding-top: 40px;
        }

        .h2_font
        {
            
            padding-bottom: 40px;
            font-family: 'Open Sans',Sans-serif;
            text-align:center;
            font-size: 40px;
            color: #fafafa;
            font-weight: 1000;
        }

        .input_color
        {
            color:black;
        }

        .center
        {
          margin:auto;
          width: 50%;
          text-align:center;
          margin-top: 30px;
          border:3px solid white;
        }
        html, body, .container-scroller {
  height: 100%;
  margin: 0;
  padding: 0;
}

.filter {
  height: 100%;
  background: #883e94;
  width: auto;
  overflow-y: auto;
}

tr{
 width: 100%;
 background-color: #fafafa;
 font-family: 'Montserrat', sans-serif;
 height: 60px;
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
          
        .th_color{
 background-color: #ba68c8;
 color: #fafafa;
 font-family: 'Open Sans',Sans-serif;
 font-weight: 200;
 text-transform: uppercase;

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
          <div class="filter">

            @if(session()->has('message'))

            <div class="alert alert-success">

              <button type="button" class="close" data_dismiss="alert" aria-hidden="true">x</button>
              
              {{session()->get('message')}}

            </div>

            @endif

            <div class="div_center">
                <h2 class="h2_font">Add Category</h2>

                <form action="{{url('/add_category')}}" method="POST">

                @csrf

                <input class="input_color" type="text" name="category" placeholder="Write category name">
                <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                </form>
            </div>

            <table class="center">
              
              <tr class="th_color">
                <th>Category Name</th>
                <th>Action</th>
              </tr>

              @foreach($data as $data)
              <tr>
                <td>{{$data->category_name}}</td>
                <td><a onclick="return confirm('Confirm Deletion')" class="btn btn-danger" href="{{url('delete_category',$data->id)}}">Delete</a></td>
              </tr>

              @endforeach
            </table>

            </div>
        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>