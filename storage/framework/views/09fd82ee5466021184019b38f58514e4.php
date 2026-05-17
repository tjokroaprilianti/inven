<div class="modal fade" id="commodity_edit_modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
	role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalLabel">Ubah Data Barang</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" id="editForm">
				<?php echo csrf_field(); ?>
				<?php echo method_field('PUT'); ?>

				<div class="modal-body">
					<!-- Info Alert -->
					<div class="alert alert-warning" role="alert">
						<i class="fa-solid fa-circle-info mr-2"></i>
						Kolom yang memiliki tanda merah <span class="font-weight-bold">wajib diisi.</span>
					</div>

					<!-- First Row: Basic Information -->
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="item_code">
									Kode Barang <span class="text-danger">*</span>
								</label>
								<input type="text" class="form-control <?php $__errorArgs = ['item_code', 'update'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
									name="item_code" id="item_code" value="<?php echo e(old('item_code')); ?>" placeholder="Masukan kode barang"
									required>
								<?php $__errorArgs = ['item_code', 'update'];
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

						<div class="col-md-4">
							<div class="form-group">
								<label for="name">
									Nama Barang <span class="text-danger">*</span>
								</label>
								<input type="text" class="form-control <?php $__errorArgs = ['name', 'update'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name"
									id="name" value="<?php echo e(old('name')); ?>" placeholder="Masukan nama barang" required>
								<?php $__errorArgs = ['name', 'update'];
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

						<div class="col-md-4">
							<div class="form-group">
								<label for="commodity_location_id">
									Lokasi Barang <span class="text-danger">*</span>
								</label>
								<select class="form-control select2 <?php $__errorArgs = ['commodity_location_id', 'update'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
									name="commodity_location_id" id="commodity_location_id" required>
									<option value="">Pilih Lokasi Barang</option>
									<?php $__currentLoopData = $commodity_locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commodity_location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($commodity_location->id); ?>" <?php echo e(old('commodity_location_id')==$commodity_location->id
										? 'selected' : ''); ?>>
										<?php echo e($commodity_location->name); ?>

									</option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
								<?php $__errorArgs = ['commodity_location_id', 'update'];
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

					<hr>

					<!-- Second Row: Material and Brand -->
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="material">
									Bahan <span class="text-danger">*</span>
								</label>
								<input type="text" class="form-control <?php $__errorArgs = ['material', 'update'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
									name="material" id="material" value="<?php echo e(old('material')); ?>" placeholder="Masukan bahan barang"
									required>
								<?php $__errorArgs = ['material', 'update'];
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

						<div class="col-md-6">
							<div class="form-group">
								<label for="brand">
									Merek <span class="text-danger">*</span>
								</label>
								<input type="text" class="form-control <?php $__errorArgs = ['brand', 'update'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="brand"
									id="brand" value="<?php echo e(old('brand')); ?>" placeholder="Masukan merek barang" required>
								<?php $__errorArgs = ['brand', 'update'];
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

					<!-- Third Row: Purchase Details -->
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="year_of_purchase">
									Tahun Pembelian <span class="text-danger">*</span>
								</label>
								<input type="number" class="form-control <?php $__errorArgs = ['year_of_purchase', 'update'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
									name="year_of_purchase" id="year_of_purchase" value="<?php echo e(old('year_of_purchase')); ?>" min="2000"
									max="<?php echo e(date('Y') + 1); ?>" placeholder="Tahun pembelian" required>
								<?php $__errorArgs = ['year_of_purchase', 'update'];
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

						<div class="col-md-4">
							<div class="form-group">
								<label for="commodity_acquisition_id">
									Asal Perolehan <span class="text-danger">*</span>
								</label>
								<select class="form-control select2 <?php $__errorArgs = ['commodity_acquisition_id', 'update'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
									name="commodity_acquisition_id" id="commodity_acquisition_id" required>
									<option value="">Pilih Asal Perolehan</option>
									<?php $__currentLoopData = $commodity_acquisitions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commodity_acquisition): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($commodity_acquisition->id); ?>" <?php echo e(old('commodity_acquisition_id')==$commodity_acquisition->id ? 'selected' : ''); ?>>
										<?php echo e($commodity_acquisition->name); ?>

									</option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
								<?php $__errorArgs = ['commodity_acquisition_id', 'update'];
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

						<div class="col-md-4">
							<div class="form-group">
								<label for="condition">
									Kondisi <span class="text-danger">*</span>
								</label>
								<select class="form-control <?php $__errorArgs = ['condition', 'update'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="condition"
									id="condition" required>
									<option value="">Pilih Kondisi</option>
									<option value="1" <?php echo e(old('condition')==1 ? 'selected' : ''); ?>>Baik</option>
									<option value="2" <?php echo e(old('condition')==2 ? 'selected' : ''); ?>>Kurang Baik</option>
									<option value="3" <?php echo e(old('condition')==3 ? 'selected' : ''); ?>>Rusak Berat</option>
								</select>
								<?php $__errorArgs = ['condition', 'update'];
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

					<hr>

					<!-- Fourth Row: Pricing -->
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="quantity">
									Kuantitas <span class="text-danger">*</span>
								</label>
								<input type="number" class="form-control <?php $__errorArgs = ['quantity', 'update'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
									name="quantity" id="quantity" value="<?php echo e(old('quantity')); ?>" min="1" placeholder="Jumlah barang"
									required>
								<?php $__errorArgs = ['quantity', 'update'];
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

						<div class="col-md-4">
							<div class="form-group">
								<label for="price">
									Harga Total <span class="text-danger">*</span>
								</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">Rp</span>
									</div>
									<input type="number" class="form-control <?php $__errorArgs = ['price', 'update'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="price"
										id="price" value="<?php echo e(old('price')); ?>" min="0" placeholder="Harga total" required>
								</div>
								<?php $__errorArgs = ['price', 'update'];
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

						<div class="col-md-4">
							<div class="form-group">
								<label for="price_per_item">
									Harga Satuan <span class="text-danger">*</span>
								</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">Rp</span>
									</div>
									<input type="number" class="form-control <?php $__errorArgs = ['price_per_item', 'update'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
										name="price_per_item" id="price_per_item" value="<?php echo e(old('price_per_item')); ?>" min="0"
										placeholder="Harga per item" required>
								</div>
								<?php $__errorArgs = ['price_per_item', 'update'];
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

					<!-- Notes -->
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<label for="note">
									Keterangan <small class="text-muted">(opsional)</small>
								</label>
								<textarea class="form-control <?php $__errorArgs = ['note', 'update'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="note" id="note"
									rows="3" placeholder="Masukan keterangan tambahan"><?php echo e(old('note')); ?></textarea>
								<?php $__errorArgs = ['note', 'update'];
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
						<i class="fas fa-floppy-disk mr-1"></i> Simpan Perubahan
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php /**PATH C:\xampp\htdocs\inven\resources\views/commodities/modal/edit.blade.php ENDPATH**/ ?>