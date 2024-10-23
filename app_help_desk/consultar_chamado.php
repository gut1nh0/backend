<!-- <?php require_once ("login.php"); ?>

<?php 
  

  $arquivo = fopen('../../app_help_desk/registro.txt', 'r');

  while(!feof($arquivo)){
    $registro = fgets($arquivo);
    $chamados[] = $registro;
  };

  fclose ($arquivo);

  echo '<pre>';
  print_r($chamados);
  echo '</pre>';
?> -->

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

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">

            <?php

              foreach($chamados as $chamado){

                $chamados_dados = explode('#', $chamado);

                // echo '<pre>';
                // print_r ($chamados_dados);
                // echo '</pre>';

              
            ?>
            

              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $chamados_dados[0] ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $chamados_dados[1] ?></h6>
                  <p class="card-text"><?php echo $chamados_dados[2] ?></p>

                </div>
              </div>
              <?php } ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a href="painel.php" class="btn btn-lg btn-warning btn-block" type="submit">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>