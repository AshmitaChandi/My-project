@extends('layouts.customer.app')


@section('content')


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

    			@foreach($packages as $package)
	    			<div class="col-md-6 col-lg-4 ftco-animate">
	    				<div class="project">
	    					<div class="img">
	    						<div class="vr"></div>
			    				<a href="tourism.html"><img src="{{ asset('uploads/package_images/'. $package->image) }}" class="img-fluid" alt="Colorlib Template"></a>
		    				</div>
		    				<div class="text">
		    					<h4 class="price"><span class="old-price mr-2">12000</span>10000</h4>
	    					<span>5 night 6 Days</span>
		    					<h3><a href="destination.html">{{ $package->name }}</a></h3>
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
		    				<!-- <a href="{{ asset('uploads/package_images/'. $package->image) }}" class="icon image-popup d-flex justify-content-center align-items-center">
		    					<span class="icon-expand"></span>
		    				</a> -->
	    				</div>
	    			</div>
    			@endforeach
    			
    		</div>
    	</div>
    </section>
@endsection