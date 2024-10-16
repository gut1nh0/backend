<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet"  href="styles.css">
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

    .bg-login{
      background-color: #a3a3a3;

    }

    .card{
      background-color: #27272a;
      color: white;
      border-radius: 20px;
      top: 40px;
      display: flex;
      
    }

    .card-header{
      font-size: 30px;
    }

    .btn{
      width: 150px;
      align-self: center;
      margin-left: 25%;
      background-color: #ffc107;
      font-weight: bold;
    }


  </style>

  <body class="bg-login">

    <nav class="navbar">
      <a class="navbar-brand" href="./index.php">
        <i class="fa-solid fa-headset" style="color:#ffc107; font-size: 25px;"></i>
        App Help Desk
      </a>

    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="valida_login.php" method="post">
                <div class="form-group">
                  <input name="email" type="email"  class="form-control" placeholder="E-mail" required>
                </div>
                <div class="form-group">
                  <input name="senha" type="password"  class="form-control" placeholder="Senha" required>
                </div>
                
                <?php 
                if(isset($_GET['login']) && $_GET['login'] == 'erro'){
                ?>
                <div class="text-danger">
                  Usúario ou senha invalido(s)
                </div>
                <?php } ?>
                <?php 
                if(isset($_GET['login']) && $_GET['login'] == 'erro2'){
                ?>
                <div class="text-danger">
                  Faça o login primeiro
                </div>
                <?php } ?>
                <button class="btn" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>