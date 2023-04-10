<?php

$host = "aws.connect.psdb.cloud";
$username = "o2qhbtg7joo20b2x2au6";
$password = "pscale_pw_mT9C7rlGybOFSTDi8A0wDw9mPXdiCDIsZZYQlXRW9DG";
$dbname = "db_login_alunos";

// Cria a conexão
$mysqli = new mysqli($host, $username, $password, $dbname);

// Verifica se há erros na conexão
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

?>