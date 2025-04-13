<?php

function number($num)
{
    $jumlah = 1;
    for ($i = 1; $i <= $num; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $jumlah++ . " ";
        }
        echo "<br>";
    }
}

echo number(5);