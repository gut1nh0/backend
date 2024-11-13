<?php 


require_once ("class_professor.php");

$professor = new Professor();

$professor->nome = "Ricardo";
$professor->disciplina="Banco de Dados";

$professor->ensinar();
echo "<hr>";
$professor->corrigirProva();
echo "<hr>";
$professor->prepararAula();
echo "<hr>";
$professor->simularChamada();
echo "<hr>";
$professor->simularCorrigirTarefas();
echo "<hr>";

?>