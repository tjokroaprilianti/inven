<div class="modal fade" id="commodity_acquisition_create_modal" data-backdrop="static" data-keyboard="false"
	tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalLabel">Tambah Data Perolehan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo e(route('perolehan.store')); ?>" method="POST">
				<?php echo csrf_field(); ?>

				<div class="modal-body">
					<!-- Info Alert -->
					<div class="alert alert-warning" role="alert">
						<i class="fa-solid fa-circle-info mr-2"></i>
						Kolom yang memiliki tanda merah <span class="font-weight-bold">wajib diisi.</span>
					</div>

					<!-- First Row: Basic Information -->
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="name">
									Nama Perolehan <span class="text-danger">*</span>
								</label>
								<input type="text" class="form-control <?php $__errorArgs = ['name', 'store'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name"
									id="name" value="<?php echo e(old('name')); ?>" placeholder="Masukan nama perolehan" required>
								<?php $__errorArgs = ['name', 'store'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
								<div class="invalid-feedback d-block">
									<?php echo e($message); ?>

								</div>
								<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label for="description">
									Deskripsi Perolehan <small class="text-muted">(opsional)</small>
								</label>
								<textarea class="form-control <?php $__errorArgs = ['description', 'store'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="description"
									id="description" rows="3"
									placeholder="Masukan deskripsi perolehan"><?php echo e(old('description')); ?></textarea>
								<?php $__errorArgs = ['description', 'store'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
								<div class="invalid-feedback d-block">
									<?php echo e($message); ?>

								</div>
								<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
							</div>
						</div>
					</div>
				</div>

				<!-- Modal Footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">
						<i class="fas fa-times mr-1"></i> Tutup
					</button>
					<button type="submit" class="btn btn-success">
						<i class="fas fa-plus mr-1"></i> Tambah
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php /**PATH C:\xampp\htdocs\inven\resources\views/commodity-acquisitions/modal/create.blade.php ENDPATH**/ ?>