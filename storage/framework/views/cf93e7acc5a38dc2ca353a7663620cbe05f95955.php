
<?php $__env->startSection('title','Edit Siswa'); ?>
<?php $__env->startSection('container'); ?>
<div class="container mt-4">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
<li class="breadcrumb-item"><a href="<?php echo e(url('/DaftarSiswa')); ?>">Daftar Siswa</a></li>
<li class="breadcrumb-item active" aria-current="page"><?php echo $__env->yieldContent('title'); ?></li>
</ol>
</nav>
</div>
<div class="container">
<div class="row">
<div class="col-md-12 mt-3">
<h3>Form Edit Siswa</h3>
<form action="" method="post">
<div class="form-group">
<label for="name">Nama Siswa</label>
<input class="form-control" type="text" name="name" id="name" placeholder="Masukkan Nama Siswa">
</div>
<div class="form-group">
<label for="jurusan">Jurusan</label>
<input class="form-control" type="text" name="jurusan" id="jurusan" placeholder="masukkan Nama Jurusan">
</div>
<div class="form-group">
<label for="angkatan">Angkatan</label>
<input class="form-control" type="number" name="angkatan" id="angkatan" placeholder="masukkan Tahun Angkatan">
</div>
<div class="form-group">
<label for="kelas">Kelas</label>
<input class="form-control" type="text" name="kelas" id="kelas" placeholder="masukkan Kelas">
</div>
<div class="form-group float-right">
<button class="btn btn-lg btn-danger" type="reset">Reset</button>
<button class="btn btn-lg btn-primary" type="submit">Submit</button>
</div>
</form>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Code\CRUDserver\resources\views/edit.blade.php ENDPATH**/ ?>