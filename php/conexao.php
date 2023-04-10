<?php

$host = "aws.connect.psdb.cloud";
$username = "y8p9if3v553u850ab821";
$password = "pscale_pw_EiqefbjOxbSFxRyAdcsNDp0a3wJNY5UHw4TO0X8UNJ5";
$dbname = "db_login_alunos";

// Cria a conexão
$mysqli = new mysqli($host, $username, $password, $dbname);

// Verifica se há erros na conexão
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

?>