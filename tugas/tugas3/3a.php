<?php

$j = 10;
$jr = 15;

function luas_lingkaran($j){
    return 3.14 * $j * $j;
}

function keliling_lingkaran($r2){
    return 2 * 3.14 * $r2;
}


echo "<h4>Menghitung Luas lingkaran</h4>";
echo "<br>";
echo "jari jari lingkaran = $j";
echo "<br>";
echo "Luas lingkaran = " . luas_lingkaran($j) . " cm<sup>2</sup>"; 
echo "<br>";
echo "<hr>";
echo "<h4>Menghitung Keliling lingkaran</h4>";
echo "<br>";
echo "jari jari lingkaran = $jr";
echo "<br>";
echo "Keliling lingkaran = " . keliling_lingkaran($jr) . " cm";
echo "<hr>";