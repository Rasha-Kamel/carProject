@extends('index.layout')
@section('title','Index')
@section('content')
 
  <div class="site-wrap" id="home-section">

     
      <div class="hero" style="background-image: url('images/hero_1_a.jpg');">
        
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-10">

              <div class="row mb-5">
                <div class="col-lg-7 intro">
                  <h1><strong>Rent a car</strong> is within your finger tips.</h1>
                </div>
              </div>
              
              <form class="trip-form">
                
                <div class="row align-items-center">
                  
                  <div class="mb-3 mb-md-0 col-md-3">
                    <select name="" id="" class="custom-select form-control">
                      <option value="">Select Type</option>
                      @foreach($categories as $category)
                      <option value="">{{$category->category_name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="mb-3 mb-md-0 col-md-3">
                    <div class="form-control-wrap">
                      <input type="text" id="cf-3" placeholder="Pick up" class="form-control datepicker px-3">
                      <span class="icon icon-date_range"></span>

                    </div>
                  </div>
                  <div class="mb-3 mb-md-0 col-md-3">
                    <div class="form-control-wrap">
                      <input type="text" id="cf-4" placeholder="Drop off" class="form-control datepicker px-3">
                      <span class="icon icon-date_range"></span>
                    </div>
                  </div>
                  <div class="mb-3 mb-md-0 col-md-3">
                    <input type="submit" value="Search Now" class="btn btn-primary btn-block py-3">
                  </div>
                </div>
                
              </form>

            </div>
          </div>
        </div>
      </div>
  


      <div class="site-section">
        <div class="container">
          <h2 class="section-heading"><strong>How it works?</strong></h2>
          <p class="mb-5">Easy steps to get you started</p>    

          <div class="row mb-5">
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="step">
                <span>1</span>
                <div class="step-inner">
                  <span class="number text-primary">01.</span>
                  <h3>Select a car</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, laboriosam!</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="step">
                <span>2</span>
                <div class="step-inner">
                  <span class="number text-primary">02.</span>
                  <h3>Fill up form</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, laboriosam!</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="step">
                <span>3</span>
                <div class="step-inner">
                  <span class="number text-primary">03.</span>
                  <h3>Payment</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, laboriosam!</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 mx-auto">
              <a href="#" class="d-flex align-items-center play-now mx-auto">
                <span class="icon">
                  <span class="icon-play"></span>
                </span>
                <span class="caption">Video how it works</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="site-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 text-center order-lg-2">
              <div class="img-wrap-1 mb-5">
                <img src="images/feature_01.png" alt="Image" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-4 ml-auto order-lg-1">
              <h3 class="mb-4 section-heading"><strong>You can easily avail our promo for renting a car.</strong></h3>
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, explicabo iste a labore id est quas, doloremque veritatis! Provident odit pariatur dolorem quisquam, voluptatibus voluptates optio accusamus, vel quasi quidem!</p>
              
              <p><a href="#" class="btn btn-primary">Meet them now</a></p>
            </div>
          </div>
        </div>
      </div>

      

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h2 class="section-heading"><strong>Car Listings</strong></h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>    
          </div>
        </div>
        

        <div class="row">
        @for($i=0; $i<6; $i++)
          <div class="col-md-6 col-lg-4 mb-4">

            <div class="listing d-block  align-items-stretch">
              <div class="listing-img h-100 mr-4">
              <!-- $img={{$cars[$i]['image']}} -->
                <img src="/index/images/{{$cars[$i]['image']}}" alt="Image" class="img-fluid">
              </div>
              <div class="listing-contents h-100">
                <!-- <h3>{{$cars[$i]['created_at']}}</h3> -->
                <h3>{{$cars[$i]['title']}}</h3>
                <div class="rent-price">
                  <strong>${{$cars[$i]['price']}}</strong><span class="mx-1">/</span>day
                </div>
                <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                  <div class="listing-feature pr-4">
                    <span class="caption">Luggage:</span>
                    <span class="number">{{$cars[$i]['luggage']}}</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Doors:</span>
                    <span class="number">{{$cars[$i]['doors']}}</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Passenger:</span>
                    <span class="number">{{$cars[$i]['passengers']}}</span>
                  </div>
                </div>
                <div style="overflow: hidden; white-space: nowrap;">
                  <p >{{$cars[$i]['content']}}</p>
                  <p><a href="{{route('single',$cars[$i]['id'])}}" class="btn btn-primary btn-sm">Rent Now</a></p>
                </div>
              </div>

            </div>
          </div>
        @endfor
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h2 class="section-heading"><strong>Features</strong></h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>    
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 mb-5">
            <div class="service-1 dark">
              <span class="service-1-icon">
                <span class="icon-home"></span>
              </span>
              <div class="service-1-contents">
                <h3>Lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                <p class="mb-0"><a href="#">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-5">
            <div class="service-1 dark">
              <span class="service-1-icon">
                <span class="icon-gear"></span>
              </span>
              <div class="service-1-contents">
                <h3>Lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                <p class="mb-0"><a href="#">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-5">
            <div class="service-1 dark">
              <span class="service-1-icon">
                <span class="icon-watch_later"></span>
              </span>
              <div class="service-1-contents">
                <h3>Lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                <p class="mb-0"><a href="#">Learn more</a></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-5">
            <div class="service-1 dark">
              <span class="service-1-icon">
                <span class="icon-verified_user"></span>
              </span>
              <div class="service-1-contents">
                <h3>Lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                <p class="mb-0"><a href="#">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-5">
            <div class="service-1 dark">
              <span class="service-1-icon">
                <span class="icon-video_library"></span>
              </span>
              <div class="service-1-contents">
                <h3>Lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                <p class="mb-0"><a href="#">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-5">
            <div class="service-1 dark">
              <span class="service-1-icon">
                <span class="icon-vpn_key"></span>
              </span>
              <div class="service-1-contents">
                <h3>Lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                <p class="mb-0"><a href="#">Learn more</a></p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    
     <!-- start testimonials footer -->
     <div class="site-section bg-light">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <h2 class="section-heading"><strong>Testimonials</strong></h2>
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>    
            </div>
          </div>
          <div class="row">
            @for($i=0; $i<3; $i++)
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="testimonial-2">
                <blockquote class="mb-4">
                  <p>{{$testimonials[$i]['content']}}</p>
                </blockquote>
                <div class="d-flex v-card align-items-center">
                  <img src="/index/images/{{$testimonials[$i]['image']}}" alt="Image" class="img-fluid mr-3">
                  <div class="author-name">
                    <span class="d-block">{{$testimonials[$i]['name']}} </span>
                    <span>Owner, {{$testimonials[$i]['position']}}</span>
                  </div>
                </div>
              </div>
            </div>
            @endfor
            <!-- <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="testimonial-2">
                <blockquote class="mb-4">
                  <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
                </blockquote>
                <div class="d-flex v-card align-items-center">
                  <img src="images/person_2.jpg" alt="Image" class="img-fluid mr-3">
                  <div class="author-name">
                    <span class="d-block">Jean Stanley</span>
                    <span>Traveler</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="testimonial-2">
                <blockquote class="mb-4">
                  <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
                </blockquote>
                <div class="d-flex v-card align-items-center">
                  <img src="images/person_3.jpg" alt="Image" class="img-fluid mr-3">
                  <div class="author-name">
                    <span class="d-block">Katie Rose</span>
                    <span >Customer</span>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
      <!-- end testimonials footer -->

    <!-- start footer Rent a car now -->
     <!-- @include('index.footer_rentCarNow') -->
    <!-- end  footer Rent a car now -->



@endsection

