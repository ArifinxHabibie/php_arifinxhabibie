<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Nama : <?=$_SESSION["nama"]?> </p>
    <p>Umur : <?=$_SESSION["umur"]?></p>
    <p>Hobi : <?=$_SESSION["hobi"]?></p>
</body>
</html>
