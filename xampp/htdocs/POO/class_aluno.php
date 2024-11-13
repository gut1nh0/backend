<?php 

class Aluno{

    public $nome;
    public $idade;
    private $matricula;
    protected $turma;

    public function estudar(){

        echo "$this->nome está estudando";
    }

    public function fazerProva(){
        echo "$this->nome está fazendo prova";
    }

    public function assistirAula(){
        echo "$this->nome está assistindo aula";
    }

    private function entregarTrabalho(){
        echo "$this->nome entregou o trabalho";
    }

    private function faltarAula(){
        echo "$this->nome faltou a aula";
    }

    public function simularEntregaDeTrabalho(){
        $this->entregarTrabalho();
    }

    public function simularFaltaAula(){
        $this->faltarAula();
    }

    
}
?>