

<?php $__env->startSection('content'); ?>
<div class="page-wrapper">
 	
  <!-- Main Header-->
 <?php echo $__env->make('frontend.common.page-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!--End Main Header -->


<!--Main Slider-->
<?php echo $__env->make('frontend.common.section',['section_name1'=>'Register','section_single_name'=>'Register Account'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!--End Slide Info Boxed-->
  
  <section class="contact-page-section" style="margin-bottom:10px">
    <div class="auto-container pb-10">
        <div class="inner-container">
            <h2>
                 <br>  <span>Create New Account</span>
                </h2>
            <div class="row clearfix">
                <!-- Form Column -->
                <div class="form-column col-lg-12 col-md-12 col-sm-12 mx-auto">
                    <div class="inner-column">       
                        <!--Contact Form-->
                        <div class="contact-form">
                            <form method="post" action="<?php echo e(route('customer.register.post')); ?>" id="contact-form">
                                <?php echo csrf_field(); ?>
                               <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <input type="text" name="name" value="<?php echo e(old('name')); ?>" placeholder="First Name"  class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                                    <?php if($errors->has('name')): ?>
                                    <span class="text-danger"><i><?php echo e($errors->first('name')); ?></i></span>
                                    <?php endif; ?>
                                    </div>
                                   
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="lname" value="<?php echo e(old('lname')); ?>" placeholder="Last Name" class="form-control <?php $__errorArgs = ['lname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                                        <?php if($errors->has('lname')): ?>
                                        <span class="text-danger"><i><?php echo e($errors->first('lname')); ?></i></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="mname" value="<?php echo e(old('mname')); ?>" placeholder="Middle Name" class="form-control <?php $__errorArgs = ['mname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                                        <?php if($errors->has('mname')): ?>
                                        <span class="text-danger"><i><?php echo e($errors->first('mname')); ?></i></span>
                                        <?php endif; ?>
                                    </div>
                                    
                                   
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="username" value="<?php echo e(old('username')); ?>" placeholder="Username" class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                                        <?php if($errors->has('username')): ?>
                                        <span class="text-danger"><i><?php echo e($errors->first('username')); ?></i></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                                        <?php if($errors->has('email')): ?>
                                        <span class="text-danger"><i><?php echo e($errors->first('email')); ?></i></span>
                                        <?php endif; ?>
                                    </div>
                                    
                                   
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select  name="country" value="<?php echo e(old('country')); ?>"  class="custom-select-box <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                                                 <option value="">Select Country</option>
                                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?> +<?php echo e($country->code); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                <?php if($errors->has('country')): ?>
                                                <span class="text-danger"><i><?php echo e($errors->first('country')); ?></i></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="tel"  name="mobile" value="<?php echo e(old('mobile')); ?>" placeholder="Mobile Number" class="form-control <?php $__errorArgs = ['mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  pattern="^[0-9]+$" required>
                                                <?php if($errors->has('mobile')): ?>
                                                <span class="text-danger"><i><?php echo e($errors->first('mobile')); ?></i></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                     
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password" value="" placeholder="Password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                                        <?php if($errors->has('password')): ?>
                                        <span class="text-danger"><i><?php echo e($errors->first('password')); ?></i></span>
                                        <?php endif; ?>
                                    </div>
                                    
                                   
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation" value="" placeholder="Confirm Password" required>
                                    </div>
                                </div>
                               </div>
                                
                                <div class="form-group">
                                    <button type="submit" class="theme-btn btn-style-one">Register Account</button>
                                    <a href="<?php echo e(route('customer.login')); ?>" class="theme-btn btn-style-one">Login</a>
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
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\financeallianceltd\resources\views/frontend/auth/register.blade.php ENDPATH**/ ?>