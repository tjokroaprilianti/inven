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
	 <?php $__env->slot('title', null, []); ?> Halaman Pengaturan Profil <?php $__env->endSlot(); ?>
	 <?php $__env->slot('page_heading', null, []); ?> Pengaturan Profil <?php $__env->endSlot(); ?>

	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-6">
					<?php echo $__env->make('utilities.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					<form action="<?php echo e(route('profile.update')); ?>" method="POST">
						<?php echo csrf_field(); ?>
						<?php echo method_field('PUT'); ?>

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
										Nama Lengkap <span class="text-danger">*</span>
									</label>
									<input type="text" class="form-control <?php $__errorArgs = ['name', 'update'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name"
										id="name" value="<?php echo e($user->name); ?>" placeholder="Masukan nama lengkap" required>
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

							<div class="col-md-12">
								<div class="form-group">
									<label for="email">
										Alamat Email <span class="text-danger">*</span>
									</label>
									<input type="text" class="form-control <?php $__errorArgs = ['email', 'update'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email"
										id="email" value="<?php echo e($user->email); ?>" placeholder="Masukan alamat email" required>
									<small class="text-muted">Jika alamat email diubah maka akan otomatis keluar dari aplikasi.</small>
									<?php $__errorArgs = ['email', 'update'];
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
									<label for="password">
										Kata Sandi
									</label>
									<input type="password" class="form-control <?php $__errorArgs = ['password', 'update'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
										name="password" id="password" placeholder="Masukan kata sandi">
									<small class="text-muted">Jika kata sandi diubah maka akan otomatis keluar dari aplikasi.</small>
									<?php $__errorArgs = ['password', 'update'];
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
									<label for="password_confirmation">
										Konfirmasi Kata Sandi
									</label>
									<input type="password"
										class="form-control <?php $__errorArgs = ['password_confirmation', 'update'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
										name="password_confirmation" id="password_confirmation" placeholder="Ulangi kata sandi">
									<?php $__errorArgs = ['password_confirmation', 'update'];
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

						<!-- Modal Footer -->
						<button type="submit" class="btn btn-success">
							<i class="fas fa-floppy-disk mr-1"></i> Simpan Perubahan
						</button>
					</form>
				</div>
			</div>
		</div>
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
<?php /**PATH C:\xampp\htdocs\inven\resources\views/profile.blade.php ENDPATH**/ ?>