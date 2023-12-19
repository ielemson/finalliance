<?php $__env->startComponent('mail::message'); ?>
# Welcome Onboard

<p>Thank you for joining our community. </p> 
<p>We're excited to have you on board.</p>
<p>You will receive a notification once account has been approved.</p>

<?php $__env->startComponent('mail::button', ['url' => config('app.url')]); ?>
Explore our website
<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\laragon\www\financeallianceltd\resources\views/emails/WelcomeEmail.blade.php ENDPATH**/ ?>