<?php 

require_once("class_pessoa.php");

$aluno = new Pessoa();

$aluno->nome ="Augusto";
$aluno->idade=16;

$aluno->apresentar();
echo "<hr>";
$aluno->caminhar();
echo "<hr>";
$aluno->falar();
echo "<hr>";
$aluno->simularComer();
echo "<hr>";
$aluno->simularDormir();
echo "<hr>";

?>