<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Edit Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="card" style="margin-top: 2rem;">
            <div class="row m-4">

                <div class="col-sm-7">
                    <h3>Form Edit Anggota</h3>
                    <?php
                        include '../../koneksi/koneksi.php';
                        $id = $_GET['iduser'];
                        $query = mysqli_query($koneksi, "SELECT * FROM user WHERE IDuser='$id'");
                        $data = mysqli_fetch_array($query);
                    ?>
                    <a href="../anggota.php" class="btn btn-danger my-2">Kembali</a>
                    <form action="e_anggota.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" value="<?php echo $data['username']; ?>" class="form-control" required aria-describedby="emailHelp" value="<?= $data['username'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" value="<?php echo $data['password']; ?>" class="form-control" required aria-describedby="emailHelp" value="<?= $data['password'] ?>">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" name="email" value="<?php echo $data['email']; ?>" class="form-control" required aria-describedby="emailHelp" value="<?= $data['email'] ?>">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="nis" class="form-label">NIS</label>
                                    <input type="text" name="nis" value="<?php echo $data['nis']; ?>" class="form-control" required aria-describedby="emailHelp" value="<?= $data['nis'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="namalengkap" class="form-label">Nama Lengkap</label>
                                    <input type="text" name="namalengkap" value="<?php echo $data['namalengkap']; ?>" class="form-control" required aria-describedby="emailHelp" value="<?= $data['namalengkap'] ?>">
                                </div>
                            </div>
                            <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" class="form-control" required aria-describedby="emailHelp" value="<?= $data['alamat'] ?>">
                                </div>
                            </div>
                        <button type="submit" class="btn btn-primary">Perbaharui</button>
                    </form>
                    <?php 
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
