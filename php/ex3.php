<?php

$cliente ='Vip';
$valor_compra = 500;

if ($cliente == 'Vip' or $valor_compra >= 500) {
    echo "Cliente com desconto aplicado.";
}

else{
    echo "Cliente sem desconto";
}

?>