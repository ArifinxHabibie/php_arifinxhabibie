<?php
session_start();
if(isset($_POST["submit"])) {
    $umur = $_POST["umur"];
    $_SESSION["umur"] = $umur;
    header("Location: soal2c.php");
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
        <label for="umur">Umur Anda :</label>
        <input type="text" name="umur" id="umur">
        <br>
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
