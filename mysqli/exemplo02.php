<?php
//aqui estou fazendo a conmexão com o banco passando o ip, usuario, senha e o bancodedados
$conn = new mysqli("localhost", "root", "", "dbphp7");

if($conn->connect_error){

    echo "Error: ". $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();
// enquanto tiver dados ele ira percorrer o array e realizar o push
while($row = $result->fetch_array(MYSQLI_ASSOC)){

    
    array_push($data, $row);

}

// json encode para fazer esses parametros se tornarem um json e aparecer no browser
echo json_encode($data);
?>