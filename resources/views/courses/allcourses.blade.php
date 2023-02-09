<!-- Start Blog Area -->
    <section class="blog-area ptb-100">
      <div class="container">
        <div class="row">

        @foreach($courses as $course)
          <div class="col-lg-6 col-md-6">
            <div class="single-blog-post">
              <div class="post-image">
                <a href="{{url('course_details', $course->id)}}">
                  <img src="course/{{$course->cover}}" />
                </a>
              </div>

              <div class="post-content">
                <span class="category">{{$course->category}}</span>
                <h3>
                  <a href="{{url('course_details', $course->id)}}"
                    >{{$course->title}}</a
                  >
                </h3>
                <a href="{{url('course_details', $course->id)}}" class="details-btn">Read Story</a>
              </div>
            </div>
          </div>
        @endforeach

          

              

          

          
        </div>
      </div>
    </section>
<!-- End Blog Area -->