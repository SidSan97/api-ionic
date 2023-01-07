<?php

namespace App\Model;
require_once('App/model/conexao.php');

header('Content-Type: application/json; charset=utf-8');

class EditarModel extends Conexao
{
    public function editarDados($json)
    {
        $nome  = $json['nome'];
        $email = $json['email'];
        $cpf   = $json['cpf'];
        $senha = $json['senha'];
        $nivel = $json['nivel'];
        $id    = $json['id'];

        $sql = 'UPDATE usuarios SET nome = ?, email = ?, cpf = ?, senha = ?, nivel = ? WHERE id = ?';
        $stmt= Conexao::connect()->prepare($sql);

        if($stmt->execute([$nome, $email, $cpf, $senha, $nivel, $id]))
        {
            $json = json_encode(['status' => 200, 'dados' => "dados editados com sucesso"]);
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