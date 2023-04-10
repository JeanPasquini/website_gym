<?php 
    if(isset($_POST['usuario']) || isset($_POST['senha'])) {

        if(strlen($_POST['usuario']) == 0){
            $mensagem = "Preencha seu usuário";
        } else if(strlen($_POST['senha']) == 0){
            $mensagem = "Preencha sua senha";
        } else {

            $usuario = $mysqli->real_escape_string($_POST['usuario']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM tb_user WHERE usuario = '$usuario' AND senha = '$senha'";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do codigo SQL: " . $mysqli->error);

            $quantidade = $sql_query->num_rows;

            if($quantidade == 1){

                $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nivel_acesso'] = $usuario['nivel_acesso'];
                $_SESSION['usuario'] = $usuario['usuario'];

                $tb_nivel_acesso = $_SESSION['nivel_acesso'];

                if ($tb_nivel_acesso == "1"){
                header("Location: index-professor.php");
                }
                else{
                    header("Location: index-local_user.php");
                }

            } else {
                $mensagem = "Usuário ou senha incorretas";
            }

        }
    }
?>