<?php
//Aqui os números de 1 a 10 são colocados em uma váriavel
for ($i = 1; $i <= 10; $i ++){


    switch ($i){
        case ($i<=3):
            $categoria= 'está na categoria baixo';
            break;
        
        case ($i<=7):
            $categoria= 'está na categoria médio';
            break;
        
        case ($i<=10):
            $categoria= 'está na categoria alto';
            break; // Aqui verificará se a váriavel é da categoria baixa, média, alta
    }
    
    //Criamos uma váriavel para verificar se o número é par com o resto da conta $/2, e exibir o resultado.   
    $par = ($i % 2 == 0) ? "O número $i é par e $categoria. </br>" : "O número $i é ímpar e $categoria. </br>";
    echo $par;



}
?>