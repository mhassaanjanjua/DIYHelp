<div class="sub-header">
	<div class="container">
		<div class="row">

			<div class="col-md-7 col-sm-7 col-lg-7 col-xs-12">
				<div class="gen-info">
					<ul class="general-info">
						<li>
							<a href="tel:+(49) 176 576 665">
								<i class="fa fa-phone"></i><span> Phone: +(49) 176 576 80665</span>
							</a>
						</li>
						<li>
							<a href="javascript:;">
								<i class="fa fa-map-marker"></i><span>Frankengut Str. 1</span>
							</a>
						</li>
						<li>
							<a href="mailto:contact@diy-help.com">
								<i class="fa fa-envelope"></i><span>Email:contact@diy-help.com</span>
							</a>
						</li>

					</ul>
				</div>
			</div>


			<div class="col-md-5 col-sm-5 col-lg-5 col-xs-12">

				<div class="social-info">

					<ul class="social-icon">
						@guest
						<li>
							<a href="{{ route('login') }}">
								<i>{{ __('Login') }} </i>
							</a>
						</li>
						@if (Route::has('register'))
						<li>
							<a href="{{ route('register') }}">
								<i> {{ __('Register') }}</i>
							</a>
						</li>
						@endif
						@else
						<li>
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }} <span class="caret"></span>
							</a>

							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<div class="dropdown-content">
									<a class="dropdown-item" href="../profile">Profile</a>
									<a class="dropdown-item" href="../applications">All Orders</a>
									<a class="dropdown-item" href="../services">All Services</a>
									<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
										{{ __('Logout') }}
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
								</div>
							</div>
						</li>
						@endguest
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-sm-2 col-lg-2 col-xs-12">
				<div class="logo">
					<a href="{{ route('home') }}">
						<img src="/images/logo.png" class="images-responsive" />
					</a>
				</div>
			</div>
			<div class="col-md-7 col-sm-7 col-lg-7 col-xs-12">
				<div class="nav">
					<ul class="nav-menu">
						<li>
							<a href="{{ route('home') }}">HOME</a>
						</li>
						<li>
							<a href="../../services">SERVICES</a>
						</li>
						<li>
							<a href="../offers">OFFERS</a>
						</li>
						<li>
							<a href="../categories">CATEGORIES</a>
						</li>
						<li>
							<a href="../contactus">CONTACT</a>
						</li>
						<li>
							<a href="../about">ABOUT</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-lg-12 col-xs-12">
				<div class="header-caption">
					<div class="header-caption-inner">
						<h3>We connect house holds with professionals</h3>
						<!-- Authentication Links -->
						<p>DIY Help provides platform to domestic households with professionals.</p>
					</div>
				</div>
			</div>
		</div>
</header>