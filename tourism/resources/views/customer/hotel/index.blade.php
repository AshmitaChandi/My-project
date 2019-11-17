@extends('layouts.customer.app')


@section('content')



<section class="ftco-intro img" id="hotel-section" style="background-image: url({{asset('assets/images/bg_4.jpg')}});">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center">
						<h2>Choose at 1000 Per Night Only</h2>
						<p>Explore Nepal holidays and discover the best time and places to visit.</p>
						<p class="mb-0"><a href="{{ route('customer.reserve.index') }}" class="btn btn-white px-4 py-3">Book a room now</a></p>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Hotels</span>
            <h2 class="mb-4">Find Nearest Hotel</h2>
            <p>Far far away, behind the word mountains, far from the countries.</p>
          </div>
        </div>
    		<div class="row">

          @foreach($hotels as $hotel)
    			<div class="col-md-6 col-lg-4 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<a href="hotel.html"><img src="{{ asset('uploads/hotel_images/'. $hotel->image) }}" class="img-fluid" alt="Colorlib Template"></a>
	    				</div>
	    				<div class="text">
	    					<h4 class="price"><span class="old-price mr-2">1500</span>2000</h4>
	    					<span>3 nights</span>
	    					<h3><a href="hotel.html">{{ $hotel->name }}</a></h3>
	    					<div class="star d-flex clearfix">
	    						<div class="mr-auto float-left">
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
	    						</div>
	    						<div class="float-right">
	    							<span class="rate"><a href="#">(120)</a></span>
	    						</div>
	    					</div>
	    				</div>
	    				<!-- <a href="images/hotel-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a> -->
    				</div>
    			</div>
          @endforeach
        </div>
      </div>
    			
    		<div class="row justify-content-center pb-5 pt-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Rooms &amp; Suites</span>
            <h2 class="mb-4">Nepal Best Rooms Offer</h2>
            <p>Explore Nepal holidays and discover the best time and places to visit.</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12 room-wrap">
    				<div class="row">
    					<div class="col-md-7 d-flex ftco-animate">
    						<div class="img align-self-stretch" style="background-image: url({{asset('assets/images/room1.jpg')}});"></div>
    					</div>
    					<div class="col-md-5 ftco-animate">
    						<div class="text py-5">
    							<h3><a href="hotel-single.html">Hotel Barahi</a></h3>
    							<p class="pos">from <span class="price">3000</span>/night</p>
    							<p>Nepal is a small and beautiful landlocked country rich in it's culture, natural beauties, people, places and so on. It is between the two big countries India and China. It can be called as the roof of the world as the highest peak Mount Everest (Sagarmatha) is in this country reflecting it's glory. Here we can find people of various culture, religions, traditions and so on.</p>
    							<p>
    								<a href="#" class="btn btn-secondary">Details</a>
    								<a href="{{ route('customer.reserve.index') }}" class="btn btn-primary">Reserve now</a> 
    								<a href="{{ route('customer.book.index') }}" class="btn btn-primary">Book now</a></p>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-12 room-wrap room-wrap-thumb mt-4">
    				<div class="row">
    					<div class="col-md-3 ftco-animate">
    						<a href="#" class="d-flex thumb">
	    						<div class="img align-self-stretch" style="background-image: url({{asset('assets/images/room2.jpg')}});"></div>
	    						<div class="text pl-3 py-3">
	    							<h3>Balcony Room</h3>
	    						</div>
    						</a>
    					</div>
    					<div class="col-md-3 ftco-animate">
    						<a href="#" class="d-flex thumb">
	    						<div class="img align-self-stretch" style="background-image: url({{asset('assets/images/room3.jpg')}});"></div>
	    						<div class="text pl-3 py-3">
	    							<h3>Balcony Room</h3>
	    						</div>
    						</a>
    					</div>
    					<div class="col-md-3 ftco-animate">
    						<a href="#" class="d-flex thumb">
	    						<div class="img align-self-stretch" style="background-image: url({{asset('assets/images/room4.jpg')}});"></div>
	    						<div class="text pl-3 py-3">
	    							<h3>Balcony Room</h3>
	    						</div>
    						</a>
    					</div>
    					<div class="col-md-3 ftco-animate">
    						<a href="#" class="d-flex thumb">
	    						<div class="img align-self-stretch" style="background-image: url({{asset('assets/images/room1.jpg')}});"></div>
	    						<div class="text pl-3 py-3">
	    							<h3>Balcony Room</h3>
	    						</div>
    						</a>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <section class="ftco-section testimony-section">
    	<img src="{{asset('assets/images/blob-shape-2.svg')}}" class="svg-blob" alt="Colorlib Free Template">
    	<img src="{{asset('assets/images/blob-shape-2.svg')}}" class="svg-blob-2" alt="Colorlib Free Template">
      <div class="container">
        <div class="row justify-content-center pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading">Read testimonials</span>
            <h2 class="mb-4">What Client Says</h2>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url({{asset('assets/images/art.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries.</p>
                    <p class="name">Ashmita Chandi</p>
                    <span class="position">Artist</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url({{asset('assets/images/art1.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries.</p>
                    <p class="name">John Maharjan</p>
                    <span class="position">Artist</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url({{asset('assets/images/art.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries.</p>
                    <p class="name">Ashmita Chandi</p>
                    <span class="position">Artist</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url({{asset('assets/images/art1.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries.</p>
                    <p class="name">John Maharjan</p>
                    <span class="position">Artist</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url({{asset('assets/images/art.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries.</p>
                    <p class="name">Ashmita Chandi</p>
                    <span class="position">Artist</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endsection