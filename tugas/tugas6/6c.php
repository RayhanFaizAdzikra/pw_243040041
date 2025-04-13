<?php
session_start();
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === "Hery" && $password === "123") {
        $_SESSION['loggedin'] = true;

        exit();
    } else {
        $error = "Username / Password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            
            align-items: center;


            font-family: Georgia, 'Times New Roman', Times, serif;

        }

        .login-container {
            
            background-color: orange;
            padding: 20px;
            text-align: center;
            width: 300px;
            border-radius: 20px;

        }

        .error {
            color: red;
            margin-bottom: 10px;
        }

        input {
            width: 100px;
            padding: 10px;
            margin: 5px;
            border: 2px solid black;
        }

        button {
            background-color: blue;
            color: black;
            border: none;
            padding: 10px;
            width: 100%;
            cursor: pointer;
            border-radius: 20px;
        }

        button:hover {
            background-color: rgb(255, 0, 0);
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Masuk</h2>
        <p class="error"><?php echo $error; ?></p>
        <?php if ($error): ?>
        <?php endif; ?>
        <form method="POST" action="">
            <label>Username :</label>
            <input type="text" name="username" required><br>
            <label>Password :</label>
            <input type="Password" name="password" required><br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>