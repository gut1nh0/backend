<?php

// echo "<pre>";
// print_r ($_POST);
// echo "</pre>";
// echo "<hr>";

$titulo = str_replace('#','-',$_POST['titulo']);
// $titulo = $_POST['titulo'];
$categoria = str_replace('#','-',$_POST['categoria']);
// $categoria = $_POST['categoria'];
$descricao = str_replace('#','-',$_POST['descricao']);
// $descricao = $_POST['descricao'];

$texto = $titulo.'#'.$categoria.'#'.$descricao.PHP_EOL;

echo $texto;

$arquivo = fopen('../../app_help_desk/registro.txt', 'a');

fwrite($arquivo,$texto);

fclose($arquivo);
 
header ('Location: painel.php');

?>