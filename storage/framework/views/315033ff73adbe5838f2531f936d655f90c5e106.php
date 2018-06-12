<?php if(session()->has('success')): ?>
	<div class="alert alert-success">
		<p><strong><?php echo e(session('success')); ?></strong></p>
	</div>
<?php endif; ?>