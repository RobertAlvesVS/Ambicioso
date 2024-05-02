<?php
$host = "localhost";
$dbname = "ambicioso";
$username = "root";
$password = "";

try {
    $conectar = new PDO("mysql:dbname=$dbname;host=$host", "$username", "$password");
} catch (PDOException $err) {
    die("Deu erro maluco: " . $err->getMessage());
}

?>