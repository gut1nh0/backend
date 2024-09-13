<?php  

$nome =array("Augusto", "Anna", "Maria", "Guilherme", "Felipe", "Vinicius", "Daniel", "Luis", "Pablo", "Pedro");
$escolha= "Augusto";

$search= array_search($escolha, $nome);


if ($search !== false){
    echo "$escolha está na lista na posição: " . $search;
}

else{
    echo "$escolha não está na lista.";
}

?>