<?php

namespace App\Model;

class InserirModel extends Conexao
{
    public function inserirNoBD($json)
    {
        $modelo = $json['modelo'];
        $cor    = $json['cor'];
        $ano    = $json['ano'];
        $placa  = $json['placa'];
    }
}