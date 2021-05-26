<?php

//PDO -- PHP DATA OBJECT 

// NAO DEU BOA COM SQL SERVER
// NESSE PDO estou passando o tipo do banco, o nome do banco, aonde ele esta, login e senha
$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa","");

// SOBRE O BEGINTRANSITION -> INICIAR UMA TRANSAÇÃO
// o que é uma transação? ou tudo da certo ou se der algum erro ele cancela

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

// FETCHALL Retorna todas as linhas da tabela
// Esse PDO ASSOC só irá retornar o associativo, sem o indice
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($results as $row){

    foreach($row as $key=> $values){
        echo "<strong>". $key . ":</strong>" . $values ."<br/>";
    }

    echo "=======================================<br>";
}

phpinfo();  
?>