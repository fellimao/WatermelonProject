<html lang="pt/br">
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
        <script src="js/form.js"></script>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/MainStyle.css" rel="stylesheet">
    </head>
    <body>
        <!-- 
            Barra de navegação
            fixed-top -> Deixa a barra presa no topo
            nav-pills -> Adiciona o efeito de "pilula"
            nav-dropdown -> Adiciona o efeito de pilha
        -->
        <nav class="navbar navbar-expand-sm">
          <a class="navbar-brand" href="#">
              <!-- Logotipo -->
            <img src="img/logomarca.png" alt="Logo" style="width:65px;">
          </a>
            
      <!-- Links -->
      <ul id="guia" class="nav nav-pills" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="pill" href="#texto1">Texto 1</a>
        </li>

        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Texto 2
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" data-toggle="pill" href="#info1">Info 1</a>
            <a class="dropdown-item"data-toggle="pill"  href="#info2">Info 2</a>
            <a class="dropdown-item" data-toggle="pill" href="#info3">Info 3</a>
          </div>
        </li>
          
        <li class="nav-item">
          <a class="nav-link" data-toggle="pill" href="#texto3">Texto 3</a>
        </li>
      </ul>
        </nav>
    
    <!-- Conteudo que aparece ao clicar nos links-->
    <div class="tab-content">
        
    <div id="texto1" class="container tab-pane active"><br>
      <h3>Texto 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
        
    <div id="info1" class="container tab-pane fade"><br>
      <h3>Info 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
        
    <div id="info2" class="container tab-pane fade"><br>
      <h3>Info 2</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
        
    <div id="info3" class="container tab-pane fade"><br>
      <h3>Info 3</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
        
    <div id="texto3" class="container tab-pane fade"><br>
      <h3>texto 3</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
        
        
  </div>

    </body>
</html>