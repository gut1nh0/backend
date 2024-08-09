<?php

//Insira a notas do aluno
$nota1 =2;
$nota2 =8;
$nota3 =6;

//Calculou a media e exibiu as notas
$media = ($nota1+$nota2+$nota3)/3;
echo "1ªnota é: $nota1</br>";
echo "2ªnota é: $nota2</br>";
echo "3ªnota é: $nota3</br>";

//Se a média for maior ou igual que 7, o aluno será aprovado, senão será reprovado
if ($media >= 7){
    echo "A nota final do aluno é $media, o aluno esta Aprovado";
}

else {
    echo "A nota final do aluno é $media, o aluno esta Reprovado";
}
  

?>