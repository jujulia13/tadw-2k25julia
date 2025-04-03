<?php

require_once "../conexao.php";
require_once "../funcoes.php";

$nome= "dsh";
$tipo= "jw";
$preco_compra= "88";
$preco_venda= "99";
$margem_lucro= "999";
$quantidade= "3";

salvarProduto($conexao, $nome, $tipo, $preco_compra, $preco_venda, $margem_lucro, $quantidade);
?>