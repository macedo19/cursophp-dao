<?php
//aqui estou fazendo a conmexão com o banco passando o ip, usuario, senha e o bancodedados
$conn = new mysqli("localhost", "root", "", "dbphp7");

// funcao para vereficar se houve erro na conexão com o banco
if($conn->connect_error){

    echo "Error: ". $conn->connect_error;
}

// metodo prepare prepara um comando que voce quer que execute no banco de dados
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?,?)");

// metodo bind defini os tipos de dados que serao recebidos. O primeiro s é para o primeiro value e o segundo pelo segundo
// S - string
// Sempre criar duas variaveis pois por referencia nao posso passar dois parametros string.
$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";

// Assim que realizar o execute a query sera executada. Noa há problea das minhas duas variaveis serem sido parametrizadas depois, o comando só ira ser executado depois do execute
$stmt->execute();

$login = "user";
$pass = "!@#$$%";


$stmt->execute();


?>