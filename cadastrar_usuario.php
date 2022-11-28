<?php

$url = file_get_contents('http://enderecos.metheora.com/api/cidade/4964/bairros');
$json = json_decode($url);

?>



<!DOCTYPE html>
<html lang="pt/br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastrar Usuario</h1>
    <form id="cadastro" action="novousuario.php" method="post">

        Nome: <input type="text"  name="nome_completo"><br> <br>
        Cpf: <input type="number" name="cpf"> <br> <br>
        Data de Nascimento: <input type="date" name="data_de_nascimento"> <br> <br>
        Rua: <input type="text" name="rua"> <br> <br>
        Numero: <input type="number" name="numero"> <br> <br>
        Complemento: <input type="text" nome="complemento"> <br> <br>

        <select name="bairro">
            <?php
            foreach($json as $bairro) {
            ?> <option value="<?php echo $bairro->Id; ?>"><?php echo $bairro->Nome;?></option> <?php } ?>
        </select> <br> <br>

        Login: <input type="text" name="login"> <br>
        Senha: <input type="password" name="senha">


    </form>
</body>
</html>