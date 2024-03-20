<?php
include 'layout/header.php';
?>

<div class="container">
<div class="row">
    <div class="col-sm-6" style="margin-top: 5rem;">
          <a href="index_pts.php" class="btn">Dashboard</a>
          <br>
          <a href="anggota.php" class="btn">Data Anggota</a>
          <br>
          <a href="buku.php" class="btn">Data Buku</a>
          <br>
          <a href="peminjam.php" class="btn">Data Peminjam</a>
          <br>
          <a href="../logout.php" class="btn">Logout</a>
    </div>
    <div class="col-sm-4 mt-5">
    <h2>SELAMAT DATANG</h2>
      <h3>Di Halaman Petugas</h3>
      <h6>Membaca adalah jembatan dunia ke masa depan</h6>

      <div class="card">
        <div class="card-body text-white text-center bg-warning">
          <h2>Data Buku</h2>
          <h1><b>5</b></h1>
        </div>
        <a href="buku.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
      <br>
      <div class="card">
        <div class="card-body text-white text-center bg-success">
          <h2>Data Anggota</h2>
          <h1><b>3</b></h1>
        </div>
        <a href="anggota.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
      <br>
      <div class="card">
        <div class="card-body text-white text-center bg-warning">
          <h2>Data Peminjam</h2>
          <h1><b>1</b></h1>
        </div>
        <a href="peminjam.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
     
    </div>
    </div>
  </div>
</div>

<?php
include 'layout/footer.php';
?>