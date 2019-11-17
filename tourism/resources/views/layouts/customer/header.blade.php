<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Tourism Nepal</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="{{ url('/') }}" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="{{ route('customer.service.index') }}" class="nav-link"><span>Services</span></a></li>
	          <li class="nav-item"><a href="{{ route('customer.about.index') }}" class="nav-link"><span>About</span></a></li>
	          <li class="nav-item"><a href="{{ route('customer.destination.index') }}" class="nav-link"><span>Destination</span></a></li>
	          <li class="nav-item"><a href="{{ route('customer.hotel.index') }}" class="nav-link"><span>Hotel</span></a></li>
	          <li class="nav-item"><a href="{{ route('customer.package.index') }}" class="nav-link"><span>Packages</span></a>
	          </li>
	          <li class="nav-item"><a href="{{ route('customer.blog.index') }}" class="nav-link"><span>Blog</span></a></li>
	          <li class="nav-item"><a href="{{ route('customer.contact.index') }}" class="nav-link"><span>Contact</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>