<?php 

require_once ("class_coordenador.php");

$coordenacao = new Coordenador();

$coordenacao->nome = "Naiane";
$coordenacao->departamento = "Secretaria";

$coordenacao->coodernarTurmas();
echo "<hr>";
$coordenacao->planejarAulas();
echo "<hr>";
$coordenacao->auxiliarProfessores();
echo "<hr>";
$coordenacao->simularHorarios();
echo "<hr>";
$coordenacao->simularReunioes();
echo "<hr>";



?>