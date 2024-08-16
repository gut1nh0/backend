<?php

$numero = 5;

echo "Tabuada do $numero</br>"; 

function tabuada($a, $b){
        return $a * $b;
}

for ($i = 1; $i <= 10; $i ++){
    $resultado= tabuada($i,$numero);
    echo "$numero X $i = $resultado</br>";
}


?>