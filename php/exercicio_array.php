<?php 

$numeros= [1,2,3,4,5,6,7,8,9,10]; //Listagem dos números de 1 a 10

//Exibe toda a lista
echo '<pre>';
print_r ($numeros);
//Exibe os números que serão alterados
echo $numeros[0];
echo '<br>';
echo $numeros[4];
echo '<br>';
echo $numeros[9];
echo "<hr>";
echo '</pre>';

//Mudando os valores das posições
$numeros [0]= 100;
$numeros [4]= 500;
$numeros [9]= 1000;

//Exibe toda a lista com os valores mudados
echo '<pre>';
print_r ($numeros);
//Exibe os valores alterados
echo $numeros[0];
echo '<br>';
echo $numeros[4];
echo '<br>';
echo $numeros[9];
echo '</pre>';

?>