@extends('layouts.app')
@section('content')
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Registration</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Reservation -->
	<div class="reservation-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Registration</h2>
						<p>Fill All Mandatory Fields</p>
					</div>
					@if(session()->has('success'))
                          <div id="result" class="alert alert-success">
                              {{ session()->get('success') }}
                          </div>
                      @elseif(session()->has('fail'))
                         <div id="result" class="alert alert-danger">
                              {{ session()->get('fail') }}
                          </div>
                      @endif
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
					<div class="contact-block">
						<form action="{{ route('register.store')}}" method="POST">
						@csrf
							<div class="row">
								<div class="col-md-6">
									<!-- <h3>Book a table</h3> -->
									
									<div class="col-md-12">
										<div class="form-group">
										<label for="Firstname">Firstname</label>
											<input class="form-control" name="firstname" type="text" placeholder="Enter firstname">
											@if ($errors->has('firstname'))
												<span class="text-danger">{{ $errors->first('firstname') }}</span>
											@endif
										</div>                                 
									</div>
									
									<div class="col-md-12">
										<div class="form-group">
										<label for="Lastname">Lastname</label>
											<input  type="text" class="form-control" name="lastname" placeholder="Enter lastname">
											@if ($errors->has('lastname'))
												<span class="text-danger">{{ $errors->first('lastname') }}</span>
											@endif
										</div>                                 
									</div>
									
									<div class="col-md-12">
										<div class="form-group">
											<label for="Email">Email</label>
											<input class="form-control" type="email" name="email" placeholder="Enter email">
											@if ($errors->has('email'))
												<span class="text-danger">{{ $errors->first('email') }}</span>
											@endif
										</div> 
									</div>
									
									<div class="col-md-12">
										<div class="form-group">
										<label for="Password">Password</label>
											<input class="form-control" type="password" name="password" placeholder="Enter password">
											@if ($errors->has('password'))
												<span class="text-danger">{{ $errors->first('password') }}</span>
											@endif
										</div> 
									</div>
								</div>
								<div class="col-md-6">
									<div class="col-md-12">
										<div class="form-group">
										<label for="Phonenumber">Phonenumber</label>
											<input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="Enter phone number">
											@if ($errors->has('phonenumber'))
												<span class="text-danger">{{ $errors->first('phonenumber') }}</span>
											@endif
										</div>                                 
									</div>
									
									<div class="col-md-12">
										<div class="form-group">
										<label for="Gender">Gender</label>
											<select class="form-control" name="gender">
												<option value="">Please select gender</option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>
											</select>
											@if ($errors->has('gender'))
												<span class="text-danger">{{ $errors->first('gender') }}</span>
											@endif
										</div> 
									</div>
									<div class="col-md-12">
										<div class="form-group">
										<label for="Address">Physical Address</label>
											<input class="form-control" name="address"  type="text" placeholder="Your Physical location" >
											@if ($errors->has('address'))
												<span class="text-danger">{{ $errors->first('address') }}</span>
											@endif
										</div> 
									</div>
								</div>
								<div class="col-md-12">
									<div class="submit-button text-center">
										<button class="btn btn-common" id="submit" type="submit">Create Account</button>
										<div id="msgSubmit" class="h3 text-center hidden"></div> 
										<div class="clearfix"></div> 
									</div>
								</div>
							</div>            
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Registration -->
	
@endsection