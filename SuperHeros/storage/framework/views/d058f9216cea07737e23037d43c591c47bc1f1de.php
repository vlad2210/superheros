<?php $__env->startSection('main'); ?>

<div class="jumbotron text-center">
	<div align="right">
		<a href="<?php echo e(route('crud.index')); ?>" class="btn btn-default">Back</a>
	</div>
	<br />
	<img src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($data->image); ?>" class="img-thumbnail" />
	<h3>Nickname - <?php echo e($data->nickname); ?> </h3>
	<h3>Real Name - <?php echo e($data->real_name); ?></h3>
	<h3>Origin description - <?php echo e($data->origin_description); ?></h3>
	<h3>Superpowers - <?php echo e($data->superpowers); ?></h3>
	<h3>Catch phrase - <?php echo e($data->catch_phrase); ?></h3>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('parent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\SuperHeros\resources\views/view.blade.php ENDPATH**/ ?>