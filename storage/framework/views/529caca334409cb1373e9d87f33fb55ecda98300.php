

<?php $__env->startSection('title','Barangs'); ?>

<?php $__env->startSection('content'); ?>
<a href="/barangs/create" class="card-link btn-primary">Tambah Barang</a>
<?php $__currentLoopData = $barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card" style="width: 26rem;">
  <div class="card-body">
    <a href="/barangs/<?php echo e($barang['id']); ?>"class="card-title">Kode Barang: <?php echo e($barang['kode_barang']); ?></a>
    <p class="card-subtitle mb-2 text-muted">Nama Barang:<?php echo e($barang['nama_barang']); ?></p>
    <p class="card-text">Harga Barang:<?php echo e($barang['harga_barang']); ?></p>
    <p class="card-text">Jumlah Barang:<?php echo e($barang['jumlah_barang']); ?></p>
    <p class="card-text"> Ukuran: <?php echo e($barang['keterangan']); ?></p>

    <a href="/barangs/<?php echo e($barang['id']); ?>/edit" button class="card-link btn-warning">Edit Barang</a>
    <form action="/barangs/<?php echo e($barang['id']); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <button class="card-link btn-danger">Hapus Barang</button>
    </form>
  </div>
</div>
   
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo e($barangs->links()); ?>

<?php $__env->stopSection(); ?>
  


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tokobaju\resources\views/barangs/index.blade.php ENDPATH**/ ?>