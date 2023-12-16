 <!-- Main Header-->
 @php
 $setting = \App\Models\Setting::find(1);
@endphp

 
 <header class="main-header">
    	<!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">
                	
                	<div class="pull-left logo-box">
                    	<div class="logo"><a href="{{url('/')}}"><img src="{{$setting->website_logo_dark}}" alt="{{$setting->title}}" title="{{$setting->title}}" style="width: 50%"> </a></div>
                    </div>
                   	
                   	<div class="nav-outer clearfix">
                    
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li class="{{ request()->is('/') ? 'current' : '' }}"><a href="{{url('/')}}">Home</a>
										
									</li>
									<li class="{{ request()->is('/about-us') ? 'current' : '' }}"><a href="{{route("home.about")}}">About Us</a>
										
									</li>
									<li class="dropdown"><a href="#">Services</a>
										<ul>
											<li><a href="#">Services One</a></li>
											<li><a href="#">Services Two</a></li>
											<li><a href="#">Services Three</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="#">FAQ</a>
										
									</li>
									<li class="dropdown"><a href="#">Account</a>
                                        <ul>
										@if (auth()->check())
											<li><a href="{{route('customer.logout')}}">Logout</a></li>
										<li><a href="{{url('/user/dashboard')}}">Dashboard</a></li>
									   @else
									   <li><a href="{{route('customer.login')}}">Login</a></li>
										<li><a href="{{route('customer.register')}}">Register</a></li>
									   @endif
                                        </ul>
                                    </li>
									<li><a href="{{route('home.contact')}}">Contact us</a></li>
								</ul>
							</div>
							
						</nav>
						
					</div>
                   
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
		<!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
            	<!--Logo-->
            	<div class="logo pull-left">
                	<a href="{{route('home')}}" class="img-responsive"><img src="{{$setting->website_logo_light}}" alt="{{$setting->title}}" title="{{$setting->title}}" style="width: 25%"></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="{{route('home')}}">Home</a>
									
								</li>
								<li class="#"><a href="{{route('home.about')}}">About Us</a>
									
								</li>
								<li class="dropdown"><a href="#">Services</a>
									<ul>
										<li><a href="#">Services One</a></li>
										<li><a href="#">Services Two</a></li>
										<li><a href="#">Services Three</a></li>
									</ul>
								</li>
								<li class="#"><a href="#">FAQ</a>
									
								</li>
								<li class="dropdown"><a href="#">Account</a>
									<ul>
									@if (auth()->check())
										 <li><a href="{{route('customer.logout')}}">Logout</a></li>
									 <li><a href="{{url('/user/dashboard')}}">Dashboard</a></li>
									@else
									<li><a href="{{route('customer.login')}}">Login</a></li>
									 <li><a href="{{route('customer.register')}}">Register</a></li>
									@endif
                                    </ul>
								</li>
								<li><a href="{{route('home.contact')}}">Contact us</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
		
    </header>
    <!--End Main Header -->
