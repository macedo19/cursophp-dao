<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD  WHERE idusuario = :ID");

$login = "Marta";
$password = "QWERTU";
$ID = 2 ;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $ID);

$stmt->execute();

echo " INSERIDO COM SUCESSO";
?>