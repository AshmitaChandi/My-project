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
							<form action="#" class="search-property-1">
		        		<div class="row">
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<label for="#">Destination</label>
		          				<div class="form-field">
		          					<div class="icon"><span class="ion-ios-search"></span></div>
				                <input type="text" class="form-control" placeholder="Search place">
				              </div>
			              </div>
		        			</div>
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<label for="#">Check-in date</label>
		        					<div class="form-field">
		          					<div class="icon"><span class="ion-ios-calendar"></span></div>
				                <input type="text" class="form-control checkin_date" placeholder="Check In Date">
				              </div>
			              </div>
		        			</div>
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<label for="#">Check-out date</label>
		        					<div class="form-field">
		          					<div class="icon"><span class="ion-ios-calendar"></span></div>
				                <input type="text" class="form-control checkout_date" placeholder="Check Out Date">
				              </div>
			              </div>
		        			</div>
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<label for="#">Price Limit</label>
		        					<div class="form-field">
		          					<div class="select-wrap">
		                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                      <select name="" id="" class="form-control">
		                        <option value="">1,000</option>
		                        <option value="">20,000</option>
		                        <option value="">3000</option>
		                        <option value="">4000</option>
		                        <option value="">5000</option>
		                        <option value="">6000</option>
		                        <option value="">7000</option>
		                        <option value="">8000</option>
		                        <option value="">9000</option>
		                        <option value="">10,000</option>
		                      </select>
		                    </div>
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
    @endsection
    