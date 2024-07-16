<?php
session_start();
if(isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $_SESSION["nama"] = $nama;
    header("Location: soal2b.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="nama">Nama Anda :</label>
        <input type="text" name="nama" id="nama">
        <br>
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
