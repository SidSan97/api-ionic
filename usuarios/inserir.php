<?php

require_once('../conexao.php');

$postJson = json_decode(file_get_contents('php://input'), true);

$nome = $postJson['nome'];
$email = $postJson['email'];
$cpf = $postJson['cpf'];
$senha = $postJson['senha'];
$nivel = $postJson['nivel'];

$sql = "INSERT INTO usuarios (nome, email, cpf, senha, nivel) VALUES (
	'" . $nome . "', 
	'" . $email . "', 
	'" . $cpf . "', 
	'" . $senha . "', 
	'" . $nivel . "'
)";

if($conexao->query($sql) === TRUE){
	echo json_encode(array('mensagem' => 'tudo certo'));
	exit;
}
else {
	echo json_encode(array('mensagem' => 'n funcinou'));
	exit;
}
