@extends('layouts.customer.app')


@section('content')


	<section id="home-section" class="hero">
	  	<img src="{{asset('assets/images/blob-shape-3.svg')}}" class="svg-blob" alt="Colorlib Free Template">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third order-md-last">
	          		<div class="img" style="background-image:url({{asset('assets/images/1.jpg')}});">
	          			<div class="overlay"></div>
 	          		</div>
	          		<div class="bg-primary">
		          		<div class="vr"><span class="pl-3 py-4" style="background-image: url({{asset('assets/images/1.jpg')}});">Nepal</span></div>
	          		</div>
	          	</div>
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading pl-5">Discover Nepal</span>
			            <h1 class="mb-4 mt-3">Explore Your Travel Destinations like never before.</h1>
			            <p> Nepal is a landlocked country in South Asia. It is located mainly in the Himalayas, but also includes parts of the Indo-Gangetic Plain. </p>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>

	      <div class="slider-item">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third order-md-last">
	          		<div class="img" style="background-image:url({{asset('assets/images/bungy1.jpg')}});">
	          			<div class="overlay"></div>
	          		</div>
	          		<div class="vr"><span class="pl-3 py-4" style="background-image: url({{asset('assets/images/bungy1.jpg')}});">Nepal</span></div>
	          	</div>
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
			            <h1 class="mb-4 mt-3">Never Stop Exploring</span></h1>
			            <p>Explore Nepal holidays and discover the best time and places to visit.</p>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
	    </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
    	<div class="container">
    		<div class="row justify-content-center pb-0 pb-mb-5 pt-5 pt-md-0">
          <div class="col-md-12 heading-section ftco-animate">
          	<span class="subheading">Sexy &amp; Healthy</span>
            <h2 class="mb-4">Where do you want to go?</h2>
            <p>Far far away, behind the word mountains, far from the countries.</p>
          </div>
        </div>
	    	<div class="row">
					<div class="col-md-12">
						<div class="search-wrap-1 ftco-animate p-4">
							<form action="{{ route('customer.package.search') }}" method="post" class="search-property-1">
								{!! csrf_field() !!}
		        		<div class="row">
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<label for="#">Package Name</label>
		          				<div class="form-field">
		          					<div class="icon"><span class="ion-ios-search"></span></div>
				                <input name="search" type="text" class="form-control" placeholder="Search place">
				              </div>
			              </div>
		        			</div>
		        			
		        			<div class="col-lg align-self-end">
		        				<div class="form-group">
		        					<div class="form-field">
				                <input type="submit" value="Search" class="form-control btn btn-primary">
				              </div>
			              </div>
		        			</div>
		        		</div>
		        	</form>
		        </div>
					</div>
	    	</div>
	    </div>
    </section>
		
		<section class="ftco-section ftco-services-2" id="services-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Sexy &amp; Healthy</span>
            <h2 class="mb-4">Our Services</h2>
            <p>Explore Your Travel Destinations like never before.</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-gliding"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Activities</h3>
                <p>Nepal is a landlocked country in South Asia. It is located mainly in the Himalayas, but also includes parts of the Indo-Gangetic Plain.</p>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-world"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Travel Arrangement</h3>
                <p>Nepal is a landlocked country in South Asia. It is located mainly in the Himalayas, but also includes parts of the Indo-Gangetic Plain.</p>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-tour-guide"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Booking Bus Ticket</h3>
                <p>Nepal is a landlocked country in South Asia. It is located mainly in the Himalayas, but also includes parts of the Indo-Gangetic Plain.</p>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-map-of-roads"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Reservation Of Hotels</h3>
                <p>Nepal is a landlocked country in South Asia. It is located mainly in the Himalayas, but also includes parts of the Indo-Gangetic Plain.</p>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>

		<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    	<div class="container"   style="    margin-top: 88px;">
    		<div class="row no-gutters d-flex">
    			<div class="col-md-6 col-lg-5 d-flex">
    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url({{asset('assets/images/about.jpg')}});">
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-7 px-lg-5 py-md-5 bg-darken" style="    margin-top: 88px;">
    				<div class="py-md-5">
	    				<div class="row justify-content-start pb-3">
			          <div class="col-md-12 heading-section ftco-animate p-5 p-lg-0">
			          	<span class="subheading">Get in touch with us</span>
			            <h2 class="mb-4">Get Best Travel Deals</h2>
			            <p> Nepal is a landlocked country in South Asia. It is located mainly in the Himalayas, but also includes parts of the Indo-Gangetic Plain.</p>
			            <p>Nepal is a small and beautiful landlocked country rich in it's culture, natural beauties, people, places and so on. It is between the two big countries India and China.</p>
			            <p>It can be called as the roof of the world as the highest peak Mount Everest (Sagarmatha) is in this country reflecting it's glory. Here we can find people of various culture, religions, traditions and so on.</p>
			            <p>
			            	<a href="{{ route('customer.book.index') }}" class="btn btn-primary py-3 px-4">Book now</a> <a href="{{ route('customer.reserve.index') }}" class="btn btn-primary py-3 px-4">Reserve now</a> <a href="{{ route('customer.contact.index') }}" class="btn btn-white py-3 px-4">Contact us</a>
			            </p>
			          </div>
			        </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-intro img" id="destination-section" style="background-image: url({{asset('assets/images/images-7.jpg')}});">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center">
						<h2>Choose the Perfect Destination</h2>
						<p>Explore Your Travel Destinations like never before.</p>
						
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Best Destination</span>
            <h2 class="mb-4">Best Place to Travel</h2>
            <p>Far far away, behind the word mountains, far from the countries.</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-6 col-lg-4 ftco-animate">
    				<div class="project">
    					<div class="img">
    						<div class="vr"></div>
		    				<a href="destination.html"><img src="{{asset('assets /images/bungy1.jpg')}}" class="img-fluid" alt="Colorlib Template"></a>
	    				</div>
	    				<div class="text">
	    					<h4 class="price"><span class="old-price mr-2">15000</span>14000</h4>
	    					<span>4 nights 5 Days Tour</span>
	    					<h3><a href="destination.html">Pokhara,Nepal</a></h3>
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
	    				<a href="images/destination-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-4 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<a href="destination.html"><img src="{{asset('assets/images/download.jpg')}}" class="img-fluid" alt="Colorlib Template"></a>
	    				</div>
	    				<div class="text">
	    					<h4 class="price">8500</h4>
	    					<span>4 Days Tour</span>
	    					<h3><a href="destination.html">Manakamana, Nepal</a></h3>
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
	    				<a href="images/destination-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-4 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<a href="destination.html"><img src="{{asset('assets/images/images-6.jpg')}}" class="img-fluid" alt="Colorlib Template"></a>
	    				</div>
	    				<div class="text">
	    					<h4 class="price">6000</h4>
	    					<span>15 Days Tour</span>
	    					<h3><a href="destination.html">Nepal</a></h3>
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
	    				<a href="images/destination-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-4 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<a href="destination.html"><img src="{{asset('assets/images/swayambhu.PNG')}}" class="img-fluid" alt="Colorlib Template"></a>
	    				</div>
	    				<div class="text">
	    					<h4 class="price">5000</h4>
	    					<span>5 Days Tour</span>
	    					<h3><a href="destination.html">Swayambhu, Nepal</a></h3>
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
	    				<a href="images/destination-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-4 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<a href="destination.html"><img src="{{asset('assets/images/1.jpg')}}" class="img-fluid" alt="Colorlib Template"></a>
	    				</div>
	    				<div class="text">
	    					<h4 class="price">10000</h4>
	    					<span>3 Days Tour</span>
	    					<h3><a href="destination.html">Climbing,Nepal</a></h3>
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
	    				<a href="images/destination-5.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-4 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<a href="destination.html"><img src="{{asset('assets/images/cap.PNG')}}" class="img-fluid" alt="Colorlib Template"></a>
	    				</div>
	    				<div class="text">
	    					<h4 class="price">8000</h4>
	    					<span>3 Days Tour</span>
	    					<h3><a href="destination.html">Lumbini,Nepal</a></h3>
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
	    				<a href="images/destination-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

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
          	<span class="subheading">Suggested Hotel</span>
            <h2 class="mb-4">Find Nearest Hotel</h2>
            <p>Far far away, behind the word mountains, far from the countries.</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-6 col-lg-4 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<a href="uploads/hotel_images/1556814473_92138598"><img src="{{asset('assets/images/92138598.jpg')}}" class="img-fluid" alt="Colorlib Template"></a>
	    				</div>
	    				<div class="text">
	    					<h4 class="price"><span class="old-price mr-2">8000</span>7000</h4>
	    					<span>3 nights 4 days</span>
	    					<h3><a href="hotel.html">Hotel in Pokhara</a></h3>
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
	    				<a href="images/hotel-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-4 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<a href="hotel.html"><img src="{{asset('assets/images/mus.jpg')}}" class="img-fluid" alt="Colorlib Template"></a>
	    				</div>
	    				<div class="text">
	    					<h4 class="price">7000</h4>
	    					<span>3 nights 4 days</span>
	    					<h3><a href="hotel.html"> Hotel in Mustang</a></h3>
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
	    				<a href="images/hotel-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-4 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<a href=""><img src="{{asset('assets/images/42920276.jpg')}}" class="img-fluid" alt="Colorlib Template"></a>
	    				</div>
	    				<div class="text">
	    					<h4 class="price">9000</h4>
	    					<span>3 nights 4 days</span>
	    					<h3><a href="#"> Hotel in Manang</a></h3>
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
	    				<a href="images/hotel-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
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
    
    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Packages</span>
            <h2 class="mb-4">Best Place to Visit.</h2>
            <p>Far far away, behind the word mountains, far from the countries.</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-6 col-lg-4 ftco-animate">
    				<div class="project">
    					<div class="img">
    						<div class="vr"></div>
		    				<a href="destination.html"><img src="{{asset('assets /images/Capt.PNG')}}" class="img-fluid" alt="Colorlib Template"></a>
	    				</div>
	    				<div class="text">
	    					<h4 class="price"><span class="old-price mr-2">9000</span>8500</h4>
	    					<span>5 night 6 Days</span>
	    					<h3><a href="destination.html">Khumbu,Nepal</a></h3>
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
	    				<a href="images/destination-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-4 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<a href="destination.html"><img src="{{asset('assets/images/images-3.jpg')}}" class="img-fluid" alt="Colorlib Template"></a>
	    				</div>
	    				<div class="text">
	    					<h4 class="price"><span class="old-price mr-2">10000</span>9000</h4>
	    					<span>4 night 5 Days</span>
	    					<h3><a href="destination.html">Manakamana, Nepal</a></h3>
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
	    				<a href="images/destination-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-4 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<a href="destination.html"><img src="{{asset('assets/images/images-4.jpg')}}" class="img-fluid" alt="Colorlib Template"></a>
	    				</div>
	    				<div class="text">
	    					<h4 class="price"><span class="old-price mr-2">8000</span>7000</h4>
	    					<span>5 night 6 Days</span>
	    					<h3><a href="destination.html"> Boating,Nepal</a></h3>
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
	    				<a href="images/destination-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-4 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<a href="destination.html"><img src="{{asset('assets/images/swayambhu.PNG')}}" class="img-fluid" alt="Colorlib Template"></a>
	    				</div>
	    				<div class="text">
	    					<h4 class="price"><span class="old-price mr-2">5000</span>4500</h4>
	    					<span>5 night 6 Days</span>
	    					<h3><a href="destination.html">Swayambhu, Nepal</a></h3>
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
	    				<a href="images/destination-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-4 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<a href="destination.html"><img src="{{asset('assets/images/1.jpg')}}" class="img-fluid" alt="Colorlib Template"></a>
	    				</div>
	    				<div class="text">
	    					<h4 class="price"><span class="old-price mr-2">9000</span>8000</h4>
	    					<span>5 night 6 Days</span>
	    					<h3><a href="destination.html">Climbing,Nepal</a></h3>
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
	    				<a href="images/destination-5.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-4 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<a href="destination.html"><img src="{{asset('assets/images/cap.PNG')}}" class="img-fluid" alt="Colorlib Template"></a>
	    				</div>
	    				<div class="text">
	    					<h4 class="price"><span class="old-price mr-2">12000</span>10000</h4>
	    					<span>5 night 6 Days</span>
	    					<h3><a href="destination.html">Lumbini,Nepal</a></h3>
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
	    				<a href="images/destination-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section bg-light" id="blog-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Blog</span>
            <h2 class="mb-4">Our Blog</h2>
            <p>Far far away, behind the word mountains, far from the countries.</p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-6 col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="single.html" class="block-20" style="background-image: url({{asset('assets/images/hot.jpg')}});">
              </a>
              <div class="text float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">27</span>
              		</div>
              		<div class="two">
              			<span class="yr">2018</span>
              			<span class="mos">november</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="single.html">Hot Air Balloon ride in Pokhara, Nepal</a></h3>
                <p>Another interesting adventure for people who are in Pokhara or are planning to visit Pokhara, Nepal. Recently, Hot Air Balloon ride was tested in Pokhara and yes it is now another adventure opportunity for the visitors.   
                As per the experts, there are chances of observing five mountains: Annapurna, Dhaulagiri, Fishtail, Mardi and Himchuli. Before this, Ultralight was the only option to see the Annapurna mountain range from Pokhara. </p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="single.html" class="block-20" style="background-image: url({{asset('assets/images/bhan.jpg')}});">
              </a>
              <div class="text float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">25</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">march</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="single.html">Bhanyjang to Panchase Peak for Sunrise</a></h3>
                <p>Leaving Bhanyang at 4.30 am for sunrise was initially not that difficult. I’d been awake for an hour waiting for our scheduled kick-off time. My guide was ready and my friends 14 year old son didn’t need too many threats of an ice water bucket to get him out of bed after our trek up the day before.</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="single.html" class="block-20" style="background-image: url({{asset('assets/images/lan.jpg')}});">
              </a>
              <div class="text float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">30</span>
              		</div>
              		<div class="two">
              			<span class="yr">2014</span>
              			<span class="mos">march</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="single.html">Langtang Trekking</a></h3>
                <p>The trip to Langtang valley starts at Syabfrubensi, which is about 170 kilometers from Kathmandu.  Bus tickets are easily available from Machchapokhari, Balaju which costs around 500 rupees to the maximum.</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Contact</span>
            <h2 class="mb-4">Contact Us</h2>
            <p>Far far away, behind the word mountains, far from the countries.</p>
          </div>
        </div>

        <div class="row block-9">
          <div class="col-md-7 order-md-last d-flex">
            <form action="#" class="bg-light p-4 p-md-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" name="message" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-5 d-flex">
          	<div class="row d-flex contact-info mb-5">
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-map-signs"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Address</h3>
				            <p>Baneshwor,Nepal</p>
			            </div>
			          </div>
		          </div>
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-phone2"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Contact Number</h3>
				            <p><a href="tel://1234567920">9851132456</a></p>
			            </div>
			          </div>
		          </div>
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-paper-plane"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Email Address</h3>
				            <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
			            </div>
			          </div>
		          </div>
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-globe"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Website</h3>
				            <p><a href="#">yoursite.com</a></p>
			            </div>
			          </div>
		          </div>
		        </div>
          </div>
        </div>
      </div>
    </section>
		
		

		<section class="ftco-gallery">
    	<div class="container-fluid px-0">
    		<div class="row no-gutters">
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="images/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{asset('assets/images/ab.PNG')}})":>
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{asset('assets/images/images-1.jpg')}})";>
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{asset('assets/images/images-2.jpg')}});">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{asset('assets/images/images-3.jpg')}});">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="images/gallery-5.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{asset('assets/images/images-4.jpg')}});">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="images/gallery-6.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{asset('assets/images/images-5.jpg')}});">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>


@endsection