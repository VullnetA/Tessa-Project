<section class="cart-area ptb-100">
    <div class="container">
        <form>
            <div class="cart-table table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Unit Price</th>
                        <th scope="col">Total</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                    @foreach($order as $order)
                        <tr>
                            <td class="product-thumbnail"><img class="img_size img-orderimage" src="/product/{{$order->image}}"></td>
                            <td class="product-name">{{$order->product_title}}</td>
                            <td class="product-quantity">{{$order->quantity}}</td>
                            @if(Auth::check() && isset($order->Stylist_price) && Auth::user()->usertype=='2')

                                <td class="product-subtotal">{{$order->Stylist_price}}</td>
                                <td class="product-subtotal">{{$order->Stylist_price*$order->quantity}}</td>

                            @else
                                <td class="product-subtotal">{{$order->price}}</td>
                                <td class="product-subtotal">{{$order->price*$order->quantity}}</td>
                            @endif


                        </tr>
                        @endforeach

                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</section>
