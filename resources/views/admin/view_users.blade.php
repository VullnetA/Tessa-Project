<x-app-layout>
    
</x-app-layout>
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
            margin-top: 40px;
        }

        .font_size{
            text-align:center;
            font-size: 40px;
            padding-top: 20px;
        }

        .img_size{

        }

        .th_color{
            background: skyblue;
        }

        .th_deg{
            padding: 10px;
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

          <h2 class="font_size">All Users</h2>

            <table class="center">

                <tr class="th_color">
                    <th class="th_deg">User id</th>
                    <th class="th_deg">Name</th>
                    <th class="th_deg">Email</th>
                    <th class="th_deg">Usertype</th>
                    <th class="th_deg">Phone</th>
                    <th class="th_deg">Address</th>
                    <th class="th_deg">Delete</th>
                    <th class="th_deg">Edit</th>
                    <th class="th_deg">Approve Account</th>
                    <th class="th_deg">Send Email</th>
                </tr>

                @foreach($User as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->usertype}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->address}}</td>
                    <td>
                        <a class="btn btn-danger" onclick="return confirm('Confirm Deletion')" href="{{url('delete_user',$user->id)}}">Delete</a>
                    </td>
                    <td>
                        <a class="btn btn-success" href="{{url('update_user',$user->id)}}">Edit</a>
                    </td>
                    <td>
                      <a class="btn btn-success" href="{{url('approve_account',$user->id)}}">Approve Account</a>

                    </td>
                    <td>
                      <a class="btn btn-info" href="{{url('send_email',$user->id)}}">Send Email</a>
                    </td>
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