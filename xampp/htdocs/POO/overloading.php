<?php

//Modelo -> Entidade 
class Funcionario{

//Atributos -> Características
public $nome = null;
public $telefone = null;
public $numFilhos = null;
public $cargo = null;
public $salario = null;

function _set($atributos, $valores){
    $this->$atributos = $valores;
}

function _get($atributos){
    return $this->$atributos;
}

function resumirCadFunc(){

    return $this->_get('nome')."possui".$this->_get('numFilhos')."filhos(s)";
}

}

$y= new Funcionario();
$y->_set('nome','Guilherme' );
$y->_set('numFilhos', 0 );
echo $y->resumirCadFunc();

?>