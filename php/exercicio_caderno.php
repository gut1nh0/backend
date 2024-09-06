<?php

//Criando array cadastro
$cadastro=[];

//Criando array nome dentro do array cadastro
$cadastro['nome']=['Augusto','Anna', 'Maria', 'Guilherme', 'Luís'];

//Criando array email dentro da array cadastro
$cadastro['email']=['augusto@gmail.com', 'anna@gmail.com', 'maria@gmail.com', 'guilherme@gmail.com', 'luis@gmail.com'];

//Exibe a array cadastro
echo '<pre>';
print_r ($cadastro);
echo '</pre>';
echo '<hr>';

//Exibe as seguintes informações
echo $cadastro['nome'][2];
echo '</br>';
echo $cadastro['email'][3];

echo '<hr>';

//Alterando o índice 2 da subarrray nome
$cadastro ['nome'] [2] = 'Senai';
echo $cadastro['nome'][2];
echo '</br>';

//Alterando o índice 0 da subarrray cadastro
$cadastro ['email'] [0] = 'aluno@senai.br';
echo $cadastro['email'][0];
echo '</br>';

?>