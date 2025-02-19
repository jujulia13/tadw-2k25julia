<?php
require_once "./conexao.php";

$id = $_GET['id'];

// DELECT FROM produto WHERE idproduto =2;
$sql = "DELECT FROM produto WHERE idproduto = $id";

mysqli_query($conexao, $slq);

header("Location: ./listarProduto.php");
?>