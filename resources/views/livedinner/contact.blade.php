@extends('layouts.app')
@section('content')
	<!-- Start Contact -->
	<div class="map-full"></div>
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Contact</h2>
						<p>Contact us incase of anything</p>
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
				<div class="col-lg-12">
					<form action="{{ route('store') }}" method="POST">
					@csrf
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
									@if ($errors->has('name'))
										<span class="text-danger">{{ $errors->first('name') }}</span>
									@endif
								</div>                                 
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" placeholder="Your Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
									@if ($errors->has('email'))
										<span class="text-danger">{{ $errors->first('email') }}</span>
									@endif
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group">
								<input type="text" placeholder="Subject" id="subject" class="form-control" name="subject" required data-error="Please enter a subject">
								@if ($errors->has('subject'))
									<span class="text-danger">{{ $errors->first('subject') }}</span>
								@endif
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group"> 
									<textarea class="form-control" name="message" id="message" placeholder="Your Message" rows="4" data-error="Write your message" required></textarea>
									<div class="help-block with-errors"></div>
								</div>
								
									<button type="submit" class="btn btn-primary submit pull-right">Submit</button>
									<!-- <div id="msgSubmit" class="h3 text-center hidden"></div> 
									<div class="clearfix"></div>  -->
								
							</div>
						</div>            
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact -->
@endsection