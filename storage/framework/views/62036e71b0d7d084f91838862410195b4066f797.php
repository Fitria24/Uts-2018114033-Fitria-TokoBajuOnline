

<?php $__env->startSection('title','Pesanans'); ?>

<?php $__env->startSection('content'); ?>
<a href="/pesanans/create" class="card-link btn-primary">Buat Pesanan</a>
<?php $__currentLoopData = $pesanans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pesanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card" style="width: 26rem;">
  <div class="card-body">
    <a href="/barangs/<?php echo e($pesanan['id']); ?>"class="card-title">Nama Pemesan: <?php echo e($pesanan['nama_pemesan']); ?></a>
    <p class="card-subtitle mb-2 text-muted">Alamat Pemesan:<?php echo e($pesanan['alamat_pemesan']); ?></p>
    <p class="card-text">No Telepon:<?php echo e($pesanan['notelpon_pemesan']); ?></p>
    <p class="card-text">Jumlah Yang Di Pesan:<?php echo e($pesanan['jumlah_dipesan']); ?></p>
    <p class="card-text">Ukuran:<?php echo e($pesanan['ukuran']); ?></p>
    <p class="card-text">Barang Yang Di Pesan:<?php echo e($pesanan['barang_dipesan']); ?></p>

    <a href="/pesanans/<?php echo e($pesanan['id']); ?>/edit" button class="card-link btn-warning">Edit Pesanan</a>
    <form action="/pesanans/<?php echo e($pesanan['id']); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <button class="card-link btn-danger">Hapus Pesanan</button>
    </form>
  </div>
</div>
   
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo e($pesanans->links()); ?>

<?php $__env->stopSection(); ?>
  


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tokobaju\resources\views/pesanans/index.blade.php ENDPATH**/ ?>