<?php
session_start();
error_reporting(0);

$sessao = $_SESSION['nivel_acesso'];

if ($sessao == "1") {
    header("Location: index-professor.php");
}
else if ($sessao != "1" && $sessao != "") {
    header("Location: index-local_user.php");
}

?>