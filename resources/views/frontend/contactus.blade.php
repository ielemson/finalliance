@php
    $setting = \App\Models\Setting::find(1);
@endphp
  @extends('frontend.layouts.master')

  @section('content')
  <div class="page-wrapper">
       
  
   
    <!-- Main Header-->
   @include('frontend.common.page-header')
    <!--End Main Header -->
  
  
  <!--Main Slider-->
  @include('frontend.common.section',['section_name1'=>'Contact','section_single_name'=>'Contact Us'])
    <!--End Slide Info Boxed-->
    
      
    	<!-- Contact Page Section -->
	<section class="contact-page-section">
		<div class="map-section">
			<!--Map Outer-->
			<div class="map-outer">
				<!--Map Canvas-->
				<div class="map-canvas"
					data-zoom="12"
					data-lat="-37.817085"
					data-lng="144.955631"
					data-type="roadmap"
					data-hue="#ffc400"
					data-title="Envato"
					data-icon-path="{{asset('images/icons/map-marker.png')}}"
					data-content="">
				</div>
			</div>
		</div>
		<div class="auto-container">
			<div class="inner-container">
				<h2>Contact our support guys or make appointment <br> with <span>our consultan</span></h2>
				<div class="row clearfix">
					
					<!-- Info Column -->
					<div class="info-column col-lg-7 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="text">Please contact us using the information below. For additional information on our management consulting services, please visit the appropriate page on our site.</div>
							<ul class="list-style-five">
								<li><span class="icon fa fa-building"></span> {{$setting->address}}</li>
								<li><span class="icon fa fa-fax"></span>{{$setting->phone}}</li>
								<li><span class="icon fa fa-envelope-o"></span>{{$setting->email}}</li>
							</ul>
						</div>
					</div>
					
					<!-- Form Column -->
					<div class="form-column col-lg-5 col-md-12 col-sm-12">
						<div class="inner-column">
							
							<!--Contact Form-->
							<div class="contact-form">
								<form method="post" action="#" id="contact-form">
									
									<div class="form-group">
										<input type="text" name="firstname" value="" placeholder="Full name" required>
									</div>
									
									<div class="form-group">
										<input type="text" name="email" value="" placeholder="Email" required>
									</div>
									
									<div class="form-group">
										<select class="custom-select-box">
											<option>Select topic</option>
											<option>Topic One</option>
											<option>Topic Two</option>
										</select>
									</div>
									
									<div class="form-group">
										<textarea name="message" placeholder="write.."></textarea>
									</div>
									
									<div class="form-group">
										<button type="submit" class="theme-btn">Submit</button>
									</div>                                        
									
								</form>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Team Page Section -->
	
	<!-- Contact Info Section -->
	<section class="contact-info-section" style="background-image:url(images/background/10.jpg)">
		<div class="auto-container">
			<div class="row clearfix">
				
				<div class="column col-lg-4 col-md-6 col-sm-12">
					<h4>United Kingdom</h4>
					<ul class="list-style-six">
						<li><span class="icon flaticon-map-1"></span> {{$setting->address}}</li>
						<li><span class="icon flaticon-phone-receiver"></span>{{$setting->phone}}</li>
						<li><span class="icon flaticon-e-mail-envelope"></span>{{$setting->email}}</li>
					</ul>
				</div>
			
				
			</div>
		</div>
	</section>
	<!-- End Contact Info Section -->
	
  
  <!--Main Footer-->
   @include('frontend.common.footer')
  
  </div>
  @endsection
