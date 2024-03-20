<?php
include 'layout/header.php';
?>

<div class="container">
     
  <div class="row">
  <div class="col-sm-6" style="margin-top: 5rem;">
      <h2>SELAMAT DATANG</h2>
      <h3>Di Halaman Administrator</h3>
      <h6>Membaca adalah jembatan dunia ke masa depan</h6>
    </div>
    <div class="col-sm-6" style="mar"gin-top: 5rem;>
    <img src="../asset/img/buku.png" width="500" alt="">
    </div>

    <?php

include '../koneksi/koneksi.php';

$buku = mysqli_query($koneksi, "SELECT * FROM buku");
$user = mysqli_query($koneksi, "SELECT * FROM user");
$pinjam = mysqli_query($koneksi, "SELECT * FROM peminjaman");


$b = mysqli_num_rows($buku);
$u = mysqli_num_rows($user);
$p = mysqli_num_rows($pinjam);

?>
    <div class="row">
    <div class="card">
        <div class="card-body text-white text-center bg-info">
          <h2>Data Buku</h2>
          <h1><b><?php echo $b;?></b></h1>
        </div>
        <a href="buku.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
      </div>
    </div>
    <br>
    <div class="row">
    <div class="card">
        <div class="card-body text-white text-center bg-primary">
          <h2>Data Anggota</h2>
          <h1><b><?php echo $u;?></b></h1>
        </div>
        <a href="anggota.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
      </div>
    </div>
    <br>
    <div class="row">
    <div class="card">
        <div class="card-body text-white text-center bg-info">
          <h2>Data Peminjam</h2>
          <h1><b><?php echo $p;?></b></h1>
        </div>
        <a href="peminjam.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
      </div>
    </div>
<?php
include 'layout/footer.php';

