<?php 

require_once ("login.php");

?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
     
     *{
      font-family: "Inter", sans-serif;
     }

    .navbar {
      background-color: black;
      height: 80px;
    }

    .navbar-brand{
      color: #fff;
    }

    .navbar-brand {
      display: flex;
      padding: 1rem;
      align-items: center;
      gap: 1rem;
    }

    .navbar-brand:hover{
      color:#e5e7eb;
    }

    .bg-nav{
      background-color: #a3a3a3;

    }
    </style>
  </head>

  <body class="bg-nav">

    <nav class="navbar">
      <a class="navbar-brand" href="./painel.php">
        <i class="fa-solid fa-headset" style="color:#ffc107; font-size: 25px;"></i>
        App Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Abertura de chamado
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form action="registra_chamado.php" method="POST">
                    <div class="form-group">
                      <label>Título</label>
                      <input name="titulo" type="text" class="form-control" placeholder="Título">
                    </div>
                    
                    <div class="form-group">
                      <label>Categoria</label>
                      <select class="form-control" name="categoria">
                        <option>Criação Usuário</option>
                        <option>Impressora</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Rede</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Descrição</label>
                      <textarea name="descricao" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="row mt-5">
                      <div class="col-6">
                        <a href="painel.php" class="btn btn-lg btn-warning btn-block" type="submit">Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>