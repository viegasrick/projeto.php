<?php

require_once('conexao.php');

$login = $_POST['login'];
$senha = $_POST['senha'];

$select = "SELECT login, senha FROM sistema WHERE login = '$login' AND senha = '$senha'";
$query = pg_exec($conexao, $select);
$linha = pg_fetch_row($query);

if($login == $linha[0] && $senha == $linha[1])
{
    session_start();
    $_SESSION['login'] = $linha[0];
    header("location: bemvindo.php");
}
else
{
    header("location: falha.php");
}

?>