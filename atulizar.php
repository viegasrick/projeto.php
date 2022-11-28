<?php

require_once('conexao.php');

$qwerty=$_POST ['cpf'];
$select = "SELECT *FROM sistema WHERE cpf='$qwerty'";
$query = pg_exec($conexao, $select);
$linha = pg_fetch_row($query);


?>






<!DOCTYPE html>
<html lang="pt/br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cadatrados</title>
</head>

<body>

<form action="" id="atulizar">
    <center>
<h1>Atulizar dados</h1>

<b> id: </b>
<input type="text" name="id" value="<?php echo $linha[0];?>" readonly> <br>

<b>Nome Completo: </b>
<input type="text" name="nome_completo" value="<?php echo $linha[1];?>"> <br>

<b> CPF: </b>
<input type="text" name="cpf" value="<?php echo $linha[2];?>" readonly><br>

<b>Data de Nascimento: </b>
<input type="text" name="data_de_nascimento" value="<?php echo $linha[3];?>"> <br>

<b> Rua:</b>
<input type="text" name="rua" value="<?php echo $linha[4];?>"> <br>

<b>Numero: </b>
<input type="text" name="numero" value="<?php echo $linha[5];?>"> <br>

<b>Complemento: </b>
<input type="text" name="complemento" value="<?php echo $linha[6];?>"> <br>

<b>Bairro: </b>
<input type="text" name="bairro" value="<?php echo $linha[7];?>"> <br>

<b>Login: </b>
<input type="text" name="login" value="<?php echo $linha[8];?>"> <br>

<b>Senha: </b>
<input type="text" name="senha" value="<?php echo $linha[9];?>"> <br>

<input type="submit" value="Salvar">
</center>

</form>
    

</body>

</html>
