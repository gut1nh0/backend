<?php 

class Pessoa{

    public $nome;
    public $idade;
    protected $cpf;
    protected $endereco;

    public function apresentar(){
        echo "$this->nome está apresentando";
    }

    public function caminhar(){
        echo "$this->nome está caminhando";
    }

    public function falar(){
        echo "$this->nome está falando";
    }

    private function comer(){
        echo "$this->nome está comendo";
    }

    private function dormir(){
        echo "$this->nome está dormindo";
    }

    public function simularComer(){
        $this->comer();
    }

    public function simularDormir(){
        $this->dormir();
    }

}


?>