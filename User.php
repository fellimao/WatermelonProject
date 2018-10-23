<html>
    <head>
        <title>Insira o titulo aqui</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <!-- Fontes -->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
        <!--Ícone da página -->
        <link rel="icon" href="img/Logo.png">
        <!-- Conexão com o bootstrap/javascript/jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/MainStyle.css" rel="stylesheet">
    </head>
    <body>

        <?php
        
        session_start();

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "infobiobd";
        $login = $_SESSION["login"];

        // Cria conexão
        $conn = new mysqli($servername, $username, $password, $dbname);


        // Checa conexão
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT user_nome,user_email FROM usuarios where user_email='$login'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $nome = $row["user_nome"];
                $email = $row["user_email"];
            }
        } else {
            echo "_Falha em buscar dados_";
        }

        mysqli_close($conn);
        ?>
        
    <style>
        body{
            background-image: url(img/6557.jpg);
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Do not repeat the image */
            background-size: cover; /* Resize the background image to cover the entire container */
        }
    </style>

  <ul class="nav nav-tabs nav-justified bg-success" role="tablist">
    <li class="nav-item">
      <a class="nav-link text-light" data-toggle="tab" href="#menu1">Usuário</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-light" data-toggle="tab" href="#menu2">Congresso</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-light" data-toggle="tab" href="#menu3">Palestras</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-light" data-toggle="tab" href="#perfil">Editar perfil</a>
    </li>
      <li class="nav-item">
      <a class="nav-link text-light"  data-toggle="modal" data-target="#sair">Sair</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="perfil" class="container-fluid tab-pane fade">
            <div class="bg-info text-center bigger letraBranca">
            <?php 
                echo $_SESSION['erro']; 
            ?>
            </div>
        <div class="row">
                <div class="col-md-4">
                </div>
                
                <div class="col-md-4">
                    <div class="card card-LogCad">
                        <div class="card-header card-header-cad bg-success"><h1 class="letraBranca">Perfil</h1>
                            <p class="letraBranca">Atualize suas informações</p>
                        </div>
                      <div class="card-body card-body-LogCad">
                          
                    <!-- Inicio do formulario
                        ACTION mostra para que pagina o botao submit deve levar os valores
                 -->
                          
                        <form method="post" action="Editar.php">
                          <div class="form-group">
                        <div class="form-group">
                            <label>Nome: </label>
                            <input type="text" class="form-control" name="nome" id="nome" value='<?php echo $nome ?>'>
                          </div>
                            <label>Email:</label>
                            <input type="text" name="email" class="form-control" value='<?php echo $email ?>'>
                          </div>
                          <div class="form-group">
                            <label for="pwd">Senha:</label>
                            <input type="password" class="form-control" name="senha1" id="pwd">
                          </div>
                        <div class="form-group">
                            <label for="pwd">Senha novamente:</label>
                            <input type="password" class="form-control" name="senha2" id="pwd">
                          </div>
                          <div class="form-group form-check">
                            <label class="form-check-label">
                                <input type="hidden" name="form_submitted" value="1" />
                            </label>
                          </div>
                          <button type="submit" class="btn btn-success">Atualizar informações</button>
                        </form>
                      </div> 
                    </div>
                </div>
                
                <div class="col-md-4"></div>
        </div>
    </div>
  </div>
        
        
        <!-- Modal para desconectar da sessão, irá ativar a sair.php
-->
<div class="modal" id="sair">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Deseja sair ?</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <a href="sair.php" class="btn btn-danger" role="button">Desconectar</a>
      </div>

    </div>
  </div>
</div>
    </body>
</html>