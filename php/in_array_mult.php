<?php 

$usuarios = [

    [   "id" => 1,
        "nome" => "Joao",
        "email" => "joao@example.com"],
    
    [   "id" => 2,
        "nome" => "Maria",
        "email" => "maria@example.com"],

    [   "id" => 3,
        "nome" => "Pedro",
        "email" => "pedro@example.com"]
];

$busca = "pedro@example.com";

echo '<pre>';
print_r($usuarios);
echo '</pre>' ;

$indice = array_search($busca, array_column($usuarios, 'email'));

if($indice !== false){
    echo "$busca foi encontrada com o ID: " . $usuarios[$indice]['id'];
}

else{
    echo "$busca não foi encontrada na lista de usuários";
}
?>