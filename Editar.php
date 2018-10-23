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
    $name = $email = $senha = $erro = "";

    $sql = "UPDATE usuarios SET";
    //Checando se o formulario foi preenchido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if ($_POST["nome"] != "") {
                    $name = $_POST["nome"];
                    $sql = $sql . " user_nome = '$name',";
          }
        if ($_POST["email"] != "") {
                    $email = $_POST["email"];
                    $sql = $sql . " user_email = '$email',";
          }
        if ($_POST["senha1"] != "" || $_POST["senha2"] != "") {
                    $senha = md5($_POST["senha1"]);
                    $sql = $sql . " user_senha = '$senha'";
          }
        
            
            //Inserir dados dentro do banco de dados
            $sql = $sql . " WHERE user_email = '$email'";

            if ($conn->query($sql) === TRUE) {
                $_SESSION['erro'] = "Dados alterados com sucesso";
                header('Location: User.php');   
            } else {
                $_SESSION['erro'] = "Falha em alterar informações, tente  novamente mais tarde" . $conn->error;
                header('Location: User.php');
            }
        }

        $conn->close();
        ?>