<?php
include("./connection.php");

$login = $_POST["login"];
$password = $_POST["password"];


$stmt = $conectar->prepare("SELECT * FROM users WHERE login = :login AND password = :password");

$stmt->bindParam(":login", $login);
$stmt->bindParam(":password", $password);

$stmt->execute();

if($stmt->rowCount()==1){
    header("location:../pages/index.php");
}else{
    echo "Usuario não encontrado";
}
?>