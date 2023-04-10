<?php

$host = "aws.connect.psdb.cloud";
$username = "23jmef4iu9rtjol4wp89";
$password = "pscale_pw_aIx1CMAVCAzXtN1TfN2DTKgMxSxq70OEaW0uLhn2hdg";
$dbname = "db_login_alunos";

// Cria a conexão
$mysqli = new mysqli($host, $username, $password, $dbname);

// Verifica se há erros na conexão
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

?>