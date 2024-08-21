<?php

//Augusto Ferrari e Guilherme da Mata

$numero = 10;// Usuário insere o número 
$contador = 0;// O número quo contador irá começar


if ($numero > 0){//Verificação se o número é positivo
    do{
        if($contador % 2 != 0){//Vendo se o número é impar
            echo "$contador <br>";
        }
        $contador++;//Aumenta 1 no contador

    }
    while($contador <= $numero);
       
}
else{
    echo "Esse número não é positivo";
}






?>