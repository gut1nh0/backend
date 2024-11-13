<?php 

class Professor{

    public $nome;
    public $disciplina;
    private $cpf;
    protected $salario;

    public function ensinar(){
        echo "$this->nome está ensinando";
    }

    public function corrigirProva(){
        echo "$this->nome está corrindo as provas";
    }

    public function prepararAula(){
        echo "$this->nome está preparamdo as Aulas";
    }

    private function fazerChamada(){
        echo "$this->nome está fazendo a chamada";
    }

    private function corrigirTarefas(){
        echo "$this->nome está corrigindo as tarefas";
    }

    public function simularChamada(){
        $this->fazerChamada();
    }

    public function simularCorrigirTarefas(){
        $this->corrigirTarefas();
    }

}


?>