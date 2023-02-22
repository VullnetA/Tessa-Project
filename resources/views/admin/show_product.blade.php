
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">
        .center{
            margin:auto;
            width: 50%;
            border: 2px solid white;
            text-align: center;
            margin-top: 50px;
        }

        .font_size{
            text-align:center;
            font-size: 40px;
            padding-top: 20px;
        }

        .img_size{
            max-width: 55px;
            max-height: 60px;
        }

        .th_color{
            background: skyblue;
        }

        .th_deg{
            padding: 10px;
        }
        .readmore{
  max-width: 0;
 overflow: hidden;
 text-overflow: ellipsis;
 white-space: nowrap;
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
   

    font-family: 'Open Sans',Sans-serif;
            text-align:center;
            font-size: 40px;
            padding-top: 60px;
            color: #fafafa;
            font-weight: 1000;
        }
          
        .th_color{
 background-color: #ba68c8;
 color: #fafafa;
 font-family: 'Open Sans',Sans-serif;
 font-weight: 100;
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

         
<div  class="filter">
  <h2 class="font_size">All Products</h2>
            <table class="center tabelaa">

                <tr class="th_color">
                    <th class="col1">Product title</th>
                    <th class="th_deg">Description</th>
                    <th class="th_deg">Category</th>
                    <th class="th_deg">Quantity</th>
                    <th class="th_deg">Price</th>
                    <th class="th_deg">Discount price</th>
                    <th class="th_deg">Brand</th>
                    <th class="th_deg">Offer</th>
                    <th class="th_deg">HairType</th>
                    <th class="th_deg">Popular Products</th>
                    <th class="th_deg">Image</th>
                    <th class="th_deg">Delete</th>
                    <th class="th_deg">Edit</th>
                </tr>

                @foreach($product as $product)
                <tr>
                    <td>{{$product->title}}</td>
                    <td class="readmore">{{$product->description}}</td>
                    <td>{{$product->category}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->discount_price}}</td>
                    <td>{{$product->brand}}</td>
                    <td>{{$product->Offer}}</td>
                    <td>{{$product->HairType}}</td>
                    <td>{{$product->PopularProducts}}</td>
                    <td >
                        <img class="img_size" src="/product/{{$product->image}}">
                    </td>
                    <td class="th_deg">
                        <a class="btn btn-danger" onclick="return confirm('Confirm Deletion')" href="{{url('delete_product',$product->id)}}">Delete</a>
                    </td>
                    <td class="th_deg">
                        <a class="btn btn-success" href="{{url('update_product',$product->id)}}">Edit</a>
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
</html>