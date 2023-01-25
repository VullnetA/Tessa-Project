<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">
        .title_deg
        {
            text-align: center;
            font-size: 25px;
            font-weight: bold;
            padding-bottom: 40px;
        }

        .table_deg
        {
            border: 2px solid white;
            width: 100%;
            margin: auto;
            text-align: center;
        }

        .th_deg
        {
            background-color: skyblue
        }

        .img_size
        {
            width:100px;
            height:100px;
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

        <h1 class="title_deg">All Orders</h1>

              <div style="padding-left: 400px; padding-bottom: 30px;">
                  <form action="{{url('search')}}" method="get">

                      @csrf

                      <input type="text" style="color: black;" name="search" placeholder="Search">

                      <input type="submit" value="Search" class="btn btn-outline-primary">
                  </form>


              </div>

        <table class="table_deg">
            <tr class="th_deg">
                <th>Name</th>
                <th>Surname</th>
                <th>Company</th>
                <th>City</th>
                <th>Postcode</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Payment status</th>
                <th>Delivery Status</th>
                <th>Image</th>
            </tr>

            @forelse($order as $order)
            <tr>
                <td>{{$order->firstname}}</td>
                <td>{{$order->lastname}}</td>
                <td>{{$order->company}}</td>
                <td>{{$order->city}}</td>
                <td>{{$order->postcode}}</td>
                <td>{{$order->address}}</td>
                <td>{{$order->phone}}</td>
                <td>{{$order->email}}</td>
                <td>{{$order->product_title}}</td>
                <td>{{$order->quantity}}</td>
                <td>{{$order->price}}</td>
                <td>{{$order->payment_status}}</td>
                <td>{{$order->delivery_status}}</td>
                <td>
                    <img class="img_size" src="/product/{{$order->image}}" alt="">
                </td>
            </tr>

            @empty
                <tr>
                    <td colspan="16">
                        No Data Found
                    </td>
                </tr>
            @endforelse
        </table>

            </div>
      </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    <!-- End custom js for this page -->
    </div>
  </body>
</html>
