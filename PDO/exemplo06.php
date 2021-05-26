<?php

//--------------------------------> COMANDOS DE TRANSAÇÃO <-=------------------------------

// TRANSAÇÃO É AQUELE OU TUDO DA CERTO E CONFIRMO COM O COMMIT
// OU SE DER ERRADO DO ROLLBACK

// COMMIT É CONFIRMA

// UM BELO EXEMPLO DE ROLLBACK É PENSAR EM UM BANCO
// DIGAMOS QUE EU PAGUEI UMA CONTA E ESTOU PAGANDO ALGUEM
// E NA HRA DE FAZER O INSERT NA OUTRA CONTA HOUVE UM ERRO
// ISSO O ROLLBACK FAZ DIGAMOS ASSIM CANCELANDO PARA O DINHEIRO NAO FICAR NO AR.


$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios  WHERE idusuario = ?");

$id = 4;

$stmt->bindParam(":ID", $id);
$stmt->execute(array($id));

//ROLLBACK Volta e nao confirma a alteração e commit confirma
//$conn->rollback();
$conn->commit();
echo " DELETADO COM SUCESSO";

?>