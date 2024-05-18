<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "user";

// $db = mysqli_connect($server, $user, $password, $nama_database);

try {
    //code...
    $db = new PDO("mysql:host=$db_host;dbname=$user", $db_user, $db_pass);
} catch (PDOException $e) {
    //throw $th;
    die("Terjadi masalah: " . $e->getMessage());
}

?>