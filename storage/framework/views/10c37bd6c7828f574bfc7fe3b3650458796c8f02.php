
	
	<div class="space"></div>
	
<?php $__env->startSection('content'); ?>

	<p class="request-desc">This is the list of the sessions requested by our guest</p>

	<table id="requests" class="display">
		<thead>
			<tr>
				<th>Complete Name</th>
				<th>Email Address</th>
				<th>Contact No.</th>
				<th>Birthdate</th>
				<th>Religion</th>
				<th>BS Date</th>
				<th>BS Time</th>
				<th>BS Location</th>
			</tr>
		</thead>
		<tbody>
			<?php $__currentLoopData = $requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $requests): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($requests->cname); ?></td>
					<td><?php echo e($requests->email); ?></td>
					<td><?php echo e($requests->contact); ?></td>
					<td><?php echo e($requests->bdate); ?></td>
					<td><?php echo e($requests->religion); ?></td>
					<td><?php echo e($requests->bsdate); ?></td>
					<td><?php echo e($requests->bstime); ?></td>
					<td><?php echo e($requests->location); ?></td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>


<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\final-exam\resources\views/requests.blade.php ENDPATH**/ ?>