<?php 

//Augusto Ferrari ; Guilherme Henrique

$numero_user= -100; // Usuário insere o número 
$contador= 1; // O número quo contador irá começar

if ($numero_user > 0){ //Verificação se o número é positivo
    while ($contador <= $numero_user){ //A contagemirá parar quando o contador chegar no número escolhido
        if ($contador % 2 == 0){ //Verificação se é par
            echo "$contador </br> " ; //Mostra o numero do contador
        }

        $contador++; //soma + 1 no contador
    }
}

else{
    echo 'Esse número não é positivo'; //Se não for positivo mostrara essa frase
}