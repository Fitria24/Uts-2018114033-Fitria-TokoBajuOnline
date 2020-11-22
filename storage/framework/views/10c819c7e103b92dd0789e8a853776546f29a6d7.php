

<?php $__env->startSection('title','Pesanans'); ?>

<?php $__env->startSection('content'); ?>
<form action="/pesanans/<?php echo e($pesanan['id']); ?>" method="POST">
<?php echo csrf_field(); ?>
<?php echo method_field('PUT'); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Pemesan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_pemesan" aria-describedby="emailHelp"  
    value="<?php echo e(old('nama_pemesan')? old('nama_pemesan'):$pesanan['nama_pemesan']); ?>">
    <?php $__errorArgs = ['nama_pemesan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div class="alert alert-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat Pemesan</label>
    <input type="text" class="form-control"name="alamat_pemesan" id="exampleInputPassword1"
    value="<?php echo e(old('alamat_pemesan')? old('alamat_pemesan'):$pesanan['alamat_pemesan']); ?>">
    <?php $__errorArgs = ['alamat_pemesan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div class="alert alert-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">No Telepon</label>
    <input type="text" class="form-control" name="notelpon_pemesan" id="exampleInputPassword1"
    value="<?php echo e(old('notelpon_pemesan')? old('notelpon_pemesan'):$pesanan['notelpon_pemesan']); ?>">
    <?php $__errorArgs = ['notelpon_pemesan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div class="alert alert-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">No Telepon</label>
    <input type="text" class="form-control" name="jumlah_dipesan" id="exampleInputPassword1"
    value="<?php echo e(old('jumlah_dipesan')? old('jumlah_dipesan'):$pesanan['jumlah_dipesan']); ?>">
    <?php $__errorArgs = ['jumlah_dipesan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div class="alert alert-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ukuran</label>
    <input type="text" class="form-control" name="ukuran" id="exampleInputPassword1" value="<?php echo e(old('ukuran')); ?>">
    <?php $__errorArgs = ['ukuran'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div class="alert alert-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Barang Yang Dipesan</label>
    <input type="text" class="form-control" name="barang_dipesan" id="exampleInputPassword1"
    value="<?php echo e(old('barang_dipesan')? old('barang_dipesan'):$pesanan['barang_dipesan']); ?>">
    <?php $__errorArgs = ['barang_dipesan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div class="alert alert-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>
  <button type="submit" class="btn btn-primary">Edit Pesanan</button>
</form> 

<?php $__env->stopSection(); ?>
  


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tokobaju\resources\views/pesanans/edit.blade.php ENDPATH**/ ?>