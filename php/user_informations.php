<?php

$host = "aws.connect.psdb.cloud";
$username = "u106o8nuzc0cppla7yl0";
$password = "pscale_pw_uIRcZCthnwbovWH2KF6INo9XfsnXKEBEMw1SbAAFurY";
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