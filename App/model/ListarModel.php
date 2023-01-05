<?php

namespace App\Model;
include('App/model/conexao.php');
header('Content-Type: application/json; charset=utf-8');

class ListarModel extends Conexao
{
    public function listarTudo()
    {
        $sql = "SELECT * FROM usuarios";
        $stmt = Conexao::connect()->prepare($sql);

        if(($stmt->execute()) and ($stmt->rowCount() != 0))
        {
            $dados = $stmt->fetchAll();

            $json = json_encode(['status' => 200, 'dados' => $dados]);
            //$json = base64_encode($json);
echo $json; 
die;
            //return $json;
        }
        else
            die("erro");
    }
}