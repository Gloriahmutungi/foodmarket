@extends('layouts.app')
@section('content')
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Login Form</h1>
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
						<h2>Sign In</h2>
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
			</div>
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
					<div class="contact-block">
						<form action ="{{ route('login.save') }}" method="POST" >
						@csrf
							<div class="row">
								<div class="col-md-12">
									
                                    <label for="Email">Email</label>
										<div class="form-group">
											<input class="form-control" name="email" type="email" value="">
											@if ($errors->has('email'))
												<span class="text-danger">{{ $errors->first('email') }}</span>
											@endif
										</div>                                 
                            
                                    <label for="password">Password</label>
										<div class="form-group">
											<input type="password"  class="form-control" name="password">
											<div class="help-block with-errors"></div>
											@if ($errors->has('password'))
												<span class="text-danger">{{ $errors->first('password') }}</span>
											@endif
										</div>  
                                        <a href="{{ route('register.create')}}">Not yet registered?Click here</a> 
                                        <a class="pull-right" href="{{ route('forget.password.get') }}">Forgotten password?</a>                               
								</div>
								<div class="col-md-12">
									<div class="submit-button text-center">
										<button class="btn btn-common" id="submit" type="submit">Login</button>
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