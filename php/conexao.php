<?php

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

?>