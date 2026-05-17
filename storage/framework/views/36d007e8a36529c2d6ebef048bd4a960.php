<div class="card">
	<div class="card-header">
		<h4><?php echo e($chartTitle); ?></h4>
	</div>
	<div class="card-body">
		<div id="<?php echo e($chartID); ?>"></div>
	</div>
</div>

<?php $__env->startPush('js'); ?>
<script>
	$(function() {
		const chartID = "#<?php echo e($chartID); ?>";
		const series = <?php echo json_encode($series, 15, 512) ?>;
		const colors = <?php echo json_encode($colors, 15, 512) ?>;
		const categories = <?php echo json_encode($categories, 15, 512) ?>;

		var options = {
			series: series,
			chart: {
				type: 'bar',
				height: 500
			},
			plotOptions: {
				bar: {
					horizontal: false,
					columnWidth: '55%',
					borderRadius: 1,
					borderRadiusApplication: 'end'
				}
			},
			colors: colors,
			dataLabels: {
				enabled: false
			},
			stroke: {
				show: true,
				width: 2,
				colors: ['transparent']
			},
			xaxis: {
				categories: categories
			},
			fill: {
				opacity: 1
			}
		};

		var chart = new ApexCharts(document.querySelector(chartID), options);
		chart.render();
	});
</script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\xampp\htdocs\inven\resources\views/components/stacked-bar.blade.php ENDPATH**/ ?>