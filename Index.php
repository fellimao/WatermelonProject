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
        <nav class="navbar navbar-expand-sm fixed-top">
          <a class="navbar-brand" href="#">
              
              <!-- Logotipo
                De preferencia em PNG
                -->
            <img src="img/logomarca.png" alt="Logo" style="width:80px;">
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
        
    <div id="texto1" class="container-fluid tab-pane active"><br>
        <div id="demo" class="carousel slide" data-ride="carousel">

          <!-- Indicadores-->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>

          <!-- Mostra de imagens -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/04-wallpaper_macos-mojave.jpg" style="filter: brightness(50%);">
              <div class="carousel-caption">
                <h1>Titulo 1</h1>
                <p>Lorem ipsum</p>
              </div> 
            </div>
            <div class="carousel-item">
              <img src="img/3955783-road-wallpaper.jpg" style="filter: brightness(50%);">
              <div class="carousel-caption">
                <h1>Titulo 2</h1>
                <p>Lorem ipsulum</p>
              </div> 
            </div>
            <div class="carousel-item">
              <img src="img/London%20Sidewalk%20Sunset%20Paved%20Street%20Free%20Wallpaper%20HD.jpg" style="filter: brightness(50%);">
              <div class="carousel-caption">
                <h1>Titulo 3</h1>
                <p>Lorem ipsulum</p>
              </div> 
            </div>
          </div>

          <!-- Esquerda e direita (setas) -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>

        </div>
        
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
        
        
        <!-- Rodapé final do site-->
        <div class="jumbotron text-center">
          <p>Website e imagem pertencente a InfoBioJr - Todos os direitos reservados - 2018</p>
        </div>

    </body>
</html>