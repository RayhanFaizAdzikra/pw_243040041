<?php
$angka = isset($_GET['angka']) ? (int)$_GET['angka'] : 10;

// Warna 
$color1 = "blue";
$color2 = "#ddd";

echo "<style>
        .box {
            display: inline-block;
            width: 30px;
            height: 30px;
            text-align: center;
            line-height: 30px;
            margin: 2px;
            border: 1px solid black;
            font-weight: bold;
        }
      </style>";

echo "<div>";

for ($i = $angka; $i >= 1; $i--) {
    // warna berdasarkan indeks baris (genap/ganjil)
    $color = ($i % 2 == 0) ? $color1 : $color2;

    for ($j = 1; $j <= $i; $j++) {
        echo "<div class='box' style='background-color: $color;'>$i</div>";
    }
    echo "<br>";
}