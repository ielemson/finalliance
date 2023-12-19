
<?php
    $setting = \App\Models\Setting::find(1);
?>

<!DOCTYPE html>
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />

<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="<?php echo e($setting->meta_description); ?>">
    <meta name="keywords"content="<?php echo e($setting->meta_tag); ?>">
    <meta name="author" content="<?php echo e($setting->meta_title); ?>">
    <title><?php echo e($setting->website_title); ?> - Home </title>
    <!-- Stylesheets -->
    <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/responsive.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/toastr.min.css')); ?>">
    
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    
</head>

<body>

    <?php echo $__env->yieldContent('content'); ?>
    <!--End pagewrapper-->

    <script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.mcustomscrollbar.concat.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.fancybox.js')); ?>"></script>
    <script src="<?php echo e(asset('js/appear.js')); ?>"></script>
    <script src="<?php echo e(asset('js/owl.js')); ?>"></script>
    <script src="<?php echo e(asset('js/wow.js')); ?>"></script>
    
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('js/toastr.min.js')); ?>"></script>
    
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
   
    
    <?php echo Toastr::message(); ?>

    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
            });
        }, 5000);
    </script>

</body>

</html>
<?php /**PATH C:\laragon\www\financeallianceltd\resources\views/frontend/layouts/master.blade.php ENDPATH**/ ?>