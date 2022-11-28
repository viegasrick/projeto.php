<?php

$host = "localhost";
$dbname = "fpb2";
$port = "5432";
$user = "postgres";
$password = "102030";

if(!@($conexao = pg_connect("host=".$host." dbname=".$dbname." port=".$port." user=".$user." password=".$password)))
{
    print "Banco de dados está temporariamente fora do ar, volte novamente mais tarde ou 
    entre em contato com o administrador.";
    die;
}

function db_connect()
{
    $PDO = new PDO('pgsql:host=localhost; dbname=fpb2; port=5432; user=postgres; password=102030')
    or die ('Conexão falhou');
    return $PDO;
}

?>