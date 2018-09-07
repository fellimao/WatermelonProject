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


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (empty($_POST["email"])) {
                    $_SESSION['erro'] = "Preencha o email";
                    header('Location: Logar.php');
              }
        else if (empty($_POST["senha"])) {
            $_SESSION['erro'] = "Preencha a senha";
            header('Location: Logar.php');
          }
        else{
            
            $login = $_POST['email'];
            $senha = md5($_POST['senha']);  
            
            $sql = "SELECT * FROM `usuarios` WHERE user_email = '$login' and user_senha = '$senha'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                
                $_SESSION["login"] = $login;
                $_SESSION["senha"] = $senha;
                header("location: User.php");
            } else {
                $_SESSION['erro'] = "Email ou senha inválidos";
                header("Location: Logar.php");
            }
        /*if(mysqli_num_rows ($result) > 0 )
        {
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        header('location:Index.php');
        }
        else{
          unset ($_SESSION['login']);
          unset ($_SESSION['senha']);
          $_SESSION['erro'] = "Senha ou email incorretos";
          header('location:Logar.php');

          }*/
        }
    }
?>