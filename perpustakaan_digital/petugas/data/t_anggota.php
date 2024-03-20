<?php
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form
$IDuser                 = $_POST['IDuser'];
$username               = $_POST['username'];
$password               = $_POST['password'];
$email                  = $_POST['email'];
$nis                    = $_POST['nis'];
$namalengkap            = $_POST['namalengkap'];
$alamat                 = $_POST['alamat'];
$level                  = $_POST['level'];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT into peminjaman(IDuser,username,'password',email,nis,namalengkap,alamat,'level') 
values('$IDuser','$username','$password','$email','$nis','$namalengkap','$alamat','$level')");
 
// mengalihkan halaman kembali ke index.php
header("location:../anggota.php");
?>