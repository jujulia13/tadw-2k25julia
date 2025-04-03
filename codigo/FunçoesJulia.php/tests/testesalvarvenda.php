<?php

require_once "../conexao.php";
require_once "../funcoes.php";

$idcliente = 1;
$idproduto = 1;
$valor_total = 100.00;
$data = "2025-03-25"; 

salvarVenda($conexao,$idcliente, $idproduto, $valor_total, $data);
?>