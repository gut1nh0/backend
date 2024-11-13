<?php 

class Coordenador{
    
    public $nome;
    public $departamento;
    private $cpf;
    protected $salario;

    public function coodernarTurmas(){
        echo "$this->nome coordeanando as turmaas";
    }

    public function planejarAulas(){
        echo "$this->nome está planejando aulas";
    }

    public function auxiliarProfessores(){
        echo "$this->nome está auxiliando os professores";
    }

    private function definirHorarios(){
        echo "$this->nome está definindo os horários das aulas";
    }

    private function organizarReunioes(){
        echo "$this->nome está organizando reuniões";
    }

    public function simularHorarios(){
        $this->definirHorarios();
    }

    public function simularReunioes(){
        $this->organizarReunioes();
    }

}
?>