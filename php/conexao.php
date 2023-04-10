<?php

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

?>