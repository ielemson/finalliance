

<?php $__env->startSection('content'); ?>
<div class="page-wrapper">
 	

 
  <!-- Main Header-->
 <?php echo $__env->make('frontend.common.page-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!--End Main Header -->


<!--Main Slider-->
<?php echo $__env->make('frontend.common.section',['section_name1'=>'Login','section_single_name'=>'Account Login'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!--End Slide Info Boxed-->
  
  <section class="contact-page-section" style="margin-bottom:10px">
    
    <div class="auto-container mb-10 pb-10">
        <div class="inner-container">
            <h2>
            
          <span>Login into Your Account</span>
                </h2>
            <div class="row clearfix">
                <!-- Form Column -->
                <div class="form-column col-lg-8 col-md-12 col-sm-12 mx-auto">
                    <div class="inner-column">
                        
                        <!--Contact Form-->
                        <div class="contact-form">
                            <form method="post" action="<?php echo e(route('customer.login.action')); ?>" id="contact-form">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <input type="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <?php if($errors->has('email')): ?>
                                    <span class="text-danger"><i><?php echo e($errors->first('email')); ?></i></span>
                                    <?php endif; ?>
                                </div>
                                
                                <div class="form-group">
                                    <input type="password" name="password" value="" placeholder="Password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                        <?php if($errors->has('password')): ?>
                                        <span class="text-danger"><i><?php echo e($errors->first('password')); ?></i></span>
                                        <?php endif; ?>
                                </div>
                                
                                <div class="form-group">
                                    <button type="submit" class="theme-btn">Login</button>
                                    <a href="<?php echo e(route('customer.register')); ?>"  class="theme-btn btn-style-twelve">Register</a>
                                </div>                                        
                                
                            </form>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!--Main Footer-->
 <?php echo $__env->make('frontend.common.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laraveladminpanel\resources\views/frontend/auth/login.blade.php ENDPATH**/ ?>