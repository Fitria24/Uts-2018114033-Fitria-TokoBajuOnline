<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title> <?php echo $__env->yieldContent('title'); ?></title>
  </head>
  <body>
  <h3> <center>Toko Baju Online </center></h3><br>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 mg-2">
  <img src="<?php echo e(url('img/bajulucu.jpg')); ?>" class="rounded mx-auto d-block" width="250"alt="500"> 

</div>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
    <a class="navbar-brand" href="#">Toko Baju Online</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      <a class="nav-link active" href="/homes">Home <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="/gambarproduk">Gambar Produk</a> <br><br>
      <a class="nav-link" href="/pesanans">Data Pesanan</a> <br><br>
        <a class="nav-link" href="/barangs">Data Persediaan</a> <br><br>
        
      </div>
    </div>
    </nav>
 
  <?php echo $__env->yieldContent('content'); ?>
<div class="container">
<div class="row justify">
<div class="col-md-4 mg-2">
<div class="col-md-12 mb-4">
<div class="card"style="width: 18rem;">
<img src="<?php echo e(url('uploads/kemejaputihpanjang.jpeg')); ?>" class="rounded mx-auto d-block" width="250"alt="500"> 
Gambar Produk a1 :<br>
Nama Barang : Baju Kemeja Putih Pria Lengan Panjang<br>
Ukuran : M <br>
Harga : 100000</br>
<a href="pesanans" class="btn btn-primary">Pesan</a>
</div>
<div class="container">
<div class="row justify">
<div class="col-md-4 mg-2">
<div class="col-md-12 mb-4">
<div class="card"style="width: 18rem;">
<img src="<?php echo e(url('uploads/kemejabirupanjang.jpeg')); ?>" class="rounded mx-auto d-block" width="250"alt="500"> 
Gambar Produk a1 :<br>
Nama Barang : Baju Kemeja Biru Pria Lengan Panjang<br>
Ukuran : M <br>
Harga : 100000
<a href="pesanans" class="btn btn-primary">Pesan</a>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html><?php /**PATH C:\xampp\htdocs\tokobaju\resources\views/gambarproduk/index.blade.php ENDPATH**/ ?>