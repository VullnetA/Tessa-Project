<!-- Start Brand Area -->
        <div id="brand" class="brand-area ptb-70">
            <div class="container">
                <div class="section-title">
                    <h2>Shop By Brand</h2>
                </div>
                
                <div class="brand-slides owl-carousel owl-theme">
                @foreach($brand as $brand)
                    <div class="brand-item">
                        <a href="{{ url('/brand/'.$brand->brand_name) }}"><img src="assets/img/brand/{{$brand->brand_name}}.jpg" alt="image"></a>
                    </div>
                @endforeach
                    
                </div>
            </div>
        </div>
    <!-- End Brand Area -->