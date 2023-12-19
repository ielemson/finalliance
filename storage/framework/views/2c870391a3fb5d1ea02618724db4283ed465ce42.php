    <!-- Main Header-->
	<?php
	$setting = \App\Models\Setting::find(1);
   ?>

	<header class="main-header header-style-five five-alternate">
		<!--Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="top-left">
                        <ul class="contact-list clearfix">
                            <li><i class="fa fa-envelope-o"></i><?php echo e($setting->email); ?></li>
                            <li><i class="fa fa-phone"></i><a href="#"><?php echo e($setting->phone); ?></a></li>
							<li><i class="fa fa-map-marker"></i><a href="#"><?php echo e(Str::limit($setting->address, 25)); ?></a></li>
                        </ul>
                    </div>
                    <div class="top-right">
					
                      
						<!--Language-->
						<div class="language dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"><span class="flag-icon"><img src="images/icons/flag-icon.png" alt=""/></span>En</a>
							<ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu2">
								<li><a href="#">English</a></li>
								<li><a href="#">German</a></li>
								<li><a href="#">Arabic</a></li>
								<li><a href="#">Hindi</a></li>
							</ul>
						</div>
						
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->
		
    	<!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">
                	
                	<div class="pull-left logo-box">
                    	<div class="logo"><a href="<?php echo e(url('/')); ?>"><img src="<?php echo e($setting->website_logo_dark); ?>" alt="<?php echo e($setting->title); ?>" title="<?php echo e($setting->title); ?>" style="width: 50%"></a></div>
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
									<li class="<?php echo e(request()->is('/') ? 'current' : ''); ?>"><a href="<?php echo e(url('/')); ?>">Home</a>
										
									</li>
									<li class="<?php echo e(request()->is('about-us') ? 'current' : ''); ?>"><a href="<?php echo e(route('home.about')); ?>">About Us</a>
										
									</li>
									<li class="dropdown"><a href="#">Services</a>
										<ul>
											<li><a href="#">Services</a></li>
											<li><a href="#">Services Two</a></li>
											<li><a href="#">Services Single</a></li>
										</ul>
									</li>
									<li><a href="#">FAQ</a>
										
									</li>
									<li class="dropdown"><a href="#">Account</a>
										<ul>
											<li><a href="<?php echo e(route('customer.login')); ?>">Login</a></li>
											<li><a href="<?php echo e(route('customer.register')); ?>">Register</a></li>
										</ul>
									</li>
									<li class="<?php echo e(request()->is('contact-us') ? 'current' : ''); ?>"><a href="<?php echo e(route('home.contact')); ?>">Contact us</a></li>
								</ul>
							</div>
							
						</nav>
						
						<!--Outer Box-->
						<div class="outer-box">
					
						</div>
						
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
                	<a href="<?php echo e(route('home')); ?>" class="img-responsive"><img src="<?php echo e($setting->website_logo_light); ?>" alt="<?php echo e($setting->title); ?>" title="<?php echo e($setting->title); ?>" style="width: 25%"></a>
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
                                <li><a href="#">Home</a>
									
								</li>
								<li class="<?php echo e(request()->is('about-us') ? 'current' : ''); ?>"><a href="<?php echo e(route('home.about')); ?>">About Us</a>
									
								</li>
								<li class="dropdown"><a href="#">Services</a>
									<ul>
										<li><a href="#">Services One</a></li>
										<li><a href="#">Services Two</a></li>
										<li><a href="#">Services Single</a></li>
									</ul>
								</li>
								<li><a href="#">FAQ</a>
									
								</li>
								<li class="dropdown"><a href="#">Account</a>
									<ul>
										<li><a href="<?php echo e(route('customer.login')); ?>">Login</a></li>
										<li><a href="<?php echo e(route('customer.register')); ?>">Register</a></li>
									</ul>
								</li>
								<li class="<?php echo e(request()->is('contact-us') ? 'current' : ''); ?>"><a href="<?php echo e(route('home.contact')); ?>">Contact us</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
		
    </header>
    <!--End Main Header --><?php /**PATH C:\laragon\www\financeallianceltd\resources\views/frontend/common/page-header.blade.php ENDPATH**/ ?>