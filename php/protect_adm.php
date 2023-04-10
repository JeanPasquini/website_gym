<?php

if (!isset($_SESSION)) {
    session_start();

   
    $tb_nivel_acesso= $_SESSION['nivel_acesso'];

    if ($tb_nivel_acesso != "1"){
        die("Você não pode acessar esta página porque não é um administrador.<p><a href=\"index-aluno.php\">Entrar</a></p>");
    } 
}

if (!isset($_SESSION['id'])){
    die("Você não pode acessar esta página porque não está logado.<p><a href=\"index-aluno.php\">Entrar</a></p>");
}

?>