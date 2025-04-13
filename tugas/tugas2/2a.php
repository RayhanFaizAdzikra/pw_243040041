<?php
$nama_depan = "Rayhan";
$nama_belakang = "Faiz Adzikra";
for ($i = 1; $i <= 16; $i++) {
    echo "<br>";
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "$nama_depan $nama_belakang";
    } else if ($i % 3 == 0) {
        echo "$nama_depan";
    } else if ($i % 5 == 0) {
        echo "$nama_belakang";
    } else {
        echo $i;
    }
}