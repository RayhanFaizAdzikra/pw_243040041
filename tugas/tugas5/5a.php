<?php
$mahasiswa = [
    [
        "nama" => "Upin",
        "nrp" => "2018371",
        "email" => "upin123@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "cowo.png"
    ],
    [
        "nama" => "Ipin",
        "nrp" => "20115632",
        "email" => "ipin123@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "cowo.png"
    ],
    [
        "nama" => "Mail",
        "nrp" => "22115373",
        "email" => "mailbae@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "cowo.png"
    ],
    [
        "nama" => "Jojo",
        "nrp" => "20115359",
        "email" => "jojo11@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "cowo.png"
    ],
    [
        "nama" => "Adit",
        "nrp" => "23115311",
        "email" => "adit5@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "cowo.png"
    ],
    [
        "nama" => "Susanti",
        "nrp" => "23116476",
        "email" => "Susanti9@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "cewe.jpg"
    ],
    [
        "nama" => "Memei",
        "nrp" => "19119287",
        "email" => "Mei4@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "cewe.jpg"
    ],
    [
        "nama" => "Mega",
        "nrp" => "20117356",
        "email" => "mega8@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "cewe.jpg"
    ],
    [
        "nama" => "Rose",
        "nrp" => "21111159",
        "email" => "rose5@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "cewe.jpg"
    ],
    [
        "nama" => "Putri Anjani",
        "nrp" => "24117410",
        "email" => "putri.anjani@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "cewe.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <hr>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
        </hr>
    <?php endforeach; ?>
</body>

</html>