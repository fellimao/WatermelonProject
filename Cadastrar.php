<html>
    <head>
        <title>Insira o titulo aqui</title>
    	<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
    
    <!-- Define estilos menores da pagina -->
    <style>
        body{
            background-image: url(img/7961.jpg);
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Do not repeat the image */
            background-size: cover; /* Resize the background image to cover the entire container */
        }
    </style>
    
    <body>     
        <div class="bg-danger text-center bigger letraBranca">
            <?php 
                session_start();
                echo $_SESSION['erro']; 
            ?>
            </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                
                <div class="col-md-4">
                        <!-- Logotipo de preferencia em PNG -->
                          <a class="navbar-brand" href="Index.php">
                            <img src="img/logomarca.png" alt="Logo" style="width:200px;">
                        </a>
                </div>
                
                <div class="col-md-4">
                    <div class="card card-LogCad">
                        <div class="card-header card-header-cad bg-success"><h1 class="letraBranca">Cadastro</h1>
                            <p class="letraBranca">Lorem ipsum et cetera</p>
                        </div>
                      <div class="card-body card-body-LogCad">
                        <form method="post" action="Validar.php">
                          <div class="form-group">
                        <div class="form-group">
                            <label for="name">Nome: </label>
                            <input type="text" class="form-control" name="nome" id="nome">
                          </div>
                            <label for="email">Email:</label>
                            <input type="text" name="email" class="form-control">
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
                          <button type="submit" class="btn btn-success">Cadastrar</button>
                        </form>
                    <p class="smaller text-center">Já possui cadastro ? <a href="Logar.php">Clique aqui</a></p>
                      </div> 
                    </div>
                </div>
                
                <div class="col-md-4"></div>
                
            </div>
        </div>
    </body>
</html>