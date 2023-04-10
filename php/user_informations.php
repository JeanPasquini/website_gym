<?php

$host = "aws.connect.psdb.cloud";
$username = "y8p9if3v553u850ab821";
$password = "pscale_pw_EiqefbjOxbSFxRyAdcsNDp0a3wJNY5UHw4TO0X8UNJ5";
$dbname = "db_login_alunos";

$mysqli = new mysqli($host, $username, $password, $dbname);

$tb_id= $_SESSION['id'];

// Prepara a consulta SQL
$sql = "SELECT * FROM tb_user WHERE id = '$tb_id'";

// Executa a consulta SQL
$resultado = mysqli_query($mysqli, $sql);

// Exibe o resultado
while ($registro = mysqli_fetch_assoc($resultado)) {
    $tb_email = $registro['email'] . '<br>';
    $tb_senha = $registro['senha'] . '<br>';
    $tb_nivel_acesso = $registro['nivel_acesso'] . '<br>';
    $tb_nome_fantasia = $registro['nome_fantasia'] . '<br>';
}

?>