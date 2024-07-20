@extends('index.layout')
@section('title','testimonials')
@section('content')

  <div class="hero inner-page" style="background-image: url('images/hero_1_a.jpg');">
    <div class="container">
      <div class="row align-items-end ">
        <div class="col-lg-5">

          <div class="intro">
            <h1><strong>Testimonials</strong></h1>
            <div class="custom-breadcrumbs"><a href="{{route('testimonials')}}">Home</a> <span class="mx-2">/</span> <strong>Testimonials</strong></div>
          </div>

        </div>
      </div>
    </div>
  </div>
    
  <div class="site-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <h2 class="section-heading"><strong>Testimonials</strong></h2>
          <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>    
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="testimonial-2">
            <blockquote class="mb-4">
              <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
            </blockquote>
            <div class="d-flex v-card align-items-center">
              <img src="images/person_1.jpg" alt="Image" class="img-fluid mr-3">
              <div class="author-name">
                <span class="d-block">Mike Fisher</span>
                <span>Owner, Ford</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
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
        <div class="col-lg-4 mb-4">
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
        </div>

        <div class="col-lg-4 mb-4">
          <div class="testimonial-2">
            <blockquote class="mb-4">
              <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
            </blockquote>
            <div class="d-flex v-card align-items-center">
              <img src="images/person_1.jpg" alt="Image" class="img-fluid mr-3">
              <div class="author-name">
                <span class="d-block">Mike Fisher</span>
                <span>Owner, Ford</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
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
        <div class="col-lg-4 mb-4">
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
        </div>

        <div class="col-lg-4 mb-4">
          <div class="testimonial-2">
            <blockquote class="mb-4">
              <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
            </blockquote>
            <div class="d-flex v-card align-items-center">
              <img src="images/person_1.jpg" alt="Image" class="img-fluid mr-3">
              <div class="author-name">
                <span class="d-block">Mike Fisher</span>
                <span>Owner, Ford</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
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
        <div class="col-lg-4 mb-4">
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
        </div>
      </div>
    </div>
  </div>

  <!-- start footer Rent a car now -->
    @include('index.footer_rentCarNow')
  <!-- end  footer Rent a car now -->

@endsection

  

 

