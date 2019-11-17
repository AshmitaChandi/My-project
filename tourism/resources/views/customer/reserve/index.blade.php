@extends('layouts.customer.app')


@section('content')


<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
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

						<form method="post" action="{{route('customer.reserve.store')}}">
							<div class="form-group">
								<input class="form-control" type="text" name="destination" placeholder="Location">
								<span class="form-label">Destination</span>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="date" name="checkin">
										<span class="form-label">Check In</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="date" name="checkout">
										<span class="form-label">Check out</span>
									</div>
								</div>
							</div>

							
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<select class="form-control" required>
											<option  name="date" value="" selected hidden> no of rooms</option>
											<option name="date">1</option>
											<option name="date">2</option>
											<option name="date">3</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Rooms</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<select class="form-control" required>
											<option name="date" value="" selected hidden> no of adults</option>
											<option name="date">1</option>
											<option name="date">2</option>
											<option name="date">3</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Adults</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<select class="form-control" required>
											<option name="date" value="" selected hidden> no of children</option>
											<option name="date">0</option>
											<option name="date">1</option>
											<option name="date">2</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Children</span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="email" name="email" placeholder="Enter your Email">
										<span class="form-label">Email</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="tel" name="phone" placeholder="Enter you Phone">
										<span class="form-label">Phone</span>
									</div>
								</div>
							</div>
							<div class="form-btn">
								<button class="submit-btn">Reserve Now</button>
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