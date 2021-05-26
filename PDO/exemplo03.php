<?php

// REALIZANDO A CONEXAO COM DD
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root","");

// INSER COMANDO INSERT -- NESSE NAO PRECISO NECESSARIAMENTE PASSAR DE CARA OS PARAMETROS
// REALIZEI OS VALUES E DEIXEI COMO EM ABERTO DIGAMOS ASSIM PARA QUE POSSA PASSAR OS PARAMETROS A VONTADE
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN,:PASSWORD)");

$login = "jose";
$password = "123456789";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

// PARA BAIXO VOU FAZER UM EXEMPLO
echo "Inserido ok";

$log['login']= array('Carlos', 'Pedro', 'Maria');
$senha['senhas'] =  array(45679, 635, 415263);

$dados['login']= $log;
$dados['senhas'] = $senha;

foreach($dados as $value){
    var_dump( $value);
    $stmt->bindParam(":LOGIN", $value['login']);
  
    $stmt->execute();

    echo " O cliente " . $value['login'] . "possui a senha: ";
}    
?>