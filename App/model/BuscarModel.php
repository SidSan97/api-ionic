<?php

namespace App\Model;
require_once('App/model/conexao.php');
header('Content-Type: application/json; charset=utf-8');

class BuscarModel extends Conexao
{
    public function buscarDado($dado)
    {
        $sql = "SELECT * FROM usuarios WHERE nome LIKE '%$dado%' OR cpf LIKE '%$dado%' ORDER BY id DESC";
        $stmt = Conexao::connect()->prepare($sql);

        if(($stmt->execute()) and ($stmt->rowCount() != 0))
        {
            $dados = $stmt->fetchAll();

            $json = json_encode(['status' => 200, 'dados' => $dados]);
            //$json = base64_encode($json);
            echo $json; 

            //return $json;
        }
        else {
            $json = json_encode(['status' => 404, 'dados' => "dados não encontrados"]);
            echo $json;
        }
    }
}

