

	<div class="space"></div>

	<div class="daily-verse" id="ourmanna-verse">Loading...</div>
	<script src="http://www.ourmanna.com/verses/api/js/?order=random" type="text/javascript"></script>

<?php $__env->startSection('content'); ?>

	<form method="post" action="/bible-study-request-forms">
		<?php echo csrf_field(); ?>
		<div class="flex-container">
			<div>
				<p class="form-desc">Personal Information</p>

				<label for="cname">
					Complete Name
				</label>
				<input type="text" name="cname" id="cname" value="<?php echo e($requests->cname); ?>"><br>

				<label for="email">
					Email Address
				</label>
				<input type="email" name="email" id="email" value="<?php echo e($requests->email); ?>"><br>

				<label for="contact">
					Contact Number
				</label>
				<input type="number" name="contact" id="contact" value="<?php echo e($requests->contact); ?>"><br>

				<label for="bdate">
					Birthday
				</label>
				<input type="date" name="bdate" id="bdate" value="<?php echo e($requests->bdate); ?>"><br>

				<label for="religion">
					Religious Affiliation
				</label>
				<input type="text" name="religion" id="religion" value="<?php echo e($requests->religion); ?>"><br>
			</div>

			<div>
				<p class="form-desc">Request Details</p>

				<label for="bsdate">
					Bible Study Date
				</label>
				<input type="date" name="bsdate" id="bsdate" value="<?php echo e($requests->bsdate); ?>"><br>

				<label for="bstime">
					Bible Study Time
				</label>
				<input type="time" name="bstime" id="bstime" value="<?php echo e($requests->bstime); ?>"><br>

				<label for="location">
					Bible Study Location
				</label>
				<input type="text" name="location" id="location" value="<?php echo e($requests->location); ?>"><br>
			</div>
		</div>

		<button type="submit">Submit</button>
	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\final-exam\resources\views/form.blade.php ENDPATH**/ ?>