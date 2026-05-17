<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
	 <?php $__env->slot('title', null, []); ?> Dashboard <?php $__env->endSlot(); ?>
	 <?php $__env->slot('page_heading', null, []); ?> Dashboard <?php $__env->endSlot(); ?>

	<div class="row">
		<div class="col-lg-3 col-md-6 col-sm-6 col-12">
			<div class="card card-statistic-1">
				<div class="card-icon bg-primary">
					<i class="fas fa-columns"></i>
				</div>
				<div class="card-wrap">
					<div class="card-header">
						<h4>Total Barang</h4>
					</div>
					<div class="card-body">
						<?php echo e($commodity_counts['commodity_in_total']); ?>

					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 col-12">
			<div class="card card-statistic-1">
				<div class="card-icon bg-success">
					<i class="fas fa-fw fa-check-circle"></i>
				</div>
				<div class="card-wrap">
					<div class="card-header">
						<h4>Kondisi Baik</h4>
					</div>
					<div class="card-body">
						<?php echo e($commodity_counts['commodity_in_good_condition']); ?>

					</div>
					<a href="<?php echo e(route('barang.index', ['condition' => 1])); ?>" class="stretched-link"></a>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 col-12">
			<div class="card card-statistic-1">
				<div class="card-icon bg-warning">
					<i class="fas fa-fw fa-exclamation-circle"></i>
				</div>
				<div class="card-wrap">
					<div class="card-header">
						<h4>Kondisi Kurang Baik</h4>
					</div>
					<div class="card-body">
						<?php echo e($commodity_counts['commodity_in_not_good_condition']); ?>

					</div>
					<a href="<?php echo e(route('barang.index', ['condition' => 2])); ?>" class="stretched-link"></a>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 col-12">
			<div class="card card-statistic-1">
				<div class="card-icon bg-danger">
					<i class="fas fa-fw fa-times-circle"></i>
				</div>
				<div class="card-wrap">
					<div class="card-header">
						<h4>Kondisi Rusak Berat</h4>
					</div>
					<div class="card-body">
						<?php echo e($commodity_counts['commodity_in_heavily_damage_condition']); ?>

					</div>
					<a href="<?php echo e(route('barang.index', ['condition' => 3])); ?>" class="stretched-link"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-lg-8">
			<div class="card">
				<?php if (isset($component)) { $__componentOriginal186b6b67364273b38dd03324ee751423 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal186b6b67364273b38dd03324ee751423 = $attributes; } ?>
<?php $component = App\View\Components\BarChart::resolve(['chartTitle' => 'Grafik Barang Berdasarkan Kondisi','chartID' => 'chartCommodityCondition','series' => $charts['commodity_condition_count']['series'],'categories' => $charts['commodity_condition_count']['categories'],'colors' => ['#47C363', '#FFA426', '#FC544B']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bar-chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\BarChart::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
				 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal186b6b67364273b38dd03324ee751423)): ?>
<?php $attributes = $__attributesOriginal186b6b67364273b38dd03324ee751423; ?>
<?php unset($__attributesOriginal186b6b67364273b38dd03324ee751423); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal186b6b67364273b38dd03324ee751423)): ?>
<?php $component = $__componentOriginal186b6b67364273b38dd03324ee751423; ?>
<?php unset($__componentOriginal186b6b67364273b38dd03324ee751423); ?>
<?php endif; ?>
			</div>
		</div>

		<div class="col-md-6 col-lg-4">
			<div class="card">
				<div class="card-header">
					<h4>5 Barang Termahal</h4>
				</div>
				<div class="card-body">
					<?php $__currentLoopData = $commodity_order_by_price; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $order_by_price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<ul class="list-unstyled list-unstyled-border">
						<li class="media">
							<!-- <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-1.png" alt="avatar"> -->
							<div class="media-body">
								<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('detail barang')): ?>
								<a data-id="<?php echo e($order_by_price->id); ?>" class="float-right btn btn-sm btn-info text-white show-modal"
									data-toggle="modal" data-target="#show_commodity" title="Lihat Detail">
									<i class="fas fa-fw fa-search"></i>
								</a>
								<?php endif; ?>
								<div class="media-title"><?php echo e($order_by_price->name); ?></div>
								<span class="text-small text-muted">Harga: Rp<?php echo e($order_by_price->indonesian_currency($order_by_price->price)); ?></span>
							</div>
						</li>
					</ul>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('lihat barang')): ?>
					<div class="text-center pt-1 pb-1">
						<a href="<?php echo e(route('barang.index')); ?>" class="btn btn-primary btn-lg btn-round">
							Lihat Semua Barang
						</a>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-7">
			<?php if (isset($component)) { $__componentOriginal186b6b67364273b38dd03324ee751423 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal186b6b67364273b38dd03324ee751423 = $attributes; } ?>
<?php $component = App\View\Components\BarChart::resolve(['chartTitle' => 'Grafik Jumlah Barang Berdasarkan Tahun Pembelian','chartID' => 'chartCommodityCountEachYear','series' => $charts['commodity_each_year_of_purchase_count']['series'],'categories' => $charts['commodity_each_year_of_purchase_count']['categories']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bar-chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\BarChart::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
			 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal186b6b67364273b38dd03324ee751423)): ?>
<?php $attributes = $__attributesOriginal186b6b67364273b38dd03324ee751423; ?>
<?php unset($__attributesOriginal186b6b67364273b38dd03324ee751423); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal186b6b67364273b38dd03324ee751423)): ?>
<?php $component = $__componentOriginal186b6b67364273b38dd03324ee751423; ?>
<?php unset($__componentOriginal186b6b67364273b38dd03324ee751423); ?>
<?php endif; ?>
		</div>
		<div class="col-lg-5">
			<?php if (isset($component)) { $__componentOriginal97420d662d07480141d58032fdeb00e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal97420d662d07480141d58032fdeb00e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.pie-chart','data' => ['chartTitle' => 'Grafik Jumlah Barang Berdasarkan Perolehan','chartID' => 'chartCommodityByCommodityAcquisitionCount','series' => $charts['commodity_by_commodity_acquisition_count']['series'],'categories' => $charts['commodity_by_commodity_acquisition_count']['categories']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('pie-chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['chartTitle' => 'Grafik Jumlah Barang Berdasarkan Perolehan','chartID' => 'chartCommodityByCommodityAcquisitionCount','series' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($charts['commodity_by_commodity_acquisition_count']['series']),'categories' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($charts['commodity_by_commodity_acquisition_count']['categories'])]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal97420d662d07480141d58032fdeb00e4)): ?>
<?php $attributes = $__attributesOriginal97420d662d07480141d58032fdeb00e4; ?>
<?php unset($__attributesOriginal97420d662d07480141d58032fdeb00e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal97420d662d07480141d58032fdeb00e4)): ?>
<?php $component = $__componentOriginal97420d662d07480141d58032fdeb00e4; ?>
<?php unset($__componentOriginal97420d662d07480141d58032fdeb00e4); ?>
<?php endif; ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<?php if (isset($component)) { $__componentOriginal97420d662d07480141d58032fdeb00e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal97420d662d07480141d58032fdeb00e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.pie-chart','data' => ['chartTitle' => 'Grafik Jumlah Barang Berdasarkan Material','chartID' => 'chartCommodityByMaterial','series' => $charts['commodity_by_material_count']['series'],'categories' => $charts['commodity_by_material_count']['categories']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('pie-chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['chartTitle' => 'Grafik Jumlah Barang Berdasarkan Material','chartID' => 'chartCommodityByMaterial','series' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($charts['commodity_by_material_count']['series']),'categories' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($charts['commodity_by_material_count']['categories'])]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal97420d662d07480141d58032fdeb00e4)): ?>
<?php $attributes = $__attributesOriginal97420d662d07480141d58032fdeb00e4; ?>
<?php unset($__attributesOriginal97420d662d07480141d58032fdeb00e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal97420d662d07480141d58032fdeb00e4)): ?>
<?php $component = $__componentOriginal97420d662d07480141d58032fdeb00e4; ?>
<?php unset($__componentOriginal97420d662d07480141d58032fdeb00e4); ?>
<?php endif; ?>
		</div>
		<div class="col-lg-6">
			<?php if (isset($component)) { $__componentOriginal97420d662d07480141d58032fdeb00e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal97420d662d07480141d58032fdeb00e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.pie-chart','data' => ['chartTitle' => 'Grafik Jumlah Barang Berdasarkan Merk','chartID' => 'chartCommodityByBrand','series' => $charts['commodity_by_brand_count']['series'],'categories' => $charts['commodity_by_brand_count']['categories']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('pie-chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['chartTitle' => 'Grafik Jumlah Barang Berdasarkan Merk','chartID' => 'chartCommodityByBrand','series' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($charts['commodity_by_brand_count']['series']),'categories' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($charts['commodity_by_brand_count']['categories'])]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal97420d662d07480141d58032fdeb00e4)): ?>
<?php $attributes = $__attributesOriginal97420d662d07480141d58032fdeb00e4; ?>
<?php unset($__attributesOriginal97420d662d07480141d58032fdeb00e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal97420d662d07480141d58032fdeb00e4)): ?>
<?php $component = $__componentOriginal97420d662d07480141d58032fdeb00e4; ?>
<?php unset($__componentOriginal97420d662d07480141d58032fdeb00e4); ?>
<?php endif; ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<?php if (isset($component)) { $__componentOriginal186b6b67364273b38dd03324ee751423 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal186b6b67364273b38dd03324ee751423 = $attributes; } ?>
<?php $component = App\View\Components\BarChart::resolve(['chartTitle' => 'Grafik Jumlah Barang Berdasarkan Ruangan','chartID' => 'chartCommodityCountEachLocation','series' => $charts['commodity_each_location_count']['series'],'categories' => $charts['commodity_each_location_count']['categories']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bar-chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\BarChart::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
			 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal186b6b67364273b38dd03324ee751423)): ?>
<?php $attributes = $__attributesOriginal186b6b67364273b38dd03324ee751423; ?>
<?php unset($__attributesOriginal186b6b67364273b38dd03324ee751423); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal186b6b67364273b38dd03324ee751423)): ?>
<?php $component = $__componentOriginal186b6b67364273b38dd03324ee751423; ?>
<?php unset($__componentOriginal186b6b67364273b38dd03324ee751423); ?>
<?php endif; ?>
		</div>

		<div class="col-lg-12">
			<?php if (isset($component)) { $__componentOriginal1a66f4c130c10df6364191e86f050403 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1a66f4c130c10df6364191e86f050403 = $attributes; } ?>
<?php $component = App\View\Components\StackedBar::resolve(['series' => $charts['commodity_condition_by_location']['series'],'categories' => $charts['commodity_condition_by_location']['categories'],'chartTitle' => 'Grafik Perbandingan Kondisi Barang di Setiap Ruangan','colors' => ['#47C363', '#FFA426', '#FC544B'],'chartID' => 'chartCommodityConditionByLocation'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('stacked-bar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\StackedBar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
			 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1a66f4c130c10df6364191e86f050403)): ?>
<?php $attributes = $__attributesOriginal1a66f4c130c10df6364191e86f050403; ?>
<?php unset($__attributesOriginal1a66f4c130c10df6364191e86f050403); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1a66f4c130c10df6364191e86f050403)): ?>
<?php $component = $__componentOriginal1a66f4c130c10df6364191e86f050403; ?>
<?php unset($__componentOriginal1a66f4c130c10df6364191e86f050403); ?>
<?php endif; ?>
		</div>
	</div>

	<?php $__env->startPush('modal'); ?>
	<?php echo $__env->make('commodities.modal.show', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php $__env->stopPush(); ?>

	<?php $__env->startPush('js'); ?>
	<?php echo $__env->make('_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
	<?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\inven\resources\views/home.blade.php ENDPATH**/ ?>