<?php 

require_once ("login.php");

?>



<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  
  </head>
  
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

    .card-home{
      color: white;
      border-radius: 20px;
      
    }
    
    .card{
      background-color: #27272a;
      top: 40px;
      border-radius: 20px;
    }

    .card-header{
      font-size: 30px;
      
    }

    .sair{
    width: 80px;
    height: 30px;
    background-color: #ffc107 !important;
    color: black;
    border-radius: 9999px;
    border: none;
    font-weight: bold;
    }
</style>

  <body class="bg-nav"> 

    <nav class="navbar">
      <a class="navbar-brand" href="./index.php">
        <i class="fa-solid fa-headset" style="color:#ffc107; font-size: 25px;"></i>
        App Help Desk
      </a>
      <button onclick="location.href='logoff.php'" class="sair" type="button">Sair</button>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6 d-flex justify-content-center">
                  <a href="./abrir_chamado.php"><img src="formulario_abrir_chamado.png" width="70" height="70"></a>
                </div>
                <div class="col-6 d-flex justify-content-center">
                  <a href="./consultar_chamado.php"><img src="formulario_consultar_chamado.png" width="70" height="70"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>