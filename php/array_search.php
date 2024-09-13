<?php 

$frutas= array("maçã", "banana", "laranja");

$indice= array_search("banana", $frutas);

if ($indice !== false) {
    echo "Banana foi encontrada na posição: " . $indice;
}

else{
    echo"Banana não foi encontrada na lista de frutas.";
}

?>