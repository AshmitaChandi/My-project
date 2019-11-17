@extends('layouts.customer.app')


@section('content')


<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    	<div class="container">
    		<div class="row no-gutters d-flex">
    			<div class="col-md-6 col-lg-5 d-flex">
    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url({{asset('assets/images/about.jpg')}});">
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-7 px-lg-5 py-md-5 bg-darken" style="margin-top: 88px;">
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
    
    @endsection