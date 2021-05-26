
<?php

// o LC trata de montar toda configuração que tem para portugues
// O LC é uma constante.
// separando por virgula é passado quais linguagens queremos tratar
// Em cada plataforma tem sua forma de linguagem, por isso sempre é bom passar os 3

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8","portuguese");

// STRFTIME Tras o nome do mes, da semana em portugues
// Ver na tabelça de strftime o que quer ser passado
echo ucwords(strftime("%A %B %C"));
?>