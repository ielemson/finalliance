<?php
$setting = \App\Models\Setting::find(1);
?>
<footer class="main-footer">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!--Column-->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="logo">
                                    <a href="<?php echo e(route('home')); ?>"><img src="<?php echo e($setting->website_logo_light); ?>" alt="<?php echo e($setting->title); ?>" title="<?php echo e($setting->title); ?>" style="width: 50%" /></a>
                                </div>
                                <div class="text"><?php echo e($setting->meta_description); ?></div>
                                <ul class="list-style-two">
                                    <li><span class="icon fa fa-phone"></span> <?php echo e($setting->phone); ?></li>
                                    <li><span class="icon fa fa-envelope"></span> <?php echo e($setting->email); ?></li>
                                    <li><span class="icon fa fa-home"></span><?php echo e($setting->address); ?></li>
                                </ul>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h4>Links</h4>
                                <ul class="list-link">
                                    <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                                    <li><a href="">Services</a></li>
                                    <li><a href="<?php echo e(route('home.about')); ?>">About us</a></li>
                                    <li><a href="">Testimonials</a></li>
                                    <li><a href="">News</a></li>
                                    <li><a href="<?php echo e(route('home.contact')); ?>">Contact</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Column-->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h4>Support</h4>
                                <ul class="list-link">
                                    <li><a href="">Contact Us</a></li>
                                    <li><a href="">Submit a Ticket</a></li>
                                    <li><a href="">Visit Knowledge Base</a></li>
                                    <li><a href="">Support System</a></li>
                                    <li><a href="">Refund Policy</a></li>
                                    <li><a href="">Professional Services</a></li>
                                </ul>
                            </div>
                        </div>

                     

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Copyright Column -->
                <div class="copyright-column col-lg-6 col-md-6 col-sm-12">
                    <div class="copyright"><?php echo e(Date('Y')); ?> &copy; All rights reserved by <a href="#"><?php echo e($setting->website_title); ?></a></div>
                </div>

                <!-- Social Column -->
                <div class="social-column col-lg-6 col-md-6 col-sm-12">
                    <ul>
                        <li class="follow">Follow us: </li>
                        <li><a href="<?php echo e($setting->facebook); ?>"><span class="fa fa-facebook-square"></span></a></li>
                        <li><a href="<?php echo e($setting->instagram); ?>"><span class="fa fa-twitter-square"></span></a></li>
                        <li><a href="<?php echo e($setting->linkedin); ?>"><span class="fa fa-linkedin-square"></span></a></li>
                        
                        
                    </ul>
                </div>

            </div>
        </div>
    </div>
</footer>

<?php /**PATH C:\laragon\www\financeallianceltd\resources\views/frontend/common/footer.blade.php ENDPATH**/ ?>