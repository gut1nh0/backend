<?php
$soma=0;
$contagem=0;

for($i=1; $i<= 100; $i++){
    
    if( $contagem == 0){
        $resultado = $soma + $i;
        echo "$i + $soma = $resultado </br>";
        $soma= $resultado;
        $contagem++ ;
    }

    else {
        $resultado2 = $resultado + $i;
        echo "$i + $resultado = $resultado2 </br>";
        $resultado = $resultado2;
    }
    
    

    
}
?>