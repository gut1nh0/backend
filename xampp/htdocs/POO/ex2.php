<?php 

//Augusto Ferrari, Guilherme da Mata

class Livro{ //Cria uma classe Livro

    public $titulo = 'Harry Potter';//Cria o atributo titulo
    public $autor = 'J.K. Rolling';//Cria o atributo autor
    public $anoPublicado = 1997;//Cria o atributo ano publicado

    function detalheLivro(){

        return " titulo: $this->titulo <br> autor: $this->autor <br> data de lançamento: $this->anoPublicado";
    }

    function modificaAno($anoModificado){

        $this->anoPublicado = $anoModificado;
    }

    

}

$y = new Livro();
echo $y->detalheLivro();
echo '<hr>';
$y->modificaAno(2000);
echo $y->detalheLivro();

?>