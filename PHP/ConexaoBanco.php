<?php

$bco = 'funcionario';
$usuario = 'root';
$senha = '';

try
{
    $connect = new PDO("mysql:host=localhost; dbname=$bco", "$usuario", "$senha");
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect->exec("set names utf8");
}
catch (PDOException $erro)
{
    echo "Erro na conexão:" . $erro->getMessage();
}
    
?>
