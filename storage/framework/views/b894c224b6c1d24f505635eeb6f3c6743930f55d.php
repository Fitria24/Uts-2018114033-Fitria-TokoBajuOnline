

<?php $__env->startSection('title','Barangs'); ?>

<?php $__env->startSection('content'); ?>
<form action="/barangs/<?php echo e($barang['id']); ?>" method="POST">
<?php echo csrf_field(); ?>
<?php echo method_field('PUT'); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Kode Barang</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="kode_barang" aria-describedby="emailHelp"  
    value="<?php echo e(old('kode_barang')? old('kode_barang'):$barang['kode_barang']); ?>">
    <?php $__errorArgs = ['kode_barang'];
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
    <label for="exampleInputPassword1">Nama Barang</label>
    <input type="text" class="form-control"name="nama_barang" id="exampleInputPassword1"
    value="<?php echo e(old('nama_barang')? old('nama_barang'):$barang['nama_barang']); ?>">
    <?php $__errorArgs = ['nama_barang'];
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
    <label for="exampleInputPassword1">Harga Barang</label>
    <input type="text" class="form-control" name="harga_barang" id="exampleInputPassword1"
    value="<?php echo e(old('harga_barang')? old('harga_barang'):$barang['harga_barang']); ?>">
    <?php $__errorArgs = ['harga_barang'];
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
    <label for="exampleInputPassword1">Jumlah Barang</label>
    <input type="text" class="form-control" name="jumlah_barang" id="exampleInputPassword1"
    value="<?php echo e(old('jumlah_barang')? old('jumlah_barang'):$barang['jumlah_barang']); ?>">
    <?php $__errorArgs = ['jumlah_barang'];
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
    <input type="text" class="form-control" name="keterangan" id="exampleInputPassword1"
    value="<?php echo e(old('keterangan')? old('keterangan'):$barang['keterangan']); ?>">
    <?php $__errorArgs = ['keterangan'];
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
  <button type="submit" class="btn btn-primary">Edit Barang</button>
</form> 

<?php $__env->stopSection(); ?>
  


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tokobaju\resources\views/barangs/edit.blade.php ENDPATH**/ ?>