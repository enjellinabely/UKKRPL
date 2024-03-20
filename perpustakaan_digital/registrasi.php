<!doctype html>
<html lang="en">
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
    .content{
        position: fixed;
        top: 105%;
        left: 40%;
        transform: translate(-30%, -50%);
        background: rgba(4, 29, 23, 0.5);
        padding: 320px;
        width: 1000px;
        box-shadow: 0px 0px 25px 10px black;
        border-radius: 15px;
    }
    .card {
        font-size: 20px ;
        background: rgba(4, 29, 23, 0.5);
        width: 700px;
        height: 0px;
        line-height: 0px;
        position: fixed;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: left;
        box-shadow: 0px 0px 25px 10px white;
        border-radius: 50%;
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
    .btn-primary {
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
    .btn-primary:hover{
        background: rgba(12, 30, 15, 0.5);
    }
            </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Registrasi</title>
    <link rel="shortcut icon" href="asset/img/mts.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <ul>
  <li><a href="index.php">Form Login</a></li>
    <div class="dropdown-content">
        <a href="#">Link</a>
        </div>
  </li>
</ul>
  <div class="container">
  <div class="content">
  <div class="card" style="margin-top: 0rem;">
  <div class="row">
  <div class="col m-3">
  <h2><img src="asset/img/mts.png" alt="Logo" class="Gambar" width="50px" height="50px">Form Registrasi</h2>
  <form action="aksi/proses_daftar.php" method="post" >
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">NIS</label>
  <input type="text" name="nis" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
</div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
    <input type="text" name="namalengkap" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
</div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="text" name="email" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
</div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Alamat</label>
    <input type="text" name="alamat" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
</div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" name="username" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
</div>

<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" required id="exampleInputPassword1">
</div>

<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Level</label>
    <select class="form-select" name="level" aria-label="Default select example">
        <option selected>Pilih</option>
        <option value="admin">Admin</option>
        <option value="petugas">Petugas</option>
        <option value="peminjam">Peminjam</option>
    </select>
   </div>
   <button type="submit" class="btn btn-primary">Simpan</button>
   </form>
   </div>
</div>
</div>
</div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
