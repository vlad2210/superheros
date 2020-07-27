<?php $__env->startSection('main'); ?>
<div align="right">
	<a href="<?php echo e(route('crud.index')); ?>" class="btn btn-default">Back to Home</a>
</div>
<br />

<form method="post" action="<?php echo e(route('crud.update', $data->id)); ?>" enctype="multipart/form-data">

	<?php echo csrf_field(); ?>
	<?php echo method_field('PATCH'); ?>
	<div class="form-group">
       <label class="col-md-4 text-right">Nickname</label>
       <div class="col-md-8">
        <input type="text" name="nickname" value="<?php echo e($data->nickname); ?>" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Real Name</label>
       <div class="col-md-8">
        <input type="text" name="real_name" value="<?php echo e($data->real_name); ?>" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Origin description</label>
       <div class="col-md-8">
        <input type="text" name="origin_description" value="<?php echo e($data->origin_description); ?>" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Superpowers</label>
       <div class="col-md-8">
        <input type="text" name="superpowers" value="<?php echo e($data->superpowers); ?>" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Catch phrase</label>
       <div class="col-md-8">
        <input type="text" name="catch_phrase" value="<?php echo e($data->catch_phrase); ?>" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
	<div class="form-group">
		<label class="col-md-4 text-right">Select Profile Image</label>
		<div class="col-md-8">
			<input type="file" name="image" />
			<img src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($data->image); ?>" class="img-thumbnail" width="100" />
			<input type="hidden" name="hidden_image" value="<?php echo e($data->image); ?>" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
	</div>
</form>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('parent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\SuperHeros\resources\views/edit.blade.php ENDPATH**/ ?>