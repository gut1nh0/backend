<?php

$Cadastro = [];//Define o nome da variavel

$Cadastro ['usuario']= ['Joao', 'Maria', 'Pedro'];//cria um subarray usuario e adicionou os valores

$Cadastro ['senha'] = ['1234', 'abcd', '5678'];//cria um subarray senha e adicionou os valores

//Mostra a tabela completa e os valores da linha 1 do usuario e senha
echo '<pre>';
print_r($Cadastro);
echo '</pre>';
echo $Cadastro ['usuario'][1];
echo "</br>";
echo $Cadastro['senha'][1];

echo"<hr>";

//altera os valores selecionados
$Cadastro ['usuario'][1]= 'Ana';
$Cadastro ['senha'] [1]= 'efgh';

//Mostra a tabela completa com as alterações e os valores da linha 1 do usuario e senha modificados
echo '<pre>';
print_r($Cadastro);
echo '</pre>';
echo $Cadastro ['usuario'][1];
echo "</br>";
echo $Cadastro['senha'][1];
?>