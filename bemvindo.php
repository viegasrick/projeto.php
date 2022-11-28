<?php
session_start();
require_once('conexao.php');

$login = $_SESSION['login'];

$select = "SELECT nome_completo,login FROM sistema WHERE login = '$login'";

$query = pg_exec($conexao, $select);
$linha = pg_fetch_row($query);
$nome = $linha[0];

$consulta = db_connect()->prepare("SELECT nome_completo FROM sistema ORDER BY nome_completo");
$consulta->execute();
$usuarios = $consulta->fetchall(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="pt/br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-Vindo</title>
</head>
<body>
    <center>
        <h1>Bem-Vindo <?php echo $nome; ?></h1>
        <nav>
            <a href="lista.php">Usuários Cadastrados</a>
            <a href="cadastrar_usuario.php">Cadastrar Novos Usuários</a>
            <a href="exit.php">Sair</a>
        </nav>
    </center>
</body>
</html>