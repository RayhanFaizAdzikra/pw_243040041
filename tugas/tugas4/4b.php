<?php
$hardware = ["Monitor","CPU","GPU","RAM","Motherboard","SSD"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Macam Macam Perangkat Keras Komputer</h3>
    <ol>
        <?php
        foreach ($hardware as $hw_item){
            echo "<li> $hw_item </li>";
        }
        ?>
    </ol>

    <h3>macam macam perangkat keras baru</h3>
    <ol>
        <?php
        $hardware[] ="cooler <== baru";
        $hardware[] ="PSU <== baru";


        sort($hardware);
        foreach ($hardware as $hw_item){
            echo "<li> $hw_item </li>";
        }
        ?>

    </ol>
</body>
</html>