

<?php $__env->startSection('title','Toko Baju Online'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-body">
    <h3> Kode Barang: <?php echo e($barang['kode_barang']); ?></h3>
    <h3> Nama Barang : <?php echo e($barang['nama_barang']); ?></h3>
    <h3> Harga Barang : <?php echo e($barang['harga_barang']); ?></h3>
    <h3> Jumlah Barang: <?php echo e($barang['jumlah_barang']); ?></h3>
    <h3> Keterangan : <?php echo e($barang['keterangan']); ?></h3>
    </div>
</div>
<?php $__env->stopSection(); ?>
  
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tokobaju\resources\views/barangs/show.blade.php ENDPATH**/ ?>