<?php 
include 'config.php';



$pessoa = new \src\Modelo\Pessoa();

$pessoa->nome = "luiz";
$pessoa->hobby = "teste";
$pessoa->datanacimento="1974-01-01";
$pessoa->datainclusao="current_date";


$pessoa->update($pessoa->to_array());