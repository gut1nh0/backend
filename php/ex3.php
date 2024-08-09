<?php
//Recebe os dados, se o cliente é vip e o valor da compra
$cliente ='Vip';
$valor_compra = 500;

//Se o cliente é vip ou gastou mais de 500 ele recebe a desconto
if ($cliente == 'Vip' or $valor_compra >= 500) {
    echo "Cliente com desconto aplicado.";
}

//se não, não recebe
else{
    echo "Cliente sem desconto";
}

?>