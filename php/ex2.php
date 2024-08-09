<?php

$salario=3000;
$horas_extras=4;

if ($salario < 2000 && $horas_extras >= 10){
    $bonus = $salario + ($salario*0.2);
    echo "Você ganhou um bônus de 20%, seu salário será de $bonus.";
}

elseif($salario >= 2000 && $horas_extras >= 5){
    $bonus = $salario + ($salario*0.1);
    echo "Você ganhou um bônus de 10%, seu salário será de $bonus.";
}

else{
    echo "Você não recebeu bônus.";
}

?>