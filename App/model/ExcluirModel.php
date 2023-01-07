<?php

namespace App\Model;
require_once('App/model/conexao.php');

header('Content-Type: application/json; charset=utf-8');

class ExcluirModel extends Conexao
{
    public function editarDados($id)
    {
        $conn = $this->connect();

        $sql = "DELETE FROM usuarios WHERE id=?";

        $stmt= $conn->prepare($sql);

        if($stmt->execute([$id]))
        {
            $json = json_encode(['status' => 200, 'dados' => "dados excluidos com sucesso"]);
            echo $json;
            exit;
        }
        else
        {
            $json = json_encode(['status' => 301, 'dados' => "erro ao excluir dados"]);
            echo $json;
            exit;
        }
    }
}