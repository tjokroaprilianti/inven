<div>
	<div class="card">
		<div class="card-header">
			<h4><?php echo e($chartTitle); ?></h4>
		</div>
		<div class="card-body">
			<div id="<?php echo e($chartID); ?>"></div>
		</div>
	</div>
</div>

<?php $__env->startPush('js'); ?>
<script>
	$(function() {
  	const chartID = "#<?php echo e($chartID); ?>";
  	const categories = <?php echo json_encode($categories, 15, 512) ?>;
  	const series = <?php echo json_encode($series, 15, 512) ?>;

  	let options = {
  		series: series,
  		chart: {
  			height: 300,
  			type: "pie",
  		},
  		labels: categories,
  		responsive: [
  			{
  				breakpoint: 480,
  				options: {
  					chart: {
  						width: 200,
  					},
  					legend: {
  						position: "bottom",
  					},
  				},
  			},
  		],
  	};

  	<?php if(isset($colors)): ?>
  		options.colors = <?php echo json_encode($colors, 15, 512) ?>
  	<?php endif; ?>

  	new ApexCharts(document.querySelector(chartID), options).render();
  });
</script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\xampp\htdocs\inven\resources\views/components/pie-chart.blade.php ENDPATH**/ ?>