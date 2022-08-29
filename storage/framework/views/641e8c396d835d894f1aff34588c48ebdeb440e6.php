<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit."> -->
<title>Demo</title>
<?php echo $__env->make("includes.Admin.head", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body class="theme-black menu_dark">
<!-- <div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"></div>
        <p>Please wait...</p>        
    </div>
</div>
</aside> -->

<!-- Main Content -->
<section class="content home">
<?php echo $__env->make("includes.Admin.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container-fluid">      
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</section>
<?php echo $__env->make("includes.Admin.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH F:\xampp\htdocs\laravel\resources\views/layouts/admin-master.blade.php ENDPATH**/ ?>