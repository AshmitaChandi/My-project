@extends('layouts.customer.app')


@section('content')


<section class="ftco-section bg-light" id="blog-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Blogs</span>
            <h2 class="mb-4">Our Blog</h2>
            <p>Far far away, behind the word mountains, far from the countries.</p>
          </div>
        </div>
        <div class="row d-flex">
          @foreach($blogs as $blog)
          <div class="col-md-6 col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="single.html"><img src="{{ asset('uploads/blog_images/'. $blog->image) }}" class="block-20">
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
                <h3 class="heading"><a href="single.html">{{ $blog->name }}</a></h3>
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
          @endforeach
          
        </div>
      </div>
    </section>
    @endsection