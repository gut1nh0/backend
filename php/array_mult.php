<?php

$lista_coisas= [];

$lista_coisas ['frutas'] = ['Banana', 'Maçã', 'Morango', 'Uva'];

$lista_coisas ['pessoas'] = ['João', 'José', 'Maria'];

/*echo '<pre>';
print_r($lista_coisas);
echo '</pre>';*/

$lista_coisas ['frutas'][2]= 'Abacaxi';

$lista_coisas ['pessoas'] [1] = 'Carlos';

echo "O terceiro valor array FRUTAS agora é: ";
echo $lista_coisas['frutas'][2];

echo "<hr>";

echo "O segundo valor de array PESSOAS agora é: ";
echo $lista_coisas['pessoas'][1];

echo "<hr>";

echo '<pre>';
print_r($lista_coisas);
echo '</pre>';

?>