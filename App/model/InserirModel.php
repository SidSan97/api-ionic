<?php

namespace App\Model;
require_once('App/model/conexao.php');
header('Content-Type: application/json; charset=utf-8');

class InserirModel extends Conexao
{
    public function inserirNoBD($json)
    {
        $nome  = $json['nome'];
        $email = $json['email'];
        $cpf   = $json['cpf'];
        $senha = $json['senha'];
        $nivel = $json['nivel'];
        /*$nome  = "Mike";
        $email = "mike@email.com";
        $cpf   = "145.987.463-47";
        $senha = "mike123";
        $nivel = "operador";*/

        $conn = $this->connect();

        $sql = "INSERT INTO usuarios VALUES (default, :nome, :email, :cpf, :senha, :nivel)";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':senha', $senha);
        $stmt->bindParam(':nivel', $nivel);

        if($stmt->execute()) {
            $json = json_encode(['status' => 200, 'dados' => "dados inseridos com sucesso"]);
            echo $json;
            exit;
        }
        else {
            $json = json_encode(['status' => 300, 'dados' => "dados não inseridos"]);
            echo $json;
            exit;
        }
    }
    
}