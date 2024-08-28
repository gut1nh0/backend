<?php 

/*
$lista_frutas = array("Banana", "Maçã", "Morango", "Uva"); //Listara as frutas

echo $lista_frutas [1]; //Mostrara Maçã

*/

/*
$lista_frutas = ["Banana", "Maçã", "Morango", "Uva"]; //Listara as frutas

echo $lista_frutas [1]; //Mostrara Maçã

$lista_frutas[1] = "Melancia";

echo "<hr>";
echo $lista_frutas[1];
*/

$lista_frutas = ["Banana", "Maçã", "Morango", "Uva"];

echo '<pre>';
print_r ($lista_frutas);
echo $lista_frutas[0];
echo "<hr>";
echo '</pre>';

echo '<pre>';
$lista_frutas[0] = "Melancia";
print_r ($lista_frutas);
echo '</pre>';

echo "</br>";

echo $lista_frutas[0];

?>