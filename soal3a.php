<?php
$dbhost = "localhost";
$dbport = "5432";
$dbuser = "postgres";
$dbpass = "";
$dbname = "testdb";

$conn = pg_connect("host=$dbhost port=$dbport dbname=$dbname user=$dbuser password=$dbpass");

if(!$conn) {
    die("Gagal terkoneksi");
}

function query($query) {
    global $conn;
    $result = pg_query($conn, $query);
    $rows = [];
    while( $row = pg_fetch_assoc($result) ) {
        $rows[] = $row;
    } 
    return $rows;
}

function search($nama, $alamat ) {
    $query = "SELECT * FROM hobi INNER JOIN person ON person.id = hobi.person_id
    WHERE nama LIKE '%$nama%' AND alamat LIKE '%$alamat%'";
    return query($query);
}
