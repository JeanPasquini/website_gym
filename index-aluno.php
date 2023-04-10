<?php 
include ('php/conexao.php');
include ('php/logon.php');
include ('php/user_conected.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="css/style_login.css">

</head>
<body>
    
<header>    

</header>
    
<main>

    <div class="banner">
        <div class="login">

            <div class="logo">
                <img src="images/logo.png" alt="">
            </div>

            <form action="" method ="POST">

            <div class="login_display">
                <h1>Login</h1>
            </div>

            <div class="falha_login">
                <h1>
                    <?php echo $mensagem; ?>
                </h1>
            </div>

            <div class="login_display">
                <input type="text" placeholder="Usuário" class="input_login" name="usuario">
            </div>

            <br>

            <div class="login_display">
                <input type="password" placeholder="Senha" class="input_login" name="senha">
            </div>


            <div class="button1_center">
                <br>
                    <button type="submit"><span></span>Entrar</button>
                <br>
            </div>

            </form>
            
            <div class="button2_center">
                <a href="index.php">
                    <button><span></span>Cancelar</button>
                </a>
            </div>
                
        </div>
    </div>

</main>
    
<Footer>
    
</Footer>    

</body>
</html>