<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport" />
	<title><?php echo e($title); ?> &mdash; <?php echo e(config('app.name')); ?></title>

	<!-- General CSS Files -->
	<link rel="stylesheet" href="<?php echo e(url('assets/bootstrap/css/bootstrap.min.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(url('assets/fontawesome/css/all.css')); ?>" />

	<!-- CSS Libraries -->
	<link rel="stylesheet" href="https://cdn.datatables.net/2.0.6/css/dataTables.bootstrap4.css" />

	<!-- Template CSS -->
	<link rel="stylesheet" href="<?php echo e(url('assets/css/style.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(url('assets/css/components.css')); ?>" />

	<link href="https://cdn.jsdelivr.net/npm/tom-select@2.4.1/dist/css/tom-select.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tom-select@2.4.1/dist/css/tom-select.bootstrap4.min.css" />
</head>

<body>
	<div id="app">
		<div class="main-wrapper">
			<div class="navbar-bg"></div>
			<nav class="navbar navbar-expand-lg main-navbar">
				<form class="form-inline mr-auto">
					<ul class="navbar-nav mr-3">
						<li>
							<a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
						</li>
					</ul>
				</form>
				<ul class="navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
							<img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1" />
							<div class="d-sm-none d-lg-inline-block">Halo, <?php echo e(auth()->user()->name); ?></div>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<div class="dropdown-title">Akun sejak: <?php echo e(auth()->user()->diffForHumanDate(auth()->user()->created_at)); ?>

							</div>
							<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mengatur profile')): ?>
							<a href="<?php echo e(route('profile.index')); ?>" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
								Pengaturan Profil </a>
							<?php endif; ?>
							<div class="dropdown-divider"></div>
							
							<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
								<?php echo csrf_field(); ?>

								<button type="submit" class="dropdown-item has-icon btn-link text-danger logout">
									Logout
								</button>
							</form>
						</div>
					</li>
				</ul>
			</nav>

			<div class="main-sidebar">
				<aside id="sidebar-wrapper">
					<div class="sidebar-brand">
						<a href="<?php echo e(route('home')); ?>"><?php echo e(config('app.name')); ?></a>
					</div>
					<div class="sidebar-brand sidebar-brand-sm">
						<a href="<?php echo e(route('home')); ?>"><?php echo e(substr(config('app.name'), 0, 2)); ?></a>
					</div>
					<ul class="sidebar-menu">
						<li class="menu-header">Dashboard</li>

						<?php if (isset($component)) { $__componentOriginalb10f44bc2ebbc5b47702b5f49de25a1a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb10f44bc2ebbc5b47702b5f49de25a1a = $attributes; } ?>
<?php $component = App\View\Components\Sidebar\SidebarLink::resolve(['name' => 'Dashboard','icon' => 'fas fa-fire','link' => ''.e(route('home')).'','active' => request()->routeIs('home')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sidebar.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Sidebar\SidebarLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb10f44bc2ebbc5b47702b5f49de25a1a)): ?>
<?php $attributes = $__attributesOriginalb10f44bc2ebbc5b47702b5f49de25a1a; ?>
<?php unset($__attributesOriginalb10f44bc2ebbc5b47702b5f49de25a1a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb10f44bc2ebbc5b47702b5f49de25a1a)): ?>
<?php $component = $__componentOriginalb10f44bc2ebbc5b47702b5f49de25a1a; ?>
<?php unset($__componentOriginalb10f44bc2ebbc5b47702b5f49de25a1a); ?>
<?php endif; ?>
						<li class="menu-header">Manajemen</li>

						<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('lihat barang')): ?>
						<?php if (isset($component)) { $__componentOriginalb10f44bc2ebbc5b47702b5f49de25a1a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb10f44bc2ebbc5b47702b5f49de25a1a = $attributes; } ?>
<?php $component = App\View\Components\Sidebar\SidebarLink::resolve(['name' => 'Data Barang','icon' => 'fas fa-boxes-stacked','link' => ''.e(route('barang.index')).'','active' => request()->routeIs('barang.index')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sidebar.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Sidebar\SidebarLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb10f44bc2ebbc5b47702b5f49de25a1a)): ?>
<?php $attributes = $__attributesOriginalb10f44bc2ebbc5b47702b5f49de25a1a; ?>
<?php unset($__attributesOriginalb10f44bc2ebbc5b47702b5f49de25a1a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb10f44bc2ebbc5b47702b5f49de25a1a)): ?>
<?php $component = $__componentOriginalb10f44bc2ebbc5b47702b5f49de25a1a; ?>
<?php unset($__componentOriginalb10f44bc2ebbc5b47702b5f49de25a1a); ?>
<?php endif; ?>
						<?php endif; ?>

						<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('lihat perolehan')): ?>
						<?php if (isset($component)) { $__componentOriginalb10f44bc2ebbc5b47702b5f49de25a1a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb10f44bc2ebbc5b47702b5f49de25a1a = $attributes; } ?>
<?php $component = App\View\Components\Sidebar\SidebarLink::resolve(['name' => 'Data Perolehan','icon' => 'far fa-face-laugh','link' => ''.e(route('perolehan.index')).'','active' => request()->routeIs('perolehan.index')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sidebar.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Sidebar\SidebarLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb10f44bc2ebbc5b47702b5f49de25a1a)): ?>
<?php $attributes = $__attributesOriginalb10f44bc2ebbc5b47702b5f49de25a1a; ?>
<?php unset($__attributesOriginalb10f44bc2ebbc5b47702b5f49de25a1a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb10f44bc2ebbc5b47702b5f49de25a1a)): ?>
<?php $component = $__componentOriginalb10f44bc2ebbc5b47702b5f49de25a1a; ?>
<?php unset($__componentOriginalb10f44bc2ebbc5b47702b5f49de25a1a); ?>
<?php endif; ?>
						<?php endif; ?>

						<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('lihat ruangan')): ?>
						<?php if (isset($component)) { $__componentOriginalb10f44bc2ebbc5b47702b5f49de25a1a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb10f44bc2ebbc5b47702b5f49de25a1a = $attributes; } ?>
<?php $component = App\View\Components\Sidebar\SidebarLink::resolve(['name' => 'Data Ruangan','icon' => 'fas fa-map-location-dot','link' => ''.e(route('ruangan.index')).'','active' => request()->routeIs('ruangan.index')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sidebar.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Sidebar\SidebarLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb10f44bc2ebbc5b47702b5f49de25a1a)): ?>
<?php $attributes = $__attributesOriginalb10f44bc2ebbc5b47702b5f49de25a1a; ?>
<?php unset($__attributesOriginalb10f44bc2ebbc5b47702b5f49de25a1a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb10f44bc2ebbc5b47702b5f49de25a1a)): ?>
<?php $component = $__componentOriginalb10f44bc2ebbc5b47702b5f49de25a1a; ?>
<?php unset($__componentOriginalb10f44bc2ebbc5b47702b5f49de25a1a); ?>
<?php endif; ?>
						<?php endif; ?>

						<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('lihat pengguna')): ?>
						<?php if (isset($component)) { $__componentOriginalb10f44bc2ebbc5b47702b5f49de25a1a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb10f44bc2ebbc5b47702b5f49de25a1a = $attributes; } ?>
<?php $component = App\View\Components\Sidebar\SidebarLink::resolve(['name' => 'Data Pengguna','icon' => 'fas fa-users','link' => ''.e(route('pengguna.index')).'','active' => request()->routeIs('pengguna.index')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sidebar.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Sidebar\SidebarLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb10f44bc2ebbc5b47702b5f49de25a1a)): ?>
<?php $attributes = $__attributesOriginalb10f44bc2ebbc5b47702b5f49de25a1a; ?>
<?php unset($__attributesOriginalb10f44bc2ebbc5b47702b5f49de25a1a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb10f44bc2ebbc5b47702b5f49de25a1a)): ?>
<?php $component = $__componentOriginalb10f44bc2ebbc5b47702b5f49de25a1a; ?>
<?php unset($__componentOriginalb10f44bc2ebbc5b47702b5f49de25a1a); ?>
<?php endif; ?>
						<?php endif; ?>

						<li class="menu-header">Pengaturan</li>
						<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mengatur profile')): ?>
						<?php if (isset($component)) { $__componentOriginalb10f44bc2ebbc5b47702b5f49de25a1a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb10f44bc2ebbc5b47702b5f49de25a1a = $attributes; } ?>
<?php $component = App\View\Components\Sidebar\SidebarLink::resolve(['name' => 'Pengaturan Profil','icon' => 'fas fa-cog','link' => ''.e(route('profile.index')).'','active' => request()->routeIs('profile.index')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sidebar.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Sidebar\SidebarLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb10f44bc2ebbc5b47702b5f49de25a1a)): ?>
<?php $attributes = $__attributesOriginalb10f44bc2ebbc5b47702b5f49de25a1a; ?>
<?php unset($__attributesOriginalb10f44bc2ebbc5b47702b5f49de25a1a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb10f44bc2ebbc5b47702b5f49de25a1a)): ?>
<?php $component = $__componentOriginalb10f44bc2ebbc5b47702b5f49de25a1a; ?>
<?php unset($__componentOriginalb10f44bc2ebbc5b47702b5f49de25a1a); ?>
<?php endif; ?>
						<?php endif; ?>

						<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('lihat peran dan hak akses')): ?>
						<?php if (isset($component)) { $__componentOriginalb10f44bc2ebbc5b47702b5f49de25a1a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb10f44bc2ebbc5b47702b5f49de25a1a = $attributes; } ?>
<?php $component = App\View\Components\Sidebar\SidebarLink::resolve(['name' => 'Peran & Hak Akses','icon' => 'fas fa-user-shield','link' => ''.e(route('peran-dan-hak-akses.index')).'','active' => request()->routeIs('peran-dan-hak-akses.index')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sidebar.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Sidebar\SidebarLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb10f44bc2ebbc5b47702b5f49de25a1a)): ?>
<?php $attributes = $__attributesOriginalb10f44bc2ebbc5b47702b5f49de25a1a; ?>
<?php unset($__attributesOriginalb10f44bc2ebbc5b47702b5f49de25a1a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb10f44bc2ebbc5b47702b5f49de25a1a)): ?>
<?php $component = $__componentOriginalb10f44bc2ebbc5b47702b5f49de25a1a; ?>
<?php unset($__componentOriginalb10f44bc2ebbc5b47702b5f49de25a1a); ?>
<?php endif; ?>
						<?php endif; ?>

					</ul>

					<div class="mt-4 mb-4 p-3 hide-sidebar-mini">
						<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
							<button type="submit" class="btn btn-danger btn-lg btn-block btn-icon-split logout">
								<i class="fas fa-fw fa-sign-out-alt"></i>
								Logout
							</button>
							<?php echo csrf_field(); ?>
						</form>
					</div>
				</aside>
			</div>

			<!-- Main Content -->
			<div class="main-content">
				<section class="section">
					<div class="section-header">
						<h1><?php echo e($page_heading); ?></h1>
					</div>

					<?php echo e($slot); ?>

				</section>
			</div>
		</div>
	</div>

	<!-- General JS Scripts -->
	<script src="<?php echo e(url('assets/js/jquery-3.5.1.min.js')); ?>"></script>
	<script src="<?php echo e(url('assets/js/popper.min.js')); ?>"></script>
	<script src="<?php echo e(url('assets/bootstrap/js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(url('assets/js/jquery.nicescroll.min.js')); ?>"></script>
	<script src="<?php echo e(url('assets/js/moment.min.js')); ?>"></script>
	<script src="<?php echo e(url('assets/js/stisla.js')); ?>"></script>

	<!-- JS Libraies -->
	<script src="https://cdn.datatables.net/2.0.6/js/dataTables.js"></script>
	<script src="https://cdn.datatables.net/2.0.6/js/dataTables.bootstrap4.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>

	<!-- Template JS File -->
	<script src="<?php echo e(url('assets/js/scripts.js')); ?>"></script>
	<script src="<?php echo e(url('assets/js/custom.js')); ?>"></script>

	<!-- Page Specific JS File -->
	<script src="<?php echo e(url('assets/js/page/index-0.js')); ?>"></script>

	<script src="https://cdn.jsdelivr.net/npm/tom-select@2.4.1/dist/js/tom-select.complete.min.js"></script>

	<script src="<?php echo e(asset('js/scripts.js')); ?>"></script>

	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

	<script>
		$(document).ready(function () {
				bsCustomFileInput.init();

        $(".delete-button").click(function (e) {
          e.preventDefault();
          Swal.fire({
            title: "Hapus?",
            text: "Data tidak akan bisa dikembalikan!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya",
            cancelButtonText: "Batal",
            reverseButtons: true,
          }).then((result) => {
            if (result.value) {
              $(this).parent().submit();
            }
          });
        });

        $(".logout").click(function (e) {
          e.preventDefault();
          Swal.fire({
            title: "Keluar?",
            text: "Anda akan keluar dari aplikasi!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya",
            cancelButtonText: "Batal",
            reverseButtons: true,
          }).then((result) => {
            if (result.value) {
              $(this).parent().submit();
            }
          });
        });
      });
	</script>
	<?php echo $__env->yieldPushContent('modal'); ?>
	<?php echo $__env->yieldPushContent('js'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\inven\resources\views/components/layout.blade.php ENDPATH**/ ?>