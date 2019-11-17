@extends('layouts.customer.app')


@section('content')


<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container" style="    margin-top: 49px;">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
						</div>

								@foreach($errors->all() as $error)
									{{ $error }}
								@endforeach

								@if(session()->has('message'))
									{{ session()->get('message')}}
								@endif


						<form method="post" action="{{route('customer.book.store')}}">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Name</span>
										<input class="form-control" name="name" type="text" placeholder="Enter your name">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Email</span>
										<input class="form-control" name="email" type="email" placeholder="Enter your email">
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Phone</span>
								<input class="form-control" type="tel" name="phone" placeholder="Enter your phone number">
							</div>
							<div class="form-group">
								<span class="form-label">Pickup Location</span>
								<input class="form-control" type="text" name="location" placeholder="Enter Location">
							</div>
							<div class="form-group">
								<span class="form-label">Destination</span>
								<input class="form-control" type="text" name="destination" placeholder="Enter Location">
							</div>
							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
										<span class="form-label">Pickup Date</span>
										<input class="form-control" name="date" type="date" required>
									</div>
								</div>
								<div class="col-sm-7">
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Hour</span>
												<select class="form-control">
													<option name="date">1</option>
													<option name="date">2</option>
													<option name="date">3</option>
													<option name="date">4</option>
													<option name="date">5</option>
													<option name="date">6</option>
													<option name="date">7</option>
													<option name="date">8</option>
													<option name="date">9</option>
													<option name="date">10</option>
													<option name="date">11</option>
													<option name="date">12</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Min</span>
												<select class="form-control">
													<option name="date">05</option>
													<option name="date">10</option>
													<option name="date">15</option>
													<option name="date">20</option>
													<option name="date">25</option>
													<option name="date">30</option>
													<option name="date">35</option>
													<option name="date">40</option>
													<option name="date">45</option>
													<option name="date">50</option>
													<option name="date">55</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">AM/PM</span>
												<select class="form-control">
													<option name="date">AM</option>
													<option name="date">PM</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-btn">
								<button class="submit-btn" name="submit">Book Now</button>
							</div>

							 {{ csrf_field() }}
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
@endsection