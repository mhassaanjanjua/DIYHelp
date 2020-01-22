@extends('theme.default')
@section('content')

<section class="site-forms ">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
					<div class="form-heading">
						<span>contact us</span>
						<h2>Your Feedback matter to Us!</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-md-10 col-lg-10 col-sm-10 col-xs-12">
					<div class="form-overlay">
						<div class="row">
							<div class="col-md-5 col-lg-5 col-sm-5 col-xs-12">
								<div class="form-img">
									<img src="img/team.png"/>
								</div>
							</div>
							<div class="col-md-7 col-lg-7 col-sm-7 col-xs-12">
								<div class="row">
									<div class="col-md-11 col-lg-11 col-sm-11 col-xs-12">
										<div class="form-heading-caption">
											<h2>Don't Hesitate To Contact With Us, Say Hello......</h2>
										</div>
									</div>
								</div>
								<div class="siteform">
									<form>
										<div class="row">
										    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
										      <input type="text" class="form-control" placeholder="Full Name Here">
										    </div>
										    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
										      <input type="email" class="form-control" placeholder="Email Here">
										    </div>
										</div>
										<div class="row">
										    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
										      <input type="tel" class="form-control" placeholder="Phone No">
										    </div>
										    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
										      <input type="text" class="form-control" placeholder="Subject">
										    </div>
										</div>
										<div class="row">
										    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
										      <textarea class="form-control" placeholder="Message Us"></textarea>
										    </div>
										</div>
										<div class="row">
										    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
										       <button type="submit" class="btn btn-primary">Send Message</button>
										    </div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
