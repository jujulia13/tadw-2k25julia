<?php

require_once "../conexao.php";
require_once "../funcoes.php";

$idcliente = 1;
$nome = "Fulanooooo";
$tipo = "aligum";
$preco_compra = "30";
$preco_venda = "30";
$margem_lucro = "2";
$quantidade = "2";


editarProduto($conexao, $nome, $tipo, $preco_compra, $preco_venda, $margem_lucro, $quantidade );
?>