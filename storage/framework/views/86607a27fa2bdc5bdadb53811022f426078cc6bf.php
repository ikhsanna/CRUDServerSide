
<?php $__env->startSection('title','Daftar Siswa'); ?>
<?php $__env->startSection('container'); ?>
<div class="container mt-4">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
<li class="breadcrumb-item active" aria-current="page"><?php echo $__env->yieldContent('title'); ?></li>
</ol>
</nav>
</div>
<div class="container">
<div class="row">
<div class="my-4 col-12">
<h1 class="float-left">Daftar Siswa</h1>
<a class="btn btn-primary float-right mt-2" href="<?php echo e(url('/DaftarSiswa/tambah')); ?>" role="button">Tambah Siswa</a>
</div>
<div class="col-12">
<table class="table table-stripped">
<thead class="thead-primary">
<tr>
<th class="text-center">No</th>
<th>Nama Siswa</th>
<th>Jurusan</th>
<th class="text-center">Angkatan</th>
<th>Kelas</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<tr>
    
<td class="text-center">1</td>
<td>Andi de mata</td>
<td>Sistem Informasi</td>
<td class="text-center">2019</td>
<td>2CC20</td>
<td>
<a href="<?php echo e(url('/DaftarSiswa/edit')); ?>" class="badge badge-success">edit</a>
<a href="" class="badge badge-danger">delete</a>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Code\CRUDserver\resources\views/daftar.blade.php ENDPATH**/ ?>