<?php

 // O return serve muito para retornar valor. Não propriamente para mostrar no browser
 // Pode se valores para por exemplo armazenar no banco de dados
 // Para esses valores serem mostrados eu preciso criar uma varial ou forçar ele com echo
 function salario (){

    return 964.00;
 }

 echo " Jose recebeu 3 salários: " . (salario())*3;

?>