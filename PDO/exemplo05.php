<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
$stmt = $conn->prepare("DELETE FROM tb_usuarios  WHERE deslogin = :LOGIN");

$login = "Array";

$stmt->bindParam(":LOGIN", $login);

$stmt->execute();

echo " INSERIDO COM SUCESSO";
?>