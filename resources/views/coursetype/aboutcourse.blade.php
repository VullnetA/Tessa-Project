<!-- Start Course Details Area -->
<section class="product-details-area pt-100 pb-70">
      <div class="container">
        <div class="row">
        
          <div class="col-lg-5 col-md-12">
            <div class="products-details-image">
              <ul class="products-details-image-slides">
              @foreach($images as $image)
                <li><img src="/course/{{$image->image}}" alt="image" /></li>
                @endforeach
              </ul>

              <div class="slick-thumbs">
                <ul>
                @foreach($images as $image)
                  <li>
                    <img src="/course/{{$image->image}}" alt="image" />
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-7 col-md-12">
            <div class="products-details-desc">
              <div class="container">
                <div class="textarea">
                  <h2>{{$course->title}}</h2>
                  <p>
                    {{$course->description}}
                  </p>

                  <a class="contact hover-underline-animation" href="/contact">Contact us here for more information</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Course Details Area -->