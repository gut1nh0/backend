<?php 
//Cria uma array multidimensional chamado $usuarios
$usuarios = [
    [   "id" => 1,
        "nome" => "João",
        "cidade" => "Cerquilho",
        "estado" => "SP"
    ],

    [   "id" => 2,
        "nome" => "Augusto",
        "cidade" => "Fortaleza",
        "estado" => "CE"
    ],

    [   "id" => 3,
        "nome" => "Pedro",
        "cidade" => "Salvador",
        "estado" => "BA"
    ],

    [   "id" => 4,
        "nome" => "Maria",
        "cidade" => "Porto Alegre",
        "estado" => "RS"
    ],

    [   "id" => 5,
        "nome" => "Anna",
        "cidade" => "Florianópolis",
        "estado" => "SC"
    ],
];

//Define variável $busca com o valor que ira procurar na array
$busca= "Pedro";

//Exibe a tabela
echo '<pre>';
print_r ($usuarios);
echo '</pre>';
?>