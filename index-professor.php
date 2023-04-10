<?php

include('php/protect_adm.php');
include('php/user_informations.php');
include('php/user_update.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style_sobre.css">

</head>

<body>
    <h1>
    Seu id é: <?php echo $tb_id; ?>
    </h1>
    <p class ="email">
    Seu email é: <?php echo $tb_email; ?>
    sua senha é: <?php echo $tb_senha; ?>
    seu nivel de acesso é: <?php echo $tb_nivel_acesso; ?>
    </p>

    <form action="" method ="POST">

        <input type="text" name="tabela_do_email">
        <input type="submit" value="Editar">

    </form>

    <p>
        <a href="logout.php">logout</a>
    </p>

</body>
</html>