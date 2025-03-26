<?php
require_once "conexao.php";
require_once "funcoes.php";

$id = $_GET['id'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];

if ($id == 0) {
    salvarCliente($conexao, $nome, $cpf, $endereco);
} else {
    // echo "atualizar";
    $sql = "UPDATE tb_cliente SET nome='$nome', cpf='$cpf', endereco='$endereco' WHERE idcliente=$id";
}
mysqli_query($conexao, $sql);

