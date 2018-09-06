 <?php
        session_start();
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "infobiobd";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
    
    // Definindo valores vazios para as variaveis
    $name = $email = $senha = "";

    //colocando os valores do formulario em variaveis e checando
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (empty($_POST["senha1"] || $_POST["senha2"])) {
            $_SESSION['erro'] = "Coloque uma senha";
            header('Location: Cadastrar.php');
          } else {
                if($_POST["senha1"] == $_POST["senha2"]){
                    $senha = $_POST["senha1"];
                }
                else{
                    $_SESSION['erro'] = "Senhas não coincidem";
                    header('Location: Cadastrar.php');
                }
          }   

        if (empty($_POST["email"])) {
            $_SESSION['erro'] = "Preencha o email";
            header('Location: Cadastrar.php');
          } else {
            $email = $_POST["email"];
          }
        
        if (empty($_POST["nome"])) {
                    $_SESSION['erro'] = "Preencha o nome";
                    header('Location: Cadastrar.php');
              } else {
                      $name = $_POST["nome"];
              }
        }

        //Inserir dados dentro do banco de dados
        $sql = "INSERT INTO usuarios (user_nome, user_email, user_senha)
        VALUES ('" . $name ."', '" . $email . "', '" . $senha . "')";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['erro'] = "Cadastrado com sucesso";
            header('Location: Cadastrar.php');
        } else {
            $_SESSION['erro'] = "Falha em cadastrar usuário, tente novamente mais tarde " . $conn->error;
            header('Location: Cadastrar.php');
        }

        $conn->close();
        ?>