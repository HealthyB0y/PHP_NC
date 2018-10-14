<?php $__env->startSection('title','1804E(10/12)'); ?>

<?php $__env->startSection('content'); ?>
	<div>My name is Hoang<?php echo e($class); ?></div>
<?php $__env->stopSection(); ?>

<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html> -->
<?php echo $__env->make('layout.user', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>