<?php 

session_start();

$usuario_autenticado = false;

$usuario_cadastrado = [
    ['email' => 'admin@senai.br',
    'senha' => 12345],
    ['email' => 'aluno@email.com',
    'senha' => 'a1b2c3'],
    ['email' => 'suporte@senail.br',
    'senha' => 12345]
];

foreach ($usuario_cadastrado as $user){
    if ($user ['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        
        $usuario_autenticado = true;
    }
}

if ($usuario_autenticado == true){
    $_SESSION['autenticado'] = 'SIM';
    //header ('Location: painel.php?login=sucesso');
    echo "Usuário autorizado";
}

else{
    $_SESSION['autenticado'] = 'NÃO';
    header('Location: index.php?login=erro');
}
?>

