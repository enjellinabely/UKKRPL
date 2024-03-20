<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Tambah Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="card" style="margin-top: 1rem;">
            <div class="row m-4">

                <div class="col-sm-7">
                    <h3>Form Tambah Anggota</h3>
                    <a href="../anggota.php" class="btn btn-danger my-2">Kembali</a>
                    <form action="t_anggota.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="IDuser" class="form-label">ID User</label>
                            <input type="text" name="IDuser" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="ussername" class="form-control" required aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="text" name="password" class="form-control" required aria-describedby="emailHelp">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control" required
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="nis" class="form-label">NIS</label>
                                    <input type="text" name="nis" class="form-control" required
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="namalengkap" class="form-label">Nama Lengkap</label>
                                    <input type="text" name="namalengkap" class="form-control" required
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" required
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="level" class="form-label">Level</label>
                                    <select class="fill">
                                    <option value="1">Admin</option>
                                    <option value="2">Petugas</option>
                                    <option value="3">Peminjam</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>