<?php
require "soal3a.php";

$sql = query("SELECT * FROM hobi INNER JOIN person ON person.id = hobi.person_id");

if(isset($_POST["submit"])) {
$sql = search( $_POST["nama"], $_POST["alamat"] );

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
<table border="1">
    <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Hobi</th>
    </tr>
    <?php foreach($sql as $row) : ?>
    <tr>
        <td><?= $row["nama"]?></td>
        <td><?= $row["alamat"]?></td>
        <td><?= $row["hobi"]?></td>

    </tr>
    <?php endforeach;?>
</table>
<br><br><br>
<form action="" method="post">
    <label for="nama">Nama : </label>
    <input type="text" name="nama" id="nama">
    <br><br>
    <label for="alamat">Alamat : </label>
    <input type="text" name="alamat" id="alamat">
    <br><br>
    <button type="submit" name="submit">Search</button>
</form>
</body>
</html>
