<?php

require_once "../conexao.php";
require_once "../funcoes.php";

$nome = "fulano";
$email ="hw@gmail.com";
$senha = "000";

salvarUsuario($conexao, $nome,$email,$senha);
?>