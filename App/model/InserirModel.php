<?php

namespace App\Model;

class InserirModel extends Conexao
{
    public function inserirNoBD($json)
    {
        $nome  = $json['nome'];
        $email = $json['email'];
        $cpf   = $json['cpf'];
        $senha = $json['senha'];
        $nivel = $json['nivel'];
    }
}