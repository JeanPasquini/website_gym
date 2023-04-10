<?php

include('php/protect.php');
include('php/user_informations.php')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style_user_local.css">

</head>
<body>
<header>
    <p>
        <?php echo $tb_nome_fantasia;?>
    </p>
</header>

<main>
    <div class ="banner">
        <div class="bloco_geral">
            <div class="bloco_geral_info">
                <div class="bloco_info">
                    <div class="info">
                        <p>EMAIL:</p>
                    </div>
                </div>
                <div class="bloco_info">
                    <div class="info">
                        <p>SENHA:</p>
                    </div>
                </div>
                <div class="bloco_info">
                    <div class="info">
                        <p>NÍVEL DE ACESSO:</p>
                    </div>
                </div>
            </div>
            <div class="bloco_geral_dados">
                <div class="bloco_dados">
                    <div class="dados">
                        <?php echo $tb_email;?>
                    </div>
                </div>
                <div class="bloco_dados">
                    <div class="dados">
                        <?php echo $tb_senha;?>
                    </div>
                </div>
                <div class="bloco_dados">
                    <div class="dados">
                        <?php echo $tb_nivel_acesso;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<footer>
    <p>
        <a href="logout.php">logout</a>
    </p>
</footer>

<script src="js/script-update_page.js"></script>
</body>
</html>