<script src="<?php echo e(asset('assets/js/jquery-3.5.1.min.js')); ?>"></script>
<!-- Bootstrap js-->
<script src="<?php echo e(asset('assets/js/bootstrap/bootstrap.bundle.min.js')); ?>"></script>
<!-- feather icon js-->
<script src="<?php echo e(asset('assets/js/icons/feather-icon/feather.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/icons/feather-icon/feather-icon.js')); ?>"></script>
<!-- scrollbar js-->
<script src="<?php echo e(asset('assets/js/scrollbar/simplebar.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/scrollbar/custom.js')); ?>"></script>
<!-- Sidebar jquery-->
<script src="<?php echo e(asset('assets/js/config.js')); ?>"></script>
<!-- Plugins JS start-->
<script id="menu" src="<?php echo e(asset('assets/js/sidebar-menu.js')); ?>"></script>
<?php echo $__env->yieldContent('script'); ?>

<?php if(Route::current()->getName() != 'popover'): ?> 
	<script src="<?php echo e(asset('assets/js/tooltip-init.js')); ?>"></script>
<?php endif; ?>

<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/theme-customizer/customizer.js')); ?>"></script>


<?php /**PATH C:\Users\tc\Downloads\Compressed\cuba-3.2.2\cuba-3.2.2\laravel\Laravel\Cuba\resources\views/layouts/simple/script.blade.php ENDPATH**/ ?>