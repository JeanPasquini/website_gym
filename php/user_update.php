<?php
error_reporting(0);

$tabela_do_email = $_POST['tabela_do_email'];

$host = "aws.connect.psdb.cloud";
$username = "mezjollr1fu30nce3rpo";
$password = "pscale_pw_SLhhghf8JQp9kXBm70Cmc7FTNMlNOqKrcqUZfFC2lYT";
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