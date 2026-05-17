<div class="table-responsive">
	<table class="table table-bordered table-hover my-2" id="datatable" style="width: 100%">
		<?php echo e($slot); ?>

	</table>
</div>

<?php $__env->startPush('js'); ?>
<script>
	$(document).ready(function() {
		new DataTable('#datatable', {
			lengthMenu: [5, 10, 15, {label: "All", value: -1}],
			language: {
				url: "https://cdn.datatables.net/plug-ins/2.0.6/i18n/id.json",
			},
		});
	});
</script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\xampp\htdocs\inven\resources\views/components/datatable/index.blade.php ENDPATH**/ ?>