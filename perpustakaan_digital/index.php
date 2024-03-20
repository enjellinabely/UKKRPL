<!DOCTYPE html>
<html>
<head>
  <style>
  body {
    margin: 0;
    padding: 0;
    background: url(logo-login.jpg) ;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    font-family: sans-serif;
  }
  .login {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-30%, -50%);
    background: rgba(4, 29, 23, 0.5);
    padding: 50px;
    width: 270px;
    box-shadow: 0px 0px 25px 10px black;
    border-radius: 15px;
  }
  .avatar {
    font-size: 30px ;
    background: #E59866;
    width: 50px;
    height: 50px;
    line-height: 50px;
    position: fixed;
    left: 50%;
    top: 0;
    transform: translate(-50%, -50%);
    text-align: center;
    border-radius: 50%;
  }
  .login h2 {
    text-align: center;
    color: white;
    font-size: 30px;
    font-family: sans-serif;
    letter-spacing: 3px;
    padding-top: 0;
    margin-top: -20px
  }
  .box-login {
    display: flex;
    justify-content:space-between;
    margin: 10px;
    border-bottom: 2px solid white;
    padding: 8px 0;
  }
  .box-login i {
    font-size: 23px;
    color: white;
    padding: 5px 0;
  }
  .box-login input {
    width: 85%;
    padding: 5px 0;
    background: none;
    border: none;
    outline: none;
    color: white;
    font-size: 18px;
  }
  .box-login input::placeholder {
    color: white;
  }
  .box-login input:hover{
    background: rgba(10, 10, 10, 0.5);
  }
  .btn-login {
    margin-left: 10px;
    margin-bottom: 20px;
    background: none;
    border: 1px solid white;
    width: 92.5%;
    padding: 10px;
    color: white;
    font-size: 18px;
    letter-spacing: 3px;
    cursor: pointer;
  }
  .btn-login:hover{
    background: rgba(12, 30, 15, 0.5);
  }
  .bottom {
    margin-left: 10px;
    margin-right: 10px;
    display: flex;
    justify-content: space-between;
  }
  .bottom a{
    color: white;
    font-size: 15px;
    text-decoration: none;
  }
  .bottom a:hover {
    text-decoration: underline;
  }
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:  #38444d;
  }
  li {
    float: left;
  }
  li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 20px 16px;
    text-decoration: none;
  }
  li a:hover, .dropdown:hover .dropbtn {
    background-color: blue;
  }
  li.dropdown {
    display: inline-block;
  }
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
  }
  .dropdown-content a:hover {
    background-color: #f1f1f1;
  }
  .dropdown:hover .dropdown-content {
    display: block;
  }
  center{
    text-align: fixed;
    color: white;
  }
    </style>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<title>HalamanLogin</title>
<link rel="shortcut icon" href="asset/img/mts.png">
<link rel="stylesheet" href="style.css" media="screen" title="no title">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<ul>
<li><a href="registrasi.php"> Login Form Registrasi</a></li>
<div class="dropdown-content">
<a href="#">Link 1</a>
</div>
</li>
</ul>

<div class="login">
<div class="avatar">
<i class="fa fa-user"></i>
</div>
<h2><img src="asset/img/mts.png" alt="Logo" class="Gambar" width="50px" height="50px">Form Login</h2>
<?php
if(isset($_GET['pesan'])) {
if ($_GET['pesan']=="gagal") {
echo '<div class="alert alert-danger">Username atau Password Anda Salah</div>';
}
  }
?>
<form action="aksi/cek_login.php" method="post" >
<div class="box-login">
<i class="fas fa-user"></i>
<input type="text" placeholder="Username">
</div>

 <div class="box-login">
 <i class="fas fa-lock"></i>
 <input type="password" placeholder="Password">
 </div>

<button type="submit" name="login" class="btn-login">Login</button>
<div class="bottom">
<a href="registrasi.php">Forgot Password</a>
</div>
<center>
<br>
<br>
<br>
<br>
&copy; SMK Management Training Systems
<center>
      </div>
  </head>
  </html>
