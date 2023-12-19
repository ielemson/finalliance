

<?php $__env->startSection('content'); ?>
<div class="page-wrapper">
 	

 
  <!-- Main Header-->
 <?php echo $__env->make('frontend.common.page-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!--End Main Header -->


<!--Main Slider-->
<?php echo $__env->make('frontend.common.section',['section_name1'=>'About','section_single_name'=>'About Us'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!--End Slide Info Boxed-->
  
	
	<!-- Services Section Three-->
	<section class="services-section-three">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Services Block -->
				<div class="services-block-three style-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-bar-chart"></span>
						</div>
						<h6><a href="#">Business Growth</a></h6>
						<div class="text">The argument in favor of using filler text goes some labore et dolore magna aliqua consectetur.</div>
					</div>
				</div>
				
				<!-- Services Block -->
				<div class="services-block-three style-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeIn" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-board"></span>
						</div>
						<h6><a href="#">Strategy Process</a></h6>
						<div class="text">The argument in favor of using filler text goes some labore et dolore magna aliqua consectetur.</div>
					</div>
				</div>
				
				<!-- Services Block -->
				<div class="services-block-three style-two col-lg-4 col-md-12 col-sm-12">
					<div class="inner-box wow fadeIn" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-student"></span>
						</div>
						<h6><a href="#">Finance Manage</a></h6>
						<div class="text">The argument in favor of using filler text goes some labore et dolore magna aliqua consectetur.</div>
					</div>
				</div>
			
			</div>
		</div>
	</section>
	
	<!-- About Section Four -->
	<section class="about-section-four">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">about us</div>
				<h2>We are here to manage your <br> finance with <span>experience</span></h2>
			</div>
			
			<div class="row clearfix">
				
				<!-- Content Column -->
				<div class="image-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image-1"><img src="images/resource/about-2.jpg" alt=""></div>
						<div class="image-2"><img src="images/resource/about-3.jpg" alt=""></div>
					</div>
				</div>
				
				<!-- Skills Column -->
				<div class="skills-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!--Skills-->
						<div class="skills style-two">
							
							<!--Skill Item-->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Finance</div>
									<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="95">0</span>%</div></div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner"><div class="bar progress-line" data-width="95"></div></div>
								</div>
							</div>
							
							<!--Skill Item-->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Business</div>
									<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="90">0</span>%</div></div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner"><div class="bar progress-line" data-width="90"></div></div>
								</div>
							</div>
							
							<!--Skill Item-->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Investment</div>
									<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="93">0</span>%</div></div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner"><div class="bar progress-line" data-width="93"></div></div>
								</div>
							</div>
							
						</div>

						<div class="text">
							<p>The argument in favor of using filler text goes something like this: If you use real content in the <a href="#">design process,</a> anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
							<p>Aenean tincidunt id mauris id auctor. Donec at ligula lacus. Nulla dignissim mi quis neque interdum, quis porta sem finibus.</p>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End About Section Four -->
	

<!--Main Footer-->
 <?php echo $__env->make('frontend.common.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\financeallianceltd\resources\views/frontend/aboutus.blade.php ENDPATH**/ ?>