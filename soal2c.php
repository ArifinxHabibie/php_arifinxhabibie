<?php
session_start();
if(isset($_POST["submit"])) {
    $hobi = $_POST["hobi"];
    $_SESSION["hobi"] = $hobi;
    header("Location: soal2d.php");
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
        <label for="hobi">Hobi Anda :</label>
        <input type="text" name="hobi" id="hobi">
        <br>
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
