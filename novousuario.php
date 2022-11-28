<?php

require_once('conexao.php');

$nome_completo = $_POST['nome_completo'];
$cpf = $_POST['cpf'];
$data_de_nascimento = $_POST['data_de_nascimento'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$login = $_POST['login'];
$senha = $_POST['senha'];

$selectproximo = "SELECT count(id)+1 FROM login";
$queryselect = pg_execute($conexao, $selectproximo);
$ultimo = pg_fetch_row($queryselect);

$insertusuario = "INSERT INTO usuario (senha, nome_completo) VALUES ('$senha', '$nome_completo')";
$queryusuario = pg_execute($conexao, $insertusuario);

$insertlogin = "INSERT INTO login (id, login, senha, usuario) VALUES ($ultimo[0], '$nome_completo', '$cpf', '$data_de_nascimento',
'$rua', '$numero','$complemento','$bairro', '$login', '$senha')";
$querylogin = pg_execute($conexao, $insertlogin);

header("location: lista.php");

?>