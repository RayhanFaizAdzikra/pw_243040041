
<?php
require "functions.php";
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Daftar Mahasiswa</h1>

                <a href="tambah.php">Tambah Data Mahasiswa</a>

                <table class="table table-striped table-hover">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Email</th>
                        <th>Jurusan</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>

                    <?php $i = 1; ?>


                    <?php foreach ($mahasiswa as $mhs) : ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $mhs['nama'] ?></td>
                            <td><?= $mhs['nim'] ?></td>
                            <td><?= $mhs['email'] ?></td>
                            <td><?= $mhs['jurusan'] ?></td>
                            <td>
                                <img src="img/<?= $mhs['gambar']; ?>" width="50">
                            </td>
                            <td>
                                <a href="ubah.php?id=<?= $mhs["id"]; ?>" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a> | <a href="hapus.php?id=<?= $mhs['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin?');"><i class="bi bi-trash3"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>



</body>

</html>
