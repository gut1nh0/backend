<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Landing Page</title>
</head>

<body>
    <img id="mulher" src="./images/mulher.jpg" alt="mulher" height="700px">
    <div class="container">
        <header>
            <div class="bg"></div>
            <div class="conteudo">
                <div class="titulo">
                    <h1>Bem vindo ao Spotify</h1>
                    <p>Estamos felizes por te-lo aqui. Preencha o formulário para virar <strong>PREMIUM</strong></p>
                </div>
                <img id="logo" src="./images/logo.png" alt="logo" height="50px">
            </div>
        </header>
        <main>
            <div class="login">
                <h1>Faça seu login</h1>
                <div class="formulario">
                    <form action="formulario">
                        <label for="email">Nome</label><br>
                        <input type="text" id="nome" placeholder="Digite seu nome"><br><br><br>


                        <label for="email">Email</label><br>
                        <input type="email" id="email" placeholder="Digite seu e-mail"><br><br><br>



                        <label for="senha">Senha</label><br>
                        <input type="password" id="senha" placeholder="Digite sua senha"><br><br>
                    </form>
                </div>
                <button>Enviar</button>
            </div>
        </main>
        <footer>
            <div class="rodape">
                <p>© 2024 Spotify. Todos os direitos reservados</p>
            </div>

        </footer>
    </div>
</body>

</html>