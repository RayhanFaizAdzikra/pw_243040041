<?php
$angka = 10;
if (($_SERVER["REQUEST_METHOD"]) == "POST" && isset($_POST['angka']) && is_numeric($_POST['angka'])) {
    $angka = intval($_POST['angka']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas6</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            margin-top: 10px;
          
        }

        .row {
            display: flex;
            gap: 5px;
            margin-bottom: 5px;
        }

        .box {
            padding: 10px;
            font-size: 15px;
            text-align: center;
            width: 15px;
            border: 2px solid black;
            
        }

        .color {
            background-color: lightblue;
            color: black;
        }
    </style>
</head>

<body>
    <form method="POST" action="">
        <label for="angka">Masukkan Angka : </label>
        <input type="number" name="angka" id="angka" value="<?php echo $angka; ?>">
        <button type="submit">Tampilkan</button>
    </form>
    <div class="container">
        <?php
        for ($i = $angka; $i > 0; $i--) {
            echo '<div class="row">';
            for ($j = 0; $j < $i; $j++) {
                $class = ($i % 2 == 0) ? 'box color' : 'box';
                echo '<div class="' . $class . '">' . $i . '</div>';
            }
            echo '</div>';
        }
        ?>
    </div>
</body>

</html>