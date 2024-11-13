<?php

//Modelo -> Entidade 
class Funcionario{

//Atributos -> Características
public $nome = 'José';
public $telefone = null;
public $numFilhos = 4;

//Métodos -> Ações 
    function resumirCadFunc(){

        return "$this->nome possui $this->numFilhos filhos(s)";

    }
    
    function modificarNumFilhos($Filhos){
        
        $this->numFilhos = $Filhos;
    }

    function modificarNome($AlterarNome){

        $this->nome = $AlterarNome;
    }

}

//Objeto -> Identidade
$y = new Funcionario();
echo $y -> resumirCadFunc();
echo '<hr>';
$x = new Funcionario();
$y->modificarNumFilhos(3);
echo $y->resumirCadFunc();
echo '<hr>';

$x = new Funcionario();
$x->modificarNome('Gilmar');
echo $x->resumirCadFunc();

?>