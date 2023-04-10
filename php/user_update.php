<?php
error_reporting(0);

$tabela_do_email = $_POST['tabela_do_email'];

$host = "aws.connect.psdb.cloud";
$username = "u106o8nuzc0cppla7yl0";
$password = "pscale_pw_uIRcZCthnwbovWH2KF6INo9XfsnXKEBEMw1SbAAFurY";
$dbname = "db_login_alunos";

// Cria a conexão
$mysqli = new mysqli($host, $username, $password, $dbname);

// Verifica se há erros na conexão
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if ($tabela_do_email != ""){

$tb_id= $_SESSION['id'];

$result_email = "UPDATE tb_user SET email = '$tabela_do_email' WHERE id = '$tb_id'";
$resultado_email = mysqli_query($mysqli, $result_email);
}

?>